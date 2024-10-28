<?php
namespace games;
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
function get_product($game_id) {
    global $db;
    $query = 'SELECT * FROM games
              WHERE GameID = :game_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':game_id', $game_id);
    $statement->execute();
    $media = $statement->fetch();
    $statement->closeCursor();
    return $media;
}
//allows you to delete a movie/game/book
function delete_media($game_id) {
    global $db;
    $query = 'DELETE FROM games
              WHERE GameID = :game_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':game_id', $game_id);
    $statement->execute();
    $statement->closeCursor();
}
//allows you to add a movie/game/book
function add_product($id, $release, $name, $director, $publisher, $rating, $genre) {
    global $db;
    $query = 'INSERT INTO books
                 (GameID, GameName, ReleaseYear, Rating, Developer, Publisher, GameGenre)
              VALUES
                 (:id, :name_, :release, :rating, :developer, :publisher, :genre)';
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->bindValue(':release', $release);
    $statement->bindValue(':name_', $name);
    $statement->bindValue(':rating', $rating);
    $statement->bindValue(':developer', $developer);
    $statement->bindValue(':publisher', $publisher);
    $statement->bindValue(':genre', $genre);
    $statement->execute();
    $statement->closeCursor();
}
?>