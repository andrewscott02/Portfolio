<?php

$projectTitle = $_GET["project"];

switch ($projectTitle)
{
    case "enfabler":
        $projectTitle = "Enfabler";
        break;
    default:
        $projectTitle = ucwords($projectTitle);
        break;
}

?>

<h2><?php echo $projectTitle ?></h2>