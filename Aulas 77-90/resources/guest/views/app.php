<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
   <!-- Meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Isi">
  <title>{{ title(title) }}</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ url('resources/general/pluguins/bootstrap/bootstrap.min.css') }}">
  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="{{ url('resources/general/img/favicon/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ url('resources/general/img/favicon/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ url('resources/general/img/favicon/favicon-16x16.png') }}">
  <link rel="manifest" href="{{ url('resources/general/img/favicon/site.webmanifest') }}">
  <!-- Styles -->
  <!-- <link rel="stylesheet" href="{{ url('resources/css/app.css') }}"> -->
</head>

<body>
  {% include '_header.php' %}

  <main class="main">
    {% block content %} {% endblock %}
  </main>

  {% include '_footer.php' %}

  <!-- Bootstrap -->
  <script src="{{ url('resources/general/pluguins/bootstrap/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
  <!-- Scripts -->
  <!-- <script type="text/javascript" src="{{ url('resources/js/app.js') }}"></script> -->
</body>

</html>