<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}">
</head>

<body>

<div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto mt-5">
                <h4 class="text-center"> Dashboard </h4>
                <hr>

<h1 text="center">Student Marks With Gpa</h1>
<button type="button" class="btn btn-primary mb-2 "><a href=" {{ route('student.create') }}"><span class="text-light">Add Student</span></a></button>

        <table class="table table-bordered table-info border-warning table-info border border-3 rounded-pill">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Bangla</th>
                    <th scope="col">English</th>
                    <th scope="col">Math</th>
                    <th scope="col">Physics</th>
                    <th scope="col">Chemistry</th>
                    <th scope="col">Gpa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $data)
                <tr>
                    <th scope="row">{{ $data->name }}</th>
                    <td>{{$data->bangla}}</td>
                    <td>{{$data->english}}</td>
                    <td>{{ $data->math }}</td>
                    <td> {{ $data->phy  }} </td>
                    <td> {{ $data->chem }} </td>
                    <td> {{ $data->gpa }} </td>
                </tr>
                @endforeach
            </tbody>
        </table>


</div>
</div>
</div>
</body>

</html>