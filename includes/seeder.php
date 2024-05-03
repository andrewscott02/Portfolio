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

    public $codeDescription = "";

    public function __construct($title, $type, $featured, $available,
                                $shortDescription,
                                $longDescription,
                                $thumbnailSrc, $videoLink,
                                $viewLink, $viewMessage, $repoLink,
                                $codeDescription)
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

        $this->codeDescription = $codeDescription;
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
        "Explore dungeons, defeat monsters and thwart villains to earn your place as a hero. Will you answer the call?",
        "Follow the journey of a famed storyteller who is searching for the perfect hero for their next big story.  You play as aspiring heroes who have answered the call of adventure. Explore dungeons, defeat monsters and thwart villains to earn your place as a hero. Will you answer the call?",
        "Images/Enfabler.png", "https://www.youtube.com/embed/ih067YlZj24?si=Sk_3hSXb59XGTOYi&amp;controls=0&autoplay=1&mute=1&playsinline=1&playlist=ih067YlZj24&loop=1",
        "https://andrewjscott02.itch.io/enfabler", "Play Enfabler on Itch","https://github.com/andrewscott02/Enfabler",
        "a procedural dungeon crawler made with Unity and C#"
    ),
    "coa" => new Project(
        "Corruption of Arcana", "game", true, true,
        "Gather your cards, weapons and potions because the corruption is growing stronger. Push into the heart of the realm and find the source of this terrible plague.",
        "Gather your cards, weapons and potions because the corruption is growing stronger. Push into the heart of the realm and find the source of this terrible plague.  Traverse the world in this 2.5D tarot-themed RPG card combat deck builder. Find new items and discover new lands.  Anything is possible when fortune favours the bold.",
        "Images/CoA.png", "https://www.youtube.com/embed/r8M4nrsPlGo?si=FVnUo691n4NBjaYh&amp;controls=0&autoplay=1&mute=1&playsinline=1&playlist=r8M4nrsPlGo&loop=1",
        "https://moonsoon-games.itch.io/corruption-of-arcana-reshuffled", "Play Corruption of Arcana on Itch","",
        "an tarot-themed RPG deckbuilder made with Unity and C#"
    ),
    "creak" => new Project(
        "Creak", "game", false, true,
        "Creak is a 2D platformer where you can only see through sound. Collide your character with obstacles to create sound waves that allow you to see.", "Creak is a 2D platformer where you can only see through sound. Collide your character with obstacles to create sound waves that allow you to see.",
        "Images/Creak.png", false,
        "https://andrewjscott02.itch.io/creak", "Play Creak on Itch","",
        "a 2D platform-puzzler made with Unity and C#"
    ),
    "overkill" => new Project(
        "Overkill", "game", false, true,
        "Overkill is a turn-based game inspired by the settings of Doom and XCOM. But unlike those games, you play as the villains. Lead a raiding party of demons to take over the Earth for the forces of evil in this turn-based RPG with a twist.",
        "Overkill is a turn-based game inspired by the settings of Doom and XCOM. But unlike those games, you play as the villains. Lead a raiding party of demons to take over the Earth for the forces of evil in this turn-based RPG with a twist.  In Overkill, characters can only die when they take damage that exceeds their armour, otherwise it has no effect. Use actions to increase the damage you can deal or decrease their armour first before unleashing an attack that can one-shot them.",
        "Images/Overkill.png", false,
        "https://andrewjscott02.itch.io/overkill", "Play Overkill on Itch","",
        "a turn-based game made with Unity and C#"
    ),
    "godsent" => new Project(
        "Godsent", "game", false, true,
        "You are a nun granted powers by God to defeat the Seven Princes of Hell but you must decide how far you are willing to suffer for your faith or whether you will give into the allure of power.", "You are a nun granted powers by God to defeat the Seven Princes of Hell but you must decide how far you are willing to suffer for your faith or whether you will give into the allure of power.",
        "Images/Godsent.png", false,
        "https://eggchanted.itch.io/godsent", "Play Godsent on Itch","",
        "a small boss rush game made with Unity and C#"
    ),
    "javajump" => new Project(
        "JavaJump", "game", false, true,
        "A small browser game made using JavaScript where you must jump to avoid falling obstacles.",
        "A small browser game made using JavaScript where you must jump to avoid falling obstacles.",
        "Images/JavaJump.png", false,
        "javajump.php#BrowserGame", "Play JavaJump on my Website","",
        "a small browser platformer made using JavaScript",
    ),
    "nm-homepage" => new Project(
        "Netmatters Homepage", "project", false, true,
        "A recreation of the Netmatters Homepage using HTML, CSS, JavaScript and PHP", "A recreation of the Netmatters Homepage using HTML, CSS, JavaScript and PHP",
        "Images/NM-heroimage.jpg", false,
        "https://andrew-scott.netmatters-scs.co.uk/php-nm-homepage/", "Open Project","",
        "an assessment on the SCS course where I remade the Netmatters homepage using HTML, CSS, JavaScript and PHP"
    ),
    "imagegenerator" => new Project(
        "Random Image Generator", "project", false, true,
        "A random image generator that generates images from Lorem Picsum", "A random image generator that generates images from Lorem Picsum",
        "Images/Image-Generator.png", false,
        "https://andrewscott02.github.io/Random-Image-Generator", "Open Project","",
        "a random image generator that generates images from Lorem Picsum"
    ),
    "arduinocontroller" => new Project(
        "TTRPG Controller", "project", false, true,
        "An arduino project where you can place pieces on a physical board to move pieces in a digital game", "An arduino project where you can place pieces on a physical board to move pieces in a digital game",
        "Images/ArduinoController.webp", "https://www.youtube.com/embed/TVrhjMUS844?si=FVnUo691n4NBjaYh&amp;controls=0&autoplay=1&mute=1&playsinline=1&playlist=TVrhjMUS844&loop=1",
        "https://www.youtube.com/watch?v=TVrhjMUS844&t=80s", "Watch Video","",
        "an controller made using Unity, Arduino and C# where you can place pieces on a physical board to move pieces in a digital game", "An arduino project where you can place pieces on a physical board to move pieces in a digital game"
    ),
    "pmai" => new Project(
        "Player Modelling Companion AI", "project", false, true,
        "A companion AI that uses player modelling techniques to adapt to player actions and respond with synergistic behaviour to better collaborate with them.", "A companion AI that uses player modelling techniques to adapt to player actions and respond with synergistic behaviour to better collaborate with them.",
        "Images/PMAI.jpg", "https://www.youtube.com/embed/lme6oJXwc10?si=FVnUo691n4NBjaYh&amp;controls=0&autoplay=1&mute=1&playsinline=1&playlist=lme6oJXwc10&loop=1",
        "https://www.youtube.com/embed/lme6oJXwc10", "Watch Video","",
        "a companion AI made using Unity and C#, which uses player modelling techniques to adapt to player actions and respond with synergistic behaviour to better collaborate with them."
    ),
    "turncombat" => new Project(
        "Turn-Based Combat System", "project", false, true,
        "In my first programming project, I created a 2 player turn based game, modelled after TTRPG games. Players can take turns moving a character and casting spells.", "In my first programming project, I created a 2 player turn based game, modelled after TTRPG games. Players can take turns moving a character and casting spells.",
        "Images/TurnCombat.jpg", "https://www.youtube.com/embed/lg1MPgQ8eVY?si=FVnUo691n4NBjaYh&amp;controls=0&autoplay=1&mute=1&playsinline=1&playlist=lg1MPgQ8eVY&loop=1",
        "https://www.youtube.com/watch?v=lg1MPgQ8eVY&t=1s", "Watch Video","",
        "a turn-based combat system made using Unreal Engine 4"
    ),
    "visualfx" => new Project(
        "Visual FX Programming", "project", false, false,
        "Visual effects using custom shaders and procedural mesh elements.", "Visual effects using custom shaders and procedural mesh elements.",
        "Images/GraphicsImages.png", false,
        "", "Open Project","",
        "a project that uses custom shaders and procedural mesh elements to create various visual effects"
    )
];

