<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>อาจารย์และบุคลากร - สาขาวิชา Software Engineering</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="/css/unified-theme.css" rel="stylesheet" />
    <style>
        /* Page specific styles */
        .page-body { padding-top: 76px; }
        
        /* Enhanced faculty image styling */
        .faculty-image {
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
        
        .faculty-image:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px var(--shadow-medium);
            border-color: var(--primary-red);
        }
        
        .faculty-card {
            text-align: center;
            padding: 1.5rem;
            background: var(--bg-primary);
            border-radius: 12px;
            box-shadow: 0 4px 12px var(--shadow-light);
            border: 1px solid var(--border-light);
            transition: all 0.3s ease;
            min-width: 200px;
        }
        
        .faculty-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 20px var(--shadow-medium);
        }
        
        .faculty-name {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--text-primary);
            text-align: center;
            margin-bottom: 0.5rem;
        }
        
        .faculty-position {
            color: var(--primary-red);
            font-weight: 600;
            text-align: center;
            margin-bottom: 1rem;
        }
        
        .faculty-degree {
            color: var(--text-muted);
            text-align: center;
            margin-bottom: 1rem;
            font-size: 0.9rem;
        }
        
        .faculty-bio {
            color: var(--text-secondary);
            line-height: 1.6;
            text-align: left;
        }
        
        /* Horizontal faculty layout */
        .faculty-horizontal {
            display: flex;
            overflow-x: auto;
            gap: 1.5rem;
            padding: 1rem 0;
            margin-bottom: 2rem;
        }
        
        .faculty-horizontal .faculty-card {
            flex: 0 0 auto;
            width: 200px;
        }
        
        /* Staff image styling */
        .staff-image {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 1rem;
            border: 3px solid var(--border-light);
            box-shadow: 0 4px 8px var(--shadow-light);
        }
        
        .staff-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
        }
        
        .staff-card {
            display: flex;
            align-items: center;
            padding: 1.5rem;
            background: var(--bg-primary);
            border-radius: 12px;
            box-shadow: 0 4px 12px var(--shadow-light);
            border: 1px solid var(--border-light);
            transition: all 0.3s ease;
        }
        
        .staff-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 20px var(--shadow-medium);
        }
        
        .staff-info {
            flex: 1;
        }
        
        .staff-name {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 0.25rem;
        }
        
        .staff-position {
            color: var(--primary-red);
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        
        .staff-contact {
            color: var(--text-muted);
            font-size: 0.9rem;
            line-height: 1.5;
        }
        
        /* Hide scrollbar but keep functionality */
        .faculty-horizontal::-webkit-scrollbar {
            height: 8px;
        }
        
        .faculty-horizontal::-webkit-scrollbar-track {
            background: var(--bg-tertiary);
            border-radius: 4px;
        }
        
        .faculty-horizontal::-webkit-scrollbar-thumb {
            background: var(--primary-red);
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <!-- Top Navigation Bar -->
    <div class="topbar">
        <div class="topbar-content">
            <div class="nav-links">
                <a href="/" class="nav-link">หน้าหลัก</a>
                <a href="/programs" class="nav-link">หลักสูตร</a>
                <a href="/faculty" class="nav-link active">คณาจารย์</a>
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
                @endauth
                <a href="/admin" class="btn btn-secondary">จัดการ</a>
            </div>
        </div>
    </div>
    <div class="container page-body">
        <!-- Page Header -->
        <div class="section-header">
            <h1 class="section-title">อาจารย์และบุคลากร</h1>
            <p class="section-subtitle">ทีมงานประจำสาขาวิชา Software Engineering</p>
        </div>

        <!-- Faculty Section -->
        <section>
            <div class="section-header">
                <h2 class="section-title">อาจารย์ประจำหลักสูตร</h2>
                <p class="section-subtitle">คณาจารย์ผู้เชี่ยวชาญด้าน Software Engineering</p>
            </div>

            <div class="faculty-horizontal">
                @forelse($faculties as $faculty)
                <div class="faculty-card">
                    <img src="{{ $faculty->image ?? 'https://picsum.photos/seed/f' . $faculty->id . '/300/300' }}" 
                         alt="{{ $faculty->name }}" class="faculty-image" />
                    <h3 class="faculty-name">{{ $faculty->name }}</h3>
                    @if($faculty->position)
                        <div class="faculty-position">{{ $faculty->position }}</div>
                    @endif
                    @if($faculty->degree)
                        <div class="faculty-degree">{{ $faculty->degree }}</div>
                    @endif
                    @if($faculty->bio)
                        <div class="faculty-bio">{{ $faculty->bio }}</div>
                    @endif
                </div>
                @empty
                <!-- Default faculty members if none in database -->
                <div class="faculty-card">
                    <img src="https://picsum.photos/seed/f1/300/300" alt="prof1" class="faculty-image" />
                    <h3 class="faculty-name">ผศ.ดร. สมชาย ใจดี</h3>
                    <div class="faculty-position">รองประธานสาขาฯ</div>
                    <div class="faculty-degree">Ph.D. Computer Science</div>
                    <div class="faculty-bio">ผู้เชี่ยวชาญด้านการพัฒนาซอฟต์แวร์และการจัดการโครงการ มีประสบการณ์ในการสอนและวิจัยมากว่า 15 ปี เชี่ยวชาญเรื่องการออกแบบระบบและ Software Architecture</div>
                </div>

                <div class="faculty-card">
                    <img src="https://picsum.photos/seed/f2/300/300" alt="prof2" class="faculty-image" />
                    <h3 class="faculty-name">ผศ.ดร. สายใจ กล้าหาญ</h3>
                    <div class="faculty-position">หัวหน้าหลักสูตร</div>
                    <div class="faculty-degree">Ph.D. Software Engineering</div>
                    <div class="faculty-bio">นักวิจัยด้าน Software Testing และ Quality Assurance ผู้นำด้านการพัฒนาหลักสูตรและการจัดการเรียนการสอน มีผลงานวิจัยตีพิมพ์ในวารสารนานาชาติมากมาย</div>
                </div>

                <div class="faculty-card">
                    <img src="https://picsum.photos/seed/f3/300/300" alt="prof3" class="faculty-image" />
                    <h3 class="faculty-name">ผศ.ดร. ปิยวัฒน์ ฉลาด</h3>
                    <div class="faculty-position">อาจารย์ประจำ</div>
                    <div class="faculty-degree">Ph.D. Information Technology</div>
                    <div class="faculty-bio">ผู้เชี่ยวชาญด้านการพัฒนาเว็บแอปพลิเคชัน และเทคโนโลยี Full-Stack Development สอนวิชาเกี่ยวกับ Web Development, Database Systems และ Mobile App Development</div>
                </div>

                <div class="faculty-card">
                    <img src="https://picsum.photos/seed/f4/300/300" alt="prof4" class="faculty-image" />
                    <h3 class="faculty-name">ผศ.ดr. นภาพร ใฝ่รู้</h3>
                    <div class="faculty-position">อาจารย์ประจำ</div>
                    <div class="faculty-degree">Ph.D. Computer Engineering</div>
                    <div class="faculty-bio">นักวิจัยด้าน Machine Learning และ Artificial Intelligence ผู้เชี่ยวชาญด้านการประมวลผลข้อมูลขนาดใหญ่และการวิเคราะห์ข้อมูล มีโครงการวิจัยร่วมกับอุตสาหกรรมหลายแห่ง</div>
                </div>

                <div class="faculty-card">
                    <img src="https://picsum.photos/seed/f5/300/300" alt="prof5" class="faculty-image" />
                    <h3 class="faculty-name">อ.ดร. วิชญ์ พฤติกรรม</h3>
                    <div class="faculty-position">อาจารย์ประจำ</div>
                    <div class="faculty-degree">Ph.D. Computer Science</div>
                    <div class="faculty-bio">ผู้เชี่ยวชาญด้าน Cybersecurity และ Network Security สอนวิชาเกี่ยวกับความปลอดภัยของระบบคอมพิวเตอร์ การป้องกันข้อมูล และ Ethical Hacking</div>
                </div>

                <div class="faculty-card">
                    <img src="https://picsum.photos/seed/f6/300/300" alt="prof6" class="faculty-image" />
                    <h3 class="faculty-name">อ.ดร. สุกัญญา นวัตกรรม</h3>
                    <div class="faculty-position">อาจารย์ประจำ</div>
                    <div class="faculty-degree">Ph.D. Information Systems</div>
                    <div class="faculty-bio">ผู้เชี่ยวชาญด้าน UX/UI Design และ Human-Computer Interaction สอนวิชาเกี่ยวกับการออกแบบประสบการณ์ผู้ใช้ การวิจัยพฤติกรรมผู้ใช้ และ Design Thinking</div>
                </div>
                @endforelse
            </div>
        </section>

        <!-- Visiting Faculty Section -->
        <section>
            <div class="section-header">
                <h2 class="section-title">อาจารย์พิเศษและที่ปรึกษา</h2>
                <p class="section-subtitle">ผู้เชี่ยวชาญจากภายนอกและนักวิจัยร่วม</p>
            </div>

            <div class="staff-grid">
                <div class="staff-card">
                    <img src="https://picsum.photos/seed/v1/200/200" alt="visitor1" class="staff-image" />
                    <div class="staff-info">
                        <h4 class="staff-name">รศ.ดร. นคร วรรณา</h4>
                        <div class="staff-position">นักวิจัยด้านปัญญาประดิษฐ์</div>
                        <div class="staff-contact">ที่ปรึกษาโครงการวิจัยด้าน AI<br>Email: nakaorn.w@university.ac.th</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Information -->
        <section style="margin-top:3rem;background:white;border-radius:12px;padding:2rem;box-shadow:0 8px 20px rgba(2,6,23,0.06)">
            <div class="section-header" style="margin-top:0;border:none">
                <h2 class="section-title">ติดต่อสาขา</h2>
                <p class="section-subtitle">ข้อมูลการติดต่อและที่อยู่</p>
            </div>

            <div style="display:flex;justify-content:space-between;align-items:flex-start;flex-wrap:wrap;gap:1rem">
                <div style="flex:1;min-width:200px;text-align:center">
                    <h4 style="color:#ef4444;margin-bottom:0.5rem">📍 ที่อยู่</h4>
                    <p style="color:#6b7280">อาคารเทคโนโลยีสารสนเทศ ชั้น 5<br>
                    มหาวิทยาลัยเทคโนโลยีแห่งชาติ<br>
                    ถนนเทคโนโลยี เขตนวัตกรรม<br>
                    กรุงเทพฯ 10900</p>
                </div>
                
                <div style="flex:1;min-width:200px;text-align:center">
                    <h4 style="color:#ef4444;margin-bottom:0.5rem">📞 โทรศัพท์</h4>
                    <p style="color:#6b7280">02-xxx-xxxx ต่อ 1200-1299<br>
                    โทรสาร: 02-xxx-xxxx</p>
                </div>
                
                <div style="flex:1;min-width:200px;text-align:center">
                    <h4 style="color:#ef4444;margin-bottom:0.5rem">✉️ อีเมล</h4>
                    <p style="color:#6b7280">se-dept@university.ac.th<br>
                    info.se@university.ac.th</p>
                </div>
                
                <div style="flex:1;min-width:200px;text-align:center">
                    <h4 style="color:#ef4444;margin-bottom:0.5rem">🕒 เวลาทำการ</h4>
                    <p style="color:#6b7280">จันทร์ - ศุกร์: 8:30 - 16:30<br>
                    เสาร์ - อาทิตย์: ปิดทำการ</p>
                </div>
            </div>
        </section>
    </div>
</body>
</html>