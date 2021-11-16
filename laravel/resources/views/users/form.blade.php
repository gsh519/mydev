@csrf
<div class="work-cover_img">
  <label for="cover_img">アイコン画像</label>
  <input type="file" name="cover_img" id="cover_img" value="{{old('cover_img') }}">
  <img id="preview" width="200px">
</div>
<div class="work-title">
  <label for="title">ユーザー名</label>
  <input type="text" name="title" id="title" required value="{{ $work->title ?? old('title') }}">
</div>
<div class="work-summary">
  <label for="summary">メールアドレス</label>
  <input type="text" name="summary" id="summary" required value="{{ $work->summary ?? old('summary') }}">
</div>
<div class="work-service_url">
  <textarea placeholder="ひとこと" type="text" name="service_url" id="service_url" required>{{ $work->service_url ?? old('service_url') }}</textarea>
</div>
