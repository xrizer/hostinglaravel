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
              <li class="nav-item active">
                <a href="/dashboard" class="nav-link active"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              </li>
              <li class="menu-header">Aktivitas</li>
              <li class="nav-item">
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
            <h1>Dashboard</h1>
          </div>
@endsection
@section('main')
 <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Kambing Tersedia</h4>
                  </div>
                  <div class="card-body">
                    2
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Penjualan</h4>
                  </div>
                  <div class="card-body">
                    40
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-secondary">
                  <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Pemasukan</h4>
                  </div>
                  <div class="card-body">
                    Rp.2.000.000
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col-lg-8 col-md-12 col-12 col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h4>Statistics</h4>
                  <div class="card-header-action">
                    
                  </div>
                </div>
                <div class="card-body">
                    <script src="https://code.highcharts.com/highcharts.js"></script>
                    

                    <div id="container"></div>
                    <button id="large">Large</button>
                    <button id="small">Small</button>
                    <script>
                            const chart = Highcharts.chart('container', {
                            chart: {
                              type: 'column'
                            },
                            title: {
                              text: 'PDL-FARM'
                            },
                            legend: {
                              align: 'right',
                              verticalAlign: 'middle',
                              layout: 'vertical'
                            },
                            xAxis: {
                              categories: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni']
                            },
                            yAxis: {
                              title: {
                                text: 'jumlah(Jt)'
                              }
                            },
                            series: [{
                              name: 'Omzet',
                              data: [4, 4, 5]
                            }],
                            responsive: {
                              rules: [{
                                condition: {
                                  maxWidth: 500
                                },
                                chartOptions: {
                                  legend: {
                                    align: 'center',
                                    verticalAlign: 'bottom',
                                    layout: 'horizontal'
                                  }
                                }
                              }]
                            }
                          });

                          document.getElementById('small').addEventListener('click', () => {
                            chart.setSize(400, 300);
                          });

                          document.getElementById('large').addEventListener('click', () => {
                            chart.setSize(600, 300);
                          });
                    </script>

                    
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12 col-sm-12">

            </div>
          </div>

          
@endsection
