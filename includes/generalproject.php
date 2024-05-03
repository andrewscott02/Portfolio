<h2 id="ProjectDetails"><?php echo $projectObj["title"] ?></h2>

<?php

#region Basic Details

echo '<div class="project project-media-container show-vid">';
echo '<img src="' . $projectObj["thumbnailSrc"] . '">';
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

    #endregion

