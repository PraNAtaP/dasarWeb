<?php
$pattern = '/go{1,2}d/';
$text = 'gd god good goood';
if (preg_match_all($pattern, $text, $matches)) {
    echo "Cocok di : " . implode(', ', $matches[0]);
} else {
    echo "Tidak ada yang cocok!";
}
?>
