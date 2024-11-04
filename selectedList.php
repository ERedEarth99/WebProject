<!DOCTYPE html>

<!-- 
AS - List a sorted tables info and edit delete functions-->

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
                <input type="hidden" name="action" value="show_book_form">
                    <input type="hidden" name="book_ID" value="<?php echo $book['BookID'];?>">
                    <input type="submit" value="Edit">
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