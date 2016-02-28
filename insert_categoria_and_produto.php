<?php
/**
 * Created by PhpStorm.
 * User: william
 * Date: 27/02/16
 * Time: 11:15
 */

use App\model\Categoria;
use App\model\Produto;

require_once 'bootstrap.php';


$categoria = new Categoria(); //criando uma categoria cuja o nome e passado via parametro no terminal
$categoria->setNome($argv[1]);

$produto = new Produto(); // criando um produto cuja o nome e passado via parametro no terminal
$produto->setNome($argv[2]);
$produto->setCategoria($categoria); // seto a categoria pertensente ao produto


/**
 * persistencia dos dados
 */
$entityManager->persist($categoria);
$entityManager->persist($produto);
$entityManager->flush();

