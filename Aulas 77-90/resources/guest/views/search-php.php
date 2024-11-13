<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ title(title) }}</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ url('resources/general/pluguins/bootstrap/bootstrap.min.css') }}">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('resources/general/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('resources/general/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('resources/general/img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ url('resources/general/img/favicon/site.webmanifest') }}">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Home</a></li>
                        <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categories</a>
                            <ul class="dropdown-menu">
                                {% for category in categories %}
                                <li><a class="dropdown-item" href="{{ url('category/') }}{{ category.id }}">{{ category.title }}</a></li>
                                {% endfor %}
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Searchs</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ url('search-php') }}">Search only PHP</a></li>
                                <li><a class="dropdown-item" href="{{ url('search-jquery-ajax') }}">Search JQuery Ajax</a></li>
                            </ul>
                        </li>

                    </ul>
                    <form action="{{ url('search-php') }}" method="POST" class="d-flex" role="search">
                        <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main class="main">

        <section class="container my-5">
            <div class="row">
                <div class="col-lg-9 col-sm-12">
                    <div class="row">

                        {% if posts %}
                        {% for post in posts %}

                        <div class="col-lg-4 col-sm-12">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">{{ post.title }}</h5>
                                    <p class="card-text">{{ post.text }}</p>
                                    <a href="{{ url('post/') }}{{ post.slug }}" class="btn btn-primary">Read more</a>
                                </div>
                            </div>
                        </div>

                        {% endfor %}
                        {% else %}
                        <div class="alert alert-warning" role="alert">
                            Nenhum post encontrado com este termo.
                        </div>
                        {% endif %}
                    </div>
                </div>

                <div class="col-lg-3">
                    <h4 class="text-center fw-bold">Categories</h4>
                    <ul class="list-group list-group-flush">
                        {% for category in categories %}
                        <a href="{{ url('category/') }}{{ category.id }}" class="list-group-item list-group-item-action">{{ category.title }}</a>
                        {% endfor %}
                    </ul>
                </div>
            </div>
        </section>

    </main>

    {% include '_footer.php' %}

    <!-- Bootstrap -->
    <script src="{{ url('resources/general/pluguins/bootstrap/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
</body>

</html>