<?php
use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__.'/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();
$alunoRepository = $entityManager->getRepository(Aluno::class);

$id = $argv[1]; /* argumento 1 passado na linha de comando */
$novoNome=$argv[2]; /*a argumento 2 passado na linha de comando */
/* busca padrão */
$aluno = $alunoRepository->find($id);
/* pode-se upsar o entityManager quando for buscar somente em uma classe
$aluno=$entityManager->find(Aluno::class, $id);
*/
$aluno->setNome($novoNome);
$entityManager->flush();