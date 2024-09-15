<?php

require_once 'FileUtility.php';
require_once 'Random.php';

$random = new Random();
$peopleData = $random->generatePersonData();

FileUtility::writeToFile('persons.csv', $peopleData);

echo "300 records of persons have been generated and saved to persons.csv";
