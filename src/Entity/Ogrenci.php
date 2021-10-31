<?php

namespace App\Entity;

use App\Repository\OgrenciRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OgrenciRepository::class)
 */
class Ogrenci
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $ad;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $soyad;

    /**
     * @ORM\Column(type="integer")
     */
    private $ogrenciNo;

    /**
     * @ORM\ManyToMany(targetEntity=Ders::class, inversedBy="alanlar")
     */
    private $alinanders;

    public function __construct()
    {
        $this->alinanders = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAd(): ?string
    {
        return $this->ad;
    }

    public function setAd(string $ad): self
    {
        $this->ad = $ad;

        return $this;
    }

    public function getSoyad(): ?string
    {
        return $this->soyad;
    }

    public function setSoyad(string $soyad): self
    {
        $this->soyad = $soyad;

        return $this;
    }

    public function getOgrenciNo(): ?int
    {
        return $this->ogrenciNo;
    }

    public function setOgrenciNo(int $ogrenciNo): self
    {
        $this->ogrenciNo = $ogrenciNo;

        return $this;
    }

    /**
     * @return Collection|Ders[]
     */
    public function getAlinanders(): Collection
    {
        return $this->alinanders;
    }

    public function addAlinander(Ders $alinander): self
    {
        if (!$this->alinanders->contains($alinander)) {
            $this->alinanders[] = $alinander;
        }

        return $this;
    }

    public function removeAlinander(Ders $alinander): self
    {
        $this->alinanders->removeElement($alinander);

        return $this;
    }
}
