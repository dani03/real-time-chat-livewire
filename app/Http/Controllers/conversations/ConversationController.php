<?php

namespace App\Http\Controllers\conversations;

use App\Http\Controllers\Controller;
use App\Models\Conversation;
use Illuminate\Http\Request;

class ConversationController extends Controller
{
    public function index(Request $request)
    {

        $conversations  = $request->user()->conversations()->orderBy('last_message_at', 'desc')->get();
        // dd($conversations);
        return view('conversations.index', compact('conversations'));
    }

    public function Show(Conversation $conversation, Request $request)
    {
        $conversations  = $request->user()->conversations()->orderBy('last_message_at', 'desc')->get();
        return view('conversations.show', compact('conversation', 'conversations'));
    }
}
