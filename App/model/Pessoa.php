<?php
namespace App\model;

use \Doctrine\ORM\Mapping\Table;
use \Doctrine\ORM\Mapping\Entity;
use \Doctrine\ORM\Mapping\Id;
use \Doctrine\ORM\Mapping\Column;
use \Doctrine\ORM\Mapping\GeneratedValue;
/**
 * @Entity @Table(name="pessoas")
 */
class Pessoa
{

    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    protected $id;

    /**
     * @Column(type="string")
     */
    protected $nome;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }



}