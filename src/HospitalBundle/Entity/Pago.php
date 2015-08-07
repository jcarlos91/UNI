<?php

namespace HospitalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pago
 */
class Pago
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
     * @var \Hospital\HospitalBundle\Entity\FormaDePago
     * @ORM\OneToOne(targetEntity="Hospital\HospitalBundle\Entity\FormaDePago")
     * @RM\JoinColumns({
     *      @ORM\JoinColumn(name="FormaDePago", referencedColumnName="id")    
     * })
     */
    private $idFormatoDePago;

    /**
     * @var integer
     */
    private $fechaDePago;

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
     * @param integer $idFactura
     * @return Pago
     */
    public function setIdFactura($idFactura)
    {
        $this->idFactura = $idFactura;

        return $this;
    }

    /**
     * Get idFactura
     *
     * @return integer 
     */
    public function getIdFactura()
    {
        return $this->idFactura;
    }

    /**
     * Set idFormatoDePago
     *
     * @param Hospital\HospitalBundle\Entity\FormaDePago
     * @return Pago
     */
    public function setIdFormatoDePago(\Hospital\HospitalBundle\Entity\FormaDePago $idFormatoDePago = null)
    {
        $this->idFormatoDePago = $idFormatoDePago;

        return $this;
    }

    /**
     * Get idFormatoDePago
     *
     * @return Hospital\HospitalBundle\Entity\FormaDePago
     */
    public function getIdFormatoDePago()
    {
        return $this->idFormatoDePago;
    }

    /**
     * Set fechaDePago
     *
     * @param integer $fechaDePago
     * @return Pago
     */
    public function setFechaDePago($fechaDePago)
    {
        $this->fechaDePago = $fechaDePago;

        return $this;
    }

    /**
     * Get fechaDePago
     *
     * @return integer 
     */
    public function getFechaDePago()
    {
        return $this->fechaDePago;
    }

    /**
     * Set valor
     *
     * @param string $valor
     * @return Pago
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
