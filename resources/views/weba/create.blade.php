<html>
<head>
</head>
<body>
  <form method="post" action="{{ url('weba') }}">
    @csrf
    Nama<br>
    <input type="text" name="nama" value="saiful"><br>
    Prodi:<br>
    <input type="text" name="prodi" value="informatika"><br>
    Semester:<br>
    <input type="text" name="semseter" value="5"><br><br>
    <input type="submit" value="Submit">
  </form>
</body>
</html>


