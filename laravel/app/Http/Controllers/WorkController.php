<?php

namespace App\Http\Controllers;

use App\Work;
use App\Tag;
use App\Image;
use App\Http\Requests\WorkRequest;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function home()
    {
        // ダミーデータ
        $works = [
            (object) [
                'id' => 1,
                'title' => 'タイトル１',
                'cover_img' => 'https://placehold.jp/300x167.png',
                'icon_img' => 'https://placehold.jp/42x42.png',
                'user' => (object) [
                    'name' => 'ユーザー1',
                    'desc' => '説明1',
                ]
            ],
            (object) [
                'id' => 2,
                'title' => 'タイトル2',
                'cover_img' => 'https://placehold.jp/300x167.png',
                'icon_img' => 'https://placehold.jp/42x42.png',
                'user' => (object) [
                    'name' => 'ユーザー2',
                    'desc' => '説明2',
                ]
            ],
            (object) [
                'id' => 3,
                'title' => 'タイトル3',
                'cover_img' => 'https://placehold.jp/300x167.png',
                'icon_img' => 'https://placehold.jp/42x42.png',
                'user' => (object) [
                    'name' => 'ユーザー3',
                    'desc' => '説明3',
                ]
            ],
            (object) [
                'id' => 4,
                'title' => 'タイトル4',
                'cover_img' => 'https://placehold.jp/300x167.png',
                'icon_img' => 'https://placehold.jp/42x42.png',
                'user' => (object) [
                    'name' => 'ユーザー4',
                    'desc' => '説明4',
                ]
            ],
            (object) [
                'id' => 5,
                'title' => 'タイトル5',
                'cover_img' => 'https://placehold.jp/300x167.png',
                'icon_img' => 'https://placehold.jp/42x42.png',
                'user' => (object) [
                    'name' => 'ユーザー5',
                    'desc' => '説明5',
                ]
            ],
            (object) [
                'id' => 6,
                'title' => 'タイトル6',
                'cover_img' => 'https://placehold.jp/300x167.png',
                'icon_img' => 'https://placehold.jp/42x42.png',
                'user' => (object) [
                    'name' => 'ユーザー6',
                    'desc' => '説明6',
                ]
            ],
            (object) [
                'id' => 7,
                'title' => 'タイトル7',
                'cover_img' => 'https://placehold.jp/300x167.png',
                'icon_img' => 'https://placehold.jp/42x42.png',
                'user' => (object) [
                    'name' => 'ユーザー7',
                    'desc' => '説明7',
                ]
            ],
            (object) [
                'id' => 8,
                'title' => 'タイトル8',
                'cover_img' => 'https://placehold.jp/300x167.png',
                'icon_img' => 'https://placehold.jp/42x42.png',
                'user' => (object) [
                    'name' => 'ユーザー8',
                    'desc' => '説明8',
                ]
            ],
            (object) [
                'id' => 9,
                'title' => 'タイトル9',
                'cover_img' => 'https://placehold.jp/300x167.png',
                'icon_img' => 'https://placehold.jp/42x42.png',
                'user' => (object) [
                    'name' => 'ユーザー9',
                    'desc' => '説明9',
                ]
            ],
        ];
        // $works = Work::all()->sortByDesc('created_at');
        return view('works.home', ['works' => $works]);
    }

    public function index()
    {
        // ダミーデータ
        $works = [
            (object) [
                'id' => 1,
                'title' => 'タイトル１',
                'cover_img' => 'https://placehold.jp/300x167.png',
                'icon_img' => 'https://placehold.jp/42x42.png',
                'user' => (object) [
                    'name' => 'ユーザー1',
                    'desc' => '説明1',
                ]
            ],
            (object) [
                'id' => 2,
                'title' => 'タイトル2',
                'cover_img' => 'https://placehold.jp/300x167.png',
                'icon_img' => 'https://placehold.jp/42x42.png',
                'user' => (object) [
                    'name' => 'ユーザー2',
                    'desc' => '説明2',
                ]
            ],
            (object) [
                'id' => 3,
                'title' => 'タイトル3',
                'cover_img' => 'https://placehold.jp/300x167.png',
                'icon_img' => 'https://placehold.jp/42x42.png',
                'user' => (object) [
                    'name' => 'ユーザー3',
                    'desc' => '説明3',
                ]
            ],
            (object) [
                'id' => 4,
                'title' => 'タイトル4',
                'cover_img' => 'https://placehold.jp/300x167.png',
                'icon_img' => 'https://placehold.jp/42x42.png',
                'user' => (object) [
                    'name' => 'ユーザー4',
                    'desc' => '説明4',
                ]
            ],
            (object) [
                'id' => 5,
                'title' => 'タイトル5',
                'cover_img' => 'https://placehold.jp/300x167.png',
                'icon_img' => 'https://placehold.jp/42x42.png',
                'user' => (object) [
                    'name' => 'ユーザー5',
                    'desc' => '説明5',
                ]
            ],
            (object) [
                'id' => 6,
                'title' => 'タイトル6',
                'cover_img' => 'https://placehold.jp/300x167.png',
                'icon_img' => 'https://placehold.jp/42x42.png',
                'user' => (object) [
                    'name' => 'ユーザー6',
                    'desc' => '説明6',
                ]
            ],
            (object) [
                'id' => 7,
                'title' => 'タイトル7',
                'cover_img' => 'https://placehold.jp/300x167.png',
                'icon_img' => 'https://placehold.jp/42x42.png',
                'user' => (object) [
                    'name' => 'ユーザー7',
                    'desc' => '説明7',
                ]
            ],
            (object) [
                'id' => 8,
                'title' => 'タイトル8',
                'cover_img' => 'https://placehold.jp/300x167.png',
                'icon_img' => 'https://placehold.jp/42x42.png',
                'user' => (object) [
                    'name' => 'ユーザー8',
                    'desc' => '説明8',
                ]
            ],
            (object) [
                'id' => 9,
                'title' => 'タイトル9',
                'cover_img' => 'https://placehold.jp/300x167.png',
                'icon_img' => 'https://placehold.jp/42x42.png',
                'user' => (object) [
                    'name' => 'ユーザー9',
                    'desc' => '説明9',
                ]
            ],
        ];
        // $works = Work::all()->sortByDesc('created_at');
        return view('works.index', ['works' => $works]);
    }

    public function create()
    {
        return view('works.create');
    }

    public function store(WorkRequest $request, Work $work)
    {
        $work->fill($request->all());
        $work->image_file = $request->image()->image_file;
        $work->user_id = $request->user()->id;
        $work->save();

        $request->tags->each(function ($tagName) use ($work) {
            $tag = Tag::firstOrCreate(['tag_name' => $tagName]);
            $work->tags()->attach($tag);
        });

        return redirect()->route('works.index');
    }
}
