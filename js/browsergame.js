//#region Enable Game

$(".javascript-disabled").hide();
$(".requires-javascript").addClass("javascript-enabled");

//#endregion

$("#GameViewport").on("click", ()=>{
    if(!$("#GameViewport").hasClass("game-running"))
    {
        //If game hasn't started, start game
        $("#GameViewport").addClass("game-running")
    }
    else
    {
        //If game has started, make character jump
        //alert("Jump");
    }
})