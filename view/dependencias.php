<?php

    function joinPath($root, $new_paths) {
        $new_root = explode(DIRECTORY_SEPARATOR, $root);
        foreach ($new_paths as $new_path) {
            array_push($new_root, $new_path);
        }
        return implode(DIRECTORY_SEPARATOR, $new_root);
    }

    define('ROOT_PATH', 'http://localhost/aprendendo_poo');
    define('VIEW_PATH', joinPath(ROOT_PATH, ['view']));
    define('CSS_PATH', joinPath(VIEW_PATH, ['css']));
    define('JS_PATH', joinPath(VIEW_PATH, ['js']));
    define('IMAGES_PATH', joinPath(VIEW_PATH, ['images']));

?>

<link rel="stylesheet" href="<?=joinPath(CSS_PATH, ['bootstrap.min.css'])?>">
<link rel="stylesheet" href="<?=joinPath(CSS_PATH, ['main.css'])?>">
<link rel="stylesheet" href="<?=joinPath(CSS_PATH, ['shards.min.css'])?>">
<link rel="shortcut icon" href="https://peijgv.com/images/geraldo_logo.png" type="image/x-icon">
