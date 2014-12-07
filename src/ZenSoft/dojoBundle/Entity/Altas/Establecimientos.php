<?php

namespace ZenSoft\dojoBundle\Entity\Altas;

use Doctrine\ORM\Mapping as ORM;

/**
 * Establecimientos
 */
class Establecimientos
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $telefono;

    /**
     * @var string
     */
    private $calle;

    /**
     * @var integer
     */
    private $altura;

    /**
     * @var string
     */
    private $web;

    /**
     * @var integer
     */
    private $idLocalidades;

    /**
     * @var string
     */
    private $logo;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Establecimientos
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Establecimientos
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set calle
     *
     * @param string $calle
     * @return Establecimientos
     */
    public function setCalle($calle)
    {
        $this->calle = $calle;

        return $this;
    }

    /**
     * Get calle
     *
     * @return string 
     */
    public function getCalle()
    {
        return $this->calle;
    }

    /**
     * Set altura
     *
     * @param integer $altura
     * @return Establecimientos
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    /**
     * Get altura
     *
     * @return integer 
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set web
     *
     * @param string $web
     * @return Establecimientos
     */
    public function setWeb($web)
    {
        $this->web = $web;

        return $this;
    }

    /**
     * Get web
     *
     * @return string 
     */
    public function getWeb()
    {
        return $this->web;
    }

    /**
     * Set idLocalidades
     *
     * @param integer $idLocalidades
     * @return Establecimientos
     */
    public function setIdLocalidades($idLocalidades)
    {
        $this->idLocalidades = $idLocalidades;

        return $this;
    }

    /**
     * Get idLocalidades
     *
     * @return integer 
     */
    public function getIdLocalidades()
    {
        return $this->idLocalidades;
    }

    /**
     * Set logo
     *
     * @param string $logo
     * @return Establecimientos
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }
}
