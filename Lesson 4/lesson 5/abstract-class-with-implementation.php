abstract class Animal {
    abstract public function makeSound();
    
    public function eat() {
        echo "The animal is eating.";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "Meow!";
    }
}

$cat = new Cat();
$cat->makeSound(); // Output: Meow!
$cat->eat(); // Output: The animal is eating.
