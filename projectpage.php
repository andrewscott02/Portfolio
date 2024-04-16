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
            <div id="ProjectDetails">
                <?php include("includes/generalproject.php"); ?>
            </div>
        </main>

        <?php include("includes/footer.php"); ?>
    </div>

    <?php include("includes/generalJS.php"); ?>
</body>
</html>