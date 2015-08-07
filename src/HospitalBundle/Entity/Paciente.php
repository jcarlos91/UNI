<?php

namespace HospitalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paciente
 */
class Paciente
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
     * @var \Hospital\HospitalBundle\Entity\HistoriaClinica
     * @ORM\ManyToOne(targetEntity="Hospital\HospitalBundle\Entity\HistoriaClinica")
     * @RM\JoinColumns({
     *      @ORM\JoinColumn(name="HistoriaClinica", referencedColumnName="id")    
     * })
     */
    private $idHistoriaClinica;


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
     * @return Paciente
     */
    public function setIdPersona(\Hospital\HospitalBundle\Entity\Persona $idPersona)
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
     * Set idHistoriaClinica
     *
     * @param Hospital\HospitalBundle\Entity\HistoriaClinica
     * @return Paciente
     */
    public function setIdHistoriaClinica(\Hospital\HospitalBundle\Entity\HistoriaClinica $idHistoriaClinica)
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
}
