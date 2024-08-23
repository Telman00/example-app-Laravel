
<!DOCTYPE html>

<html lang="en">

@include('admin.partials.head');

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  
@include('admin.partials.nav');

@include('admin.partials.left-side');

<div class="content-wrapper">

@yield('_content');



</div>


@include('admin.partials.right-side');

@include('admin.partials.footer');

</div>



@include('admin.partials.js');
</body>
</html>
