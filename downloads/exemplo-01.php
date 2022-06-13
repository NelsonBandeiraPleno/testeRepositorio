<?php

$link = "https://img.freepik.com/vetores-gratis/conjunto-de-vetor-de-ideias-de-design-de-logotipo-de-empresa_53876-60292.jpg?w=2000";
$content = file_get_contents($link);
$parse = parse_url($link);
$basename = (basename($parse['path']));
$file = fopen($basename, 'w+');
fwrite($file, $content);
fclose($file);
?>
<img src="<?=$basename?>" alt="">

