package edu.ucaldas.structural;

// Patrón Decorator - Añade funcionalidad a objetos dinámicamente
public abstract class NotifierDecorator implements Notifier {
    protected Notifier wrappee; // Objeto envuelto

    public NotifierDecorator(Notifier wrappee) {
        this.wrappee = wrappee;
    }

    @Override
    public String send(String message) {
        return wrappee.send(message);
    }
}

// Decorador que añade SMS
class SMSNotifier extends NotifierDecorator {
    
    public SMSNotifier(Notifier wrappee) {
        super(wrappee);
    }

    @Override
    public String send(String message) {
        return "SMS enviado: " + message + " | " + wrappee.send(message);
    }
}
