<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Timedoor Project</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <style>
    th, td {
        margin: 10px;  
        padding: 15px;
        text-align: left;
    }
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
  }
    </style>
  {{-- navbar --}}
  <div>
    @include('includes.navbar')
  </div>

  <div class="container">
    <div class="row">
      <div class="justify-content-center d-flex">
        <h4>Top 10 Most Famous Author</h4>
      </div>
      <div class="d-flex justify-content-center">
        <table>
          <tr>
              <th>No</th>
              <th>Nama Penulis</th>
              {{-- <th>Rata-Rata Rating</th> --}}
              <th>Jumlah Pemilih</th>
          </tr>
          @foreach ($topAuthors as $key => $author)
          <tr>
              <td>{{ $key + 1 }}</td>
              <td>{{ $author->nama_author }}</td>
              {{-- <td>{{ $author->average_rating }}</td> --}}
              <td>{{ $author->jumlah_voters }}</td>
          </tr>
          @endforeach
      </table>
      
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>