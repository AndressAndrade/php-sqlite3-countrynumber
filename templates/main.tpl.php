<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Country numbers</title>
</head>

<body>
    <div id="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a href="" class="navbar-brand">AndressAndrade</a>
            <span class="navbar-text">
                Phone Numbers list
            </span>
        </nav>
    </div>
    <div id="main">
        <div class="dropdown" style="margin:10px;">
            <a class="btn btn-secondary dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Countries
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="/">All</a>
                <a class="dropdown-item" href="/countries/237">Cameroon</a>
                <a class="dropdown-item" href="/countries/251">Ethiopia</a>
                <a class="dropdown-item" href="/countries/212">Morocco</a>
                <a class="dropdown-item" href="/countries/258">Mozambique</a>
                <a class="dropdown-item" href="/countries/256">Uganda</a>
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <?php
                include $content
                ?>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>