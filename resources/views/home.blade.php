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
                    <a href="/faculty" class="nav-link">คณะจารย์</a>
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
                                <h4>Moon and star</h4>
                                <div class="news-card-date">12 ต.ค. 2568</div>
                                <p>งานประกวดนักศึกษาต้นแบบ</p>
                                <a href="#" class="news-card-link">ดูรายละเอียด →</a>
                            </div>
                        </div>
                        <div class="news-card">
                            <img src="data:image/jpeg;base64,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" alt="DevOps" class="news-card-image">
                            <div class="news-card-content">
                                <h4>คลิปโปรโมทสาขา</h4>
                                <div class="news-card-date">15 ต.ค. 2568</div>
                                <p>กิจกรรมที่นักศึกษาทำเพื่อสาขา</p>
                                <a href="#" class="news-card-link">ดูรายละเอียด →</a>
                            </div>
                        </div>
                        <div class="news-card">
                            <img src="data:image/jpeg;base64,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" alt="Workshop" class="news-card-image">
                            <div class="news-card-content">
                                <h4>กิจกรรมไหว้ครู</h4>
                                <div class="news-card-date">18 ต.ค. 2568</div>
                                <p>เพื่อเคารพ ครูบาอาจารย์ที่สอนสั่ง</p>
                                <a href="#" class="news-card-link">ดูรายละเอียด →</a>
                            </div>
                        </div>
                        <div class="news-card">
                            <img src="https://pgm.npru.ac.th/se/data/images/Science%20day%20activities%281%29.png" alt="Graduation" class="news-card-image">
                            <div class="news-card-content">
                                <h4>วันวิทยาศาสตร์</h4>
                                <div class="news-card-date">20 ต.ค. 2568</div>
                                <p>แสดงสิ่งประดิษฐ์ของสาขา ในวันวิทยาศาสตร์</p>
                                <a href="#" class="news-card-link">ดูรายละเอียด →</a>
                            </div>
                        </div>
                        <div class="news-card">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSGhDnBhWYG0NwxEdQe7ieRi5JANvDs6C40fg&s" alt="Programming" class="news-card-image">
                            <div class="news-card-content">
                                <h4>ตึกสาขาวิศวกรรมซอฟต์แวร์</h4>
                                <div class="news-card-date">25 ต.ค. 2568</div>
                                <p>สำหรับการเรียนการสอนของสาขาวิศวกรรมซอฟแวร์</p>
                                <a href="#" class="news-card-link">ดูรายละเอียด →</a>
                            </div>
                        </div>
                        <div class="news-card">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzqYVqxkF2UCGgrohPlUWsLlLVKj7DsJ-rSQ&s" alt="Open Day" class="news-card-image">
                            <div class="news-card-content">
                                <h4>รับสมัครนักศึกษาใหม่</h4>
                                <div class="news-card-date">30 ต.ค. 2568</div>
                                <p>เปิดรับสมัครนักศึกษาใหม่</p>
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
                                <img src="https://pgm.npru.ac.th/se/data/images/c_nab.png" alt="ผศ.ดร. สมชาย ใจดี" class="faculty-avatar">
                                <div class="faculty-name">อาจารย์ ดร. วรเชษฐ์  อุทธา</div>
                                <div class="faculty-position">ประธานสาขาวิชาวิศวกรรมซอฟต์แวร์</div>
                            </div>
                            <div class="faculty-card">
                                <img src="http://pgm.npru.ac.th/se/data/images/c_nee.png" alt="ผศ.ดร. สายใจ กล้าหาญ" class="faculty-avatar">
                                <div class="faculty-name">อาจารย์ ดร.อุษณีย์  ภักดีตระกูลวงศ์</div>
                                <div class="faculty-position">รองประธานสาขาฯ</div>
                            </div>
                            <div class="faculty-card">
                                <img src="https://chat.google.com/u/0/api/get_attachment_url?url_type=FIFE_URL&content_type=image%2Fjpeg&attachment_token=AOo0EEVBW%2BqXUnvjClDkfZjpsHJsiQWbN5e6V916666B4CvDzJCMV%2FHgRxjcTpSGLU73VO56H890e%2F3njhmUMgiM5JKCmq%2FKAeMJsh6Ub0utoABo6027S0ZvhPvMlVRXdxZz0wXJv9BjjXTY5cH%2BNTUsjAKQNvmZrdfVnHvs0LVVJEuAMAQA6bqQDoRPPvYBL00TSCdglliayKDBSnr4Me617bVCcWhWYJvvuWAtszX52Xn2I1lCpC%2BRK90THgdeG5EFe%2B0ojeCsQIkVmchjED9Z%2FqVEdXA%2BbkFnrL0Eun5XmONFwmZYH9tzLrHWeBVkQ7Y8LlzxHEJuiILToNZkydwpGO0WOBCsWRdbUaQ9l16uOB8IqXlx0K7vGuCGimQipIEUTE6qNHTMchZ0S6lZaAZVk16o2bUBLbdiSzoj3HG4mgqgFdPxEAMDvhS%2B7DS2NFmWmBfpjrT05YoZwVw%2FA6HKa6JDi1Sbur2LXQ3n7J8ysA3iXXXTpUkbrouF8ZKfAWiZC%2FJ7b1oCZBtl8LcTwfkP8J3OBmvQRv1uh8YBDlvEPwxj5oVc0RKL%2FioyD1RVgx0k2ySW475b1fuQmmI%3D&allow_caching=true&sz=w512" alt="ผศ.ดร. ปิยวัฒน์ ฉลาด" class="faculty-avatar">
                                <div class="faculty-name">อาจารย์ สมเกียรติ ช่อเหมือน</div>
                                <div class="faculty-position">รองประธานฯ ฝ่ายนโยบายและแผน</div>
                            </div>
                            <div class="faculty-card">
                                <img src="https://chat.google.com/u/0/api/get_attachment_url?url_type=FIFE_URL&content_type=image%2Fjpeg&attachment_token=AOo0EEXds92yYtNRCxBIZbIsrYKlgSKuyz5bQB2wL%2FK%2BZ5c6XvqcTBw3%2FUOhJ7qoHJvsFzwvjrROk2aBf1z7%2Fdhev5ppv6PbobakXjqfYv2Tvo4WkX4ESYDGTLF4qelWvjWJ%2BgQx4mpPsy%2F7rkGLC6LndAMP0CLGpqSs2yBhKY70ZOhvcSjc3k8KdMvRfXcem%2F3xhx0lVw1pLyJhMVl6RkmBWdb91SBP4Zckf1HvvWCE1D5NZRkpdyC6e5S90oMKPfbw3teXjK54wr8wh0EWM59EIypQPbRvNihHnAlSYLiliCAUcGndBxqfIuUDr3UhEsvAxe7haXRM0x4XXOPpwviFjEI8KiFRUfN8i0O7Ktk5cUJ0eTsQw6I0pbKzDb96IaTpoNV5fzAlhybdys8riyGkEVCr0gbLjbbSU8sEztA8cwiO29hGqYKYZukzh%2Btb%2F5E7qOTI9BQQa%2BKKp%2FjMzaU9DtkzgzWNvOO0JnkopFF92L1T4dbLXb1BfQFvJFT2CikML2rJR9uLA4IcAgPwgrIHkWDLlZF2VSE6E18CDOcba0w5IpQqDf8A5FChBZ0n9DkjGr4Gie43FtUxIgs%3D&allow_caching=true&sz=w512" alt="ผศ.ดร. นภาพร ใฝ่รู้" class="faculty-avatar">
                                <div class="faculty-name">อาจารย์ นฤพล  สุวรรณวิจิตร</div>
                                <div class="faculty-position">รองประธานฯ ฝ่ายประกันคุณภาพฯ</div>
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