<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>LARAVEL CRUD</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="http://localhost:8000/admin/about/">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="http://localhost:8000/admin/about/">Hakkımda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost:8000/admin/experience/">Deneyim</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost:8000/admin/education/">Eğitim</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="http://localhost:8000/admin/skills/">Yetenekler</a>
            </li>            <li class="nav-item">
                <a class="nav-link " href="http://localhost:8000/admin/contact/">Sosyal Medya</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    @yield("content")
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>
</html>
