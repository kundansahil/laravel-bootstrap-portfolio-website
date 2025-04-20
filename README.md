# 📂 Laravel Bootstrap Portfolio Website

[![Live Preview](https://img.shields.io/badge/Live%20Preview-8A2BE2?style=for-the-badge&logo=google-chrome&logoColor=white)](http://kundanportfolio.rf.gd)

---

## 🌐 Laravel Bootstrap Portfolio Website

A sleek and responsive personal portfolio website built with Laravel and Bootstrap. It includes an admin panel to manage content dynamically—such as resume uploads, technologies, education, and more. Perfect for freelancers and developers to showcase their work and receive client inquiries.

---

## 🚀 Features

- Fully responsive portfolio layout  
- Contact form for client communication  
- Admin panel to:
  - Upload latest resume (PDF)
  - Add/update technologies and skills
  - Manage qualifications
- Downloadable resume option  
- SEO-friendly design

---

## 🛠️ Tech Stack

- **Framework:** Laravel  
- **Frontend:** Blade, Bootstrap, jQuery  
- **Database:** MySQL  
- **Authentication:** Laravel Auth  
- **Hosting:** InfinityFree  
- **Tools:** Git, VS Code, FileZilla

---

## 💾 Installation Guide

### 1. Clone the Repository

```bash
git clone https://github.com/kundansahil/laravel-bootstrap-portfolio-website.git
```

Or [Download ZIP](https://github.com/kundansahil/laravel-bootstrap-portfolio-website/archive/refs/heads/main.zip) and extract it.

### 2. Go to Project Directory

```bash
cd laravel-bootstrap-portfolio-website
```

### 3. Setup Environment

```bash
cp .env.example .env
composer install
php artisan key:generate
```

### 4. Configure `.env` File

```env
DB_DATABASE=your_database
DB_USERNAME=root
DB_PASSWORD=
```

Create the database in phpMyAdmin.

### 5. Run Migrations

```bash
php artisan migrate
```

### 6. Launch Development Server

```bash
php artisan serve
```

Open your browser: [http://localhost:8000](http://localhost:8000)

---

## 📌 Admin Panel

Login with your registered credentials to access the dashboard and update resume, skills, or qualifications.

---

## 🤝 Contributing

Found a bug or want to add features? Fork the repo and send a PR 🚀

---

## 📩 Contact

**Developer:** Kundan Sahil  
**Email:** sahilkundan85@gmail.com  
**GitHub:** [@kundansahil](https://github.com/kundansahil)

---

> Designed with ❤️ by Kundan Sahil