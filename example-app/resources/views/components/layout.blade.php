<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        @vite( ['resources/css/app.css','resources/js/app.js'])
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <div>
                <img src="{{ Vite::asset('resources/image/OIP.jpeg') }}" alt="Logo" style="width: 45px; height: 45px; border-radius: 50%; object-fit: cover;">
            </div>
            
            <a class="navbar-brand ps-3" href="/" style="padding: 0; font-size: 20px; font-weight: bold;">
                Chava Hindu College
            </a>
            
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="/">
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-tachometer-alt" style="color: aliceblue; font-size: 18px;"></i>
                                </div>
                                <b style="color: aliceblue; font-size: 20px;">Dashboard</b>
                            </a><br><br>                        
                            <a class="nav-link" href="/students">
                                <div class="sb-nav-link-icon"><i class="bi bi-person-circle" style="color: aliceblue;font-size: 18px;"></i></div>
                                <b style="color: aliceblue;font-size: 20px;">Students</b>
                            </a><br><br>
                            <a class="nav-link" href="/grades">
                                <div class="sb-nav-link-icon"><i class="bi bi-mortarboard" style="color: aliceblue;font-size: 18px;"></i></div>
                                <b style="color: aliceblue;font-size: 20px;">Grades</b>
                            </a><br><br>
                            <a class="nav-link" href="/subjects">
                                <div class="sb-nav-link-icon"><i class="bi bi-book" style="color: aliceblue;font-size: 18px;"></i></div>
                                <b style="color: aliceblue;font-size: 20px;">Subjects</b>
                            </a>

                        </div>
                    </div>
                    
                </nav>
            </div>
            <div id="layoutSidenav_content" style="background-color: #252a2e" >
            {{$slot}}
            <footer class="py-4 custom-footer-bg mt-auto">
                <div class="container-fluid px-4" >
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Chava Hindu 2024</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>
</html>