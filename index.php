
<?php

try {


    include_once "vendor/autoload.php";
include_once "system/error/settings.php";
    include_once "system/router/Router.php";

    new Router(@$_GET["url"]);
    include_once "system/router/web.php";
    Router::submit();


}

catch (Exception $a) {
    echo $a->getMessage();

}

?>
