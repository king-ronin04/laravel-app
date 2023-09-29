<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">NYKAA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto"> <!-- Left-aligned links -->
            <li class="nav-item active">
                <a class="nav-link" href="/home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/list">List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/store">Store</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/aboutus">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact">Contact Us</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto"> <!-- Right-aligned links -->
            <li class="nav-item ">
            <a href="{{ url('/login') }}" class="btn btn-outline-dark m-2"><i class="fa fa-sign-in-alt mr-1"></i> Login</a>
            </li>
            <li class="nav-item">
            <a href="{{ url('/register') }}" class="btn btn-outline-dark m-2"><i class="fa fa-user-plus mr-1"></i> Register</a>
            </li>
        </ul>
    </div>
</nav>