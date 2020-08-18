<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAuthUser($id)
    {
        $user = User::find($id);

        return response()->json([
            "id" => (string) $user->id,
            "name" => $user->name,
            "email" => $user->email,
            "photoUrl" => "https://i.ibb.co/cYDxzms/photo.png",
        ]);
    }
}
