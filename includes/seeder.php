<?php

class Project
{
    public $title = "";
    public $type = "";
    public $featured = false;
    public $available = false;

    public $shortDescription = "";
    public $longDescription = "";

    public $thumbnailSrc = "";
    public $videoLink = false;

    public $viewLink = "";
    public $viewMessage = "Open Project";
    public $repoLink = "";

    public function __construct($title, $type, $featured, $available,
                                $shortDescription, $longDescription,
                                $thumbnailSrc, $videoLink,
                                $viewLink, $viewMessage, $repoLink)
    {
        $this->title = $title;
        $this->type = $type;
        $this->featured = $featured;
        $this->available = $available;
        
        $this->shortDescription = $shortDescription;
        $this->longDescription = $longDescription;

        $this->thumbnailSrc = $thumbnailSrc;
        $this->videoLink = $videoLink;

        $this->viewLink = $viewLink;
        $this->viewMessage = $viewMessage;
        $this->repoLink = $repoLink;
    }
}

class CodeSnippet
{
    public $projectId = 0;
    public $name = "";
    public $description = "";
    public $code = "";

    public function __construct($projectId, $name, $description, $code)
    {
        $this->projectId = $projectId;
        $this->name = $name;
        $this->description = $description;
        $this->code = $code;
    }
}

