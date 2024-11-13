{% extends 'app.php' %}

{% block content %}

<h2>Posts</h2>
<form action="{{ url('admin/posts/store') }}" method="POST">
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" name="title" id="title">
  </div>
  <div class="mb-3">
    <label for="text" class="form-label">Text</label>
    <textarea class="form-control" name="text" id="text"></textarea>
  </div>
  <div class="row mb-3">
    <div class="col-md-6">
      <label for="category_id" class="form-label">Category</label>
      <select class="form-select" name="category_id" id="category_id">
        <option selected disabled></option>
        {% for category in categories %}
        <option value="{{ category.id }}">{{ category.title }}</option>
        {% endfor %}
      </select>
    </div>
    <div class="col-md-6">
      <label for="status" class="form-label">Status</label>
      <select class="form-select" name="status" id="status">
        <option selected disabled></option>
        <option value="draft">Draft</option>
        <option value="published">Published</option>
        <option value="archived">Archived</option>
      </select>
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

{% endblock %}