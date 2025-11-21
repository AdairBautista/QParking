# QPARK: Sistema de Gestión de Estacionamientos Inteligentes

**Proyecto:** QPARKING | **Código Interno:** QPARK

Sistema de gestión modular diseñado para la administración eficiente de estacionamientos, tarifas, accesos mediante QR y suscripciones, enfocado en el cumplimiento de regulaciones de calidad (CETAM) y alta escalabilidad en Laravel/Livewire.

## ⚙️ Stack Tecnológico

Este proyecto sigue una arquitectura Modular basada en **Laravel MVC** (Model-View-Controller) con un enfoque en interactividad Full-Stack a través de Livewire.

| Componente | Tecnología | Versión Estándar (MP-V3.0) |
| :--- | :--- | :--- |
| **Backend** | Laravel Framework | [cite_start]12.x [cite: 156] |
| **Lenguaje** | PHP | [cite_start]8.2.x [cite: 161] |
| **Frontend UI** | Blade + Bootstrap 5 | [cite_start]5.3.x (Volt Theme) [cite: 177, 578] |
| **Interactividad**| Livewire + Alpine.js | [cite_start]Estándar [cite: 578] |
| **DB Design** | MySQL / PostgreSQL | [cite_start]Modelado por MBD-V5.0 [cite: 149] |


### **Guía de Instalación Rápida**

Información esencial para que cualquier desarrollador se ponga en marcha.

```markdown
## 🚀 Despliegue Local (Development)

Sigue estos pasos para poner a correr el proyecto localmente, asumiendo que tienes PHP 8.2+ y Composer/Node instalados[cite: 161, 164, 168]:

1.  **Clonar el Repositorio:**
    ```bash
    git clone [URL_DEL_REPOSITORIO] QParking
    cd QParking
    ```
2.  **Configuración de Entorno:**
    ```bash
    cp .env.example .env
    # Edita el archivo .env con las credenciales de tu base de datos.
    php artisan key:generate
    ```
3.  **Instalar Dependencias:**
    ```bash
    composer install
    npm install
    ```
4.  **Base de Datos y Seeders:**
    ```bash
    php artisan migrate --seed
    ```
5.  **Compilar y Levantar el Servidor:**
    ```bash
    npm run dev  # Para desarrollo y vigilancia de cambios en CSS/JS
    php artisan serve
    ```
El sistema estará disponible en `http://127.0.0.1:8000/`.

Nota: Lo arreglare