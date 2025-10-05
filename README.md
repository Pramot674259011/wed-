# โปรเจกต์เว็บไซต์สาขาวิชา Software Engineering

โปรเจกต์นี้เป็นเว็บไซต์สำหรับสาขาวิชา Software Engineering ที่พัฒนาด้วย Laravel Framework

## โครงสร้างโปรเจกต์

- `app/Http/Controllers/AdminController.php` - ควบคุมการทำงานของแผงผู้ดูแลระบบ
- `resources/views/news.blade.php` - หน้าแสดงข่าวสาร
- `resources/views/admin/panel.blade.php` - แผงควบคุมผู้ดูแลระบบ
- `storage/app/site_content.json` - ไฟล์เก็บข้อมูลเนื้อหาของเว็บไซต์

## การจัดการข้อมูล

ข้อมูลของการ์ดข่าวสารในหน้า `/news` จะถูกเก็บไว้ในไฟล์ `storage/app/site_content.json` เมื่อมีการเพิ่มหรือแก้ไขข้อมูลผ่านแผงผู้ดูแลระบบ

## ปัญหาที่พบและแนวทางแก้ไข

### ปัญหา: ข้อมูลไม่แสดงเมื่อย้ายโปรเจกต์ไปเครื่องอื่น

**สาเหตุ:**
1. ไฟล์ `storage/app/site_content.json` ไม่ได้ถูกย้ายไปด้วย
2. รูปภาพที่อัปโหลดไม่ได้ถูกย้ายไปด้วย
3. ลิงก์ symbol ระหว่าง `public/storage` และ `storage/app/public` ไม่ได้ถูกตั้งค่า

**แนวทางแก้ไข:**
ดูรายละเอียดในไฟล์ [DEPLOYMENT_GUIDE.md](DEPLOYMENT_GUIDE.md)

## คำสั่งที่ใช้บ่อย

```bash
# สร้างลิงก์ storage
php artisan storage:link

# ติดตั้ง dependencies
composer install

# รัน development server
php artisan serve
```

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
