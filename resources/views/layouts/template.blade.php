@include('layouts.partials.header')
<!-- Page Wrapper -->
<div id="wrapper">
    @include('layouts.partials.sidebar')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            @include('layouts.partials.topbar')
            <!-- Begin Page Content -->
            @yield('content')
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
        @include('layouts.partials.footer')
    </div>
    <!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
@include('layouts.partials.js')