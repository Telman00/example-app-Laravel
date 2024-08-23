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
<li class="breadcrumb-item"><a href="{{route('admin.blog.create')}}">Blog əlavə elə</a></li>
{{--<li class="breadcrumb-item active">Starter Page</li>--}}
</ol>
</div>
</div>
</div>
</div>

<div class="content-header">
<div class="container-fluid">
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
<th>Yaranma Tarixi</th>
<th>Əməliyyatlar</th>
</tr>
</thead>
<tbody>
@foreach($blogs as $blog)
<tr>
<td>{{ $blog->id }}</td>
<td>{{ $blog->title }}</td>
<td>{{ $blog->content }}</td>
<td>{{ $blog->created_at }}</td>
<td>
    <a class="btn btn-primary"href="">Sil</a>
    <a class="btn btn-primary"href="">Editlə</a>
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