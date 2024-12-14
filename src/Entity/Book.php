<?php

namespace App\Entity;

use App\Repository\BookRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: BookRepository::class)]
class Book
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: "The title is required.")]
    #[Assert\Length(min: 5, max: 255, minMessage: "The title must be at least {{ limit }} characters long.", maxMessage: "The title cannot be longer than {{ limit }} characters.")]
    private $title;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: "The author is required.")]
    private $author;

    #[ORM\Column(type: 'integer')]
    #[Assert\NotBlank(message: "The publication year is required.")]
    #[Assert\Range(min: 1000, max: 2025, notInRangeMessage: "Please enter a publication year between {{ min }} and {{ max }}.")]
    private $publicationYear;

    #[ORM\Column(type: 'string', length: 20)]
    #[Assert\NotBlank(message: "The ISBN is required.")]
    #[Assert\Length(min: 10, max: 20, minMessage: "The ISBN must be at least {{ limit }} characters long.", maxMessage: "The ISBN cannot be longer than {{ limit }} characters.")]
    private $isbn;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function getPublicationYear(): ?int
    {
        return $this->publicationYear;
    }

    public function getIsbn(): ?string
    {
        return $this->isbn;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function setPublicationYear(int $publicationYear): self
    {
        $this->publicationYear = $publicationYear;

        return $this;
    }

    public function setIsbn(string $isbn): self
    {
        $this->isbn = $isbn;

        return $this;
    }
}
