<?php

require_once('validateCpf_before.php');
require_once('validateCpf_after.php');

$cpf1 = '00000000000';
$cpf2 = '86446422799';
$cpf3 = '86446422784';
$cpf4 = '864.464.227-84';
$cpf5 = '91720489726';
$cpf6 = 'a1720489726';

echo '\t\t', 'Before', ' After';
echo $cpf1, '\t', validate($cpf1), '\t', validateCpf($cpf1);
echo $cpf2, '\t', validate($cpf2), '\t', validateCpf($cpf2);
echo $cpf3, '\t', validate($cpf3), '\t', validateCpf($cpf3);
echo $cpf4,       validate($cpf4), '\t', validateCpf($cpf4);
echo $cpf5, '\t', validate($cpf5), '\t', validateCpf($cpf5);
echo $cpf6, '\t', validate($cpf6), '\t', validateCpf($cpf6);