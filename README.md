# E-shop se zbraněmi

Tento projekt je jednoduchý e-shop se zbraněmi vytvořený pomocí frameworku Laravel. Umožňuje spravovat kategorie a produkty (zbraně) a zahrnuje základní funkcionalitu pro přidávání, prohlížení a správu těchto položek.

## Požadavky

Před spuštěním projektu se ujistěte, že máte nainstalované následující:

- PHP (verze 8.0 nebo novější)
- Composer
- MySQL nebo jiný databázový server

## Instalace

1. **Klonování repozitáře**

   Nejprve si zkopírujte repozitář do vašeho místního počítače:

   ```
   git clone https://github.com/wannabe20/laravel_projekt_skupina_uz_vazne.git
   ```
Nainstalujte závislosti
Přejděte do složky projektu a nainstalujte všechny závislosti pomocí Composeru:

```
cd název_repozitáře
composer install
```
Konfigurace prostředí

Zkopírujte soubor .env.example do .env pomocí příkazového řádku:

```
copy .env.example .env
```
Ujistěte se, že máte správně nastavené připojení k databázi (v souboru .env upravte hodnoty DB_DATABASE, DB_USERNAME a DB_PASSWORD podle vaší lokální MySQL databáze).

Generování aplikačního klíče

Spusťte následující příkaz pro generování aplikačního klíče:

```
php artisan key:generate
```
Migrace databáze

Spusťte migrace pro vytvoření potřebných tabulek v databázi:

```
php artisan migrate
```
Načtení počátečních dat

Pokud chcete naplnit databázi počátečními daty (kategorie a zbraně), spusťte následující příkaz:

```
php artisan db:seed --class=GunStoreSeeder
```
Spuštění serveru

Spusťte vestavěný server Laravelu příkazem:
Jeden napište do jednoho terminálu a druhý do dalšího
```
npm run dev
php artisan serve
```
Aplikaci nyní můžete navštívit na adrese http://localhost:8000.

Created by: Lukáš Prchlík, Darien Kalist, Šimon Čada, Simon Melichar, David Krupík




About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

    Simple, fast routing engine.
    Powerful dependency injection container.
    Multiple back-ends for session and cache storage.
    Expressive, intuitive database ORM.
    Database agnostic schema migrations.
    Robust background job processing.
    Real-time event broadcasting.

Laravel is accessible, powerful, and provides tools required for large, robust applications.
Learning Laravel

Laravel has the most extensive and thorough documentation and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the Laravel Bootcamp, where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, Laracasts can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.
