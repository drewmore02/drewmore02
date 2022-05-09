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
      $(this).children().each(function(i){
        console.log(this.innerHTML);
      });
    });
  });
</script>

<div class="edit-container">
  <div class="edit-card">
    <table>
      <tr>
        <th>Event Name</th>
        <th>Event Date</th>
      </tr>
      <?php fill_rows(); ?>
    </table>
  </div>
  <div class="edit-card">
    <p>show form here</p>
  </div>
</div>

<?php include("templates/bottom.php"); ?>

  