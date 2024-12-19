<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->



        <li class="nav-heading">Master Data</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('user.index') }}">
                <i class="bi bi-person"></i>
                <span>User</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('customer.index') }}">
                <i class="bi bi-question-circle"></i>
                <span>Customer</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('level.index') }}">
                <i class="bi bi-envelope"></i>
                <span>Level</span>
            </a>
        </li><!-- End Contact Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('car.index') }}">
                <i class="bi bi-card-list"></i>
                <span>Data Mobil</span>
            </a>
        </li><!-- End Register Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('admTrans.index') }}">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Transaksi Peminjaman</span>
            </a>
        </li><!-- End Login Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-error-404.html">
                <i class="bi bi-dash-circle"></i>
                <span>Laporan</span>
            </a>
        </li><!-- End Error 404 Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-blank.html">
                <i class="bi bi-file-earmark"></i>
                <span>Blank</span>
            </a>
        </li><!-- End Blank Page Nav -->

    </ul>

</aside>
