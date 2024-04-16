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
            <?php
                include("includes/projectsdata.php");
                $projectLink = $_GET["project"];
                $project = $allProjects[$projectLink];
                $type = $project["type"];
                $type = ucwords($type);

                echo "<a href=\"index.php#"
                . $type
                . "s\" class=\"btn inline\"> Return to "
                . $type
                . "s</a>";
            ?>

            <div id="ProjectDetails">
                <?php include("includes/generalproject.php"); ?>
            </div>
        </main>

        <?php include("includes/footer.php"); ?>
    </div>

    <?php include("includes/generalJS.php"); ?>
</body>
</html>