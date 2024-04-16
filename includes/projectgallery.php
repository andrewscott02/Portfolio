<?php
    if (!$projectsFilter)
    {
        $projectsFilter = "all";
    }

    include("includes/projectsdata.php");
?>

<div class="project-collection">
    <?php
        foreach($allProjects as $key => $item)
        {
            if ($item["type"] == $projectsFilter || $projectsFilter == "all")
            {
                echo "<a class=\"project\" target=\"_blank\" href=\"projectpage.php?project=$key\">\n";
                echo "<div class=\"project-media-container\">\n";
                echo "<img src=" . $item["thumbnailSrc"] . ">\n";
                echo "</div>\n";
                echo "<h3>" . $item["title"] . "</h3>\n";
                echo "<p>" . $item["description"] . "</p>\n";
                echo "<div class=\"btn inline\">View Project</div>\n";
                echo "</a>\n";
            }
        }
    ?>
</div>