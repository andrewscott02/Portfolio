//#region Carousel

$(".slides").slick({
    //fade:true,
    autoplay: true,
    autoplaySpeed: 15000,
    arrows: false,
    dots: true
});

//#endregion

//#region Scale Videos

//$("iframe").fitVids();

// $("iframe").each((item)=>{
//     $(item).width = $(item).contentWindow.document.body.scrollWidth;
//     $(item).height = $(item).contentWindow.document.body.scrollHeight;
// });

//#endregion

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