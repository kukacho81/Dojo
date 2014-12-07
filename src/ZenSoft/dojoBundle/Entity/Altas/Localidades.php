<?php

namespace ZenSoft\dojoBundle\Entity\Altas;

use Doctrine\ORM\Mapping as ORM;

/**
 * Localidades
 */
class Localidades
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
    private $idProvincias;


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
     * @return Localidades
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
     * Set idProvincias
     *
     * @param integer $idProvincias
     * @return Localidades
     */
    public function setIdProvincias($idProvincias)
    {
        $this->idProvincias = $idProvincias;

        return $this;
    }

    /**
     * Get idProvincias
     *
     * @return integer 
     */
    public function getIdProvincias()
    {
        return $this->idProvincias;
    }
}
