<?php

namespace ZenSoft\dojoBundle\Entity\Altas;

use Doctrine\ORM\Mapping as ORM;

/**
 * Provincias
 */
class Provincias
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
     * @var integer
     */
    private $idPaises;


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
     * @return Provincias
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
     * Set idPaises
     *
     * @param integer $idPaises
     * @return Provincias
     */
    public function setIdPaises($idPaises)
    {
        $this->idPaises = $idPaises;

        return $this;
    }

    /**
     * Get idPaises
     *
     * @return integer 
     */
    public function getIdPaises()
    {
        return $this->idPaises;
    }
}
