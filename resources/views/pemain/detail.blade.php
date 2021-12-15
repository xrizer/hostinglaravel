@extends('template')
@section('main')

        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Nama pemain</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">klub asal</th>
              <th>action</th>
            </tr>
          </thead>
          <tbody>
                            <tr>
                                <td>{{$orang->nama}}</td>
                                <td>{{$orang->jenis_kelamin}}</td>
                                <td>{{$orang->asal_klub}}</td>
                                <td>
                                <button type="button" class="btn btn-success"><a class="text-white" href="/pemain/{{$orang->id}}">Detail</a>
                                </button>
                                </td>
                            </tr>
          </tbody>
        </table>
@endsection
