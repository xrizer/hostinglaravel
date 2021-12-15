@extends('template')
@section('sidebar')
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Aufa Laundry</a>
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
            <h1>Jurnal Umum</h1>
          </div>
@endsection
@section('main')
<div class="section-body">
                          <div class="card">
                            <div class="card-body">
                              <div class="container-fluid" >
                                <div class="panel-body container-fluid">
                                    <div class="row mb-4" style="display: flex; justify-content: space-between;">
                                      <div class="col-auto row" style="width: fit-content;">
                                      <div class="col-auto d-flex" style="width: fit-content;">
                                        <label>Tanggal Mulai:</label>
                                        <input id="datepickerfrom" class="form-control" name="datepickerfrom" width="250" type="date" required />
                                      </div>
                                      <div class="col-auto d-flex" style="width: fit-content;">
                                        <label>Tanggal Selesai:</label>
                                        <input id="datepickerfrom" class="form-control" name="datepickerfrom" width="250" type="date" required />
                                      </div>
                                      </div>

                                        <div class="col-auto" style="margin-top: ;">
                                            <button type="button" class="btn btn-primary col-auto" style="margin-right: 25px;">Update</button>
                                            <button type="button" class="btn btn-primary ">Cetak</button>
                                        </div>
                                        </div>
                                    </div>
                                <table class="table table-bordered container-fluid">
                                  <thead>
                                      <tr>
                                          <th>Tanggal</th>
                                          <th>Akun</th>
                                          <th>Debit</th>
                                          <th>Kredit</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>5-10-2021</td>
                                          <td>Kas</td>
                                          <td>Rp 10.000.000</td>
                                          <td>-</td>
                                      </tr>
                                      <tr>
                                          <td>6-10-2021</td>
                                          <td>Piutang Usaha</td>
                                          <td>-</td>
                                          <td>Rp 3.000.000</td>
                                      </tr>
                                      <tr>
                                          <td>10-10-2021</td>
                                          <td>Perlengkapan</td>
                                          <td>Rp. 2.500.000</td>
                                          <td>-</td>
                                      </tr>
                                  </tbody>
                              </table>
                              </div>

                          </div>
                      </div>
@endsection
