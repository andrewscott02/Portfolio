<?php

$projectObj = GetProjectByID(urlencode($projectId));

?>

<h2 id="ProjectDetails"><?php echo $projectObj["title"] ?></h2>

<?php

echo '<div class="project project-media-container show-vid">';
echo '<img src="' . $projectObj["thumbnailSrc"] . '">';
if ($projectObj["videoLink"] != false)
{
    echo '<iframe src="' . $projectObj["videoLink"] . '"></iframe>';
}
echo '</div>';

?>

<p><?php echo $projectObj["longDescription"] ?></p>

<?php
    if ($projectObj["viewLink"] != "")
    {
        echo 
        "<a href=\""
        . $projectObj["viewLink"]
        . "\" class=\"btn inline\" target=\"_blank\">"
        . $projectObj["viewMessage"]
        . "</a>";
    }
    
    if ($projectObj["repoLink"] != "")
    {
        echo 
        "<a href=\""
        . $projectObj["repoLink"]
        . "\" class=\"btn inline\" target=\"_blank\">View Project Files</a>";
    }
?>

