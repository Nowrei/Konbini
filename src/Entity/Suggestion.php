<?php

namespace App\Entity;

use App\Repository\SuggestionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SuggestionRepository::class)]
class Suggestion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre_suggestion = null;

    #[ORM\Column(length: 2000)]
    private ?string $contenue_suggestion = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $source_suggestion = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $id_user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitreSuggestion(): ?string
    {
        return $this->titre_suggestion;
    }

    public function setTitreSuggestion(string $titre_suggestion): self
    {
        $this->titre_suggestion = $titre_suggestion;

        return $this;
    }

    public function getContenueSuggestion(): ?string
    {
        return $this->contenue_suggestion;
    }

    public function setContenueSuggestion(string $contenue_suggestion): self
    {
        $this->contenue_suggestion = $contenue_suggestion;

        return $this;
    }

    public function getSourceSuggestion(): ?string
    {
        return $this->source_suggestion;
    }

    public function setSourceSuggestion(?string $source_suggestion): self
    {
        $this->source_suggestion = $source_suggestion;

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
}
