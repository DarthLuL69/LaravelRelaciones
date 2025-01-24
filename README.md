
# 1. Clonar el repositorio

```sh
git clone https://github.com/tu-usuario/LaravelRelaciones.git
cd LaravelRelaciones
```

# 2. Ejecutar las migraciones y los seeders

php artisan migrate:fresh --seed


## Estructura del Proyecto

# Modelos

- `User`: Representa a un usuario.
- `Profile`: Representa el perfil de un usuario (relación 1:1 con `User`).
- `Post`: Representa un post creado por un usuario (relación 1:N con `User`).

# Migraciones

- `create_users_table`: Crea la tabla `users`.
- `create_profiles_table`: Crea la tabla `profiles` con una clave foránea `user_id` que referencia a `users`.
- `create_posts_table`: Crea la tabla `posts` con una clave foránea `user_id` que referencia a `users`.

# Seeders

- `DatabaseSeeder`: Crea 10 usuarios con perfiles y posts aleatorios utilizando Faker.

