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
                <div class="col-3"></div>
                <div class="col-5">
                <form class="">
                        <div class="input-group ">
                                <button type="button" class="btn btn-primary pull-right mr-2" data-toggle="modal" data-target="#addSearchTerm">Add search term</button>
                                <a href="/add-category-contacts/{{request()->route('id')}}"><button type="button" class="btn btn-primary pull-right"> Add Contacts </button></a>
                          <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                              <i class="fas fa-search"></i>
                            </button>
                          </div>
                        </div>
                </form>
                </div>
                </div>
               
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Category</th>
                  <th>Search Term</th>
                  <th>Created by</th>
                  <th>Option</th> 
                </tr>
                </thead>
                <tbody>
                @foreach ($all_search_terms as $index=>$search_term)
                <tr>
                    <td>{{$index+1}}</td>
                    <td>{{$search_term->title}}</td>
                    <td>{{$search_term->search_term}}</td>
                    <td>{{$search_term->name}}</td>
                    <form action="/delete-search-term/{{$search_term->id}}" method="get">
                        @csrf
                        <td><button class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button></td>
                    </form>
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
          <a href="/message-categories"><button class="btn btn-warning pull-right"></i> Back</button></a>
          </section>
          <form id="searchTerm" action="/save-search-term/{{\Request::route('id')}}" method="get">
        <div class="modal fade" id="addSearchTerm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                {{--
                    <div id="pageloader">
                        <img src="http://cdnjs.cloudflare.com/ajax/libs/semantic-ui/0.16.1/images/loader-large.gif" alt="processing..." />
                    </div>
                --}}
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Type Search Term</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <input type="text" name="new_search_term" id="" class="form-control" required>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save Search term</button>
                    </div>
                </div>
                </div>
            </div>
        </form> 
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
    $("#searchTerm").on("submit", function(){
        $("#pageloader").fadeIn();
    });//submit
});
</script>
</body>
</html>
