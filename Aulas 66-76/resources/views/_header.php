<div style="display: none;">
    <?php

    use app\Models\Category;

    $categories = new Category;
    $categories = $categories->all();
    ?>
</div>

<header class="d-flex justify-content-center py-3">
    <ul class="nav nav-pills">
        <li class="nav-item"><a href="/" class="nav-link active" aria-current="page">Home</a></li>
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
    </ul>
</header>