<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\PostLoad;

/**
 * @ORM\Entity
 * @ORM\Table(name="pessoa")
 */
class Pessoa
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /**
     * @ORM\Column(type="string")
     */
    protected $name;
    /**
     * 
     * @ORM\Column(type="string", length=11)
     */
    protected $cpf;

     function getId(){
         return $this->id;
     }

     function getCpf(){
        return $this->cpf;
     }

     function setCpf($cpf){
        $this->cpf = $cpf;
     }

     function getName(){
         return $this->name;
     }

     function setName($name){
         $this->name = $name;
     }

     
    function inserirPessoa($setnome,$setcpf,$entityManager) {
        
        $p = new Pessoa();
        $p->setName($setnome);
        $p->setCpf($setcpf);

        $entityManager->persist($p);
        $entityManager->flush();
    }

    function getPessoas($em) {
        

        $pessoaRepository = $em->getRepository('Pessoa');
        $pessoas = $pessoaRepository->findAll();
        return $pessoas;
    }
}




