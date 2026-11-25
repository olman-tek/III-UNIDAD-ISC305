# III-UNIDAD-ISC305

API REST CRUD de personas con Laravel y MySQL. Práctica de ISC-305 Programación Web.

**Autor:** Olman Fernando Moreno Izaguirre

## Requisitos

- PHP 8.3 o superior (con la extensión `pdo_mysql`)
- Composer 2
- Git
- MySQL activo
- Postman

## Estructura

- `backend/`: API en Laravel 13.
- `postman/`: colección de Postman exportada.

## Configuración de MySQL

Crear la base de datos:

```sql
CREATE DATABASE isc305_unidad3
CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

Copiar `backend/.env.example` como `backend/.env` y ajustar estas claves con los datos de tu MySQL local (no publicar el `.env`):

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=isc305_unidad3
DB_USERNAME=TU_USUARIO_MYSQL
DB_PASSWORD=TU_CLAVE_MYSQL
```

## Instalación y ejecución

Desde la carpeta `backend`:

```
composer install
php artisan key:generate
php artisan migrate
php artisan serve
```

La API queda en `http://127.0.0.1:8000`.

## Modelo Persona

| Campo | Tipo | Regla |
|---|---|---|
| id | entero | automático |
| dni | texto | 13 dígitos, único |
| nombre | texto | hasta 100