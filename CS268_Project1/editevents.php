<?php
session_start();

require('databaseconn.php');

if(!isset($_SESSION['success']) || (isset($_SESSION['success']) && $_SESSION['success'] === FALSE)){
    die(header("Location: 404.php"));
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  // foreach($_POST as $key => $value) {
  //   echo nl2br("POST parameter '$key' has '$value' \n");
  // }
  
  if(isset($_POST['edit'])) {
    update_event($dbc, $_POST);
  }

  if(isset($_POST['add'])) {
    insert_event($dbc, $_POST);
  }

  if(isset($_POST['delete'])) {
    delete_event($dbc, $_POST);
  }
}

function fill_rows(mysqli $dbc) {
  $events = get_events($dbc);

  foreach($events as $event) {
      echo '<tr class="row">';
      
      echo '<td>' . $event['id'] . '</td>';
      echo '<td>' . $event['name'] . '</td>';
      echo '<td>' . $event['eventDate'] . '</td>';
      echo '<td class="hidden">' . $event['location'] . '</td>';
      echo '<td class="hidden">' . $event['eventTime'] . '</td>';
      echo '<td class="hidden">' . $event['imgFilePath'] . '</td>';
      echo '<td class="hidden">' . $event['description'] . '</td>';

      echo '<td>';
      echo '<input name="delete" form="delete-event" type="hidden" value="delete">';
      echo '<input name="delete-id" form="delete-event" type="hidden" value="' . $event['id'] . '">';
      echo '<button class = "editButton" type="submit" form="delete-event">&ZeroWidthSpace;</button>';
      echo '</td>';
      

      echo '</tr>';
  }
}

?>

<?php 
  $css = ["styles.css", "edit.css", "contactUs.css"];
  include("templates/top.php");
?>

<script>
  $(document).ready(function(){
    $(".row").click(function(){
      console.log("clicked");
      let columns = $(this).children();

      // add values to edit boxes
      $("#edit-id").val(columns[0].innerText);
      $("#edit-name").val(columns[1].innerText);
      $("#edit-date").val(columns[2].innerText);
      $("#edit-location").val(columns[3].innerText);
      $("#edit-time").val(columns[4].innerText);
      $("#edit-img").val(columns[5].innerText);
      $("#edit-description").val(columns[6].innerText);

      // add value to delete box
      $('#delete-id').val(columns[0].innerText);
    });
  });
</script>

<form id="delete-event" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>"></form>

<div class="edit-container">
  <div class="edit-card">
    <h2>Events</h2>
    <table class="events">
      <tr>
        <th>Event Id</th>
        <th>Event Name</th>
        <th>Event Date</th>
        <th>Delete</th>
      </tr>
      <?php fill_rows($dbc); ?>
    </table>
  </div>
  <div class="edit-card">
    <h2>Edit</h2>
    <form id="edit" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
      <input name="edit" type="hidden" value="edit">
      <input id="edit-id" name="edit-id" type="hidden">
      <label for="edit-name">Name</label><br>
      <input id="edit-name" name="edit-name" type="text"><br>
      <label for="edit-date">Date</label><br>
      <input id="edit-date" name="edit-date" type="text"><br>
      <label for="edit-location">Location</label><br>
      <input id="edit-location" name="edit-location" type="text"><br>
      <label for="edit-time">Time</label><br>
      <input id="edit-time" name="edit-time" type="text"><br>
      <label for="edit-img">Image</label><br>
      <input id="edit-img" name="edit-img" type="text"><br>
      <label for="edit-description">Description</label><br>
      <textarea id="edit-description" name="edit-description" form="edit" placeholder="This is not secure"></textarea><br>
      <input type="submit" value="Update">
    </form>
  </div>
  <div class="edit-card">
    <h2>Add</h2>
    <form id="add" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
      <input name="add" type="hidden" value="add">
      <label for="add-name">Name</label><br>
      <input id="add-name" name="add-name" type="text"><br>
      <label for="add-date">Date</label><br>
      <input id="add-date" name="add-date" type="text"><br>
      <label for="add-location">Location</label><br>
      <input id="add-location" name="add-location" type="text"><br>
      <label for="add-time">Time</label><br>
      <input id="add-time" name="add-time" type="text"><br>
      <label for="add-img">Image</label><br>
      <input id="add-img" name="add-img" type="text"><br>
      <label for="add-description">Description</label><br>
      <textarea id="add-description" name="add-description" form="add"></textarea><br>
      <input type="submit" value="Add">
    </form>
  </div>
</div>

<?php include("templates/bottom.php"); ?>