<?php

namespace HospitalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Factura
 */
class Factura
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Hospital\HospitalBundle\Entity\Persona
     * @ORM\ManyToOne(targetEntity="Hospital\HospitalBundle\Entity\Persona")
     * @RM\JoinColumns({
     *      @ORM\JoinColumn(name="Persona", referencedColumnName="id")    
     * })
     */
    private $idPersona;

    /**
     * @var \DateTime
     */
    private $fechaGeneracion;


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
     * Set idPersona
     *
     * @param Hospital\HospitalBundle\Entity\Persona
     * @return Factura
     */
    public function setIdPersona(\Hospital\HospitalBundle\Entity\Persona $idPersona = null)
    {
        $this->idPersona = $idPersona;

        return $this;
    }

    /**
     * Get idPersona
     *
     * @return Hospital\HospitalBundle\Entity\Persona
     * 
     */
    public function getIdPersona()
    {
        return $this->idPersona;
    }

    /**
     * Set fechaGeneracion
     *
     * @param \DateTime $fechaGeneracion
     * @return Factura
     */
    public function setFechaGeneracion($fechaGeneracion)
    {
        $this->fechaGeneracion = $fechaGeneracion;

        return $this;
    }

    /**
     * Get fechaGeneracion
     *
     * @return \DateTime 
     */
    public function getFechaGeneracion()
    {
        return $this->fechaGeneracion;
    }
}