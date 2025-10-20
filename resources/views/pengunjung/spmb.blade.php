<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>SPMB Online - PPDB</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <style>
        * { 
            margin: 0; 
            padding: 0; 
            box-sizing: border-box; 
        }
        
        :root {
            --primary: #6366f1;
            --primary-dark: #4f46e5;
            --primary-light: #818cf8;
            --accent: #8b5cf6;
            --white: #ffffff;
            --bg: #f8fafc;
            --card-bg: #ffffff;
            --text: #1e293b;
            --text-muted: #64748b;
            --border: #e2e8f0;
            --shadow: rgba(99, 102, 241, 0.1);
            --shadow-lg: rgba(99, 102, 241, 0.15);
            --success: #10b981;
            --danger: #ef4444;
            --gradient-primary: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --gradient-card: linear-gradient(135deg, rgba(255,255,255,0.9) 0%, rgba(255,255,255,0.95) 100%);
        }

        [data-theme="dark"] {
            --primary: #818cf8;
            --primary-dark: #6366f1;
            --primary-light: #a5b4fc;
            --accent: #a78bfa;
            --white: #0f172a;
            --bg: #020617;
            --card-bg: #1e293b;
            --text: #f1f5f9;
            --text-muted: #94a3b8;
            --border: #334155;
            --shadow: rgba(99, 102, 241, 0.2);
            --shadow-lg: rgba(99, 102, 241, 0.3);
            --gradient-card: linear-gradient(135deg, rgba(30,41,59,0.9) 0%, rgba(30,41,59,0.95) 100%);
        }

        html { 
            scroll-behavior: smooth; 
            height: 100%;
        }
        
        body {
            background: var(--bg);
            color: var(--text);
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.6;
            transition: background 0.4s cubic-bezier(0.4, 0, 0.2, 1), color 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            min-height: 100%;
            overflow-x: hidden;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes float {
            0%, 100% { 
                transform: translate(0, 0) scale(1) rotate(0deg); 
                opacity: 0.04;
            }
            25% { 
                transform: translate(30px, -40px) scale(1.1) rotate(90deg); 
                opacity: 0.06;
            }
            50% { 
                transform: translate(-20px, -60px) scale(0.9) rotate(180deg); 
                opacity: 0.05;
            }
            75% { 
                transform: translate(-40px, -30px) scale(1.05) rotate(270deg); 
                opacity: 0.07;
            }
        }

        @keyframes pulse-ring {
            0%, 100% { 
                box-shadow: 0 0 0 0 rgba(99, 102, 241, 0.6); 
            }
            50% { 
                box-shadow: 0 0 0 25px rgba(99, 102, 241, 0); 
            }
        }

        @keyframes shimmer {
            0% {
                background-position: -1000px 0;
            }
            100% {
                background-position: 1000px 0;
            }
        }

        @keyframes gradientShift {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        /* Theme Toggle Button */
        .theme-toggle {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 9999;
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background: var(--gradient-primary);
            background-size: 200% 200%;
            border: none;
            cursor: pointer;
            box-shadow: 0 10px 40px var(--shadow-lg);
            display: flex;
            align-items: center;
            justify-content: center;
            animation: pulse-ring 3s cubic-bezier(0.4, 0, 0.6, 1) infinite, gradientShift 8s ease infinite;
            transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            will-change: transform;
        }

        .theme-toggle i {
            font-size: 22px;
            color: white;
            transition: transform 0.6s cubic-bezier(0.34, 1.56, 0.64, 1);
            will-change: transform;
        }

        .theme-toggle:hover {
            transform: translateY(-5px) scale(1.08);
        }

        .theme-toggle:active {
            transform: translateY(-2px) scale(1.02);
        }

        /* Floating Background Elements */
        .floating-circles {
            position: fixed;
            width: 100%;
            height: 100%;
            overflow: hidden;
            pointer-events: none;
            top: 0;
            left: 0;
            z-index: 0;
        }

        .circle {
            position: absolute;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            background-size: 200% 200%;
            opacity: 0.05;
            animation: float 30s infinite ease-in-out, gradientShift 10s ease infinite;
            will-change: transform, opacity;
            filter: blur(2px);
        }

        [data-theme="dark"] .circle {
            opacity: 0.08;
            filter: blur(3px);
        }

        .circle.c1 {
            width: 500px;
            height: 500px;
            top: -10%;
            left: -10%;
            animation-delay: 0s, 0s;
            animation-duration: 35s, 12s;
        }

        .circle.c2 {
            width: 400px;
            height: 400px;
            top: 50%;
            right: -15%;
            animation-delay: 8s, 3s;
            animation-duration: 40s, 15s;
        }

        .circle.c3 {
            width: 350px;
            height: 350px;
            bottom: -5%;
            left: 40%;
            animation-delay: 15s, 6s;
            animation-duration: 38s, 13s;
        }

        .circle.c4 {
            width: 300px;
            height: 300px;
            top: 30%;
            left: 60%;
            animation-delay: 5s, 2s;
            animation-duration: 42s, 11s;
        }

        .circle.c5 {
            width: 250px;
            height: 250px;
            bottom: 20%;
            right: 50%;
            animation-delay: 12s, 8s;
            animation-duration: 36s, 14s;
        }

        /* Hero Section */
        .hero {
            position: relative;
            padding: 140px 0 80px;
            background: var(--gradient-primary);
            background-size: 200% 200%;
            overflow: hidden;
            animation: gradientShift 15s ease infinite;
        }

        .hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=1600') center/cover no-repeat;
            opacity: 0.08;
            z-index: 1;
            animation: slowZoom 60s ease-in-out infinite;
        }

        @keyframes slowZoom {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
        }

        .hero::after {
            content: '';
            position: absolute;
            inset: 0;
            background: var(--gradient-primary);
            background-size: 200% 200%;
            opacity: 0.85;
            z-index: 2;
            animation: gradientShift 20s ease infinite;
        }

        .hero-content {
            position: relative;
            z-index: 3;
            text-align: center;
            color: white;
            animation: fadeInUp 1.2s cubic-bezier(0.34, 1.56, 0.64, 1);
            max-width: 800px;
            margin: 0 auto;
        }

        .hero h1 {
            font-size: clamp(2.5rem, 6vw, 4rem);
            font-weight: 800;
            margin-bottom: 16px;
            text-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            letter-spacing: -0.02em;
            line-height: 1.1;
            animation: fadeInUp 1.2s cubic-bezier(0.34, 1.56, 0.64, 1) 0.2s backwards;
        }

        .hero p {
            font-size: clamp(1.1rem, 2.5vw, 1.35rem);
            font-weight: 400;
            opacity: 0.95;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
            animation: fadeInUp 1.2s cubic-bezier(0.34, 1.56, 0.64, 1) 0.4s backwards;
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
            position: relative;
            z-index: 1;
        }

        /* Main Content Section */
        .main-section {
            padding: 80px 0;
            position: relative;
        }

        /* Grid Layout */
        .content-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 60px;
            align-items: start;
        }

        /* Info Column */
        .info-column {
            animation: fadeInUp 0.8s ease-out;
            max-width: 900px;
            margin: 0 auto;
            width: 100%;
        }

        .info-column h2 {
            color: var(--primary);
            font-size: clamp(1.75rem, 3vw, 2.5rem);
            font-weight: 800;
            margin-bottom: 32px;
            letter-spacing: -0.02em;
            text-align: center;
        }

        /* Info Card */
        .info-card {
            background: var(--gradient-card);
            backdrop-filter: blur(20px);
            padding: 32px;
            border-radius: 24px;
            border: 1px solid var(--border);
            box-shadow: 0 20px 60px var(--shadow);
            margin-bottom: 32px;
            transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
            will-change: transform;
        }

        .info-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 80px var(--shadow-lg);
        }

        .info-card h3 {
            color: var(--primary);
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 24px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        /* Schedule Items */
        .schedule-list {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .schedule-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px 20px;
            background: var(--bg);
            border-radius: 12px;
            border: 2px solid transparent;
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            will-change: transform;
        }

        .schedule-item:hover {
            border-color: var(--primary);
            background: var(--card-bg);
            transform: translateX(10px);
        }

        .schedule-item span:first-child {
            color: var(--text);
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .schedule-item:hover span:first-child {
            color: var(--primary);
        }

        .schedule-item span:last-child {
            color: var(--primary);
            font-weight: 700;
            font-size: 0.95rem;
        }

        /* Requirements Box */
        .requirements-box {
            background: var(--gradient-card);
            backdrop-filter: blur(20px);
            padding: 32px;
            border-radius: 24px;
            border: 1px solid var(--border);
            box-shadow: 0 20px 60px var(--shadow);
            transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
            will-change: transform;
        }

        .requirements-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 80px var(--shadow-lg);
        }

        .requirements-box h3 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 24px;
            color: var(--text);
        }

        .requirements-box ul {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .requirements-box li {
            display: flex;
            align-items: start;
            gap: 12px;
            color: var(--text);
            line-height: 1.7;
            transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
            padding-left: 0;
        }

        .requirements-box li:hover {
            transform: translateX(8px);
            color: var(--primary);
        }

        .requirements-box li::before {
            content: '✓';
            color: var(--success);
            font-weight: 700;
            font-size: 1.25rem;
            flex-shrink: 0;
            transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        .requirements-box li:hover::before {
            transform: scale(1.2) rotate(360deg);
        }

        /* Form Column */
        .form-column {
            animation: fadeInUp 0.8s ease-out 0.2s backwards;
            max-width: 900px;
            margin: 0 auto;
            width: 100%;
        }

        /* Form Card */
        .form-card {
            background: var(--gradient-card);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            padding: 40px;
            border: 1px solid var(--border);
            box-shadow: 0 20px 60px var(--shadow);
            transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
            will-change: transform;
        }

        .form-card:hover {
            box-shadow: 0 30px 80px var(--shadow-lg);
        }

        .form-card h2 {
            text-align: center;
            font-size: 1.75rem;
            font-weight: 800;
            margin-bottom: 32px;
            color: var(--text);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
        }

        /* Form Elements */
        .form-section-title {
            color: var(--primary);
            font-size: 1.25rem;
            font-weight: 700;
            margin: 32px 0 20px 0;
            padding-bottom: 12px;
            border-bottom: 2px solid var(--border);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .form-section-title:first-of-type {
            margin-top: 0;
        }

        .form-group {
            margin-bottom: 24px;
        }

        .form-label {
            display: block;
            color: var(--text);
            margin-bottom: 8px;
            font-weight: 600;
            font-size: 0.875rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .form-input,
        .form-select,
        .form-textarea {
            width: 100%;
            padding: 14px 16px;
            border: 2px solid var(--border);
            border-radius: 12px;
            font-size: 1rem;
            background: var(--bg);
            color: var(--text);
            font-family: inherit;
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            will-change: transform, border-color;
        }

        .form-input:focus,
        .form-select:focus,
        .form-textarea:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.1);
            transform: translateY(-3px);
            background: var(--card-bg);
        }

        .form-input::placeholder,
        .form-textarea::placeholder {
            color: var(--text-muted);
        }

        .form-textarea {
            resize: vertical;
            min-height: 100px;
        }

        /* Radio Group */
        .radio-group {
            display: flex;
            gap: 16px;
            flex-wrap: wrap;
        }

        .radio-label {
            flex: 1;
            min-width: 140px;
            padding: 14px 18px;
            border: 2px solid var(--border);
            border-radius: 12px;
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            background: var(--bg);
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            will-change: transform;
        }

        .radio-label:hover {
            border-color: var(--primary);
            background: var(--card-bg);
            transform: translateY(-3px);
        }

        .radio-label input[type="radio"] {
            width: 20px;
            height: 20px;
            accent-color: var(--primary);
            cursor: pointer;
        }

        .radio-label input[type="radio"]:checked + span {
            color: var(--primary);
            font-weight: 600;
        }

        .radio-label:has(input[type="radio"]:checked) {
            border-color: var(--primary);
            background: rgba(99, 102, 241, 0.05);
        }0.4, 0, 0.2, 1);
        }

        .radio-label:hover {
            border-color: var(--primary);
            background: var(--card-bg);
            transform: translateY(-2px);
        }

        .radio-label input[type="radio"] {
            width: 20px;
            height: 20px;
            accent-color: var(--primary);
            cursor: pointer;
        }

        .radio-label input[type="radio"]:checked + span {
            color: var(--primary);
            font-weight: 600;
        }

        /* Grid for inputs */
        .input-grid {
            display: grid;
            gap: 16px;
        }

        @media (min-width: 640px) {
            .input-grid-2 {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        /* Button */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 16px 32px;
            border: none;
            border-radius: 12px;
            background: var(--gradient-primary);
            background-size: 200% 200%;
            color: white;
            font-weight: 700;
            font-size: 1rem;
            cursor: pointer;
            box-shadow: 0 10px 30px var(--shadow-lg);
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            width: 100%;
            position: relative;
            overflow: hidden;
            will-change: transform;
        }

        .btn::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(255,255,255,0.2), transparent);
            transform: translateX(-100%);
            transition: transform 0.6s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        .btn:hover::before {
            transform: translateX(100%);
        }

        .btn:hover {
            transform: translateY(-5px) scale(1.02);
            box-shadow: 0 20px 50px var(--shadow-lg);
            background-position: 100% 50%;
        }

        .btn:active {
            transform: translateY(-2px) scale(1);
        }

        .btn-secondary {
            background: transparent;
            color: var(--primary);
            border: 2px solid var(--border);
            box-shadow: none;
        }

        .btn-secondary::before {
            display: none;
        }

        .btn-secondary:hover {
            background: var(--bg);
            border-color: var(--primary);
            transform: translateY(-3px);
        }

        /* Form Hint */
        .form-hint {
            font-size: 0.875rem;
            color: var(--text-muted);
            margin-top: 8px;
            line-height: 1.5;
        }

        /* Success/Error Messages */
        .success-message {
            background: linear-gradient(135deg, var(--success), #059669);
            color: white;
            padding: 16px 20px;
            border-radius: 12px;
            margin-bottom: 24px;
            box-shadow: 0 10px 30px rgba(16, 185, 129, 0.2);
            animation: fadeInUp 0.5s ease-out;
        }

        .error-message {
            background: rgba(239, 68, 68, 0.08);
            color: var(--danger);
            padding: 12px 16px;
            border-radius: 10px;
            border: 1px solid rgba(239, 68, 68, 0.2);
            margin-top: 8px;
            font-size: 0.875rem;
        }

        .field-error {
            color: var(--danger);
            font-size: 0.875rem;
            margin-top: 6px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .field-error::before {
            content: '⚠';
        }

        .invalid {
            border-color: var(--danger) !important;
            background: rgba(239, 68, 68, 0.03);
        }

        /* Action Buttons Container */
        .action-buttons {
            margin-top: 32px;
            display: flex;
            gap: 16px;
            flex-direction: column;
        }

        @media (min-width: 640px) {
            .action-buttons {
                flex-direction: row;
            }
            
            .action-buttons .btn {
                width: auto;
                flex: 1;
            }
            
            .action-buttons .btn-secondary {
                flex: 0 0 auto;
                min-width: 120px;
            }
        }

        /* Footer */
        footer {
            background: var(--card-bg);
            border-top: 1px solid var(--border);
            padding: 48px 0;
            margin-top: 80px;
        }

        .footer-content {
            text-align: center;
            color: var(--text-muted);
            font-size: 0.875rem;
        }

        /* Responsive adjustments */
        @media (max-width: 1023px) {
            .hero {
                padding: 100px 0 60px;
            }

            .main-section {
                padding: 60px 0;
            }

            .info-card,
            .requirements-box,
            .form-card {
                padding: 24px;
            }

            .theme-toggle {
                width: 50px;
                height: 50px;
                bottom: 20px;
                right: 20px;
            }

            .theme-toggle i {
                font-size: 20px;
            }
        }

        @media (max-width: 639px) {
            .container {
                padding: 0 16px;
            }

            .form-card {
                padding: 20px;
            }

            .radio-group {
                flex-direction: column;
            }

            .radio-label {
                min-width: 100%;
            }
        }

        /* Loading state shimmer */
        .shimmer {
            background: linear-gradient(
                90deg,
                var(--bg) 0%,
                var(--border) 50%,
                var(--bg) 100%
            );
            background-size: 200% 100%;
            animation: shimmer 1.5s infinite;
        }

        /* Smooth scroll indicator */
        .scroll-indicator {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            width: 30px;
            height: 50px;
            border: 2px solid rgba(255, 255, 255, 0.5);
            border-radius: 20px;
            z-index: 4;
            opacity: 0.8;
        }

        .scroll-indicator::before {
            content: '';
            position: absolute;
            top: 10px;
            left: 50%;
            transform: translateX(-50%);
            width: 6px;
            height: 10px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 3px;
            animation: scroll-down 2s infinite;
        }

        @keyframes scroll-down {
            0% {
                transform: translateX(-50%) translateY(0);
                opacity: 1;
            }
            100% {
                transform: translateX(-50%) translateY(15px);
                opacity: 0;
            }
        }
    </style>
</head>
<body>
    <x-navbar />
    <!-- Floating Background -->
    <div class="floating-circles">
        <div class="circle c1"></div>
        <div class="circle c2"></div>
        <div class="circle c3"></div>
        <div class="circle c4"></div>
        <div class="circle c5"></div>
    </div>

    <!-- Theme Toggle Button -->
    <button class="theme-toggle" onclick="toggleTheme()" aria-label="Toggle Dark Mode">
        <i class="fas fa-moon" id="theme-icon"></i>
    </button>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>SPMB Online</h1>
                <p>Sistem Penerimaan Murid Baru SD Negeri 4 Jatilaba - Daftarkan putra-putri Anda dengan mudah dan cepat secara online</p>
            </div>
        </div>
        <div class="scroll-indicator"></div>
    </section>

    <!-- Main Content -->
    <section class="main-section" id="info-section">
        <div class="container">
            <div class="content-grid">
                <!-- Info Column -->
                <div class="info-column">
                    <h2>Informasi SPMB</h2>
                    
                    <div class="info-card">
                        <h3>
                            <i class="fas fa-calendar-alt"></i>
                            Jadwal SPMB 2026
                        </h3>
                        <div class="schedule-list">
                            <div class="schedule-item">
                                <span>Pendaftaran Gelombang 1</span>
                                <span>1 - 15 Juni 2024</span>
                            </div>
                            <div class="schedule-item">
                                <span>Pengumuman Gelombang 1</span>
                                <span>20 Juni 2024</span>
                            </div>
                            <div class="schedule-item">
                                <span>Pendaftaran Gelombang 2</span>
                                <span>25 - 30 Juni 2024</span>
                            </div>
                            <div class="schedule-item">
                                <span>Pengumuman Gelombang 2</span>
                                <span>5 Juli 2024</span>
                            </div>
                        </div>
                    </div>

                    <div class="requirements-box">
                        <h3>📋 Persyaratan</h3>
                        <ul>
                            <li>Usia minimal 6 tahun per 1 Juli 2024</li>
                            <li>Fotokopi akta kelahiran</li>
                            <li>Fotokopi kartu keluarga</li>
                            <li>Pas foto 3x4 (2 lembar)</li>
                            <li>Surat keterangan sehat dari dokter</li>
                        </ul>
                        <p class="form-hint" style="margin-top: 16px;">
                            Pastikan semua berkas discan dan diunggah pada saat registrasi (format JPG/PNG/PDF - maksimal 2MB per file).
                        </p>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="form-column" id="form-section">
                    <div class="form-card">
                        <h2>
                            <i class="fas fa-edit"></i>
                            Formulir Pendaftaran
                        </h2>

                        <form>
                            <h4 class="form-section-title">
                                <i class="fas fa-user"></i>
                                Data Calon Siswa
                            </h4>

                            <div class="form-group">
                                <label class="form-label" for="nama_lengkap">Nama Lengkap</label>
                                <input 
                                    id="nama_lengkap" 
                                    type="text" 
                                    name="nama_lengkap" 
                                    class="form-input" 
                                    required 
                                    placeholder="Masukkan nama lengkap"
                                >
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="nama_panggilan">Nama Panggilan</label>
                                <input 
                                    id="nama_panggilan" 
                                    type="text" 
                                    name="nama_panggilan" 
                                    class="form-input" 
                                    required 
                                    placeholder="Masukkan nama panggilan"
                                >
                            </div>

                            <div class="input-grid input-grid-2">
                                <div class="form-group">
                                    <label class="form-label" for="tempat_lahir">Tempat Lahir</label>
                                    <input 
                                        id="tempat_lahir" 
                                        type="text" 
                                        name="tempat_lahir" 
                                        class="form-input" 
                                        required 
                                        placeholder="Kota kelahiran"
                                    >
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="tanggal_lahir">Tanggal Lahir</label>
                                    <input 
                                        id="tanggal_lahir" 
                                        type="date" 
                                        name="tanggal_lahir" 
                                        class="form-input" 
                                        required
                                    >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Jenis Kelamin</label>
                                <div class="radio-group">
                                    <label class="radio-label">
                                        <input type="radio" name="jenis_kelamin" value="L" required>
                                        <span>Laki-laki</span>
                                    </label>
                                    <label class="radio-label">
                                        <input type="radio" name="jenis_kelamin" value="P">
                                        <span>Perempuan</span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="agama">Agama</label>
                                <select id="agama" name="agama" class="form-select" required>
                                    <option value="">Pilih Agama</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="alamat">Alamat</label>
                                <textarea 
                                    id="alamat" 
                                    name="alamat" 
                                    rows="3" 
                                    class="form-textarea" 
                                    required 
                                    placeholder="Masukkan alamat lengkap"
                                ></textarea>
                            </div>

                            <h4 class="form-section-title">
                                <i class="fas fa-users"></i>
                                Data Orang Tua / Wali
                            </h4>

                            <div class="input-grid input-grid-2">
                                <div class="form-group">
                                    <label class="form-label" for="nama_ayah">Nama Ayah</label>
                                    <input 
                                        id="nama_ayah" 
                                        type="text" 
                                        name="nama_ayah" 
                                        class="form-input" 
                                        required 
                                        placeholder="Nama ayah"
                                    >
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="nama_ibu">Nama Ibu</label>
                                    <input 
                                        id="nama_ibu" 
                                        type="text" 
                                        name="nama_ibu" 
                                        class="form-input" 
                                        required 
                                        placeholder="Nama ibu"
                                    >
                                </div>
                            </div>

                            <div class="input-grid input-grid-2">
                                <div class="form-group">
                                    <label class="form-label" for="pekerjaan_ayah">Pekerjaan Ayah</label>
                                    <input 
                                        id="pekerjaan_ayah" 
                                        type="text" 
                                        name="pekerjaan_ayah" 
                                        class="form-input" 
                                        placeholder="Pekerjaan ayah"
                                    >
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="pekerjaan_ibu">Pekerjaan Ibu</label>
                                    <input 
                                        id="pekerjaan_ibu" 
                                        type="text" 
                                        name="pekerjaan_ibu" 
                                        class="form-input" 
                                        placeholder="Pekerjaan ibu"
                                    >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="no_telepon">No. Telepon/HP</label>
                                <input 
                                    id="no_telepon" 
                                    type="tel" 
                                    name="no_telepon" 
                                    class="form-input" 
                                    required 
                                    placeholder="08xx xxxx xxxx"
                                >
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="no_darurat">Kontak Darurat</label>
                                <input 
                                    id="no_darurat" 
                                    type="tel" 
                                    name="no_darurat" 
                                    class="form-input" 
                                    placeholder="Nomor telepon jika darurat"
                                >
                                <div class="form-hint">
                                    Opsional — nomor keluarga atau saudara yang bisa dihubungi saat darurat.
                                </div>
                            </div>

                            <h4 class="form-section-title">
                                <i class="fas fa-paperclip"></i>
                                Upload Berkas (opsional)
                            </h4>

                            <div class="form-group">
                                <label class="form-label" for="akta">Akta Kelahiran</label>
                                <input 
                                    id="akta" 
                                    type="file" 
                                    name="akta" 
                                    accept=".jpg,.jpeg,.png,.pdf" 
                                    class="form-input"
                                >
                                <div class="form-hint">Format: JPG/PNG/PDF - Maksimal 2MB</div>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="kk">Kartu Keluarga</label>
                                <input 
                                    id="kk" 
                                    type="file" 
                                    name="kk" 
                                    accept=".jpg,.jpeg,.png,.pdf" 
                                    class="form-input"
                                >
                                <div class="form-hint">Format: JPG/PNG/PDF - Maksimal 2MB</div>
                            </div>

                            <div class="action-buttons">
                                <button type="submit" class="btn" aria-label="Kirim Pendaftaran">
                                    <i class="fas fa-paper-plane"></i>
                                    <span>Daftar Sekarang</span>
                                </button>

                                <button type="button" class="btn btn-secondary" onclick="window.location.href='/'">
                                    Batal
                                </button>
                            </div>

                            <p class="form-hint" style="margin-top: 16px; text-align: center;">
                                Dengan menekan <strong>Daftar Sekarang</strong> Anda menyetujui bahwa data yang dimasukkan adalah benar.
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <x-footer />

    <script>
        // Theme Toggle with smooth transition
        function toggleTheme() {
            const html = document.documentElement;
            const current = html.getAttribute('data-theme');
            const icon = document.getElementById('theme-icon');

            const next = current === 'dark' ? 'light' : 'dark';
            html.setAttribute('data-theme', next);
            localStorage.setItem('theme', next);
            
            // Smooth icon transition with elastic effect
            icon.style.transition = 'transform 0.6s cubic-bezier(0.34, 1.56, 0.64, 1)';
            icon.style.transform = 'rotate(360deg) scale(1.2)';
            setTimeout(() => {
                icon.className = next === 'dark' ? 'fas fa-sun' : 'fas fa-moon';
                setTimeout(() => {
                    icon.style.transform = 'rotate(0deg) scale(1)';
                }, 50);
            }, 300);
        }

        // Load saved theme on page load
        document.addEventListener('DOMContentLoaded', function() {
            const saved = localStorage.getItem('theme') || 'light';
            document.documentElement.setAttribute('data-theme', saved);
            const icon = document.getElementById('theme-icon');
            if (icon) {
                icon.className = saved === 'dark' ? 'fas fa-sun' : 'fas fa-moon';
            }

            // Add stagger animation to schedule items with elastic effect
            const scheduleItems = document.querySelectorAll('.schedule-item');
            scheduleItems.forEach((item, index) => {
                item.style.opacity = '0';
                item.style.transform = 'translateX(-30px)';
                setTimeout(() => {
                    item.style.transition = 'all 0.6s cubic-bezier(0.34, 1.56, 0.64, 1)';
                    item.style.opacity = '1';
                    item.style.transform = 'translateX(0)';
                }, index * 100 + 300);
            });

            // Add stagger animation to requirement items with bounce effect
            const requirementItems = document.querySelectorAll('.requirements-box li');
            requirementItems.forEach((item, index) => {
                item.style.opacity = '0';
                item.style.transform = 'translateX(-30px)';
                setTimeout(() => {
                    item.style.transition = 'all 0.6s cubic-bezier(0.34, 1.56, 0.64, 1)';
                    item.style.opacity = '1';
                    item.style.transform = 'translateX(0)';
                }, index * 100 + 500);
            });

            // Form validation with visual feedback
            const form = document.querySelector('form');
            if (form) {
                const inputs = form.querySelectorAll('input, select, textarea');
                
                inputs.forEach(input => {
                    // Real-time validation feedback
                    input.addEventListener('blur', function() {
                        if (this.hasAttribute('required') && !this.value.trim()) {
                            this.classList.add('invalid');
                            this.style.transition = 'all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1)';
                        } else {
                            this.classList.remove('invalid');
                        }
                    });

                    // Remove invalid class on input with smooth transition
                    input.addEventListener('input', function() {
                        this.classList.remove('invalid');
                    });
                });

                // Form submit validation
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    let isValid = true;
                    const requiredFields = form.querySelectorAll('[required]');
                    
                    requiredFields.forEach(field => {
                        if (!field.value || field.value.trim() === '') {
                            field.classList.add('invalid');
                            field.style.transition = 'all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1)';
                            isValid = false;
                        } else {
                            field.classList.remove('invalid');
                        }
                    });

                    if (isValid) {
                        // Show success animation with elastic effect
                        const submitBtn = form.querySelector('button[type="submit"]');
                        const originalText = submitBtn.innerHTML;
                        submitBtn.style.transition = 'all 0.6s cubic-bezier(0.34, 1.56, 0.64, 1)';
                        submitBtn.style.transform = 'scale(1.1)';
                        submitBtn.innerHTML = '<i class="fas fa-check"></i> Berhasil!';
                        submitBtn.style.background = 'linear-gradient(135deg, #10b981, #059669)';
                        
                        setTimeout(() => {
                            submitBtn.style.transform = 'scale(1)';
                        }, 200);
                        
                        setTimeout(() => {
                            alert('Pendaftaran berhasil! Data Anda telah dikirim.');
                            form.reset();
                            submitBtn.innerHTML = originalText;
                            submitBtn.style.background = '';
                        }, 1500);
                    } else {
                        // Scroll to first invalid field with smooth animation
                        const firstInvalid = form.querySelector('.invalid');
                        if (firstInvalid) {
                            firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
                            firstInvalid.focus();
                            // Shake animation for invalid field
                            firstInvalid.style.animation = 'shake 0.5s cubic-bezier(0.34, 1.56, 0.64, 1)';
                            setTimeout(() => {
                                firstInvalid.style.animation = '';
                            }, 500);
                        }
                    }
                });
            }

            // Smooth scroll for scroll indicator with easing
            const scrollIndicator = document.querySelector('.scroll-indicator');
            if (scrollIndicator) {
                scrollIndicator.addEventListener('click', function() {
                    document.querySelector('.main-section').scrollIntoView({ 
                        behavior: 'smooth',
                        block: 'start'
                    });
                });
            }

            // Add parallax effect to hero with smooth transition
            let ticking = false;
            window.addEventListener('scroll', function() {
                if (!ticking) {
                    window.requestAnimationFrame(function() {
                        const scrolled = window.pageYOffset;
                        const hero = document.querySelector('.hero');
                        if (hero && scrolled < hero.offsetHeight) {
                            hero.style.transform = `translateY(${scrolled * 0.3}px)`;
                            hero.style.opacity = `${1 - (scrolled / hero.offsetHeight) * 0.3}`;
                        }

                        // Hide scroll indicator after scrolling with fade
                        if (scrollIndicator) {
                            if (scrolled > 100) {
                                scrollIndicator.style.transition = 'opacity 0.4s ease';
                                scrollIndicator.style.opacity = '0';
                            } else {
                                scrollIndicator.style.transition = 'opacity 0.4s ease';
                                scrollIndicator.style.opacity = '0.8';
                            }
                        }
                        ticking = false;
                    });
                    ticking = true;
                }
            });

            // File input custom styling feedback with smooth transition
            const fileInputs = document.querySelectorAll('input[type="file"]');
            fileInputs.forEach(input => {
                input.addEventListener('change', function() {
                    if (this.files.length > 0) {
                        const fileName = this.files[0].name;
                        const label = this.previousElementSibling;
                        if (label && label.classList.contains('form-label')) {
                            label.style.transition = 'color 0.3s ease';
                            label.innerHTML = `${label.textContent.split(' - ')[0]} - <span style="color: var(--success); transition: all 0.3s ease;">${fileName}</span>`;
                        }
                    }
                });
            });
        });

        // Add shake animation keyframe
        const style = document.createElement('style');
        style.textContent = `
            @keyframes shake {
                0%, 100% { transform: translateX(0); }
                25% { transform: translateX(-10px); }
                75% { transform: translateX(10px); }
            }
        `;
        document.head.appendChild(style);

        // Smooth page load animation
        window.addEventListener('load', function() {
            document.body.style.opacity = '0';
            document.body.style.transition = 'opacity 0.6s cubic-bezier(0.4, 0, 0.2, 1)';
            setTimeout(() => {
                document.body.style.opacity = '1';
            }, 100);
        });
    </script>
</body>
</html>