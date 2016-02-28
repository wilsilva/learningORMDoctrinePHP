<?php
/**
 * Created by PhpStorm.
 * User: william
 * Date: 27/02/16
 * Time: 20:57
 */

require_once 'bootstrap.php';

use App\model\Produto;

$repository = $entityManager->getRepository(Produto::class);
$produtos = $repository->findAll();

foreach($produtos as $produto){
    echo $produto->getNome() . "\n";
    echo $produto->getCategoria()->getNome() . "\n ---------------------- \n";
}