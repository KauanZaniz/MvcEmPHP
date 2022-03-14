<?php
    require_once __DIR__."/../test.php";
    require_once __DIR__."/../model/Pessoa.php";
    require_once __DIR__."/../model/Contato.php";
    $p = new Pessoa();
    $c = new Contato();

    $em = $entityManager;

//CADASTRA PESSOA
        if(!empty($_POST['nome']) && !empty($_POST['cpf'])) {
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];

            $p->inserirPessoa($nome,$cpf);
            header("Location: ../view/");
        }

            
        
//----------------------------------------------

//CADASTRA CONTATO
        if(!empty($_POST['tipo']) && $_POST['tipo'] == 'email') {
            $email = true;
            $descricao1 = $_POST['descricao'];
            $idpessoa1 = $_POST['idpessoa'];
            $c->inserirContato($email,$descricao1,$idpessoa1);
            header("Location: ../view/");
        }

        if(!empty($_POST['tipo']) && $_POST['tipo'] == 'numero') {
            $numero = false;
            $descricao2 = $_POST['descricao'];
            $idpessoa2 = $_POST['idpessoa'];
            $c->inserirContato($numero,$descricao2,$idpessoa2);
            header("Location: ../view/");
        }

        function listarTodasPessoas() {
            require_once __DIR__."/../view/viewPessoa.php";
            global $em;
            global $p;
            $pessoas = $p->getPessoas($em);
            return listarPessoas($pessoas);
        }

        function listarTodosContatos() {
            require_once __DIR__."/../view/viewContato.php";
            global $em;
            global $c;
            $contatos = $c->getContatos($em);
            return listarContatos($contatos);
        }

?>