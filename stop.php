<?php 
echo 'test';

$command = escapeshellcmd("sudo python stopsprinkler.py"); $output = shell_exec($command);
echo $output;

 ?>
