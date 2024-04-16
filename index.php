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

                <div class="project-collection">
                    <a class="project" target="_blank" href="https://andrewscott02.github.io/Netmatters-Homepage/">
                        <div class="project-media-container">
                            <img src="Images/NM-heroimage.jpg">
                        </div>
                        <h3>Netmatters Homepage</h3>
                        <p>A recreation of the Netmatters Homepage using HTML, CSS and JavaScript</p>
                        <div class="btn inline">View Project</div>
                    </a>
                    <a class="project" target="_blank" href="https://andrewscott02.github.io/Random-Image-Generator/">
                        <div class="project-media-container">
                            <img src="Images/Imgae-Generator.png">
                        </div>
                        <h3>Random Image Generator</h3>
                        <p>A random image generator that generates images from Lorem Picsum</p>
                        <div class="btn inline">View Project</div>
                    </a>
                    <a class="project comingsoon" target="_blank" href="https://www.youtube.com/watch?v=TVrhjMUS844&t=80s">
                        <div class="project-media-container">
                            <img src="Images/ArduinoController.webp">
                            <!-- <iframe src="https://www.youtube.com/embed/TVrhjMUS844?si=FVnUo691n4NBjaYh&amp;controls=0&autoplay=1&mute=1&playsinline=1&playlist=TVrhjMUS844&loop=1"></iframe> -->
                        </div>
                        <h3>TTRPG Controller</h3>
                        <p>An arduino project where you can place pieces on a physical board to move pieces in a digital game</p>
                        <div class="btn inline">View Project</div>
                    </a>
                    <a class="project comingsoon" target="_blank" href="https://www.youtube.com/embed/lme6oJXwc10">
                        <div class="project-media-container">
                            <img src="Images/PMAI.jpg">
                            <!-- <iframe src="https://www.youtube.com/embed/lme6oJXwc10?si=FVnUo691n4NBjaYh&amp;controls=0&autoplay=1&mute=1&playsinline=1&playlist=lme6oJXwc10&loop=1"></iframe> -->
                        </div>
                        <h3>Player Modelling Companion AI</h3>
                        <p>A companion AI that uses player modelling techniques to adapt to player actions and respond with synergistic behaviour to better collaborate with them.</p>
                        <div class="btn inline">View Project</div>
                    </a>
                    <a class="project" target="_blank" href="https://www.youtube.com/watch?v=lg1MPgQ8eVY&t=1s">
                        <div class="project-media-container">
                            <img src="Images/TurnCombat.jpg">
                            <!-- <iframe src="https://www.youtube.com/embed/lg1MPgQ8eVY?si=FVnUo691n4NBjaYh&amp;controls=0&autoplay=1&mute=1&playsinline=1&playlist=lg1MPgQ8eVY&loop=1"></iframe> -->
                        </div>
                        <h3>Turn-Based Combat System</h3>
                        <p>In my first programming project, I created a 2 player turn based game, modelled after TTRPG games. Players can take turns moving a character and casting spells.</p>
                        <div class="btn inline">View Project</div>
                    </a>
                    <a class="project comingsoon">
                        <div class="project-media-container">
                            <img src="Images/GraphicsImages.png">
                        </div>
                        <h3>Visual FX Programming</h3>
                        <p>Visual effects using custom shaders and procedural mesh elements.</p>
                        <div class="btn inline">View Project</div>
                    </a>
                </div>
            </div>
        </main>
        <aside id="Aside">
            <div id="Contact">
                <form action="index.html" method="post">
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