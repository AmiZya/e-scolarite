<?php

namespace App\Bundle\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collection\ArrayCollection as ArrayCollection;

/**
 * Etudiant
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\Bundle\BackOfficeBundle\Entity\EtudiantRepository")
 */
class Etudiant
{

    /**
     * @var string
     * @ORM\Id
     * @ORM\Column(name="code_apogee", type="string", length=255)
     */
    protected $codeApogee;

    /**
     * @var string
     *
     * @ORM\Column(name="cne", type="string", length=255)
     */
    protected $cne;

    /**
     * @var string
     *
     * @ORM\Column(name="cin", type="string", length=255)
     */
    protected $cin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="datetime")
     */
    protected $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_naissance", type="string", length=255)
     */
    protected $villeNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    protected $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    protected $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_ar", type="string", length=255)
     */
    protected $nomAr;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_ar", type="string", length=255)
     */
    protected $prenomAr;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=255)
     */
    protected $sexe;

    /**
     * @var integer
     *
     * @ORM\Column(name="annee_inscription", type="integer")
     */
    protected $anneeInscription;

    /**
     * @var integer
     *
     * @ORM\Column(name="annee_depart", type="integer")
     */
    protected $anneeDepart;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    protected $adresse;

    /**
    * @var Demande
    *
    * @ORM\OneToMany(targetEntity="Demande", mappedBy="etudiant")
    */
    protected $demandes;

    public function __construct(){
        $this->demandes =  new ArrayCollection();
    }


    /**
     * Set codeApogee
     *
     * @param string $codeApogee
     * @return Etudiant
     */
    public function setCodeApogee($codeApogee)
    {
        $this->codeApogee = $codeApogee;

        return $this;
    }

    /**
     * Get codeApogee
     *
     * @return string 
     */
    public function getCodeApogee()
    {
        return $this->codeApogee;
    }

    /**
     * Set cne
     *
     * @param string $cne
     * @return Etudiant
     */
    public function setCne($cne)
    {
        $this->cne = $cne;

        return $this;
    }

    /**
     * Get cne
     *
     * @return string 
     */
    public function getCne()
    {
        return $this->cne;
    }

    /**
     * Set cin
     *
     * @param string $cin
     * @return Etudiant
     */
    public function setCin($cin)
    {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get cin
     *
     * @return string 
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     * @return Etudiant
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime 
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set villeNaissance
     *
     * @param string $villeNaissance
     * @return Etudiant
     */
    public function setVilleNaissance($villeNaissance)
    {
        $this->villeNaissance = $villeNaissance;

        return $this;
    }

    /**
     * Get villeNaissance
     *
     * @return string 
     */
    public function getVilleNaissance()
    {
        return $this->villeNaissance;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Etudiant
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Etudiant
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set nomAr
     *
     * @param string $nomAr
     * @return Etudiant
     */
    public function setNomAr($nomAr)
    {
        $this->nomAr = $nomAr;

        return $this;
    }

    /**
     * Get nomAr
     *
     * @return string 
     */
    public function getNomAr()
    {
        return $this->nomAr;
    }

    /**
     * Set prenomAr
     *
     * @param string $prenomAr
     * @return Etudiant
     */
    public function setPrenomAr($prenomAr)
    {
        $this->prenomAr = $prenomAr;

        return $this;
    }

    /**
     * Get prenomAr
     *
     * @return string 
     */
    public function getPrenomAr()
    {
        return $this->prenomAr;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     * @return Etudiant
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string 
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set anneeInscription
     *
     * @param integer $anneeInscription
     * @return Etudiant
     */
    public function setAnneeInscription($anneeInscription)
    {
        $this->anneeInscription = $anneeInscription;

        return $this;
    }

    /**
     * Get anneeInscription
     *
     * @return integer 
     */
    public function getAnneeInscription()
    {
        return $this->anneeInscription;
    }

    /**
     * Set anneeDepart
     *
     * @param integer $anneeDepart
     * @return Etudiant
     */
    public function setAnneeDepart($anneeDepart)
    {
        $this->anneeDepart = $anneeDepart;

        return $this;
    }

    /**
     * Get anneeDepart
     *
     * @return integer 
     */
    public function getAnneeDepart()
    {
        return $this->anneeDepart;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Etudiant
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }
}
