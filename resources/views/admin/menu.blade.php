<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav" style="width: 100%; justify-content: space-between">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="dashboard">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="administrators">Administrators</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="experiance">Experiance</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>

        </ul>

        <div class="logout">

            <a class="nav-link" href="{{ route('auth.logout') }}">logout</a>

        </div>
    </div>
</nav>
