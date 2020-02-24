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
  <section class="content-wrapper">
    <!-- Breadcrumbs -->
    @include('layouts.breadcrumb')
    <!-- /.Breadcrumbs -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">  <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <section class="content"> 
    <div class="card-header">
            <div class="row">
            <div class="col-4">
            <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-clock"></i></span>
                    </div>
                    <input type="text" class="form-control" id="reservationtime">
                  </div>
                  <!-- /.input group -->
                </div>
            </div>
                <div class="col-4">
                <form class="">
                        <div class="input-group ">
                          <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                          <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                              <i class="fas fa-search"></i>
                            </button>
                          </div>
                        </div>
                </form>
                </div>
                <div class="col-4">
                <a href="/addnewsubscription" button type="button" class="btn btn-primary">Add New Package</button></a>
                </div>
                </div>
              </div> 
          <div class="row">
          <div class="col-md-6">
            <div class="card">
              <!-- /.card-header -->
              <form action="/map-package-to-category" method="get">
              <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Choose</th>
                  <th>Package name</th>
                  <th>Time frame</th>
                  <th>Amount</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($all_packages as $package)
                <tr>
                    <td><input type="radio" name="package" value="{{$package->id}}"></td>
                    <td>{{ $package->package_name }}</td>
                    <td>{{ $package->time_frame }} days</td>
                    <td>{{ number_format($package->Amount) }} /=</td>
                </tr>
                @endforeach
                </tfoot>
              </table>
            </div> 
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-6">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Choose</th>
                  <th>Category name</th>
                  <th>Number of subscribers</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($message_categories as $category)
                <tr>
                    <td><input type="checkbox" name="category[]" value="{{$category->id}}"></td>
                    <td>{{ $category->title }}</td>
                    <td>{{ $category->number_of_subscribers}}</td>
                </tr>
                @endforeach
                </tfoot>
              </table>
               <!-- /.card-body -->
               @if(isset($search_query))
                {{ $all_packages->appends(['search' => $search_query])->links() }}
                @else
                {{ $all_packages->links() }}
                @endif
              </div> 
              <!-- /.card-body -->
            </div>
            <div class="text-right">
              <button class="btn btn-primary"><span style="margin-right:10px;">Save</span></button>
              </div>
            </form>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
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
