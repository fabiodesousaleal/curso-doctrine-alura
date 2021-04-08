<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__.'/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();
$alunoRepository = $entityManager->getRepository(Aluno::class);

$id = $argv[1];
/* remove aluno, nessa forma o doctrine precisa fazer no proprio banco a query para
localizar o objeto a ser removido, fazendo o uso de 2 querys " */
$aluno = $entityManager->find(Aluno::class, $id);

/* remove aluno, com base na referencia do entityManager, uma vez que, a Class já é persistida pelo doctrine.

$aluno = $entityManager->getReference(Aluno::class, $id);

*/


$entityManager->remove($aluno);
$entityManager->flush();