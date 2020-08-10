<?php

if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') ||
strstr($_SERVER['HTTP_USER_AGENT'],'iPod'))
{
header('Location:http://www.domain.com/iphone ');
exit();
}
else if(strstr($_SERVER['HTTP_USER_AGENT'],'iPad'))
{
header('Location:http://www.domain.com/ipad');
exit();
}
else if(strstr($_SERVER['HTTP_USER_AGENT'],'Android'))
{
header('Location:http://www.domain.com/ipad');
exit();
}
else{
   
}
?>