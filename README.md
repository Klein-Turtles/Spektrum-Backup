# ✅ Spektrum Backup – Laravel + Vite + Sass + Bootstrap Setup

![GitHub repo size](https://img.shields.io/github/repo-size/Klein-Turtles/Spektrum-Backup?style=for-the-badge)
![GitHub last commit](https://img.shields.io/github/last-commit/Klein-Turtles/Spektrum-Backup?style=for-the-badge)
![GitHub license](https://img.shields.io/github/license/Klein-Turtles/Spektrum-Backup?style=for-the-badge)

---

## 🧱 Versi Tools yang Digunakan

| Tool            | Versi     |
|-----------------|-----------|
| Laravel         | 11.x      |
| PHP             | 8.2+      |
| Node.js         | v18.x     |
| npm             | v9.x      |
| Vite            | 5.x       |
| Sass            | 1.69.x    |
| Bootstrap       | 5.3.x     |
| Vue (optional)  | 3.x       |

---

## ⚙️ Cara Install Lingkungan

### 1. Install PHP & Composer  
Pastikan versi PHP minimal **8.2** (sesuai Laravel 11)

### 2. Install Node & npm  
Pastikan menggunakan versi yang sesuai tabel di atas.

```bash
node -v
npm -v
```

### 3. Clone Proyek dan Install Dependency

```bash
git clone https://github.com/Klein-Turtles/Spektrum-Backup.git
cd Spektrum-Backup
composer install
npm install
```

### 4. Jalankan Dev Server

```bash
php artisan serve
npm run dev
```

---

## 📁 Struktur Folder Penting

- `resources/sass/` – SCSS custom kamu  
- `resources/js/` – JS/Vue component (jika pakai Vue)  
- `vite.config.js` – Konfigurasi Vite  
- `resources/sass/app.scss` – SCSS utama, gunakan `@import` untuk page/component  

---

## 📦 Contoh Potongan `package.json`

```json
"devDependencies": {
  "bootstrap": "^5.3.2",
  "sass": "^1.69.0",
  "vite": "^5.0.0",
  "laravel-vite-plugin": "^0.8.0"
}
```

---

## 📌 Tips

- Jangan sembarang update `node_modules` atau `package.json` kecuali memang perlu.  
- Untuk jangka panjang, pertimbangkan membungkus proyek dalam Docker (bisa dibantu kalau mau).  
- Gunakan struktur SCSS modular agar scalable dan maintainable.

---

