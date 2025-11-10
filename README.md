## Ejercicio: CRUD de Gestión Académica

Nombre: Kim Du Ri Carrillo Chávez
Número de Control: 23150326
Materia: Programación Web 

## 📌 Descripción

Este proyecto es un sistema CRUD (Create, Read, Update, Delete) completo desarrollado en el framework Laravel. Su propósito es gestionar la información académica de los estudiantes, permitiendo:

Registrar nuevos estudiantes (Crear).
Visualizar el listado completo de estudiantes y sus datos asociados (Leer).
Modificar la información de un estudiante existente (Actualizar).
Eliminar registros de estudiantes (Eliminar).

El sistema maneja dos entidades principales: Estudiantes y Carreras, estableciendo una relación para que cada estudiante esté asociado a una única carrera.

## 🚀 Tecnologías utilizadas
Framework: Laravel (PHP)
Base de Datos: SQLite (configuración inicial) / MySQL (Producción)
Frontend/Estilos: Blade Templates y Tailwind CSS
Manejo de Datos: Eloquent ORM


## 🔗 Enlace al proyecto
Repositorio en GitHub: https://github.com/DuriChaska/CRUD-de-Estudiantes-en-Laravel
Deploy: https://github.com/DuriChaska/CRUD-de-Estudiantes-en-Laravel

## 📝 Reflexión Personal

Este proyecto representó una inmersión completa en el flujo de trabajo MVC de Laravel. Mi principal curva de aprendizaje se centró en la robustez de las rutas y el manejo de formularios de edición.

Una dificultad inicial fue resolver un error '404 Not Found' en el formulario de actualización, lo que me enseñó la importancia crítica de usar el helper route() en lugar de rutas manuales para garantizar que el formulario apunte correctamente al método update del controlador.

Otro punto clave fue dominar el uso del helper old('campo', $valor_existente) en los campos de input y select. Esta sintaxis de doble argumento es fundamental en la edición, ya que asegura:

La precarga de los datos existentes del estudiante al abrir la vista.

La persistencia de los datos ingresados por el usuario si la validación del servidor falla.

Finalmente, la integración de Tailwind CSS demostró ser crucial para la experiencia de usuario, permitiendo crear una interfaz limpia, moderna y completamente responsiva sin necesidad de archivos CSS separados, enfocando el diseño en la usabilidad y la alineación precisa de elementos como los iconos SVG.