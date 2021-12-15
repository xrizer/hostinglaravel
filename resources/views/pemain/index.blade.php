@extends('template')
@section('main')


<div class="section-body">
<!--             <h2 class="section-title">Daftar pemain bola</h2>
            <p class="section-lead">Halaman ini adalah halaman berisi nama2 pemain bola</p> -->
            <div class="card">
              <div class="card-header">
                <h4>Pemain Bola</h4>
              </div>
              <div class="card-body">
                <div class="container-fluid">

        <table  class="table table-hover ml-4">
          <thead>
            <tr>
              <th scope="col">Nama pemain</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">klub asal</th>
              <th>action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($pemain as $orang)
                            <tr>
                                <td>{{$orang->nama}}</td>
                                <td>{{$orang->jenis_kelamin}}</td>
                                <td>{{$orang->asal_klub}}</td>
                                <td>
                                <button type="button" class="btn btn-success"><a class="text-white text-decoration-none" href="/pemain/{{$orang->id}}">Detail</a>
                                </button>

                                <button type="button" class="btn btn-warning"><a class="text-white text-decoration-none" href="/pemain/{{$orang->id}}/edit">Edit</a></button>
                                <button type="button" class="btn btn-danger"><a class="text-white text-decoration-none" href="/pemain/{{$orang->id}}/delete">Hapus</a> </button>
                                </td>

                            </tr>
            @endforeach
          </tbody>

        </table>



              <!-- Button trigger modal -->
        <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Tambah data
            </button>
        </div>
                <!-- Modal -->

        </div>

              </div>

          </div>
</div>

@endsection
@section('modal')
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="/pemain/add" method="POST">
                  {{csrf_field()}}
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
                 </div>
                  <div class="form-group">
                <label for="exampleInputPassword1">Jenis Kelamin</label>
                  <input name="jenis_kelamin" type="text" class="form-control" id="exampleInputPassword1" placeholder="Jenis kelamin">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Asal Klub</label>
                    <input name="asal_klub" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Asal Klub">
                 </div>
                 <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
          </div>

</div>
@endsection


