# 📘 Manual Completo de Laravel (Nivel Básico–Intermedio)

Este manual está pensado para aprender **Laravel desde cero**, entendiendo cómo funciona y cómo crear una aplicación web básica paso a paso.

---

## 📌 1. ¿Qué es Laravel?

Laravel es un **framework PHP** para crear aplicaciones web modernas siguiendo el patrón **MVC (Modelo–Vista–Controlador)**.

### Ventajas principales

* Sintaxis clara y elegante
* Organización del proyecto
* Seguridad integrada
* Sistema de rutas, vistas y controladores
* ORM (Eloquent) para bases de datos

---

## 🧰 2. Requisitos del sistema

Antes de empezar necesitas:

* PHP >= 8.2
* Composer
* Servidor web (Apache, Nginx o el servidor integrado)
* Base de datos (MySQL, PostgreSQL, SQLite, etc.)

---

## ⚙️ 3. Instalación de Laravel

### Crear un nuevo proyecto

```bash
composer create-project laravel/laravel proyecto
```

Entrar al proyecto:

```bash
cd proyecto
```

Iniciar servidor:

```bash
php artisan serve
```

Abrir en el navegador:

```
http://localhost:8000
```

---

## 📁 4. Estructura del proyecto

```
app/            → Lógica de la aplicación
routes/         → Rutas web y API
resources/      → Vistas y assets
public/         → Punto de entrada (index.php)
config/         → Configuración
.env            → Variables de entorno
artisan         → CLI de Laravel
```

---

## 🌐 5. Rutas (Routes)

Archivo principal:

```
routes/web.php
```

### Ruta básica

```php
Route::get('/', function () {
    return 'Hola Laravel';
});
```

### Ruta que devuelve una vista

```php
Route::get('/inicio', function () {
    return view('inicio');
});
```

---

## 🎨 6. Vistas (Blade)

Las vistas están en:

```
resources/views
```

### Crear una vista

```bash
resources/views/inicio.blade.php
```

```html
<!DOCTYPE html>
<html>
<head>
    <title>Inicio</title>
</head>
<body>
    <h1>Bienvenido a Laravel</h1>
</body>
</html>
```

---

## 🧩 7. Blade Template Engine

### Mostrar variables

```blade
<h1>Hola {{ $nombre }}</h1>
```

### Condicionales

```blade
@if($edad >= 18)
    <p>Mayor de edad</p>
@else
    <p>Menor de edad</p>
@endif
```

### Bucles

```blade
@foreach($usuarios as $usuario)
    <li>{{ $usuario }}</li>
@endforeach
```

---

## 🧠 8. Controladores

Crear controlador:

```bash
php artisan make:controller UsuarioController
```

Ejemplo:

```php
class UsuarioController extends Controller
{
    public function index()
    {
        return view('usuarios', ['usuarios' => ['Ana', 'Juan']]);
    }
}
```

Ruta:

```php
Route::get('/usuarios', [UsuarioController::class, 'index']);
```

---

## 🗄️ 9. Base de Datos y .env

Archivo `.env`:

```env
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

---

## 🧱 10. Migraciones

Crear migración:

```bash
php artisan make:migration create_usuarios_table
```

Ejemplo:

```php
Schema::create('usuarios', function (Blueprint $table) {
    $table->id();
    $table->string('nombre');
    $table->timestamps();
});
```

Ejecutar:

```bash
php artisan migrate
```

---

## 🧬 11. Modelos (Eloquent)

Crear modelo:

```bash
php artisan make:model Usuario
```

Ejemplo:

```php
class Usuario extends Model
{
    protected $fillable = ['nombre'];
}
```

---

## 🔄 12. CRUD básico

### Crear

```php
Usuario::create(['nombre' => 'Carlos']);
```

### Leer

```php
$usuarios = Usuario::all();
```

### Actualizar

```php
$usuario->update(['nombre' => 'Pedro']);
```

### Eliminar

```php
$usuario->delete();
```

---

## 🔐 13. Formularios y CSRF

```blade
<form method="POST" action="/guardar">
    @csrf
    <input type="text" name="nombre">
    <button>Guardar</button>
</form>
```

---

## 🛡️ 14. Middleware

Crear middleware:

```bash
php artisan make:middleware AuthMiddleware
```

Asignar a ruta:

```php
Route::get('/admin', function () {
    return 'Admin';
})->middleware('auth');
```

---

## 🧪 15. Artisan (comandos útiles)

```bash
php artisan route:list
php artisan migrate
php artisan make:model
php artisan make:controller
php artisan cache:clear
```

---

## 🚀 16. Despliegue (resumen)

* Configurar `.env`
* Ejecutar migraciones
* Dar permisos a `storage/`
* Configurar servidor

---

## 📌 17. Buenas prácticas

* Usar controladores
* No poner lógica en las vistas
* Validar datos
* Usar migraciones
* Seguir MVC

---

