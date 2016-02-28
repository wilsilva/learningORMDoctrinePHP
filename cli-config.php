<?php
/**
 * Created by PhpStorm.
 * User: william
 * Date: 27/02/16
 * Time: 00:23
 */
use Doctrine\ORM\Tools\Console\ConsoleRunner;

require_once 'bootstrap.php';

return ConsoleRunner::createHelperSet($entityManager);