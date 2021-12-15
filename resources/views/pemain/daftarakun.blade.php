@extends('template')
@section('sidebar')
           <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">PDL FARM</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">5C</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="nav-item">
                <a href="/dashboard" class="nav-link active"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              </li>
              <li class="menu-header">Aktivitas</li>
              <li class="nav-item active">
                <a href="/pemain/daftarakun" class="nav-link"><i class="fas fa-columns"></i> <span>Kandang A</span></a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="/pemain/inputjurnal"><i class="far fa-square"></i> <span>Kandang B</span></a>
              </li> -->
              <!-- <li class="nav-item">
                <a href="/pemain/laporan" class="nav-link"><i class="fas fa-th"></i> <span>Laporan</span></a>
              </li> -->
          </ul>

           <!--  <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Tim Pengembang
              </a>
            </div> -->
        </aside>
      </div>
@endsection
@section('judul')
        <div class="section-header">
            <h1>Kandang A</h1>
          </div>
@endsection
@section('main')

        <div class="section-body">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Total Kambing : <span style="color: black">{{$jumlahkambing}}</span></h4>
                  <div class="card-header-form">
                    <form>
                          <a class="btn btn-info" href="/pemain/daftarakun/add" role="button"> <i class="fas fa-plus"></i> Tambah Data</a>
                          <!-- <div class="btn btn-info">
                            <i class="fas fa-plus"></i>
                            <a href="" class="">Buat akun baru</a>
                          </div> -->

                    </form>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <tbody><tr>
                        <th>No</th>
                        <th>Kode Kambing</th>
                        <th>Harga</th>
                        <th>Bobot badan(kg)</th>
                        <th>Gambar</th>
                        <th>Action</th>
                      </tr>
                      @php
                      $i = 1
                      @endphp
                      @foreach($daftarakunz as $akun)
                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{$akun->kode_kambing}}</td>
                        <td>{{$akun->harga}}</td>
                        <td>{{$akun->bobot_badan}}</td>
                        <td><img src="{{asset('images/'.$akun->gambar)}}" style="width: 100px"></td>
                        <td><a href="/pemain/daftarakun/{{$akun->id}}/delete" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                      </tr>

                      @endforeach
                    </tbody></table>
                  </div>
                </div>
              </div>
            </div>

          </div>
@endsection
