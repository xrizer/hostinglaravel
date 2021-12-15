@extends('template')
@section('templatecss')
<style>
  .section .section-title::before {
    display: none;
}
</style>

@endsection
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
            <h1>Tambah Data</h1>
          </div>
@endsection
@section('main')
    <div class="section-body">

            <div class="card">
              <div class="card-body">
                <form action="/pemain/daftarakun/create" method="POST" enctype="multipart/form-data">
                  {{csrf_field()}}
                    <div class="section-title mt-0">Kode kambing</div>
                    <div class="form-group"><label>Masukan kode kambing</label>
                  <div class="form-group">
                    <input name="kode_kambing" type="text" required="required" class=" form-control{{$errors->has('kode_kambing') ? ' form-error' : ''}}">
      <!--               {!! $errors->first('name', '<p class="help-block">:message</p>') !!} -->
                  </div>
                <div class="section-title mt-0">Harga</div>
                <div class="form-group"><label>Masukan harga</label>
                  <div class="form-group has-error">
                    <input name="harga" type="text" required="required" class="form-control">
                  </div>
                 <div class="section-title mt-0">Bobot Badan/kg (isi jika ada)</div>
                <div class="form-group"><label>Masukan bobot kambing</label>
                  <div class="form-group">
                    <input name="bobot_badan" type="text" class="form-control">
                  </div>
                <div class="section-title">Gambar</div>
                <div class="form-group"><label>Upload Gambar</label>
                  <div class="form-g  roup">
                  <input type="file" name="gambar" required="required" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary daterange-btn icon-left btn-icon float-right mt-3"><i class="fas fa-vote-yea"></i> Kirim</button>
                  <!-- <a href="#" class="btn btn-primary daterange-btn icon-left btn-icon" ><i class="fas fa-vote-yea"></i> Buat Akun</a> -->
                </div>
                </form>
              </div>
            </div>
          </div>
@endsection
