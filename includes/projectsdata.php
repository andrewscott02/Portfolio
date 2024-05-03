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
    
    function GetProjectByName($projectName)
    {
        global $db;

        if($db == null)
        {
            echo "No database was found";
            return false;
        }

        $sql = "
            SELECT * FROM projects WHERE name = ?;
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


    // new Project(
    //     "", false, false,
    //     "", "",
    //     "", false,
    //     "", "Open Project",""
    // )
?>