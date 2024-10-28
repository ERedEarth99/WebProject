<?php
//to be used later
function get_media_by_category($category_id) {
    global $db;
    $query = 'SELECT * FROM books
              WHERE books.categoryID = :category_id
              ORDER BY mediaID';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->execute();
    $media = $statement->fetchAll();
    $statement->closeCursor();
    return $media;
}
//allows you to grab a product to update it
function get_product($book_id) {
    global $db;
    $query = 'SELECT * FROM books
              WHERE BookID = :book_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':book_id', $book_id);
    $statement->execute();
    $media = $statement->fetch();
    $statement->closeCursor();
    return $media;
}
//allows you to delete a movie/game/book
function delete_media($book_id) {
    global $db;
    $query = 'DELETE FROM books
              WHERE BookID = :book_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':book_id', $book_id);
    $statement->execute();
    $statement->closeCursor();
}
//allows you to add a movie/game/book
function add_product($book_id, $release, $name, $author, $publisher, $rating, $genre) {
    global $db;
    $query = 'INSERT INTO books
                 (BookID, BookName, ReleaseYear, Rating, Author, Publisher, BookGenre)
              VALUES
                 (:book_id, :book_name, :release, :rating, :author, :publisher, :genre)';
    $statement = $db->prepare($query);
    $statement->bindValue(':book_id', $book_id);
    $statement->bindValue(':release', $release);
    $statement->bindValue(':book_name', $name);
    $statement->bindValue(':rating', $rating);
    $statement->bindValue(':author', $author);
    $statement->bindValue(':publisher', $publisher);
    $statement->bindValue(':genre', $genre);
    $statement->execute();
    $statement->closeCursor();
}
?>