<?php

namespace HospitalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Examen
 */
class Examen
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Hospital\HospitalBundle\Entity\Persona
     * @ORM\OneToOne(targetEntity="Hospital\HospitalBundle\Entity\Persona")
     * @RM\JoinColumns({
     *      @ORM\JoinColumn(name="Persona", referencedColumnName="id")    
     * })
     */
    private $idPersona;

    /**
     * @var \DateTime
     */
    private $fechaSolicitud;

    /**
     * @var \DateTime
     */
    private $fechaAplicacion;

    /**
     * @var string
     */
    private $observaciones;

    /**
     * @var \Hospital\HospitalBundle\Entity\TipoExamen
     * @ORM\OneToOne(targetEntity="Hospital\HospitalBundle\Entity\TipioExamen")
     * @RM\JoinColumns({
     *      @ORM\JoinColumn(name="TipoExamen", referencedColumnName="id")    
     * })
     */
    private $idTipoExamen;


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
     * Set idHistorialClinica
     *
     * @param integer $idPersona
     * @return Hospital\HospitalBundle\Entity\Persona
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
     */
    public function getIdPersona()
    {
        return $this->idPersona;
    }

    /**
     * Set fechaSolicitud
     *
     * @param \DateTime $fechaSolicitud
     * @return Examen
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
     * Set fechaAplicacion
     *
     * @param \DateTime $fechaAplicacion
     * @return Examen
     */
    public function setFechaAplicacion($fechaAplicacion)
    {
        $this->fechaAplicacion = $fechaAplicacion;

        return $this;
    }

    /**
     * Get fechaAplicacion
     *
     * @return \DateTime 
     */
    public function getFechaAplicacion()
    {
        return $this->fechaAplicacion;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Examen
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

    /**
     * Set idTipoExamen
     *
     * @param Hospital\HospitalBundle\Entity\TipoExamen
     * @return Examen
     */
    public function setIdTipoExamen(\Hospital\HospitalBundle\Entity\TipoExamen $idTipoExamen = null)
    {
        $this->idTipoExamen = $idTipoExamen;

        return $this;
    }

    /**
     * Get idTipoExamen
     *
     * @return Hospital\HospitalBundle\Entity\TipoExamen
     */
    public function getIdTipoExamen()
    {
        return $this->idTipoExamen;
    }
}
