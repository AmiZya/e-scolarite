<?php

namespace App\Bundle\BackOfficeBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection as ArrayCollection;

use Doctrine\ORM\Mapping as ORM;

/**
 * Element
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\Bundle\BackOfficeBundle\Entity\ElementRepository")
 */
class Element
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
     * @ORM\ManyToOne(targetEntity="Module", inversedBy="elements")
     * @ORM\JoinColumn(name="module_id", referencedColumnName="id")
     */
    protected $module;

    /**
    * @var ArrayCollection
    *
    * @ORM\OneToMany(targetEntity="Note", mappedBy="element", cascade={"persist"})
    */
    protected $notes;

    public function __construct(){
        $this->notes =  new ArrayCollection();    
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
     * @return Element
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
     * @return Element
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
     * Set module
     *
     * @param Module $module
     * @return Element
     */
    public function setModule($module)
    {
        $this->module = $module;

        return $this;
    }

    /**
     * Get module
     *
     * @return Module 
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
    * Add note
    * @param Note $note
    * @return Element
    */
    public function addNote($note){
        $this->notes[] = $note;
        $note->setElement($this);
        return $this;
    }

    /**
    * Get notes
    * 
    * @return array
    */
    public function getNotes(){
        return $this->notes->toArray();
    }
}
