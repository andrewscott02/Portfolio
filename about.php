<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $pageTitle = "Andrew Scott - About Me";
        include("includes/head.php"); 
    ?>
</head>
<body>
    <?php include("includes/sidemenu.php"); ?>

    <div id="MainContainer" class="container">
        <?php 
            include("includes/header.php");
            include("includes/nav.php");
            include("includes/heroimage.php"); 
        ?>

        <main id="Main">
            <div id="About">
                <div class="about-header">
                    <h2>About Me</h2>
                </div>
                <div class="about-intro">
                    <p>
                        I am a games programmer, specializing in gameplay and AI programming, and am looking to start a career in the Games industry.
                    </p>
                    <p>
                        I enjoy games as a means of interactive storytelling, and I aim to closely tie narrative with game mechanics. Though I specialize in programming, I also branch out into design in order to better link storytelling with gameplay. Experience with design helps me to develop interesting and evocative gameplay mechanics that help tell the story through gameplay.
                    </p>
                    <p>
                        As a programmer, my specialism is in gameplay programming and artificial intelligence. I have experience with designing and implementing behaviour for NPCs. In my current project, I am developig my understanding of AI techniques to procedurally generate levels.
                    </p>
                    <p>
                        I have also worked in a lot of group projects (between 2 and 13 developers), and so I have experience working with a team to deliver games. We used agile methodologies such as scrum and tools like Trello to better organize the team.
                    </p>
                </div>
                <div id="Achievements">
                    <h3>Achievements</h3>
                    <div class="achievements">
                        <a class="achievement" target="_blank" href="https://www.therookies.co/entries/24461">
                            <h4>Rookie Awards</h4>
                            <h5>Game of the Year - Mobile | Finalist and Highly Commended (2023)</h5>
                            <div>
                                <img src="Images/finalist-rookie-awards.png">
                                <img src="Images/rookie-awards-goty-hc.png">
                            </div>
                            <p>I have achieved a highly commended award for the Game of the Year mobile award from the Rookies in 2023 for our group student game, Battle for Arcana. Our game is a 2D deck-builder where you use Tarot cards to cast spells in combat and is a mobile counterpart to our PC game, Corruption of Arcana.</p>
                            <div class="btn inline external-link">Our Entry</div>
                        </a>
                        <div class="achievement">
                            <h4>Falmouth University</h4>
                            <h5>Bachelor of Science in (Hons) in Computing for Games | Grade 2:1 (2020-2023)</h5>
                            <p>
                                I have completed BSc(Hons) Computing for Games and have been awarded a Second Class Honours (Upper Division) (2:1) classification at Falmouth University.
                            </p>
                            <p>
                                On this course, I've worked on games with teams of other students, developing both games development and team-working skills.
                            </p>
                            <p>
                                I've leveraged programming and design skills to create punchy and intuitive gameplay and better organised teamwork using agile methodologies such as scrum and kanban boards.
                            </p>
                        </div>
                    </div>
                </div>
                <ul id="Skills">
                    <h3>Skills</h3>
                    <li class="skill top-skill">
                        <div class="icon-unity inline"></div>
                        Unity
                        <div class="skill-overlay-container">
                            <p>I've utilised my skills with Unity to make games with teams of other students at Falmouth University</p>
                            <p>I've made multiple games as part of gam jams, both individually and as part of a team</p>
                            <p>I've been working on my own game using Unity and C#</p>
                        </div>
                    </li>
                    <li class="skill">
                        <div class="icon-unrealengine inline"></div>
                        Unreal Engine 4
                    </li>
                    <hr>
                    <li class="skill top-skill">
                        C#
                        <div class="skill-overlay-container">
                            <p>I've utilised my skills with C# to make games with teams of other students at Falmouth University</p>
                            <p>I've made multiple games as part of gam jams, both individually and as part of a team</p>
                            <p>I've been working on my own game using Unity and C#</p>
                        </div>
                    </li>
                    <li class="skill top-skill">
                        <div class="icon-git inline"></div>
                        Git
                        <div class="skill-overlay-container">
                            <p>I've used Git to collaborate with other students to make games and manage projects</p>
                            <p>I've used Github pages to host websites and portfolios (like this one!)</p>
                        </div>
                    </li>
                    <li class="skill">HTML & CSS</li>
                    <li class="skill">SASS</li>
                    <hr>
                    <li class="skill top-skill">
                        Agile
                        <div class="skill-overlay-container">
                            <p>I've used agile methodologies to better organise teamwork</p>
                            <p>I've used scrum and kanban boards to manage tasks in group projects</p>
                        </div>
                    </li>
                </ul>
            </div>
        </main>
        
        <?php include("includes/footer.php"); ?>
    </div>

    <?php include("includes/generalJS.php"); ?>
</body>
</html>