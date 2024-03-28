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

const tick = 100;

function StartGame()
{
    board = document.getElementById("Board");
    context = board.getContext("2d");

    InitializeCharacter();
    //Set a random interval to spawn objects
    //Random interval to track score

    setInterval(()=>{Update();}, tick);
}

function Update()
{
    context.clearRect(0, 0, board.width, board.height);
    context.fillRect(character.x, character.y, character.size, character.size);
}

//#endregion

//#region Character

let character = {
    x: 0,
    y: 40,
    size : 10
}

function InitializeCharacter()
{
    context.fillStyle="green";
    character.y = board.height - character.y;
    //context.fillRect(character.x, character.y, character.size, character.size);
}

function Jump()
{
    //alert("Jump");
    //context.fillStyle="green";
    //Change x value
    character.x = character.x === 0 ? board.width - character.size : 0;
    console.log("Jump " + character.x);
}

//#endregion

var inputs = [
    ["nameForm", "nameAlert"],
    ["emailForm", "emailAlert"],
    ["subjectForm", "subjectAlert"],
    ["messageForm", "messageAlert"]
];