<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUsers()
    {
        return response([
            'data' => null,
            'message' => 'Get data success',
            'success' => true,
            'errorCode' => 0,
        ],200);
    }
}
