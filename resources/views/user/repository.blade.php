@extends('user.layouts.user')
@section('content')
    
    <section class="content">
        <!--Dropdown List BLK-->
        <div class="col-md-3">
            <select  class="blk" style="width: 250px ;  height:34px" id="id_blk" name="id_blk" value="{{ old('id_blk') }}" autofocus>
                <option>--Pilih BLK--</option>
                <option value="1">BLK Pertanian</option>
                <option value="1">BLK Keramik</option>
            </select>
        </div>

        <!--search-->
        <div class="col-md-9">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">{{isset($title) ? $title : 'Search'}}</h3>

                    <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
    
                </div>
                <!-- /.box-body -->
                <div class="box-footer  text-right">
                    <button type="submit" class="btn btn-primary">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    Search
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection