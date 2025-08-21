# 🚀 Nisya Laravel + Docker Setup  

Halo bestie! 🎉 Ini project Laravel lo bisa langsung gas jalan di **Linux / Windows / Mac** pake **Docker**.  
Gak perlu ribet install PHP, Composer, MySQL manual lagi. Semua udah di-bundle 🍱.  

---

## 📦 Apa aja yang lo butuhin?
1. **Docker** (install [Docker Desktop](https://www.docker.com/products/docker-desktop/))  
   - Kalo Windows, pastiin **WSL2** udah nyala (biasanya otomatis kok waktu install Docker Desktop).  
2. **Git** (opsional, kalo lo clone dari repo).  

---

## 🛠️ Cara make

### 1. Ambil project
- Kalo zip: ekstrak aja  
- Kalo git clone:
  ```bash
  git clone <link_repo.git>
  cd nisya

### 2. Bikin file .env
Copy .env.example jadi .env

Windows:
```powershell
copy .env.example .env
```

Linux / Mac:
```bash
cp .env.example .env
```
### 3. Jalanin Docker
```bash
docker compose up -d
```
### Migrate Database
```bash
docker compose exec app php artisan migrate
```

### 5. Akses Hasilnya di:
```bash
http://localhost:8100/
```
