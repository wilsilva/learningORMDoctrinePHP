<?php
/**
 * Created by PhpStorm.
 * User: william
 * Date: 27/02/16
 * Time: 21:08
 */

use App\model\Categoria;
use App\model\Produto;

require_once 'bootstrap.php';

$produto = $entityManager->find(Produto::class,$argv[1]);
$categoria = $entityManager->find(Categoria::class,$produto->getCategoria()->getId());

$entityManager->remove($produto);
$entityManager->remove($categoria);
$entityManager->flush();
