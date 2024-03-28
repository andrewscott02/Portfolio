//#region Enable Game

$(".javascript-disabled").hide();
$(".requires-javascript").addClass("javascript-enabled");

//#endregion

//#region Click Input

$("#GameViewport").on("click", ()=>{
    if(!$("#GameViewport").hasClass("game-running"))
    {
        //If game hasn't started, start game
        $("#GameViewport").addClass("game-running")
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

    setInterval(()=>{Update();}, tick);
    setInterval(()=>{DecreaseSpawnInterval();}, enemySpawnIncreaseInterval);
    
    setTimeout(()=>{SpawnEnemy();}, enemySpawnInterval);
}

function Update()
{
    //Clears board
    context.clearRect(0, 0, board.width, board.height);

    CharacterMovement();

    EnemyMovement();
}

//#endregion

//#region Character

let character = {
    x: 0,
    y: 40,
    size : 10,
    speed: 25,
    target: 0
}

function InitializeCharacter()
{
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
    console.log("Spawn enemy at: " + spawnPos + " current interval: " + enemySpawnInterval);
    enemies.push([spawnPos, 0]);

    setTimeout(()=>{SpawnEnemy();}, enemySpawnInterval);
}

function EnemyMovement()
{
    let enemiesToRemove = 0;
    for(let i = 0; i < enemies.length; i++)
    {
        let movement = enemyValues.speed;
        if (enemies[i][1] > board.height)
        {
            enemiesToRemove ++;
        }

        //Clamps the value so character cannot move off the board
        enemies[i][1] = Clamp(enemies[i][1] + movement, 0, board.width - enemyValues.size);
        context.fillStyle="red";
        context.fillRect(enemies[i][0], enemies[i][1], enemyValues.size, enemyValues.size);
    }

    for(let i = 0; i < enemiesToRemove; i++)
    {
        enemies.unshift();
    }
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