#!/usr/bin/php
#!/usr/bin/env  php
<?php



if($argv[1]=="-c"){

	$a=$argv[2];

$class="<?php

namespace App\controllers;




class $a{



}";

$dt = fopen('app/controllers/'.$argv[2].'.php', 'w');

fwrite($dt, $class);
fclose($dt);
echo "app/controllers/".$argv[2].".php   created succesfully";


}
else if($argv[1]=="-m"){



	$a=$argv[2];

$class="<?php

namespace App\models;
use System\helpers\general\craud;





class $a{

	

use craud;

protected $"."table"."='yourtable'; 



}";

$dt = fopen('app/Models/'.$argv[2].'.php', 'w');

fwrite($dt, $class);
fclose($dt);
echo "app/models/".$argv[2].".php created succesfully";

}
else {

	echo "The command is wrong";
}

?>
