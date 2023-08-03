# Propuesta de Sistema de Gestión de Incidencias para el Metropolitano de Lima
***
### Descripción:
La presente propuesta tiene como objetivo abordar uno de los desafíos más críticos que enfrenta actualmente el sistema de transporte del Metropolitano de Lima: la falta de mapeo y seguimiento de accidentes y otras incidencias que ocurren dentro de las vías. Esta carencia impide una adecuada prevención y mejora del servicio, ya que no se cuentan con datos precisos para tomar decisiones informadas.

Para superar esta problemática, proponemos el desarrollo de un Sistema de Gestión de Incidencias (SGI) que permita identificar y registrar de manera eficiente todas las novedades y acontecimientos que afectan el funcionamiento del sistema de transporte público del Metropolitano. El proyecto involucra a los cuatro consorcios responsables de la operación del servicio: Lima Vías Express, Perú Masivo, Lima Bus Internacional, Transvial SAC y Perú Masivo.

### características del proyecto:
**Registro de Incidencias:**
  Implementaremos un sistema para el registro preciso de todas las incidencias, como accidentes, desperfectos técnicos, manifestaciones u otros eventos que puedan afectar las vías o el servicio en general. Esto permitirá mantener un registro detallado de cada incidencia y facilitará el análisis posterior.

**Interfaz de Usuario Intuitiva:**
Diseñamos una interfaz de usuario amigable y accesible para que los operadores y personal autorizado puedan reportar incidencias de manera rápida y sencilla. La interfaz esta optimizada para su uso en dispositivos móviles y computadoras, lo que garantizará una experiencia fluida y cómoda para los usuarios.

**Histórico y Análisis de Datos:**
Acumulamos datos a lo largo del tiempo para construir un histórico de incidencias y realizar análisis estadísticos que nos ayuden a identificar patrones y tendencias. Esto contribuirá a mejorar la toma de decisiones y a implementar medidas preventivas eficientes. El análisis de datos nos permitirá obtener información valiosa para optimizar la operación y planificación del servicio.

**Privacidad y Seguridad de los Datos:**
Garantizaremos la confidencialidad y seguridad de la información recopilada, siguiendo las mejores prácticas en materia de protección de datos. Se implementarán técnicas de cifrado y autenticación para asegurar que solo personal autorizado pueda acceder a la información sensible.

### Tecnologias usadas
Para el desarrollo del Sistema de Gestión de Incidencias (SGI), se utilizarán las siguientes tecnologías:

<p align="left"> <a href="https://www.w3schools.com/css/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original-wordmark.svg" alt="css3" width="40" height="40"/> </a> <a href="https://www.figma.com/" target="_blank" rel="noreferrer"> <img src="https://www.vectorlogo.zone/logos/figma/figma-icon.svg" alt="figma" width="40" height="40"/> </a> <a href="https://git-scm.com/" target="_blank" rel="noreferrer"> <img src="https://www.vectorlogo.zone/logos/git-scm/git-scm-icon.svg" alt="git" width="40" height="40"/> </a> <a href="https://www.w3.org/html/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original-wordmark.svg" alt="html5" width="40" height="40"/> </a> <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-original.svg" alt="javascript" width="40" height="40"/> </a> <a href="https://www.mysql.com/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mysql/mysql-original-wordmark.svg" alt="mysql" width="40" height="40"/> </a> <a href="https://www.php.net" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" alt="php" width="40" height="40"/> </a> </p>

- **Base de Datos:** Emplearemos un sistema de gestión de bases de datos confiable y escalable en  MySQL, para almacenar las incidencias y datos históricos.

- **Desarrollo Web:** Para la creación de la interfaz de usuario intuitiva, utilizaremos tecnologías web modernas como HTML5, CSS3 y JavaScript vanilla. Adicionalmente, hacemos uso de librerías como Grid.js para la manipulación de tablas y SweetAlert para mostrar alertas amigables al usuario.

- **Backend:** Se implementa una aplicación backend  utilizando PHP 8 . Esto gestionar la lógica del negocio, procesar las solicitudes de los usuarios y realizar las operaciones de la base de datos.

- **Seguridad:** Para garantizar la seguridad de los datos, se aplicarán técnicas de cifrado y autenticación. Además, se seguirán las mejores prácticas de seguridad web para proteger la aplicación contra posibles vulnerabilidades.

- **Hospedaje y Despliegue:** 
En la fase de desarrollo y prueba, la aplicación sera desplegada en un entorno local o en un servidor de prueba "raileway" para realizar las pruebas iniciales y garantizar el correcto funcionamiento de la aplicación.

     Sin embargo, para la implementación en producción y garantizar un rendimiento óptimo, seguridad y escalabilidad, se sugiere desplegar la aplicación en servicios de hospedaje en la nube, como Amazon Web Services (AWS), Microsoft Azure o Google Cloud Platform. Estos proveedores de servicios en la nube ofrecen una infraestructura confiable y flexible que se adapta a las necesidades de la aplicación y permite una administración más eficiente de recursos.
    
    Al utilizar servicios de hospedaje en la nube, se pueden aprovechar características como el balanceo de carga, la autoescalabilidad y la alta disponibilidad para garantizar que la aplicación se mantenga accesible incluso durante picos de tráfico. Además, la seguridad de la aplicación y los datos estará respaldada por las medidas de seguridad y protección que ofrecen estos proveedores, incluyendo cifrado, cortafuegos y controles de acceso.
    
    El despliegue en la nube también permite una mayor flexibilidad en cuanto a la gestión de recursos, ya que se pueden escalar vertical u horizontalmente según las necesidades del sistema. Esto garantizará un rendimiento óptimo incluso en situaciones de alta demanda.
    
    En resumen, para asegurar la estabilidad, flexibilidad y seguridad del Sistema de Gestión de Incidencias en producción, se recomienda utilizar servicios de hospedaje en la nube de confianza, lo que permitirá que la aplicación funcione de manera eficiente y se adapte a las necesidades cambiantes del sistema de transporte público del Metropolitano de Lima.

### Conclusiones:

El Sistema de Gestión de Incidencias propuesto mejorará significativamente la eficiencia y seguridad del sistema de transporte público del Metropolitano de Lima. Con esta solución, los operadores y responsables del servicio contarán con una herramienta confieable para gestionar y prevenir incidencias, lo que se traducirá en un mejor servicio para los usuarios y una toma de decisiones más informada para mejorar continuamente el sistema. Además, el análisis de datos nos permitirá obtener **insights** valiosos que contribuirán a la optimización de la operación y planificación del servicio. Finalmente, la seguridad y confidencialidad de los datos estarán garantizadas, cumpliendo con los estándares y regulaciones de protección de datos.