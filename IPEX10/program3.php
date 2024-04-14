<?php
class Vehicle {
    public $make;
    public $model;
    public $year;
    public $rentalPrice;
    public $isRented;

    public function __construct($make, $model, $year, $rentalPrice) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->rentalPrice = $rentalPrice;
        $this->isRented = false;
    }

    public function rentVehicle() {
        if (!$this->isRented) {
            $this->isRented = true;
            echo "Vehicle rented successfully!\n";
        } else {
            echo "Vehicle is already rented.\n";
        }
    }

    public function returnVehicle() {
        if ($this->isRented) {
            $this->isRented = false;
            echo "Vehicle returned successfully!\n";
        } else {
            echo "Vehicle is not currently rented.\n";
        }
    }

    public function calculateRentalFee($days) {
        return $days * $this->rentalPrice;
    }
}

$car = new Vehicle("Toyota", "Camry", 2022, 50);
$car->rentVehicle();
echo "Rental fee for 5 days: $" . $car->calculateRentalFee(5) . "\n";
$car->returnVehicle();
?>
