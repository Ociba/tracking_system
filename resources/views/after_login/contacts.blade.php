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
      </div><!--/. container-fluid -->
    </section>
    <section class="content">
      <div class="row">
        <div class="col-12">
    <div class="card">
    {{--
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
                          <input class="form-control" type="search" placeholder="Search Group" aria-label="Search" name="church_name" id="srch-term" value="{{old('church_name')}}" required>
                          <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                              <i class="fas fa-search"></i>
                            </button>
                          </div>
                        </div>
                </form>
                </div>
                <div class="col-4">
                <a href="/create-TIG-groups" button type="button" class="btn btn-block btn-primary">Add Group</button></a>
                </div>
                </div>
               
            </div>
            --}}
            @include('layouts.message')
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Group name</th>
                  <th>Created by</th>
                  <th>Updated by</th>
                  <th>Names</th>
                  <th>Contacts</th>
                  <th>Option</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($contacts as $index => $contact)
                <tr>
                    @if ($contacts->currentPage() > 1)
                    @php($i =  1 + (($contacts->currentPage() - 1) * $contacts->perPage()))
                    @else
                    @php($i = $index + 1)
                    @endif
                    <form action="/delete-contact/{{ $contact->id }}" method="get">
                        @csrf
                        <td hidden><input type="hidden" name="index_to_delete" id="" value="{{ $contact->id }}"></td>
                        <td>{{ $i }}</td>
                        <td>{{ $contact->group_name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->u_name }}</td>
                        <td>{{ $contact->contact_number }}</td>
                        <td><button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i> Delete</button></td>
                    </form>
                </tr>
                @endforeach
                <form action="/save-contact-to-group/{{ \Request::segment(2) }}" method="get">
                    @csrf
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="text" name="created_by" value="{{ auth()->user()->email }}" class="form-control" disabled></td>
                        <td><input type="text" name="created_by" value="{{ auth()->user()->email }}" class="form-control" disabled></td>
                        <td><input type="text" name="name" class="form-control" value="{{old('name')}}"></td>
                        <td><input type="number" name="contact" value="{{old('contact')}}" class="form-control" required></td>
                        <td></td>
                    </tr>
                    <div class="row">
                <a href="/contact-groups"><button type="button" class="btn btn-warning mr-3"> Back</i></button></a>
                <div class="text-right">
              <button class="btn btn-primary">Save</button>
              </div>
            </div>
                    <span class="text-primary">After inputing a name and a contact number, press enter to save it to the group</span>
                    {{-- <input type="file" name="file" id="" value="Upload"> --}}
                </form>
                </tfoot>
              </table>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          </div>
          </div>
          </section>
    <!-- /.content -->
  </div>
  {{--
  <div class="row pull-right">
    <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-lg-12">
            <div class="col-lg-4">
                <input type="file" name="file" class="form-control" required>
                <input type="hidden" name="group_id" value="{{ \Request::segment(2) }}">
            </div>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-8">
                <br>
                <button class="btn btn-success"><i class="fa fa-paperclip"></i> Import User Data</button>
                <a class="btn btn-warning" href="/export-group-contact/{{ \Request::segment(2) }}"><i class="fa fa-file"></i> Export User Data</a>
            </div>
        </div>
        
    </form>
    
</div>
--}}
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
