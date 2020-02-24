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
      <div class="container-fluid">
        <!-- Info boxes -->
        
        <!-- /.row -->

        

        <!-- Main row -->
        
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <section class="content"> 
          <div class="row">
          <div class="col-md-6">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Choose</th>
                  <th>Members Role Title</th>
                  <th>Number of people with Roles</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($roles as $role)
                <tr>
                    <td><input type="radio" name="role_id" value="{{$role->id}}"></td>
                    <td>{{$role->role_name}}</td>
                    <td>2</td>
                </tr>
                @endforeach
                </tfoot>
              </table>
            </div> 
            </div>
            <!-- /.card -->
            <!-- /.card -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Add Role</button>
            
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
                  <th>Permission</th>
                  <th>Number of People</th>
                </tr>
                </thead>
                <tbody>
                @if ($permissions->currentPage() > 1)
                @php($i =  (1 + (($permissions->currentPage() - 1) * $permissions->perPage())))
                @else
                @php($i = 1)
                @endif
                @foreach ($permissions as $permission)
                <tr>
                    <td><input type="checkbox" name="user_permisions[]" value="{{$permission->id}}"></td>
                    <td>{{$permission->permission_description}}</th>
                    <td>1</td>
                </tr>
                @endforeach
                </tfoot>
              </table>
               <!-- /.card-body -->
              </div>
              {{ $permissions->links()}}
              <!-- /.card-body --> 
            </div>
            <!-- /.card -->
            <!-- /.card -->
            <div class="text-right">
              <button class="btn btn-primary"><span style="margin-right:10px;">Save</span></button>
              </div>
          </div>
          <!-- /.col -->
          
        </div>
        <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add new Role</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <input type="text" class="form-control"  name="role" autocomplete="off">
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
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
