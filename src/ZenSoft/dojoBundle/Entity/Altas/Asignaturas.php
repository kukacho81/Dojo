<?php

namespace ZenSoft\dojoBundle\Entity\Altas;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asignaturas
 */
class Asignaturas
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
    private $idUsuariosAlta;

    /**
     * @var \DateTime
     */
    private $fechadealta;

    /**
     * @var string
     */
    private $codigo;

    /**
     * @var integer
     */
    private $idAreas;

    /**
     * @var integer
     */
    private $idNiveles;


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
     * @return Asignaturas
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
     * Set idUsuariosAlta
     *
     * @param integer $idUsuariosAlta
     * @return Asignaturas
     */
    public function setIdUsuariosAlta($idUsuariosAlta)
    {
        $this->idUsuariosAlta = $idUsuariosAlta;

        return $this;
    }

    /**
     * Get idUsuariosAlta
     *
     * @return integer 
     */
    public function getIdUsuariosAlta()
    {
        return $this->idUsuariosAlta;
    }

    /**
     * Set fechadealta
     *
     * @param \DateTime $fechadealta
     * @return Asignaturas
     */
    public function setFechadealta($fechadealta)
    {
        $this->fechadealta = $fechadealta;

        return $this;
    }

    /**
     * Get fechadealta
     *
     * @return \DateTime 
     */
    public function getFechadealta()
    {
        return $this->fechadealta;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     * @return Asignaturas
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set idAreas
     *
     * @param integer $idAreas
     * @return Asignaturas
     */
    public function setIdAreas($idAreas)
    {
        $this->idAreas = $idAreas;

        return $this;
    }

    /**
     * Get idAreas
     *
     * @return integer 
     */
    public function getIdAreas()
    {
        return $this->idAreas;
    }

    /**
     * Set idNiveles
     *
     * @param integer $idNiveles
     * @return Asignaturas
     */
    public function setIdNiveles($idNiveles)
    {
        $this->idNiveles = $idNiveles;

        return $this;
    }

    /**
     * Get idNiveles
     *
     * @return integer 
     */
    public function getIdNiveles()
    {
        return $this->idNiveles;
    }
}
