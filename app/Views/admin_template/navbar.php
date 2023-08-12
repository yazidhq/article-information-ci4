    <!-- navbar -->
    <nav class="navbar navbar-expand-lg" data-bs-theme="dark" style="background-color:#3b5998">
        <div class="container">
            <a class="navbar-brand" href="/Admin/admin_home"><strong>Admin Page</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
                <span class="navbar-text">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/Admin/mading">Mading</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Admin/tampil_laporan">Laporan</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="<?= site_url('Admin/logout') ?>">Logout</a>
                        </li>
                    </ul>
                </span>
            </div>
        </div>
    </nav>