$initialProjects = [
    "enfabler" => new Project(
        "Enfabler", "game", true, true,
        "Explore dungeons, defeat monsters and thwart villains to earn your place as a hero. Will you answer the call?", "Explore dungeons, defeat monsters and thwart villains to earn your place as a hero. Will you answer the call?",
        "Images/Enfabler.png", "https://www.youtube.com/embed/ih067YlZj24?si=Sk_3hSXb59XGTOYi&amp;controls=0&autoplay=1&mute=1&playsinline=1&playlist=ih067YlZj24&loop=1",
        "https://andrewjscott02.itch.io/enfabler", "Play Enfabler on Itch","https://github.com/andrewscott02/Enfabler"
    ),
    "coa" => new Project(
        "Corruption of Arcana", "game", true, true,
        "Gather your cards, weapons and potions because the corruption is growing stronger. Push into the heart of the realm and find the source of this terrible plague.", "Gather your cards, weapons and potions because the corruption is growing stronger. Push into the heart of the realm and find the source of this terrible plague.",
        "Images/CoA.png", "https://www.youtube.com/embed/r8M4nrsPlGo?si=FVnUo691n4NBjaYh&amp;controls=0&autoplay=1&mute=1&playsinline=1&playlist=r8M4nrsPlGo&loop=1",
        "https://moonsoon-games.itch.io/corruption-of-arcana-reshuffled", "Play Corruption of Arcana on Itch",""
    ),
    "creak" => new Project(
        "Creak", "game", false, true,
        "Creak is a 2D platformer where you can only see through sound. Collide your character with obstacles to create sound waves that allow you to see.", "Creak is a 2D platformer where you can only see through sound. Collide your character with obstacles to create sound waves that allow you to see.",
        "Images/Creak.png", false,
        "https://andrewjscott02.itch.io/creak", "Play Creak on Itch",""
    ),
    "overkill" => new Project(
        "Overkill", "game", false, true,
        "Overkill is a turn-based game inspired by the settings of Doom and XCOM. But unlike those games, you play as the villains. Lead a raiding party of demons to take over the Earth for the forces of evil in this turn-based RPG with a twist.", "Overkill is a turn-based game inspired by the settings of Doom and XCOM. But unlike those games, you play as the villains. Lead a raiding party of demons to take over the Earth for the forces of evil in this turn-based RPG with a twist.",
        "Images/Overkill.png", false,
        "https://andrewjscott02.itch.io/overkill", "Play Overkill on Itch",""
    ),
    "godsent" => new Project(
        "Godsent", "game", false, true,
        "You are a nun granted powers by God to defeat the Seven Princes of Hell but you must decide how far you are willing to suffer for your faith or whether you will give into the allure of power.", "You are a nun granted powers by God to defeat the Seven Princes of Hell but you must decide how far you are willing to suffer for your faith or whether you will give into the allure of power.",
        "Images/Godsent.png", false,
        "https://eggchanted.itch.io/godsent", "Play Godsent on Itch",""
    ),
    "javajump" => new Project(
        "JavaJump", "game", false, true,
        "A small browser game made using JavaScript where you must jump to avoid falling obstacles.", "A small browser game made using JavaScript where you must jump to avoid falling obstacles.",
        "Images/JavaJump.png", false,
        "javajump.php#BrowserGame", "Play JavaJump on my Website",""
    ),
    "nm-homepage" => new Project(
        "Netmatters Homepage", "project", false, true,
        "A recreation of the Netmatters Homepage using HTML, CSS, JavaScript and PHP", "A recreation of the Netmatters Homepage using HTML, CSS, JavaScript and PHP",
        "Images/NM-heroimage.jpg", false,
        "https://andrew-scott.netmatters-scs.co.uk/php-nm-homepage/", "Open Project",""
    ),
    "imagegenerator" => new Project(
        "Random Image Generator", "project", false, true,
        "A random image generator that generates images from Lorem Picsum", "A random image generator that generates images from Lorem Picsum",
        "Images/Image-Generator.png", false,
        "https://andrewscott02.github.io/Random-Image-Generator", "Open Project",""
    ),
    "arduinocontroller" => new Project(
        "TTRPG Controller", "project", false, true,
        "An arduino project where you can place pieces on a physical board to move pieces in a digital game", "An arduino project where you can place pieces on a physical board to move pieces in a digital game",
        "Images/ArduinoController.webp", "https://www.youtube.com/embed/TVrhjMUS844?si=FVnUo691n4NBjaYh&amp;controls=0&autoplay=1&mute=1&playsinline=1&playlist=TVrhjMUS844&loop=1",
        "https://www.youtube.com/watch?v=TVrhjMUS844&t=80s", "Watch Video",""
    ),
    "pmai" => new Project(
        "Player Modelling Companion AI", "project", false, true,
        "A companion AI that uses player modelling techniques to adapt to player actions and respond with synergistic behaviour to better collaborate with them.", "A companion AI that uses player modelling techniques to adapt to player actions and respond with synergistic behaviour to better collaborate with them.",
        "Images/PMAI.jpg", "https://www.youtube.com/embed/lme6oJXwc10?si=FVnUo691n4NBjaYh&amp;controls=0&autoplay=1&mute=1&playsinline=1&playlist=lme6oJXwc10&loop=1",
        "https://www.youtube.com/embed/lme6oJXwc10", "Watch Video",""
    ),
    "turncombat" => new Project(
        "Turn-Based Combat System", "project", false, true,
        "In my first programming project, I created a 2 player turn based game, modelled after TTRPG games. Players can take turns moving a character and casting spells.", "In my first programming project, I created a 2 player turn based game, modelled after TTRPG games. Players can take turns moving a character and casting spells.",
        "Images/TurnCombat.jpg", "https://www.youtube.com/embed/lg1MPgQ8eVY?si=FVnUo691n4NBjaYh&amp;controls=0&autoplay=1&mute=1&playsinline=1&playlist=lg1MPgQ8eVY&loop=1",
        "https://www.youtube.com/watch?v=lg1MPgQ8eVY&t=1s", "Watch Video",""
    ),
    "visualfx" => new Project(
        "Visual FX Programming", "project", false, false,
        "Visual effects using custom shaders and procedural mesh elements.", "Visual effects using custom shaders and procedural mesh elements.",
        "Images/GraphicsImages.png", false,
        "", "Open Project",""
    )
];

