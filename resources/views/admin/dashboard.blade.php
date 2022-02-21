<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Dashboard </title>
</head>

<body>

<?php echo view('admin.menu') ?>

{{--profiliiiiiiiiiiiiiiiiiiiiiiii--}}

<div id="table" style="padding: 60px">
    <h1 style="padding-left: 50%">Dashboard</h1>
    <?php  ?>
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th>{{ $LoggedUserInfo['name'] }}</th>
            <th>{{ $LoggedUserInfo['email'] }}</th>
            <th>
                <a href="{{ route('auth.logout') }}">logout</a>
            </th>

        </tr>

        </tbody>
    </table>
</div>


{{--profilis forma--}}


<form action="">
    <div class="container rounded bg-white mt-5 mb-5 ">
        <div class="row">
            {{--        <div class="col-md-3 border-right">--}}
            {{--            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQF2psCzfbB611rnUhxgMi-lc2oB78ykqDGYb4v83xQ1pAbhPiB&usqp=CAU"><span class="font-weight-bold">Amelly</span><span class="text-black-50">amelly12@bbb.com</span><span> </span></div>--}}
            {{--        </div>--}}
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label class="labels">Name</label>
                            <input type="text" class="form-control" placeholder="first name" value="">
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Surname</label>
                            <input type="text" class="form-control" value="" placeholder="surname">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-12">
                            <img src="/assets/img/profile-img.jpg" alt="..." class="img-thumbnail">
                        </div>
                    </div>

                    <div class="input-group mb-3" style="padding-top: 10px">
                        {{--                        <div class="input-group-prepend">--}}
                        {{--                            <span class="input-group-text">Upload</span>--}}
                        {{--                        </div>--}}
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label class="labels">Country</label>
                            <input type="text" class="form-control" placeholder="country" value="">
                        </div>
                        <div class="col-md-6">
                            <label class="labels">State/Region</label>
                            <input type="text" class="form-control" value="" placeholder="state">
                        </div>

                    </div>

                </div>
            </div>

            <div class="col-md-5">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>

                    <?php foreach ($table as $item): ?>
                    <?php if ($item->Field != 'id' && $item->Field != 'created_at' && $item->Field != 'updated_at' && $item->Field != 'image' ): ?>
                    <div class="col-md-12">
                        <label class="labels"><?php echo $item->Field; ?></label>
                        <input type="text" class="form-control" value="{{old($item->Field)}}">
                    </div>
                    <?php endif; ?>
                    <?php endforeach; ?>

                    <div class="mt-5 text-center">
                        <button class="btn btn-primary profile-button" type="button">Save Profile</button>
                    </div>
                </div>
            </div>


        </div>
    </div>


    </div>
    </div>
</form>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
</body>

</html>
