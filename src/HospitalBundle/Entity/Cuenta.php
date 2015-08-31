<?php

namespace HospitalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cuenta
 */
class Cuenta
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Hospital\HospitalBundle\Entity\Factura
     * @ORM\OneToOne(targetEntity="Hospital\HospitalBundle\Entity\Factura")
     * @RM\JoinColumns({
     *      @ORM\JoinColumn(name="Factura", referencedColumnName="id")    
     * })
     */
    private $idFactura;

    /**
     * @var \DateTime
     */
    private $fechaGeneracion;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $valor;


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
     * Set idFactura
     *
     * @param Hospital\HospitalBundle\Entity\Factura
     * @return Cuenta
     */
    public function setIdFactura(\Hospital\HospitalBundle\Entity\Factura $idFactura = null)
    {
        $this->idFactura = $idFactura;

        return $this;
    }

    /**
     * Get idFactura
     *
     * @return Hospital\HospitalBundle\Entity\Factura
     */
    public function getIdFactura()
    {
        return $this->idFactura;
    }

    /**
     * Set fechaGeneracion
     *
     * @param \DateTime $fechaGeneracion
     * @return Cuenta
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

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Cuenta
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
     * Set valor
     *
     * @param string $valor
     * @return Cuenta
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return string 
     */
    public function getValor()
    {
        return $this->valor;
    }
}
