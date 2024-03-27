//#region Side Panel

$(".nav-btn-mobile").on("click", ()=>{
    $("#MainContainer").toggleClass("sideMenuOpen");
    $("#SideMenu").toggleClass("sideMenuOpen");
    $(".nav-btn-mobile").toggleClass("sideMenuOpen");
})

//#endregion

//#region Carousel

$(".slides").slick({
    //fade:true,
    autoplay: true,
    autoplaySpeed: 15000,
    arrows: false,
    dots: true
});

//#endregion

//#region Hero Image Effects

const H_Content = $("#HeroImage h1").text();
const H_scrambleTime = 16;
const H_unscrambleTime = 40;
const H_unscrambleDelay = 20;

const P_Content = $("#HeroImage p").text();
const P_scrambleTime = 10;
const P_unscrambleTime = 15;
const P_unscrambleDelay = 400;

const P_Timeouts = [];

$( document ).ready(()=>{
    ClearAllTimeouts()
    ScrambleText($("#HeroImage h1"), 0); //Quickly scrambles text in case it isn't fully scrambled
    ScrambleText($("#HeroImage p"), 0); //Quickly scrambles text in case it isn't fully scrambled
    
    setTimeout(UnscrambleText, H_unscrambleDelay, $("#HeroImage h1"), H_unscrambleTime, H_Content);
    setTimeout(UnscrambleText, P_unscrambleDelay, $("#HeroImage p"), P_unscrambleTime, P_Content);
})

//Hover
$("#HeroImage").on("mouseenter", ()=>{
    ClearAllTimeouts()
    ScrambleText($("#HeroImage h1"), H_scrambleTime);
    ScrambleText($("#HeroImage p"), P_scrambleTime);
})

$("#HeroImage").on("mouseleave", ()=>{
    ClearAllTimeouts()
    ScrambleText($("#HeroImage h1"), 0); //Quickly scrambles text in case it isn't fully scrambled
    ScrambleText($("#HeroImage p"), 0); //Quickly scrambles text in case it isn't fully scrambled
    
    setTimeout(UnscrambleText, H_unscrambleDelay, $("#HeroImage h1"), H_unscrambleTime, H_Content);
    setTimeout(UnscrambleText, P_unscrambleDelay, $("#HeroImage p"), P_unscrambleTime, P_Content);
})

/** Clears all timeouts for writing the p element
 */
function ClearAllTimeouts()
{
    for(let i = 0; i < P_Timeouts.length;)
    {
        clearTimeout(P_Timeouts[0]);
        P_Timeouts.shift();

        if (P_Timeouts.length == 0)
        {
            break;
        }
    }
}

/** Scrambles Text
 * @param {*} $textObj - The jQeury Object to scramble
 * @param {*} typeTime - Inerval between each letter is typed
 */
function ScrambleText($textObj, typeTime)
{
    const originalContent = $($textObj).text();
    let scrambleContent = "";

    for (let i = 0; i < originalContent.length; i++)
    {
        scrambleContent += `${RandomRange(0, 10)}`;
    }

    for (let i = 0; i < originalContent.length; i++)
    {
        let newString = BuildString(originalContent, scrambleContent, i).join("");
        unscrambleContent = newString;

        let timeoutID = setTimeout(SetStringContent, i * typeTime, $textObj, newString);
        P_Timeouts.push(timeoutID);
    }
}

/** Unscrambles Text
 * @param {*} $textObj - The jQeury Object to scramble
 * @param {*} typeTime - Inerval between each letter is typed
 * @param {*} originalContent - The original text content to unscramble to
 */
function UnscrambleText($textObj, typeTime, originalContent)
{
    let unscrambleContent = $($textObj).text();
    for (let i = 0; i < originalContent.length; i++)
    {
        let newString = BuildString(unscrambleContent, originalContent, i).join("");
        unscrambleContent = newString;

        let timeoutID = setTimeout(SetStringContent, i * typeTime, $textObj, newString);
        P_Timeouts.push(timeoutID);
    }
}

/** Builds a string combining 2 strings together
 * @param {*} fromString - Uses as the base string for the message
 * @param {*} toString - Uses this string up to the index, then uses the fromString
 * @param {*} index - Index up to when the toString stops being used
 * @returns 
 */
function BuildString(fromString, toString, index)
{
    let newString = [];

    for (let i = 0; i < toString.length; i++)
    {
        let letterAdd = i <= index ? toString[i] : fromString[i];
        newString.push(letterAdd);
    }

    return newString;
}

/** Sets String Content
 * @param {*} $textObj - The jQuery Object to set content for
 * @param {*} newString - The new string to set as content
 */
function SetStringContent($textObj, newString)
{
    $($textObj).text(newString);
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

    // if (min && max) //This checks that the numbers are not NaN
    // {
    //     var range = parseInt(max) - parseInt(min);
    //     var result = Math.floor(Math.random() * range) + parseInt(min);
    //     return result;
    // }
    // else
    // {
    //     alert("Inputs are not valid inputs");
    //     throw Error("Inputs are not valid inputs");
    // }
}

//#endregion

//#region Not Implemented

//#region Scale Videos

//$("iframe").fitVids();

// $("iframe").each((item)=>{
//     $(item).width = $(item).contentWindow.document.body.scrollWidth;
//     $(item).height = $(item).contentWindow.document.body.scrollHeight;
// });

//#endregion

//#region Mouse Hover On Cards

// $(".project").on("mouseleave", (event)=>{
//     $(event.target).removeClass("show-vid");
//     //ResizeVidBorders();
// })

// ResizeVidBorders();

// function ResizeVidBorders()
// {
//     alert("Resizing videos");

//     $(".project iframe").each((item)=>{
//         alert("Resizing " + item + " video");
//         imgHeight = $(item).prev().outerHeight();
//         vidHeight = $(item).outerHeight();

//         heightDiff = imgHeight - vidHeight;

//         // vidTopPadding = $(item).css("paddingTop") + heightDiff/2;
//         // vidBottomPadding = $(item).css("paddingBottom") + heightDiff/2;

//         $(item).css("paddingTop", heightDiff/2)
//         $(item).css("paddingBottom", heightDiff/2)
//     })
// }

//#endregion

//#endregion