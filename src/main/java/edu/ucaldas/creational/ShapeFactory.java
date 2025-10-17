package edu.ucaldas.creational;

// Patrón Factory Method - Crea objetos sin especificar su clase exacta
public class ShapeFactory {
    
    // Crea una figura según el tipo
    public Shape createShape(String type) {
        if ("Circle".equals(type)) return new Circle();
        if ("Square".equals(type)) return new Square();
        return null;
    }
}

// Círculo
class Circle implements Shape {
    @Override
    public String draw() {
        return "Dibujando un círculo.";
    }
}

// Cuadrado
class Square implements Shape {
    @Override
    public String draw() {
        return "Dibujando un cuadrado.";
    }
}
