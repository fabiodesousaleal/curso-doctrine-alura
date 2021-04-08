<?php


namespace Alura\Doctrine\Helper;


use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Setup;

class EntityManagerFactory
{
    /**
     * @return EntityManagerInterface
     * @throws \Doctrine\ORM\ORMException
     */
    public function getEntityManager(): EntityManagerInterface
    {
        $rootDir = __DIR__.'/../..';
        $config = Setup::createAnnotationMetadataConfiguration([$rootDir.'/src'], true);
        $connection =[
            'driver'=>'pdo_sqlite',
            'patch'=>$rootDir.'/var/data/banco.sqlite3'
        ];

        return EntityManager::create($connection, $config);
    }
}