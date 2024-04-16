<?php
include("includes/projectsdata.php");

$projectLink = $_GET["project"];

$projectTitle = $allProjects[$projectLink]["title"];

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

<h2><?php echo $projectTitle ?></h2>