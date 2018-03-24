<?php

namespace App\Repository;

use App\Entity\Lotto;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Lotto|null find($id, $lockMode = null, $lockVersion = null)
 * @method Lotto|null findOneBy(array $criteria, array $orderBy = null)
 * @method Lotto[]    findAll()
 * @method Lotto[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LottoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Lotto::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('l')
            ->where('l.something = :value')->setParameter('value', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
