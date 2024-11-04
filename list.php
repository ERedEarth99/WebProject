<!DOCTYPE html>

<!-- 
AS - List all tables information and options to interact with the database
-->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Books</h2>
    <table>
        <tr>
            <th>Name:</th>
            <th>Author:</th>
            <th>Year:</th>
            <th>Publisher:</th>
            <th>Rating:</th>
            <th>Genre:</th>
            <th>&nbsp;</th>
        </tr>
        
        <?php foreach ($books as $book) : ?>
        <tr>
        <td><?php echo $book['BookName'] ?> </td>
        <td><?php echo $book['Author'] ?> </td>
        <td><?php echo $book['ReleaseYear'] ?> </td>
        <td><?php echo $book['Publisher'] ?> </td>
        <td><?php echo $book['Rating'] ?> </td>
        <td><?php echo $book['BookGenre'] ?> </td>
        <td> <!-- AS - Update Function -->
            <form action = "index.php" method = "post">
                <input type="hidden" name="action" value="update_book">
                    <input type="hidden" name="movie_ID" value="<?php echo $book['BookID'];?>">
                    <input type="submit" value="Update">
            </form>
        </td>
        <td> <!-- AS - Simple Delete Functionality -->
            <form action = "index.php" method = "post">
                <input type="hidden" name="action" value="delete_book">
                    <input type="hidden" name="book_ID" value="<?php echo $book['BookID'];?>">
                    <input type="submit" value="Delete">
            </form>
        </td>
        </tr>
        <?php endforeach ?>
        </table>
        <form action="index.php" value="add_book">
            <input type="submit" value="Add Book">
        </form>
        <h2>Movies</h2>
    <table>
        <tr>
            <th>Name:</th>
            <th>Director:</th>
            <th>Year:</th>
            <th>Publisher:</th>
            <th>Rating:</th>
            <th>Genre:</th>
            <th>&nbsp;</th>
        </tr>

        <?php foreach ($movies as $movie) : ?>
        <tr>
        <td><?php echo $movie['MovieName'] ?> </td>
        <td><?php echo $movie['Director'] ?> </td>
        <td><?php echo $movie['ReleaseYear'] ?> </td>
        <td><?php echo $movie['Publisher'] ?> </td>
        <td><?php echo $movie['Rating'] ?> </td>
        <td><?php echo $movie['MovieGenre'] ?> </td>
        <td> <!-- AS - Update Function -->
            <form action = "index.php" method = "post">
                <input type="hidden" name="action" value="update_movie">
                    <input type="hidden" name="movie_ID" value="<?php echo $movie['MovieID'];?>">
                    <input type="submit" value="Update">
            </form>
        </td>
        <td> <!-- AS - Simple Delete Functionality -->
            <form action = "index.php" method = "post">
                <input type="hidden" name="action" value="delete_movie">
                    <input type="hidden" name="movie_ID" value="<?php echo $movie['MovieID'];?>">
                    <input type="submit" value="Delete">
            </form>
        </td>
        </tr>
        <?php endforeach ?>
    </table>
    <form action="index.php" value="add_movie">
            <input type="submit" value="Add Movie">
        </form>
    <h2>Games</h2>
    <table>
        <tr>
            <th>Name:</th>
            <th>Developer:</th>
            <th>Year:</th>
            <th>Publisher:</th>
            <th>Rating:</th>
            <th>Genre:</th>
            <th>&nbsp;</th>
        </tr>

        <?php foreach ($games as $game) : ?>
        <tr>
        <td><?php echo $game['GameName'] ?> </td>
        <td><?php echo $game['Developer'] ?> </td>
        <td><?php echo $game['ReleaseYear'] ?> </td>
        <td><?php echo $game['Publisher'] ?> </td>
        <td><?php echo $game['Rating'] ?> </td>
        <td><?php echo $game['GameGenre'] ?> </td>
        <td> <!-- AS - Update Function -->
            <form action = "index.php" method = "post">
                <input type="hidden" name="action" value="update_game">
                    <input type="hidden" name="movie_ID" value="<?php echo $game['GameID'];?>">
                    <input type="submit" value="Update">
            </form>
        </td>
        <td> <!-- AS - Simple Delete Functionality -->
            <form action = "index.php" method = "post">
                <input type="hidden" name="action" value="delete_game">
                    <input type="hidden" name="game_ID" value="<?php echo $game['GameID'];?>">
                    <input type="submit" value="Delete">
            </form>
        </td>
        </tr>
        <?php endforeach ?>
    </table>
    <form action="index.php" value="add_game">
            <input type="submit" value="Add Game">
        </form>
</body>
</html>