
<?php 

    //AS - Add in all Functions
    require_once('./Models/books.php');
    require_once('./Models/database.php');
    require_once('./Models/games.php');
    require_once('./Models/movies.php');
    require_once('./Models/genre.php');



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
            $books = books\get_all_books();
            $movies = movies\get_all_movies();
            $games = games\get_all_games();
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