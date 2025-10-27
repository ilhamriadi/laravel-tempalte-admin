# Laravel Bootstrap Admin Dashboard Template

[![License](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE)
[![Laravel](https://img.shields.io/badge/Laravel-12.x-red.svg)](https://laravel.com/)
[![PHP](https://img.shields.io/badge/PHP-8.2+-blue.svg)](https://php.net/)
[![Docker](https://img.shields.io/badge/Docker-Ready-blue.svg)](https://docker.com/)

Template Admin Dashboard yang modern dan responsif dibangun dengan Laravel 12 dan Bootstrap 5. Template ini sudah termasuk fitur login, manajemen user, dan siap untuk dikembangkan lebih lanjut.

## 🚀 Fitur Utama

- ✅ **Laravel 12** dengan PHP 8.2+
- ✅ **Bootstrap 5** Framework CSS Modern
- ✅ **Docker** Ready untuk deployment mudah
- ✅ **Admin Authentication** dengan Laravel UI
- ✅ **Responsive Design** untuk Desktop, Tablet, dan Mobile
- ✅ **Dark/Light Mode** Support
- ✅ **MySQL Database** dengan Migrations
- ✅ **User Management** System
- ✅ **Role-based Access** Control
- ✅ **Dashboard Analytics**
- ✅ **Clean Code** Architecture

## 📋 Prerequisites

- **PHP** 8.2 atau lebih tinggi
- **Composer** terbaru
- **MySQL** 8.0+ atau **Docker** & **Docker Compose**
- **Git** untuk clone repository
- **Node.js** & **NPM** (optional, untuk asset compilation)

## 🛠️ Instalasi

### Metode 1: Docker (Direkomendasikan)

1. **Clone Repository**
   ```bash
   git clone https://github.com/ilhamriadi/laravel-tempalte-admin.git
   cd laravel-tempalte-admin
   ```

2. **Konfigurasi Environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

3. **Jalankan dengan Docker**
   ```bash
   docker-compose up -d --build
   ```

4. **Install Dependencies**
   ```bash
   docker-compose exec app composer install
   ```

5. **Run Database Migrations**
   ```bash
   docker-compose exec app php artisan migrate --force
   ```

6. **Create Admin User**
   ```bash
   docker-compose exec app php artisan tinker --execute="
   User::create([
       'name' => 'Admin',
       'email' => 'admin@admin.com',
       'password' => Hash::make('password'),
       'user_id' => 'ADM001',
       'email_verified_at' => now(),
       'status' => 'Active',
       'role_name' => 'Administrator'
   ]);
   "
   ```

7. **Akses Aplikasi**
   - URL: `http://localhost:8080`
   - Email: `admin@admin.com`
   - Password: `password`

### Metode 2: Manual Installation

1. **Clone Repository**
   ```bash
   git clone https://github.com/ilhamriadi/laravel-tempalte-admin.git
   cd laravel-tempalte-admin
   ```

2. **Install Dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Konfigurasi Environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Setup Database**
   - Buat database di MySQL/MariaDB
   - Update `.env` file dengan kredensial database

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=laravel_admin_template
   DB_USERNAME=root
   DB_PASSWORD=your_password
   ```

5. **Run Migrations**
   ```bash
   php artisan migrate
   ```

6. **Create Admin User**
   ```bash
   php artisan tinker
   >>> User::create([
   ...     'name' => 'Admin',
   ...     'email' => 'admin@admin.com',
   ...     'password' => Hash::make('password'),
   ...     'user_id' => 'ADM001',
   ...     'email_verified_at' => now(),
   ...     'status' => 'Active',
   ...     'role_name' => 'Administrator'
   ... ]);
   ```

7. **Link Storage**
   ```bash
   php artisan storage:link
   ```

8. **Compile Assets**
   ```bash
   npm run build
   ```

9. **Start Development Server**
   ```bash
   php artisan serve
   ```

## 🐳 Docker Configuration

### Services yang Dijalankan:

- **laravel-app** (PHP 8.2-FPM)
- **laravel-webserver** (Nginx pada port 8080)
- **laravel-db** (MySQL 8.0 pada port 3307)
- **laravel-redis** (Redis pada port 6379)

### Docker Commands:

```bash
# Build dan start containers
docker-compose up -d --build

# Stop containers
docker-compose down

# View logs
docker-compose logs -f

# Execute commands di app container
docker-compose exec app php artisan

# Restart containers
docker-compose restart
```

## 📁 Struktur Project

```
laravel-tempalte-admin/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   └── Middleware/
│   ├── Models/
│   │   └── User.php
│   └── Providers/
├── bootstrap/
├── config/
├── database/
│   ├── migrations/
│   └── seeders/
├── docker-compose.yml
├── Dockerfile
├── nginx/
│   └── conf.d/
│       └── default.conf
├── public/
│   ├── assets/
│   └── index.php
├── resources/
│   ├── views/
│   └── js/
├── routes/
│   ├── web.php
│   └── api.php
├── storage/
├── tests/
└── vendor/
```

## 🔧 Konfigurasi Environment

### Default .env Configuration:

```env
APP_NAME="Laravel Admin Dashboard"
APP_ENV=local
APP_KEY=base64:your_app_key_here
APP_DEBUG=true
APP_URL=http://localhost:8080

DB_CONNECTION=mysql
DB_HOST=mysql  # Gunakan 127.0.0.1 untuk manual installation
DB_PORT=3306
DB_DATABASE=laravel_admin_template
DB_USERNAME=laravel
DB_PASSWORD=

CACHE_DRIVER=database
FILESYSTEM_DISK=local
QUEUE_CONNECTION=database
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```

## 👥 Default Login Credentials

- **Email:** `admin@admin.com`
- **Password:** `password`
- **Role:** Administrator

## 🚀 Deployment

### Deploy ke VPS/Production:

1. **Clone Repository**
   ```bash
   git clone https://github.com/ilhamriadi/laravel-tempalte-admin.git
   cd laravel-tempalte-admin
   ```

2. **Install Dependencies**
   ```bash
   composer install --optimize-autoloader --no-dev
   ```

3. **Setup Environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Setup Production Database**
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   php artisan migrate --force
   ```

5. **Optimize Application**
   ```bash
   php artisan optimize
   php artisan storage:link
   ```

6. **Setup Web Server (Nginx/Apache)**

   **Nginx Configuration:**
   ```nginx
   server {
       listen 80;
       server_name your-domain.com;
       root /path/to/your/project/public;
       index index.php;

       location / {
           try_files $uri $uri/ /index.php?$query_string;
       }

       location ~ \.php$ {
           fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
           fastcgi_index index.php;
           include fastcgi_params;
           fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
       }
   }
   ```

7. **Setup SSL Certificate (Recommended)**
   ```bash
   # Gunakan Let's Encrypt
   certbot --nginx -d your-domain.com
   ```

### Security Best Practices:

1. **Set APP_ENV ke `production`**
2. **Set APP_DEBUG ke `false`**
3. **Gunakan strong password untuk database**
4. **Setup firewall**
5. **Backup database secara rutin**
6. **Update dependencies secara berkala**

## 🤝 Cara Berkontribusi

1. Fork repository
2. Buat branch baru (`git checkout -b fitur-baru`)
3. Commit perubahan (`git commit -am 'Tambah fitur baru'`)
4. Push ke branch (`git push origin fitur-baru`)
5. Buat Pull Request

## 📝 Customization

### Menambah Halaman Baru:

1. **Buat Controller**
   ```bash
   php artisan make:Controller PageController
   ```

2. **Tambah Route**
   ```php
   // routes/web.php
   Route::get('/halaman-baru', [PageController::class, 'index']);
   ```

3. **Buat View**
   ```php
   // resources/views/page/index.blade.php
   @extends('layouts.app')

   @section('content')
   <div class="container">
       <h1>Halaman Baru</h1>
   </div>
   @endsection
   ```

### Modifikasi Theme:

- **CSS:** `resources/css/`
- **JavaScript:** `resources/js/`
- **Views:** `resources/views/`
- **Assets:** `public/assets/`

## 🐞 Troubleshooting

### Common Issues:

1. **Database Connection Failed**
   - Pastikan MySQL service running
   - Check kredensial di .env file
   - Verify database sudah dibuat

2. **Permission Denied**
   ```bash
   chmod -R 775 storage bootstrap/cache
   chown -R www-data:www-data storage bootstrap/cache
   ```

3. **Docker Build Failed**
   ```bash
   # Clear Docker cache
   docker system prune -a
   docker-compose down
   docker-compose up -d --build
   ```

4. **404 Not Found**
   - Check nginx configuration
   - Restart nginx service
   - Verify document root path

5. **Session/Cookie Issues**
   - Clear browser cache
   - Run `php artisan config:cache`
   - Check session configuration

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 📞 Support

Jika Anda mengalami masalah atau memiliki pertanyaan:

1. Check [Issues](https://github.com/ilhamriadi/laravel-tempalte-admin/issues) page
2. Buat issue baru jika diperlukan
3. Hubungi melalui email: your-email@example.com

## 🙏 Credit

- [Laravel](https://laravel.com/) - The PHP Framework
- [Bootstrap](https://getbootstrap.com/) - CSS Framework
- [Font Awesome](https://fontawesome.com/) - Icon Library
- [StarCode](https://starcodex.com/) - Template Design

---

⭐ **Star this repository if it helps you!**