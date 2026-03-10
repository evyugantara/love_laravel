<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Belajar Bothstrap</title>
  </head>
  <body>
    <div>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    </div>
    
    <div class="container mt-5">
      <h1>Daftar Barang</h1>
      <div><button type="button" class="btn btn-primary mt-3">Tambah Barang</button></div>
      <table class="table table-striped table-hover mt-3">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Jenis Barang</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Tanggal</th>
            <th>Aksi</th>
          </tr>
        </thead>

          <tbody>
            <tr>
              <td>1</td>
              <td>Gitar</td>
              <td>Kayu</td>
              <td>3</td>
              <td>10.000.000</td>
              <td>20-01-2026</td>
              <td width="15%" class="text-center">
                 <button type="button" class="btn btn-warning">Ubah</button>
                  <button type="button" class="btn btn-danger">Hapus</button>
              </td>
            </tr>
          </tbody>

          <tbody>
            <tr>
              <td>2</td>
              <td>Suling</td>
              <td>Kayu</td>
              <td>5</td>
              <td>10.000.000</td>
              <td>25-01-2026</td>
              <td width="15%" class="text-center">
                  <button type="button" class="btn btn-warning">Ubah</button>
                  <button type="button" class="btn btn-danger">Hapus</button>
                  
              </td>
            </tr>
          </tbody>
</table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>