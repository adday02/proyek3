@extends('masyarakat.template.layout')
@section('title','Masyarakat - Daftar Pelatihan' )
@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Pekerjaan</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                <div class="x_title">
                    <h2><i class="fa fa-bars"></i> Tabs <small>Float left</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Melamar Pekerjaan</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Mendaftar Pelatihan</a>
                        </li>
                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                          <p>
                              Berikut adalah tatacara bagaimana melamar Pekerjaan melalui website Loker Indramayu : <br>
                              1. Masuk ke halmaan lowongan <br>
                              2. Pilih Lowognan pekerjaan sesuai denan kemampuan kamu<br>
                              3. Siapkan berkas persyaratan yang diinginkan perusahaan<br>
                              4. Satukan Berkas persyatan denga format .pdf<br>
                              5. Klik lamar pada lowongan yang kamu minati<br>
                              6. Upload berkas persyaratan yang sudah disatukan<br> 
                          </p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                        <p>
                              Berikut adalah tatacara bagaimana mendaftar Pelatihan melalui website Loker Indramayu : <br>
                              1. Masuk ke halmaan Info Pelatihan <br>
                              2. Pilih Pelatihan yang kamu inginkan<br>
                              3. Siapkan berkas persyaratan yang diinginkan<br>
                              4. Satukan Berkas persyatan denga format .pdf<br>
                              5. Klik daftar pada pelatihan yang kamu minati<br>
                              6. Upload berkas persyaratan yang sudah disatukan<br> 
                          </p>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
@endsection