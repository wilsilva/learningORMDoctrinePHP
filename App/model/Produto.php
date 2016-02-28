<?php
namespace App\model;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\Table;

/**
 * Produto
 *
 * @Entity
 * @Table(name="produtos")
 */
class Produto
{
    /**
     * @Id
     * @Column(type="integer", name="idProduto")
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @Column(type="string", name="nomeProduto")
     */
    protected $nome;

    /**
     * Setando a entidade a ser relacionada
     * @ManyToOne(targetEntity="App\model\Categoria")
     *
     * referenciando a chave estrageira com a tabela destinataria onde name é a chave estrangeira e
     * referencedColumnName é a primary key da tabela destinataria
     * @JoinColumn(name="idCategoria", referencedColumnName="idCategoria")
     *
     */
    protected $categoria;

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }
}