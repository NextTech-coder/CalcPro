# 🧮 Calculators Platform

A web platform that allows users to create, use, and share calculators online.
The project includes user profiles, calculator management, embedding capabilities, and an admin panel for full control.

---

## ✨ Features

- 👤 **User Profiles** – Personal accounts with saved calculators
- 🧠 **Calculators** – Various built-in calculators with the ability to create and save
- 💾 **Save Results** – Store and manage calculator results
- 🔗 **Share Results** – Share your results with others via a link
- 🌍 **Embeddable Widgets** – Easily embed calculators on external websites
- 🚨 **Error Reporting** – Users can send error reports directly from the app
- 🛠️ **Admin Panel** – Full control over calculators, users, and reports [Moonshine](https://moonshine-laravel.com/)
- 🔐 **Registration / Authentication** – Secure user access

---

## 🧰 Tech Stack

- ⚙️ **Framework**: [Laravel 12.32.2](https://laravel.com/)
- 💻 **Frontend**: Vanilla JavaScript (ES6+)
- 🎨 **Icons**: [FontAwesome v5](https://fontawesome.com/v5/)

---

## 🧑‍💻 Local Development

This project uses **[Laravel Sail](https://laravel.com/docs/sail)** for local development.

### 🚀 Setup Instructions

1. **Clone the repository:**
   ```bash
   git clone https://github.com/your-username/your-repo.git
   cd your-repo
   ```
2. **Install dependencies:**
   ```bash
    composer install
    npm install
   ```
3. **Copy environment file:**
   ```bash
    cp .env.example .env
   ```
4. **Configure environment variables in .env file (database, app URL, etc.)**
5. **Start Laravel Sail:**
   ```bash
    ./vendor/bin/sail up -d
   ```
6. **Run migrations:**
   ```bash
    ./vendor/bin/sail artisan migrate
   ```
7. **Generate application key:**
   ```bash
    ./vendor/bin/sail artisan key:generate
   ```
