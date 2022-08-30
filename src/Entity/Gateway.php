<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\GatewayRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GatewayRepository::class)
 */
class Gateway
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string")
     */
    private $asset_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $location;

    /**
     * @ORM\Column(type="integer")
     */
    private $pulling_period;

    /**
     * @ORM\Column(type="integer")
     */
    private $pushing_period;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $host;

    /**
     * @ORM\Column(type="integer")
     */
    private $port;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="integer")
     */
    private $use_tls;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $topic;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $log_file;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $backup_file;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $hw_model;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sw_version;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $serial_number;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $board_serial_number;





    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getPullingPeriod(): ?int
    {
        return $this->pulling_period;
    }

    public function setPullingPeriod(int $pulling_period): self
    {
        $this->pulling_period = $pulling_period;

        return $this;
    }

    public function getPushingPeriod(): ?int
    {
        return $this->pushing_period;
    }

    public function setPushingPeriod(int $pushing_period): self
    {
        $this->pushing_period = $pushing_period;

        return $this;
    }

    public function getHost(): ?string
    {
        return $this->host;
    }

    public function setHost(string $host): self
    {
        $this->host = $host;

        return $this;
    }

    public function getPort(): ?int
    {
        return $this->port;
    }

    public function setPort(int $port): self
    {
        $this->port = $port;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getUseTls(): ?int
    {
        return $this->use_tls;
    }

    public function setUseTls(int $use_tls): self
    {
        $this->use_tls = $use_tls;

        return $this;
    }

    public function getTopic(): ?string
    {
        return $this->topic;
    }

    public function setTopic(string $topic): self
    {
        $this->topic = $topic;

        return $this;
    }

    public function getLogFile(): ?string
    {
        return $this->log_file;
    }

    public function setLogFile(string $log_file): self
    {
        $this->log_file = $log_file;

        return $this;
    }

    public function getBackupFile(): ?string
    {
        return $this->backup_file;
    }

    public function setBackupFile(string $backup_file): self
    {
        $this->backup_file = $backup_file;

        return $this;
    }

    public function getHwModel(): ?string
    {
        return $this->hw_model;
    }

    public function setHwModel(string $hw_model): self
    {
        $this->hw_model = $hw_model;

        return $this;
    }

    public function getSwVersion(): ?string
    {
        return $this->sw_version;
    }

    public function setSwVersion(string $sw_version): self
    {
        $this->sw_version = $sw_version;

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

    public function getBoardSerialNumber(): ?string
    {
        return $this->board_serial_number;
    }

    public function setBoardSerialNumber(string $board_serial_number): self
    {
        $this->board_serial_number = $board_serial_number;

        return $this;
    }

    public function getAssetId(): ?string
    {
        return $this->asset_id;
    }

    public function setAssetId(string $asset_id): self
    {
        $this->asset_id = $asset_id;

        return $this;
    }
}
