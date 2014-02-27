<?php

namespace App\Bundle\BackOfficeBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection as ArrayCollection;

use Doctrine\ORM\Mapping as ORM;

/**
 * Semestre
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\Bundle\BackOfficeBundle\Entity\SemestreRepository")
 */
class Semestre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255)
     */
    protected $code;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    protected $libelle;

    /**
    * @var Module
    *
    * @ORM\OneToMany(targetEntity="Module", mappedBy="semestre", cascade={"persist"})
    */
    protected $modules;

    public function __construct(){
        $this->modules =  new ArrayCollection();        
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
     * Set code
     *
     * @param string $code
     * @return Semestre
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
     * Set libelle
     *
     * @param string $libelle
     * @return Semestre
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

     /**
    * Add module
    * @param module $module
    * @return Semestre
    */
    public function addModule($module){
        $this->modules[] = $module;
        $note->setSemestre($this);
        return $this;
    }

    /**
    * Get modules
    * 
    * @return array
    */
    public function getModules(){
        return $this->modules->toArray();
    }
}
