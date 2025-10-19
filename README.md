#  Poliprogramador

**Poliprogramador** es una plataforma educativa desarrollada en **PHP, HTML, CSS y MySQL** que tiene como objetivo ayudar a las personas a **aprender a programar desde cero** en distintos lenguajes como **C, Java y Python**. El sistema está diseñado para organizar los contenidos por temas y descripciones de cada lenguaje, además de incluir un **chatbot interactivo** y una **sección de comentarios** para reforzar el aprendizaje.

##  Objetivo del proyecto
El propósito principal de **Poliprogramador** es ofrecer un entorno web que permita:
- Aprender los fundamentos de **C**, **Java** y **Python** de forma segmentada y estructurada.
- Comprender las características y diferencias entre lenguajes de programación.
- Interactuar con un **chatbot educativo** que responde preguntas relacionadas con los temas.
- Fomentar la participación a través de una **sección de comentarios** y retroalimentación.
- Administrar usuarios mediante un **panel de control** exclusivo para administradores.

## Funcionalidades principales

###  Sección de usuario
- Registro e inicio de sesión seguro (sistema **Login/Register** con MySQL).
- Acceso al contenido de aprendizaje de los lenguajes C, Java y Python.
- Navegación por temas y descripciones individuales de cada lenguaje.
- Acceso al chatbot y envío de comentarios o sugerencias.

###  Sección de administrador
- Acceso especial mediante **rol de administrador**.
- Control total sobre los usuarios registrados:
  - Visualización de todos los usuarios.
  - Edición de información individual.
  - Eliminación de cuentas.
- Control general del sistema educativo.

## Tecnologías utilizadas
| Tecnología | Uso principal |
|-------------|----------------|
| **PHP** | Lógica del servidor y conexión con la base de datos |
| **MySQL** | Almacenamiento de usuarios, roles y comentarios |
| **HTML5** | Estructura de las páginas |
| **CSS3** | Estilos y diseño del sitio |
| **JavaScript** | Interacción y validaciones básicas |
| **Font Awesome** | Íconos y elementos visuales |
| **XAMPP** | Entorno local de desarrollo (Apache + MySQL) |

##  Roles de usuario
| Rol | Permisos |
|-----|-----------|
|  **Usuario normal** | Puede registrarse, iniciar sesión, acceder al contenido y usar el chatbot y comentarios. |
|  **Administrador** | Puede acceder al panel administrativo, ver, editar y eliminar usuarios. |


##  Base de datos
**Nombre:** `login_register_db`  
**Tabla principal:** `usuarios`

| Campo | Tipo | Descripción |
|--------|------|-------------|
| `ID` | INT | Identificador único |
| `nombre_completo` | VARCHAR(100) | Nombre del usuario |
| `boleta` | VARCHAR(20) | Identificador o matrícula |
| `usuario` | VARCHAR(50) | Nombre de usuario |
| `clave` | VARCHAR(255) | Contraseña (puede cifrarse con SHA-512) |
| `id_rol` | INT | 0 = Usuario, 1 = Administrador |

##  Cómo ejecutar el proyecto
1. Instala [XAMPP](https://www.apachefriends.org/es/index.html).
2. Copia la carpeta del proyecto dentro de:
   C:\xampp\htdocs\
3. Inicia **Apache** y **MySQL** desde el panel de XAMPP.
4. Entra a [phpMyAdmin](http://localhost/phpmyadmin).
5. Crea la base de datos:
   CREATE DATABASE login_register_db;
6. Importa o ejecuta el siguiente script:
   CREATE TABLE usuarios (
     ID INT AUTO_INCREMENT PRIMARY KEY,
     nombre_completo VARCHAR(100),
     boleta VARCHAR(20) UNIQUE,
     usuario VARCHAR(50) UNIQUE,
     clave VARCHAR(255),
     id_rol INT DEFAULT 0
   );

   INSERT INTO usuarios (nombre_completo, boleta, usuario, clave, id_rol)
   VALUES
     ('Administrador General', '20210001', 'admin2025', '12345', 1),
     ('Usuario Estándar', '20210002', 'usuario2025', '12345', 0);
7. Abre tu navegador y accede a:
   http://localhost/Poliprogramador/Login-Register/Index.php

##  Vista general
![alt text](image-1.png)

##  Autor
**Irving Rodríguez Rodríguez**  
Desarrollado como proyecto educativo para fomentar el aprendizaje de programación y la gestión de usuarios en sistemas web.

