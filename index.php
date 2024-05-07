<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $pageTitle = "Andrew Scott - Portfolio";
        include("includes/head.php"); 
    ?>
</head>
<body>
    <?php include("includes/sidemenu.php"); ?>

    <div id="MainContainer" class="container">
        <?php 
            include("includes/header.php");
            include("includes/nav.php");
            include("includes/heroimage.php"); 
        ?>

        <main id="Main">
            <?php include("includes/featured.php"); ?>

            <div id="Games">
                <h2>My Games</h2>
                <?php 
                    $projectsFilter = "game";
                    include("includes/projectgallery.php"); 
                ?>
            </div>
            <div id="Projects">
                <h2>My Projects</h2>
                <?php 
                    $projectsFilter = "project";
                    include("includes/projectgallery.php"); 
                ?>
            </div>
        </main>
        <aside id="Aside">
            <div id="Contact">
                <form action="sendemail.php" method="post">
                    <h3 class="comingsoon">Get In Touch</h3>
                    <fieldset>
                        <div class="form-name">
                            <label for="name" class="required">Your Name:</label>
                            <input type="text" id="name" name="user_name">
                        </div>
                        <div class="form-email">
                            <label for="email" class="required">Email:</label>
                            <input type="email" id="email" name="user_email">
                        </div>
                        <div class="form-subject">
                            <label for="subject">Subject:</label>
                            <input type="text" id="subject" name="user_subject">
                        </div>
                        <div class="form-message">
                            <label for="message" class="required">Message:</label>
                            <input type="text" id="message" name="user_message">
                        </div>
                    </fieldset>
                    <div class="form-sbmt">
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </aside>
        
        <?php include("includes/footer.php"); ?>
    </div>

    <?php include("includes/generalJS.php"); ?>
</body>
</html>