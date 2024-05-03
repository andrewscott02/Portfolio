<?php
    // if (!$projectsFilter)
    // {
    //     $projectsFilter = "all";
    // }

    include_once("includes/projectsdata.php");
?>

<div class="project-collection">
    <?php
        $allProjects = GetProjectsList($projectsFilter == "all" ? null : $projectsFilter);

        foreach($allProjects as $item)
        {
            $available = $item["available"];
            $class = "comingsoon";
            $href = "";
            
            if ($available)
            {
                $class = "";
                $href = "href=\"projectpage.php?project=" . $item["id"] . "#ProjectDetails\"";
            }

            echo "<a class=\"project $class\" $href>\n";
            echo "<div class=\"project-media-container\">\n";
            echo "<img src=" . $item["thumbnailSrc"] . ">\n";
            echo "</div>\n";
            echo "<h3>" . $item["title"] . "</h3>\n";
            echo "<p>" . $item["shortDescription"] . "</p>\n";
            echo "<div class=\"btn inline\">View Project</div>\n";
            echo "</a>\n";
        }
    ?>
</div>