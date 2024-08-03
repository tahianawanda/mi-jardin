# Mi Jardín

# Mi Jardín: Gestión de Plantas

**Mi Jardín** es una aplicación para la gestión de plantas que permite a los usuarios registrar, visualizar, editar y eliminar plantas de manera intuitiva. Además, ofrece una serie de características avanzadas para la administración de la colección de plantas y perfiles de usuario personalizados.

## 🚀 **Características Principales**

- **Registro de Nuevas Plantas**: Agrega plantas con detalles completos como nombre, tipo, fecha de agregado y una galería de fotos asociadas.
- **Visualización Amigable**: Consulta y visualiza la colección de plantas en una interfaz intuitiva, con imágenes representativas para cada planta.
- **Edición y Eliminación**: Modifica o elimina registros de plantas fácilmente, con todas las acciones registradas en un historial detallado.
- **Historial de Plantas**: Mantén un seguimiento completo de todas las acciones realizadas en las plantas, incluyendo creaciones, ediciones y eliminaciones.
- **Estadísticas Básicas**: Obtén análisis básicos sobre la colección de plantas, como el número total de plantas y distribución por tipo.

## 👤 **Perfil de Usuario**

- **Foto de Perfil**: Personaliza tu cuenta con una foto de perfil que refleje tu identidad.
- **Detalles Personales**: Completa y actualiza tu información personal, incluyendo ubicación, biografía y enlaces a tus redes sociales como Instagram, GitHub y sitio web.
- **Historial del Usuario**: Visualiza un historial completo de tus acciones relacionadas con las plantas, incluyendo la creación, edición y eliminación de registros.
- **Fotos de Plantas**: Agrega y gestiona una galería de fotos para cada planta registrada, mejorando la visualización y seguimiento de tu colección.

## 📜 **Requisitos**

- PHP 7.3 o superior
- Laravel 8 o superior
- Base de datos MySQL o compatible
- Servidor web compatible (Apache, Nginx, etc.)

## Tecnologías Utilizadas

- **Laravel**: Framework PHP para el desarrollo backend.
- **Tailwind CSS**: Framework de CSS para el diseño de la interfaz.
- **Vite**: Herramienta de construcción para el desarrollo frontend.
- **MySQL**: Sistema de gestión de bases de datos relacional.

## ⚙️ Instalación y Configuración

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


## Licencia

Este proyecto está licenciado bajo la Licencia MIT - mira el archivo [LICENSE](LICENSE) para más detalles.
