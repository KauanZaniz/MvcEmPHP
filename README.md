# MvcEmPHP
Um projeto web feito em PHP, utilizando padrão MVC e ORM Doctrine.

# Instalação 
  
**Requerimentos**
* XAMPP
* Composer

## Instalando o XAMPP
XAMPP é um pacote que contém MySQL e Apache, necessário para o PHP.
1. Baixe o XAMPP neste link <https://www.apachefriends.org/pt_br/download.html> e instale
2. Abra o painel do XAMPP e clique em "start" no Apache e no MySQL

## Clonando o Projeto
Após a instalação completa do XAMPP, clone o projeto e extraia para o diretório "C:\xampp\htdocs\MvcEmPHP-main"

## Instalando o Composer
Composer é um gerenciador de dependências PHP.
Baixe e instale o [Composer-Setup.exe](https://getcomposer.org/Composer-Setup.exe);

## Instalando Dependências do PHP com Composer
No diretório "C:\xampp\htdocs\MvcEmPHP-main", execute o comando `composer install`

## Configurando MySQL
1. No painel do XAMPP, clique em "Admin" no campo do MySQL
2. Após abrir o site do PHPMyAdmin, crie uma database chamada "test"
3. Clique na database criada e clique na opção "importar" localizada na parte superior do site
4. Clique em "escolher arquivo" e selecione o arquivo "C:\xampp\htdocs\MvcEmPHP-main\testemagazord.sql"
5. Mais abaixo, clique em "Executar"

## Acessando o site
Entre na URL <http://localhost/MvcEmPHP-main/view/>
