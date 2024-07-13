<?php 
    $protocol = isset($_SERVER['HTTPS']) && 
    $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
    $base_url = $protocol . $_SERVER['HTTP_HOST'] . '/activities/FINALS/PROJECT/';
?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Prestige Oasis Grandeur Inn</title>

<script src="https://cdn.tailwindcss.com"></script>
<script src="<?php echo $base_url; ?>assets/js/script.js" defer></script>

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,200,0,0" />
<link href="<?php echo $base_url; ?>assets/css/style.css" rel="stylesheet">