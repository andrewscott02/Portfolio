<h1 id="ProjectDetails"><?php echo $projectObj["title"] ?></h1>

<?php

#region Basic Details

echo '<div class="project project-media-container show-vid general-project-page">';
echo    '<img src="' . $projectObj["thumbnailSrc"] . '">';
if ($projectObj["videoLink"] != false)
{
    echo '<iframe src="' . $projectObj["videoLink"] . '"></iframe>';
}
echo '</div>';

if ($projectObj["title"] == "Corruption of Arcana")
{
    echo            '<div class="smallImages">';
    echo                '<img src="Images/finalist-rookie-awards.png">';
    echo                '<img src="Images/rookie-awards-goty-hc.png">';
    echo            '</div>';
}

$longDescription = str_replace("  ", "<br><br>", $projectObj["longDescription"]);

echo "<p>$longDescription</p>";

#endregion

#region Links

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

#endregion

#region Code Snippets

    $allCodeSnippets = GetCodeSnippetsList($projectId);

    if (count($allCodeSnippets) > 0)
    {
        echo '<div id="CodeSnippets">';
        echo        '<h2>Code Snippets</h2>';

        $codeTitle = $projectObj["title"];
        if ($projectObj["type"] == "project")
        {
            $codeTitle = "the " . $codeTitle;
        }

        echo        "<p>Here's some of the code I've written for " . $codeTitle . "</p>";

        echo GenerateCodeSnippetsHTML($allCodeSnippets);

        echo '</div>';
    }

    #endregion

