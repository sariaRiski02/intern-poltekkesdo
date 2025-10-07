#!/bin/bash
# ===========================================
# Laravel Deployment Script - by Rizky
# ===========================================

echo "🚀 Starting Laravel Deployment..."

# 1. Pull latest code
echo "🔄 Pulling latest code from GitHub..."
git pull origin main

# 2. Install composer dependencies
echo "📦 Installing Composer dependencies..."
composer install --no-dev --optimize-autoloader

# 3. Run migrations
echo "🧱 Running database migrations..."
php artisan migrate --force

# 4. Build frontend (Tailwind + Vite)
echo "🎨 Building frontend assets..."
npm install
npm run build

# 5. Create storage symlink
echo "🔗 Creating storage symlink..."
php artisan storage:link

# 6. Clear & rebuild Laravel cache
echo "🧹 Clearing and optimizing Laravel cache..."
php artisan optimize:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache

# 7. Fix permissions
echo "🔐 Setting correct file permissions..."
sudo chown -R www-data:www-data /home/polkesdo/intern-poltekkesdo/storage
sudo chown -R www-data:www-data /home/polkesdo/intern-poltekkesdo/bootstrap/cache
sudo chmod -R 775 /home/polkesdo/intern-poltekkesdo/storage
sudo chmod -R 775 /home/polkesdo/intern-poltekkesdo/bootstrap/cache

# 8. Restart PHP-FPM & Nginx
echo "🔁 Restarting PHP and Nginx..."
sudo systemctl restart php8.3-fpm
sudo systemctl reload nginx

echo "✅ Deployment finished successfully!"
