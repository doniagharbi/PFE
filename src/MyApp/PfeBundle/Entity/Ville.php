<?php
/**
 * Created by PhpStorm.
 * User: Donia GHARBI
 * Date: 06/06/2018
 * Time: 00:25
 */

namespace Tests\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Ville
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Tests\AppBundle\Entity\VilleRepository")
 */

class Ville
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
    private $pays;

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
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * @param mixed $pays
     */
    public function setPays($pays)
    {
        $this->pays = $pays;
    }


}