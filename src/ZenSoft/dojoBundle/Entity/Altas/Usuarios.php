<?php

namespace ZenSoft\dojoBundle\Entity\Altas;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuarios
 */
class Usuarios
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
    private $password;

    /**
     * @var string
     */
    private $email;

    /**
     * @var integer
     */
    private $idTiposdocumento;

    /**
     * @var string
     */
    private $documento;

    /**
     * @var string
     */
    private $imagen;

    /**
     * @ORM\ManyToOne(targetEntity="TiposDocumento", inversedBy="usuarios")
     * @ORM\JoinColumn(name="id_tiposdocumento", referencedColumnName="id")
     */
    protected $tiposDocumento;
    
    public function __construct() 
    {
       $this->tiposDocumento = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * @return Usuarios
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
     * Set password
     *
     * @param string $password
     * @return Usuarios
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Usuarios
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set idTiposdocumento
     *
     * @param integer $idTiposdocumento
     * @return Usuarios
     */
    public function setIdTiposdocumento($idTiposdocumento)
    {
        $this->idTiposdocumento = $idTiposdocumento;

        return $this;
    }

    /**
     * Get idTiposdocumento
     *
     * @return integer 
     */
    public function getIdTiposdocumento()
    {
        return $this->idTiposdocumento;
    }

    /**
     * Set documento
     *
     * @param string $documento
     * @return Usuarios
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;

        return $this;
    }

    /**
     * Get documento
     *
     * @return string 
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     * @return Usuarios
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string 
     */
    public function getImagen()
    {
        return $this->imagen;
    }
}
