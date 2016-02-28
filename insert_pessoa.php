<?php
/**
 * Created by PhpStorm.
 * User: william
 * Date: 27/02/16
 * Time: 00:52
 */


use App\model\Pessoa;

require_once 'bootstrap.php';


$pessoa = new Pessoa();
$pessoa->setNome($argv[1]);// pega o argumento passado no terminal para setar o nome da pessoa

$entityManager->persist($pessoa); // persist o objeto no manager
$entityManager->flush(); //efetua execucao

echo "Pessoa Criada Cuja Seu ID é o Numero " . $pessoa->getId() . "\n";