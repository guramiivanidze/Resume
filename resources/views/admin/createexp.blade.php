<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>add experiance </title>
</head>

<body>

<?php echo view('admin.menu') ?>


<div id="form" style="padding: 60px">

    <form action="{{route('admin.saveexp')}}" method="post">

        @csrf
        <h1>add experiance1</h1>
        <div class="form-group">
            <label for="exampleInputEmail1">title</label>
            <input type="text" class="form-control" placeholder="Enter name" name="title"
                   value="{{ old('title') }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">teaser date</label>
            <input type="text" class="form-control" placeholder="Enter email" name="teaser_date"
                   value="{{ old('teaser_date') }}">

        </div>
        <div class="form-group">
            <label >teaser</label>
            <textarea type="text" class="form-control" placeholder="enter teaser" name="teaser" value="{{old('teaser')}}"></textarea>

        </div>

        <div class="form-group">
            <label >description</label>
            <textarea type="text" class="form-control" placeholder="enter description" name="description" value="{{old('description')}}"></textarea>
        </div>


        <div class="form-group">
            <label >type - must be sumary/education/experiance</label>
            <textarea type="text" class="form-control" placeholder="enter type" name="type" value="{{old('type')}}"></textarea>
        </div>

        <div>
            <div class="container">
                <div class="row">
                    <div class='col-sm-6'>
                        <div class="form-group">
                            <div class='input-group date' id='datetimepicker1'>
                                <input type='text' class="form-control" />
                                <span class="input-group-addon">
               <span class="glyphicon glyphicon-calendar"></span>
               </span>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $(function () {
                            $('#datetimepicker1').datetimepicker();
                        });
                    </script>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>


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
