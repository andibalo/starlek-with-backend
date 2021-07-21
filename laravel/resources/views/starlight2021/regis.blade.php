<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h1>Test Kirim File ke Drive</h1>
    <form action="/upload" method="post" enctype="multipart/form-data">
      @csrf
      <input type="file" class="form-control" name="gambar">
      <input type="submit" class="btn btn-success" value="Upload">
    </form>
  </div>
</body>
</html>