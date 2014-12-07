<?php

namespace ZenSoft\dojoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DocentesController extends Controller
{
    public function indexAction()
    {   
        $asignaturas = $this->obtenerAsignaturas();
        return $this->render('ZenSoftdojoBundle:Docentes:index.html.twig', array("usuario" =>'Cristian Dominguez', 
                    "asignaturas" => $asignaturas));
    }
    
    protected function obtenerAsignaturas()
    {
     //   $asignaturas = array("Política y ciudadanía","Informática", "Trabajo y cuidadanía");
        $asignaturas = $this->getDoctrine()
        ->getRepository('ZenSoftdojoBundle:Asignaturas')
        ->findAll();
        return $asignaturas;
    }
}
