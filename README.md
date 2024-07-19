# Mi Jardín

**Mi Jardín** es un sistema de inventario diseñado para almacenar y gestionar plantas. Este proyecto permite a los usuarios registrar, visualizar y organizar su colección de plantas de manera eficiente.

## Características Principales

- Registro de nuevas plantas con detalles como nombre, tipo y fecha de agregado.
- Visualización de la colección de plantas en una interfaz amigable.
- Edición y eliminación de registros de plantas.
- Estadísticas básicas sobre la colección de plantas.

## Tecnologías Utilizadas

- **Laravel**: Framework PHP para el desarrollo backend.
- **Tailwind CSS**: Framework de CSS para el diseño de la interfaz.
- **Vite**: Herramienta de construcción para el desarrollo frontend.
- **MySQL**: Sistema de gestión de bases de datos relacional.

## Instalación y Configuración

1. Clona el repositorio:
    ```sh
    git clone https://github.com/tu-usuario/mi-jardin-inventario.git
    ```
2. Navega al directorio del proyecto:
    ```sh
    cd mi-jardin-inventario
    ```
3. Instala las dependencias:
    ```sh
    composer install
    npm install
    ```
4. Configura tu archivo `.env` con la información de tu base de datos y otras configuraciones necesarias.
5. Genera la clave de la aplicación:
    ```sh
    php artisan key:generate
    ```
6. Migra la base de datos:
    ```sh
    php artisan migrate
    ```
7. Compila los assets frontend:
    ```sh
    npm run dev
    ```

## Uso

- Accede a la aplicación en tu navegador:
    ```
    http://localhost:8000
    ```
- Usa la interfaz para agregar, visualizar, editar y eliminar plantas de tu inventario.

## Contribuir

¡Las contribuciones son bienvenidas! Si deseas contribuir, por favor sigue estos pasos:
1. Haz un fork del repositorio.
2. Crea una nueva rama (`git checkout -b feature/nueva-funcionalidad`).
3. Realiza tus cambios y haz commits (`git commit -m 'Agregar nueva funcionalidad'`).
4. Envía tus cambios a la rama principal (`git push origin feature/nueva-funcionalidad`).
5. Crea un Pull Request.

## Licencia

Este proyecto está licenciado bajo la Licencia MIT - mira el archivo [LICENSE](LICENSE) para más detalles.
