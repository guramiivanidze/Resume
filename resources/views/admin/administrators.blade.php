<?php

?>
    <!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Administrators</title>
</head>

<body>

<?php echo view('admin.menu') ?>

<div style="padding: 60px">

    @if (\Session::has('successadd'))
        <div class="alert alert-success">
            <h4>{{ \Session::get('successadd') }}</h4>
        </div>

    @elseif (\Session::has('successdel'))
        <div class="alert alert-success">
            <h4>{{ \Session::get('successdel') }}</h4>
        </div>
    @endif

    <h1>Administrators</h1>
    <div style="padding-bottom: 5px">
        <a type="submit" href="{{ route('admin.register') }}" class="btn btn-primary">add administrators</a>
    </div>
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
            <td>

                <?php echo $administrator->password; ?></td>


            <td>

                <a href="/admin/deleteadministrator/{{$administrator->id}}" class="btn btn-danger">delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>


</div>
</body>

</html>
