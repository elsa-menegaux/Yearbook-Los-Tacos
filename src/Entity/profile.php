<?php

/**Profile :
    id (int) : identifiant unique du profil.
    name (string) : nom du profil.
    tag (string) : tag ou catégorie associé au profil (alumni, intervenant, ...).
    bio (text) : biographie ou description du profil.
    picture (string) : chemin ou nom de fichier de la photo du profil.
    relatedArticles (array) : tableau d'articles liés au profil.
    links (array) : tableau de liens ou références associés au profil. */



    namespace App\Entity;

    use Doctrine\ORM\Mapping as ORM;
    
    /**
     * @ORM\Entity
     * @ORM\Table(name="profile")
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
         * @ORM\Column(type="string", length=255)
         */
        private $tag;
    
        /**
         * @ORM\Column(type="text")
         */
        private $bio;
    
        /**
         * @ORM\Column(type="string", length=255, nullable=true)
         */
        private $picture;
    
        /**
         * @ORM\Column(type="array")
         */
        private $relatedArticles;
    
        /**
         * @ORM\Column(type="array")
         */
        private $links;
    
        
    
        public function getId(): ?int
        {
            return $this->id;
        }
    
        public function getName(): ?string
        {
            return $this->name;
        }
    
        public function setName(string $name): self
        {
            $this->name = $name;
    
            return $this;
        }
    
        public function getTag(): ?string
        {
            return $this->tag;
        }
    
        public function setTag(string $tag): self
        {
            $this->tag = $tag;
    
            return $this;
        }
    
        public function getBio(): ?string
        {
            return $this->bio;
        }
    
        public function setBio(string $bio): self
        {
            $this->bio = $bio;
    
            return $this;
        }
    
        public function getPicture(): ?string
        {
            return $this->picture;
        }
    
        public function setPicture(string $picture): self
        {
            $this->picture = $picture;
    
            return $this;
        }
    
        public function getRelatedArticles(): ?array
        {
            return $this->relatedArticles;
        }
    
        public function setRelatedArticles(array $relatedArticles): self
        {
            $this->relatedArticles = $relatedArticles;
    
            return $this;
        }
    
        public function getLinks(): ?array
        {
            return $this->links;
        }
    
        public function setLinks(array $links): self
        {
            $this->links = $links;
    
            return $this;
        }
    }
    