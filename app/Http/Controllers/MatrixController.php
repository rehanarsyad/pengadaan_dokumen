<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatrixController extends Controller
{
    public function index()
    {
        return view('admin.matrix.index');
    }
}
