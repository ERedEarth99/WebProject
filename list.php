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
            <th>Year:</th>
            <th>Director:</th>
            <th>Publisher:</th>
            <th>Rating:</th>
            <th>Genre:</th>
            <th>&nbsp;</th>
        </tr>

        <?php foreach ($books as $book) : ?>
        <tr><?php echo $book['BookName'] ?> </tr>
        <tr><?php echo $book['Author'] ?> </tr>
        <tr><?php echo $book['ReleaseYear'] ?> </tr>
        <tr><?php echo $book['Publisher'] ?> </tr>
        <tr><?php echo $book['Rating'] ?> </tr>
        <tr><?php echo $book['BookGenre'] ?> </tr>
        <tr> <!-- AS - Simple Delete Functionality -->
            <form action = "index.php" method = "post">
                <input type="hidden" name="action" value="delete_category">
                    <input type="hidden" name="book_ID" value="<?php echo $book['bookID'];?>">
                    <input type="submit" value="delete_book">
            </form>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>