abstract class Shape {
    abstract public function calculateArea();
    
    public function display() {
        echo "This is a shape.";
    }
}

class Circle extends Shape {
    private $radius;
    
    public function __construct($radius) {
        $this->radius = $radius;
    }
    
    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }
}

$circle = new Circle(5);
echo $circle->calculateArea(); // Output: 78.539816339745
