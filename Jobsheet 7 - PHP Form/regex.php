<?php
$pattern = '/go?d/';
$text = 'gd god good';
if (preg_match_all($pattern, $text, $matches)) {
    echo "Cocok di : " . implode(', ', $matches[0]);
} else {
    echo "Tidak ada yang cocok!";
}
?>