<?php

// switch ($projectTitle)
// {
//     case "enfabler":
//         $projectTitle = "Enfabler";
//         break;
//     default:
//         $projectTitle = ucwords($projectTitle);
//         break;
// }

?>

<!-- <img src=<?php
echo $project["thumbnailSrc"];
 ?>> -->

<h2 id="ProjectDetails"><?php echo $project["title"] ?></h2>

<p><?php echo $project["description"] ?></p>

<?php
    if ($project["viewLink"] != "")
    {
        echo 
        "<a href=\""
        . $project["viewLink"]
        . "\" class=\"btn inline\" target=\"_blank\">"
        . $project["viewMessage"]
        . "</a>";
    }
    
    if ($project["repoLink"] != "")
    {
        echo 
        "<a href=\""
        . $project["repoLink"]
        . "\" class=\"btn inline\" target=\"_blank\">View Project Files</a>";
    }
?>

