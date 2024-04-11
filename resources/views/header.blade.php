<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">605-01</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" aria-current="page" data-bs-toggle="dropdown"
                            href={{url('product')}}>Товары</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href={{url('product')}}>Bce товары</a></li>
                            <li><a class="dropdown-item" href={{url('product/create')}}>Добавить товар</a></li>
                            <li><hr class="dropdown-divider"></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Личный кабинет</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>