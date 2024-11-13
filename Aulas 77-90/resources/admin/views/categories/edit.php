{% extends 'app.php' %}

{% block content %}

<h2>Categories</h2>
<form action="{{ url('admin/categories/update/') }}{{ category.id }}" method="POST">
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" name="title" id="title" value="{{ category.title }}">
  </div>
  <div class="mb-3">
    <label for="text" class="form-label">Text</label>
    <textarea class="form-control" name="text" id="text">{{ category.text }}</textarea>
  </div>
  <div class="mb-3">
    <label for="status" class="form-label">Status</label>
    <select class="form-select" name="status" id="status">
      <option selected disabled></option>
      <option value="draft" {% if category.status == 'draft' %} selected {% endif %}>Draft</option>
      <option value="published" {% if category.status == 'published' %} selected {% endif %}>Published</option>
      <option value="archived" {% if category.status == 'archived' %} selected {% endif %}>Archived</option>
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Edit</button>
</form>

{% endblock %}