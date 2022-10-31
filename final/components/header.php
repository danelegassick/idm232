<?php 
function site_url() {

    //checks if using HTTPS
    $protocol = 'http';
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
        $protocol = 'https';
    }

    //get current domain
    $domain =$_SERVER['HTTP_HOST'];

    //merge with current path
    if ($domain === 'danelegassick.com') {
        return $protocol . '://' . $domain . '/idm232/final';
    } else {
        return $protocol . '://' . $domain . '/final';
    }

}

function project_path() {

    $domain =$_SERVER['HTTP_HOST'];

    //merge with current path
    if ($domain === 'danelegassick.com') {
        return $protocol . '://' . $domain . '/idm232/final';
    } else {
        return $protocol . '://' . $domain . '/final';
    }

}


if(!isset($page_name)) {
    $page_name = '⚠️ MISSING TITLE ⚠️';
}

// isset ($checkifVariableExists)

$site_name = 'IDM 232';
$document_title = $page_name . ' | ' . $site_name;
// Home | IDM232


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $document_title; ?></title>
    <link rel="stylesheet" href="<?php echo site_url(); ?>/dist/styles/style.css">
</head>

<body>
    <?php
    include $_SERVER['DOCUMENT_ROOT'] . '/final/components/main-nav.php'; 
    ?>
    
    <main>