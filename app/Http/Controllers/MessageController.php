<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        return Message::all();
    }

    public function store()
    {
        request()->validate([
            'message' => 'required',
            'author_id' => 'required'
        ]);

        $author = Author::findOrFail(request('author_id'));

        $message = new Message(['message'=>request('message')]);

        $success = $author->messages()->save($message);

        return ['success' => $success];
    }
}
