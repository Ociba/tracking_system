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
               
                </div>
                <div class="col-4">
                <form class="" role="search" action="/search-scheduled-messages" method="get">
                @csrf
                        <div class="input-group ">
                          <input class="form-control" placeholder="Search" aria-label="Search" name="scheduled_message" id="" required>
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
                  <th>Messages</th>
                  <th>Group</th>
                  @if(auth()->user()->id == 1)
                  <th>Church</th>
                  @endif
                  <th>Date /Time to send it</th>
                  <th>Message status</th>
                </tr>
                </thead>
                <tbody>
                @if ($display_all_scheduled_messages->currentPage() > 1)
                  @php($i =  1 + (($display_all_scheduled_messages->currentPage() - 1) * $display_all_scheduled_messages->perPage()))
                  @else
                  @php($i = 1)
                  @endif
                  @foreach ($display_all_scheduled_messages as $scheduled_message_details)
                      <tr>
                          <td>{{ $i++}}</td>
                          <td>{{ $scheduled_message_details->message }}</td>
                          <td>{{ $scheduled_message_details->group_name }}</td>
                          @if(auth()->user()->id == 1)
                          <td>{{ $scheduled_message_details->church_name}}</td>
                          @endif
                          <td>{{ $scheduled_message_details->tobesent_on }}</td>
                          <td>{{ $scheduled_message_details->status }}</td>
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
            $("#scheduledMessage").on("submit", function(){
                $("#pageloader").fadeIn();
            });//submit
        });
  </script>
</body>
</html>
