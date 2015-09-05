<?php

namespace HospitalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\Role\RoleInterface;
/**
 * Role
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Role Implements RoleInterface 
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=255)
     */
    private $role;


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
     * Set role
     *
     * @param string $role
     * @return Role
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string 
     */
    public function getRole()
    {
        return $this->role;
    }
    
    /**
     * Add usuario
     *
     * @param \Hostital\HospitalBundle\Entity\Usuario $person
     * @return Role
     */
    public function addPerson(\Hostital\HospitalBundle\Entity\Usuario $username)
    {
        $this->person[] = $person;

        return $this;
    }

    /**
     * Remove usuario
     *
     * @param \Hospital\HospitalBundle\Entity\Usuario $username
     */
    public function removePerson(\HospitalBundle\Entity\Usuario $username)
    {
        $this->person->removeElement($person);
    }

    /**
     * Get person
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPerson()
    {
        return $this->person;
    }
    
}
