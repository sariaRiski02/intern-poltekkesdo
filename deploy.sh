#!/bin/bash
# ===========================================
# Laravel Deployment Script - by Rizky Saria
# ===========================================

APP_DIR="/home/polkesdo/intern-poltekkesdo"
WEB_USER="www-data"
PHP_FPM_SERVICE="php8.3-fpm"

echo "🚀 Starting Laravel Deployment..."
cd $APP_DIR || exit 1

# 1. Pull latest code
echo "🔄 Pulling latest code from GitHub..."
git fetch --all
git pull origin main

# 2. Install composer dependencies
echo "📦 Installing Composer dependencies..."
composer install --no-dev --optimize-autoloader

# 3. Run database migrations
echo "🧱 Running database migrations..."
php artisan migrate --force

# 4. Build frontend (Tailwind + Vite)
echo "🎨 Building frontend assets..."
npm ci
npm run build

# 5. Create storage symlink
echo "🔗 Creating storage symlink..."
php artisan storage:link

# 6. Fix permissions before cache
echo "🔐 Fixing permissions..."
sudo chown -R $WEB_USER:$WEB_USER $APP_DIR/storage $APP_DIR/bootstrap/cache
sudo chmod -R 775 $APP_DIR/storage $APP_DIR/bootstrap/cache

# 7. Clear and rebuild Laravel caches safely
echo "🧹 Clearing old caches..."
php artisan optimize:clear
composer dump-autoload

echo "🔁 Rebuilding fresh caches..."
php artisan config:cache
php artisan route:clear
php artisan route:cache
php artisan view:cache

# 8. Verify route integrity
echo "🧭 Checking route list..."
php artisan route:list | head -n 10

# 9. Restart PHP-FPM & Nginx
echo "🔁 Restarting PHP-FPM and Nginx..."
sudo systemctl restart $PHP_FPM_SERVICE
sudo systemctl reload nginx

# 10. Update deployment version (timestamp)
VERSION=$(date +"%Y.%m.%d-%H%M")
sed -i "s/^APP_VERSION=.*/APP_VERSION=$VERSION/" .env 2>/dev/null || echo "APP_VERSION=$VERSION" >> .env
echo "🆕 Updated APP_VERSION to $VERSION"

echo "✅ Deployment finished successfully!"
# ===========================================
