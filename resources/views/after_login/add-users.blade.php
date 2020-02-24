<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
    @include('layouts.stylecss')
  <title>Goproug | Church system</title>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  
  @include('layouts.topnavbar')
 
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    @include('layouts.sidebartoptext')

    <!-- Sidebar -->
    @include('layouts.sidebar')
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Breadcrumbs -->
    @include('layouts.breadcrumb')
    <!-- /.Breadcrumbs -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        
        <!-- /.row -->

        

        <!-- Main row -->
        
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <section class="content">
        <div class="row">
            <div class="col-12">
        <div class="card">
        <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Add Users Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="/adds-user" method="get">
              @csrf
              @include('layouts.message')
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">First name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" name="first_name" placeholder="Enter Your First Name" value="{{ old('first_name')}}" autocomplete="off" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Last name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" name="last_name" placeholder="Enter Your Last Name" value="{{ old('last_name')}}" autocomplete="off" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Username/Phone number</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="inputEmail3" name="username" value="{{old('username')}}" autocomplete="off" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="xxxxxxxxxxxxxxx" value="{{old('password')}}" required>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="text-center mb-3">
                <a href="/user"><button type="submit" class="btn btn-warning">Back</button></a>
                  <button type="submit" class="btn btn-success ">Save</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
        </div>
            <!-- /.card -->
            </div>
            </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('layouts.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('layouts.javascript')
</body>
</html>
