@extends('admin.template.layout')s
@section('title','List Pelatihan' )
@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Pelatihan</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List Pelatihan</h2>
                    <div style="float:right;"><button type="danger" class="btn btn-success btn-sm" data-toggle="modal" data-target="#" >Tambah List Pelatihan</button></div> 
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Bidang Kejuruan</th>
                          <th>Waktu</th>
                          <th width="18.5%">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>1</td>
                            <td>Menjahit</td>
                            <td>3 Bulan</td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#" >Edit</button>
                                <button type="danger" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#" >Detail</button>
                                <div style="float:right;">
                                <form action="#" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</i></a>
                                </form>
                                </div>
                            </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
@endsection