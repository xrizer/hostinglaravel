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
            <h1>Laporan Neraca Saldo</h1>
          </div>
@endsection
@section('main')
                        <div class="section-body">
                            <h2 class="section-title">Periode Oktober 2021</h2>
                            <div class="card">
                                <div class="card-header">
                                    <h4>
                                        <a
                                            href="#"
                                            class="
                                                btn btn-icon
                                                icon-left
                                                btn-primary
                                            "
                                            ><i class="fas fa-print"></i> Cetak
                                            Laporan</a
                                        >
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">No. Akun</th>
                                                <th scope="col">Nama Akun</th>
                                                <th scope="col">Debit</th>
                                                <th scope="col">Kredit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>111</td>
                                                <td>Kas</td>
                                                <td>Rp10.000.000</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>112</td>
                                                <td>Piutang Usaha</td>
                                                <td>Rp50.000.000</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>211</td>
                                                <td>Utang Usaha</td>
                                                <td></td>
                                                <td>Rp2.500.000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
@endsection
