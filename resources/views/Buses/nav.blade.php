<!-- resources/views/Buses/nav.blade.php -->



<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm p-3 mb-5 bg-white rounded custom-navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo.png') }}" alt="Laravel Bus App" width="30" height="30" class="d-inline-block align-top me-2">
            NavettPro
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('buses.index') }}">
                        <i class="bi bi-bus-front me-1"></i>Liste des Bus
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('buses.create') }}">
                        <i class="bi bi-plus-circle me-1"></i>Ajouter un Bus
                    </a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Rechercher</button>
            </form>
        </div>
    </div>
</nav>

<!-- Animation de bus -->
<div class="bus-animation-container">
    <img src="{{ asset('images/bus.jpg') }}" alt="Bus animation" class="bus-animation">

</div>
<style>
    .custom-navbar {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 1.1rem;
    }

    .custom-navbar .navbar-brand {
        font-weight: bold;
        color: #007BFF;
    }

    .custom-navbar .navbar-brand:hover {
        color: #0056b3;
    }

    .custom-navbar .nav-link {
        color: #555;
        transition: color 0.3s;
    }

    .custom-navbar .nav-link:hover {
        color: #007BFF;
    }

    .custom-navbar .form-control {
        border-radius: 50px;
    }

    .custom-navbar .btn-outline-success {
        border-radius: 50px;
        transition: background-color 0.3s, color 0.3s;
    }

    .custom-navbar .btn-outline-success:hover {
        background-color: #28a745;
        color: #fff;
    }

    .bus-animation-container {
        position: relative;
        width: 100%;
        height: 100px; /* Adjust height as needed */
        overflow: hidden;
        background-color: #f8f9fa;
    }

    .bus-animation {
    position: absolute;
    bottom: 0;
    left: -100px; /* Start position */
    width: 100px; /* Adjust size as needed */
    height: auto;
    animation: busMove 10s linear infinite; /* Change 10s to adjust the animation duration */
}

@keyframes busMove {
    0% {
        left: -100px; /* Start position */
    }
    50% {
        left: calc(100% - 100px); /* End position */
    }
    100% {
        left: -100px; /* Reset to start */
    }
}

</style>
