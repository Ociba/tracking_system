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
                <form class="" role="search" action="/search-message-categories" method="get">
                @csrf
                        <div class="input-group ">
                          <input class="form-control" placeholder="Search" aria-label="Search" name="category" id="srch-term" value="{{old('category')}}" required>
                          <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                              <i class="fas fa-search"></i>
                            </button>
                          </div>
                        </div>
                </form>
                </div>
                <div class="col-4">
                <a href="/add-message-category" button type="button" class="btn btn-primary">Add Message category</button></a>
                </div>
                </div>
               
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Added by</th>
                  <th>Message category</th>
                  <th>Number of search terms</th>
                  <th>Number of subscibers</th>
                  <th>Option</th>
                </tr>
                </thead>
                <tbody>
                @if ($category->currentPage() > 1)
                    @php($i =  1 + (($category->currentPage() - 1) * $category->perPage()))
                    @else
                    @php($i = 1)
                    @endif
                    @foreach ($category as $index => $categories)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $categories->name }}</td>
                        <td>{{ $categories->title }}</td>
                        <td>{{  $categories->countSearchTerms -1}}</td>
                        <td>{{ $categories->number_of_subscribers}}</td>
                        <td><a href="/add-search-term/{{ $categories->id }}">View/edit</a></td>
                    </tr>
                @endforeach
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
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
      $("#searchMessageCategory").on("submit", function(){
          $("#pageloader").fadeIn();
      });//submit
  });
  </script>
</body>
</html>
