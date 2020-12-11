<?php


namespace App\Model;


class Store
{
   protected $id;
   protected $name;
   protected $type;
   protected $price;
   protected $amount;
   protected $date;
   protected $descirbe;

   public function __construct($name,$type,$price,$amount,$date,$descirbe)
   {
      $this->name = $name;
      $this->type= $type;
      $this->price =$price;
      $this->amount =$amount;
      $this->date= $date;
      $this->descirbe = $descirbe;

   }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getDescirbe()
    {
        return $this->descirbe;
    }

    /**
     * @param mixed $descirbe
     */
    public function setDescirbe($descirbe)
    {
        $this->descirbe = $descirbe;
    }



}