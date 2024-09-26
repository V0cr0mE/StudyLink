<?php

namespace App\Entity;

use App\Repository\PostRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity(repositoryClass: PostRepository::class)]
class Post
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $title = null;

<<<<<<< Updated upstream
    #[ORM\Column(nullable: true)]
    private ?int $picture = null;
=======
    #[ORM\Column(type: Types::TEXT)]
    private ?string $content = null;

    // Ajout pour gérer le chemin de l'image
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $picture = null;

    // Utilisé pour l'upload du fichier
    #[Vich\UploadableField(mapping: 'post_images', fileNameProperty: 'picture')]
    private ?File $imageFile = null;
>>>>>>> Stashed changes

    #[ORM\Column(nullable: true)]
    private ?int $likes_count = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $updated_at = null;

<<<<<<< Updated upstream
=======
    #[ORM\ManyToOne(inversedBy: 'posts')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null; // Renommé en $user

    // Méthodes pour les champs
>>>>>>> Stashed changes
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): static
    {
        $this->title = $title;
        return $this;
    }

<<<<<<< Updated upstream
    public function getPicture(): ?int
=======
    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): static
    {
        $this->content = $content;
        return $this;
    }

    public function getPicture(): ?string
>>>>>>> Stashed changes
    {
        return $this->picture;
    }

<<<<<<< Updated upstream
    public function setPicture(?int $picture): static
=======
    public function setPicture(?string $picture): static
>>>>>>> Stashed changes
    {
        $this->picture = $picture;
        return $this;
    }

    public function getLikesCount(): ?int
    {
        return $this->likes_count;
    }

    public function setLikesCount(?int $likes_count): static
    {
        $this->likes_count = $likes_count;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): static
    {
        $this->created_at = $created_at;
        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTimeImmutable $updated_at): static
    {
        $this->updated_at = $updated_at;
        return $this;
    }
<<<<<<< Updated upstream
=======

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;
        return $this;
    }

    // Méthodes pour la gestion du fichier d'image
    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;

        if ($imageFile) {
            // Si un fichier a été uploadé, on met à jour la date
            $this->updated_at = new \DateTimeImmutable();
        }
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }
>>>>>>> Stashed changes
}
