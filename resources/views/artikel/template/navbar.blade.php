<nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-1">
    <div class="container">
        <a href="/" class="navbar-brand">
            <img src="../assets/img/logo.png" alt="images" width="50">
            Oryzaes Outdoor
        </a>
        <button type="button" class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse"
            aria-controls="navbarNav" aria-expanded="false" aria-lable="Toggle Navbar">
            <span class="navbar-toggler-icon">

            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="mx-auto">

            </div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link text-white">Login</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('register') }}" class="nav-link text-white">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
var nav = document.querySelector('nav');

window.addEventListener('scroll', function() {
    if (window.pageYOffset > 100) {
        nav.classList.add('bg-secondary', 'shadow');
    } else {
        nav.classList.remove('bg-secondary', 'shadow');
    }
});
</script>
