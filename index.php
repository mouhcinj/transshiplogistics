<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TransShip Logistics - Professional Logistics Solutions</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            /* Professional Blue Theme */
            --primary-blue: #0D47A1;
            --secondary-blue: #1976D2;
            --accent-teal: #00C9B1;
            --light-blue: #E3F2FD;
            --dark-blue: #01579B;
            
            /* Neutral Palette */
            --white: #FFFFFF;
            --gray-50: #FAFAFA;
            --gray-100: #F5F5F5;
            --gray-200: #EEEEEE;
            --gray-300: #E0E0E0;
            --gray-400: #BDBDBD;
            --gray-500: #9E9E9E;
            --gray-600: #757575;
            --gray-700: #616161;
            --gray-800: #424242;
            --gray-900: #212121;
            
            /* Status Colors */
            --success: #4CAF50;
            --warning: #FF9800;
            --error: #F44336;
            --info: #2196F3;
            
            /* Shadows & Elevations */
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            --shadow-2xl: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            
            /* Border Radius */
            --radius-sm: 6px;
            --radius-md: 12px;
            --radius-lg: 16px;
            --radius-xl: 24px;
            
            /* Transitions */
            --transition-fast: 150ms cubic-bezier(0.4, 0, 0.2, 1);
            --transition-normal: 300ms cubic-bezier(0.4, 0, 0.2, 1);
            --transition-slow: 500ms cubic-bezier(0.4, 0, 0.2, 1);
        }

        [data-theme="dark"] {
            --white: #121212;
            --gray-50: #1E1E1E;
            --gray-100: #2D2D2D;
            --gray-200: #3A3A3A;
            --gray-300: #484848;
            --gray-400: #616161;
            --gray-500: #9E9E9E;
            --gray-600: #BDBDBD;
            --gray-700: #E0E0E0;
            --gray-800: #F5F5F5;
            --gray-900: #FAFAFA;
            
            --light-blue: #1A237E;
            --primary-blue: #1976D2;
            --secondary-blue: #42A5F5;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background: var(--gray-50);
            color: var(--gray-800);
            line-height: 1.6;
            transition: background var(--transition-normal), color var(--transition-normal);
        }

        /* Navigation Bar */
        .navbar {
            background: var(--white);
            box-shadow: var(--shadow-sm);
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: all var(--transition-normal);
        }

        .nav-container {
            max-width: 1440px;
            margin: 0 auto;
            padding: 0 32px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 80px;
        }

        .nav-logo {
            display: flex;
            align-items: center;
            gap: 16px;
            text-decoration: none;
            transition: transform var(--transition-fast);
        }

        .nav-logo:hover {
            transform: scale(1.02);
        }

        .logo-icon {
            width: 48px;
            height: 48px;
            background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
            border-radius: var(--radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
        }

        .logo-text {
            display: flex;
            flex-direction: column;
        }

        .logo-title {
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--primary-blue);
            line-height: 1.2;
        }

        .logo-subtitle {
            font-size: 0.75rem;
            color: var(--gray-500);
            font-weight: 500;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 8px;
            align-items: center;
        }

        .nav-link {
            padding: 12px 20px;
            border-radius: var(--radius-lg);
            text-decoration: none;
            color: var(--gray-700);
            font-weight: 500;
            transition: all var(--transition-fast);
            position: relative;
        }

        .nav-link:hover {
            background: var(--gray-100);
            color: var(--primary-blue);
        }

        .nav-link.active {
            background: var(--light-blue);
            color: var(--primary-blue);
        }

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .theme-toggle {
            width: 48px;
            height: 48px;
            border: none;
            border-radius: var(--radius-md);
            background: var(--gray-100);
            color: var(--gray-600);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all var(--transition-fast);
            font-size: 1.2rem;
        }

        .theme-toggle:hover {
            background: var(--gray-200);
            transform: scale(1.05);
        }

        .dropdown-container {
            position: relative;
        }

        .dropdown-trigger {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 12px 20px;
            background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
            color: white;
            border: none;
            border-radius: var(--radius-md);
            cursor: pointer;
            font-weight: 600;
            transition: all var(--transition-fast);
        }

        .dropdown-trigger:hover {
            transform: translateY(-1px);
            box-shadow: var(--shadow-lg);
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            right: 0;
            margin-top: 8px;
            background: var(--white);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-xl);
            min-width: 240px;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-8px);
            transition: all var(--transition-fast);
            border: 1px solid var(--gray-200);
        }

        .dropdown-menu.show {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .dropdown-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 16px 20px;
            text-decoration: none;
            color: var(--gray-700);
            transition: all var(--transition-fast);
            font-weight: 500;
        }

        .dropdown-item:hover {
            background: var(--gray-50);
            color: var(--primary-blue);
        }

        .dropdown-item:first-child {
            border-radius: var(--radius-lg) var(--radius-lg) 0 0;
        }

        .dropdown-item:last-child {
            border-radius: 0 0 var(--radius-lg) var(--radius-lg);
        }

        .dropdown-icon {
            width: 20px;
            text-align: center;
            color: var(--gray-500);
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--secondary-blue) 50%, var(--accent-teal) 100%);
            color: white;
            padding: 120px 32px 80px;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Ccircle cx='7' cy='7' r='1'/%3E%3Ccircle cx='30' cy='30' r='2'/%3E%3Ccircle cx='53' cy='53' r='1'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        .hero-container {
            max-width: 1440px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .hero-content {
            max-width: 800px;
            text-align: center;
            margin: 0 auto;
        }

        .hero-title {
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 900;
            margin-bottom: 24px;
            line-height: 1.1;
            letter-spacing: -0.02em;
        }

        .hero-subtitle {
            font-size: clamp(1.125rem, 2vw, 1.375rem);
            margin-bottom: 48px;
            opacity: 0.9;
            line-height: 1.5;
            font-weight: 400;
        }

        .hero-actions {
            display: flex;
            gap: 16px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            padding: 16px 32px;
            border-radius: var(--radius-md);
            text-decoration: none;
            font-weight: 600;
            font-size: 1rem;
            transition: all var(--transition-fast);
            border: none;
            cursor: pointer;
            white-space: nowrap;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--accent-teal), #00B8A2);
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border: 2px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.2);
            border-color: rgba(255, 255, 255, 0.4);
        }

        /* Stats Section */
        .stats-section {
            background: var(--white);
            padding: 80px 32px;
            margin-top: -40px;
            position: relative;
            z-index: 2;
        }

        .stats-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 48px;
            background: var(--white);
            border-radius: var(--radius-xl);
            padding: 48px;
            box-shadow: var(--shadow-lg);
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 900;
            color: var(--primary-blue);
            margin-bottom: 8px;
            line-height: 1;
        }

        .stat-label {
            color: var(--gray-600);
            font-weight: 500;
            font-size: 1.1rem;
        }

        .stat-accent {
            color: var(--accent-teal);
        }

        /* Services Section */
        .services-section {
            padding: 120px 32px;
            background: var(--gray-50);
        }

        .services-container {
            max-width: 1440px;
            margin: 0 auto;
        }

        .section-header {
            text-align: center;
            margin-bottom: 80px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .section-title {
            font-size: clamp(2rem, 4vw, 3rem);
            font-weight: 800;
            color: var(--gray-900);
            margin-bottom: 24px;
            line-height: 1.2;
        }

        .section-subtitle {
            font-size: 1.25rem;
            color: var(--gray-600);
            line-height: 1.6;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 32px;
        }

        .service-card {
            background: var(--white);
            border-radius: var(--radius-xl);
            padding: 40px;
            box-shadow: var(--shadow-md);
            transition: all var(--transition-normal);
            border: 1px solid var(--gray-200);
        }

        .service-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-xl);
            border-color: var(--primary-blue);
        }

        .service-icon {
            width: 80px;
            height: 80px;
            border-radius: var(--radius-lg);
            background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2rem;
            margin-bottom: 24px;
        }

        .service-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--gray-900);
            margin-bottom: 16px;
        }

        .service-description {
            color: var(--gray-600);
            margin-bottom: 24px;
            line-height: 1.7;
        }

        .service-features {
            list-style: none;
        }

        .service-features li {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 8px 0;
            color: var(--gray-700);
        }

        .service-features li::before {
            content: '✓';
            color: var(--accent-teal);
            font-weight: bold;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: var(--light-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.75rem;
        }

        /* Get Quote Section */
        .quote-section {
            padding: 120px 32px;
            background: var(--white);
            position: relative;
        }

        .quote-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .quote-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: center;
        }

        .quote-content h2 {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--gray-900);
            margin-bottom: 24px;
            line-height: 1.2;
        }

        .quote-content p {
            font-size: 1.125rem;
            color: var(--gray-600);
            margin-bottom: 32px;
            line-height: 1.7;
        }

        .quote-features {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
        }

        .quote-feature {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .quote-feature-icon {
            width: 48px;
            height: 48px;
            border-radius: var(--radius-md);
            background: var(--light-blue);
            color: var(--primary-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
        }

        .quote-feature-text {
            font-weight: 600;
            color: var(--gray-700);
        }

        .quote-form-card {
            background: var(--gray-50);
            border-radius: var(--radius-xl);
            padding: 48px;
            box-shadow: var(--shadow-lg);
        }

        .form-group {
            margin-bottom: 24px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--gray-700);
            font-size: 0.95rem;
        }

        .form-input {
            width: 100%;
            padding: 16px;
            border: 2px solid var(--gray-200);
            border-radius: var(--radius-md);
            font-size: 1rem;
            transition: all var(--transition-fast);
            background: var(--white);
            color: var(--gray-800);
        }

        .form-input:focus {
            outline: none;
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 3px rgba(13, 71, 161, 0.1);
        }

        .form-input::placeholder {
            color: var(--gray-400);
        }

        .form-select {
            appearance: none;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
            background-position: right 12px center;
            background-repeat: no-repeat;
            background-size: 16px;
            padding-right: 48px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
        }

        .form-textarea {
            resize: vertical;
            min-height: 120px;
        }

        .btn-submit {
            width: 100%;
            background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
            color: white;
            justify-content: center;
        }

        .btn-submit:hover {
            transform: translateY(-1px);
            box-shadow: var(--shadow-lg);
        }

        /* Footer */
        .footer {
            background: var(--gray-900);
            color: var(--gray-300);
            padding: 80px 32px 32px;
        }

        .footer-container {
            max-width: 1440px;
            margin: 0 auto;
        }

        .footer-content {
            text-align: center;
            margin-bottom: 48px;
        }

        .footer-logo {
            font-size: 2rem;
            font-weight: 900;
            color: white;
            margin-bottom: 16px;
        }

        .footer-description {
            max-width: 600px;
            margin: 0 auto 32px;
            line-height: 1.7;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 32px;
            flex-wrap: wrap;
        }

        .footer-link {
            color: var(--gray-400);
            text-decoration: none;
            font-weight: 500;
            transition: color var(--transition-fast);
        }

        .footer-link:hover {
            color: var(--accent-teal);
        }

        .footer-bottom {
            border-top: 1px solid var(--gray-700);
            padding-top: 32px;
            text-align: center;
            color: var(--gray-500);
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .nav-container {
                padding: 0 16px;
                height: 64px;
            }

            .nav-links {
                display: none;
            }

            .hero {
                padding: 80px 16px 60px;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
                padding: 32px;
                gap: 32px;
            }

            .services-section {
                padding: 80px 16px;
            }

            .services-grid {
                grid-template-columns: 1fr;
            }

            .service-card {
                padding: 32px;
            }

            .quote-section {
                padding: 80px 16px;
            }

            .quote-grid {
                grid-template-columns: 1fr;
                gap: 48px;
            }

            .quote-features {
                grid-template-columns: 1fr;
            }

            .quote-form-card {
                padding: 32px;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .hero-actions {
                flex-direction: column;
                align-items: center;
            }

            .btn {
                width: 100%;
                max-width: 300px;
                justify-content: center;
            }
        }

        @media (max-width: 480px) {
            .stat-number {
                font-size: 2.5rem;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out;
        }

        /* Loading States */
        .loading {
            position: relative;
            overflow: hidden;
        }

        .loading::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            animation: loading 1.5s infinite;
        }

        @keyframes loading {
            0% { left: -100%; }
            100% { left: 100%; }
        }

        /* Scrollbar Styling */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: var(--gray-100);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--gray-400);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--gray-500);
        }
    </style>
