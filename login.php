<?php


$text="hello";
$sub="what";
$to="mortezapashaei09@gmail.com";
if(mail($to,$sub,$text))
{
    echo("worked");
}
else
{
    echo("not working");
}



?>