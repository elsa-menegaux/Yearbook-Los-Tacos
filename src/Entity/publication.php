<?php

/**Publication :
 
    id (int) : identifiant unique.
    title (string) : titre.
    content (text) : contenu.
    author (string) : auteur.
    image (string) : chemin ou nom de fichier de l'illustration.
    tags (array) : tableau de tags ou catégories associés.
    date (datetime) : date de publication.
    readingTime (int) : temps de lecture estimé.
    relatedArticles (array) : tableau d'articles liés.
    type (string) : indique s'il s'agit d'un récit, projet ou event. */



namespace App\Entity;

    class Publication
    {
        private $id;
        private $title;
        private $subtitle;
        private $content;
        private $author;
        private $image;
        private $tags;
        private $date;
        private $readingTime;
        private $relatedArticles;
        private $type;
    
        public function getId(): ?int
        {
            return $this->id;
        }
    
        public function getTitle(): ?string
        {
            return $this->title;
        }
    
        public function setTitle(string $title): void
        {
            $this->title = $title;
        }
    
        public function getContent(): ?string
        {
            return $this->content;
        }
    
        public function setContent(string $content): void
        {
            $this->content = $content;
        }
    
        public function getAuthor(): ?string
        {
            return $this->author;
        }
    
        public function setAuthor(string $author): void
        {
            $this->author = $author;
        }
    
        public function getImage(): ?string
        {
            return $this->image;
        }
    
        public function setImage(string $image): void
        {
            $this->image = $image;
        }
    
        public function getTags(): ?array
        {
            return $this->tags;
        }
    
        public function setTags(array $tags): void
        {
            $this->tags = $tags;
        }
    
        public function getDate(): ?\DateTimeInterface
        {
            return $this->date;
        }
    
        public function setDate(\DateTimeInterface $date): void
        {
            $this->date = $date;
        }
    
        public function getReadingTime(): ?int
        {
            return $this->readingTime;
        }
    
        public function setReadingTime(int $readingTime): void
        {
            $this->readingTime = $readingTime;
        }
    
        public function getRelatedArticles(): ?array
        {
            return $this->relatedArticles;
        }
    
        public function setRelatedArticles(array $relatedArticles): void
        {
            $this->relatedArticles = $relatedArticles;
        }
    
        public function getType(): ?string
        {
            return $this->type;
        }
    
        public function setType(string $type): void
        {
            $this->type = $type;
        }
    }
    