# Jain Agro Industries - B2B Web Platform

Welcome to the repository for the flagship web platform of **Jain Agro Industries** (jainagroindustries.in). This project is a premium, high-performance B2B agricultural platform designed to showcase the brand's heritage, product catalog, and dynamic pricing.

## 🚀 Tech Stack

**Backend & Admin:**
* [Laravel 12](https://laravel.com) - Core backend framework
* [Filament PHP (v3)](https://filamentphp.com) - Premium Admin Dashboard
* MySQL (Hostinger Remote Database)

**Frontend:**
* [Tailwind CSS](https://tailwindcss.com) - Utility-first styling (Warm White, Deep Leaf Green, Metallic Gold)
* [Alpine.js](https://alpinejs.dev) - Lightweight JavaScript interactivity
* [GSAP](https://greensock.com/gsap/) - Scroll-triggered scrollytelling & heritage timeline
* [Swiper.js](https://swiperjs.com/) - Hero sliders and logo carousels
* [Chart.js](https://www.chartjs.org/) - Dynamic product price history visualization

## ⚙️ Local Development Setup

If you are cloning this repository for local development, follow these steps:

1. Clone the repo: `git clone [your-repo-link]`
2. Install PHP dependencies: `composer install`
3. Install Node dependencies: `npm install`
4. Copy the environment file: `cp .env.example .env`
5. Generate application key: `php artisan key:generate`
6. Connect your local `.env` to the remote database.
7. Start the local server: `php artisan serve`
8. Compile frontend assets: `npm run dev`

## 📊 Features

* **Dynamic Pricing Engine:** A custom Filament admin module allowing the business owner to input weekly prices, which automatically updates historical line graphs on the frontend.
* **Scrollytelling:** Immersive GSAP-powered scrolling experience detailing the agricultural process.
* **Heritage Timeline:** Horizontal scrolling timeline anchoring the "About Us" page.