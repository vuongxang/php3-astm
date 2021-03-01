@extends('backend.layouts.main')
@section('title','Add category')
@section('page-title','Danh mục')

@section('content')
<div class="row">
    <div class="col-10 offset-1 mt-4">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Thêm danh mục</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{route('cate.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputName">Tên danh mục</label>
                        <input type="text" class="form-control" id="exampleInputName" placeholder="tên danh mục" name="name">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{$errors->first('name')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Logo</label>
                        <input type="file" id="exampleInputFile" name="logo">
                        @if ($errors->has('logo'))
                            <span class="text-danger">{{$errors->first('logo')}}</span>
                        @endif
                    </div>
                </div>
                <!-- /.box-body -->
        
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection