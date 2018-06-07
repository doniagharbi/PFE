<?php

namespace Tests\AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Tests\AppBundle\Entity\ClientRepository")
 */
class Client
{

    /**
     * @var integer
     *
     * @ORM\Column(name="code", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $Code;
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $Nom;
    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $Mail;
    /**
     * @var integer
     *
     * @ORM\Column(name="tel", type="integer")
     */
    private $Tel;
    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $Adresse;
    /**
     * @var integer
     *
     * @ORM\Column(name="course", type="integer")
     */
    private $Fax;
    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255)
     */
    private $Pays;

    /**
     * Get  code
     * @return int
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param int $Code
     */
    public function setCode($Code)
    {
        $this->Code = $Code;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * @param string $Nom
     */
    public function setNom($Nom)
    {
        $this->Nom = $Nom;
    }

    /**
     * @return string
     */
    public function getMail()
    {
        return $this->Mail;
    }

    /**
     * @param string $Mail
     */
    public function setMail($Mail)
    {
        $this->Mail = $Mail;
    }

    /**
     * @return int
     */
    public function getTel()
    {
        return $this->Tel;
    }

    /**
     * @param int $Tel
     */
    public function setTel($Tel)
    {
        $this->Tel = $Tel;
    }

    /**
     * @return string
     */
    public function getAdresse()
    {
        return $this->Adresse;
    }

    /**
     * @param string $Adresse
     */
    public function setAdresse($Adresse)
    {
        $this->Adresse = $Adresse;
    }

    /**
     * @return int
     */
    public function getFax()
    {
        return $this->Fax;
    }

    /**
     * @param int $Fax
     */
    public function setFax($Fax)
    {
        $this->Fax = $Fax;
    }

    /**
     * @return string
     */
    public function getPays()
    {
        return $this->Pays;
    }

    /**
     * @param string $Pays
     */
    public function setPays($Pays)
    {
        $this->Pays = $Pays;
    }

}