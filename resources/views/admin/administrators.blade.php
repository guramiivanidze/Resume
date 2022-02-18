<?php

?>
    <!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Hello, world!</title>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav" style="width: 100%; justify-content: space-between">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="dashboard">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="administrators">Administrators</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>

        </ul>

        <div class="logout">

                <a class="nav-link" href="{{ route('auth.logout') }}">logout</a>

        </div>
    </div>
</nav>

<div style="padding: 60px">
    <h1>Administrators</h1>
    <a type="submit" href="/create" class="btn btn-primary">add product</a>
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">password</th>
            <th scope="col">action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($administrators as $administrator): ?>
        <tr>
            <th scope="row"><?php echo $administrator->id; ?></th>
            <td><?php echo $administrator->name; ?></td>
            <td><?php echo $administrator->email; ?></td>
            <td><?php echo $administrator->password; ?></td>
            <td>
                <a href="#" class="btn btn-primary">edit</a>
                <a href="#" class="btn btn-primary">delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

</div>
</body>

</html>
