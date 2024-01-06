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
  

<div class="container" style="margin-top:20px; ">
  <div class="row gy-4">
    <div>
      <form method="GET" action="{{ route('home.index') }}">
        @csrf
        {{-- @method('PUT') --}}
        <label>List shown:</label>
        <select name="listShown">
          <option value="50">10</option>
          <option value="20">20</option>
          <option value="30">30</option>
          <option value="40">40</option>
          <option value="50">50</option>
          <option value="60">60</option>
          <option value="70">70</option>
          <option value="80">80</option>
          <option value="90">90</option>
          <option value="100">100</option>
          <option value="all">Semua Buku</option>
        </select>
      </div>
      <div>
        <label>Search:</label>
        <!-- Input pencarian -->
        <input type="text" id="search" name="search" value="{{ request()->get('search') }}">
      </div>
      <button type="submit" style="width: fit-content; margin-left:65px;">SUBMIT</button>
    </form>
     
  </div>
</div>

<div class="container">
  <div style="display: flex; justify-content:center; align-item:center;">
    <table>
      <tr>
          <th>No</th>
          <th >Book Name</th>
          <th>Category Name</th>
          <th>Author Name</th>
          <th>Average Rating</th>
          <th>Voter</th>
      </tr>
      <tr>
        @foreach ($books as $key => $book)
        <tr>
          <td>{{ $key + 1 }}</td>
            {{-- <td>{{ $book->id }}</td> --}}
            <td>{{ $book->judul }}</td>
            <td>{{ $book->kategori->nama_kategori }}</td>
            <td>{{ $book->author->nama_author }}</td>
            <td>{{ $book->average_rating }}</td>
            <td>{{ $book->jumlah_voters }}</td>
        </tr>
    @endforeach
      </tr>
    </table>
  </div>
</div>