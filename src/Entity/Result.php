<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ResultRepository")
 */
class Result
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */    
    private $drawNumber;
    
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Lotto", inversedBy="results")
     * @ORM\JoinColumn(nullable=false)
     */
    private $lotto;
    
    /**
     * @ORM\Column(type="string", length=2)
     */
    private $number1;
    
    /**
     * @ORM\Column(type="string", length=2)
     */
    private $number2;
    
    /**
     * @ORM\Column(type="string", length=2)
     */
    private $number3;
    
    /**
     * @ORM\Column(type="string", length=2)
     */
    private $number4;
    
    /**
     * @ORM\Column(type="string", length=2)
     */
    private $number5;
    
    /**
     * @ORM\Column(type="string", length=2)
     */
    private $number6;
    
    /**
     * @ORM\Column(type="string", length=2)
     */
    private $number7;
    
    /**
     * @ORM\Column(type="string", length=2)
     */
    private $number8;
    
    /**
     * @ORM\Column(type="string", length=2)
     */
    private $number9;
    
    /**
     * @ORM\Column(type="string", length=2)
     */
    private $number10;
    
    /**
     * @ORM\Column(type="string", length=2)
     */
    private $supps1;
    
    /**
     * @ORM\Column(type="string", length=2)
     */
    private $supps2;
    
    /**
     * @ORM\Column(type="string", length=2)
     */
    private $supps3;
    
    /**
     * @ORM\Column(type="string", length=2)
     */
    private $supps4;
    
    /**
     * @ORM\Column(type="string", length=2)
     */
    private $supps5;
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
    public function getDrawNumber()
    {
        return $this->drawNumber;
    }

    /**
     * @return mixed
     */
    public function getLotto()
    {
        return $this->lotto;
    }

    /**
     * @return mixed
     */
    public function getNumber1()
    {
        return $this->number1;
    }

    /**
     * @return mixed
     */
    public function getNumber2()
    {
        return $this->number2;
    }

    /**
     * @return mixed
     */
    public function getNumber3()
    {
        return $this->number3;
    }

    /**
     * @return mixed
     */
    public function getNumber4()
    {
        return $this->number4;
    }

    /**
     * @return mixed
     */
    public function getNumber5()
    {
        return $this->number5;
    }

    /**
     * @return mixed
     */
    public function getNumber6()
    {
        return $this->number6;
    }

    /**
     * @return mixed
     */
    public function getNumber7()
    {
        return $this->number7;
    }

    /**
     * @return mixed
     */
    public function getNumber8()
    {
        return $this->number8;
    }

    /**
     * @return mixed
     */
    public function getNumber9()
    {
        return $this->number9;
    }

    /**
     * @return mixed
     */
    public function getNumber10()
    {
        return $this->number10;
    }

    /**
     * @return mixed
     */
    public function getSupp1()
    {
        return $this->supps1;
    }

    /**
     * @return mixed
     */
    public function getSupp2()
    {
        return $this->supps2;
    }

    /**
     * @return mixed
     */
    public function getSupp3()
    {
        return $this->supps3;
    }

    /**
     * @return mixed
     */
    public function getSupp4()
    {
        return $this->supps4;
    }

    /**
     * @return mixed
     */
    public function getSupp5()
    {
        return $this->supps5;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $drawNumber
     */
    public function setDrawNumber($drawNumber)
    {
        $this->drawNumber = $drawNumber;
    }

    /**
     * @param mixed $lotto
     */
    public function setLotto($lotto)
    {
        $this->lotto = $lotto;
    }

    /**
     * @param mixed $number1
     */
    public function setNumber1($number1)
    {
        $this->number1 = $number1;
    }

    /**
     * @param mixed $number2
     */
    public function setNumber2($number2)
    {
        $this->number2 = $number2;
    }

    /**
     * @param mixed $number3
     */
    public function setNumber3($number3)
    {
        $this->number3 = $number3;
    }

    /**
     * @param mixed $number4
     */
    public function setNumber4($number4)
    {
        $this->number4 = $number4;
    }

    /**
     * @param mixed $number5
     */
    public function setNumber5($number5)
    {
        $this->number5 = $number5;
    }

    /**
     * @param mixed $number6
     */
    public function setNumber6($number6)
    {
        $this->number6 = $number6;
    }

    /**
     * @param mixed $number7
     */
    public function setNumber7($number7)
    {
        $this->number7 = $number7;
    }

    /**
     * @param mixed $number8
     */
    public function setNumber8($number8)
    {
        $this->number8 = $number8;
    }

    /**
     * @param mixed $number9
     */
    public function setNumber9($number9)
    {
        $this->number9 = $number9;
    }

    /**
     * @param mixed $number10
     */
    public function setNumber10($number10)
    {
        $this->number10 = $number10;
    }

    /**
     * @param mixed $supps1
     */
    public function setSupp1($supps1)
    {
        $this->supps1 = $supps1;
    }

    /**
     * @param mixed $supps2
     */
    public function setSupp2($supps2)
    {
        $this->supps2 = $supps2;
    }

    /**
     * @param mixed $supps3
     */
    public function setSupp3($supps3)
    {
        $this->supps3 = $supps3;
    }

    /**
     * @param mixed $supps4
     */
    public function setSupp4($supps4)
    {
        $this->supps4 = $supps4;
    }

    /**
     * @param mixed $supps5
     */
    public function setSupp5($supps5)
    {
        $this->supps5 = $supps5;
    }
    
    public function __toString()
    {
        return $this->drawNumber;
    }
}
