- Chạy php artisan breeze:install (nếu không được thì chạy "composer install" trước)
  
- Nếu bị lỗi server 500 thì kiểm tra xem có file .env không, nếu không có thì tạo file ".env" và cấu hình lại ở phần database trong file .env cho phù hợp với máy của mình:
    "DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=....
    DB_DATABASE=...
    DB_USERNAME=...
    DB_PASSWORD=...."
  
- Chạy map openlayer trước, sau đó dán link map vào thẻ iframe trong file dashboard.blade.php & welcome.blade.php
  
- npm run dev
  
- php artisan serve
