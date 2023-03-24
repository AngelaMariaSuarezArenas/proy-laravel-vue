@if($errors->any())
@foreach ($errors->all() as $error)
<div class="alert alert-warning" role="alert">
  This is a warning alert—check it out!
</div>
@endforeach
@endif