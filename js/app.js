$(".slides").slick({
    //fade:true,
    //autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
    dots: true,

    slidesToShow: 2,
    slidesToScroll: 1
});

$(".slides").css("display", "inherit");

// $(".project").on("mouseenter", (event)=>{
//     $(event.target).addClass("show-vid");
//     //ResizeVidBorders();
// })

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