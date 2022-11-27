<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Cargando...</span>
    </div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->
<div class="container-fluid bg-dark px-5">
    <div class="row gx-4 d-none d-lg-flex">
        <div class="col-lg-6 text-start">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <div class="btn-sm-square rounded-circle bg-primary me-2">
                    <small class="fa fa-map-marker-alt text-white"></small>
                </div>
                <small>Bucaramanga, COL</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center py-3">
                <div class="btn-sm-square rounded-circle bg-primary me-2">
                    <small class="fa fa-envelope-open text-white"></small>
                </div>
                <small>sistectel.ingenieria@gmail.com</small>
            </div>
        </div>
        <div class="col-lg-6 text-end">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <div class="btn-sm-square rounded-circle bg-primary me-2">
                    <small class="fa fa-phone-alt text-white"></small>
                </div>
                <small>+57 3223172827</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center py-3">
                <div class="btn-sm-square rounded-circle bg-primary me-2">
                    <small class="far fa-clock text-white"></small>
                </div>
                <small>Lun - Vie : 8AM - 6PM</small>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5">
    <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center">
        <h2 class="m-0 text-primary">Sistectel</h2>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-4 py-lg-0">
            <a href="{{ url('/') }}" class="nav-item nav-link active">Inicio</a>
            <a href="{{ url('about') }}" class="nav-item nav-link">Acerca de</a>
            <a href="{{ url('services') }}" class="nav-item nav-link">Servicios</a>
            <a href="{{ url('projects') }}" class="nav-item nav-link">Proyectos</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Paginas</a>
                <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                    <a href="{{ url('feature') }}" class="dropdown-item">Funciones</a>
                    <a href="{{ url('free-quote') }}" class="dropdown-item">Cotización</a>
                    <a href="{{ url('team') }}" class="dropdown-item">Nuestro equipo</a>
                    <a href="{{ url('testimonial') }}" class="dropdown-item">Testimonios</a>
                    <a href="404" class="dropdown-item">404 Page</a>
                </div>
            </div>
            <a href="contact" class="nav-item nav-link">Contáctanos</a>
        </div>
        <div class="h-100 d-lg-inline-flex align-items-center d-none">
            <a class="btn btn-square rounded-circle bg-light text-primary me-2" href=""><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-square rounded-circle bg-light text-primary me-2" href=""><i class="fab fa-twitter"></i></a>
            <a class="btn btn-square rounded-circle bg-light text-primary me-2" href=""><i class="fab fa-linkedin-in"></i></a>
            <a class="btn btn-square rounded-circle bg-light text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</nav>
<!-- Navbar End -->
