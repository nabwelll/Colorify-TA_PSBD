# Colorify - Color Generator & Palette Manager

Tugas Akhir Praktikum Sistem Basis Data oleh Kelompok 4 (Kel09 & Kel56)

Colorify adalah aplikasi web modern untuk membuat, mengelola, dan menyimpan palet warna. Dilengkapi dengan color blending engine yang menghasilkan 11 swatch warna dengan teori warna yang akurat.

## Fitur Utama

- 🎨 **Color Generator** - Buat palet warna dengan blending hingga 3 warna
- 📦 **Collection Management** - Kelompokkan palet warna dalam koleksi
- 🎯 **Color Theory** - Lihat warna komplemen, analogous, triadic, dan split
- 💾 **Save Palettes** - Simpan palet ke koleksi (baru atau yang sudah ada)
- 📤 **Export CSS** - Export palet sebagai CSS variables
- 🗑️ **Trash Management** - Pindahkan item ke trash sebelum delete permanen
- 👤 **User Authentication** - Login/Register dan manage profile
- 🔐 **Role-based Access** - Admin untuk manage presets

---

## Persiapan Awal

Pastikan sistem Anda memiliki:

- **PHP** >= 8.2
- **Composer** (untuk PHP dependencies)
- **Node.js** >= 16 dan **npm** (untuk JavaScript/CSS build)
- **MySQL** >= 5.7 atau **MariaDB**
- **Git**

### Rekomendasi Environment

- Menggunakan **Laragon** untuk Windows (sudah include PHP, MySQL, Node)
- Menggunakan **LAMP/LEMP stack** untuk Linux
- Menggunakan **MAMP/VALET** untuk macOS

---

## Instalasi & Setup Local

### 1. Clone Repository

```bash
git clone https://github.com/username/Colorify-TA_PSBD.git
cd Colorify-TA_PSBD
```

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Install Node Dependencies

```bash
npm install
```

### 4. Setup Environment File

Salin file `.env.example` menjadi `.env`:

```bash
cp .env.example .env
```

Lalu edit `.env` dan sesuaikan konfigurasi:

```env
APP_NAME=Colorify
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8000

# Database Configuration
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=colorify
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Generate Application Key

```bash
php artisan key:generate
```

### 6. Buat Database

Buat database MySQL bernama `colorify`:

```sql
CREATE DATABASE colorify;
```

Atau gunakan command MySQL:

```bash
mysql -u root -p -e "CREATE DATABASE colorify;"
```

### 7. Run Database Migrations

```bash
php artisan migrate
```

Ini akan membuat semua tabel yang diperlukan:

- `users` - User authentication
- `collections` - Kelompok palet warna
- `color_palettes` - Data palet warna
- `presets` - Template preset warna
- `preset_templates` - Detail template preset
- `trashes` - Soft delete untuk palet warna

### 8. Build Frontend Assets

```bash
npm run build
```

Untuk development dengan hot reload:

```bash
npm run dev
```

---

## Menjalankan Aplikasi

### Opsi 1: Menggunakan PHP Built-in Server

```bash
php artisan serve
```

Akses aplikasi di: `http://localhost:8000`

### Opsi 2: Menggunakan Laragon

1. Copy project ke folder `C:\laragon\www\`
2. Buka Laragon
3. Klik "Start All"
4. Akses di: `http://colorify-ta_psbd.test`

### Opsi 3: Menggunakan Virtual Host (Nginx/Apache)

Konfigurasi virtual host untuk point ke folder `public/` project.

---

## Struktur Folder

```
Colorify-TA_PSBD/
├── app/
│   ├── Models/              # Database models
│   ├── Http/
│   │   ├── Controllers/     # Application controllers
│   │   ├── Middleware/      # Custom middleware
│   │   └── Requests/        # Form requests
│   ├── Observers/           # Model observers
│   └── Providers/           # Service providers
├── database/
│   ├── migrations/          # Database migrations
│   ├── factories/           # Model factories
│   └── seeders/             # Database seeders
├── resources/
│   ├── views/               # Blade templates
│   ├── css/                 # Stylesheets
│   └── js/                  # JavaScript
├── routes/
│   └── web.php              # Web routes
├── config/                  # Configuration files
├── storage/                 # File storage (uploads, logs)
├── public/                  # Public assets (built CSS/JS)
└── tests/                   # Unit & feature tests
```

---

## Routes & Fitur

### Public Routes

- `GET /` - Color Generator (halaman utama)
- `POST /generate-palette` - Generate palet dari hex color
- `GET /presets` - Lihat preset warna

### Authenticated Routes

- `POST /collections` - Buat koleksi baru
- `GET /collections` - List koleksi user
- `GET /collection/{slug}` - Detail koleksi
- `POST /collections/{id}/palettes` - Simpan palet ke koleksi
- `GET /collections-palettes` - List semua palet user
- `DELETE /collections/{id}/palettes/{id}` - Hapus palet
- `GET /trash` - Trash bin management

### Admin Routes

- `GET /admin/presets` - Manage presets
- `GET /admin/users` - Manage users

---

## Development

### Menjalankan Vite (CSS/JS Watch)

Di terminal terpisah:

```bash
npm run dev
```

Ini akan build ulang CSS/JS secara otomatis ketika ada perubahan file.

### Running Tests

```bash
php artisan test
```

### Database Migration (jika ada perubahan)

```bash
# Rollback semua migrations
php artisan migrate:reset

# Jalankan lagi dari awal
php artisan migrate
```

---

## Troubleshooting

### ❌ Error: "Could not generate palette"

**Solusi:**

1. Pastikan `php artisan serve` berjalan
2. Check folder `storage/logs/` untuk error details
3. Pastikan POST request ke `/generate-palette` tidak di-block

### ❌ Error: Database connection refused

**Solusi:**

1. Pastikan MySQL/MariaDB running
2. Check konfigurasi DB di `.env` (host, port, username, password)
3. Pastikan database `colorify` sudah dibuat

```bash
mysql -u root -p
CREATE DATABASE colorify;
```

### ❌ Error: "Class not found" atau migration error

**Solusi:**

```bash
composer dump-autoload
php artisan cache:clear
php artisan config:clear
```

### ❌ CSS/JS tidak ter-load

**Solusi:**

```bash
npm run build
php artisan serve
```

Jika masih error, cek file di folder `public/build/`.

---

## Environment Variables Penting

```env
APP_NAME=Colorify              # Nama aplikasi
APP_ENV=local                  # Environment (local/production)
APP_DEBUG=true                 # Debug mode (false di production)
APP_URL=http://localhost:8000  # URL aplikasi

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=colorify
DB_USERNAME=root
DB_PASSWORD=

SESSION_DRIVER=database        # Gunakan database untuk sessions
CACHE_STORE=database           # Gunakan database untuk cache
QUEUE_CONNECTION=database      # Queue driver
```

---

## Command Useful

```bash
# Clear all caches
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Optimize performance
php artisan optimize

# Check routes
php artisan route:list

# Tinker (interactive shell)
php artisan tinker

# Tail logs
php artisan tail
```

---

## Contributors

Kelompok 4 (Kel09 & Kel56) - Tugas Akhir PSBD

---

## License

MIT License - lihat file LICENSE untuk detail.
