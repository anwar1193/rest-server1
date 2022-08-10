<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Rest API Sederhana</title>
  </head>
  <body>
    
    <div class="container mt-2">
        <div class="col-md-8 offset-md-2">
        
            <div class="card">
                <div class="card-header">
                  Rest API Sederhana
                </div>

                <div class="card-body">

                  <h5 class="card-title">1. Tampil Data</h5>
                  <ul>
                    <li><span class="font-weight-bold">URL :</span> <span>https://anwar-news.000webhostapp.com/api/mahasiswa</span></li>
                    <li>Method : GET</li>
                  </ul>

                  <hr>

                  <h5 class="card-title">2. Tampil Data By ID</h5>
                  <ul>
                    <li><span class="font-weight-bold">URL :</span> <span>https://anwar-news.000webhostapp.com/api/mahasiswa/show/id</span></li>
                    <li>Method : GET</li>
                  </ul>

                  <hr>

                  <h5 class="card-title">3. Create Data</h5>
                  <ul>
                    <li><span class="font-weight-bold">URL :</span> <span>https://anwar-news.000webhostapp.com/api/mahasiswa/store</span></li>
                    <li>Method : POST</li>
                    <li>Parameter : username, address</li>
                  </ul>

                  <hr>

                  <h5 class="card-title">4. Update Data</h5>
                  <ul>
                    <li><span class="font-weight-bold">URL :</span> <span>https://anwar-news.000webhostapp.com/api/mahasiswa/update/id</span></li>
                    <li>Method : POST</li>
                    <li>Parameter : username, address</li>
                  </ul>

                  <hr>

                  <h5 class="card-title">5. Delete Data</h5>
                  <ul>
                    <li><span class="font-weight-bold">URL :</span> <span>https://anwar-news.000webhostapp.com/api/mahasiswa/destroy/id</span></li>
                    <li>Method : GET</li>
                  </ul>

                </div>
            </div>


            <div class="card mt-2">
                <div class="card-header">
                  Data
                </div>

                <div class="card-body">

                  <table class="table">
                    <thead>
                        <tr class="bg-info">
                            <td>NO</td>
                            <td>Username</td>
                            <td>Address</td>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($data_mahasiswa as $row)
                        <tr>
                            <td>{{ $loop->iteration; }}</td>
                            <td>{{ $row->username; }}</td>
                            <td>{{ $row->address }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>

                </div>
            </div>

        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>