<?php

namespace App\Http\Controllers;

use App\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function home()
    {
        $works = Work::all()->sortByDesc('created_at');
        return view('works.home', ['works' => $works]);
    }

    public function index()
    {
        $works = Work::all()->sortByDesc('created_at');
        return view('works.index', ['works' => $works]);
    }

    public function create()
    {
        return view('works.create');
    }
}
