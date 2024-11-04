<?php
namespace movies;
function get_all_movies() {
    global $db;
    $query = 'SELECT * FROM movies';
    $statement = $db->prepare($query);
    $statement->execute();
    $media = $statement->fetchAll();
    $statement->closeCursor();
    return $media;
}
//to be used later
function get_media_by_category($category_id) {
    global $db;
    $query = 'SELECT * FROM media
              WHERE media.categoryID = :category_id
              ORDER BY mediaID';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->execute();
    $media = $statement->fetchAll();
    $statement->closeCursor();
    return $media;
}
//allows you to grab a product to update it
function get_product($movie_id) {
    global $db;
    $query = 'SELECT * FROM movies
              WHERE MovieID = :movie_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':movie_id', $movie_id);
    $statement->execute();
    $media = $statement->fetch();
    $statement->closeCursor();
    return $media;
}
//allows you to delete a movie/game/book
function delete_media($movie_id) {
    global $db;
    $query = 'DELETE FROM movies
              WHERE MovieID = :movie_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':movie_id', $movie_id);
    $statement->execute();
    $statement->closeCursor();
}
//allows you to add a movie/game/book
function add_product($id, $release, $name, $director, $publisher, $rating, $genre) {
    global $db;
    $query = 'INSERT INTO books
                 (MovieID, MovieName, ReleaseYear, Rating, Director, Publisher, MovieGenre)
              VALUES
                 (:id, :name_, :release, :rating, :director, :publisher, :genre)';
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->bindValue(':release', $release);
    $statement->bindValue(':name_', $name);
    $statement->bindValue(':rating', $rating);
    $statement->bindValue(':director', $director);
    $statement->bindValue(':publisher', $publisher);
    $statement->bindValue(':genre', $genre);
    $statement->execute();
    $statement->closeCursor();
}
?>