<?php

namespace ZenSoft\dojoBundle\Entity\Altas;

use Doctrine\ORM\Mapping as ORM;

/**
 * Niveles
 */
class Niveles
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
    private $idEstablecimientos;


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
     * @return Niveles
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
     * Set idEstablecimientos
     *
     * @param integer $idEstablecimientos
     * @return Niveles
     */
    public function setIdEstablecimientos($idEstablecimientos)
    {
        $this->idEstablecimientos = $idEstablecimientos;

        return $this;
    }

    /**
     * Get idEstablecimientos
     *
     * @return integer 
     */
    public function getIdEstablecimientos()
    {
        return $this->idEstablecimientos;
    }
}
