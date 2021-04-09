<?php
use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Entity\Telefone;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$aluno = new Aluno();
/* Usando variavel $argv para inserir aluno na linha de comando. ex. php criar-aluno 'Fabio Leal' */
$aluno->setNome($argv[1]);
/* */
for($i=2; $i < $argc; $i++){
    $numeroTelefone = $argv[$i];
    $telefone = new Telefone();
    $telefone->setNumero($numeroTelefone);

   /*
   $entityManager->persist($telefone);
   outra forma de persistir é atribuindo a anotation no
   atributo telefone da classe Aluno  cascade=("persist", "remove")
   */

    $aluno->addTelefones($telefone);
}


$entityManager->persist($aluno);

$entityManager->flush();