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
                {{--<h3 class="card-title">Add Group Form</h3>--}}
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form method="get" action="/save-contact-to-category/{{request()->route('id')}}">
              @include('layouts.message')
              @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Contact</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" placeholder="Enter phone_number" name="contact_number" value="{{old('contact_number')}}" autocomplete="off">
                    </div>
                  </div>
                </div>
                <div class="text-center mb-3">
                <button type="submit" class="btn btn-success">Submit</button>
                </div> 
              </form> 

              
        <div class="col-12">
        
            <form action="/import-contacts-category/{{ \Request::segment(2) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Choose Many</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control" id="inputEmail3" name="file" placeholder="New password" required>
                      <input type="hidden" name="category" class="form-control" value="{{ \Request::segment(2) }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                    <button class="btn btn-success"><i class="fa fa-paperclip"></i> Import User Data</button>
                    </div>
                  </div> 
                  <div class="text-center mb-3">
                <a href='/add-search-term/{{ \Request::segment(2) }}'><button type="button" class="btn btn-warning mr-2"> Back</i></button></a>
                </div> 
                </form>
                </div>
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
<script>
      $(document).ready(function(){
      $("#packages").on("submit", function(){
          $("#pageloader").fadeIn();
      });//submit
      });
</script>
</body>
</html>
