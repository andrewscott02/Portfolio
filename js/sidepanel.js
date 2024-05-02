//#region Side Panel

//Resizes the side panel when page is ready
$(document).ready(()=>{
    SetSidePanelSize();
});

//Resizes the side panel when page is resized
$(window).on("resize", ()=>{
    SetSidePanelSize();
    //Resizes after a small delay to wait for the page to resize, due to transition ease
    setTimeout(SetSidePanelSize, 500);
});

function SetSidePanelSize()
{
    //Sets the height of the side panel to the height of the body
    $(".sideMenu-container").css("height", $("#SideMenu").parent().css("height"));
    $(".sideMenu").css("height", $("#SideMenu").parent().css("height"));
}

//Ensures the side panel is closed at the start
CloseSidePanel();

function CloseSidePanel()
{
    //alert("Close Side Panel");
    $("#SideMenu").removeClass("sideMenuOpen"); //Shows/hides navbar
    $(".sideMenu-container").removeClass("sideMenuOpen"); //Shows/hides navbar
    
    $(".nav-btn-mobile").removeClass("sidepanel-open-rotate"); //Shows/hides navbar
    setTimeout(()=>{
        $(".nav-btn-mobile").removeClass("sideMenuOpen");
    }, 150)
}

function OpenSidePanel()
{
    //alert("Close Side Panel");
    $("#SideMenu").addClass("sideMenuOpen"); //Shows/hides navbar
    $(".sideMenu-container").addClass("sideMenuOpen"); //Shows/hides navbar
    
    $(".nav-btn-mobile").addClass("sideMenuOpen"); //Shows/hides navbar
    setTimeout(()=>{
        $(".nav-btn-mobile").addClass("sidepanel-open-rotate");
    }, 150)
}

//When the mobile nav button is clicked
$(".nav-btn-mobile").on("click", (event)=>{
    event.preventDefault(); //Prevents the page from scrolling to the top
    $("#SideMenu").toggleClass("sideMenuOpen"); //Shows/hides navbar

    if ($("#SideMenu").hasClass("sideMenuOpen"))
    {
        OpenSidePanel();
    }
    else
    {
        CloseSidePanel();
    }
})

//#endregion