<?php

/**
 * @var $errno \svdsu\ErrorHandler
 * @var $errstr \svdsu\ErrorHandler
 * @var $errfile \svdsu\ErrorHandler
 * @var $errline \svdsu\ErrorHandler
 */

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ошибка</title>
</head>
<body>

<h1>Произошла ошибка</h1>
<p><b>Код ошибки:</b> <?= $errno ?></p>
<p><b>Текст ошибки:</b> <?= $errstr ?></p>
<p><b>Файл, в котором произошла ошибка:</b> <?= $errfile ?></p>
<p><b>Строка, в которой произошла ошибка:</b> <?= $errline ?></p>

</body>
</html>
