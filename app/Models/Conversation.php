<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Conversation extends Model
{
    protected $fillable = ['last_message_at'];
    protected $dates = [
        'last_message_at'
    ];
    use HasFactory;

    public function users()
    {
        return $this->belongsToMany(User::class)
            ->withPivot('read_at')
            ->oldest();
    }
    public function others()
    {
        return $this->users()->where('user_id', '!=', auth()->id());
    }

    public function messages()
    {
        return $this->hasMany(Message::class)
            ->latest();
    }
}
