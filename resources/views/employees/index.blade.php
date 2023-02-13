<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <br>
        <a class = "btn btn-success" href="/employee/create">Insert Data</a>
        <br>
        <br>
        <h2>Data of Employee</h2>
        <table class="table table-striped">

            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>Telephone Number</th>
                <th></th>
            </tr>

            @foreach($employees as $employee)
            <tr>
                <th>{{$employee->name}}</th>
                <th>{{$employee->age}}</th>
                <th>{{$employee->address}}</th>
                <th>{{$employee->telephone_number}}</th>
                <th>
                    <a class="btn btn-warning" href="/employee/{{$employee->id}}/edit">Edit</a>
                    <form action="/employee/{{$employee->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <input class="btn btn-danger" type="submit" value = "Delete">
                    </form>
                </th>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>