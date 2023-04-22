# seguridad_basedatos_labM2

##Completar los siguientes 3 puntos de este laboratorio: 

####Pre-requisitos
Instalar WAMP en su computadora personal. Existen muchas guias de como realizar este procedimiento. Puede usar esta https://www.neoguias.com/instalar-wamp/ o buscar en google para encontrar guias similares.

Instalar nmap  https://nmap.org/download
Instalar la herramienta SQLMap
Investigar que herramienta sirve para hacer un "brute force attack" en un servidor de mysql desde una computadora con Sistema operativo Windows 10. (Si tiene otro sistema operativo asegurese que la herramienta que descargue sea compatible)


Los 3 puntos son:
- 1-	Usar la herramienta “nmap” para escanear el puerto 3306 del servidor MySQL. El comandpo de nmap es el siguiente: nmap -sT -p 3306 -Pn localhost
- 2-	Usar la herramienta “SQLmap” para probar si existe una vulnerabilidad de “SQL injection” en el script de php llamado “/script.php.” que estará disponible en el servidor de prueba. https://localhost/sqli/script.php El código fuente estará disponible en el repositorio de github.
- 3-	Usar una herramienta de “brute force attack” para intentar acceder al servidor usando el user “root”.  La direccion IP Publica del servidor : 127.0.0.1.


Incluya un análisis describiendo las medidas que deben tomarse en cuenta para evitar las vulnerabilidades arriba mencionadas.
