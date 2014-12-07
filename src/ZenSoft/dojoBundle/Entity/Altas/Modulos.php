<?php

namespace ZenSoft\dojoBundle\Entity\Altas;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modulos
 */
class Modulos
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
    private $detalle;

    /**
     * @var integer
     */
    private $idAsignaturas;


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
     * @return Modulos
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
     * Set detalle
     *
     * @param string $detalle
     * @return Modulos
     */
    public function setDetalle($detalle)
    {
        $this->detalle = $detalle;

        return $this;
    }

    /**
     * Get detalle
     *
     * @return string 
     */
    public function getDetalle()
    {
        return $this->detalle;
    }

    /**
     * Set idAsignaturas
     *
     * @param integer $idAsignaturas
     * @return Modulos
     */
    public function setIdAsignaturas($idAsignaturas)
    {
        $this->idAsignaturas = $idAsignaturas;

        return $this;
    }

    /**
     * Get idAsignaturas
     *
     * @return integer 
     */
    public function getIdAsignaturas()
    {
        return $this->idAsignaturas;
    }
}
