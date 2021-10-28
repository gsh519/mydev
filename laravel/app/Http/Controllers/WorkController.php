<?php

namespace App\Http\Controllers;

use App\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index()
    {
        $works = Work::all()->sortByDesc('created_at');
        return view('works.index', ['works' => $works]);
    }
}
