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
$alunoList = $alunoRepository->findAll();
foreach ($alunoList as $aluno){
    echo PHP_EOL."ID: {$aluno->getId()} - {$aluno->getNome()} ";
}