$initialCodeSnippets = [
    // JavaJump Code
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
    new CodeSnippet("JavaJump", "Player", "Code for player", '
        const character = {
            x: 0,
            y: 40,
            size : 10,
            speed: 25,
            target: 0
        }
        
        function InitializeCharacter()
        {
            character.x = 0;
            character.y = board.height - character.y;
            character.target = 0;
        }

        function Jump()
        {
            //Can only jump if character position is at either end of the board
            const canJump = character.x === 0 || character.x === board.width - character.size;
            if (!canJump)
            {
                return;
            }

            character.target = character.x === 0 ? board.width - character.size : 0;
        }

        function CharacterMovement()
        {
            //If character is not already at the jump target
            if (character.x != character.target)
            {
                let movement = character.speed;
                if (character.target < character.x)
                {
                    //Reverses speed if jump target is left of character
                    movement *= -1;
                }

                //Clamps the value so character cannot move off the board
                character.x = Clamp(character.x + movement, 0, board.width - character.size);
            }

            //Draw character as green box
            context.fillStyle="green";
            context.fillRect(character.x, character.y, character.size, character.size);
        }
    '),
    new CodeSnippet("JavaJump", "Enemies", "Code for enemies", '
        const enemies = [];
        const enemySpawnIntervalBase = 3000;
        const enemySpawnIntervalMin = 500;
        const enemySpawnIncrease = 250;
        const enemySpawnIncreaseInterval = 5000;

        let enemySpawnInterval = enemySpawnIntervalBase;

        let enemyValues = {
            x: 0,
            y: 0,
            size : 15,
            speed: 1
        }

        function DecreaseSpawnInterval()
        {
            enemySpawnInterval = Clamp(enemySpawnInterval - enemySpawnIncrease, enemySpawnIntervalMin, enemySpawnIntervalBase);
        }

        function SpawnEnemy()
        {
            const spawnTrack = RandomRange(0, 3);
            const trackWidth = board.width/2;
            const spawnPos = spawnTrack * (trackWidth - (enemyValues.size/2));
            enemies.push([spawnPos, 0]);

            T_spawnIncrease = setTimeout(()=>{SpawnEnemy();}, enemySpawnInterval);
        }

        function EnemyMovement()
        {
            let enemiesToRemove = 0;
            for(let i = 0; i < enemies.length; i++)
            {
                let movement = enemyValues.speed;
                if (enemies[i][1] > board.height)
                {
                    //Removes enemies that fall offscreen
                    enemiesToRemove ++;
                }

                //Clamps the value so character cannot move off the board
                enemies[i][1] = Clamp(enemies[i][1] + movement, 0, board.width - enemyValues.size);
                
                //Draw enemies as red boxes
                context.fillStyle="red";
                context.fillRect(enemies[i][0], enemies[i][1], enemyValues.size, enemyValues.size);

                //Check collisions with player
                CheckCollisions(i);
            }

            for(let i = 0; i < enemiesToRemove; i++)
            {
                //Removes enemies that fall offscreen
                enemies.shift();
            }
        }

        function CheckCollisions(i)
        {
            let enemy = {
                x: enemies[i][0],
                y: enemies[i][1],
                size : enemyValues.size,
            }

            if (DetectCollision(character, enemy))
            {
                GameOver();
            }
        }

        function DetectCollision(a, b)
        {
            let xIntersects = a.x < b.x + b.size &&
                                a.x + a.size > b.x;
                                
            let yIntersects = a.y < b.y + b.size &&
                                a.y + a.size > b.y;

            return  xIntersects && yIntersects;
        }
    '),
    new CodeSnippet("JavaJump", "Score and Helper Functions", "Code for other functions", '
        let score = 0;

        function UpdateScore()
        {
            score++;

            context.fillStyle="black";
            context.font="10px courier";
            context.fillText(score, 15, board.height - 10);
        }

        /** Clamps a value in between given range
        * 
        * @param {*} value - Value to clamp
        * @param {*} min - Minimum possible value
        * @param {*} max - Maximum possible value
        * @returns 
        */
        function Clamp(value, min, max)
        {
            if (value > max){return max;}
            else if (value < min){return min;}
            else {return value;}
        }

        /** Random Range Function
        * @param {int} minRaw - Minimum value
        * @param {int} maxRaw - Maximum value (exclusive)
        * @returns {int} A random integer between the input values
        */
        function RandomRange(minRaw = 0, maxRaw = 0)
        {
            var min = parseInt(minRaw);
            var max = parseInt(maxRaw);
            
            var range = parseInt(max) - parseInt(min);
            var result = Math.floor(Math.random() * range) + parseInt(min);
            return result;
        }
    '),
    new CodeSnippet("Netmatters Homepage", "Cookies", "Code for the cookies popup", '
        /** Checks whether the Cookies Popup menu should appear
         * 
         * @returns {bool} Boolean value of whether cookies popup should appear
         */
        function CheckCookiesData()
        {
            if (!document.cookie.toString().includes("cookiesAccepted=true"))
            {
                OpenCookies();
                return true;
            }
            else
            {
                console.log("Cookies data is " + document.cookie);
                return false;
            }
        }
        
        /**Opens Cookies Popup */
        function OpenCookies()
        {
            console.log("Opening Cookies Popup, data is " + document.cookie);
        
            $("body").addClass("stop-scrolling");
            $("#CookiesPopup").show();
        }
        
        //Add click event to accept cookies button
        $("#AcceptCookies").on("click", ()=>{
            CloseCookies();
        });
        
        /**Closes Cookies Popup */
        function CloseCookies()
        {
            //Send cookies closed via AJAX
            console.log("Closing Cookies Popup");
            SetCookiesData(true);
        
            $("body").removeClass("stop-scrolling");
            $("#CookiesPopup").hide();
        
            console.log("Cookies data is " + document.cookie);
        }
        
        /** Sets Cookies Accepted Value
         * 
         * @param {bool} value Boolean value for if the cookies have been accepted
         * 
         * @returns {string} String value representing the new cookies data
         */
        function SetCookiesData(value)
        {
            document.cookie = `cookiesAccepted=${value}`;
            return document.cookie;
        }
        
        /** Deletes all cookies generated
         *  || Not called here, intended to be used in console
         */
        function DeleteAllCookies()
        {
            const cookies = document.cookie.split(";");
        
            for (let i = 0; i < cookies.length; i++) {
                const cookie = cookies[i];
                const eqPos = cookie.indexOf("=");
                const name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
        
                //Sets expiry date in past so it will be deleted
                document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
            }
        }
    '),
    new CodeSnippet("Netmatters Homepage", "Sticky Header", "Code for the sticky header", '
        const navThreshold = 250;

        let prevScroll = 0;
        let stickyHeaderActive = true;
        
        let scrollUpTimeout;
        
        //Adds CheckScroll to scroll event
        $(".maincontent-inner").on("scroll", CheckScroll);
        
        //Determines whether header should be sticky when scrolling
        function CheckScroll(event)
        {
            let scroll = $(".maincontent-inner").scrollTop();
        
            //Checks if scroll direction was up or down
            if (scroll > prevScroll)
            {
                //Show header
                console.log("scroll down");
        
                if (scroll > navThreshold)
                {
                    if (stickyHeaderActive)
                    {
                        stickyHeaderActive = false;
                        AnimateHeader(false, 1.3);
            
                        scrollUpTimeout = setTimeout(() => {
                            $(".sticky-header").removeClass("sticky");
                        }, 500);
                    }
                }
                else
                {
                    $(".sticky-header").removeClass("sticky");
                }
            }
            else
            {
                //Hide header
                console.log("scroll up");
        
                if (scroll > navThreshold)
                {
                    if (!stickyHeaderActive)
                    {
                        stickyHeaderActive = true;
                        clearTimeout(scrollUpTimeout);
        
                        $(".sticky-header").addClass("sticky");
                        AnimateHeader(true, 0.6);
                    }
                }
                else
                {
                    $(".sticky-header").removeClass("sticky");
                }
            }
        
            prevScroll = scroll;
        }
        
        //Animates the header so it slides up or down
        function AnimateHeader(down, transitionTime)
        {
            from = "0";
            to = "-100%";
            if (down)
            {
                from = $(".sticky-header").css("top");
                to = "0";
            }
        
            $(".sticky-header").css("transition", "all 0s");
            $(".sticky-header").css("top", from);
        
            setTimeout(() => {
                $(".sticky-header").css("transition", `all ${transitionTime}s`);
                $(".sticky-header").css("top", to);
            }, 200);
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

    $sql = "INSERT INTO projects(title, type, featured, available, shortDescription, longDescription, thumbnailSrc, videoLink, viewLink, viewMessage, repoLink, codeDescription) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
        
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
        $results->bindValue(12, $newProject->codeDescription, PDO::PARAM_STR);
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