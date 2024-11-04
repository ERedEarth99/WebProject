<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>    
<style>
    table, th, td {
  border: 1px solid black;
}
table {
  border-spacing: 20px;
}
</style>
 </head> 
</head>
<body>
<h1>Movies</h1>
<table style="width:45%">  
        <!-- add movies rows here -->
   <tr>
    <td><form action="index.php" method="post">
     <th>Movie: <?php echo $_GET["MovieName"]; ?></th>
     <th>Year: <?php echo $_GET["ReleaseYear"]; ?></th>
     <th>Director: <?php echo $_GET["Director"]; ?></th>
     <th>Publisher: <?php echo $_GET["Publisher"]; ?></th>
     <th>Genre: <?php echo $_GET["MovieGenre"]; ?></th>
     <th>Rating: <?php echo $_GET["Rating"]; ?></th>
     <td><form></td>
    </form>
    <input type="submit" value="submit">
    <input type="submit" value="Delete">
    <input type="hidden" name="action" value="delete_category">
    </td>
   </tr>
</table>
</body>
</html>
<!-- $id, $release, $name, $director, $publisher, $rating, $genre -->
