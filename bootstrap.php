<?php
/**
 * Created by PhpStorm.
 * User: william
 * Date: 27/02/16
 * Time: 00:06
 */

require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = [__DIR__."/App/model/"]; // local onde ficara os models
$isDevMode = true; // flag de verificacao se esta no modo dev

$dbParams = [ // configuracoes de acesso ao banco de dados
  'driver' => 'pdo_mysql',
    'user' => 'root',
    'password' => '68920164',
    'dbname' => 'mydatabase',
    'charset' => 'UTF8'
];

$config = Setup::createAnnotationMetadataConfiguration($paths,$isDevMode); // passando parametros para validacao de dados no formato de annotations
$entityManager = EntityManager::create($dbParams,$config); // agora é criado a entity manager que nada mais é um gerenciador de entidades, para ser mais claro gerenciador de models