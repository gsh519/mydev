<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index()
    {
        $works = [
            (object) [
                'id' => 1,
                'cover_img' => 'https://placehold.jp/300x167.png',
                'title' => 'タイトル1',
                'icon_img' => 'https://placehold.jp/42x42.png',
                'user' => (object) [
                    'name' => 'ユーザー名1',
                    'desc' => 'ユーザー説明1'
                ]
            ],
            (object) [
                'id' => 2,
                'cover_img' => 'https://placehold.jp/300x167.png',
                'title' => 'タイトル2',
                'icon_img' => 'https://placehold.jp/42x42.png',
                'user' => (object) [
                    'name' => 'ユーザー名2',
                    'desc' => 'ユーザー説明2'
                ]
            ],
            (object) [
                'id' => 3,
                'cover_img' => 'https://placehold.jp/300x167.png',
                'title' => 'タイトル3',
                'icon_img' => 'https://placehold.jp/42x42.png',
                'user' => (object) [
                    'name' => 'ユーザー名3',
                    'desc' => 'ユーザー説明3'
                ]
            ],
            (object) [
                'id' => 4,
                'cover_img' => 'https://placehold.jp/300x167.png',
                'title' => 'タイトル4',
                'icon_img' => 'https://placehold.jp/42x42.png',
                'user' => (object) [
                    'name' => 'ユーザー名4',
                    'desc' => 'ユーザー説明4'
                ]
            ],
            (object) [
                'id' => 5,
                'cover_img' => 'https://placehold.jp/300x167.png',
                'title' => 'タイトル5',
                'icon_img' => 'https://placehold.jp/42x42.png',
                'user' => (object) [
                    'name' => 'ユーザー名5',
                    'desc' => 'ユーザー説明5'
                ]
            ],
            (object) [
                'id' => 6,
                'cover_img' => 'https://placehold.jp/300x167.png',
                'title' => 'タイトル6',
                'icon_img' => 'https://placehold.jp/42x42.png',
                'user' => (object) [
                    'name' => 'ユーザー名6',
                    'desc' => 'ユーザー説明6'
                ]
            ],
            (object) [
                'id' => 7,
                'cover_img' => 'https://placehold.jp/300x167.png',
                'title' => 'タイトル7',
                'icon_img' => 'https://placehold.jp/42x42.png',
                'user' => (object) [
                    'name' => 'ユーザー名7',
                    'desc' => 'ユーザー説明7'
                ]
            ],
            (object) [
                'id' => 8,
                'cover_img' => 'https://placehold.jp/300x167.png',
                'title' => 'タイトル8',
                'icon_img' => 'https://placehold.jp/42x42.png',
                'user' => (object) [
                    'name' => 'ユーザー名8',
                    'desc' => 'ユーザー説明8'
                ]
            ],
        ];
        return view('works.index', ['works' => $works]);
    }
}
