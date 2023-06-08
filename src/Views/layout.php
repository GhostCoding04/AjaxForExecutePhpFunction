<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    
    <title>AjaxExecutePhpFunction</title> 
    <link rel="shortcut icon" href="<?= URL . "/img/logo.png" ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= URL . "/style.css" ?> "> 
    
    <script src="https://kit.fontawesome.com/ac7bce0ab5.js" crossorigin="anonymous"></script> 
</head> 
<body>
    <header>
    </header>
    <main> 
        <?php echo $content; ?> 
    </main> 
<script src="js/app.js"></script>
</body>

<?php 
unset($_SESSION['error']); 
unset($_SESSION['old']); 
unset($_SESSION['success']); 
unset($_SESSION['erreur']);