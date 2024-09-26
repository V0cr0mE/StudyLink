<?php

namespace App\Entity;

use App\Repository\PostRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PostRepository::class)]
class Post
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

<<<<<<< HEAD
=======
<<<<<<< HEAD
    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $content = null;

    #[ORM\Column]
    private ?int $picture = null;

=======
>>>>>>> nouveau_dépard
    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $title = null;

    #[ORM\Column(nullable: true)]
<<<<<<< HEAD
    private ?string $picture = null; 
=======
    private ?int $picture = null;
>>>>>>> nouveau_dépard

    #[ORM\Column(nullable: true)]
    private ?int $likes_count = null;

<<<<<<< HEAD
    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    private ?\DateTimeImmutable $updated_at = null;

=======
>>>>>>> 14cc1787d0d93622152c2e4e0fdfd2e3ba306e25
    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $updated_at = null;

<<<<<<< HEAD
    #[ORM\ManyToOne(inversedBy: 'posts')]
    #[ORM\JoinColumn(nullable: false)]
    private ?user $user_id = null;

=======
>>>>>>> 14cc1787d0d93622152c2e4e0fdfd2e3ba306e25
>>>>>>> nouveau_dépard
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

<<<<<<< HEAD
    public function setTitle(?string $title): static
    {
        $this->title = $title;
        return $this;
    }

    public function getPicture(): ?string
=======
<<<<<<< HEAD
    public function setTitle(string $title): static
=======
    public function setTitle(?string $title): static
>>>>>>> 14cc1787d0d93622152c2e4e0fdfd2e3ba306e25
    {
        $this->title = $title;

        return $this;
    }

<<<<<<< HEAD
    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): static
    {
        $this->content = $content;

        return $this;
    }

=======
>>>>>>> 14cc1787d0d93622152c2e4e0fdfd2e3ba306e25
    public function getPicture(): ?int
>>>>>>> nouveau_dépard
    {
        return $this->picture;
    }

<<<<<<< HEAD
    public function setPicture(?string $picture): static
    {
        $this->picture = $picture;
        return $this;
    }

=======
<<<<<<< HEAD
    public function setPicture(int $picture): static
=======
    public function setPicture(?int $picture): static
>>>>>>> 14cc1787d0d93622152c2e4e0fdfd2e3ba306e25
    {
        $this->picture = $picture;

        return $this;
    }

<<<<<<< HEAD
=======
>>>>>>> nouveau_dépard
    public function getLikesCount(): ?int
    {
        return $this->likes_count;
    }

    public function setLikesCount(?int $likes_count): static
    {
        $this->likes_count = $likes_count;
<<<<<<< HEAD
        return $this;
    }

=======

        return $this;
    }

>>>>>>> 14cc1787d0d93622152c2e4e0fdfd2e3ba306e25
>>>>>>> nouveau_dépard
    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): static
    {
        $this->created_at = $created_at;
<<<<<<< HEAD
=======

>>>>>>> nouveau_dépard
        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTimeImmutable $updated_at): static
    {
        $this->updated_at = $updated_at;
<<<<<<< HEAD
        return $this;
    }
=======

        return $this;
    }
<<<<<<< HEAD

    public function getUserId(): ?user
    {
        return $this->user_id;
    }

    public function setUserId(?user $user_id): static
    {
        $this->user_id = $user_id;

        return $this;
    }
=======
>>>>>>> 14cc1787d0d93622152c2e4e0fdfd2e3ba306e25
>>>>>>> nouveau_dépard
}
