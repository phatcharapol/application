@include('include.front_header')

<body>

    @include('include.front_nav')

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                @yield('content')

            </div>

            @include('include.front_sidebar')

        </div>
        <!-- /.row -->

        <hr>

        @include('include.front_footer')

    </div>
    <!-- /.container -->

    @include('include.footer_script')

</body>

</html>
