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
    $description = $request['edit-description'];
    
    $query = "UPDATE groupevents SET " .
            "name = '$name', " .
            "eventDate = '$eventDate', " .
            "location = '$location', " .
            "eventTime = '$eventTime', " .
            "description = '$description' " .
            "WHERE id = '$id'";

    $request = mysqli_query($dbc, $query);
}

function insert_event(mysqli $dbc, array $request) {
    $name = $request['add-name'];
    $eventDate = $request['add-date'];
    $location = $request['add-location'];
    $eventTime = $request['add-time'];
    $description = $request['add-description'];

    $query = "INSERT INTO groupevents " .
            "(name, eventDate, location, eventTime, description) VALUES " .
            "('$name','$eventDate','$location','$eventTime','$description')";

    $request = mysqli_query($dbc, $query);

    if($request) {

    } else {
        echo $query;
        echo "<br>";
        echo mysqli_error($dbc);
    }
}

function get_events(mysqli $dbc) {
    $query = "SELECT id, name, eventDate, location, eventTime, description FROM groupevents";
    $result = mysqli_query($dbc, $query);
    $events = array();

    if($result) {
        while($row = mysqli_fetch_array($result)) {
            array_push($events, $row);
        }
    }

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

?>