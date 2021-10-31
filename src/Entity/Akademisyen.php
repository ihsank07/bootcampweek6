<?php

namespace App\Entity;

use App\Repository\AkademisyenRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AkademisyenRepository::class)
 */
class Akademisyen
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
     * @ORM\Column(type="string", length=100)
     */
    private $uzmanlık;

    /**
     * @ORM\OneToMany(targetEntity=Ders::class, mappedBy="akademisyen")
     */
    private $ders_adi;

    public function __construct()
    {
        $this->ders_adi = new ArrayCollection();
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

    public function getUzmanlık(): ?string
    {
        return $this->uzmanlık;
    }

    public function setUzmanlık(string $uzmanlık): self
    {
        $this->uzmanlık = $uzmanlık;

        return $this;
    }

    /**
     * @return Collection|Ders[]
     */
    public function getDersAdi(): Collection
    {
        return $this->ders_adi;
    }

    public function addDersAdi(Ders $dersAdi): self
    {
        if (!$this->ders_adi->contains($dersAdi)) {
            $this->ders_adi[] = $dersAdi;
            $dersAdi->setAkademisyen($this);
        }

        return $this;
    }

    public function removeDersAdi(Ders $dersAdi): self
    {
        if ($this->ders_adi->removeElement($dersAdi)) {
            // set the owning side to null (unless already changed)
            if ($dersAdi->getAkademisyen() === $this) {
                $dersAdi->setAkademisyen(null);
            }
        }

        return $this;
    }








}
