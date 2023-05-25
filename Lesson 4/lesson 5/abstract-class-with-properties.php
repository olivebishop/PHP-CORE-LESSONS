abstract class Vehicle {
    protected $brand;
    protected $color;
    
    public function __construct($brand, $color) {
        $this->brand = $brand;
        $this->color = $color;
    }
    
    abstract public function start();
    
    public function displayInfo() {
        echo "Brand: " . $this->brand . ", Color: " . $this->color;
    }
}

class Car extends Vehicle {
    public function start() {
        echo "The car is starting.";
    }
}

$car = new Car("Toyota", "Blue");
$car->displayInfo(); // Output: Brand: Toyota, Color: Blue
$car->start(); // Output: The car is starting.
