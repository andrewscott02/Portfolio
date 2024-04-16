<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $pageTitle = "Andrew Scott - Java Jump";
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
            <div id="BrowserGame">
                <h2>
                    Java Jump
                    <a class="btn" href="code.html#JavaJump">View Code</a>
                </h2>
                <div id="GameViewport">
                    <div class="javascript-disabled">
                        <h3 class="javascript-disabled-text">JavaScript is required to play</h3>
                        <h3 class="javascript-disabled-text">Please enable JavaScript and refresh the browser</h3>
                    </div>
                    
                    <div class="requires-javascript">
                        <div class="gameTitle">
                            <h3>Click or Tap to Play</h3>
                        </div>
        
                        <canvas id="Board">
        
                        </canvas>
                    </div>
                </div>
            </div>
        </main>

        <?php include("includes/footer.php"); ?>
    </div>

    <?php include("includes/generalJS.php"); ?>
    <script src="js/browsergame.js"></script>
</body>
</html>