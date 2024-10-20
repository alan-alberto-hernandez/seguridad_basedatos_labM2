# seguridad_basedatos_labM2

# PRE-REQUESITOS

- Instalar nmap  https://nmap.org/download
- Instalar la herramienta SQLMap
- Instalar WAMP y completar todos los pasos necesarios para instalar la aplicacion web. Existen muchas guias de como realizar este procedimiento. Puede usar esta https://www.neoguias.com/instalar-wamp/ o buscar en google para encontrar guias similares.
- Para que funcione el código aquí. Es necesario cambiar la contraseña del usuario root a '12345' en WAMP. Puede consultar el siguiente enlace: https://www.youtube.com/watch?v=4QMxMu2972s



**Los 2 puntos de la actividad son:**

**1.**	Usar la herramienta “nmap” para escanear el puerto 3306 del servidor MySQL. El comando de nmap es el siguiente: nmap -sT -p 3306 -Pn localhost
**2.**	Usar la herramienta “SQLMap” para probar si existe una vulnerabilidad de “SQL injection” en el script de php llamado “/script.php.” que estará disponible en el servidor de prueba. https://localhost/sqli/script.php.  El código fuente esta disponible en este repositorio de github.

Incluya un análisis describiendo las medidas que deben tomarse en cuenta para evitar las vulnerabilidades arriba mencionadas.
