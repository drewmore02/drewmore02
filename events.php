<?php

include('databaseconn.php');
//write query for all news
$sql = 'SELECT * FROM groupEvents';

//make query & get result
$result = mysqliquery($dbc, $sql);

// fetch the resulting rows as an array
$events = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);

//close connection
mysqli_close($dbc);

include("templates/top.php");
?>

    <div class="cards">

        <?php foreach($events as $event) { ?>
            <div class="card">
            <img class="event-image" src="<?php echo $event['imgFilePath']; ?>" alt = "<?php echo $event['imgAlt']; ?>">
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

        <!--
        <div class="card">
            <img class="event-image" src="images/escaperoom.jpg" alt = "escape room">
            <h2 class = "eventHeader">Escape Room</h2>
            <br>
            <br class = "headerLineBreak">
            <div class="event-line"><img class="card-icons" src="images/calendar.png" alt = "calendar"> 3/31/22</div>
            <div class="event-line"><img class="card-icons" src="images/clock.png" alt = "clock"> 5:30pm</div>
            <div class="event-line"><img class="card-icons" src="images/pin.png" alt = "location pin"> Phillips 265</div>
            <br>
            <p class = "eventText">Behold as Phillip 265 gets transformed into an escape room where all members must work together to figure out how to leave. 

                OMTech will be hosting its first ever escape room! The event will last from 5:30 pm - 6:30 pm or finish when the room is "unlocked". There will be no set groups as there will only be one playthrough which means everyone will be working together. 
                
                No RSVP is required, but if you are not a regular OMTech member an RSVP would be nice so we can bring plenty of snacks. Please contact Brandke1688@uwec.edu if you have any further questions or to inform of your arrival :) .</p>
        </div>
        <div class="card">
            <img class="event-image" src="images/guestspeaker.jpg" alt = "guest speaker">
            <h2 class = "eventHeader">Guest Speaker</h2>
            <br>
            <br>
            <div class="event-line"><img class="card-icons" src="images/calendar.png" alt = "calendar"> 4/14/22</div>
            <div class="event-line"><img class="card-icons" src="images/clock.png" alt = "clock"> 5:30pm</div>
            <div class="event-line"><img class="card-icons" src="images/pin.png" alt = "location pin"> Phillips 265</div>
            <br>
            <p class="eventText">Join OmTech as we have a guest speaker come in to tell everyone about their job and company. Great way to learn more about a certain company and start networking!</p>
        </div>
        <div class="card">
            <img class="event-image" src="images/minutetowinit.jpg" alt = "minute to win it">
            <h2 class = "eventHeader">Minute To Win It</h2>
            <br>
            <br>
            <div class="event-line"><img class="card-icons" src="images/calendar.png" alt = "calendar"> 4/28/22</div>
            <div class="event-line"><img class="card-icons" src="images/clock.png" alt = "clock"> 5:30pm</div>
            <div class="event-line"><img class="card-icons" src="images/pin.png" alt = "location pin"> Phillips 265</div>
            <br>
            <p>OmTech will be hosting an array of minute to win it games with the ultimate prize being bragging rights (and maybe a crisp high five)!

                Come watch people get overly into fun challenges while you participate or eat free snacks and beverages on the sidelines.  </p>
        </div>
        <div class="card">
            <img class="event-image" src="images/homeworkhelp.jpg" alt = "homework help night">
            <h2 class = "eventHeader">Homework Help</h2>
            <h2 class = "eventHeader">/ Movie Night</h2>
            <br>
            <div class="event-line"><img class="card-icons" src="images/calendar.png" alt = "calendar"> 5/12/22</div>
            <div class="event-line"><img class="card-icons" src="images/clock.png" alt = "clock"> 5:30pm</div>
            <div class="event-line"><img class="card-icons" src="images/pin.png" alt = "location pin"> Phillips 265</div>
            <br>
            <p>As finals approach OmTech understand people need a break.

                Therefore OmTech will be hosting a Homework Help/Movie Night. All members will be willing to help with homework if anyone needs help otherwise a fun movie will be playing in the background.
                
                Come and relax with friends! </p>
        </div>
        -->
    </div>

<?php include("templates/bottom.php"); ?>