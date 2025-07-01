# 🧩 Módulo CRUD - Temas de Curso (Course Topics)

Este proyecto implementa un mini módulo para administrar **Temas de Curso**, cumpliendo con los requisitos de la prueba técnica.

## 🛠️ Requisitos cumplidos

- [x] Se creó la tabla `course_topics` en MySQL.
- [x] Se implementó un CRUD funcional usando Laravel como API REST.
- [x] Se desarrolló una vista con TailwindCSS para listar, crear, editar y eliminar temas.
- [x] Se implementaron validaciones básicas del lado del servidor.
- [x] Las operaciones de eliminación se hacen usando AJAX (sin recargar la página).

## 📁 Estructura

- `resources/views/course-topics/index.blade.php`: Vista principal.
- `resources/js/course-topics.js`: Para consumir la API y manejar el DOM.
- `app/Http/Controllers/CourseTopicController.php`: Controlador RESTful.
- `routes/api.php`: Rutas para el API.
- `routes/web.php`: Ruta que carga la vista.

## 🚀 Cómo ejecutar

1. Clona el repositorio y configura el archivo `.env` con tus credenciales de base de datos.
2. Instala dependencias de PHP con `composer install`.
3. Instala dependencias de frontend con `npm install`.
4. Compila los assets con Vite usando `npm run build` o `npm run dev`.
5. Ejecuta migraciones con `php artisan migrate` o importa `courses_topics.sql`.
6. Genera la clave de aplicación con: `php artisan key:generate`
7. Levanta el servidor con `php artisan serve`.
8. Accede a `http://127.0.0.1:8000` para comenzar.

## ⚙️ Notas importantes y actualización

> ⚠️ Este proyecto usa **Vite** para la compilación de assets.  
> Es necesario ejecutar `npm run build` para generar el archivo `manifest.json` y evitar errores como: Unable to locate file in Vite manifest: resources/js/course-topics.js

## 📘 Descripción de la ejecución de la prueba

1. Se diseñó y creó la tabla course_topics en MySQL mediante migraciones de Laravel.
2. Se implementó un CRUD funcional con Laravel como API REST, incluyendo validaciones básicas del lado del servidor.
3. Se desarrolló una interfaz básica utilizando Blade y Tailwind CSS 4 para listar, crear, editar y eliminar temas.
4. Se utilizó JavaScript con fetch() para realizar peticiones AJAX, evitando recargar la página.
5. Se realizaron pruebas funcionales manuales para asegurar que todo el flujo operara correctamente.
6. Finalmente, se preparó el archivo .sql con la tabla y datos de ejemplo, y se documentó el proceso en este archivo README.md.

## ⏱️ Tiempo estimado

| Etapa                            | Tiempo invertido |
|----------------------------------|------------------|
| Instalación base de Laravel 12   | 10 minutos       |
| Modelo y migración CourseTopics  | 10 minutos       |
| Rutas y controlador REST         | 10 minutos       |
| CRUD con validaciones            | 15 minutos       |
| Frontend con TailwindCSS         | 20 minutos       |
| Lógica AJAX e integración final  | 20 minutos       |
| **Total aproximado**             | **1 hora 25 min** |

---

✅ Revisión completa del módulo: funcional, validado y documentado.
