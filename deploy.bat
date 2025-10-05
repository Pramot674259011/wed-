@echo off
echo Deploying the project...

echo Creating storage link...
php artisan storage:link

echo Setting permissions...
chmod -R 775 storage
chmod -R 775 bootstrap/cache

echo Deployment completed!
echo Make sure to copy site_content.json and uploads folder to storage/app/ if needed.

pause