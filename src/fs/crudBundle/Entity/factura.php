<?php

namespace fs\crudBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * factura
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="fs\crudBundle\Entity\facturaRepository")
 */
class factura
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
     * @ORM\Column(name="codefac", type="string", length=10)
     */
    private $codefac;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtercero", type="integer")
     */
    private $idtercero;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechafac", type="date")
     */
    private $fechafac;


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
     * Set codefac
     *
     * @param string $codefac
     * @return factura
     */
    public function setCodefac($codefac)
    {
        $this->codefac = $codefac;
    
        return $this;
    }

    /**
     * Get codefac
     *
     * @return string 
     */
    public function getCodefac()
    {
        return $this->codefac;
    }

    /**
     * Set idtercero
     *
     * @param integer $idtercero
     * @return factura
     */
    public function setIdtercero($idtercero)
    {
        $this->idtercero = $idtercero;
    
        return $this;
    }

    /**
     * Get idtercero
     *
     * @return integer 
     */
    public function getIdtercero()
    {
        return $this->idtercero;
    }

    /**
     * Set fechafac
     *
     * @param \DateTime $fechafac
     * @return factura
     */
    public function setFechafac($fechafac)
    {
        $this->fechafac = $fechafac;
    
        return $this;
    }

    /**
     * Get fechafac
     *
     * @return \DateTime 
     */
    public function getFechafac()
    {
        return $this->fechafac;
    }
}
