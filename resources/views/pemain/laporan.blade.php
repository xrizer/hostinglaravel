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
            <h1>Halaman Laporan</h1>
          </div>
@endsection
@section('templatecss')
<style>
    .section-body{
      padding:20px;
      border-radius: 3px;
    }
    .butt-1{
      text-decoration:none;
      list-style:none;
      display:flex;
      flex-wrap:wrap;

    }

    .butt a{
      box-sizing:content-box;
      width:200px;
      padding:15px;
      height:40px;
      line-height: 40px;
      border-radius:3px;
      flex:auto;
      float:left;
      margin:20px;
      text-align: center;
      color:white;
      background-color:#6777ef;
      box-shadow:0px 2px 5px lightgrey;
    }

    .butt a:hover{
      text-decoration:none;
      position:relative;
      top:2px;
      box-shadow:none;
    }
  </style>
@endsection
@section('main')
<div class="section-body" style="background-color:white;">
            <ul class="butt-1">
              <li class="butt"><a href="/pemain/jurnalumum">Laporan Jurnal</a></li>
              <li class="butt"><a href="/pemain/bukubesar">Buku Besar</a></li>
              <li class="butt"><a href="/pemain/neracasaldo">Neraca Saldo</a></li>
              <li class="butt"><a href="/pemain/neraca">Laporan Neraca</a></li>
              <li class="butt"><a href="/pemain/labarugi">Laporan Laba Rugi</a></li>
              <li class="butt"><a href="/pemain/neracalajur">Neraca Lajur</a></li>
              <li class="butt"><a href="/pemain/perubahanmodal">Laporan Modal</a></li>
            </ul>
</div>
@endsection
