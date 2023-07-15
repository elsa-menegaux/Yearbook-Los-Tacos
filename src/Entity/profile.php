<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Profile
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="text")
     */
    private $biography;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $profilePicture;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $links;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tags;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Article", mappedBy="author")
     */
    private $articles;

    // Constructor
    public function __construct()
    {
        $this->articles = new ArrayCollection();
    }

    // Getters and setters for the properties
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getBiography(): ?string
    {
        return $this->biography;
    }

    public function setBiography(?string $biography): self
    {
        $this->biography = $biography;

        return $this;
    }

    public function getProfilePicture(): ?string
    {
        return $this->profilePicture;
    }

    public function setProfilePicture(?string $profilePicture): self
    {
        $this->profilePicture = $profilePicture;

        return $this;
    }

    public function getLinks(): ?string
    {
        return $this->links;
    }

    public function setLinks(?string $links): self
    {
        $this->links = $links;

        return $this;
    }

    public function getTags(): ?string
    {
        return $this->tags;
    }

    public function setTags(?string $tags): self
    {
        $this->tags = $tags;

        return $this;
    }

    public function getArticles(): ?ArrayCollection
    {
        return $this->articles;
    }

    public function setArticles(?ArrayCollection $articles): self
    {
        $this->articles = $articles;

        return $this;
    }
}
?>