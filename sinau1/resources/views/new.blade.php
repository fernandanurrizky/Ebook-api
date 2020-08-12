@extends('layout/main')

@section ('title' ,'hello geas!')

@section('container')
  <div class="contener">
      <div class="row">
      <div class="col-10">
      <h2 class="mt-3">hay, <?php echo $nama ?? ''; ?>!</h2>
  </div>
  </div>
</div>
@endselection