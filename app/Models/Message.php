<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Message extends Model
{
    use HasFactory,Notifiable;
    protected $fillable = ['content', 'user_id','sender_id','receiver_id'];

    //public function user()
    //{
    //   return $this->belongsTo(User::class);
    //}
        //ここを上のようにしていたから$message->sender->nameがうまく作動しなかった
    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }
}
