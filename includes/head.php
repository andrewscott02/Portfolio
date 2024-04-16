<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Style Sheets -->
<link rel="stylesheet" href="js/plugins/slick/slick.css">
<link rel="stylesheet" href="js/plugins/slick/slick-theme.css">
<link rel="stylesheet" href="css/application.css">

<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/site.webmanifest">

<?php
    //If page title is not set, set a default value
    if (!$pageTitle)
    {
        $pageTitle = "Andrew Scott - Portfolio";
    }
?>

<title><?php echo $pageTitle ?></title>