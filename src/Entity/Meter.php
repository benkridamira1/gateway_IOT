<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

use App\Repository\MeterRepository;
use Doctrine\ORM\Mapping as ORM;



/**
 * @ORM\Entity(repositoryClass=MeterRepository::class)
 * @ApiResource(attributes={
 *     "normalization_context"={"groups"={"meter"}},
 *     "denormalization_context"={"groups"={"meter"}}
 * })

 *  */

class Meter
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer",unique=true)
     * @Groups({"meter"})
     */
    private $node_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $serial_number;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $manufacturer;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $method;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $port;

    /**
     * @ORM\Column(type="integer")
     */
    private $baudrate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $token;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNodeId(): ?int
    {
        return $this->node_id;
    }

    public function setNodeId(int $node_id): self
    {
        $this->node_id = $node_id;

        return $this;
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

    public function getSerialNumber(): ?string
    {
        return $this->serial_number;
    }

    public function setSerialNumber(string $serial_number): self
    {
        $this->serial_number = $serial_number;

        return $this;
    }

    public function getManufacturer(): ?string
    {
        return $this->manufacturer;
    }

    public function setManufacturer(string $manufacturer): self
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    public function getMethod(): ?string
    {
        return $this->method;
    }

    public function setMethod(string $method): self
    {
        $this->method = $method;

        return $this;
    }

    public function getPort(): ?string
    {
        return $this->port;
    }

    public function setPort(string $port): self
    {
        $this->port = $port;

        return $this;
    }

    public function getBaudrate(): ?int
    {
        return $this->baudrate;
    }

    public function setBaudrate(int $baudrate): self
    {
        $this->baudrate = $baudrate;

        return $this;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }
}
