<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ข่าวสารและกิจกรรม - สาขาวิชา Software Engineering</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />
    <link href="/css/unified-theme.css" rel="stylesheet" />
    <style>
        /* Page specific styles */
        .featured-news {
            grid-column: 1 / -1;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0;
            margin-bottom: 2rem;
        }
        
        .featured-news .news-image {
            height: 300px;
            border-radius: 0;
        }
        
        .featured-news .news-content {
            padding: 2rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .featured-news .news-title {
            font-size: 1.6rem;
            margin-bottom: 1rem;
        }
        
        .news-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 16px rgba(0,0,0,0.06);
            border: 1px solid #f1f5f9;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        
        .news-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 24px rgba(239,68,68,0.12);
        }
        
        .news-card .news-image {
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
            color: white;
        }
        
        .news-card .news-content {
            padding: 1.5rem;
        }
        
        .news-category {
            display: inline-block;
            background: linear-gradient(135deg, var(--primary-red), var(--primary-red-dark));
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }
        
        .news-title {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 0.75rem;
            line-height: 1.4;
        }
        
        .news-excerpt {
            color: var(--text-secondary);
            line-height: 1.6;
            margin-bottom: 1rem;
            font-size: 0.9rem;
        }
        
        .news-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 1rem;
            border-top: 1px solid #f1f5f9;
        }
        
        .news-date {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--text-muted);
            font-size: 0.85rem;
        }
        
        .news-read-more {
            color: var(--primary-red);
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
        }
        
        .news-read-more:hover {
            color: var(--primary-red-dark);
        }
        
        .icon {
            width: 18px;
            height: 18px;
            fill: currentColor;
        }
        
        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }
            
            .grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
            
            .featured-news {
                grid-template-columns: 1fr;
            }
            
            .featured-news .news-image {
                height: 200px;
            }
            
            .grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
        @media (max-width: 480px) {
            .grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
    </style>
</head>
<body>
    <!-- Top Navigation Bar -->
    <div class="topbar">
        <div class="topbar-content">
            <div class="nav-links">
                <a href="/" class="nav-link">หน้าหลัก</a>
                <a href="/programs" class="nav-link">หลักสูตร</a>
                <a href="/faculty" class="nav-link">คณาจารย์</a>
                <a href="/research" class="nav-link">งานวิจัย</a>
                <a href="/news" class="nav-link active">ข่าวสาร</a>
            </div>
            <div class="topbar-right">
                @auth
                    <span style="color: var(--text-secondary); margin-right: 1rem;">สวัสดี, {{ Auth::user()->name }}</span>
                    <form method="POST" action="/logout" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn" style="background: #6b7280;">ออกจากระบบ</button>
                    </form>
                @else
                    <a href="/login" class="btn">เข้าสู่ระบบ</a>
                @endauth
                <a href="/admin" class="btn btn-secondary">จัดการ</a>
            </div>
        </div>
    </div>
    <div class="container">




        <div class="card text-center" style="margin-bottom: 2rem; padding: 2rem;">
            <h1 class="title-primary">ข่าวสารและกิจกรรม</h1>
            <p class="subtitle">ติดตามความเคลื่อนไหวและกิจกรรมต่าง ๆ ของสาขาวิชา Software Engineering</p>
        </div>

        <!-- News Grid -->
        <div class="grid grid-auto">
            <!-- Featured News -->
            <article class="card featured-news">
                <div style="width:100%;height:300px;background:linear-gradient(135deg,var(--primary-red) 0%,var(--primary-red-dark) 100%);display:flex;align-items:center;justify-content:center;color:white;font-size:5rem">
                    🏆
                </div>
                <div class="news-content" style="display:flex;flex-direction:column;justify-content:center">
                    <span style="display:inline-block;background:linear-gradient(135deg,var(--primary-red) 0%,var(--primary-red-dark) 100%);color:white;padding:0.25rem 0.75rem;border-radius:20px;font-size:0.8rem;font-weight:600;margin-bottom:1rem">ข่าวเด่น</span>
                    <h2 style="font-size:1.6rem;margin-bottom:1rem;font-weight:700;color:var(--text-primary);margin:0 0 0.75rem 0;line-height:1.4">นักศึกษาสาขา Software Engineering คว้ารางวัลชนะเลิศการแข่งขัน Hackathon แห่งชาติ 2568</h2>
                    <p style="color:var(--text-secondary);line-height:1.6;margin-bottom:1rem;font-size:0.95rem">ทีมนักศึกษาจากสาขาวิชา Software Engineering ได้รับรางวัลชนะเลิศในการแข่งขัน Thailand National Hackathon 2568 ด้วยโปรเจค "Smart Campus Management System" ที่นำเทคโนโลยี AI และ IoT มาประยุกต์ใช้</p>
                    <div class="news-meta">
                        <span class="news-date">
                            <svg class="icon" viewBox="0 0 24 24">
                                <path d="M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M16,1V3H8V1H6V3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M19,19H5V8H19V19Z"/>
                            </svg>
                            15 ตุลาคม 2568
                        </span>
                        <a href="#" class="news-read-more">อ่านต่อ</a>
                    </div>
                </div>
            </article>

            <!-- News Card 1 -->
            <article class="news-card">
                <div class="news-image" style="background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%); color: white;">
                    💼
                </div>
                <div class="news-content">
                    <span class="news-category">บรรยายพิเศษ</span>
                    <h3 class="news-title">บรรยายพิเศษ: "DevOps และ Cloud Computing สำหรับ Software Engineer"</h3>
                    <p class="news-excerpt">เชิญฟังบรรยายพิเศษจากผู้เชี่ยวชาญด้าน DevOps จากบริษัทชั้นนำ พร้อมแชร์ประสบการณ์และเทคนิคการทำงานจริง</p>
                    <div class="news-meta">
                        <span class="news-date">
                            <svg class="icon" viewBox="0 0 24 24">
                                <path d="M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M16,1V3H8V1H6V3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3H18V1M19,19H5V8H19V19Z"/>
                            </svg>
                            22 ตุลาคม 2568
                        </span>
                        <a href="#" class="news-read-more">อ่านต่อ</a>
                    </div>
                </div>
            </article>

            <!-- News Card 2 -->
            <article class="news-card">
                <div class="news-image" style="background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%); color: white;">
                    🎨
                </div>
                <div class="news-content">
                    <span class="news-category">Workshop</span>
                    <h3 class="news-title">Workshop UI/UX Design: "Creating User-Centered Design"</h3>
                    <p class="news-excerpt">เรียนรู้หลักการออกแบบ User Interface และ User Experience ที่ดี พร้อมปฏิบัติการจริงกับเครื่องมือการออกแบบสมัยใหม่</p>
                    <div class="news-meta">
                        <span class="news-date">
                            <svg class="icon" viewBox="0 0 24 24">
                                <path d="M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M16,1V3H8V1H6V3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3H18V1M19,19H5V8H19V19Z"/>
                            </svg>
                            5 พฤศจิกายน 2568
                        </span>
                        <a href="#" class="news-read-more">อ่านต่อ</a>
                    </div>
                </div>
            </article>

            <!-- News Card 3 -->
            <article class="news-card">
                <div class="news-image" style="background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%); color: white;">
                    🎓
                </div>
                <div class="news-content">
                    <span class="news-category">การศึกษา</span>
                    <h3 class="news-title">เปิดรับสมัครโครงการบัณฑิตศึกษาต่อเนื่อง</h3>
                    <p class="news-excerpt">เปิดรับสมัครนักศึกษาเข้าร่วมโครงการพิเศษสำหรับบัณฑิตที่ต้องการศึกษาต่อระดับปริญญาโท พร้อมทุนการศึกษา</p>
                    <div class="news-meta">
                        <span class="news-date">
                            <svg class="icon" viewBox="0 0 24 24">
                                <path d="M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M16,1V3H8V1H6V3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3H18V1M19,19H5V8H19V19Z"/>
                            </svg>
                            1 พฤศจิกายน 2568
                        </span>
                        <a href="#" class="news-read-more">อ่านต่อ</a>
                    </div>
                </div>
            </article>

            <!-- News Card 4 -->
            <article class="news-card">
                <div class="news-image" style="background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%); color: white;">
                    💻
                </div>
                <div class="news-content">
                    <span class="news-category">การแข่งขัน</span>
                    <h3 class="news-title">การแข่งขันเขียนโปรแกรมภายในสาขา "SE Code Challenge 2568"</h3>
                    <p class="news-excerpt">จัดการแข่งขันเขียนโปรแกรมประจำปีสำหรับนักศึกษาทุกชั้นปี พร้อมรางวัลมากมายและโอกาสฝึกงานกับบริษัทพาร์ทเนอร์</p>
                    <div class="news-meta">
                        <span class="news-date">
                            <svg class="icon" viewBox="0 0 24 24">
                                <path d="M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M16,1V3H8V1H6V3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3H18V1M19,19H5V8H19V19Z"/>
                            </svg>
                            12 พฤศจิกายน 2568
                        </span>
                        <a href="#" class="news-read-more">อ่านต่อ</a>
                    </div>
                </div>
            </article>

            <!-- News Card 5 -->
            <article class="news-card">
                <div class="news-image" style="background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%); color: white;">
                    🎆
                </div>
                <div class="news-content">
                    <span class="news-category">งานแสดง</span>
                    <h3 class="news-title">Open Day 2568: "เปิดประตูสู่อนาคตแห่งเทคโนโลยี"</h3>
                    <p class="news-excerpt">เชิญชวนนักเรียนมัธยมปลายและผู้ปกครองเข้าร่วมงาน Open Day ชมผลงานนักศึกษา สาธิตเทคโนโลยี และปรึกษาการเรียนต่อ</p>
                    <div class="news-meta">
                        <span class="news-date">
                            <svg class="icon" viewBox="0 0 24 24">
                                <path d="M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M16,1V3H8V1H6V3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3H18V1M19,19H5V8H19V19Z"/>
                            </svg>
                            25 พฤศจิกายน 2568
                        </span>
                        <a href="#" class="news-read-more">อ่านต่อ</a>
                    </div>
                </div>
            </article>
        </div>
    </div>
</body>
</html>