<?php
// Defined as constants so that they can't be changed
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'cs268project');

// $dbc will contain a resource link to the database
// @ keeps the error from showing in the browser
$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die('Could not connect to MySQL: ' . mysqli_connect_error());

function update_event(mysqli $dbc, array $request) {
    $id = $request['edit-id'];
    $name = $request['edit-name'];
    $eventDate = $request['edit-date'];
    $location = $request['edit-location'];
    $eventTime = $request['edit-time'];
    $imgFilePath = $request['edit-img'];
    $description = $request['edit-description'];
    
    $query = "UPDATE groupevents SET " .
            "name = '$name', " .
            "eventDate = '$eventDate', " .
            "location = '$location', " .
            "eventTime = '$eventTime', " .
            "imgFilePath = '$imgFilePath', " .
            "description = '$description' " .
            "WHERE id = '$id'";

    $request = mysqli_query($dbc, $query);
}

function insert_event(mysqli $dbc, array $request) {
    $name = $request['add-name'];
    $eventDate = $request['add-date'];
    $location = $request['add-location'];
    $eventTime = $request['add-time'];
    $imgFilePath = $request['add-img'];
    $description = $request['add-description'];

    $query = "INSERT INTO groupevents " .
            "(name, eventDate, location, eventTime, imgFilePath, description) VALUES " .
            "('$name','$eventDate','$location','$eventTime','$imgFilePath','$description')";

    $request = mysqli_query($dbc, $query);

    if($request) {

    } else {
        echo $query;
        echo "<br>";
        echo mysqli_error($dbc);
    }
}

function get_events(mysqli $dbc) {
    $query = "SELECT id, name, eventDate, location, eventTime, imgFilePath, description FROM groupevents";
    
    $result = mysqli_query($dbc, $query);

    $events = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $events;
}

function delete_event(mysqli $dbc, array $request) {
    $id = $request['delete-id'];

    $query = "DELETE FROM groupevents WHERE id='$id'";
    $result = mysqli_query($dbc, $query);

    if(!$result) {
        echo mysqli_error($dbc);
    }
}

function get_news(mysqli $dbc) {
    $query = "SELECT id, title, description, imgFilePath, imgAlt FROM news";

    $result = mysqli_query($dbc, $query);

    $news = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $news;
}

function update_news(mysqli $dbc, array $request) {
    $id = $request['edit-id'];
    $title = $request['edit-title'];
    $imgFilePath = $request['edit-imgfp'];
    $imgAlt = $request['edit-imgalt'];
    $description = $request['edit-description'];
    
    $query = "UPDATE groupevents SET " .
            "title = '$title', " .
            "description = '$description', " .
            "imgFilePath = '$imgFilePath', " .
            "imgAlt = '$imgAlt' " .
            "WHERE id = '$id'";

    $request = mysqli_query($dbc, $query);
}

function insert_news(mysqli $dbc, array $request) {
    $title = $request['add-title'];
    $description = $request['add-description'];
    $imgFilePath = $request['add-imgfp'];
    $imgAlt = $request['add-imgalt'];

    $query = "INSERT INTO news " .
            "(title, description, imgFilePath, imgAlt) VALUES " .
            "('$title','$description','$imgFilePath','$imgAlt')";

    $request = mysqli_query($dbc, $query);
}

function delete_news(mysqli $dbc, array $request) {
    $id = $request['delete-id'];

    $query = "DELETE FROM news WHERE id='$id'";
    $result = mysqli_query($dbc, $query);

    if(!$result) {
        echo mysqli_error($dbc);
    }
}

?>