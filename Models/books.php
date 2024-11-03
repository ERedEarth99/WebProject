<?php
namespace books;
//AS - Added get all Function
function get_all_books() {
    global $db;
    $query = 'SELECT * FROM books';
    $statement = $db->prepare($query);
    $statement->execute();
    $media = $statement->fetchAll();
    $statement->closeCursor();
    return $media;
}
//to sort results by genre.
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
//allows you to grab a product to update it //AS - This does not update. it just gets.
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
//allows you to add a movie/game/book //AS - Do not ever let a user edit the ID field.
                                      //I changed this to UPDATE as thats the only thing you should use ID for.
function update_product($book_id, $release, $name, $author, $publisher, $rating, $genre) {
    global $db;
    $query = 'UPDATE books
              SET BookName = :book_name, ReleaseYear = :release, Rating = :rating, Publisher = :publisher, BookGenre = :genre
              WHERE BookID = :book_id';
    
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
//AS - Took the old add_product and removed the ID field. Leaving the ID field blank will auto generate an ID.
function add_product($release, $name, $author, $publisher, $rating, $genre) {
    global $db;
    $query = 'INSERT INTO books
                 (BookName, ReleaseYear, Rating, Author, Publisher, BookGenre)
              VALUES
                 (:book_name, :release, :rating, :author, :publisher, :genre)';
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