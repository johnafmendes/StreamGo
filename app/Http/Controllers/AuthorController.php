<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        return Author::with('messages')->get();
    }

    public function store()
    {
        request()->validate([
            'name' => 'required'
        ]);

        return Author::create([
            'name' => request('name')
        ]);
    }
}
