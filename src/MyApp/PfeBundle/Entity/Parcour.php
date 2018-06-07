<?php
/**
 * Created by PhpStorm.
 * User: Donia GHARBI
 * Date: 06/06/2018
 * Time: 00:24
 */

namespace Tests\AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Parcour
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Tests\AppBundle\Entity\ParcourRepository")
 */

class Parcour
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
    private $desc;
    private $longuer_Parc;

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
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * @param mixed $desc
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;
    }

    /**
     * @return mixed
     */
    public function getLonguerParc()
    {
        return $this->longuer_Parc;
    }

    /**
     * @param mixed $longuer_Parc
     */
    public function setLonguerParc($longuer_Parc)
    {
        $this->longuer_Parc = $longuer_Parc;
    }


}