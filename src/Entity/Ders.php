<?php

namespace App\Entity;

use App\Repository\DersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DersRepository::class)
 */
class Ders
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
    private $dersAdi;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dersKodu;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dersAciklamasi;

    /**
     * @ORM\ManyToOne(targetEntity=Akademisyen::class, inversedBy="ders_adi")
     * @ORM\JoinColumn(nullable=false)
     */
    private $akademisyen;

    /**
     * @ORM\ManyToMany(targetEntity=Ogrenci::class, mappedBy="alinanders")
     */
    private $alanlar;

    public function __construct()
    {
        $this->alanlar = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDersAdi(): ?string
    {
        return $this->dersAdi;
    }

    public function setDersAdi(string $dersAdi): self
    {
        $this->dersAdi = $dersAdi;

        return $this;
    }

    public function getDersKodu(): ?string
    {
        return $this->dersKodu;
    }

    public function setDersKodu(string $dersKodu): self
    {
        $this->dersKodu = $dersKodu;

        return $this;
    }

    public function getDersAciklamasi(): ?string
    {
        return $this->dersAciklamasi;
    }

    public function setDersAciklamasi(string $dersAciklamasi): self
    {
        $this->dersAciklamasi = $dersAciklamasi;

        return $this;
    }

    public function getAkademisyen(): ?Akademisyen
    {
        return $this->akademisyen;
    }

    public function setAkademisyen(?Akademisyen $akademisyen): self
    {
        $this->akademisyen = $akademisyen;

        return $this;
    }

    /**
     * @return Collection|Ogrenci[]
     */
    public function getAlanlar(): Collection
    {
        return $this->alanlar;
    }

    public function addAlanlar(Ogrenci $alanlar): self
    {
        if (!$this->alanlar->contains($alanlar)) {
            $this->alanlar[] = $alanlar;
            $alanlar->addAlinander($this);
        }

        return $this;
    }

    public function removeAlanlar(Ogrenci $alanlar): self
    {
        if ($this->alanlar->removeElement($alanlar)) {
            $alanlar->removeAlinander($this);
        }

        return $this;
    }
}
