<?php 

require "vendor/autoload.php";

use NickoM31\App\Foo\Client as FooClient;
use NickoM31\App\Bar\Client as BarClient;

echo (new Fooclient())->render();
echo "</br>";
echo (new BarClient())->render();

?>