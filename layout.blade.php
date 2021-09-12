<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="resources/css/style.css">
    <title>Телефонный справочник</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
    <a class="navbar-brand" href="{{route('home')}}">Телефонный справочник</a>
</nav>

<div class="container">
    <div class="row">
            <form method="get" action="{{route('search')}}">
                <div class="mb-2">
                <div class="form-row">
                    <label for="s"></label><input type="text" class="form-control" id="s" name="s" placeholder="Search....">
                        <button type="submit" class="btn btn-primary mb-2">Search</button>
                </div>
                </div>
            </form>
    </div>
    <div class="row mt-3 mb-3">
        <div class="col-md-12">
           @yield('content')
        </div>
    </div>
</div>
</body>
</html>
