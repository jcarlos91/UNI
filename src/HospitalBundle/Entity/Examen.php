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
     * @var \Hospital\HospitalBundle\Entity\HistoriaClinica
     * @ORM\OneToOne(targetEntity="Hospital\HospitalBundle\Entity\HistoiaClinica")
     * @RM\JoinColumns({
     *      @ORM\JoinColumn(name="HistoriaClinica", referencedColumnName="id")    
     * })
     */
    private $idHistorialClinica;

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
     * @param integer $idHistorialClinica
     * @return Hospital\HospitalBundle\Entity\HistoriaClinica
     */
    public function setIdHistorialClinica(\Hospital\HospitalBundle\Entity\HistoriaClinica $idHistorialClinica = null)
    {
        $this->idHistorialClinica = $idHistorialClinica;

        return $this;
    }

    /**
     * Get idHistorialClinica
     *
     * @return Hospital\HospitalBundle\Entity\HistoriaClinica
     */
    public function getIdHistorialClinica()
    {
        return $this->idHistorialClinica;
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
