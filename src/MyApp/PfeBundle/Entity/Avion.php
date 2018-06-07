<?php
/**
 * Created by PhpStorm.
 * User: Donia GHARBI
 * Date: 06/06/2018
 * Time: 00:15
 */

namespace Tests\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Avion
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Tests\AppBundle\Entity\AvionRepository")
 */

class Avion
{

    /**
     * @var integer
     *
     * @ORM\Column(name="code", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $code;
    private $num_serie;
    private $date_Achat;
    private $date_Fabr;
    private $nb_Siege;

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
    public function getNumSerie()
    {
        return $this->num_serie;
    }

    /**
     * @param mixed $num_serie
     */
    public function setNumSerie($num_serie)
    {
        $this->num_serie = $num_serie;
    }

    /**
     * @return mixed
     */
    public function getDateAchat()
    {
        return $this->date_Achat;
    }

    /**
     * @param mixed $date_Achat
     */
    public function setDateAchat($date_Achat)
    {
        $this->date_Achat = $date_Achat;
    }

    /**
     * @return mixed
     */
    public function getDateFabr()
    {
        return $this->date_Fabr;
    }

    /**
     * @param mixed $date_Fabr
     */
    public function setDateFabr($date_Fabr)
    {
        $this->date_Fabr = $date_Fabr;
    }

    /**
     * @return mixed
     */
    public function getNbSiege()
    {
        return $this->nb_Siege;
    }

    /**
     * @param mixed $nb_Siege
     */
    public function setNbSiege($nb_Siege)
    {
        $this->nb_Siege = $nb_Siege;
    }



}