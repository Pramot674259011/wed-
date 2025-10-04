<!DOCTYPE html>
<html lang="th">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Home - สาขาวิชา Software Engineering</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" media="print" onload="this.media='all'" />
        <link href="/css/unified-theme.css" rel="stylesheet" />
        <noscript><link rel="stylesheet" href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap"></noscript>
        <style>
            /* Page specific overrides */
            .page-body{padding-top:76px}
            
            /* Smooth scrolling */
            html {
                scroll-behavior: smooth;
            }
            
            /* Section padding for anchor links */
            section[id] {
                scroll-margin-top: 20px;
            }
            
            /* Enhanced news/activity cards */
            .news-card {
                background: var(--bg-primary);
                border-radius: 12px;
                overflow: hidden;
                box-shadow: 0 4px 12px var(--shadow-light);
                border: 1px solid var(--border-light);
                transition: all 0.3s ease;
                display: flex;
                flex-direction: column;
                height: 100%;
            }
            
            .news-card:hover {
                transform: translateY(-8px);
                box-shadow: 0 12px 24px var(--shadow-medium);
                border-color: var(--primary-red-border);
            }
            
            .news-card-image {
                width: 100%;
                height: 160px;
                object-fit: cover;
                border-bottom: 2px solid var(--border-light);
            }
            
            .news-card-content {
                padding: 1.5rem;
                flex: 1;
                display: flex;
                flex-direction: column;
            }
            
            .news-card h4 {
                font-size: 1.2rem;
                font-weight: 700;
                color: var(--text-primary);
                margin: 0 0 0.75rem 0;
                flex: 1;
            }
            
            .news-card-date {
                display: inline-block;
                background: var(--primary-red-light);
                color: var(--primary-red);
                padding: 0.25rem 0.75rem;
                border-radius: 20px;
                font-size: 0.85rem;
                font-weight: 600;
                margin-bottom: 0.75rem;
                align-self: flex-start;
            }
            
            .news-card p {
                color: var(--text-muted);
                font-size: 0.95rem;
                margin: 0;
                line-height: 1.5;
            }
            
            .news-card-link {
                display: inline-flex;
                align-items: center;
                gap: 0.5rem;
                color: var(--primary-red);
                text-decoration: none;
                font-weight: 600;
                margin-top: 1rem;
                font-size: 0.9rem;
            }
            
            .news-card-link:hover {
                text-decoration: underline;
            }
            
            /* Faculty image styling */
            .faculty-avatar {
                width: 120px;
                height: 120px;
                border-radius: 50%;
                object-fit: cover;
                margin: 0 auto 1rem;
                display: block;
                border: 4px solid var(--border-light);
                box-shadow: 0 4px 12px var(--shadow-light);
                transition: all 0.3s ease;
            }
            
            .faculty-avatar:hover {
                transform: scale(1.05);
                box-shadow: 0 8px 20px var(--shadow-medium);
                border-color: var(--primary-red);
            }
            
            .faculty-card {
                text-align: center;
                padding: 1rem;
                background: var(--bg-primary);
                border-radius: 12px;
                box-shadow: 0 4px 12px var(--shadow-light);
                border: 1px solid var(--border-light);
                transition: all 0.3s ease;
                width: 160px;
            }
            
            .faculty-card:hover {
                transform: translateY(-4px);
                box-shadow: 0 8px 20px var(--shadow-medium);
            }
            
            .faculty-name {
                font-size: 1.1rem;
                font-weight: 700;
                color: var(--text-primary);
                margin-bottom: 0.25rem;
            }
            
            .faculty-position {
                color: var(--primary-red);
                font-weight: 600;
                font-size: 0.9rem;
            }
        </style>
    </head>
    <body>
        <!-- Top Navigation Bar -->
        <div class="topbar">
            <div class="topbar-content">
                <div class="nav-links">
                    <a href="/" class="nav-link active">หน้าหลัก</a>
                    <a href="/programs" class="nav-link">หลักสูตร</a>
                    <a href="/faculty" class="nav-link">คณาจารย์</a>
                    <a href="/research" class="nav-link">งานวิจัย</a>
                    <a href="/news" class="nav-link">ข่าวสาร</a>
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
                        <a href="/register" class="btn btn-secondary">สมัครสมาชิก</a>
                    @endauth
                </div>
            </div>
        </div>

        <!-- Hero Banner -->
        <div id="home" class="banner-hero">
            <div class="banner-content">
                <h1 style="font-size:3rem;margin-bottom:1rem;font-weight:700;color:var(--text-primary)">Software Engineering</h1>
                <p style="font-size:1.2rem;opacity:0.8;color:var(--text-secondary)">นวัตกรรมและเทคโนโลยีแห่งอนาคต</p>
            </div>
        </div>
        <div class="container page-body">
            <div style="display:flex;align-items:flex-start;gap:1rem">

                <div style="flex:1">
                    <div class="header">
                        <div>
                            <div class="title">สาขาวิชา Software Engineering</div>
                            <div class="small">ข่าวสารและกิจกรรมของสาขา</div>
                        </div>
                        <div>
                            <!-- contact moved to topbar -->
                        </div>
                    </div>

                    <!-- inline banner removed (now full-bleed above) -->

                    <!-- Programs placeholder -->
                    <section id="programs" style="margin-top:1.75rem;text-align:center">
                        <h2 style="font-weight:700;margin-bottom:0.75rem">หลักสูตรการเรียน</h2>
                        <p style="color:#6b7280;max-width:800px;margin:0 auto">รายละเอียดหลักสูตรการเรียนของสาขา Software Engineering (ตัวอย่าง): ปริญญาตรี สอนวิชาออกแบบซอฟต์แวร์ การพัฒนาเว็บ ระบบฐานข้อมูล และโครงงานบัณฑิต</p>
                    </section>

                    <h3 style="margin-top:1rem;display:flex;justify-content:space-between;align-items:center">
                        <span>การ์ดข่าว/กิจกรรม</span>
                        <a href="/news" class="btn btn-small">ดูทั้งหมด</a>
                    </h3>
                    <div class="grid grid-3 mt-2">
                        <div class="news-card">
                            <img src="https://pgm.npru.ac.th/se/data/images/moon%20star.png" alt="Hackathon" class="news-card-image">
                            <div class="news-card-content">
                                <h4>กิจกรรม Hackathon</h4>
                                <div class="news-card-date">12 ต.ค. 2568</div>
                                <p>เข้าร่วมการแข่งขันพัฒนาซอฟต์แวร์ร่วมกับนักศึกษาจากมหาวิทยาลัยอื่น ๆ</p>
                                <a href="#" class="news-card-link">ดูรายละเอียด →</a>
                            </div>
                        </div>
                        <div class="news-card">
                            <img src="https://picsum.photos/seed/devops/400/200" alt="DevOps" class="news-card-image">
                            <div class="news-card-content">
                                <h4>บรรยายพิเศษ: DevOps</h4>
                                <div class="news-card-date">15 ต.ค. 2568</div>
                                <p>วิทยากรจากบริษัทชั้นนำจะมาแชร์ประสบการณ์จริงเกี่ยวกับ DevOps</p>
                                <a href="#" class="news-card-link">ดูรายละเอียด →</a>
                            </div>
                        </div>
                        <div class="news-card">
                            <img src="https://picsum.photos/seed/workshop/400/200" alt="Workshop" class="news-card-image">
                            <div class="news-card-content">
                                <h4>Workshop UI/UX</h4>
                                <div class="news-card-date">18 ต.ค. 2568</div>
                                <p>เรียนรู้การออกแบบประสบการณ์ผู้ใช้และการออกแบบอินเตอร์เฟส</p>
                                <a href="#" class="news-card-link">ดูรายละเอียด →</a>
                            </div>
                        </div>
                        <div class="news-card">
                            <img src="https://picsum.photos/seed/graduation/400/200" alt="Graduation" class="news-card-image">
                            <div class="news-card-content">
                                <h4>โครงการบัณฑิต</h4>
                                <div class="news-card-date">20 ต.ค. 2568</div>
                                <p>รับสมัครนักศึกษาฝึกงานและนักศึกษาสหกิจศึกษา ปีการศึกษา 2569</p>
                                <a href="#" class="news-card-link">ดูรายละเอียด →</a>
                            </div>
                        </div>
                        <div class="news-card">
                            <img src="https://picsum.photos/seed/programming/400/200" alt="Programming" class="news-card-image">
                            <div class="news-card-content">
                                <h4>การแข่งขันเขียนโปรแกรม</h4>
                                <div class="news-card-date">25 ต.ค. 2568</div>
                                <p>ทีมตัวแทนสาขาจะเข้าร่วมการแข่งขันระดับประเทศ</p>
                                <a href="#" class="news-card-link">ดูรายละเอียด →</a>
                            </div>
                        </div>
                        <div class="news-card">
                            <img src="https://picsum.photos/seed/openday/400/200" alt="Open Day" class="news-card-image">
                            <div class="news-card-content">
                                <h4>Open Day</h4>
                                <div class="news-card-date">30 ต.ค. 2568</div>
                                <p>เชิญชวนนักเรียนและผู้ปกครองเยี่ยมชมหลักสูตรและสิ่งอำนวยความสะดวก</p>
                                <a href="#" class="news-card-link">ดูรายละเอียด →</a>
                            </div>
                        </div>
                    </div>

                    <!-- Faculty section -->
                    <section id="faculty" class="section text-center">
                        <div class="flex flex-between mb-2">
                            <h2 class="section-title" style="font-size:1.4rem;margin:0">อาจารย์ประจำหลักสูตร</h2>
                            <a href="/faculty" class="btn btn-small">ดูทั้งหมด</a>
                        </div>

                        <div class="flex flex-center gap-3" style="flex-wrap:wrap">
                            <div class="faculty-card">
                                <img src="https://picsum.photos/seed/faculty1/300/300" alt="ผศ.ดร. สมชาย ใจดี" class="faculty-avatar">
                                <div class="faculty-name">ผศ.ดร. สมชาย ใจดี</div>
                                <div class="faculty-position">รองประธานสาขาฯ</div>
                            </div>
                            <div class="faculty-card">
                                <img src="https://picsum.photos/seed/faculty2/300/300" alt="ผศ.ดร. สายใจ กล้าหาญ" class="faculty-avatar">
                                <div class="faculty-name">ผศ.ดร. สายใจ กล้าหาญ</div>
                                <div class="faculty-position">หัวหน้าหลักสูตร</div>
                            </div>
                            <div class="faculty-card">
                                <img src="https://picsum.photos/seed/faculty3/300/300" alt="ผศ.ดร. ปิยวัฒน์ ฉลาด" class="faculty-avatar">
                                <div class="faculty-name">ผศ.ดร. ปิยวัฒน์ ฉลาด</div>
                                <div class="faculty-position">อาจารย์ประจำ</div>
                            </div>
                            <div class="faculty-card">
                                <img src="https://picsum.photos/seed/faculty4/300/300" alt="ผศ.ดร. นภาพร ใฝ่รู้" class="faculty-avatar">
                                <div class="faculty-name">ผศ.ดร. นภาพร ใฝ่รู้</div>
                                <div class="faculty-position">อาจารย์ประจำ</div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <script>
                // Simple success message handling
                @if(session('success'))
                    alert('{{ session('success') }}');
                @endif
            </script>
            </script>
        </div>
    </body>
</html>