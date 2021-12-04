<?php

namespace App\Http\Controllers;

use App\Work;
use App\Tag;
use Carbon\Carbon;
use App\Http\Requests\WorkRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Abraham\TwitterOAuth\TwitterOAuth;

class WorkController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Work::class, 'work');
    }

    //アクセストップページ
    public function home()
    {
        $works = Work::all()->sortByDesc('created_at');
        return view('works.home', ['works' => $works]);
    }

    //記事一覧画面
    public function index()
    {
        //人気の投稿
        $popular_works = Work::withCount('likes')->orderBy('likes_count', 'desc')->get();

        //人気の投稿4件取得
        $carousel_works = Work::withCount('likes')->orderBy('likes_count', 'desc')->take(4)->get();

        //新着順
        $new_works = Work::all()->sortByDesc('created_at');
        //1週間以内に作成された投稿を取得
        $sevendays = Carbon::today()->subDay(7);
        $weekly_works = Work::whereDate('created_at', '>=', $sevendays)->get();
        //今日作られた投稿
        $today = Carbon::today();
        $today_works = Work::whereDate('created_at', $today)->get();
        return view('works.index', ['new_works' => $new_works, 'popular_works' => $popular_works, 'weekly_works' => $weekly_works, 'today_works' => $today_works, 'carousel_works' => $carousel_works]);
    }

    //記事投稿画面表示
    public function create()
    {
        $allTagNames = Tag::all()->map(function ($tag) {
            return ['text' => $tag->tag_name];
        });

        return view('works.create', ['allTagNames' => $allTagNames]);
    }

    //記事保存処理
    public function store(WorkRequest $request, Work $work)
    {
        $work->fill($request->all());
        // 画像処理
        $uploadImg = $work->cover_img = $request->file('cover_img');
        $path = Storage::disk('s3')->putFile('/', $uploadImg, 'public');
        $work->cover_img = Storage::disk('s3')->url($path);
        // 画像処理終了
        $work->user_id = $request->user()->id;
        $work->save();

        $request->tags->each(function ($tagName) use ($work) {
            $tag = Tag::firstOrCreate(['tag_name' => $tagName]);
            $work->tags()->attach($tag);
        });

        if ($request->twitter_check === 'on') {
            $twitter = new TwitterOAuth(
                env('TWITTER_CLIENT_ID'),
                env('TWITTER_CLIENT_SECRET'),
                env('TWITTER_CLIENT_ID_ACCESS_TOKEN'),
                env('TWITTER_CLIENT_ID_ACCESS_TOKEN_SECRET')
            );

            $twitter->post("statuses/update", [
                "status" =>
                '💡新しい記事が投稿されました❗❗' . PHP_EOL .
                    '' . PHP_EOL .
                    '✋' . $work->title . '✨' . PHP_EOL .
                    '' . PHP_EOL .
                    '💻http://mydev-work.herokuapp.com/works/' . $work->id . '/'
            ]);
        }

        return redirect()->route('works.index');
    }

    //記事更新画面表示
    public function edit(Work $work)
    {
        $tagNames = $work->tags->map(function ($tag) {
            return ['text' => $tag->tag_name];
        });

        $allTagNames = Tag::all()->map(function ($tag) {
            return ['text' => $tag->tag_name];
        });

        return view('works.edit', [
            'work' => $work,
            'tagNames' => $tagNames,
            'allTagNames' => $allTagNames,
        ]);
    }

    //記事更新処理
    public function update(WorkRequest $request, Work $work)
    {
        $work->fill($request->all())->save();
        $work->tags()->detach();
        $request->tags->each(function ($tagName) use ($work) {
            $tag = Tag::firstOrCreate(['tag_name' => $tagName]);
            $work->tags()->attach($tag);
        });
        return redirect()->route('works.index');
    }

    //記事削除処理
    public function destroy(Work $work)
    {
        $work->delete();
        return redirect()->route('works.index');
    }

    //記事詳細画面表示
    public function show(Work $work)
    {
        $work_user_id = $work->user->id;
        $other_works = $work->where('user_id', $work_user_id)->get();
        return view('works.show', ['work' => $work, 'other_works' => $other_works]);
    }

    //いいね追加機能
    public function like(Request $request, Work $work)
    {
        $work->likes()->detach($request->user()->id);
        $work->likes()->attach($request->user()->id);

        return [
            'id' => $work->id,
            'countLikes' => $work->count_likes,
        ];
    }


    //いいね削除機能
    public function unlike(Request $request, Work $work)
    {
        $work->likes()->detach($request->user()->id);

        return [
            'id' => $work->id,
            'countLikes' => $work->count_likes,
        ];
    }
}
