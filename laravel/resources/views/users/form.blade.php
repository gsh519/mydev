@csrf
<div class="work-icon_img">
  <label for="icon_img">アイコン画像</label>
  <input type="file" name="icon_img" id="icon_img" value="{{ $user->icon_img }}">
  <img id="preview" width="200px">
</div>
<div class="work-name">
  <label for="name">ユーザー名</label>
  <input type="text" name="name" id="name" required value="{{ $user->name }}">
</div>
<div class="work-email">
  <label for="email">メールアドレス</label>
  <input type="text" name="email" id="email" required value="{{ $user->email }}">
</div>
<div class="work-comment">
  <textarea placeholder="ひとこと" type="text" name="comment" id="comment" required>{{ $user->comment }}</textarea>
</div>
