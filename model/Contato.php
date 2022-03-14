<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\PostLoad;

/**
 * @ORM\Entity
 * @ORM\Table(name="contato")
 */
class Contato
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /**
     * @ORM\Column(type="boolean")
     */
    protected $tipo;
    /**
     * 
     * @ORM\Column(type="string")
     */
    protected $descricao;

    /** 
     * @ORM\OneToOne(targetEntity="Pessoa")
     * @ORM\Column(type="integer") 
     */
    protected $user;

     function getId(){
         return $this->id;
     }

     function getTipo(){
        return $this->tipo;
     }

     function setTipo($tipo){
        $this->tipo = $tipo;
     }

     function getDescricao(){
         return $this->descricao;
     }

     function setDescricao($descricao){
         $this->descricao = $descricao;
     }

     function getUserId() {
         return $this->user;
     }

     function setUser($user) {
        $this->user = $user;
     }

     function inserirContato($tipo,$descricao,$user) {
        require_once __DIR__."/../test.php";
        
        $c = new Contato();
        $c->setTipo($tipo);
        $c->setDescricao($descricao);
        $c->setUser($user);

        $entityManager->persist($c);
        $entityManager->flush();
    }

    function getContatos($entityManager) {

        $contatoRepository = $entityManager->getRepository('Contato');
        $contatos = $contatoRepository->findAll();
        return $contatos;
    }
}
?>