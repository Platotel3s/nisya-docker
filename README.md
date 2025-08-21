
# 🚀 Laravel + MariaDB with Docker

Project ini menggunakan **Docker** untuk menjalankan aplikasi Laravel dan database **MariaDB**.  
Dengan setup ini, kamu tidak perlu lagi menginstal PHP, Composer, atau MySQL secara manual di host machine.  

---

## 📦 Requirements

Sebelum menjalankan project, pastikan sudah menginstal:

- [Docker](https://docs.docker.com/get-docker/) (Linux, Windows, macOS)
- [Docker Compose](https://docs.docker.com/compose/install/) (biasanya sudah terinstall bersama Docker Desktop)

### 🐧 Linux
Install Docker & Compose:
```bash
sudo apt update
sudo apt install docker.io docker-compose -y
```
Tambahkan user ke group Docker 

```
sudo usermod -aG docker $USER
```
logout & login ulang.


# 🪟 Windows

1. Install Docker Desktop di halaman Resminya
2. Pastikan WSL2 aktif
3. Jalankan Docker Desktop sebelum menjalankan perintah

# 🍎 MacOS 
1. Install Docker Desktop for Mac
2. Jalankan Docker Desktop sebelum menjalankan perintah.
