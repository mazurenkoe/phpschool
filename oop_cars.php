<?php

class Car
{
    protected $brand;

    protected $issueYear;

    protected $model;

    protected $vinCode;

    public function setBrand(string $brand)
    {
        $this->brand = $brand;
    }

    public function setIssueYear(int $issueYear)
    {
        $this->issueYear = $issueYear;
    }

    public function setModel(string $model)
    {
        $this->model = $model;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setVinCode(int $vinCode)
    {
        $this->vinCode = $vinCode;
    }

    public function getVinCode()
    {
        return $this->vinCode;
    }

    public function getName()
    {
        if ($this->issueYear == null) {
            if ($this->brand == null) {
                return 'Unknown brand';
            } else
                return $this->brand . ' brand';
        } else
            return $this->brand . ' brand of ' . $this->issueYear . ' year';

    }
}

class PassengerCar extends Car
{
    private $kit;

    public function setKit(string $kit)
    {
        $this->kit = $kit;
    }

    public function getKit()
    {
        return $this->kit;
    }
}

class Truck extends Car
{
    private $loadCapacity;

    public function setLoadCapacity(int $loadCapacity)
    {
        $this->loadCapacity = $loadCapacity;
    }

    public function getLoadCapacity()
    {
        if (is_int($this->loadCapacity) && $this->loadCapacity > 0) {
            if ($this->loadCapacity < 2) {
                return $this->loadCapacity . ' ton';
            } else
                return $this->loadCapacity . ' tons';

        } else
            throw new Exception ('Load Capacity must be a positive integer');
    }
}

echo "-----Small car-----", PHP_EOL;
$mersedesSmall = new PassengerCar;
$mersedesSmall->setKit('additional wheel, medicine chest');
$mersedesSmall->setBrand('Mercedes-Benz');
$mersedesSmall->setIssueYear(1995);
$mersedesSmall->setVinCode(24234324324);
echo 'VIN code is: ' . $mersedesSmall->getVinCode(), PHP_EOL;
echo 'Kit: ' . $mersedesSmall->getKit(), PHP_EOL;
echo $mersedesSmall->getName(), PHP_EOL;

echo "------Big car------", PHP_EOL;
$volksvagenBig = new Truck;
$volksvagenBig->setLoadCapacity(3);
$volksvagenBig->setBrand('Volkswagen');
$volksvagenBig->setModel('Volkswagen Constellation');
echo $volksvagenBig->getModel(), PHP_EOL;
echo $volksvagenBig->getLoadCapacity(), PHP_EOL;
echo $volksvagenBig->getName(), PHP_EOL;
