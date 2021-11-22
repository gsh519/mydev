@csrf
<!-- <div class="work-icon_img">
  <label for="icon_img">アイコン画像</label>
  <input type="file" name="icon_img" id="icon_img" value="{{ $user->icon_img }}">
  <img id="preview" width="200px">
</div> -->
<label for="icon_img">
  <span class="filelabel" title="ファイルを選択">
    <img src="/images/default.png" alt="アイコン画像" width="150" height="150">
  </span>
  <p class="filelabel-text">アイコンを変更</p>
  <input type="file" name="icon_img" id="icon_img" required value="{{ $user->icon_img }}">
</label>
<div class="work-name">
  <label for="name">ユーザー名</label>
  <input type="text" name="name" id="name" required value="{{ $user->name }}">
</div>
<div class="work-email">
  <label for="email">メールアドレス</label>
  <input type="text" name="email" id="email" required value="{{ $user->email }}">
</div>
<div class="work-comment">
  <label for="comment">簡単な自己紹介</label>
  <textarea placeholder="ひとこと" type="text" name="comment" id="comment" required>{{ $user->comment }}</textarea>
</div>
