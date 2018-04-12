<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LottoRepository")
 */
class Lotto
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $lottoName;
    
    /**
     * @ORM\Column(type="string", length=20)
     */
    private $lottoCode;
    
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Country", inversedBy="lottos") 
     * @ORM\JoinColumn(nullable=true)
     */
    private $country;
    
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Result", mappedBy="lotto")
     */
    private $results;
    
    public function __construct()
    {
        $this->results = new ArrayCollection();
    }
    
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getLottoName()
    {
        return $this->lottoName;
    }

    /**
     * @return mixed
     */
    public function getLottoCode()
    {
        return $this->lottoCode;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $lottoName
     */
    public function setLottoName($lottoName)
    {
        $this->lottoName = $lottoName;
    }

    /**
     * @param mixed $lottoCode
     */
    public function setLottoCode($lottoCode)
    {
        $this->lottoCode = $lottoCode;
    }

    /**
     * @param mixed $country
     */
    public function setCountry(Country $country)
    {
        $this->country = $country;
    }
    
    public function __toString()
    {
        return $this->lottoName;
    }

    public function getResults()
    {
        return $this->results;
    }
}
