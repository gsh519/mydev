@csrf
<div class="work-head">
  <div class="wrapper">
    <div class="work-cover_img">
      <label for="cover_img">
        <span class="cover_label" title="ファイルを選択">
          <i class="fas fa-image"></i>
          カバー画像を設定
        </span>
        <input type="file" name="cover_img" id="cover_img" required value="{{old('cover_img') }}">
      </label>
      <img id="preview" width="200px">
    </div>
    <div class="work-title">
      <input placeholder="タイトル" type="text" name="title" id="title" required value="{{ $work->title ?? old('title') }}">
    </div>
    <div class="work-summary">
      <input placeholder="プロジェクトの概要" type="text" name="summary" id="summary" required value="{{ $work->summary ?? old('summary') }}">
    </div>
    <div class="work-tag">
      <work-tags-input :initial-tags='@json($tagNames ?? [])' :autocomplete-items='@json($allTagNames ?? [])'>
      </work-tags-input>
    </div>
    <div class="work-service_url">
      <textarea placeholder="サービスのURLを入力してください" type="text" name="service_url" id="service_url" required>{{ $work->service_url ?? old('service_url') }}</textarea>
    </div>
    <div class="work-twitter_check">
      <label for="twitter_check">twitterへの投稿を許可しますか？</label>
      <input type="checkbox" name="twitter_check" id="twitter_check" value="on">
    </div>
  </div>
</div>
<div class="work-bottom">
  <div class="wrapper">
    <div class="work-body">
      <textarea placeholder="本文:プロジェクトのビジュアル、ストーリー、成果...何でも残しましょう" type="text" name="body" id="body" required>{{ $work->body ?? old('body') }}</textarea>
    </div>
  </div>
</div>
