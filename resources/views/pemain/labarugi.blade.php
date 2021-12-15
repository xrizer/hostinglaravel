@extends('template')
@section('sidebar')
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Avia Laundry</a>
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
              <li class="nav-item">
                <a href="/pemain/daftarakun" class="nav-link"><i class="fas fa-columns"></i> <span>Daftar Akun</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/pemain/inputjurnal"><i class="far fa-square"></i> <span>Input Jurnal</span></a>
              </li>
              <li class="nav-item active">
                <a href="/pemain/laporan" class="nav-link"><i class="fas fa-th"></i> <span>Laporan</span></a>
              </li>
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
            <h1>Laporan Laba Rugi</h1>
          </div>
@endsection
@section('main')
<div class="section-body">
            <p class="section-lead">
              <div class="row">
                <div class="col-sm-12 col-md-11">
                  <form action="" class="form-inline">
                    <div class="form-group col-sm-12 col-md-2">
                      <label>Tanggal Mulai:</label>
                      <input id="datepickerfrom" class="form-control" name="datepickerfrom" width="250" type="date" required />
                    </div>

                    <div class="form-group col-sm-12 col-md-2 ml-2">
                      <label>Tanggal Selesai:</label>
                      <input id="datepickerfrom" class="form-control" name="datepickerfrom" width="250" type="date" required />
                    </div>
                    <button type="submit" class="btn btn-primary col-md-1 col-sm-4 align-self-center">Update</button>
                  </form>
                </div>
                <div class="col-sm-12 col-md-1 row">
                  <a href="#" class="btn btn-primary col-sm-12 my-auto">Cetak</a>
                </div>
              </div>
            </p>
            <div class="row">
              <div class="col-12 col-md-12 col-lg-10">
                <div class="card">
                  <!-- <div class="card-header">
                    <h4>Aktiva</h4>
                  </div> -->
                  <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Keterangan</th>
                          <th scope="col">Nilai</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td scope="row">Pendapatan</td>
                          <td>Rp. xxxxxxxxxx</td>
                        </tr>
                        <tr>
                          <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama Akun</td>
                          <td>Rp. xxxxxxxxxx</td>
                        </tr>
                        <tr>
                          <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama Akun</td>
                          <td>Rp. xxxxxxxxxx</td>
                        </tr>
                        <tr>
                          <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama Akun</td>
                          <td>Rp. xxxxxxxxxx</td>
                        </tr>
                        <tr>
                          <td scope="row">Jumlah Pendapatan</td>
                          <td>Rp. xxxxxxxxxx</td>
                        </tr>
                        <tr>
                          <td scope="row">HPP</td>
                          <td>Rp. xxxxxxxxxx</td>
                        </tr>
                        <tr>
                          <td scope="row">Laba Kotor</td>
                          <td>Rp. xxxxxxxxxx</td>
                        </tr>
                        <tr>
                          <td scope="row">Beban</td>
                          <td>Rp. xxxxxxxxxx</td>
                        </tr>
                        <tr>
                          <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama Akun</td>
                          <td>Rp. xxxxxxxxxx</td>
                        </tr>
                        <tr>
                          <td scope="row">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama Akun</td>
                          <td>Rp. xxxxxxxxxx</td>
                        </tr>
                        <tr>
                          <td scope="row">Jumlah Beban</td>
                          <td>Rp. xxxxxxxxxx</td>
                        </tr>
                        <tr>
                          <td scope="row">Laba Bersih</td>
                          <td>Rp. xxxxxxxxxx</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection
