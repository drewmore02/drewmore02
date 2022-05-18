<?php
session_start();

if(!isset($_SESSION['success']) || (isset($_SESSION['success']) && $_SESSION['success'] === FALSE)){
  die(header("Location: 404.php"));
}

require('databaseconn.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  // foreach($_POST as $key => $value) {
  //   echo nl2br("POST parameter '$key' has '$value' \n");
  // }
  
  if(isset($_POST['edit'])) {
    update_news($dbc, $_POST);
  }

  if(isset($_POST['add'])) {
    insert_news($dbc, $_POST);
  }

  if(isset($_POST['delete'])) {
    delete_news($dbc, $_POST);
  }
}

function fill_rows(mysqli $dbc) {
  $news = get_news($dbc);

  foreach($news as $row) {
      echo '<tr class="row">';
      
      echo '<td>' . $row['id'] . '</td>';
      echo '<td>' . $row['title'] . '</td>';
      echo '<td class="hidden">' . $row['imgFilePath'] . '</td>';
      echo '<td class="hidden">' . $row['imgAlt'] . '</td>';
      echo '<td class="hidden">' . $row['description'] . '</td>';

      echo '<td>';
      echo '<input name="delete" form="delete-news" type="hidden" value="delete">';
      echo '<input name="delete-id" form="delete-news" type="hidden" value="' . $row['id'] . '">';
      echo '<button class = "editButton" type="submit" form="delete-news">&ZeroWidthSpace;</button>';
      echo '</td>';

      echo '</tr>';
  }
}

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
      $("#edit-title").val(columns[1].innerText);
      $("#edit-imgfp").val(columns[2].innerText);
      $("#edit-imgalt").val(columns[3].innerText);
      $("#edit-description").val(columns[4].innerText);

      // add value to delete box
      $('#delete-id').val(columns[0].innerText);
    });
  });
</script>

<form id="delete-news" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>"></form>

<div class="edit-container">
  <div class="edit-card">
    <h2>Events</h2>
    <table class="news">
      <tr>
        <th>News Id</th>
        <th>News Title</th>
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
      <label for="edit-title">Title</label><br>
      <input id="edit-title" name="edit-title" type="text"><br>
      <label for="edit-imgfp">Image</label><br>
      <input id="edit-imgfp" name="edit-imgfp" type="text"><br>
      <label for="edit-imgalt">Image Alt</label><br>
      <input id="edit-imgalt" name="edit-imgalt" type="text"><br>
      <label for="edit-description">Description</label><br>
      <textarea id="edit-description" name="edit-description" form="edit"></textarea><br>
      <input type="submit" value="Update">
    </form>
  </div>
  <div class="edit-card">
    <h2>Add</h2>
    <form id="add" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
      <input name="add" type="hidden" value="add">
      <label for="add-title">Title</label><br>
      <input id="add-title" name="add-title" type="text"><br>
      <label for="add-imgfp">Image</label><br>
      <input id="add-imgfp" name="add-imgfp" type="text"><br>
      <label for="add-imgalt">Image Alt</label><br>
      <input id="add-imgalt" name="add-imgalt" type="text"><br>
      <label for="add-description">Description</label><br>
      <textarea id="add-description" name="add-description" form="add"></textarea><br>
      <input type="submit" value="Add">
    </form>
  </div>
</div>

<?php include("templates/bottom.php");