<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard Admin LSP UNTAN</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
        <script src="/js/datatables-simple-demo.js"></script>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
        <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
        <style>
            trix-toolbar [data-trix-button-group='file-tools'] {
                display: none;
            }
        </style>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark ">
            
            <a class="navbar-brand ps-3" href="/" style="color: rgb(3, 175, 206)">LSP UNTAN</a>
            
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            
            
            
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                            <a class="nav-link {{ Request::is('admin/skema*') ? 'active' : '' }}" href="/admin/skema">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-diagram-project"></i></div>
                                Skema
                            </a>
                            <a class="nav-link {{ Request::is('admin/asesor*') ? 'active' : '' }}" href="/admin/asesor">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-users-line"></i></div>
                                Asesor
                            </a>
                            {{-- <a class="nav-link {{ Request::is('admin/unitkompetensi*') ? 'active' : '' }}" href="/admin/unitkompetensi">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-users-line"></i></div>
                                Unit Kompetensi
                            </a> --}}
                            <a class="nav-link {{ Request::is('admin/berita*') ? 'active' : '' }}" href="/admin/berita">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-newspaper"></i></div>
                                Berita
                            </a>
                            <a class="nav-link {{ Request::is('admin/jadwal*') ? 'active' : '' }}" href="/admin/jadwal">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-calendar-alt"></i></div>
                                Jadwal
                            </a>
                            <form action="/logout" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="nav-link border-0 bg-transparent ">
                                    <div class="sb-nav-link-icon"><i class="fa-solid fa-right-from-bracket"></i></div>
                                    Logout
                                </button>
                            </form>
                            
                        </div>
                    </div>
                    {{-- <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div> --}}
                </nav>
            </div>
            
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard Admin LSP Pihak 1 UNTAN</h1>
                        @yield('adminchild')
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; LSP UNTAN</div>
                            {{-- <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div> --}}
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        {{-- @include('components.modalskema') --}}
    </body>
</html>
