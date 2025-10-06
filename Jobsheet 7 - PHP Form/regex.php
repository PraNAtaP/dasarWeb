<?php
$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like apple pie';
$newText = preg_replace($pattern, $replacement, $text);
echo $newText;
?>