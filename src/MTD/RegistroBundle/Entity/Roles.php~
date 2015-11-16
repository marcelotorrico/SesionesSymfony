<?php

namespace MTD\RegistroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Role\RoleInterface;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Roles
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MTD\RegistroBundle\Entity\RolesRepository")
 */
class Roles implements RoleInterface
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
     * @ORM\Column(name="role", type="string", length=20)
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50)
     */
    private $nombre;

    /**
     * @ORM\ManyToMany(targetEntity="Estudiante", mappedBy="roles")
     */
     private $estudiante;

     public function __construct()
     {
         $this->estudiante = new ArrayCollection();
     }

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
     *
     * @return Roles
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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Roles
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Add estudiante
     *
     * @param \sci\usuariosBundle\Entity\Usuarios $estudiante
     * @return Roles
     */
    public function addEstudiante(\sci\usuariosBundle\Entity\Usuarios $estudiante)
    {
        $this->estudiante[] = $estudiante;
        return $this;
    }

    /**
     * Remove estudiante
     *
     * @param \sci\usuariosBundle\Entity\Usuarios $estudiante
     */
    public function removeEstudiante(\sci\usuariosBundle\Entity\Usuarios $estudiante)
    {
        $this->estudiante->removeElement($estudiante);
    }

    /**
     * Get estudiante
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEstudiante()
    {
        return $this->estudiante;
    }
}
