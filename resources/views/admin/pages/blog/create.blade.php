@extends('admin.app')
@section('_styles')
<link rel="stylesheet" href="{{ asset('assets/admin/plugins/summernote/summernote-bs4.min.css') }}">
@endsection
@section('_content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Starter Page</h1>
                </div>
                
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('admin.blog.create') }}">Blog Elave Et</a></li>
                        {{-- <li class="breadcrumb-item active">Starter Page</li> --}}
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="content">
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{  session('success') }}
            {{-- {{  session()->get('success') }} --}}
          </div>
        @endif
        @if (session()->has('errors'))
        <div class="alert alert-danger" role="alert">
            {{-- This is a danger alert—check it out! --}}
            {{  session('errors') }}
          </div>
        @endif
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Quick Example</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{ route('admin.blog.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleSelectBorder">Category</label>
                                    <select name="category_id" class="custom-select form-control-border" id="exampleSelectBorder">
                                      <option disabled selected>Category Seç</option>
                                      @foreach ($categories as $category)
                                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Blog Basliq</label>
                                    <input type="text" name="title" class="form-control" value="{{ old('title') }}" id="exampleInputEmail1" placeholder="Enter Title">
                                </div>
                                <div class="form-group">
                                    <textarea id="summernote" name="content">{{ old('content') }}
                                    </textarea>
                                  </div>
                          
    <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <div class="input-group">
                                      <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="file" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                      </div>
                                      <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            <!-- /.card-body -->
                          


                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            
                        </form>
                    </div>

                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection


@section('_js')
<script src="{{ asset('assets/admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
@endsection