//#region Enable Game

$(".javascript-disabled").hide();
$(".requires-javascript").addClass("javascript-enabled");

//#endregion

//#region Click Input

$("#GameViewport").on("click", ()=>{
    if(!$("#GameViewport").hasClass("game-running"))
    {
        //If game hasn't started, start game
        $("#GameViewport").addClass("game-running");
        StartGame();
    }
    else
    {
        //If game has started, make character jump
        Jump();
    }
})

//#endregion

//#region Game Manager

let board;
let context;

const tick = 10;

function StartGame()
{
    board = document.getElementById("Board");
    context = board.getContext("2d");

    InitializeCharacter();
    //Set a random interval to spawn objects
    //Random interval to track score

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
}

//#endregion

//#region Character

let character

function InitializeCharacter()
{
    character = {
        x: 0,
        y: 40,
        size : 10,
        speed: 25,
        target: 0
    }

    character.y = board.height - character.y;
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

//#endregion

//#region Enemies

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

//#endregion

//#region Helper Functions

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

//#endregion

var inputs = [
    ["nameForm", "nameAlert"],
    ["emailForm", "emailAlert"],
    ["subjectForm", "subjectAlert"],
    ["messageForm", "messageAlert"]
];