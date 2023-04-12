<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;
use ApiPlatform\Metadata\ApiResource;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

#[ApiResource]
#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity(fields: ['Mail_user'], message: 'There is already an account with this Mail_user')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $Mail_user = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom_user = null;

    #[ORM\Column(length: 255)]
    private ?string $Prenom_user = null;

    #[ORM\Column(length: 255)]
    private ?string $pseudo_user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMailUser(): ?string
    {
        return $this->Mail_user;
    }

    public function setMailUser(string $Mail_user): self
    {
        $this->Mail_user = $Mail_user;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->Mail_user;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getNomUser(): ?string
    {
        return $this->Nom_user;
    }

    public function setNomUser(string $Nom_user): self
    {
        $this->Nom_user = $Nom_user;

        return $this;
    }

    public function getPrenomUser(): ?string
    {
        return $this->Prenom_user;
    }

    public function setPrenomUser(string $Prenom_user): self
    {
        $this->Prenom_user = $Prenom_user;

        return $this;
    }

    public function getPseudoUser(): ?string
    {
        return $this->pseudo_user;
    }

    public function setPseudoUser(string $pseudo_user): self
    {
        $this->pseudo_user = $pseudo_user;

        return $this;
    }
}
