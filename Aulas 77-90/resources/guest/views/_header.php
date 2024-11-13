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
      </div>
    </div>
  </nav>
</header>