</head>
<body data-theme="light">
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="#" class="nav-logo">
                <div class="logo-icon">
                    <i class="fas fa-shipping-fast"></i>
                </div>
                <div class="logo-text">
                    <div class="logo-title">TransShip Logistics</div>
                    <div class="logo-subtitle">Your Company Name</div>
                </div>
            </a>
            
            <ul class="nav-links">
                <li><a href="#home" class="nav-link active">Home</a></li>
                <li><a href="#services" class="nav-link">Services</a></li>
                <li><a href="#quote" class="nav-link">Get Quote</a></li>
                <li><a href="#about" class="nav-link">About</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
            
            <div class="nav-actions">
                <button class="theme-toggle" onclick="toggleTheme()" id="themeToggle">
                    <i class="fas fa-moon"></i>
                </button>
                
                <div class="dropdown-container">
                    <button class="dropdown-trigger" onclick="toggleDropdown()">
                        <i class="fas fa-user-shield"></i>
                        <span>Staff Login</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="dropdown-menu" id="staffDropdown">
                        <a href="auth/login.php?role=admin" class="dropdown-item">
                            <i class="fas fa-crown dropdown-icon"></i>
                            <span>Administrator</span>
                        </a>
                        <a href="auth/login.php?role=employee" class="dropdown-item">
                            <i class="fas fa-clipboard-list dropdown-icon"></i>
                            <span>Employee/Dispatcher</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-container">
            <div class="hero-content">
                <h1 class="hero-title animate-fade-in-up">Professional Logistics Solutions</h1>
                <p class="hero-subtitle animate-fade-in-up">Streamline your transportation needs with our comprehensive logistics platform. Vehicle transport, maritime shipping, and towing services.</p>
                <div class="hero-actions animate-fade-in-up">
                    <a href="#quote" class="btn btn-primary">
                        <i class="fas fa-calculator"></i>
                        Get Instant Quote
                    </a>
                    <a href="auth/login.php" class="btn btn-secondary">
                        <i class="fas fa-building"></i>
                        Client Portal
                    </a>
                    <a href="auth/login.php?role=driver" class="btn btn-secondary">
                        <i class="fas fa-truck"></i>
                        Driver Portal
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="stats-container">
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-number">15,000<span class="stat-accent">+</span></div>
                    <div class="stat-label">Successful Shipments</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">20<span class="stat-accent">+</span></div>
                    <div class="stat-label">Years Experience</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">24<span class="stat-accent">/7</span></div>
                    <div class="stat-label">Customer Support</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">99<span class="stat-accent">%</span></div>
                    <div class="stat-label">On-Time Delivery</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section" id="services">
        <div class="services-container">
            <div class="section-header">
                <h2 class="section-title">Our Services</h2>
                <p class="section-subtitle">Comprehensive logistics solutions tailored to meet your transportation needs with precision and reliability.</p>
            </div>
            
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-truck-loading"></i>
                    </div>
                    <h3 class="service-title">Vehicle Transport</h3>
                    <p class="service-description">Professional vehicle transportation services for cars, motorcycles, and heavy equipment with comprehensive insurance coverage.</p>
                    <ul class="service-features">
                        <li>Single and multi-level car carriers</li>
                        <li>Motorcycle and ATV transport</li>
                        <li>Heavy equipment and luxury vehicles</li>
                        <li>Enclosed and open transport options</li>
                        <li>Real-time GPS tracking</li>
                    </ul>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-ship"></i>
                    </div>
                    <h3 class="service-title">Maritime Shipping</h3>
                    <p class="service-description">Complete container shipping solutions from port to destination with full customs support and documentation.</p>
                    <ul class="service-features">
                        <li>Port-to-destination delivery</li>
                        <li>Container depot operations</li>
                        <li>Intermodal coordination</li>
                        <li>Customs documentation support</li>
                        <li>Temperature-controlled containers</li>
                    </ul>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3 class="service-title">Emergency Towing</h3>
                    <p class="service-description">24/7 emergency and scheduled towing services for all types of vehicles with rapid response times.</p>
                    <ul class="service-features">
                        <li>24/7 emergency roadside assistance</li>
                        <li>Vehicle recovery operations</li>
                        <li>Long-distance towing services</li>
                        <li>Specialty equipment transport</li>
                        <li>Accident scene cleanup</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Get Quote Section -->
    <section class="quote-section" id="quote">
        <div class="quote-container">
            <div class="quote-grid">
                <div class="quote-content">
                    <h2>Get Your Instant Quote</h2>
                    <p>Receive a competitive quote for your logistics needs within minutes. Our advanced pricing algorithm considers all factors to provide you with accurate, transparent pricing.</p>
                    
                    <div class="quote-features">
                        <div class="quote-feature">
                            <div class="quote-feature-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="quote-feature-text">Instant Response</div>
                        </div>
                        <div class="quote-feature">
                            <div class="quote-feature-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div class="quote-feature-text">Fully Insured</div>
                        </div>
                        <div class="quote-feature">
                            <div class="quote-feature-icon">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                            <div class="quote-feature-text">Competitive Rates</div>
                        </div>
                        <div class="quote-feature">
                            <div class="quote-feature-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="quote-feature-text">GPS Tracking</div>
                        </div>
                    </div>
                </div>
                
                <div class="quote-form-card">
                    <form id="quoteForm" class="quote-form">
                        <div class="form-group">
                            <label class="form-label">Service Type</label>
                            <select class="form-input form-select" name="service_type" required>
                                <option value="">Select service type</option>
                                <option value="vehicle_transport">Vehicle Transport</option>
                                <option value="maritime_shipping">Maritime Shipping</option>
                                <option value="emergency_towing">Emergency Towing</option>
                                <option value="heavy_equipment">Heavy Equipment</option>
                            </select>
                        </div>
                        
                        <div class="form-grid">
                            <div class="form-group">
                                <label class="form-label">Pickup Location</label>
                                <input type="text" class="form-input" name="pickup_location" placeholder="Enter pickup address" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Delivery Location</label>
                                <input type="text" class="form-input" name="delivery_location" placeholder="Enter delivery address" required>
                            </div>
                        </div>
                        
                        <div class="form-grid">
                            <div class="form-group">
                                <label class="form-label">Pickup Date</label>
                                <input type="date" class="form-input" name="pickup_date" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Vehicle Count</label>
                                <select class="form-input form-select" name="vehicle_count" required>
                                    <option value="">Select count</option>
                                    <option value="1">1 Vehicle</option>
                                    <option value="2">2 Vehicles</option>
                                    <option value="3">3 Vehicles</option>
                                    <option value="4">4 Vehicles</option>
                                    <option value="5+">5+ Vehicles</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-grid">
                            <div class="form-group">
                                <label class="form-label">Your Name</label>
                                <input type="text" class="form-input" name="customer_name" placeholder="Full name" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Phone Number</label>
                                <input type="tel" class="form-input" name="phone" placeholder="(XXX) XXX-XXXX" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-input" name="email" placeholder="your.email@example.com" required>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Additional Details</label>
                            <textarea class="form-input form-textarea" name="details" placeholder="Please provide any additional information about your shipment requirements..."></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-submit">
                            <i class="fas fa-paper-plane"></i>
                            Get My Quote
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-content">
                <div class="footer-logo">TransShip Logistics</div>
                <p class="footer-description">Your trusted partner in professional logistics solutions. We deliver excellence in every shipment, ensuring your cargo reaches its destination safely and on time.</p>
                <div class="footer-links">
                    <a href="#" class="footer-link">Privacy Policy</a>
                    <a href="#" class="footer-link">Terms of Service</a>
                    <a href="#" class="footer-link">Contact Us</a>
                    <a href="#" class="footer-link">Careers</a>
                    <a href="#" class="footer-link">Support</a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 TransShip Logistics. All rights reserved. | Professional logistics solutions you can trust.</p>
            </div>
        </div>
    </footer>

    <script>
        // Theme Toggle Functionality
        function toggleTheme() {
            const body = document.body;
            const themeToggle = document.getElementById('themeToggle');
            const icon = themeToggle.querySelector('i');
            
            if (body.getAttribute('data-theme') === 'light') {
                body.setAttribute('data-theme', 'dark');
                icon.className = 'fas fa-sun';
                localStorage.setItem('theme', 'dark');
            } else {
                body.setAttribute('data-theme', 'light');
                icon.className = 'fas fa-moon';
                localStorage.setItem('theme', 'light');
            }
        }

        // Load saved theme
        window.addEventListener('DOMContentLoaded', function() {
            const savedTheme = localStorage.getItem('theme') || 'light';
            const themeToggle = document.getElementById('themeToggle');
            const icon = themeToggle.querySelector('i');
            
            document.body.setAttribute('data-theme', savedTheme);
            icon.className = savedTheme === 'dark' ? 'fas fa-sun' : 'fas fa-moon';
        });

        // Dropdown Functionality
        function toggleDropdown() {
            const dropdown = document.getElementById('staffDropdown');
            dropdown.classList.toggle('show');
        }

        // Close dropdown when clicking outside
        window.addEventListener('click', function(e) {
            const dropdown = document.getElementById('staffDropdown');
            const trigger = document.querySelector('.dropdown-trigger');
            
            if (!trigger.contains(e.target)) {
                dropdown.classList.remove('show');
            }
        });

        // Smooth Scrolling for Navigation Links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Quote Form Handling
        document.getElementById('quoteForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const submitBtn = this.querySelector('.btn-submit');
            const originalContent = submitBtn.innerHTML;
            
            // Show loading state
            submitBtn.classList.add('loading');
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Processing...';
            
            // Collect form data
            const formData = new FormData(this);
            const data = Object.fromEntries(formData.entries());
            
            // Simulate API call
            setTimeout(() => {
                // Reset form
                this.reset();
                
                // Reset button
                submitBtn.classList.remove('loading');
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalContent;
                
                // Show success message
                alert('Thank you! Your quote request has been submitted successfully. A member of our team will contact you within 30 minutes with your personalized quote.');
            }, 2000);
        });

        // Navigation Active State
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.nav-link');
            
            let currentSection = '';
            
            sections.forEach(section => {
                const sectionTop = section.getBoundingClientRect().top;
                const sectionHeight = section.offsetHeight;
                
                if (sectionTop <= 100 && sectionTop + sectionHeight > 100) {
                    currentSection = section.getAttribute('id');
                }
            });
            
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${currentSection}`) {
                    link.classList.add('active');
                }
            });
        });

        // Phone Number Formatting
        document.querySelector('input[name="phone"]').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            
            if (value.length >= 6) {
                value = value.replace(/(\d{3})(\d{3})(\d{4})/, '($1) $2-$3');
            } else if (value.length >= 3) {
                value = value.replace(/(\d{3})(\d{0,3})/, '($1) $2');
            }
            
            e.target.value = value;
        });

        // Set minimum date to today for pickup date
        document.addEventListener('DOMContentLoaded', function() {
            const today = new Date().toISOString().split('T')[0];
            document.querySelector('input[name="pickup_date"]').setAttribute('min', today);
        });

        // Intersection Observer for Animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.service-card, .stat-item, .quote-feature').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });

        // Navbar Scroll Effect
        let lastScrollTop = 0;
        const navbar = document.querySelector('.navbar');

        window.addEventListener('scroll', function() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            if (scrollTop > lastScrollTop && scrollTop > 100) {
                navbar.style.transform = 'translateY(-100%)';
            } else {
                navbar.style.transform = 'translateY(0)';
            }
            
            if (scrollTop > 50) {
                navbar.style.backdropFilter = 'blur(10px)';
                navbar.style.backgroundColor = 'rgba(255, 255, 255, 0.95)';
            } else {
                navbar.style.backdropFilter = 'none';
                navbar.style.backgroundColor = 'var(--white)';
            }
            
            lastScrollTop = scrollTop;
        });
    </script>
</body>
</html>