<?php

namespace MTD\RegistroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;



/**
 * Estudiante
 *
 * @ORM\Table(name="estudiante")
 * @ORM\Entity(repositoryClass="MTD\RegistroBundle\Entity\EstudianteRepository")
 */
class Estudiante implements UserInterface, \Serializable
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
     * @ORM\Column(name="usuario", type="string", length=50, unique=true)
     * @Assert\NotNull(message="Debe escribir un nombre de usuario")
     * @Assert\Length(
     *      min = "3",
     *      max = "12",
     *      minMessage = "Tu nombre de usuario por lo menos debe tener {{ limit }} caracteres de largo",
     *      maxMessage = "Tu nombre de usuario por lo menos debe tener más de {{ limit }} caracteres de largo"
     * )
     * @Assert\Regex(
     *      pattern="/^[a-zA-ZñÑáéíóúÁÉÍÓÚ]{3}[a-zA-ZñÑáéíóúÁÉÍÓÚ0-9_\\_\ü]{0,9}$/",
     *      match=true
     * )
     */
    private $usuario;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $salt;
    
    /**
     * @var string
     *
     * @ORM\Column(name="contrasena", type="string", length=255)
     * @Assert\NotNull(message="Debe escribir una contraseña")
     * @Assert\Length(
     *      min = "5",
     *      minMessage = "Ingrese una contraseña segura. Debe tener como minimo 5 caracteres."
     * )
     */
    private $contrasena;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50)
     * @Assert\NotNull(message="Debe escribir su nombre")
     * @Assert\Length(
     *      min = "3",
     *      max = "20",
     *      minMessage = "Tu primer nombre por lo menos debe tener {{ limit }} caracteres de largo",
     *      maxMessage = "Tu primer nombre no puede tener más de {{ limit }} caracteres de largo"
     * )
     * @Assert\Regex(
     *      pattern="/[A-Z]{1}[a-zñáéíóú]{2,20}$/",
     *      match=true
     * )
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=50)
     * @Assert\NotNull(message="Debe escribir su apellido")
     * @Assert\Length(
     *      min = "3",
     *      max = "20",
     *      minMessage = "Tu apellido por lo menos debe tener {{ limit }} caracteres de largo",
     *      maxMessage = "Tu apellido no puede tener más de {{ limit }} caracteres de largo"
     * )
     * @Assert\Regex(
     *      pattern="/[A-Z]{1}[a-zñáéíóú]{2,20}\s?([A-Z]{1}[a-záéíóú]{2,20})?/",
     *      match=true
     * )
     */
    private $apellido;

    /**
     * @var integer
     *
     * @ORM\Column(name="telefono", type="integer")
     * @Assert\NotNull(message="Debe escribir su telefono")
     * @Assert\Length(
     *      min = "7",
     *      max = "8",
     *      minMessage = "Tu numero de telefono por lo menos debe tener {{ limit }} digitos",
     *      maxMessage = "Tu numero de telefono no puede tener más de {{ limit }} digitos"
     * )
     * @Assert\Regex(
     *      pattern="/^(([4][0-9]{6,7})|([7|6][0-9]{7}))$/",
     *      match=true
     * )
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="correo", type="string", length=100)
     * @Assert\NotNull(message="Debe escribir su correo")
     * @Assert\Regex(
     *      pattern="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/",
     *      match=true
     * )
     */
    private $correo;
    
    /**
     * @ORM\ManyToMany(targetEntity="Roles", inversedBy="estudiante")
     * @ORM\JoinTable(name="estudiante_roles")
     *
     */
     private $roles;
    
    public function __construct()
    {
        $this->isActive = true;
        $this->salt = md5(uniqid(null, true));
        $this->createdAt = date_create(date('Y-m-d H:i:s'));
        $this->roles = new ArrayCollection();
    }

    /**
     * @inheritDoc
     */
    public function getUsername()
    {
        return $this->usuario;
    }
    
    /**
     * @inheritDoc
     */
    public function getSalt()
    {
        return $this->salt;
    }
    
    /**
     * @inheritDoc
     */
    //public function getRoles()
    //{
      //  return array('ROLE_USER');
    //}
    
    /**
     * @inheritDoc
     */
    public function eraseCredentials()
    {

    }
    
    /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
        return serialize(array(
            $this->id,
        ));
    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            ) = unserialize($serialized);
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
     * Set usuario
     *
     * @param string $usuario
     *
     * @return Estudiante
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set contrasena
     *
     * @param string $contrasena
     *
     * @return Estudiante
     */
    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;

        return $this;
    }

    /**
     * Get contrasena
     *
     * @return string
     */
    public function getContrasena()
    {
        return $this->contrasena;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Estudiante
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
     * Set apellido
     *
     * @param string $apellido
     *
     * @return Estudiante
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set telefono
     *
     * @param integer $telefono
     *
     * @return Estudiante
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return integer
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set correo
     *
     * @param string $correo
     *
     * @return Estudiante
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Get correo
     *
     * @return string
     */
    public function getCorreo()
    {
        return $this->correo;
    }
    
    public function getPassword()
    {
        return $this->getContrasena();
    }

    /**
     * Set salt
     *
     * @param string $salt
     *
     * @return Estudiante
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Add role
     *
     * @param \MTD\RegistroBundle\Entity\Roles $role
     *
     * @return Estudiante
     */
    public function addRole(\MTD\RegistroBundle\Entity\Roles $role)
    {
        $this->roles[] = $role;

        return $this;
    }

    /**
     * Remove role
     *
     * @param \MTD\RegistroBundle\Entity\Roles $role
     */
    public function removeRole(\MTD\RegistroBundle\Entity\Roles $role)
    {
        $this->roles->removeElement($role);
    }
    
    /**
     * Get role
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRoles()
    {
        return $this->roles->toArray();
    }
}
