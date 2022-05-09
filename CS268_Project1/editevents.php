<?php

function fill_rows() {
  require_once('sql_conn.php'); 

  $query = "SELECT id, name, eventDate, location, eventTime, description FROM groupevents";

  $result = mysqli_query($dbc, $query);

  if($result) {
    while($row = mysqli_fetch_array($result)) {
      echo '<tr class="row">';
      echo '<td class="hidden">' . $row['id'] . '</td>';
      echo '<td>' . $row['name'] . '</td>';
      echo '<td>' . $row['eventDate'] . '</td>';
      echo '<td class="hidden">' . $row['location'] . '</td>';
      echo '<td class="hidden">' . $row['eventTime'] . '</td>';
      echo '<td class="hidden">' . $row['description'] . '</td>';
      echo '</tr>';
    }
  }
}

?>

<?php include("templates/top.php"); ?>

<script>
  $(document).ready(function(){
    $(".row").click(function(){
      console.log("clicked");
      let columns = $(this).children();
      $("#edit-name").val(columns[1].innerText);
      $("#edit-date").val(columns[2].innerText);
      $("#edit-location").val(columns[3].innerText);
      $("#edit-time").val(columns[4].innerText);
      $("#edit-description").val(columns[5].innerText);
    });
  });
</script>

<div class="edit-container">
  <div class="edit-card">
    <h2>Events</h2>
    <table>
      <tr>
        <th>Event Name</th>
        <th>Event Date</th>
      </tr>
      <?php fill_rows(); ?>
    </table>
  </div>
  <div class="edit-card">
    <h2>Edit</h2>
    <form method="post">
      <label for="edit-name">Name</label><br>
      <input id="edit-name" name="edit-name" type="text"><br>
      <label for="edit-date">Date</label><br>
      <input id="edit-date" name="edit-date" type="text"><br>
      <label for="edit-location">Location</label><br>
      <input id="edit-location" name="edit-location" type="text"><br>
      <label for="edit-time">Time</label><br>
      <input id="edit-time" name="edit-time" type="text"><br>
      <label for="edit-description">Description</label><br>
      <input id="edit-description" name="edit-description" type="text"><br>
      <input type="submit" value="Update">
    </form>
  </div>
  <div class="edit-card">
    <h2>Add</h2>
    <form method="post">
      <label for="add-name">Name</label><br>
      <input id="add-name" name="add-name" type="text"><br>
      <label for="add-date">Date</label><br>
      <input id="add-date" name="add-date" type="text"><br>
      <label for="add-location">Location</label><br>
      <input id="add-location" name="add-location" type="text"><br>
      <label for="add-time">Time</label><br>
      <input id="add-time" name="add-time" type="text"><br>
      <label for="add-description">Description</label><br>
      <input id="add-description" name="add-description" type="text"><br>
      <input type="submit" value="Add">
    </form>
  </div>
</div>

<?php include("templates/bottom.php"); ?>

  