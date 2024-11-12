<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ title(title) }}</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('resources/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('resources/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('resources/img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ url('resources/img/favicon/site.webmanifest') }}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ url('resources/css/app.css') }}">
</head>

<body>
    {% include '_header.php' %}

    <main class="main">
        {% block content %} {% endblock %}
    </main>

    {% include '_footer.php' %}

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Scripts -->
    <script type="text/javascript" src="{{ url('resources/js/app.js') }}"></script>
</body>

</html>