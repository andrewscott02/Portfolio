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

const pContent = $("#HeroImage p").text();
const typeTime = 25;

let currentPTimeout;

// setTimeout(Test, 3000)

// function Test
// {
//     alert("should appear after 3 seconds");
// }

//Hover
$("#HeroImage").on("mouseenter", ()=>{
    ScrambleText($("#HeroImage p"));
})

$("#HeroImage").on("mouseleave", ()=>{
    UnscrambleText($("#HeroImage p"), typeTime, pContent);
})

function ScrambleText($textObj)
{
    clearTimeout(currentPTimeout);
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
        currentPTimeout = setTimeout(DelayWrite, i * typeTime, $textObj, newString);
        //DelayWrite($textObj, (i * 1000), newString);
    }
}

function UnscrambleText($textObj, typeTime, originalContent)
{
    clearTimeout(currentPTimeout);
    let unscrambleContent = $($textObj).text();
    for (let i = 0; i < originalContent.length; i++)
    {
        let newString = BuildString(unscrambleContent, originalContent, i).join("");
        unscrambleContent = newString;
        currentPTimeout = setTimeout(DelayWrite, i * typeTime, $textObj, newString);
        //DelayWrite($textObj, (i * 1000), newString);
    }
}

function BuildString(unscrambleContent, originalContent, index)
{
    let newString = [];

    for (let i = 0; i < originalContent.length; i++)
    {
        let letterAdd = i <= index ? originalContent[i] : unscrambleContent[i];
        newString.push(letterAdd);
    }

    return newString;
}

function DelayWrite($textObj, newString)
{
    $($textObj).text(newString);
}

/**
 * 
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