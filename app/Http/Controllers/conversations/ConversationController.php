<?php

namespace App\Http\Controllers\conversations;

use App\Http\Controllers\Controller;
use App\Models\Conversation;
use Illuminate\Http\Request;

class ConversationController extends Controller
{
    public function index(Request $request)
    {

        $conversations  = $request->user()->conversations;
        // dd($conversations);
        return view('conversations.index', compact('conversations'));
    }

    public function Show(Conversation $conversation, Request $request)
    {

        $conversations  = auth()->user()->conversations;
        return view('conversations.show', compact('conversation', 'conversations'));
    }
}
