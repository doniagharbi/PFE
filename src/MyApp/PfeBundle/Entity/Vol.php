<?php
/**
 * Created by PhpStorm.
 * User: Donia GHARBI
 * Date: 05/06/2018
 * Time: 23:59
 */

namespace Tests\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vol
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Tests\AppBundle\Entity\VolRepository")
 */
class Vol
{

    private $id;

    private $date;
    private $code_serie;
    private $code_avion;
    private $type;
    private $heure;
    private $statut;
    private $pn;
    private $code_parcour;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getCodeSerie()
    {
        return $this->code_serie;
    }

    /**
     * @param mixed $code_serie
     */
    public function setCodeSerie($code_serie)
    {
        $this->code_serie = $code_serie;
    }

    /**
     * @return mixed
     */
    public function getCodeAvion()
    {
        return $this->code_avion;
    }

    /**
     * @param mixed $code_avion
     */
    public function setCodeAvion($code_avion)
    {
        $this->code_avion = $code_avion;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * @param mixed $heure
     */
    public function setHeure($heure)
    {
        $this->heure = $heure;
    }

    /**
     * @return mixed
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * @param mixed $statut
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
    }

    /**
     * @return mixed
     */
    public function getPn()
    {
        return $this->pn;
    }

    /**
     * @param mixed $pn
     */
    public function setPn($pn)
    {
        $this->pn = $pn;
    }

    /**
     * @return mixed
     */
    public function getCodeParcour()
    {
        return $this->code_parcour;
    }

    /**
     * @param mixed $code_parcour
     */
    public function setCodeParcour($code_parcour)
    {
        $this->code_parcour = $code_parcour;
    }




}