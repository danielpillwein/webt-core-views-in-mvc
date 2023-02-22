<?php

$hotel1 = isset($_GET['hotel1']) ? $_GET['hotel1'] : 'Italy-Hotel';
$hotel2 = isset($_GET['hotel2']) ? $_GET['hotel2'] : 'Austria-Hotel';
$hotel3 = isset($_GET['hotel3']) ? $_GET['hotel3'] : 'USA-Hotel';

$template = file_get_contents('./templates/index.html');
$template = str_replace('###HOTEL1###', $hotel1, $template);
$template = str_replace('###HOTEL2###', $hotel2, $template);
$template = str_replace('###HOTEL3###', $hotel3, $template);

echo $template;
