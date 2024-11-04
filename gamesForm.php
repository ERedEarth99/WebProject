
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>genreDB</title>
    <link ref="stylesheet" href="./WebProject.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>    
  </head>
  <body>    
    <h1>Video Games</h1>
    <form action="gamesForm.php">
      <label for="GameName">Game: </label><br>
      <input type="text" id="GameName" name="GameName" value="">

      <label for="Gyear">Year: </label>
      <input type="text" id="Gyear" name="Gyear" value="">

      <label for="Developer">Developer: </label>
      <input type="text" id="Developer" name="Developer" value="">

      <label for="ReleaseYear">Year: </label>
      <input type="text" id="ReleaseYear" name="ReleaseYear" value="">
      
      <label for="Publisher"> Publisher: </label>
      <input type="text" id="Publisher" name="Publisher" value="">

      <label for="GameGenre"> Genre: </label>
      <input type="text" id="GameGenre" name="GameGenre" value="">

      <label for="Rating"> Rating:  </label>
      <input type="text" id="Rating" name="Rating" value=""> <br>

      <input type="Submit" value="Submit">
    </form>

  </body>
</html>
