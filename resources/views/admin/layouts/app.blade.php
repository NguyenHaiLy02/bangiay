<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>@yield('title', 'THT - Trang quản trị')</title>

 <!-- Google Font: Source Sans Pro -->
<link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="/template/admin/plugins/fontawesome-free/css/all.min.css">
<!-- icheck bootstrap -->
<link rel="stylesheet" href="/template/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="/template/admin/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
   <div class="wrapper">
      <!-- Navbar -->
      @include('admin.layouts.navbar')
      <!-- End Navbar -->

      <!-- Sidebar -->
      @include('admin.layouts.sidebar')
      <!-- End Sidebar -->

      <div class="content-wrapper">

         <!-- Main content -->
         <section class="content">
            <div class="container-fluid">

               @include('admin.layouts.alert')

               <div class="row">
                  <!-- left column -->
                  <div class="col-md-12">
                     <!-- jquery validation -->
                     <div class="card card-primary mt-3">
                        <div class="card-header">
                           <h3 class="card-title">{{ $title }}</h3>
                        </div>
                        <div class="card-body">
                           @yield('content')</div>

                     </div>
                     <!-- /.card -->
                  </div>
                  <!--/.col (left) -->
                  <!-- right column -->
                  <div class="col-md-6">

                  </div>
                  <!--/.col (right) -->
               </div>
               <!-- /.row -->
            </div><!-- /.container-fluid -->
         </section>
         <!-- /.content -->
      </div>

      @include('admin.layouts.footer')

   </div>

   @include('admin.layouts.javascript')
</body>

</html>