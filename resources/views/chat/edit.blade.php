<!-- resources/views/chat/edit.blade.php -->
<h1>Edit Message</h1>

<form method="POST" action="{{ route('chat.update', ['user' => $user, 'message' => $message]) }}">
    @csrf
    @method('PUT')
    <textarea name="content" rows="3">{{ $message->content }}</textarea>
    <button type="submit">Update</button>
</form>
