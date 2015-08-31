<?php

namespace HospitalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resultado
 */
class Resultado
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Hospital\HospitalBundle\Entity\Examen
     * @ORM\ManyToOne(targetEntity="Hospital\HospitalBundle\Entity\Examen")
     * @RM\JoinColumns({
     *      @ORM\JoinColumn(name="Examen", referencedColumnName="id")    
     * })
     */
    private $idExamen;

    /**
     * @var \DateTime
     */
    private $fechaEntrega;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var integer
     */
    private $documentacionAsociado;


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
     * Set idExamen
     *
     * @param Hospital\HospitalBundle\Entity\Examen
     * @return Resultado
     */
    public function setIdExamen(\Hospital\HospitalBundle\Entity\Examen $idExamen = null)
    {
        $this->idExamen = $idExamen;

        return $this;
    }

    /**
     * Get idExamen
     *
     * @return \Hospital\HospitalBundle\Entity\Examen 
     */
    public function getIdExamen()
    {
        return $this->idExamen;
    }

    /**
     * Set fechaEntrega
     *
     * @param \DateTime $fechaEntrega
     * @return Resultado
     */
    public function setFechaEntrega($fechaEntrega)
    {
        $this->fechaEntrega = $fechaEntrega;

        return $this;
    }

    /**
     * Get fechaEntrega
     *
     * @return \DateTime 
     */
    public function getFechaEntrega()
    {
        return $this->fechaEntrega;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Resultado
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set documentacionAsociado
     *
     * @param integer $documentacionAsociado
     * @return Resultado
     */
    public function setDocumentacionAsociado($documentacionAsociado)
    {
        $this->documentacionAsociado = $documentacionAsociado;

        return $this;
    }

    /**
     * Get documentacionAsociado
     *
     * @return integer 
     */
    public function getDocumentacionAsociado()
    {
        return $this->documentacionAsociado;
    }
}
