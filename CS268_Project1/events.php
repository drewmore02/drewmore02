<?php

include('databaseconn.php');

$events = get_events($dbc);

$css = ["styles.css", "events.css"];
include('templates/top.php');

?>

<div class="cards">

    <?php foreach($events as $event) { ?>
        <div class="card">
        <?php echo '<img class="event-image" src="' . $event['imgFilePath'] . '" alt="Event placeholder">'; ?>
        <h2 class="eventHeader"><?php echo htmlspecialchars($event['name']);?></h2>
        <br>
        <br class="headerLineBreak">
        <div class="event-line"><img class="card-icons" src="images/calendar.png" alt = "calendar"> <?php echo htmlspecialchars($event['eventDate']);?></div>
        <div class="event-line"><img class="card-icons" src="images/clock.png" alt = "clock"> <?php echo htmlspecialchars($event['eventTime']);?></div>
        <div class="event-line"><img class="card-icons" src="images/pin.png" alt = "location pin"> <?php echo htmlspecialchars($event['location']);?></div>
        <br>
        <p class="eventText"><?php echo htmlspecialchars($event['description']);?></p>
        </div>
    <?php } ?>

</div>

<?php include('templates/bottom.php'); ?>