<?php

include('databaseconn.php');
//write query for all news
$sql = 'SELECT * FROM groupEvents';

//make query & get result
$result = mysqli_query($dbc, $sql);

// fetch the resulting rows as an array
$events = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);

//close connection
mysqli_close($dbc);

include("templates/eventstop.php");
?>

    <div class="cards">

        <?php foreach($events as $event) { ?>
            <div class="card">
            <img class="event-image" src="<?php echo $event['imgFilePath']; ?>" alt = "Event placeholder" >
            <h2 class = "eventHeader"><?php echo htmlspecialchars($event['name']);?></h2>
            <br>
            <br class = "headerLineBreak">
            <div class="event-line"><img class="card-icons" src="images/calendar.png" alt = "calendar"> <?php echo htmlspecialchars($event['eventDate']);?></div>
            <div class="event-line"><img class="card-icons" src="images/clock.png" alt = "clock"> <?php echo htmlspecialchars($event['eventTime']);?></div>
            <div class="event-line"><img class="card-icons" src="images/pin.png" alt = "location pin"> <?php echo htmlspecialchars($event['location']);?></div>
            <br>
            <p class = "eventText"><?php echo htmlspecialchars($event['description']);?></p>
        </div>
        <?php } ?>

    </div>

<?php include("templates/bottom.php"); ?>