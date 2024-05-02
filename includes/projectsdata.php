<?php

    class Project
    {
        public $title = "";
        public $featured = false;
        public $available = false;

        public $shortDescription = "";
        public $longDescription = "";

        public $thumbnailSrc = "";
        public $videoLink = false;

        public $viewLink = "";
        public $viewMessage = "Open Project";
        public $repoLink = "";

        public function __construct($title, $featured, $available,
                                    $shortDescription, $longDescription,
                                    $thumbnailSrc, $videoLink,
                                    $viewLink, $viewMessage, $repoLink)
        {
            $this->title = $title;
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

    $allGames = [

        "enfabler" => new Project(
            "Enfabler", true, true,
            "Explore dungeons, defeat monsters and thwart villains to earn your place as a hero. Will you answer the call?", "Explore dungeons, defeat monsters and thwart villains to earn your place as a hero. Will you answer the call?",
            "Images/Enfabler.png", "https://www.youtube.com/embed/ih067YlZj24?si=Sk_3hSXb59XGTOYi&amp;controls=0&autoplay=1&mute=1&playsinline=1&playlist=ih067YlZj24&loop=1",
            "https://andrewjscott02.itch.io/enfabler", "Play Enfabler on Itch","https://github.com/andrewscott02/Enfabler"
        ),
        "coa" => new Project(
            "Corruption of Arcana", true, true,
            "Gather your cards, weapons and potions because the corruption is growing stronger. Push into the heart of the realm and find the source of this terrible plague.", "Gather your cards, weapons and potions because the corruption is growing stronger. Push into the heart of the realm and find the source of this terrible plague.",
            "Images/CoA.png", "https://www.youtube.com/embed/r8M4nrsPlGo?si=FVnUo691n4NBjaYh&amp;controls=0&autoplay=1&mute=1&playsinline=1&playlist=r8M4nrsPlGo&loop=1",
            "https://moonsoon-games.itch.io/corruption-of-arcana-reshuffled", "Play Corruption of Arcana on Itch",""
        ),
        "creak" => new Project(
            "Creak", false, true,
            "Creak is a 2D platformer where you can only see through sound. Collide your character with obstacles to create sound waves that allow you to see.", "Creak is a 2D platformer where you can only see through sound. Collide your character with obstacles to create sound waves that allow you to see.",
            "Images/Creak.png", false,
            "https://andrewjscott02.itch.io/creak", "Play Creak on Itch",""
        ),
        "overkill" => new Project(
            "Overkill", false, true,
            "Overkill is a turn-based game inspired by the settings of Doom and XCOM. But unlike those games, you play as the villains. Lead a raiding party of demons to take over the Earth for the forces of evil in this turn-based RPG with a twist.", "Overkill is a turn-based game inspired by the settings of Doom and XCOM. But unlike those games, you play as the villains. Lead a raiding party of demons to take over the Earth for the forces of evil in this turn-based RPG with a twist.",
            "Images/Overkill.png", false,
            "https://andrewjscott02.itch.io/overkill", "Play Overkill on Itch",""
        ),
        "godsent" => new Project(
            "Godsent", false, true,
            "You are a nun granted powers by God to defeat the Seven Princes of Hell but you must decide how far you are willing to suffer for your faith or whether you will give into the allure of power.", "You are a nun granted powers by God to defeat the Seven Princes of Hell but you must decide how far you are willing to suffer for your faith or whether you will give into the allure of power.",
            "Images/Godsent.png", false,
            "https://eggchanted.itch.io/godsent", "Play Godsent on Itch",""
        ),
        "javajump" => new Project(
            "JavaJump", false, true,
            "A small browser game made using JavaScript where you must jump to avoid falling obstacles.", "A small browser game made using JavaScript where you must jump to avoid falling obstacles.",
            "Images/JavaJump.png", false,
            "javajump.php#BrowserGame", "Play JavaJump on my Website",""
        )
        
    ];


    #region Projects
    
    // "nmhomepage" => [
    //     "title" => "Netmatters Homepage",
    //     "featured" => false,
    //     "type" => "project",
    //     "description" => "A recreation of the Netmatters Homepage using HTML, CSS, JavaScript and PHP",
    //     "thumbnailSrc" => "Images/NM-heroimage.jpg",
    //     "available" => true,

    //     "videoLink" => false,
    //     "viewLink" => "https://andrew-scott.netmatters-scs.co.uk/php-nm-homepage/",
    //     "viewMessage" => "Open Project",
    //     "repoLink" => ""
    // ],
    // "imagegenerator" => [
    //     "title" => "Random Image Generator",
    //     "featured" => false,
    //     "type" => "project",
    //     "description" => "A random image generator that generates images from Lorem Picsum",
    //     "thumbnailSrc" => "Images/Image-Generator.png",
    //     "available" => true,

    //     "videoLink" => false,
    //     "viewLink" => "https://andrewscott02.github.io/Random-Image-Generator",
    //     "viewMessage" => "Open Project",
    //     "repoLink" => ""
    // ],
    // "arduinocontroller" => [
    //     "title" => "TTRPG Controller",
    //     "featured" => false,
    //     "type" => "project",
    //     "description" => "An arduino project where you can place pieces on a physical board to move pieces in a digital game",
    //     "thumbnailSrc" => "Images/ArduinoController.webp",
    //     "available" => true,

    //     "videoLink" => "https://www.youtube.com/embed/TVrhjMUS844?si=FVnUo691n4NBjaYh&amp;controls=0&autoplay=1&mute=1&playsinline=1&playlist=TVrhjMUS844&loop=1",
    //     "viewLink" => "https://www.youtube.com/watch?v=TVrhjMUS844&t=80s",
    //     "viewMessage" => "Watch Video",
    //     "repoLink" => ""
    // ],
    // "pmai" => [
    //     "title" => "Player Modelling Companion AI",
    //     "featured" => false,
    //     "type" => "project",
    //     "description" => "A companion AI that uses player modelling techniques to adapt to player actions and respond with synergistic behaviour to better collaborate with them.",
    //     "thumbnailSrc" => "Images/PMAI.jpg",
    //     "available" => true,

    //     "videoLink" => "https://www.youtube.com/embed/lme6oJXwc10?si=FVnUo691n4NBjaYh&amp;controls=0&autoplay=1&mute=1&playsinline=1&playlist=lme6oJXwc10&loop=1",
    //     "viewLink" => "https://www.youtube.com/embed/lme6oJXwc10",
    //     "viewMessage" => "Watch Video",
    //     "repoLink" => ""
    // ],
    // "turncombat" => [
    //     "title" => "Turn-Based Combat System",
    //     "featured" => false,
    //     "type" => "project",
    //     "description" => "In my first programming project, I created a 2 player turn based game, modelled after TTRPG games. Players can take turns moving a character and casting spells.",
    //     "thumbnailSrc" => "Images/TurnCombat.jpg",
    //     "available" => true,

    //     "videoLink" => "https://www.youtube.com/embed/lg1MPgQ8eVY?si=FVnUo691n4NBjaYh&amp;controls=0&autoplay=1&mute=1&playsinline=1&playlist=lg1MPgQ8eVY&loop=1",
    //     "viewLink" => "https://www.youtube.com/watch?v=lg1MPgQ8eVY&t=1s",
    //     "viewMessage" => "Watch Video",
    //     "repoLink" => ""
    // ],
    // "visualfx" => [
    //     "title" => "Visual FX Programming",
    //     "featured" => false,
    //     "type" => "project",
    //     "description" => "Visual effects using custom shaders and procedural mesh elements.",
    //     "thumbnailSrc" => "Images/GraphicsImages.png",
    //     "available" => false,

    //     "videoLink" => false,
    //     "viewLink" => "",
    //     "viewMessage" => "Open Project",
    //     "repoLink" => ""
    // ]

    #endregion
    

    function GetProjectDetails()
    {
        global $project;
        
        if (isset($_GET["project"]))
        {
            global $allProjects;
            $projectLink = filter_input(INPUT_GET, "project", FILTER_SANITIZE_STRING);
            $project = $projectLink;
        }

        if (empty($project))
        {
            header("location:index.php");
            exit;
        }
    }
    
    // new Project(
    //     "", false, false,
    //     "", "",
    //     "", false,
    //     "", "Open Project",""
    // )
?>