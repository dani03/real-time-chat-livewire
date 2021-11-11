<?php

namespace App\Http\Controllers\conversations;

use App\Http\Controllers\Controller;
use App\Models\Conversation;
use Illuminate\Http\Request;

class ConversationController extends Controller
{
    public function index(Request $request)
    {

        $conversations  = auth()->user()->conversations;
        return view('conversations.index', compact('conversations'));
    }

    public function Show(Conversation $conversation)
    {

        $conversations  = auth()->user()->conversations;
        //    dd($conversation);
        return view('conversations.index', compact('conversation', 'conversations'));
    }
}
