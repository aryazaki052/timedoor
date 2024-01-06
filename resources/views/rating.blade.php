<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Rating</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  @include('includes.navbar')

  <div class="container">
    <h1>Insert Rating</h1>
    <form method="GET" action="{{ route('submitRating') }}">
      @csrf
      {{-- @method('PUT') --}}
      <div class="row gy-2">
        <div>
          <label>Book Author:</label>
          <select id="bookAuthor" name="author_id" title="Select Author">
              @foreach($authors as $author)
                  <option value="{{ $author->id }}" name="author_id">{{ $author->nama_author }}</option>
              @endforeach
          </select>
        </div>
        <div>
          <label>Book Name:</label>
          <select id="bookName" name="book_id" disabled>
              <option value="" selected disabled>Select Book</option>
          </select>
        </div>
        <div>
          <label>Rating:</label>
          <select id="rating" name="nilai">
              @for ($i = 1; $i <= 10; $i++)
                  <option value="{{ $i }}">{{ $i }}</option>
              @endfor
          </select>
        </div>
        <button type="submit" style="width: fit-content; margin-left:65px;">SUBMIT</button>
      </div>
    </form>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#bookAuthor').change(function() {
                var authorId = $(this).val();

                if (authorId) {
                    $('#bookName').prop('disabled', false); // Mengaktifkan dropdown book name

                    // Ajax request untuk mengambil daftar buku berdasarkan authorId
                    $.ajax({
                        url: '/get-books-by-author/' + authorId,
                        type: 'GET',
                        success: function(response) {
                            var options = '<option value="" selected disabled>Select Book</option>';
                            $.each(response, function(key, value) {
                                options += '<option value="' + value.id + '">' + value.judul + '</option>';
                            });
                            $('#bookName').html(options); // Memasukkan daftar buku ke dalam dropdown book name
                        },
                        error: function(xhr) {
                            console.log(xhr.responseText);
                        }
                    });
                } else {
                    $('#bookName').prop('disabled', true); // Menonaktifkan dropdown book name jika tidak ada author yang dipilih
                    $('#bookName').html('<option value="" selected disabled>Select Book</option>');
                }
            });
        });
    </script>
</body>
</html>

