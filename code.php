<?php
$code = rand(100000,999999);

$myfile = fopen("confirmcode.php", "w");
$txt = "<?php\n $"."confirmcode = {$code};\n?>";
fwrite($myfile, $txt);
fclose($myfile);
?>