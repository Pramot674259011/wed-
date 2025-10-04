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
        }
        
        @media (max-width: 480px) {
            .grid {
                grid-template-columns: 1fr;
            }
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
                <a href="/faculty" class="nav-link">คณะจารย์</a>
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
            <!-- Dynamic News Cards from Admin Panel -->
            @php
                // Load content from storage
                $content = [];
                if (\Illuminate\Support\Facades\Storage::exists('site_content.json')) {
                    $content = json_decode(\Illuminate\Support\Facades\Storage::get('site_content.json'), true);
                }
                $cards = $content['cards'] ?? [];
                
                // Ensure we have exactly 6 cards
                while (count($cards) < 6) {
                    $cards[] = ['image' => '', 'caption' => '', 'description' => ''];
                }
                // Limit to 6 cards
                $cards = array_slice($cards, 0, 6);
            @endphp

            @foreach($cards as $index => $card)
                <article class="news-card">
                    @if(!empty($card['image']))
                        <div class="news-image">
                            <img src="{{ $card['image'] }}" alt="News Image" style="width:100%;height:100%;object-fit:cover;">
                        </div>
                    @else
                        <div class="news-image" style="background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%); color: white; display: flex; align-items: center; justify-content: center; font-size: 4rem;">
                            📰
                        </div>
                    @endif
                    <div class="news-content">
                        <span class="news-category">ข่าวสาร</span>
                        <h3 class="news-title">{{ !empty($card['caption']) ? $card['caption'] : 'ข่าวสาร #' . ($index + 1) }}</h3>
                        <p class="news-excerpt">{{ !empty($card['description']) ? $card['description'] : 'รายละเอียดข่าวสารและกิจกรรมต่าง ๆ ของสาขาวิชา Software Engineering' }}</p>
                        <div class="news-meta">
                            <span class="news-date">
                                <svg class="icon" viewBox="0 0 24 24">
                                    <path d="M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M16,1V3H8V1H6V3H5A2,2 0 0,0 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M19,19H5V8H19V19Z"/>
                                </svg>
                                {{ date('j F Y') }}
                            </span>
                            <a href="#" class="news-read-more">อ่านต่อ</a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</body>
</html>