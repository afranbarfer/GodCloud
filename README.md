# GodCloud - Proyecto Final de Grado
Proyecto de 2º ASIR en el IES Triana, curso 2025/26.

Alumno: Francisco Javier Barea Fernández

## ARCHIVO DE GNS3 EN DRIVE [ENLACE](https://drive.google.com/drive/folders/1eVFOyh06Z28r7dXFYneUc4GsMr_w4zFH?usp=sharing)


# OBJETIVO GENERAL DEL PROYECTO
Diseñar, implementar y verificar una infraestructura de red empresarial de alta disponibilidad en un entorno virtualizado, demostrando que es posible eliminar los puntos únicos de fallo en todas las capas de la arquitectura mediante el uso de protocolos estándar de la industria.

# OBJETIVOS ESPECIFICOS
## Diseño y planificación de la red:
- Diseñar una topología jerárquica de tres capas con múltiples caminos redundantes entre todos los dispositivos.
- Segmentar el tráfico mediante VLANs diferenciando el tráfico de servicios, la gestión de dispositivos y la sincronización entre routers.
- Planificar el direccionamiento IP con subnetting ajustado a las necesidades reales de cada segmento.

## Implementación de redundancia en capa 2:
- Configurar PVST+ en los switches Cisco C3640 con módulo NM-16ESW para prevenir bucles de capa 2 en una topología con múltiples enlaces cruzados.
- Establecer S5 como Root Bridge para centralizar y optimizar el árbol de expansión.

## Implementación de redundancia en capa 3:
- Configurar LAGG Failover en pfSense agrupando los tres enlaces físicos hacia los switches de distribución en una única interfaz lógica tolerante a fallos.
- Implementar CARP para que los dos routers pfSense compartan una IP virtual como puerta de enlace común, garantizando la continuidad del servicio ante la caída de cualquiera de ellos.
- Configurar pfSync para sincronizar en tiempo real la tabla de estados del firewall, las reglas y el servidor DHCP entre ambos routers.

## Implementación de redundancia en capa 7:
- Desplegar tres servidores web Alpine Linux con Apache y PHP84 en la capa de acceso, garantizando la persistencia de la configuración mediante directorios persistentes en los contenedores Docker de GNS3.
- Configurar HAProxy sobre pfSense para distribuir el tráfico web entrante entre los tres servidores mediante balanceo Round Robin, con health checks automáticos para detectar y excluir servidores caídos.
- Implementar SSL/TLS mediante certificado autofirmado generado con una CA propia en pfSense, ofreciendo el servicio exclusivamente por HTTPS con redirección automática desde HTTP.

## Verificación y análisis:
- Realizar pruebas de estrés desconectando enlaces y apagando dispositivos para verificar el comportamiento real de los mecanismos de redundancia.
- Documentar las limitaciones encontradas en el entorno de simulación y contrastarlas con el comportamiento esperado en hardware físico real.
- Analizar y justificar las decisiones técnicas tomadas a lo largo del proyecto.

# Repositorio y Gestión del Proyecto
La planificación y seguimiento de tareas se realizó mediante un tablero Trello, donde se organizaron las fases del proyecto, las tareas pendientes y los problemas encontrados durante el desarrollo.
#Enlace de [Trello](https://trello.com/invite/b/68e76761ff3d49d87f585d83/ATTI88c3c608824fd62eae7db1b3b4de20d26EFF7D06/final-project-god-cloud)
