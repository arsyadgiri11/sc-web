
@extends('template.layout')

@section('title','edit')


@section('content')


<div class="container-fluid">
    <form method="post" action="{{route('admin.update',[$content->id])}}" enctype="multipart/form-data">
        @CSRF
        @method('put')
           <div class="form-group">
               <label>Judul</label>
               <input type="text" name="judul" class="form-control" value="{{$content->judul}}" required>
           </div>           
           <div class="form-group">
               <label>Deskripsi</label>
               <input type="text" name="deskripsi" class="form-control" value="{{$content->deskripsi}}" required>
           </div>           
           <div class="form-group">
               <label>Gambar</label>
               <input type="file" name="gambar" class="form-control" value="{{$content->gambar}}" required>
           </div>                                       
            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
       </form>
</div>



@endsection



