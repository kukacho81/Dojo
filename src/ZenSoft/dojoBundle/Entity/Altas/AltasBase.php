<?php

namespace ZenSoft\dojoBundle\Entity\Altas;

/**
 * Description of AltasBase
 *
 * @author Cristian
 */
class AltasBase {
    
    private $nombre;

    
    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Areas
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
    
    public function __toString()
    {
        return $this->getNombre();
    }
}
