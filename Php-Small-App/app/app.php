<?php

// enforcing to strict type checking
declare(strict_types=1);

// Main logics will be here...
function getTransactionsFiles(string $fileDir): array
{
    $files = [];

    foreach (scandir($fileDir) as $file) {
        if (is_dir($file)) {
            continue;
        };
        
        $files[] = $fileDir . $file;
    }
    ;

    return $files;
}
;

function getTransactions(string $filename, ?callable $transactionHandler = null): array
{
    if (!file_exists($filename)) {
        trigger_error("File" . $filename . "doesn't exist.");
    }
    ;

    $transactions = [];
    $file = fopen($filename, "r");

    $header = fgetcsv($file, );
    while (($transaction = fgetcsv($file)) !== false) {
        if ($transactionHandler !== null) {
            $transaction = $transactionHandler($transaction);
        }
        ;
        $transactions[] = $transaction;
    }
    ;

    fclose($file);
    return $transactions;
}
;

function extractTransactions(array $transactionsRow): array
{
    // destrcuturing values from an array
    [$date, $check, $description, $amount] = $transactionsRow;

    // handling the amount
    $amount = (float) str_replace(["$", ","], "", $amount);

    return [
        "date" => $date,
        "check" => $check,
        "description" => $description,
        "amount" => $amount,
    ];
}
;
function calculateTotal(array $transactions): array {
    $totals = [
        "netTotal" => 0,
        "totalIncome" => 0,
        "totalExpense" => 0,
    ];

    foreach ($transactions as $transaction) {
        $totals["netTotal"] = $transaction["amount"];
            if($transaction["amount"] >= 0 ){
                $totals["totalIncome"] += $transaction["amount"];
            } else {
                $totals["totalExpense"] += $transaction["amount"];
            };
    };

    return $totals;
};


function formatDollars (float | int $amount):string{
    $isNegative = $amount < 0;
    return (($isNegative ? "-" : "" . "$") . number_format(abs($amount),2,".",""));
};

function formatDate (string $date):string{
    return date("d/m/Y", strtotime($date));
}