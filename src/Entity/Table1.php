<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;


/**
 * Table1
 ** @ApiResource()
 * @ORM\Table(name="table1")
 * @ORM\Entity(repositoryClass="App\Repository\Table1Repository")
 */
class Table1
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_etab", type="string", length=6, nullable=true)
     */
    private $codeEtab;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ENTStructureNomCourant", type="string", length=71, nullable=true)
     */
    private $entstructurenomcourant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ville", type="string", length=25, nullable=true)
     */
    private $ville;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_pays", type="string", length=3, nullable=true)
     */
    private $codePays;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle_pays", type="string", length=31, nullable=true)
     */
    private $libellePays;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adresse", type="string", length=131, nullable=true)
     */
    private $adresse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ENTStructureSiteWeb", type="string", length=66, nullable=true)
     */
    private $entstructuresiteweb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ENTStructureEmail", type="string", length=48, nullable=true)
     */
    private $entstructureemail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="latitude", type="string", length=18, nullable=true)
     */
    private $latitude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="longitude", type="string", length=20, nullable=true)
     */
    private $longitude;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeEtab(): ?string
    {
        return $this->codeEtab;
    }

    public function setCodeEtab(?string $codeEtab): self
    {
        $this->codeEtab = $codeEtab;

        return $this;
    }

    public function getEntstructurenomcourant(): ?string
    {
        return $this->entstructurenomcourant;
    }

    public function setEntstructurenomcourant(?string $entstructurenomcourant): self
    {
        $this->entstructurenomcourant = $entstructurenomcourant;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getCodePays(): ?string
    {
        return $this->codePays;
    }

    public function setCodePays(?string $codePays): self
    {
        $this->codePays = $codePays;

        return $this;
    }

    public function getLibellePays(): ?string
    {
        return $this->libellePays;
    }

    public function setLibellePays(?string $libellePays): self
    {
        $this->libellePays = $libellePays;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getEntstructuresiteweb(): ?string
    {
        return $this->entstructuresiteweb;
    }

    public function setEntstructuresiteweb(?string $entstructuresiteweb): self
    {
        $this->entstructuresiteweb = $entstructuresiteweb;

        return $this;
    }

    public function getEntstructureemail(): ?string
    {
        return $this->entstructureemail;
    }

    public function setEntstructureemail(?string $entstructureemail): self
    {
        $this->entstructureemail = $entstructureemail;

        return $this;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(?string $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(?string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }


}
