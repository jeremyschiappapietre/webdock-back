<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ResponsesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(
 *  collectionOperations={
 *      "get"={},
 *  },
 *  itemOperations={
 *      "get"={},
 *      "put"={},
 *  }
 * )
 * @ORM\Entity(repositoryClass=ResponsesRepository::class)
 */
class Responses
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
    private $response_1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $response_2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $response_3;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $response_4;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getResponse1(): ?string
    {
        return $this->response_1;
    }

    public function setResponse1(string $response_1): self
    {
        $this->response_1 = $response_1;

        return $this;
    }

    public function getResponse2(): ?string
    {
        return $this->response_2;
    }

    public function setResponse2(string $response_2): self
    {
        $this->response_2 = $response_2;

        return $this;
    }

    public function getResponse3(): ?string
    {
        return $this->response_3;
    }

    public function setResponse3(string $response_3): self
    {
        $this->response_3 = $response_3;

        return $this;
    }

    public function getResponse4(): ?string
    {
        return $this->response_4;
    }

    public function setResponse4(string $response_4): self
    {
        $this->response_4 = $response_4;

        return $this;
    }
}
