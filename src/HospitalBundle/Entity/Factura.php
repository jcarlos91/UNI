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
     * @var \Hospital\HospitalBundle\Entity\Paciente
     * @ORM\ManyToOne(targetEntity="Hospital\HospitalBundle\Entity\Paciente")
     * @RM\JoinColumns({
     *      @ORM\JoinColumn(name="Paciente", referencedColumnName="id")    
     * })
     */
    private $idPaciente;

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
     * Set idPaciente
     *
     * @param Hospital\HospitalBundle\Entity\Paciente
     * @return Factura
     */
    public function setIdPaciente(\Hospital\HospitalBundle\Entity\Pacientes $idPaciente = null)
    {
        $this->idPaciente = $idPaciente;

        return $this;
    }

    /**
     * Get idPaciente
     *
     * @return Hospital\HospitalBundle\Entity\Paciente
     */
    public function getIdPaciente()
    {
        return $this->idPaciente;
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
