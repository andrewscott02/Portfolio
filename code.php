<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $pageTitle = "Andrew Scott - Code Snippets";
        include("includes/head.php");
        include_once("includes/projectsdata.php"); 
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
            <div id="CodeSnippets">
                <h2>Code Snippets</h2>

                <?php
                    $allProjects = GetProjectsList();

                    #region Code Snippets

                    foreach($allProjects as $project)
                    {
                        $allCodeSnippets = GetCodeSnippetsList($project["id"]);

                        if (count($allCodeSnippets) > 0)
                        {
                            echo '<div id="projectID-' . $project["id"] . '" class="codeSnippet-Project">';
                            echo '<h3>' . $project["title"];
                            echo    '<a class="btn" target="_blank" href="' . $project["viewLink"] . '">' . $project["viewMessage"] . '</a>';
                            echo '</h3>';
                            echo '<p>Some of the code for ' . $project["title"] . ', ' . $project["codeDescription"] . '</p>'; //replace with unique code descriptions

                            foreach($allCodeSnippets as $item)
                            {
                                $nameNoSpace = str_replace(" ", "", $item["name"]);

                                echo '<div id="codeID-' . $nameNoSpace . '" class="codeSnippet-Project">';
                                echo    '<h4>' . $item["name"] . '</h4>';
                                echo    '<div class="codeSnippet">';
                                echo        '<a href="#codeID-' . $nameNoSpace . '" class="btn requires-javascript">Show Code</a>';
                                echo        '<pre>';
                                echo        $item["code"];
                                echo        '</pre>';
                                echo    '</div>';
                                echo '</div>';
                            }

                            echo '</div>';
                        }
                    }

                    #endregion
                ?>

            </div>
        </main>

        <?php include("includes/footer.php"); ?>
    </div>

    <?php include("includes/generalJS.php"); ?>
</body>
</html>