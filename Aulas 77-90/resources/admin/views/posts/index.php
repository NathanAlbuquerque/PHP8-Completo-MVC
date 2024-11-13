{% extends 'app.php' %}

{% block content %}

<h2>Posts</h2>
<a class="btn btn-primary btn-sm my-2" href="{{ url('admin/posts/create') }}">Create new</a>
<div class="col-6">
  <span class="badge rounded-pill text-bg-secondary">{{ total.draft }} drafts</span>
  <span class="badge rounded-pill text-bg-secondary">{{ total.published }} publisheds</span>
  <span class="badge rounded-pill text-bg-secondary">{{ total.archived }} archiveds</span>
</div>
<div class="table-responsive small">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Text</th>
        <th scope="col">Category</th>
        <th scope="col">Status</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>

      {% for post in posts %}
      <tr>
        <td>{{ post.id }}</td>
        <td>{{ post.title }}</td>
        <td>{{ crop(post.text, 50) }}</td>
        <td>{{ post.category_id }}</td>
        <td>{{ post.status }}</td>
        <td>
          <a href="{{ url('admin/posts/edit/') }}{{ post.slug }}" class="btn btn-warning btn-sm"><i class="bi bi-pen"></i></a>
          <a href="{{ url('admin/posts/delete/') }}{{ post.slug }}" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
        </td>
      </tr>
      {% endfor %}

    </tbody>
  </table>
</div>

{% endblock %}