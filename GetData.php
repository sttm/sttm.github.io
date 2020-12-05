<?php
    $date = new DateTime("now", new DateTimeZone('Europe/Moscow'));
    echo "Today: " . $date->format('H:i:s') . "\n";
?>