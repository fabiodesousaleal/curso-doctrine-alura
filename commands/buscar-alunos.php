<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__.'/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();
$alunoRepository = $entityManager->getRepository(Aluno::class);
/**
 * @var Aluno[] $alunoList
 */

/* busca todos os alunos*/
$alunoList = $alunoRepository->findAll();
foreach ($alunoList as $aluno){
    echo PHP_EOL."ID: {$aluno->getId()} - {$aluno->getNome()} ";
}


/* busca um aluno especifico
$Fabio = $alunoRepository->find(2);
echo $Fabio->getNome();

*/
/*$aluno = $alunoRepository->findOneBy([
   'nome'=>"Fabio Leal"
]);
var_dump($aluno);*/




