<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class OrmController extends Controller
{
    public function getAll()
    {
        $tasks = Task::all();
        return $tasks;
    }
}
