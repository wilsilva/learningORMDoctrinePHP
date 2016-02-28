<?php
/**
 * Created by PhpStorm.
 * User: william
 * Date: 27/02/16
 * Time: 01:04
 */
require_once 'bootstrap.php';


$pessoaRepository =  $entityManager->getRepository(Pessoa::class);
$pessoas = $pessoaRepository->findAll();

foreach($pessoas as $pessoa){
    echo "ID: " . $pessoa->getId() . " Nome: " . $pessoa->getNome() . "\n";
}