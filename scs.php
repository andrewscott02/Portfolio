<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $pageTitle = "Andrew Scott - SCS Scheme";
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
            <div id="SCS">
                <h2>SCS Scheme</h2>
                <div class="scs">
                    <div class="scs-element">
                        <h3>Scion Coalition Scheme Introduction</h3>
                        <p>The Scion Coalition Scheme is an intensive, specially tailored training program run by Netmatters in order to give willing candidates the opportunity to enter the industry as web developers. Under the supervision of senior web developers, scions generally aim to complete training within six to nine months. The course is intensive and therefore the level of learning achieved is extensive in a short space of time.</p>
                    </div>
                    <a class="scs-element" target="_blank" href="https://teamtreehouse.com/profiles/andrewscott14">
                        <h3>Treehouse</h3>
                        <p>Treehouse is an online learning community, featuring videos covering a number of topics from basic HTML to C# programming, iOS development, data analysis, and more. By completing courses users can earn points, allowing them to track their progress and see how much they've covered in certain areas.</p>
                        <div class="btn inline">Total Score</div>
                    </a>
                    <div class="scs-element">
                        <h3>About Netmatters</h3>
                        <p>
                            Established in 2008
                            <br>
                            Norfolk's leading technology company
                            <br>
                            Winner of the Princess Royal Training Award
                            <br>
                            Winner of EDP Skills of Tomorrow Award
                            <br>
                            80+ staff, 2 locations across Norfolk
                            <br>
                            Digital Marketing, Website & Software development & IT Support
                            <br>
                            Broad spectrum of clients, working nationwide
                            <br>
                            Operate to strict company values
                        </p>
                    </div>
                </div>
            </div>
        </main>

        <?php include("includes/footer.php"); ?>
    </div>

    <?php include("includes/generalJS.php"); ?>
</body>
</html>