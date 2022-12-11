<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id = 1)
    {
        return 'User ' . $id;
    }
}
