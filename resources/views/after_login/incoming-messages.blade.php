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
                <form class="">
                        <div class="input-group ">
                            <a href="#" class="btn btn-default dropdown-toggle w-50" data-toggle="dropdown">
                            Select a category &nbsp;<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" style="padding: 5px;" id="myDiv">
                                @foreach($drop_down_categories as $getting_from_database)
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="" name="search_message" value="{{ $getting_from_database->title }}"/> {{ $getting_from_database->title }}
                                        </label>
                                    </div>
                                @endforeach

                            </ul>
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
                  <th>Message</th>
                  <th>Senders contact</th>
                  @if(auth()->user()->church_id == 1)
                  <th>Sending church</th>
                  @endif
                  <th>Message sent on</th>
                  <th>Category</th>
                </tr>
                </thead>
                <tbody>
                @if ($messages_to_categories->currentPage() > 1)
                  @php($i =  1 + (($messages_to_categories->currentPage() - 1) * $messages_to_categories->perPage()))
                  @else
                  @php($i = 1)
                  @endif
                  @foreach ($messages_to_categories as $messages)
                  <tr>
                      <th class="th-sm">{{ $i++ }}</th>
                      <th class="th-sm">{{ $messages->message }}</th>
                      <th class="th-sm">{{ $messages->contact }}</th>
                      @if(auth()->user()->church_id == 1)
                      <th class="th-sm">{{ $messages->church_name}}</th>
                      @endif
                      <th class="th-sm">{{ $messages->created_at }}</th>
                      <th class="th-sm">{{ $messages->title }}</th>
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
</body>
</html>
