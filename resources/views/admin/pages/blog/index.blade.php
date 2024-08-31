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
<li class="breadcrumb-item"><a href="{{route('admin.blog.create')}}">Blog əlavə et</a></li>
<!-- {{--<li class="breadcrumb-item active">Starter Page</li>--}} -->
</ol>
</div>
</div>
</div>
</div>

<div class="content-header">
<div class="container-fluid">
@if (session()->has('success'))
     <div class="alert alert-success" role="alert">
       {{session('success')}}
     </div>
   @endif
   @if (session()->has('error'))
     <div class="alert alert-danger" role="alert">
       {{session('error')}}
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

<div class="card-body table-responsive p-0">
<table class="table table-hover text-nowrap">
<thead>
<tr>
<th>ID</th>
<th>Title</th>
<th>Content</th>
<th>Şəkil</th>
<th>Yaranma Tarixi</th>
<th>Əməliyyatlar</th>
</tr>
</thead>
<tbody>
@foreach($blogs as $blog)
<tr>
<td>{{ $blog->id }}</td>
<td>{{ $blog->title }}</td>
<td>{{ substr($blog->content,0,15) }}</td>
<td><img src="{{asset('storage/'. $blog->image) }}" style="height: 50px;width: 50px"  alt="" srcset=""> </td>
<td>{{ $blog->created_at }}</td>
<td>

<a class="btn btn-primary d-inline-block" href="{{ route('admin.blog.edit', $blog) }}">Editlə</a>

<form action="{{ route('admin.blog.delete', $blog) }}" method="POST" class="d-inline-block">

    @method('DELETE')
    @csrf
    <button type="submit" class="btn btn-primary">Sil</button>
</form>
{{-- 
<!-- <a class="btn btn-primary d-inline-block" href="{{ route('admin.blog.edit.id', $blog->id) }}">Editlə</a>

<form action="{{ route('admin.blog.delete.id', $blog->id) }}" method="POST" class="d-inline-block">
    @method('DELETE')
    @csrf
    <button type="submit" class="btn btn-primary">Sil</button>
</form>  -->
--}}

</td>

</tr>
@endforeach
</tbody>
</table>
</div>

</div>

</div>
</div>
</div>
</div>
</div>
@endsection