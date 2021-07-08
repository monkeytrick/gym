@include('admin.partials.header')

@include('admin.partials.sidebar')

<!-- content to go here with 'yield' -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

            @yield('page-title')
            
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

        <!-- Main content -->
        <section class="content">
      <div class="container-fluid">
        <div class="row cont-display">


        @yield('main-content')

          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

</div>

<!-- @yield('content') -->

@include('admin.partials.footer')

