<?php
session_start();


$loaderFiles = array();

function __autoload($className) {
    global $loaderFiles;
    
    if(!isset($_SESSION['loaderFiles']) || empty($_SESSION['loaderFiles'])) {
        error_log("LOADING ...");
        $_SESSION['loaderFiles'] = array();
        loadFileConstructor();
        $_SESSION['loaderFiles'] = $loaderFiles;
    }
    
    
    foreach ($_SESSION['loaderFiles'] as $fileToLoad) {
        include_once $fileToLoad;
        //error_log("LOADED = " . $fileToLoad);
    }
    
    return;
}


function loadFileConstructor() {
    global $loaderFiles;
    
    array_push($loaderFiles, str_replace("\\","/",dirname(__FILE__)) . "/Dao/Database/TDBM/Filters/FilterInterface.php");
    array_push($loaderFiles, str_replace("\\","/",dirname(__FILE__)) . "/Dao/Database/TDBM/TDBMException.php");
    //array_push($loaderFiles, str_replace("\\","/",dirname(__FILE__)) . "/Form/Form.php");

    /* Directories that contain classes */
    $classesDir = array(
        'Dao/Database',
        'Dao/Bean',
        'Dao',
        'Form',
        'EvoluGrid',
        'Controllers'
    );

    foreach ($classesDir as $directory) {
        error_log($directory);
        $directory = str_replace("\\","/",dirname(__FILE__)) . "/" . $directory;
        recursiveGlob($directory, "php");
    }
    
}


function recursiveGlob($dir, $ext) {
    global $loaderFiles;
    
    $globFiles = glob("$dir/*.$ext");
    $globDirs  = glob("$dir/*", GLOB_ONLYDIR);

    foreach ($globDirs as $dir) {
        recursiveGlob($dir, $ext);
    }

    foreach ($globFiles as $file) {
        array_push($loaderFiles, $file);
    }
    
}

?>
