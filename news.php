<?php 

include('databaseconn.php');
//write query for all news
$sql = 'SELECT * FROM news';

//make query & get result
$result = mysqliquery($dbc, $sql);

// fetch the resulting rows as an array
$news = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);

//close connection
mysqli_close($dbc);

include("templates/top.php"); ?>

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
                <img class="articlePhoto" src="<?php echo $newsbit['imgFilePath']; ?>" alt = "<?php echo $newsbit['imgAlt']; ?>" >
            </div>
        </div>

        <?php } ?>
        <!-- <div class="card">
            <div class="articleText">
                <div class="articleHeader">
                    <h2 class="articleTitle">OmTech Meets New Blugolds @ Admitted Student Day!</h2>
                </div>
                <div class="articleInfo">
                    <p class="articleContent">On March 4th, the OmTech executive board participated in the UWEC Student
                        Org showcase for Admitted Student Day. Members of the exec board spent the afternoon talking
                        with new blugolds about our organization and the university in general. The showcase was a great
                        success and we loved talking to the class of 2026!</p>
                </div>
            </div>
            <div class="photoContainer">
                <img class="articlePhoto" src="images/omtech_asd_photo.jpg" alt = "OmTech at admitted student day">
            </div>
        </div>
        <div class="card">
            <div class="articleText">
                <div class="articleHeader">
                    <h2 class="articleTitle">Goodbye Alexis :(</h2>
                </div>
                <div class="articleInfo">
                    <p class="articleContent">Last December, our former president Alexis Lappe handed over her keys to
                        our new president Katie Brand. Alexis graduated this December and we are so proud of everything
                        she was able to accomplish at UWEC. While we are all sad to say goodbye and will miss her
                        greatly, we wish her all the best in her future endeavors and can't wait to see what she will
                        accomplish!</p>
                </div>
            </div>
            <div class="photoContainer">
                <img class="articlePhoto" src="images/omtech_alexisKatieSwitch.jpg" alt = "Goodbye Alexis">
            </div>
        </div>

        <div class="card">
            <div class="articleText">
                <div class="articleHeader">
                    <h2 class="articleTitle">Spring Semester Events Announced!</h2>
                </div>
                <div class="articleInfo">
                    <p class="articleContent">The OmTech Executive Board have officially planned all of the meetings for
                        Spring Semester! Take a look at what's coming this spring!</p>
                </div>
            </div>
            <div class="photoContainer">
                <img class="articlePhoto" src="images/omtech_spring_events_photo.jpg" alt = "Spring Event Schedule">
            </div>
        </div> -->
    </div>

<?php include("templates/bottom.php"); ?>
