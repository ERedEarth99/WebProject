<<<<<<< HEAD
<?php 

    //AS - Add in all Functions
    require_once('books.php');
    require_once('database.php');
    require_once('games.php');
    require_once('movies.php');
    require_once('genre.php');

    //AS Variable for holding data as needed
    $DataHelper = '';

    //AS - Grab action for use.
    $action = filter_input(INPUT_POST, 'action');
    if ($action === NULL) {
        $action = filter_input(INPUT_GET, 'action');
        if ($action === NULL) {
            $action = 'show_list';
        }
    }
    //AS - All HTML should come from the controller. There should never be an HTML file.
    switch($action) {
        case 'show_list':
            $books = get_all_books();
            $movies = get_all_movies();
            $games = get_all_games();
            include('list.php');
            break;
        case 'show_book_form':
            include('booksForm.php');
            break;
        case 'show_movie_form':
            include('moviesForm.php');
            break;
        case 'Show_game_form':
            include('gamesForm.php');
            break;
        case 'delete_book':
            include('list.php');
            break;
        case 'delete_game':
            include('list.php');
            break;
        case 'delete_movie':
            include('list.php');
            break;
        case 'update_book':
            include('booksForm.php');
            break;
        case 'update_movie':
            include('moviesForm.php');
            break;
        case 'update_game':
            include('gamesForm.php');
            break;
    }
?>
=======
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link ref="stylesheet" href="./">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>    
</head>
<body>
<h1>Project</h1>
<main>
    <h1>Menu</h1>
    <ul>
        <li>
            <a href="Games/gamesView.php">Games</a>
        </li>
        <li>
            <a href="Movies/moviesView.php">Movies</a>
        </li>
        <li>
            <a href="Books/booksView.php">Books</a>
        </li>
    </ul>
</main>
</body>
</html>
>>>>>>> 203118752855386d063ff22a9f986c397ee78ace
