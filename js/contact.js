//#region Form Validation

$(".form-sbmt").on("click", (event)=>{
    CheckFormFields(event);
})

$("input").on("keypress", (event)=>{
    if (event.which == 13)
    {
        CheckFormFields(event);
    }
})

function CheckFormFields(event)
{
    let canSubmit = true;
    let message = "Please fill out all required form fields";

    $("input").each((index, element)=>{
        if ($(element).prev().hasClass("required"))
        {
            if ($(element).attr("type") === "email")
            {
                let emailMessage = GetEmailMessage($(element).val());
                if(emailMessage !== "")
                {
                    message = emailMessage;
                    canSubmit = false;
                }
            }

            const content = $(element).val();
            if (content == "")
            {
                // alert("success: " + $(element) + " => " + content);
                canSubmit = false
            }
        }
    });

    if (!canSubmit)
    {
        event.preventDefault();
        DisplaySubmitStatus(message, false);
    }
}

function DisplaySubmitStatus(message, status)
{
    console.log(status);
    let statusMessage = status ? "Success" : "Failed";

    $(".form-status-message").html(message);
    $(".form-status").removeClass("hidden")

    if (status === "true")
    {
        $(".form-status").removeClass("form-status-error");
    }
    else
    {
        $(".form-status").addClass("form-status-error");
    }

    setTimeout(() => {
        location.hash = "";
        location.hash = "#Contact";
        ForceRemoveHeader();
    }, 50);
    
    setTimeout(() => {
        ForceRemoveHeader();
    }, 100);
}

function ClearFormFields()
{
    $("input").each((index, element)=>{
        $(element).val("");
    });
}

const emailChecks =
[
    //Does not end on .
    {
        message: "'.' is used at the wrong position in the email address",
        regexCheck: [/\.$/, /@+\./],
        required: false
    },

    //Text after @
    {
        message: "Please enter some text after the '@' in the email address",
        regexCheck: [/@+\S/],
        required: true
    },

    //Includes @
    {
        message: "Please include an '@' in the email address",
        regexCheck: [/\S+@/],
        required: true
    }
]

function GetEmailMessage(input)
{
    message = "";

    for (let i= 0; i < emailChecks.length; i++)
    {
        let success = true;

        for (let j = 0; j < emailChecks[i].regexCheck.length; j++)
        {
            let match = input.match(emailChecks[i].regexCheck[j]) ? true : false;
            match = match == emailChecks[i].required;

            if (match == false)
            {
                success = false;
            }
        }

        if (!success)
        {
            //alert(emailChecks[i].message);
            message = emailChecks[i].message;
        }
    }

    if (input === "")
    {
        message = "Please include an email address";
    }
    
    return message;
}

//#endregion

$(".close-status").on("click", (event)=>{
    event.preventDefault();
    $(".form-status").addClass("hidden");
})