<?php

namespace MTD\LoginBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inscripcion
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MTD\LoginBundle\Entity\InscripcionRepository")
 */
class Inscripcion
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
     * @ORM\Column(name="materia", type="string", length=100)
     */
    private $materia;

    /**
     * @var string
     *
     * @ORM\Column(name="docente", type="string", length=100)
     */
    private $docente;


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
     * Set materia
     *
     * @param string $materia
     *
     * @return Inscripcion
     */
    public function setMateria($materia)
    {
        $this->materia = $materia;

        return $this;
    }

    /**
     * Get materia
     *
     * @return string
     */
    public function getMateria()
    {
        return $this->materia;
    }

    /**
     * Set docente
     *
     * @param string $docente
     *
     * @return Inscripcion
     */
    public function setDocente($docente)
    {
        $this->docente = $docente;

        return $this;
    }

    /**
     * Get docente
     *
     * @return string
     */
    public function getDocente()
    {
        return $this->docente;
    }
}

