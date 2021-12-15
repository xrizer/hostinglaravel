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
            <h1>Laporan Neraca Lajur</h1>
          </div>
@endsection
@section('templatecss')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" integrity="sha256-FdatTf20PQr/rWg+cAKfl6j4/IY3oohFAJ7gVC3M34E=" crossorigin="anonymous">
  <link href="/stisla/assets/css/select2-bootstrap4.css" rel="stylesheet">
@endsection

@section('main')
        <section class="section-body">
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

          <div class="row ml-4">
            <div class="container-fluid">
                <table class="table table-responsive">
                  <thead>
                    <tr>
                      <th scope="col" rowspan="2">No Akun</th>
                      <th scope="col" rowspan="2">Akun</th>
                      <th scope="col" colspan="2" class="text-center">Neraca Saldo</th>
                      <th scope="col" colspan="2" class="text-center">Jurnal Penyesuaian</th>
                      <th scope="col" colspan="2" class="text-center">Neraca Disesuaikan</th>
                      <th scope="col" colspan="2" class="text-center">Neraca</th>
                      <th scope="col" colspan="2" class="text-center">Laba Rugi</th>
                    </tr>
                    <tr>
                      <th scope="col">Debit</th>
                      <th scope="col">Kredit</th>
                      <th scope="col">Debit</th>
                      <th scope="col">Kredit</th>
                      <th scope="col">Debit</th>
                      <th scope="col">Kredit</th>
                      <th scope="col">Debit</th>
                      <th scope="col">Kredit</th>
                      <th scope="col">Debit</th>
                      <th scope="col">Kredit</th>
                    </tr>
                    
                  </thead>
                  <tbody class="table-bordered">
                    <tr>
                      <th scope="row">101</th>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th scope="row">102</th>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <th scope="row">103</th>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
                
            </div>
            <div class="col-lg-4 col-md-12 col-12 col-sm-12">
              
            </div>
          </div>
@endsection


@section('templatejs')
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js" integrity="sha256-AFAYEOkzB6iIKnTYZOdUf9FFje6lOTYdwRJKwTN5mks=" crossorigin="anonymous"></script>
<script src="/stisla/assets/js/scriptselect.js"></script>

@endsection
