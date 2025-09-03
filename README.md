# PHP‑projects by Omar Pedraza

Repositorio con 5 proyectos prácticos en PHP y MySQL para practicar desarrollo web:

- **php-login**: formulario de registro e inicio de sesión de usuarios.
- **crud-php**: operaciones CRUD interactivas con lenguaje PHP y base de datos.
- **form_contacto**: formulario de contacto básico.
- **calculadora**: calculadora dinámica con PHP y JavaScript.
- **task-app**: (descripción breve si corresponde).

Estos ejemplos integran HTML, CSS, JavaScript, Bootstrap y jQuery.

---

##  Requisitos

- **XAMPP** instalado (incluye Apache, MariaDB/MySQL y PHP).  
  > XAMPP es un paquete de servidor local multiplataforma (Apache, MariaDB, PHP, Perl) que facilita configurar un entorno de desarrollo.

---

##  Instalación y ejecución

1. Clona el repositorio:

   ```bash
   git clone https://github.com/omarpedraza1979/PHP-projects.git
   ```

2. Abre el panel de control de XAMPP y **inicia Apache** y **MySQL** (si los proyectos usan base de datos).

3. Copia o mueve los proyectos a la carpeta `htdocs` de XAMPP (por ejemplo `C:\xampp\htdocs\PHP-projects`).

4. En tu navegador, accede a cada proyecto:

   - http://localhost/PHP-projects/php-login/
   - http://localhost/PHP-projects/crud-php/
   - http://localhost/PHP-projects/form_contacto/
   - http://localhost/PHP-projects/calculadora/
   - http://localhost/PHP-projects/task-app/

---

##  Base de datos (si aplica)

Para los proyectos que usen MySQL/MariaDB (como el login o CRUD):

1. Accede a **phpMyAdmin** en http://localhost/phpmyadmin/.
2. Crea una base de datos, por ejemplo `mi_proyecto_db`.
3. Importa el archivo `.sql` si está incluido o crea las tablas necesarias manualmente.
4. Actualiza los parámetros de conexión en el archivo PHP correspondiente —host, usuario, contraseña, nombre de base de datos.

---

##  Tecnologías utilizadas

- PHP
- MySQL / MariaDB
- HTML, CSS, JavaScript
- Bootstrap
- jQuery
- AJAX (en algunos proyectos)

---

##  Notas

- Asegúrate de que Apache use el puerto **80** o ajusta según sea necesario.  
- XAMPP es ideal para desarrollo local, pero no se recomienda confiar en su configuración para producción, ya que muchas funciones de seguridad vienen desactivadas.

---

##  Licencia

Este repositorio está disponible bajo la licencia **(especifica la licencia si hay una, por ejemplo MIT o GPL)**.

---

##  ¡Disfruta explorando y aprendiendo!

Para dudas o sugerencias, puedes contactar a **Omar Pedraza** o abrir un *issue* en el repositorio.
