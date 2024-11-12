{% extends 'app.php' %}

{% block content %}

<section class="container my-5">
    <div class="row">
        <div class="col-lg-9 col-sm-12">
            <div class="row">
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

{% endblock %}