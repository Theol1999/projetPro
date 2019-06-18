<?php
require_once 'models/events.php';
$events = new events();
$allEvent = $events->showEvent();
