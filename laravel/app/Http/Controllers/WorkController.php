<?php

namespace App\Http\Controllers;

use App\Work;
use App\Tag;
use App\Http\Requests\WorkRequest;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    //アクセストップページ
    public function home()
    {
        $works = Work::all()->sortByDesc('created_at');
        return view('works.home', ['works' => $works]);
    }

    //記事一覧画面
    public function index()
    {
        $works = Work::all()->sortByDesc('created_at');
        return view('works.index', ['works' => $works]);
    }

    //記事投稿画面表示
    public function create()
    {
        return view('works.create');
    }

    //記事保存処理
    public function store(WorkRequest $request, Work $work)
    {
        $work->fill($request->all());
        $fileName = $request->cover_img->getClientOriginalName();
        $cover_img = $request->file('cover_img')->storeAs('', $fileName, 'public');
        $work->cover_img = $cover_img;
        $work->user_id = $request->user()->id;
        $work->save();

        $request->tags->each(function ($tagName) use ($work) {
            $tag = Tag::firstOrCreate(['tag_name' => $tagName]);
            $work->tags()->attach($tag);
        });

        return redirect()->route('works.index');
    }

    //記事更新画面表示
    public function edit(Work $work)
    {
        return view('works.edit', ['work' => $work]);
    }
}
