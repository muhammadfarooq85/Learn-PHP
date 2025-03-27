<?php

// enforcing strict type checking 
declare(strict_types=1);

// root directory
$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;

// defining constants to import files such as app file, view file and data.csv file
define("APP_PATH", $root . "app" . DIRECTORY_SEPARATOR);
define("FILE_PATH", $root . "transactions-files" . DIRECTORY_SEPARATOR);
define("VIEW_PATH", $root . "views" . DIRECTORY_SEPARATOR);

require APP_PATH . "app.php";
require VIEW_PATH . "transactions.php";

$files = getTransactionsFiles(FILE_PATH);

$transactions = [];
foreach ($files as $file) {
    $transactions = array_merge($transactions, getTransactions($file, "extractTransactions"));
};

$totals = calculateTotal($transactions);
