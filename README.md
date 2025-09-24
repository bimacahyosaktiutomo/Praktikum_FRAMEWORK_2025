1. **Clone repository**
```bash
git clone https://github.com/username/nama-proyek.git
cd nama-proyek
```

2. **Install dependencies**
```bash
composer install
npm install
```

3. **Salin .env dan generate key**
```bash
cp .env.example .env
php artisan key:generate
```

5. **Migrate Database jika perlu**
```bash
php artisan migrate
```

6. **Run**
```bash
composer run dev
```
