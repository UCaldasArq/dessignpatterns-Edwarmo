package edu.ucaldas.behavior;

// Patrón Chain of Responsibility - Pasa solicitudes por una cadena de manejadores
public class SupportHandler {
    
    // Crea la cadena: Básico → Supervisor → Gerente
    public static Handler createChain() {
        Handler basic = new BasicSupportHandler();
        Handler supervisor = new SupervisorHandler();
        Handler manager = new ManagerHandler();
        
        basic.setNext(supervisor);
        supervisor.setNext(manager);
        
        return basic;
    }
}

// Soporte básico
class BasicSupportHandler extends Handler {
    @Override
    public String handleRequest(String request) {
        if ("básica".equals(request)) {
            return "Atendido por Soporte Básico";
        }
        return next != null ? next.handleRequest(request) : "No se puede atender la solicitud.";
    }
}

// Supervisor
class SupervisorHandler extends Handler {
    @Override
    public String handleRequest(String request) {
        if ("intermedia".equals(request)) {
            return "Atendido por Supervisor";
        }
        return next != null ? next.handleRequest(request) : "No se puede atender la solicitud.";
    }
}

// Gerente
class ManagerHandler extends Handler {
    @Override
    public String handleRequest(String request) {
        if ("avanzada".equals(request)) {
            return "Atendido por Gerente";
        }
        return "No se puede atender la solicitud.";
    }
}
