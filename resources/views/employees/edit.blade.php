<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <br>
        <h1>Edit Data</h1>
        <form action="/employee/{{$employees->id}}" method = "POST">
            @method('put')
            @csrf
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" name = "name" minlength = "5" maxlength = "20" class="form-control" value="{{$employees->name}}"required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Age</label>
                <div class="col-sm-10">
                    <input type="number" name = "age" min="21" class="form-control" value="{{$employees->age}}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                    <input type="text" name = "address" minlength = "10" maxlength = "40" class="form-control" value="{{$employees->address}}" required>
                </div>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Telephone Number</span>
                <span class="input-group-text">08</span>
                <input type="text" name = "telephone_number" minlength="9" maxlength="12" class="form-control" aria-label="08" value="{{$employees->telephone_number}}" required>
            </div>

            <!--<div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Telephone Number</label>
                <div class="col-sm-10">
                    <input type="text" name = "telephone_number" minlength = "9" maxlength = "12" class="form-control" value="{{$employees->telephone_number}}" required>
                </div>
            </div>-->
            <input clas="btn btn-success" type="submit" name = "submit" value = "Save">    
        </form>
    </div>
</body>
</html>