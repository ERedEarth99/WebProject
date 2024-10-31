<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link ref="stylesheet" href="./WebProject.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>    
</head>
<body>
<h1>Books</h1>
<!-- // Books Forms -->
<form action="booksForm.php">
<label for="Bname">Book: 
</label><br>
<input type="text" id="Bname"
name="Bname" value="">

<label for="Byear">Year: 
</label>
<input type="text" id="Byear"
name="Byear" value="">

<label for="Bauthor">  Author: 
</label>
<input type="text" id="Bauthor"
name="Bauthor" value="">

<label for="Bpublisher"> Publisher: 
</label>
<input type="text" id="Bpublisher"
name="Bpublisher" value="">

<label for="Bgenre"> Genre: 
</label>
<input type="text" id="Bgenre"
name="Bgenre" value="">

<label for="Brating"> Rating: 
</label>
<input type="text" id="Brating"
name="Brating" value=""><br>

<input type="Submit" value="Submit">
</form>
</body>
</html>