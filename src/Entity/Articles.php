<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ArticlesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
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
}
