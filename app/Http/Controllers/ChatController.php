<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        $users = User::where('user_id', '!=', auth()->id())->get();

        return view('chat.index', compact('users'));
    }

    public function show(User $user)
    {
        $messages = Message::where(function ($query) use ($user) {
            //->where('age', '>', 18)
            //->where('gender', 'male')
            //上記の例では、ageが18より大きくかつgenderが男性であるレコードのみが結果に含まれるようになります。
            $query->where('sender_id', auth()->id())
                ->where('receiver_id', $user->user_id);
        })->orWhere(function ($query) use ($user) {
            $query->where('sender_id', $user->user_id)
                ->where('receiver_id', auth()->id());
        })->orderBy('created_at', 'asc')->get();

        return view('chat.show', compact('user', 'messages'));
    }

    public function sendMessage(Request $request, User $user)
    {
        $message = Message::create([
            'content' => $request->input('content'),
            'sender_id' => auth()->user()->user_id,
            'receiver_id' => $user->user_id,
        ]);

        return redirect()->route('chat.show', $user,$message);
    }

    public function editMessage(User $user, Message $message)
    {
        if ($message->sender_id !== auth()->id()) {
            abort(403, 'You are not authorized to edit this message.');
        }

        return view('chat.edit', compact('user', 'message'));
    }

    public function updateMessage(Request $request, User $user, Message $message)
    {
        if ($message->sender_id !== auth()->id()) {
            abort(403, 'You are not authorized to edit this message.');
        }

        $message->update([
            'content' => $request->input('content'),
        ]);

        return redirect()->route('chat.show', $user);
    }

    public function deleteMessage(User $user, Message $message)
    {
        if ($message->sender_id !== auth()->id()) {
            abort(403, 'You are not authorized to delete this message.');
        }

        $message->delete();

        return redirect()->route('chat.show', $user);
    }
}
