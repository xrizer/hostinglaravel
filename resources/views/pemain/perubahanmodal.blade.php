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
            <h1>Laporan Perubahan Modal</h1>
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

                                        <div class="col-auto" style="margin-top:;">
                                            <button type="button" class="btn btn-primary col-auto" style="margin-right: 25px;">Update</button>
                                            <button type="button" class="btn btn-primary ">Cetak</button>
                                        </div>
                                        </div>
                                    </div>
                                    <table class="table table-striped table-md container-fluid">
                                      <tbody>
                                          <tr>
                                              <td>Modal</td>
                                              <td>Rp xxx</td>
                                          </tr>
                                          <tr>
                                              <td>Laba</td>
                                              <td>Rp xxx</td>
                                          </tr>
                                          <tr>
                                              <td>Prive</td>
                                              <td>Rp xxx</td>
                                          </tr>
                                          <tr>
                                              <td>Modal Akhir</td>
                                              <td>Rp xxx</td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>

                          </div>
                      </div>
@endsection
