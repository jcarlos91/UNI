<?php

namespace HospitalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empleado
 */
class Empleado
{
    /**
     * @var integer
     */
    private $id;

     /**
     * @var \Hospital\HospitalBundle\Entity\Persona
     * @ORM\ManyToMany(targetEntity="Hospital\HospitalBundle\Entity\Persona")
     * @RM\JoinColumns({
     *      @ORM\JoinColumn(name="Persona", referencedColumnName="id")    
     * })
     */
    private $idPersona;

     /**
     * @var \Hospital\HospitalBundle\Entity\Cargo
     * @ORM\OneToOne(targetEntity="Hospital\HospitalBundle\Entity\Cargo")
     * @ORM\JoinColumns({
     *      @ORM\JoinColumn(name="Cargo", referencedColumnName="id")    
     * })
     */
    private $idCargo;

    /**
     * @var \Hospital\HopsitalBundle\Entity\TipoEmpleado
     * @ORM\OneToOne(targetEntity="Hospital\HospitalBundle\Entity\TipoEmpleado")
     * @ORM\JoinColumns({
     *      @ORM\JoinColumn(name="TipoEmpleado", referencedColumnName="id")
     * })
     */
    private $idTipoEmpleado;

    /**
     * @var \Hospital\HospitalBundle\Entity\Dependencia
     * @ORM\OneToOne(targetEntity="Hospital\HospitalBundle\Entity\Dependecia")
     * @ORM\JoinColumns({ 
     *      @ORM\JoinColumn(name="Dependencia",referencedColumnName="id")
     * })
     */
    private $idDependencia;

    /**
     * @var \Hospital\HospitalBundle\Entity\Usuario
     * @ORM\OneToOne(targetEntity="Hospital\HospitalBundle\Entity\Usuario")
     * @ORM\JoinColumns({
     *      @ORM\JoinColimn(name="Usuario", referencedcolumnName="id")
     * })
     */
    private $idUsuario;


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
     * @param Hospital\HospitalBundle\Entity\Persona $idPersona
     * @return Empleado
     */
    public function setIdPersona(\Hospital\HospitalBundle\Entity\Persona $idPersona = null)
    {
        $this->idPersona = $idPersona;

        return $this;
    }

    /**
     * Get idPersona
     *
     * @return \Hospital\HospitalBundle\Entity\Persona
     */
    public function getIdPersona()
    {
        return $this->idPersona;
    }

    /**
     * Set idCargo
     *
     * @param Hospital\HospitalBundle\Entity\Cargo
     * @return Empleado
     */
    public function setIdCargo(\Hospital\HospitalBundle\Entity\Cargo $idCargo = null)
    {
        $this->idCargo = $idCargo;

        return $this;
    }

    /**
     * Get idCargo
     *
     * @return \Hospital\HospitalBundle\Entity\Cargo
     */
    public function getIdCargo()
    {
        return $this->idCargo;
    }

    /**
     * Set idTipoEmpleado
     *
     * @param Hospital\HospitalBundle\Entity\TipoEmpleado
     * @return Empleado
     */
    public function setIdTipoEmpleado(\Hodpitsl\HospitalBundle\Entity\TipoEmpleado $idTipoEmpleado = null)
    {
        $this->idTipoEmpleado = $idTipoEmpleado;

        return $this;
    }

    /**
     * Get idTipoEmpleado
     *
     * @return Hospital\hospitalBundle\Entity\TipoEmpleado
     */
    public function getIdTipoEmpleado()
    {
        return $this->idTipoEmpleado;
    }

    /**
     * Set idDependencia
     *
     * @param Hospital\HospitalBundle\Entity\Dependencia
     * @return Empleado
     */
    public function setIdDependencia(\Hospital\HospitalBundle\Entity\Dependencia $idDependencia = null)
    {
        $this->idDependencia = $idDependencia;

        return $this;
    }

    /**
     * Get idDependencia
     *
     * @return Hospital\HospitalBundle\Entity\Dependencia
     */
    public function getIdDependencia()
    {
        return $this->idDependencia;
    }

    /**
     * Set idUsuario
     *
     * @param Hospital\HospitalBundle\Entity\Usuario
     * @return Empleado
     */
    public function setIdUsuario(\Hospital\HospitalBundle\Entity\Usuario $idUsuario = null)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * Get idUsuario
     *
     * @return ospital\HospitalBundle\Entity\Usuario 
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }
}
