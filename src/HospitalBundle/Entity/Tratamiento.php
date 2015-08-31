<?php

namespace HospitalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tratamiento
 */
class Tratamiento
{
    /**
     * @var integer
     */
    private $id;

      /**
     * @var \Hospital\HospitalBundle\Entity\HistoriaClinica
     * @ORM\OneToOne(targetEntity="Hospital\HospitalBundle\Entity\HistoriaClinica")
     * @RM\JoinColumns({
     *      @ORM\JoinColumn(name="HistoriaClinica", referencedColumnName="id")    
     * })
     */
    private $idHistoriaClinica;

    /**
     * @var \Hospital\HospitalBundle\Entity\TipoTratamiento
     * @ORM\OneToOne(targetEntity="Hospital\HospitalBundle\Entity\TipoTratamiento")
     * @RM\JoinColumns({
     *      @ORM\JoinColumn(name="TipoTratamiento", referencedColumnName="id")    
     * })
     */
    private $idTipoTratamiento;

    /**
     * @var \DateTime
     */
    private $fechaSolicitud;

    /**
     * @var \DateTime
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     */
    private $fechaFinalizacion;

    /**
     * @var string
     */
    private $observaciones;


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
     * Set idHistoriaClinica
     *
     * @param Hospital\HospitalBundle\Entity\HistoriaClinica
     * @return Tratamiento
     */
    public function setIdHistoriaClinica(\Hospital\HospitalBundle\Entity\HistoriaClinica $idHistoriaClinica = null)
    {
        $this->idHistoriaClinica = $idHistoriaClinica;

        return $this;
    }

    /**
     * Get idHistoriaClinica
     *
     * @return Hospital\HospitalBundle\Entity\HistoriaClinica 
     */
    public function getIdHistoriaClinica()
    {
        return $this->idHistoriaClinica;
    }

    /**
     * Set idTipoTratamiento
     *
     * @param Hospital\HospitalBundle\Entity\TipoTratamiento
     * @return Tratamiento
     */
    public function setIdTipoTratamiento(\Hospital\HospitalBundle\Entity\TipoTratamiento $idTipoTratamiento = null)
    {
        $this->idTipoTratamiento = $idTipoTratamiento;

        return $this;
    }

    /**
     * Get idTipoTratamiento
     *
     * @return Hospital\HospitalBundle\Entity\TipoTratamiento
     */
    public function getIdTipoTratamiento()
    {
        return $this->idTipoTratamiento;
    }

    /**
     * Set fechaSolicitud
     *
     * @param \DateTime $fechaSolicitud
     * @return Tratamiento
     */
    public function setFechaSolicitud($fechaSolicitud)
    {
        $this->fechaSolicitud = $fechaSolicitud;

        return $this;
    }

    /**
     * Get fechaSolicitud
     *
     * @return \DateTime 
     */
    public function getFechaSolicitud()
    {
        return $this->fechaSolicitud;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return Tratamiento
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime 
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFinalizacion
     *
     * @param \DateTime $fechaFinalizacion
     * @return Tratamiento
     */
    public function setFechaFinalizacion($fechaFinalizacion)
    {
        $this->fechaFinalizacion = $fechaFinalizacion;

        return $this;
    }

    /**
     * Get fechaFinalizacion
     *
     * @return \DateTime 
     */
    public function getFechaFinalizacion()
    {
        return $this->fechaFinalizacion;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Tratamiento
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }
}
