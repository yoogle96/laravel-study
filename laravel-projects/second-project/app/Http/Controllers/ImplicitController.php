<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImplicitController extends Controller
{
    public function getIndex()
    {
        return 'getIndex';
    }

    public function getShow($id)
    {
        return 'getShow: ' . $id;
    }

    public function postProfile()
    {
        return 'postProfile';
    }

    public function getFooBar()
    {
        return 'getFooBar';
    }
}
