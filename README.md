# Proyecto de Gestión de Productos

## Descripción

Este proyecto es una aplicación de gestión de productos desarrollada con Laravel. Permite a los usuarios agregar, editar y eliminar productos, con una interfaz moderna y estilizada. 

## Estructura del Proyecto

- **Backend**: Laravel para la gestión del servidor y la lógica de negocio.
- **Frontend**: HTML, CSS y JavaScript para la interfaz de usuario.
- **Base de Datos**: MySQL para el almacenamiento de datos.

## Instalación

1. Clona el repositorio:

    ```bash
    git clone https://github.com/tu_usuario/tu_repositorio.git
    ```

2. Navega al directorio del proyecto:

    ```bash
    cd tu_repositorio
    ```

3. Instala las dependencias:

    ```bash
    composer install
    ```

4. Configura el archivo de entorno:

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

5. Configura la base de datos en el archivo `.env` con tus credenciales de MySQL.

6. Ejecuta las migraciones para crear las tablas en la base de datos:

    ```bash
    php artisan migrate
    ```

7. (Opcional) Ejecuta el seeder para agregar datos de prueba:

    ```bash
    php artisan db:seed
    ```

8. Inicia el servidor de desarrollo:

    ```bash
    php artisan serve
    ```

## Rutas

- **Lista de Productos**: `/products`
- **Agregar Producto**: `/products/create`
- **Editar Producto**: `/products/{id}/edit`

## Funcionalidades

- **Agregar Producto**: Permite agregar un nuevo producto a la base de datos con nombre y precio.
- **Editar Producto**: Permite editar los detalles de un producto existente.
- **Eliminar Producto**: Permite eliminar un producto de la base de datos.
- **Validaciones**: Asegura que los campos de nombre y precio sean requeridos y correctos.

## Estilos

- **Botones**:
  - **Agregar**: Un botón estilizado con un gradiente de colores.
  - **Actualizar**: Un botón estilizado similar al de agregar.
  - **Regresar**: Un botón secundario alineado a la derecha.

  ```css
  /* Estilo de botón personalizado */
  .btn {
    --border-color: linear-gradient(-45deg, #ffae00, #7e03aa, #00fffb);
    --border-width: 0.125em;
    --curve-size: 0.5em;
    --blur: 30px;
    --bg: #080312;
    --color: #afffff;
    color: var(--color);
    cursor: pointer;
    position: relative;
    isolation: isolate;
    display: inline-grid;
    place-content: center;
    padding: 0.5em 1.5em;
    font-size: 17px;
    border: 0;
    text-transform: uppercase;
    box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.6);
    clip-path: polygon(
      /* Top-left */ 0% var(--curve-size),
      var(--curve-size) 0,
      /* top-right */ 100% 0,
      100% calc(100% - var(--curve-size)),
      /* bottom-right 1 */ calc(100% - var(--curve-size)) 100%,
      /* bottom-right 2 */ 0 100%
    );
    transition: color 250ms;
  }

  .btn::after,
  .btn::before {
    content: "";
    position: absolute;
    inset: 0;
  }

  .btn::before {
    background: var(--border-color);
    background-size: 300% 300%;
    animation: move-bg7234 5s ease infinite;
    z-index: -2;
  }

  @keyframes move-bg7234 {
    0% {
      background-position: 31% 0%;
    }

    50% {
      background-position: 70% 100%;
    }

    100% {
      background-position: 31% 0%;
    }
  }

  .btn::after {
    background: var(--bg);
    z-index: -1;
    clip-path: polygon(
      /* Top-left */ var(--border-width)
        calc(var(--curve-size) + var(--border-width) * 0.5),
      calc(var(--curve-size) + var(--border-width) * 0.5) var(--border-width),
      /* top-right */ calc(100% - var(--border-width)) var(--border-width),
      calc(100% - var(--border-width))
        calc(100% - calc(var(--curve-size) + var(--border-width) * 0.5)),
      /* bottom-right 1 */
        calc(100% - calc(var(--curve-size) + var(--border-width) * 0.5))
        calc(100% - var(--border-width)),
      /* bottom-right 2 */ var(--border-width) calc(100% - var(--border-width))
    );
    transition: clip-path 500ms;
  }

  .btn:where(:hover, :focus)::after {
    clip-path: polygon(
      /* Top-left */ calc(100% - var(--border-width))
        calc(100% - calc(var(--curve-size) + var(--border-width) * 0.5)),
      calc(100% - var(--border-width)) var(--border-width),
      /* top-right */ calc(100% - var(--border-width)) var(--border-width),
      calc(100% - var(--border-width))
        calc(100% - calc(var(--curve-size) + var(--border-width) * 0.5)),
      /* bottom-right 1 */
        calc(100% - calc(var(--curve-size) + var(--border-width) * 0.5))
        calc(100% - var(--border-width)),
      /* bottom-right 2 */
        calc(100% - calc(var(--curve-size) + var(--border-width) * 0.5))
        calc(100% - var(--border-width))
    );
    transition: 200ms;
  }

  .btn:where(:hover, :focus) {
    color: #fff;
  }
