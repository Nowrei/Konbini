<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
class Article
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre_article = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sous_titre_article = null;

    #[ORM\Column(length: 255)]
    private ?string $image_article = null;

    #[ORM\Column(length: 255)]
    private ?string $media_article = null;

    #[ORM\Column(length: 5000)]
    private ?string $desc_article = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date_article = null;

    #[ORM\Column(length: 10)]
    private ?string $validation_article = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $id_user = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Categorie $id_categorie = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitreArticle(): ?string
    {
        return $this->titre_article;
    }

    public function setTitreArticle(string $titre_article): self
    {
        $this->titre_article = $titre_article;

        return $this;
    }

    public function getSousTitreArticle(): ?string
    {
        return $this->sous_titre_article;
    }

    public function setSousTitreArticle(?string $sous_titre_article): self
    {
        $this->sous_titre_article = $sous_titre_article;

        return $this;
    }

    public function getImageArticle(): ?string
    {
        return $this->image_article;
    }

    public function setImageArticle(string $image_article): self
    {
        $this->image_article = $image_article;

        return $this;
    }

    public function getMediaArticle(): ?string
    {
        return $this->media_article;
    }

    public function setMediaArticle(string $media_article): self
    {
        $this->media_article = $media_article;

        return $this;
    }

    public function getDescArticle(): ?string
    {
        return $this->desc_article;
    }

    public function setDescArticle(string $desc_article): self
    {
        $this->desc_article = $desc_article;

        return $this;
    }

    public function getDateArticle(): ?\DateTimeInterface
    {
        return $this->date_article;
    }

    public function setDateArticle(\DateTimeInterface $date_article): self
    {
        $this->date_article = $date_article;

        return $this;
    }

    public function getValidationArticle(): ?string
    {
        return $this->validation_article;
    }

    public function setValidationArticle(string $validation_article): self
    {
        $this->validation_article = $validation_article;

        return $this;
    }

    public function getIdUser(): ?User
    {
        return $this->id_user;
    }

    public function setIdUser(?User $id_user): self
    {
        $this->id_user = $id_user;

        return $this;
    }

    public function getIdCategorie(): ?Categorie
    {
        return $this->id_categorie;
    }

    public function setIdCategorie(?Categorie $id_categorie): self
    {
        $this->id_categorie = $id_categorie;

        return $this;
    }
}
