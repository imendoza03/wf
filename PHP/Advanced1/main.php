<?php

require_once __DIR__ . '\Loader\loader.php';
require_once __DIR__ . '\Formatter\formatter.php';
require_once __DIR__ . '\FileDumper\dumper.php';

use function Advanced1\Loader\downloadData;
use function Advanced1\Formatter\dataFormatter;
use function Advanced1\FileDumper\fileDumper;

$data = downloadData();
$formattedData = dataFormatter($data);
fileDumper($formattedData);
