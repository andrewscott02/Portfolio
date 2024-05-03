<?php

    include_once("includes/connection.php");
    include_once("includes/seeder.php");
    
    function GetProjectsList($typeFilter = null)
    {
        global $db;

        if($db == null)
        {
            echo "No database was found";
            return false;
        }

        $sql = "
            SELECT * FROM projects
        ";

        if (isset($typeFilter))
        {
            $sql .= " WHERE type = ?";
        }
            
        try
        {
            if (isset($typeFilter))
            {
                $results = $db->prepare($sql);
                $results->bindValue(1, $typeFilter, PDO::PARAM_STR);
                $results->execute();
            }
            else
            {
                $results = $db->query($sql);
            }
        }
        catch (Exception $e)
        {
            echo "Error!: " . $e->getMessage() . "<br />";
            return false;
        }
        
        $projects = ($results->fetchall(PDO::FETCH_ASSOC));
        return $projects;
    }

    function GetFeaturedProjects()
    {
        global $db;

        if($db == null)
        {
            echo "No database was found";
            return false;
        }

        $sql = "
            SELECT * FROM projects WHERE featured = true ORDER BY title;
        ";
            
        try
        {
            $results = $db->prepare($sql);
            $results->execute();
        }
        catch (Exception $e)
        {
            echo "Error!: " . $e->getMessage() . "<br />";
            return false;
        }
        
        $projects = ($results->fetchAll(PDO::FETCH_ASSOC));
        return $projects;
    }
    
    function GetProjectByName($projectName)
    {
        global $db;

        if($db == null)
        {
            echo "No database was found";
            return false;
        }

        $sql = "
            SELECT * FROM projects WHERE title = ?;
        ";
            
        try
        {
            $results = $db->prepare($sql);
            $results->bindValue(1, $projectName, PDO::PARAM_STR);
            $results->execute();
        }
        catch (Exception $e)
        {
            echo "Error!: " . $e->getMessage() . "<br />";
            return false;
        }
        
        $project = ($results->fetch(PDO::FETCH_ASSOC));
        return $project;
    }

    function GetProjectByID($projectId)
    {
        global $db;

        if($db == null)
        {
            echo "No database was found";
            return false;
        }

        $sql = "
            SELECT * FROM projects WHERE id = ?;
        ";
            
        try
        {
            $results = $db->prepare($sql);
            $results->bindValue(1, $projectId, PDO::PARAM_INT);
            $results->execute();
        }
        catch (Exception $e)
        {
            echo "Error!: " . $e->getMessage() . "<br />";
            return false;
        }
        
        $project = ($results->fetch(PDO::FETCH_ASSOC));
        return $project;
    }

    function GetProjectIDFromLink()
    {
        if (isset($_GET["project"]))
        {
            $projectLink = filter_input(INPUT_GET, "project", FILTER_SANITIZE_STRING);
        }

        if (!isset($projectLink))
        {
            header("location:index.php");
            exit;
        }

        return $projectLink;
    }

    function GetCodeSnippetsList($projectId = null)
    {
        global $db;

        if($db == null)
        {
            echo "No database was found";
            return false;
        }

        $sql = "
            SELECT * FROM codesnippets
        ";

        if (isset($projectId))
        {
            $sql .= " WHERE projectId = ?";
        }
            
        try
        {
            if (isset($projectId))
            {
                $results = $db->prepare($sql);
                $results->bindValue(1, $projectId, PDO::PARAM_INT);
                $results->execute();
            }
            else
            {
                $results = $db->query($sql);
            }
        }
        catch (Exception $e)
        {
            echo "Error!: " . $e->getMessage() . "<br />";
            return false;
        }
        
        $codesnippets = ($results->fetchall(PDO::FETCH_ASSOC));
        return $codesnippets;
    }

    function GenerateCodeSnippetsHTML($allCodeSnippets)
    {
        $html = "";
        
        $previousTag = "";

        foreach($allCodeSnippets as $item)
        {
            $nameNoSpace = str_replace(" ", "", $item["name"]);

            if ($item["tag"] != $previousTag)
            {
                $previousTag = $item["tag"];
                $html .=    '<h3>' . $item["tag"] . '</h3>';
            }

            $html .= '<div id="codeID-' . $nameNoSpace . '" class="codeSnippet-Project">';
            $html .=    '<h4>' . $item["name"] . '</h4>';
            $html .=    '<p>' . $item["description"] . '</p>';
            $html .=    '<div class="codeSnippet">';
            $html .=        '<a href="#codeID-' . $nameNoSpace . '" class="btn requires-javascript">Show Code</a>';
            $html .=        '<pre>';
            $html .=        $item["code"];
            $html .=        '</pre>';
            $html .=    '</div>';
            $html .= '</div>';

            
        }
        
        return $html;
    }


    // new Project(
    //     "", false, false,
    //     "", "",
    //     "", false,
    //     "", "Open Project",""
    // )
?>