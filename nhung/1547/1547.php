<?php 
    $url_host = 'http://' . $_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
    
    require_once 'scssphp/scss.inc.php';
    use ScssPhp\ScssPhp\Compiler;
    
    $scss = new Compiler();
    
    $result = $scss->compile('@import"sass/1547.scss"');
    
    file_put_contents("css/1547.css",$result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $url_path ?>/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $url_path ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $url_path ?>/css/1547.css">
    <script src="<?php echo $url_path ?>/js/jquery-3.2.0.min.js"></script>
    <script src="<?php echo $url_path ?>/js/bootstrap.min.js"></script>
    <title>Modul 1547</title>
</head>

<body>
    <?php include "1547-content.php" ?>
</body>

</html>