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

    @if (\Session::has('successaddexp'))
        <div class="alert alert-success">
            <h4>{{ \Session::get('successaddexp') }}</h4>
        </div>

    @elseif (\Session::has('successdelexp'))
        <div class="alert alert-success">
            <h4>{{ \Session::get('successdelexp') }}</h4>
        </div>
    @endif

    <h1>Administrators</h1>
    <div style="padding-bottom: 5px">
        <a type="submit" href="createexppage" class="btn btn-primary">add experiance</a>
    </div>
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">title</th>
            <th scope="col">teaser data</th>
            <th scope="col">teaser</th>
            <th scope="col">description</th>
            <th scope="col">created date</th>
            <th scope="col">action</th>
        </tr>
        </thead>
        <tbody>


        <?php foreach ($experiance as $exp): ?>
        <tr>
            <th scope="row"><?php echo $exp->id; ?></th>
            <td><?php echo $exp->title; ?></td>
            <td><?php echo $exp->teaser_date; ?></td>
            <td><?php echo $exp->teaser; ?></td>
            <td><?php echo $exp->description; ?></td>
            <td><?php echo $exp->created_at; ?></td>
            <td>
                <a href="deleteexp/{{$exp->id}}" class="btn btn-danger">delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>


</div>
</body>

</html>
