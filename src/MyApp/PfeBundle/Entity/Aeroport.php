<?php
/**
 * Created by PhpStorm.
 * User: Donia GHARBI
 * Date: 06/06/2018
 * Time: 00:21
 */

namespace Tests\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Aeroport
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Tests\AppBundle\Entity\AeroportRepository")
 */
class Aeroport

{
    /**
     * @var integer
     *
     * @ORM\Column(name="code", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $code;
    private $libelle;
    private $heure_ouver;
    private $heure_ferm;

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param int $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param mixed $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * @return mixed
     */
    public function getHeureOuver()
    {
        return $this->heure_ouver;
    }

    /**
     * @param mixed $heure_ouver
     */
    public function setHeureOuver($heure_ouver)
    {
        $this->heure_ouver = $heure_ouver;
    }

    /**
     * @return mixed
     */
    public function getHeureFerm()
    {
        return $this->heure_ferm;
    }

    /**
     * @param mixed $heure_ferm
     */
    public function setHeureFerm($heure_ferm)
    {
        $this->heure_ferm = $heure_ferm;
    }


}