<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::whereNotIn('id', [auth()->user()->id])->orderBy('name','asc')->get();

        return view('pages.chat.index', compact('users'));
    }
}
