<?php


require "./vendor/autoload.php";
// SRP

use solid\LS\Sub;
use solid\SRP\Post;
use solid\SRP\PrintHtml;
use solid\SRP\PrintJson;


$post = new Post();

$toJson = new PrintJson();
echo $toJson->print($post);
echo "<br>";
$toHtml = new PrintHtml();
echo $toHtml->print($post);

echo "<br>";
// OC 

 use solid\OC\Post as OCPost;
 use solid\OC\TextPost;
 use solid\OC\VideoPost;

 $post = new OCPost();

 echo $post->publish(new VideoPost);
 echo "\n";
 echo $post->publish(new TextPost);
 echo "<br>";

// LS


use solid\LS\Tester;

$test = (new Tester)->test(new Sub , 3.2);

echo $test;


echo "<br>";
// IS

use solid\IS\ServerDeploy;
use solid\IS\AWS;
use solid\IS\Azure;

$deploy = (new ServerDeploy)->DeployForASP(new Azure);

echo $deploy;

echo "<br>";

use solid\DI\Database;
use solid\DI\MongoDB;
use solid\DI\Mysql;

$db = (new Database(new MongoDB))->getConnection();
echo $db;
