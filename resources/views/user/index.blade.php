@extends('user.layouts.user')
@section('content')
 <!-- Page Content -->
  
            <!-- Heading Row -->
          <div class="row my-5">
            <div class="col-lg-8">
              <img class="img-fluid rounded" src="http://placehold.it/800x400" alt="">
            </div>
            <!-- /.col-lg-8 -->
            <div class="col-lg-4">
              <h1>Product BLK</h1>
              <div class="row my-6 content">
                <div class="box">
                  <div class="box box-default col-md-12">
                    <ul>
                      <li>
                        <a href="">produk terbaru 1</a>
                      </li>
                      <li>
                        <a href="">produk terbaru 2</a>
                      </li>
                      <li>
                        <a href="">produk terbaru 3</a>
                      </li>
                      <li>
                        <a href="">produk terbaru 4</a>
                      </li>
                      <li>
                        <a href="">produk terbaru 5</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.col-md-4 -->
          </div>
          <!-- /.row -->
    

          <div class="card text-white bg-secondary my-4 text-center">
            <div class="card-body">
              <p class="text-white m-0"><i>"Your future is determined by what you start today"<i></p>
            </div>
          </div>
    
          <!-- Content Row -->
          <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card-body">
                  <center>
                    <a href="#aboutModal" data-toggle="modal"><img src="{{ asset('image/video-camera.png') }}" name="aboutme" width="140" height="140" class="img-circle"></a>
                      <h2 class="card-title">Video Turorial</h2>
                </div>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4 mb-4">
                <div class="card-body">
                <center>
                  <a href="#aboutModal" data-toggle="modal"><img src="{{ asset('image/office-material.png')}}" name="aboutme" width="140" height="140" class="img-circle"></a>
                  <h2 class="card-title">Dokumentasi</h2>
                </div>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4 mb-4">
                <div class="card-body">
                <center>
                  <a href="#aboutModal" data-toggle="modal"><img src="{{ asset('image/file.png')}}" name="aboutme" width="140" height="140" class="img-circle"></a>
                  <h2 class="card-title">Daftar BLK</h2>
                </div>
            </div>
            <!-- /.col-md-4 -->
          </div>
          <!-- /.row -->
@endsection