# Langkah-langkah Setup Projek Lokal

1. **Clone Repo**
    ```bash
    git clone https://github.com/Rafitkensugi/sdn4jatilaba.git
    cd sdn4jatilaba
    ```
2. **Install Dependencies**
    ```bash
    npm install
    composer install
    cp .env.example .env
    ```
3. **Edit .env**  
   Buka .env dan edit `DB_DATABASE` ke database lokal.
   lalu jalankan:
    ```bash
    php artisan migrate
    php artisan key:generate
    ```
4. **Jalankan**
    ```bash
    php artisan serve
    npm run dev
    ```
