<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function show(string $name)
    {
        $user = User::where('name', $name)->first();

        $works = $user->works->sortByDesc('created_at');
        return view('users.show', ['user' => $user, 'works' => $works]);
    }

    public function follow(Request $request, string $name)
    {
        $user = User::where('name', $name)->first();
        if ($user->id === $request->user()->id) {
            return abort('404', 'Cannot follow yourself.');
        }

        $request->user()->followings()->detach($user);
        $request->user()->followings()->attach($user);

        return ['name' => $name];
    }

    public function unfollow(Request $request, string $name)
    {
        $user = User::where('name', $name)->first();
        if ($user->id === $request->user()->id) {
            return abort('404', 'Cannot follow yourself.');
        }

        $request->user()->followings()->detach($user);

        return ['name' => $name];
    }

    //ユーザー編集画面表示
    public function edit(string $name)
    {
        $user = User::where('name', $name)->first();
        return view('users.edit', ['user' => $user]);
    }

    //ユーザー編集処理
    public function update(string $name, Request $request)
    {
        $id = Auth::id();
        $user = User::find($id);
        $edit_data = $user->fill($request->all());
        if (is_null($request->icon_img)) {
            $edit_data->save();
        } else {
            $uploadImg = $user->icon_img = $request->file('icon_img');
            $path = Storage::disk('s3')->putFile('/', $uploadImg, 'public');
            $user->icon_img = Storage::disk('s3')->url($path);
            $edit_data->save();
        }
        return redirect()->route('users.show', ['name' => $name]);
    }
}
