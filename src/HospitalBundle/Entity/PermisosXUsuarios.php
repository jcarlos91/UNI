<?php

namespace HospitalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PermisosXUsuarios
 */
class PermisosXUsuarios
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Hospital\HospitalBundle\Entity\Usuario
     * @ORM\ManyToOne(targetEntity="Hospital\HospitalBundle\Entity\Usuario")
     * @RM\JoinColumns({
     *      @ORM\JoinColumn(name="Usuario", referencedColumnName="id")    
     * })
     */
    private $idUsuario;

    /**
     * @var \Hospital\HospitalBundle\Entity\Permiso
     * @ORM\OneToOne(targetEntity="Hospital\HospitalBundle\Entity\Permiso")
     * @RM\JoinColumns({
     *      @ORM\JoinColumn(name="Permiso", referencedColumnName="id")    
     * })
     */
    private $idPermiso;


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
     * Set idUsuario
     *
     * @param Hospital\HospitalBundle\Entity\Usuario
     * @return PermisosXUsuarios
     */
    public function setIdUsuario(\Hospital\HospitalBundle\Entity\Usuario $idUsuario = null)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * Get idUsuario
     *
     * @return Hospital\HospitalBundle\Entity\Usuario
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set idPermiso
     *
     * @param Hospital\HospitalBundle\Entity\Permiso
     * @return PermisosXUsuarios
     */
    public function setIdPermiso(\Hospital\HospitalBundle\Entity\Permiso $idPermiso = null)
    {
        $this->idPermiso = $idPermiso;

        return $this;
    }

    /**
     * Get idPermiso
     *
     * @return Hospital\HositalBundle\Entity\Permiso
     */
    public function getIdPermiso()
    {
        return $this->idPermiso;
    }
}
