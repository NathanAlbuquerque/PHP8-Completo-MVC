{% extends 'app.php' %}

{% block content %}

<section class="container my-5">
    <div class="row">
        <div class="col-lg-9 col-sm-12">

            <h1>{{ post.title }}</h1>
            <p>{{ post.text }}</p>

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

{% endblock %}