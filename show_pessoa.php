<?php
/**
 * Created by PhpStorm.
 * User: william
 * Date: 27/02/16
 * Time: 01:11
 */


use App\model\Pessoa;

require_once "bootstrap.php";


$id = $argv[1];
$pessoa = $entityManager->find(Pessoa::class, $id);

if ($pessoa === null) {
    echo "Pessoa não encontrada.\n";
    exit(1);
}

echo sprintf("-%s\n", $pessoa->getNome());