This project demonstrates essential **Object-Oriented Programming (OOP)** concepts and commonly used **Design Patterns** in PHP. It is designed to help developers understand and implement these patterns effectively in their projects.

---

## OOP Concepts with PHP

### Key Concepts:

- **Extends**: Inherit all methods from the parent class.
- **Abstract**: A class that can have both normal methods and abstract methods.
- **Interface**: A contract that a class must implement. A class can implement more than one interface.

### OOP Principles:

1. **Objects**: Instances of classes that encapsulate data and behavior.
2. **Encapsulation**: Restricting access to certain properties or methods using `private` or `protected`.
3. **Inheritance**: Sharing functionality between classes using `extends` or `abstract`.
4. **Polymorphism**: Using interfaces or abstract classes to allow different implementations of the same method.

---

### Example Code:

```php
<?php
interface Animal {
    public function move();
}

class Dog implements Animal {
    public function move() {
        echo "The Dog is running!";
    }
}

class Fish implements Animal {
    public function move() {
        echo "The Fish is swimming!";
    }
}

// Function to demonstrate polymorphism
function App(Animal $obj) {
    return $obj->move();
}

// Example usage
App(new Dog());
App(new Fish());
```
