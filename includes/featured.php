<?php
    include_once("includes/projectsdata.php"); 
    $featuredProjects = GetFeaturedProjects();
    $baseDescriptionCharLimit = 200;
    // var_dump($featuredProjects);
?>

<?php
    if(count($featuredProjects) > 0)
    {
        //Start featured slides
        ?>
        <div id="Featured">
            <h2>Featured</h2>
            <div class="featured-collection slides">
        <?php

        #region Featured Projects

        $first = true;

        foreach($featuredProjects as $project)
        {
            $href = "projectpage.php?project=" . $project["id"] . "#ProjectDetails\"";
            $longDescription = str_replace("  ", "<br><br>", $project["longDescription"]);
            
            $descriptionCharLimit = $baseDescriptionCharLimit;

            if ($project["title"] == "Corruption of Arcana")
            {
                $descriptionCharLimit = $baseDescriptionCharLimit * 0.75;
            }

            $cutDescription = $project["longDescription"];
            if (strlen($cutDescription) >= $descriptionCharLimit) 
            {
                $lastword = strpos($cutDescription, " ", $descriptionCharLimit);
                $cutDescription = substr($cutDescription, 0, $lastword) . "...";
            }

            var_dump($cutDescription);

            echo '<div>';
            echo    '<div class="featured-item">';
            echo        '<div class="featured-media-container">';
            echo            '<iframe class="fit-vid" src="' . $project["videoLink"] . '"></iframe>';
            echo        '</div>';
            echo        '<div class="featured-info">';
            echo            '<h3>' . $project["title"] . '</h3>';

            if ($project["title"] == "Corruption of Arcana")
            {
                echo            '<div class="smallImages">';
                echo                '<img src="Images/finalist-rookie-awards.png">';
                echo                '<img src="Images/rookie-awards-goty-hc.png">';
                echo            '</div>';
            }

            echo            '<p class="brk-xlt-l">' . $cutDescription . '</p>';
            echo            '<p class="brk-xlt-g">' . $longDescription . '</p>';
            echo            '<a class="btn inline" href="' . $href . '">View Project</a>';
            echo        '</div>';
            echo    '</div>';

            if ($first)
            {
                //Overlay - This only needs to be in the first item
                echo '<div class="featured-overlay-container">';
                echo    '<div class="featured-overlay"></div>';
                echo '</div>';
            }
            
            $first = false;

            echo '</div>';
        }

        #endregion

        //End featured slides
        ?>
            </div>
        </div>

        <?php
    }
?>