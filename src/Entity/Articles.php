<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ArticlesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(
 *  collectionOperations={
 *      "get"={},
 *      "post"={},
 *  },
 *  itemOperations={
 *      "get"={},
 *      "put"={},
 *  }
 * )
 * @ORM\Entity(repositoryClass=ArticlesRepository::class)
 */
class Articles
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name_chapter;

    /**
     * @ORM\Column(type="text")
     */
    private $content_chapter;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title_chapter;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $textButton_chapter;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameChapter(): ?string
    {
        return $this->name_chapter;
    }

    public function setNameChapter(string $name_chapter): self
    {
        $this->name_chapter = $name_chapter;

        return $this;
    }

    public function getContentChapter(): ?string
    {
        return $this->content_chapter;
    }

    public function setContentChapter(string $content_chapter): self
    {
        $this->content_chapter = $content_chapter;

        return $this;
    }

    public function getTitleChapter(): ?string
    {
        return $this->title_chapter;
    }

    public function setTitleChapter(string $title_chapter): self
    {
        $this->title_chapter = $title_chapter;

        return $this;
    }

    public function getTextButtonChapter(): ?string
    {
        return $this->textButton_chapter;
    }

    public function setTextButtonChapter(string $textButton_chapter): self
    {
        $this->textButton_chapter = $textButton_chapter;

        return $this;
    }
}
