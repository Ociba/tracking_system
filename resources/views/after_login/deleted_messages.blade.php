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
                <a href="/add-group" button type="button" class="btn btn-block btn-primary">Add Group</button></a>
                </div>
                </div>
               
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Database name</th>
                  <th>Database url</th>
                  <th>Logo</th>
                  <th>Hosted number</th>
                  <th>Option</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                  <td>X</td>
                  <td>
                    <a href="" class="mr-2"><i class="fa fa-check" title="approve"></i></a>
                   
                    <a href="" class="mr-2"><i class="fa fa-times" title="deny"></i></a>
                   
                    <a href="" class="mr-2"><i class="fa fa-minus" title="suspend"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.0
                  </td>
                  <td>Win 95+</td>
                  <td>5</td>
                  <td>C</td>
                  <td>X</td>
                  <td>
                  <a href="" class="mr-2"><i class="fa fa-check" title="approve"></i></a>
                   
                    <a href="" class="mr-2"><i class="fa fa-times" title="deny"></i></a>
                   
                    <a href="" class="mr-2"><i class="fa fa-minus" title="suspend"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.5
                  </td>
                  <td>Win 95+</td>
                  <td>5.5</td>
                  <td>A</td>
                  <td>X</td>
                  <td>
                  <a href="" class="mr-2"><i class="fa fa-check" title="approve"></i></a>
                   
                    <a href="" class="mr-2"><i class="fa fa-times" title="deny"></i></a>
                   
                    <a href="" class="mr-2"><i class="fa fa-minus" title="suspend"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 6
                  </td>
                  <td>Win 98+</td>
                  <td>6</td>
                  <td>A</td>
                  <td>X</td>
                  <td>
                  <a href="" class="mr-2"><i class="fa fa-check" title="approve"></i></a>
                   
                    <a href="" class="mr-2"><i class="fa fa-times" title="deny"></i></a>
                   
                    <a href="" class="mr-2"><i class="fa fa-minus" title="suspend"></i></a>
                  </td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet Explorer 7</td>
                  <td>Win XP SP2+</td>
                  <td>7</td>
                  <td>A</td>
                  <td>X</td>
                  <td>
                  <a href="" class="mr-2"><i class="fa fa-check" title="approve"></i></a>
                   
                    <a href="" class="mr-2"><i class="fa fa-times" title="deny"></i></a>
                   
                    <a href="" class="mr-2"><i class="fa fa-minus" title="suspend"></i></a>
                  </td>
                </tr>
               
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
