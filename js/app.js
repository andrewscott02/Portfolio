$(".slides").slick({
    //fade:true,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
    dots: true
});

$(".slides").css("display", "inherit");

$("iframe").fitVids();

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