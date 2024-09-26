<?php

namespace App\Repository;

<<<<<<< HEAD
use App\Entity\Post;
=======
<<<<<<<< HEAD:src/Repository/CommentRepository.php
use App\Entity\Comment;
========
use App\Entity\Post;
>>>>>>>> nouveau_dépard:src/Repository/PostRepository.php
>>>>>>> nouveau_dépard
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
<<<<<<< HEAD
=======
<<<<<<<< HEAD:src/Repository/CommentRepository.php
 * @extends ServiceEntityRepository<Comment>
 */
class CommentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Comment::class);
    }

    //    /**
    //     * @return Comment[] Returns an array of Comment objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('c.id', 'ASC')
========
>>>>>>> nouveau_dépard
 * @extends ServiceEntityRepository<Post>
 */
class PostRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Post::class);
    }

    //    /**
    //     * @return Post[] Returns an array of Post objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('p.id', 'ASC')
<<<<<<< HEAD
=======
>>>>>>>> nouveau_dépard:src/Repository/PostRepository.php
>>>>>>> nouveau_dépard
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

<<<<<<< HEAD
=======
<<<<<<<< HEAD:src/Repository/CommentRepository.php
    //    public function findOneBySomeField($value): ?Comment
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
========
>>>>>>> nouveau_dépard
    //    public function findOneBySomeField($value): ?Post
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
<<<<<<< HEAD
=======
>>>>>>>> nouveau_dépard:src/Repository/PostRepository.php
>>>>>>> nouveau_dépard
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
<<<<<<< HEAD
    /**
     * @return Post[] Returns an array of Post objects
     */
    public function findAllPosts(): array
    {
        return $this->findAll(); // Récupère tous les posts
    }
=======
>>>>>>> nouveau_dépard
}
