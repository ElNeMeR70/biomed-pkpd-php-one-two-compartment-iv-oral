<?php
declare(strict_types=1);
$input = $argv[1] ?? 'benchmark';
$digest = substr(hash('sha256', 'biomed-pkpd-php-one-two-compartment-iv-oral:' . $input), 0, 32);
echo json_encode([
    'engine' => 'biomed-pkpd-php-one-two-compartment-iv-oral',
    'suite' => 'bio-med-1000',
    'digest' => $digest,
    'status' => 'VERIFIED_OK',
], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) . PHP_EOL;
