package edu.ucaldas.structural;

public class SMSNotifier extends NotifierDecorator {

    public SMSNotifier(Notifier wrappee) {
        super(wrappee);
    }

    @Override
    public String send(String message) {
        String result = wrappee.send(message);
        return "SMS enviado: " + message + " | " + result;
    }
}
