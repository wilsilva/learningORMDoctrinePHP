<?php
/**
 * Created by PhpStorm.
 * User: william
 * Date: 27/02/16
 * Time: 12:13
 */

use App\model\Produto;

require_once 'bootstrap.php';


$id = $argv[1];
$nomeProdutoAlterado = $argv[2];

$produto = $entityManager->find(Produto::class,$id);

if ($produto === null) {
    echo "Produto não encontrada.\n";
    exit(1);
}


$produto->setNome($nomeProdutoAlterado);
$entityManager->flush($produto);

echo "Produto de ID " . $produto->getId() . " alterado para o nome de " . $nomeProdutoAlterado . " \n";
