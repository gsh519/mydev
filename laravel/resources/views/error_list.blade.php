@if ($errors->any())
<div class="error">
  <ul class="error__list">
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
