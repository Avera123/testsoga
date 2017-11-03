<?php

namespace fs\crudBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * itemsfactura
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="fs\crudBundle\Entity\itemsfacturaRepository")
 */
class itemsfactura
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
     * @var integer
     *
     * @ORM\Column(name="idfact", type="integer")
     */
    private $idfact;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=15)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=15)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad", type="integer")
     */
    private $cantidad;


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
     * Set idfact
     *
     * @param integer $idfact
     * @return itemsfactura
     */
    public function setIdfact($idfact)
    {
        $this->idfact = $idfact;
    
        return $this;
    }

    /**
     * Get idfact
     *
     * @return integer 
     */
    public function getIdfact()
    {
        return $this->idfact;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return itemsfactura
     */
    public function setCode($code)
    {
        $this->code = $code;
    
        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return itemsfactura
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     * @return itemsfactura
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    
        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }
}
