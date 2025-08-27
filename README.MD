# Panduan Setup Project

## Backend (Laravel API)

1. **Clone Repository**

   ```bash
   git clone <repository-url>
   cd backend
   ```

2. **Install Dependencies**

   ```bash
   composer install
   ```

3. **Copy & Edit Environment File**

   ```bash
   cp .env.example .env
   ```

   - Edit `.env` sesuai konfigurasi database Anda.

4. **Generate Key**

   ```bash
   php artisan key:generate
   ```

5. **Migrate & Seed Database**

   ```bash
   php artisan migrate --seed
   ```

6. **Run Server**
   ```bash
   php artisan serve
   ```

## Frontend

1. **Buka Folder Frontend di VSCode**

2. **Install Live Server Extension**

   - Cari dan install ekstensi **Live Server** dari marketplace VSCode.

3. **Jalankan Live Server**
   - Klik kanan pada file `index.html` lalu pilih **Open with Live Server**.

---

**Catatan:**  
Pastikan backend dan frontend berjalan di port yang berbeda agar tidak terjadi konflik.
