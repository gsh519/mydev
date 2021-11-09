@csrf
<div class="work-cover_img">
  <label for="cover_img">カバー画像を設定</label>
  <input type="file" name="cover_img" id="cover_img" value="{{old('cover_img') }}">
  <img id="preview" width="200px">
</div>
<div class="work-title">
  <label for="title">タイトル</label>
  <input type="text" name="title" id="title" required value="{{ $work->title ?? old('title') }}">
</div>
<div class="work-summary">
  <label for="summary">プロジェクトの概要</label>
  <input type="text" name="summary" id="summary" required value="{{ $work->summary ?? old('summary') }}">
</div>
<div class="work-body">
  <textarea placeholder="本文を入力してください" type="text" name="body" id="body" required>{{ $work->body ?? old('body') }}</textarea>
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
