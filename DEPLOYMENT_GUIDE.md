# คู่มือการย้ายโปรเจกต์ไปยังเครื่องอื่น

## ปัญหาที่พบ
เมื่อย้ายโปรเจกต์ไปยังเครื่องอื่น ข้อมูลที่กรอกในหน้าเว็บอาจไม่แสดงเนื่องจาก:

1. ไฟล์ข้อมูล (`storage/app/site_content.json`) ไม่ได้ถูกย้ายไปด้วย
2. รูปภาพที่อัปโหลดไม่ได้ถูกย้ายไปด้วย
3. ลิงก์ symbol ระหว่าง `public/storage` และ `storage/app/public` ไม่ได้ถูกตั้งค่า

## วิธีแก้ไข

### 1. ก่อนย้ายโปรเจกต์
จัดทำข้อมูลสำรองก่อนย้ายโปรเจกต์:

```bash
# ดาวน์โหลดข้อมูลจากแผงควบคุมผู้ดูแลระบบ
# ไปที่ /admin → คลิก "ดาวน์โหลด JSON"
```

หรือใช้คำสั่งในเทอร์มินัล:
```bash
# ไปที่โฟลเดอร์โปรเจกต์
cd /path/to/your/project

# คัดลอกไฟล์ข้อมูล
cp storage/app/site_content.json site_content_backup.json
```

### 2. ย้ายโปรเจกต์ไปยังเครื่องใหม่
1. คัดลอกโฟลเดอร์โปรเจกต์ทั้งหมดไปยังเครื่องใหม่
2. ติดตั้ง dependencies:
   ```bash
   composer install
   npm install
   ```
3. สร้างลิงก์ storage:
   ```bash
   php artisan storage:link
   ```

### 3. กู้คืนข้อมูล
1. คัดลอกไฟล์ `site_content.json` ไปยัง `storage/app/` ในเครื่องใหม่
2. คัดลอกโฟลเดอร์ `storage/app/public/uploads/` ไปยังเครื่องใหม่ (หากมีรูปภาพ)
3. ตรวจสอบสิทธิ์การเข้าถึงโฟลเดอร์:
   ```bash
   chmod -R 775 storage
   chmod -R 775 bootstrap/cache
   ```

## โครงสร้างข้อมูลใน site_content.json

ไฟล์ `site_content.json` มีโครงสร้างดังนี้:

```json
{
  "banner": "/images/banner-default.jpg",
  "site_title": "ชื่อไซต์",
  "cards": [
    {
      "image": "/storage/uploads/ชื่อรูปภาพ.jpg",
      "caption": "หัวข้อข่าว",
      "description": "รายละเอียดข่าว"
    }
  ],
  "faculty": [],
  "programs": "ข้อมูลหลักสูตร"
}
```

## คำแนะนำเพิ่มเติม

1. หากต้องการให้ข้อมูลแสดงผลทันที ให้แนบไฟล์ `site_content.json` พร้อมกับโปรเจกต์
2. สำหรับการพัฒนาในระยะยาว ควรพิจารณาใช้ฐานข้อมูลแทนการเก็บข้อมูลในไฟล์ JSON
3. สำหรับรูปภาพ ควรใช้บริการ Cloud Storage (เช่น AWS S3, Google Cloud Storage) เพื่อความสะดวกในการย้ายข้อมูล