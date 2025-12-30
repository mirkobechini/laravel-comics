<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    @vite(["resources/sass/app.scss", "resources/js/app.js"])
</head>
<body>
    @include("partials.header")
    <div class="bg-dark">
        sdas
    </div>

    @include("partials.footer")
</body>
</html>