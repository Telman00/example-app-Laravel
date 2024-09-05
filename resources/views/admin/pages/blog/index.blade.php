@extends('admin.app')
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
        <div class="container-fluid">
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
            <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Responsive Hover Table</h3>
      
                      <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                          <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
      
                          <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                              <i class="fas fa-search"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Şəkil</th>
                            <th>Category</th>
                            <th>Yaranama tarixi</th>
                            <th>Emeliyatlar</th>
                          </tr>
                        </thead>
                        <tbody>
                            
                         @foreach ($blogs as $blog )
                         <tr>
                            <td>{{ $blog->id }}</td>
                            <td>{{ $blog->title }}</td>
                            <td>{{ substr($blog->content,0,15) }}</td>
                            <td><img src="{{asset('storage/'. $blog->image) }}" style="height: 50px;width: 50px"  alt="" srcset=""> </td>
                            <td>{{ $blog->category->name  }}</td>
                            <td>{{ $blog->created_at }}</td>
                            <td class="d-flex">
                                <a class="btn btn-primary" href="{{ route('admin.blog.edit',$blog) }}">Editle</a>
                                <form action="{{ route('admin.blog.delete',$blog) }}" method="post">
                                  @method('DELETE')
                                  @csrf
                                  <button type="submit" class="btn btn-primary ml-2" >Sil</button>
                                </form>
                            </td>
                          </tr>
                         @endforeach
                          
                        </tbody>
                      </table>
                    </div>
                    {{ $blogs->links() }}
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
              </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
