<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>
  <div class="container">
    <div class="row mx-auto">
      <div class="col-md-6 offset-md-3 ">
        <h1 class="mt-5 text-center"> Add Student Details </h1>
        <form action="{{ route('mark.index') }}" method="post">
          @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Student Name</label>
            <input type="text" class="form-control" id="name" name="name">
          </div>
          <div class="mb-3">
            <label for="bangla" class="form-label">Bangla</label>
            <input type="number" class="form-control" id="bangla" name="bangla">
          </div>
          <div class="mb-3">
            <label for="english" class="form-label">English</label>
            <input type="number" class="form-control" id="english" name="english">
          </div>
          <div class="mb-3">
            <label for="math" class="form-label">Math</label>
            <input type="number" class="form-control" id="math" name="math">
          </div>
          <div class="mb-3">
            <label for="phy" class="form-label">Physics</label>
            <input type="number" class="form-control" id="phy" name="phy">
          </div>
          <div class="mb-3">
            <label for="chem" class="form-label">Chemistry</label>
            <input type="number" class="form-control" id="chem" name="chem">
          </div>
          <button type="submit" class="btn btn-primary">Add Data</button>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>