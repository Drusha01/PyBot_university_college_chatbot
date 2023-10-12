@include('layout.header')


    <body class="admin-dashboard">

        <!-- ======= Navbar ======= -->
        @include('layout.navbar')

        <!-- ======= Sidebar ======= -->
        @include('layout.sidebar')

            <!-- ======= Navbar ======= -->
            @include('layout.navbar')

            <!-- ======= Sidebar ======= -->
            @include('layout.sidebar')

            <main id="main" class="main">

                <div class="pagetitle">
                <h1>Dashboard</h1>
                <nav>
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                    <li class="breadcrumb-item active">CSC</li>
                    </ol>
                </nav>
                </div><!-- End Page Title -->

        </main><!-- End #main -->
        <!-- ======= Footer ======= -->
        @include('layout.footer')

    </body>

</html>