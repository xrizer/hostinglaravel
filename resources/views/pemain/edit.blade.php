@extends('template')
@section('main')

<form action="/pemain/{{$orang->id}}/edit" method="POST">
  {{csrf_field()}}
  <div class="form-row ml-4">
    <div class="form-group col-md-6">
      <label for="inputEmail4">nama</label>
      <input name="nama" type="text" class="form-control" id="inputEmail4" placeholder="Email" value="{{$orang->nama}}">
    </div>
  </div>

  <div class="form-row ml-4">
    <div class="form-group col-md-6">
      <label for="inputEmail4">jenis_kelamin</label>
      <input name="jenis_kelamin" type="text" class="form-control" id="inputEmail4" placeholder="Email" value="{{$orang->jenis_kelamin}}">
    </div>
  </div>

  <div class="form-row ml-4">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Asal Club  </label>
      <input name="asal_klub" type="text" class="form-control" id="inputEmail4" placeholder="Email" value="{{$orang->asal_klub}}">
    </div>
  </div>

  <button type="submit" class="btn btn-primary ml-4">Edit</button>
</form>

@endsection
