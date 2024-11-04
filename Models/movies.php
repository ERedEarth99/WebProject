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
//allows you to grab a product to update it //AS - This does not update. it just gets.
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
//allows you to add a movie/game/book //AS - Do not ever let a user edit the ID field.
                                      //I changed this to UPDATE as thats the only thing you should use ID for.
function update_product($movie_id, $release, $name, $director, $publisher, $rating, $genre) {
    global $db;
    $query = 'UPDATE movies
              SET MovieName = :movie_name, ReleaseYear = :release, Rating = :rating, Director = :director, Publisher = :publisher, MovieGenre = :genre
              WHERE MovieID = :movie_id';
    
    $statement = $db->prepare($query);
    $statement->bindValue(':movie_id', $movie_id);
    $statement->bindValue(':release', $release);
    $statement->bindValue(':movie_name', $name);
    $statement->bindValue(':rating', $rating);
    $statement->bindValue(':director', director);
    $statement->bindValue(':publisher', $publisher);
    $statement->bindValue(':genre', $genre);
    $statement->execute();
    $statement->closeCursor();
}

//AS - Took the old add_product and removed the ID field. Leaving the ID field blank will auto generate an ID.
function add_product($release, $name, $director, $publisher, $rating, $genre) {
    global $db;
    $query = 'INSERT INTO books
                 (MovieName, ReleaseYear, Rating, Director, Publisher, MovieGenre)
              VALUES
                 (:movie_name, :release, :rating, :director, :publisher, :genre)';
    $statement = $db->prepare($query);
    $statement->bindValue(':movie_id', $movie_id);
    $statement->bindValue(':release', $release);
    $statement->bindValue(':movie_name', $name);
    $statement->bindValue(':rating', $rating);
    $statement->bindValue(':director', $director);
    $statement->bindValue(':publisher', $publisher);
    $statement->bindValue(':genre', $genre);
    $statement->execute();
    $statement->closeCursor();
}
?>
