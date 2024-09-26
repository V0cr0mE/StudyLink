<?php

namespace App\Entity;

use App\Repository\LikesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LikesRepository::class)]
class Likes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?post $post_id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?user $ussr_id = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getPostId(): ?post
    {
        return $this->post_id;
    }

    public function setPostId(?post $post_id): static
    {
        $this->post_id = $post_id;

        return $this;
    }

    public function getUssrId(): ?user
    {
        return $this->ussr_id;
    }

    public function setUssrId(?user $ussr_id): static
    {
        $this->ussr_id = $ussr_id;

        return $this;
    }
}