$initialCodeSnippets = [
    new CodeSnippet("JavaJump", "Game Loop", "Code for the basic game loop", '
        let enableInput = true;
        
        $("#GameViewport").on("click", ()=>{
        if (!enableInput){return};
        if(!$("#GameViewport").hasClass("game-running"))
        {
        //If game has not started, start game
        $("#GameViewport").addClass("game-running");
        StartGame();
        }
        else
        {
        //If game has started, make character jump
        Jump();
        }
        })
        
        let board;
        let context;
        
        const tick = 10;
        
        function StartGame()
        {
            board = document.getElementById("Board");
            context = board.getContext("2d");
            
            score = 0;
            
            InitializeCharacter();
            
            I_update = setInterval(()=>{Update();}, tick);
            
            enemySpawnInterval = enemySpawnIntervalBase;
            I_spawn = setInterval(()=>{DecreaseSpawnInterval();}, enemySpawnIncreaseInterval);
            
            T_spawnIncrease = setTimeout(()=>{SpawnEnemy();}, enemySpawnInterval);
        }
        
        function Update()
        {
            //Clears board
            context.clearRect(0, 0, board.width, board.height);
            
            CharacterMovement();
            EnemyMovement();
            UpdateScore();
        }
        
        let I_update;
        let I_spawn;
        let T_spawnIncrease;
        
        function GameOver()
        {
            clearInterval(I_update);
            clearInterval(I_spawn);
            
            clearTimeout(T_spawnIncrease);
            
            //Clears all enemies
            enemies.length = 0;
            
            //Clears board
            context.clearRect(0, 0, board.width, board.height);
            
            $("#GameViewport").removeClass("game-running");
            
            DisableInput();
            
            $(".gameTitle").html("
            <h3>You got hit</h3>
            <h3>Score: ${score}</h3>
            <h3>Click or Tap to Play Again</h3>
            ");
        }
    '),
    new CodeSnippet("JavaJump", "Game Loop", "Code for the basic game loop", '
        let enableInput = true;
        
        $("#GameViewport").on("click", ()=>{
        if (!enableInput){return};
        if(!$("#GameViewport").hasClass("game-running"))
        {
        //If game has not started, start game
        $("#GameViewport").addClass("game-running");
        StartGame();
        }
        else
        {
        //If game has started, make character jump
        Jump();
        }
        })
        
        let board;
        let context;
        
        const tick = 10;
        
        function StartGame()
        {
            board = document.getElementById("Board");
            context = board.getContext("2d");
            
            score = 0;
            
            InitializeCharacter();
            
            I_update = setInterval(()=>{Update();}, tick);
            
            enemySpawnInterval = enemySpawnIntervalBase;
            I_spawn = setInterval(()=>{DecreaseSpawnInterval();}, enemySpawnIncreaseInterval);
            
            T_spawnIncrease = setTimeout(()=>{SpawnEnemy();}, enemySpawnInterval);
        }
        
        function Update()
        {
            //Clears board
            context.clearRect(0, 0, board.width, board.height);
            
            CharacterMovement();
            EnemyMovement();
            UpdateScore();
        }
        
        let I_update;
        let I_spawn;
        let T_spawnIncrease;
        
        function GameOver()
        {
            clearInterval(I_update);
            clearInterval(I_spawn);
            
            clearTimeout(T_spawnIncrease);
            
            //Clears all enemies
            enemies.length = 0;
            
            //Clears board
            context.clearRect(0, 0, board.width, board.height);
            
            $("#GameViewport").removeClass("game-running");
            
            DisableInput();
            
            $(".gameTitle").html("
            <h3>You got hit</h3>
            <h3>Score: ${score}</h3>
            <h3>Click or Tap to Play Again</h3>
            ");
        }
    ')
];

function GetTableEntryCount($table)
{
    global $db;

    if($db == null)
    {
        echo "No database was found";
        return false;
    }

    $sql = "SELECT COUNT(*) AS count FROM " . $table;
        
    try
    {
        $results = $db->query($sql);
    }
    catch (Exception $e)
    {
        echo "Error!: " . $e->getMessage() . "<br />";
        return false;
    }
    
    $count = ($results->fetch(PDO::FETCH_ASSOC));
    return $count;
}

function AddProject($newProject)
{
    global $db;

    if($db == null)
    {
        echo "No database was found";
        return false;
    }

    $sql = "INSERT INTO projects(title, type, featured, available, shortDescription, longDescription, thumbnailSrc, videoLink, viewLink, viewMessage, repoLink) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
        
    try
    {
        $results = $db->prepare($sql);
        $results->bindValue(1, $newProject->title, PDO::PARAM_STR);
        $results->bindValue(2, $newProject->type, PDO::PARAM_STR);
        $results->bindValue(3, $newProject->featured, PDO::PARAM_STR);
        $results->bindValue(4, $newProject->available, PDO::PARAM_STR);
        $results->bindValue(5, $newProject->shortDescription, PDO::PARAM_STR);
        $results->bindValue(6, $newProject->longDescription, PDO::PARAM_STR);
        $results->bindValue(7, $newProject->thumbnailSrc, PDO::PARAM_STR);
        $results->bindValue(8, $newProject->videoLink, PDO::PARAM_STR);
        $results->bindValue(9, $newProject->viewLink, PDO::PARAM_STR);
        $results->bindValue(10, $newProject->viewMessage, PDO::PARAM_STR);
        $results->bindValue(11, $newProject->repoLink, PDO::PARAM_STR);
        $results->execute();
    }
    catch (Exception $e)
    {
        echo "Error!: " . $e->getMessage() . "<br />";
        return false;
    }
    
    return true;
}

function AddCodeSnippet($newCodeSnippet)
{
    global $db;

    if($db == null)
    {
        echo "No database was found";
        return false;
    }

    $sql = "INSERT INTO codesnippets(projectId, name, description, code) VALUES(?, ?, ?, ?);";
        
    try
    {
        $results = $db->prepare($sql);
        $results->bindValue(1, $newCodeSnippet->projectId, PDO::PARAM_STR);
        $results->bindValue(2, $newCodeSnippet->name, PDO::PARAM_STR);
        $results->bindValue(3, $newCodeSnippet->description, PDO::PARAM_STR);
        $results->bindValue(4, htmlspecialchars($newCodeSnippet->code), PDO::PARAM_STR);
        $results->execute();
    }
    catch (Exception $e)
    {
        echo "Error!: " . $e->getMessage() . "<br />";
        return false;
    }
    
    return true;
}

function UpdateCodeSnippet($codeSnippet, $newId)
{
    global $db;

    if($db == null)
    {
        echo "No database was found";
        return false;
    }

    $sql = "UPDATE codesnippets SET projectId = ? WHERE id = " . $codeSnippet["id"];
        
    try
    {
        $results = $db->prepare($sql);
        $results->bindValue(1, $newId, PDO::PARAM_STR);
        $results->execute();
    }
    catch (Exception $e)
    {
        echo "Error!: " . $e->getMessage() . "<br />";
        return false;
    }
    
    return true;
}

function ConvertNamesToID()
{
    global $initialCodeSnippets;
    foreach($initialCodeSnippets as $item)
    {
        $item->projectId = GetProjectByName($item->projectId)["id"];
    }
}

function TrySeedDatabases()
{
    $projectsCount = GetTableEntryCount("projects");

    if ($projectsCount["count"] === 0)
    {
        SeedProjectsDatabase();
    }

    ConvertNamesToID();

    $codeSnippetsCount = GetTableEntryCount("codeSnippets");

    if ($codeSnippetsCount["count"] === 0)
    {
        SeedCodeSnippetsDatabase();
    }
    else
    {
        UpdateCodeSnippetsDatabase();
    }
}

function SeedProjectsDatabase()
{
    global $initialProjects;
    foreach ($initialProjects as $item)
    {
        AddProject($item);
    }
}

function SeedCodeSnippetsDatabase()
{
    global $initialCodeSnippets;
    foreach ($initialCodeSnippets as $item)
    {
        AddCodeSnippet($item);
    }
}

function UpdateCodeSnippetsDatabase()
{
    global $initialCodeSnippets;
    $codeSnippets = GetCodeSnippetsList();
    foreach ($codeSnippets as $key => $item)
    {
        UpdateCodeSnippet($item, $initialCodeSnippets[$key]->projectId);
    }
}

TrySeedDatabases();