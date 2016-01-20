<?php
$rand=rand();
shell_exec('espeak -ven-us+f5  -z -s 160  -w "audio\\test\\'.$rand.'.wav" "'.$_POST['voice'].'"');
//shell_exec('espeak -vhi+f4  -z -s 160  -w "audio\\test\\'.$rand.'.wav" "'.$_POST['voice'].'"');
echo $rand;
?>

