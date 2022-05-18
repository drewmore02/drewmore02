<?php 

include('databaseconn.php');
//write query for all news
$sql = 'SELECT * FROM news';

//make query & get result
$result = mysqli_query($dbc, $sql);

// fetch the resulting rows as an array
$news = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);

//close connection
mysqli_close($dbc);

$css = ["styles.css", "news.css"];
include("templates/top.php");

?>

<div class="pageHeader">
    <h1>News</h1>
</div>
<div class="cards">
    <?php foreach($news as $newsbit) {?>

    <div class="card">
        <div class="articleText">
            <div class="articleHeader">
                <h2 class="articleTitle"><?php echo htmlspecialchars($newsbit['title']); ?></h2>
            </div>
            <div class="articleInfo">
                <p class="articleContent"><?php echo htmlspecialchars($newsbit['description']); ?></p>
            </div>
        </div>
        <div class="photoContainer">
            <?php echo '<img class="articlePhoto" src="' . $newsbit['imgFilePath'] . '">'; ?>
        </div>
    </div>

    <?php } ?>
    
</div>

<?php include("templates/bottom.php"); ?>