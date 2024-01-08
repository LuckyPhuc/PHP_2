
1. Mở VS Code, phpMyAdmin

2. Mở terminal(Bấm chuột phải vào thư mục dự án -> Open in Integrated Terminal) chạy lệnh theo thứ tự:
    - cp .env.example .env
    - npm i (cài sẵn nodejs và npm) -> cài các file node_modules
    - composer install (cài sẵn composer) -> cài các thư viện laravel
    - php artisan migrate -> tạo database
3. Chạy lệnh: php artisan key:generate

4. Khởi chạy dự án( mở 2 terminal chạy cùng lúc 2 lệnh dưới)
    - npm run dev
    - php artisan serve
5. Vào URL: 127.0.0.1:8000 -> tạo tài khoản mới, vào link Administrator
