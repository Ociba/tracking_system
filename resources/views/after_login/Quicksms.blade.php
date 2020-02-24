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
                <h3 class="card-title">Add Group Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Send to Group</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Send to Category</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Send to Un Categorized</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                @include('layouts.groupsMessage')
                @include('layouts.categorizedMessage')
                @include('layouts.unCategorizedMessage') 
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
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
                $("#messagesForm").on("submit", function(){
                    $("#pageloader").fadeIn();
                });//submit
            });

            $('.dropdown-menu').click(e => {
                $selected = $('.checkbox1 input[type="checkbox"]:checked');
                var total = 0;
                const count = $selected.length;
                for (var i = 0; i < count; ++i) {
                    total += parseInt($selected[i].getAttribute('data-count'));
                }
                $('#contact_character').val(total);
            });

            $('.dropdown-menu').click(e => {
                $selected = $('.checkbox2 input[type="checkbox"]:checked');
                var total = 0;
                const count = $selected.length;
                for (var i = 0; i < count; ++i) {
                    total += parseInt($selected[i].getAttribute('data-count'));
                }
                $('#category_contacts_count').val(total);
            });
        </script>
</body>
</html>
