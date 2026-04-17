<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suropriyo E-Commerce - Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        :root {
            --white: #ffffff;
            --dark: #1a1a1a;
            --primary: #f7b731;
            --gray: #6b7280;
            --shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
            --shadow-hover: 0 25px 50px rgba(0, 0, 0, 0.15);
        }

        :root {
            --transition: all 0.4s cubic-bezier(0.23, 1, 0.320, 1);

            --radius-sm: 12px;
            --container-max: 1440px;
            --container-padding: clamp(16px, 4vw, 40px);
            --primary: #F7B731;
            --primary-dark: #B8940B;
            --primary-light: #FDF3A2;
            --dark: #1a1a1a;
            --gray: #666;
            --light: #f8f9fa;
            --white: #fff;
            --teal-light: #FBBF24;
            --brand-teal: #FFEA00;
            --shadow: 0 8px 32px rgba(247, 183, 49, 0.25);
            --shadow-hover: 0 20px 60px rgba(247, 183, 49, 0.35);
            --shadow-soft: 0 8px 32px rgba(234, 236, 74, 0.12);
            --charcoal: #1A1F35;


            --container-max: 1440px;
            --container-padding: clamp(16px, 4vw, 40px);
            --gap: clamp(16px, 3vw, 32px);

            --brand-teal: #FFEA00;
            --teal-light: #FBBF24;
            --teal-dark: #EA580C;
            --brand-orange: #FB923C;
            --orange-light: #E0E7FF;


            --gradient-primary: linear-gradient(135deg, #e9c213 0%, #FFEA00 100%);
            --gradient-cta: linear-gradient(135deg, var(--brand-teal), var(--teal-dark));


            --charcoal: #1A1F35;
            --slate: #334155;
            --stone: #F1F5F9;
            --glass: linear-gradient(135deg, #ffe5b9 0%, #fff8f0 50%, #fff4eb 100%);
            --shadow-soft: 0 8px 32px rgba(0, 0, 0, 0.12);
            --shadow-hover: 0 20px 40px rgba(0, 0, 0, 0.15);


            --radius: 20px;
            --radius-sm: 12px;
            --transition: all 0.4s cubic-bezier(0.23, 1, 0.320, 1);
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: var(--dark);
            background: #fafbfc;
        }

        /* [Previous styles unchanged - top bar, header, etc.] */
        .top-bar {
            background: var(--primary);
            color: white;
            padding: 10px 0;
            font-size: 13px;
        }

        .top-bar-container {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 30px;
        }

        .top-bar-left a {
            color: white;
            text-decoration: none;
            margin-right: 25px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .top-bar-left a:hover {
            opacity: 0.9;
            transform: translateX(3px);
        }

        .top-bar-right {
            display: flex;
            gap: 25px;
            align-items: center;
            font-size: 12px;
        }

        .top-bar-right a {
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .top-bar-right a:hover {
            opacity: 0.9;
        }

        .main-header {
            background: var(--white);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            position: sticky;
            top: 0;
            z-index: 1000;
            padding: 12px 0;
        }

        .header-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 30px;
            display: flex;
            align-items: center;
            gap: 25px;
            height: 75px;
        }

        .logo-section {
            display: flex;
            align-items: center;
            gap: 12px;
            flex-shrink: 0;
        }

        .logo-icon {
            width: 48px;
            height: 48px;
            background: var(--primary);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
        }

        .logo-section:hover .logo-icon {
            transform: scale(1.05) rotate(5deg);
        }

        .logo-text {
            font-size: 30px;
            font-weight: 800;
            color: var(--primary) !important;
            -webkit-text-fill-color: var(--primary) !important;
            text-decoration: none;
            letter-spacing: -0.8px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* [Search, categories, header-actions styles unchanged...] */
        .search-container {
            flex: 1;
            max-width: 520px;
            position: relative;
            margin: 0 15px;
        }

        .search-input {
            width: 100%;
            height: 50px;
            padding: 0 22px 0 55px;
            border: 2px solid #e8ecef;
            border-radius: 28px;
            font-size: 15px;
            outline: none;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            background: #fff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
        }

        .search-input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(247, 183, 49, 0.15), 0 8px 25px rgba(0, 0, 0, 0.1);
            transform: translateY(-2px);
        }

        .search-icon {
            position: absolute;
            left: 25px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray);
            font-size: 17px;
            z-index: 2;
            transition: all 0.3s ease;
        }

        .search-input:focus+.search-icon {
            color: var(--primary);
        }

        .categories-dropdown {
            position: relative;
            flex-shrink: 0;
        }

        .categories-btn {
            background: var(--white);
            border: 2px solid #e8ecef;
            padding: 13px 24px;
            border-radius: 28px;
            font-weight: 600;
            color: var(--dark);
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            font-size: 14px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
        }

        .categories-btn:hover {
            border-color: var(--primary);
            background: rgba(247, 183, 49, 0.08);
            transform: translateY(-2px);
            box-shadow: var(--shadow);
        }

        .categories-btn i {
            font-size: 16px;
        }

        .categories-mega-menu {
            position: absolute;
            top: 110%;
            left: -50%;
            transform: translateX(-50%);
            background: #ffffff;
            width: min(95vw, 1200px);
            /* Responsive width */
            max-width: 95vw;
            border-radius: 24px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
            opacity: 0;
            visibility: hidden;
            transform: translateX(-50%) translateY(20px) scale(0.95);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 2px solid rgba(247, 183, 49, 0.15);
            z-index: 1001;
            padding: 30px;
        }

        .categories-dropdown:hover .categories-mega-menu {
            opacity: 1;
            visibility: visible;
            transform: translateX(-50%) translateY(0) scale(1);
        }

        .mega-menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 30px;
            max-height: 500px;
            /* Prevent overflow */
            overflow-y: auto;
        }

        .category-card {
            position: relative;
        }

        .category-title {
            font-size: 20px;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 3px solid rgba(247, 183, 49, 0.2);
            transition: all 0.3s ease;
        }

        .category-card:hover .category-title {
            color: var(--primary);
            border-color: var(--primary);
        }

        .category-dropdown {
            display: block;
        }

        .dropdown-header {
            font-size: 16px;
            font-weight: 600;
            color: var(--dark);
            margin-bottom: 15px;
            opacity: 0.8;
        }

        .dropdown-categories {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .dropdown-item {
            padding: 12px 16px;
            color: var(--dark);
            text-decoration: none;
            font-weight: 500;
            font-size: 14px;
            border-radius: 12px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            display: block;
        }

        .dropdown-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            width: 4px;
            height: 0;
            background: var(--primary);
            border-radius: 0 2px 2px 0;
            transition: height 0.3s ease;
            transform: translateY(-50%);
        }

        .dropdown-item:hover {
            background: rgba(88, 170, 170, 0.1);
            color: var(--primary);
            transform: translateX(8px);
            padding-left: 24px;
        }

        .dropdown-item:hover::before {
            height: 24px;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 12px;
            flex-shrink: 0;
        }

        .action-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 4px;
            padding: 10px 16px;
            color: var(--dark);
            text-decoration: none;
            border-radius: 16px;
            font-size: 13px;
            font-weight: 500;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        }

        .action-item i {
            font-size: 19px;
            color: var(--gray);
        }

        .action-item span {
            font-size: 12px;
        }

        .action-item:hover {
            background: rgba(247, 183, 49, 0.1);
            color: var(--primary);
            transform: translateY(-3px);
            box-shadow: var(--shadow);
        }

        .action-item:hover i {
            color: var(--primary);
        }

        .cart-badge {
            position: absolute;
            top: -3px;
            right: -3px;
            background: var(--primary);
            color: white;
            border-radius: 50%;
            width: 22px;
            height: 22px;
            font-size: 11px;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 12px rgba(247, 183, 49, 0.4);
        }

        /* ✅ FIXED HERO BANNER - NO JUMPING, NO SCROLL MOVEMENT */
        .hero-banner {
            max-width: 1400px;
            margin: 50px auto;
            padding: 0 30px;
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 30px;
            height: 420px;
            align-items: stretch;
        }

        /* ALL BANNERS SAME BASE STYLES */
        .banner-main,
        .banner-side {
            position: relative;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: var(--shadow);
            height: 100%;
            display: block;
            text-decoration: none;
            color: white;
        }

        .banner-main:hover,
        .banner-side:hover {
            transform: translateY(-12px);
            box-shadow: var(--shadow-hover);
        }

        .banner-main img,
        .banner-side img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            transition: transform 0.6s ease;
            display: block;
        }

        .banner-main:hover img,
        .banner-side:hover img {
            transform: scale(1.05);
        }

        /* ✅ SAME OVERLAY FOR ALL - FIXED */
        .banner-overlay,
        .banner-side-overlay {
            position: absolute;
            inset: 0;
            /* background: linear-gradient(135deg, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.7)); */
            z-index: 1;
        }

        /* ✅ PERFECTLY FIXED CONTENT POSITIONING - SAME FOR ALL */
        .banner-content,
        .banner-side-content {
            position: absolute;
            bottom: 35px;
            left: 25px;
            right: 25px;
            color: white;
            z-index: 2;
            text-align: center;
        }

        /* MAIN BANNER CONTENT */
        .banner-title {
            font-size: clamp(36px, 6vw, 56px);
            font-weight: 800;
            margin-bottom: 12px;
            line-height: 1.1;
        }

        .banner-subtitle {
            font-size: clamp(16px, 3vw, 22px);
            margin-bottom: 40px;
            opacity: 0.95;
            font-weight: 500;
            max-width: 450px;
            margin-left: auto;
            margin-right: auto;
        }

        .banner-cta {
            display: inline-flex;
            align-items: center;
            gap: 14px;
            background: rgba(255, 255, 255, 0.98);
            color: var(--primary-dark);
            padding: 18px 40px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            font-size: 16px;
            /* box-shadow: 0 12px 35px rgba(0, 0, 0, 0.3); */
            backdrop-filter: blur(20px);
            transition: all 0.3s ease;
            white-space: nowrap;
        }

        .banner-cta:hover {
            background: white;
            transform: translateY(-4px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.4);
        }

        /* SIDE BANNERS */
        .banner-side h3 {
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .banner-side p {
            font-size: 15px;
            opacity: 0.95;
            font-weight: 500;
        }

        /* RESPONSIVE */
        @media (max-width: 1200px) {
            .hero-banner {
                grid-template-columns: 2fr 1fr;
                gap: 25px;
                height: 400px;
            }

            .banner-side:nth-child(3) {
                display: none;
            }
        }

        @media (max-width: 768px) {
            .header-container {
                flex-wrap: wrap;
                gap: 15px;
                height: auto;
                padding: 12px 20px;
            }

            .logo-section {
                order: 1;
            }

            .search-container {
                order: 3;
                flex: 1 1 100%;
                margin: 0;
                max-width: none;
            }

            .categories-dropdown {
                order: 2;
            }

            .header-actions {
                order: 4;
                justify-content: center;
                width: 100%;
                gap: 20px;
            }

            .hero-banner {
                grid-template-columns: 1fr;
                gap: 25px;
                height: auto;
                padding: 0 20px;
                margin: 30px auto;
            }

            .banner-content,
            .banner-side-content {
                left: 20px;
                right: 20px;
                bottom: 25px;
            }

            .banner-cta {
                padding: 14px 30px;
                font-size: 15px;
            }
        }

        .featured-section {
            padding: 40px;
            background: #fff;
            text-align: center;
        }

        .section-title {
            font-size: 24px;
            margin-bottom: 30px;
            position: relative;
        }

        .slider-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }

        .category-slider {
            display: flex;
            overflow-x: hidden;
            scroll-behavior: smooth;
            gap: 20px;
            width: 100%;
        }

        .category-card {
            min-width: 260px;
            background: #f5f5f5;
            position: relative;
            overflow: hidden;
        }

        .category-card img {
            width: 100%;
            height: 350px;
            object-fit: cover;
        }

        .category-info {
            position: absolute;
            bottom: 20px;
            left: 0;
            right: 0;
            background: rgba(255, 255, 255, 0.85);
            padding: 10px;
        }

        .category-info h3 {
            margin: 0;
            font-size: 16px;
            letter-spacing: 1px;
        }

        .category-info span {
            font-size: 12px;
            color: #555;
        }

        .slide-btn {
            background: #000;
            color: #fff;
            border: none;
            font-size: 20px;
            width: 40px;
            height: 40px;
            cursor: pointer;
            position: absolute;
            z-index: 10;
            opacity: 0.8;
        }

        .slide-btn.left {
            left: -10px;
        }

        .slide-btn.right {
            right: -10px;
        }

        .slide-btn:hover {
            opacity: 1;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .category-card img {
                height: 260px;
            }
        }

        .topcats-container {
            max-width: var(--container-max);
            margin: 0 auto;
            background: white;
            border-radius: var(--radius-sm);
            box-shadow: var(--shadow-soft);
            overflow: hidden;
        }

        .topcats-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 24px var(--container-padding);
            background: white;
            border-bottom: 1px solid #e5e7eb;
            position: relative;
        }

        .topcats-info {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .topcats-heading {
            font-size: clamp(20px, 3vw, 24px);
            font-weight: 700;
            color: var(--charcoal);
            margin: 0;
            background: linear-gradient(135deg, #F59E0B, var(--teal-light));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .topcats-subtext {
            font-size: 14px;
            color: var(--slate);
            font-weight: 500;
        }

        /* 🔥 NAVIGATION BUTTONS - PURE CSS */
        .topcats-controls {
            display: flex;
            gap: 8px;
        }

        .topcats-arrow {
            width: 40px;
            height: 40px;
            border: none;
            border-radius: 50%;
            background: var(--glass);
            color: var(--teal-dark);
            font-size: 14px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
            flex-shrink: 0;
            box-shadow: var(--shadow-soft);
        }

        .topcats-arrow:hover {
            background: var(--gradient-cta);
            color: white;
            transform: translateY(-2px);
            box-shadow: var(--shadow-hover);
        }

        /* 🔥 HORIZONTAL SCROLL CATEGORIES - 10+ ITEMS */
        .topcats-track {
            display: flex;
            gap: var(--gap);
            padding: var(--container-padding) 0;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            scrollbar-width: none;
            -ms-overflow-style: none;
            scroll-behavior: smooth;
            padding: 32px var(--container-padding);
        }

        .topcats-track::-webkit-scrollbar {
            display: none;
        }

        .topcats-item {
            flex: 0 0 140px;
            height: 140px;
            border-radius: 50%;
            background: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            color: inherit;
            position: relative;
            scroll-snap-align: start;
            min-width: 140px;
            transition: var(--transition);
            border: 3px solid transparent;
            background-image:
                linear-gradient(white, white), linear-gradient(135deg, var(--brand-teal), #ffffff);
            background-origin: border-box;
            background-clip: content-box, border-box;
            box-shadow: var(--shadow-soft);
        }

        .topcats-item::before {
            content: '';
            position: absolute;
            top: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 0;
            border-left: 8px solid transparent;
            border-right: 8px solid transparent;
            border-top: 8px solid var(--brand-teal);
            opacity: 0;
            transition: var(--transition);
        }

        .topcats-item:hover {
            transform: translateY(-8px) scale(1.05);
            box-shadow: var(--shadow-hover);
            border-color: var(--brand-teal);
        }

        .topcats-item:hover::before {
            opacity: 1;
        }

        .topcats-thumb {
            width: 64px;
            height: 64px;
            border-radius: 50%;

            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 12px;
            box-shadow: 0 4px 16px rgba(72, 180, 160, 0.2);
            transition: var(--transition);
        }

        .topcats-item:hover .topcats-thumb {
            background: var(--gradient-cta);
            transform: scale(1.1);
        }

        .topcats-label {
            font-size: 13px;
            font-weight: 600;
            color: var(--charcoal);
            text-align: center;
            line-height: 1.3;
            padding: 0 8px;
        }

        /* 📱 RESPONSIVE */
        @media (max-width: 768px) {
            body {
                padding: 40px var(--container-padding);
            }

            .topcats-nav {
                padding: 20px var(--container-padding);
            }

            .topcats-item {
                flex: 0 0 120px;
                height: 120px;
                min-width: 120px;
            }

            .topcats-thumb {
                width: 56px;
                height: 56px;
            }

            .topcats-track {
                padding: 24px var(--container-padding);
                gap: clamp(12px, 2vw, 20px);
            }
        }

        @media (max-width: 480px) {
            .topcats-item {
                flex: 0 0 110px;
                height: 110px;
                min-width: 110px;
            }
        }

        .dual-container-section {
            max-width: 1440px;
            margin: 60px auto;
            padding: 0 32px;
        }

        .section-wrapper {
            display: flex;
            gap: 32px;
            align-items: flex-start;
        }

        .left-container {
            flex: 1;
            max-width: 600px;
        }

        .slider-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }

        .slider-header h2 {
            font-size: 28px;
            font-weight: 700;
            color: var(--charcoal);
            margin: 0;
        }

        .slider-controls {
            display: flex;
            gap: 8px;
        }

        .slider-btn {
            width: 48px;
            height: 48px;
            border: none;
            background: var(--gradient-primary);
            color: white;
            border-radius: 50%;
            font-size: 18px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }

        .slider-btn:hover {
            transform: scale(1.1);
            box-shadow: var(--shadow-hover);
        }

        .slider-outer {
            position: relative;
            height: 400px;
            overflow: hidden;
            border-radius: var(--radius);
            background: var(--glass);
            border: 1px solid rgba(72, 180, 160, 0.1);
        }

        .slider-inner {
            display: flex;
            height: 100%;
            transition: transform 0.5s ease;
            gap: 20px;
            padding: 20px;
        }

        .product-slide {
            flex: 0 0 260px;
            background: white;
            border-radius: var(--radius-sm);
            padding: 20px;
            text-align: center;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .product-slide:hover {
            transform: translateY(-8px);
        }

        .product-slide img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 12px;
            margin-bottom: 16px;
        }

        .product-slide h4 {
            font-size: 16px;
            font-weight: 600;
            color: var(--charcoal);
            margin: 0 0 12px 0;
        }

        .product-slide .price {
            font-size: 20px;
            font-weight: 700;
            color: var(--brand-orange);
        }

        .right-container {
            flex-shrink: 0;
            width: 500px;
        }

        .banner-box {
            position: relative;
            height: 400px;
            margin-top: 70px;
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow-hover);
        }

        .banner-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .banner-text {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.85));
            color: white;
            padding: 40px 32px 32px;
        }

        .banner-text h3 {
            font-size: 28px;
            font-weight: 700;
            margin: 0 0 12px 0;
        }

        .banner-text p {
            font-size: 16px;
            margin: 0 0 24px 0;
            line-height: 1.5;
            color: #ffffff;
        }

        .shop-btn {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            background: var(--gradient-primary);
            color: black;
            padding: 14px 28px;
            border-radius: var(--radius-sm);
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }

        .shop-btn:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-hover);
        }


        .main-footer {
            background: var(--charcoal);
            color: #B8BCC9;
            margin-top: 100px;
        }

        .footer-top {
            padding: 60px 0 40px;
        }

        .footer-container {
            max-width: 1440px;
            margin: 0 auto;
            padding: 0 40px;
            display: flex;

            gap: 32px;
            align-items: flex-start;
        }

        .footer-column {
            flex: 1;

            min-width: 180px;

            display: flex;
            flex-direction: column;
        }

        .vertical-divide {
            width: 1px;
            height: 280px;
            background: linear-gradient(to bottom, transparent, #3A3F47, transparent);
            align-self: center;
            flex-shrink: 0;
            margin: 0 16px;
        }

        .mail-section,
        .office-section {
            min-width: 220px;

        }

        .footer-heading {
            font-size: 12px;
            font-weight: 700;
            color: white;
            margin: 0 0 16px 0;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a,
        .mail-section p,
        .office-section p {
            color: #B8BCC9;
            text-decoration: none;
            font-size: 12px;
            line-height: 1.5;
            margin-bottom: 8px;
            text-wrap: wrap;
        }

        .footer-links a:hover {
            color: var(--brand-teal);
        }

        .office-section strong {
            color: white;
        }

        .social-links {
            display: flex;
            gap: 12px;
            margin-top: 20px;
        }

        .social-icon {
            width: 36px;
            height: 36px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #B8BCC9;
            font-size: 14px;
            transition: all 0.3s;
        }

        .social-icon:hover {
            background: var(--brand-teal);
            color: white;
            transform: translateY(-2px);
        }

        .footer-bottom {
            padding: 24px 0;
            border-top: 1px solid #3A3F47;
            text-align: center;
        }

        .footer-bottom .footer-container {
            padding: 0 40px;
        }

        .footer-bottom p {
            margin: 0;
            font-size: 13px;
        }


        @media (max-width: 1400px) {
            .footer-column {
                min-width: 160px;
            }
        }

        @media (max-width: 1200px) {
            .footer-container {
                flex-wrap: wrap;

                gap: 24px;
            }

            .vertical-divide {
                height: 200px;
                margin: 0 12px;
            }
        }

        @media (max-width: 768px) {
            .footer-container {
                flex-direction: column;

                gap: 32px;
            }

            .vertical-divide {
                display: none;
            }

            .footer-column {
                min-width: auto;
            }
        }

        @media (max-width: 480px) {
            .footer-container {
                padding: 0 20px;
            }
        }



        .footer-buttons-section {
            padding: 32px 0;
            background: rgba(58, 63, 71, 0.5);
            border-top: 1px solid #3A3F47;
            border-bottom: 1px solid #3A3F47;
        }

        .footer-container {
            max-width: 1440px;
            margin: 0 auto;
            padding: 0 40px;
        }

        .footer-buttons {
            display: flex;
            gap: 24px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .footer-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 24px;
            background: rgba(255, 255, 255, 0.08);
            color: #B8BCC9;
            text-decoration: none;
            border-radius: 25px;
            font-size: 14px;
            font-weight: 600;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        .footer-btn:hover {
            background: var(--brand-teal);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(72, 180, 160, 0.3);
        }

        .footer-btn i {
            font-size: 16px;
            width: 20px;
        }

        .advertise-btn {
            background: rgba(242, 140, 56, 0.2);
        }

        .advertise-btn:hover {
            background: #F97316;
        }

        .gift-btn {
            background: rgba(59, 130, 246, 0.2);
        }

        .gift-btn:hover {
            background: #3B82F6;
        }

        .help-btn {
            background: rgba(72, 180, 160, 0.2);
        }

        .help-btn:hover {
            background: var(--brand-teal);
        }

        .footer-bottom {
            padding: 32px 0;
            background: var(--charcoal);
        }

        .footer-bottom .footer-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 40px;
        }

        .copyright-section p {
            margin: 0;
            font-size: 13px;
            color: #B8BCC9;
        }

        .payment-icons {
            display: flex;
            gap: 12px;
        }

        .payment-icons img {
            height: 28px;
            width: auto;
            border-radius: 4px;
            transition: transform 0.3s;
        }

        .payment-icons img:hover {
            transform: scale(1.05);
        }

        @media (max-width: 768px) {
            .footer-buttons {
                flex-direction: column;
                align-items: center;
                gap: 16px;
            }

            .footer-btn {
                padding: 10px 20px;
                min-width: 200px;
                justify-content: center;
            }

            .footer-bottom .footer-container {
                flex-direction: column;
                gap: 24px;
                text-align: center;
                padding: 0 24px;
            }
        }


        /* 🔹 XL DESKTOP (1400px+) - CURRENT DEFAULT */
        @media (min-width: 1400px) {

            .header-container,
            .hero-banner,
            .footer-container {
                max-width: 1440px;
                padding: 0 40px;
            }
        }

        /* 🔹 DESKTOP (1200px - 1399px) */
        @media (max-width: 1399px) and (min-width: 1200px) {
            .hero-banner {
                grid-template-columns: 2fr 1fr 1fr;
                gap: 25px;
            }

            .header-container {
                padding: 0 30px;
            }
        }

        /* 🔹 LAPTOP (992px - 1199px) */
        @media (max-width: 1199px) {
            .hero-banner {
                grid-template-columns: 2fr 1fr;
                gap: 25px;
                height: 380px;
            }

            .banner-side:nth-child(3) {
                display: none;
            }

            .mega-menu-grid {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: 25px;
            }
        }

        /* 🔹 TABLET (768px - 991px) */
        @media (max-width: 991px) {
            .header-container {
                padding: 0 25px;
                gap: 20px;
            }

            .search-container {
                max-width: 400px;
            }

            .categories-mega-menu {
                width: min(90vw, 900px);
                left: 0;
                right: 0;
                margin: 0 auto;
                transform: none;
            }

            .categories-dropdown:hover .categories-mega-menu {
                transform: none;
            }

            .topcats-item {
                flex: 0 0 130px;
                height: 130px;
                min-width: 130px;
            }
        }

        /* 🔹 MOBILE LARGE (576px - 767px) */
        @media (max-width: 991px) and (min-width: 768px) {
           

            /* HEADER MOBILE STACK */
            .header-container {
                flex-direction: column;
                align-items: stretch !important;
                gap: 15px;
                padding: 15px 20px;
                height: auto;
            }

            .logo-section {
                order: 1;
                justify-content: center;
            }

            .search-container {
                order: 2;
                flex: 1 1 100%;
                max-width: none;
                margin: 0;
            }

            .categories-dropdown {
                order: 3;
                align-self: center;
            }

            .header-actions {
                order: 4;
                justify-content: center;
                gap: 15px;
                width: 100%;
            }

            /* HERO MOBILE */
            .hero-banner {
                grid-template-columns: 1fr;
                gap: 20px;
                height: auto;
                padding: 0 20px;
                margin: 30px auto;
            }

            .banner-content,
            .banner-side-content {
                left: 20px;
                right: 20px;
                bottom: 25px;
                text-align: left;
            }

            .banner-title {
                font-size: 28px;
            }

            /* CATEGORIES MOBILE */
            .mega-menu-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
                max-height: 400px;
            }

            .category-title {
                font-size: 18px;
            }

            .dropdown-item {
                font-size: 13px;
                padding: 10px 12px;
            }

            /* TOP CATS MOBILE */
            .topcats-item {
                flex: 0 0 110px;
                height: 110px;
                min-width: 110px;
            }

            .topcats-thumb {
                width: 50px;
                height: 50px;
            }

            .topcats-label {
                font-size: 11px;
            }

            /* SLIDER MOBILE */
            .product-slide {
                flex: 0 0 240px;
            }

            .slider-outer {
                height: 350px;
            }

            .section-wrapper{
                display: inline;
                background-color: #3B82F6 !important;
            }
            .dual-container-section{
                margin-right: 50px;
            }
            .categories-mega-menu{
                margin-left: -272px;
            }
            /* FOOTER MOBILE */
            .footer-container {
                flex-direction: column;
                gap: 30px;
            }

            .vertical-divide {
                display: none;
            }

            .footer-column {
                min-width: auto;
            }
        }

        /* 🔹 MOBILE SMALL (480px - 575px) */
        @media (max-width: 575px) {
            body {
                padding: 0;
            }

            .header-container {
                padding: 12px 15px;
            }

            .logo-text {
                font-size: 24px;
            }

            .search-input {
                height: 45px;
                padding: 0 18px 0 45px;
                font-size: 14px;
            }

            .categories-btn {
                padding: 10px 18px;
                font-size: 13px;
            }

            .mega-menu-grid {
                grid-template-columns: 1fr;
                gap: 20px;
                padding: 20px;
            }

            .category-title {
                font-size: 16px;
            }

            .categories-mega-menu{
                margin-left: -194px;
            }

            /* SLIDERS */
            .topcats-item {
                flex: 0 0 95px;
                height: 95px;
                min-width: 95px;
            }

            .product-slide {
                flex: 0 0 220px;
                padding: 15px;
            }

            .slider-outer {
                height: 320px;
            }

            .section-wrapper{
                display: inline;
            }

            /* FOOTER */
            .footer-container {
                padding: 0 20px;
            }

            .footer-buttons {
                flex-direction: column;
                gap: 12px;
            }

            .footer-btn {
                min-width: 180px;
                justify-content: center;
            }
        }

        /* 🔹 EXTRA SMALL PHONES (320px - 479px) */
        @media (max-width: 479px) {

            .header-container,
            .top-bar-container,
            .footer-container {
                padding: 0 12px;
            }

            .logo-icon {
                width: 40px;
                height: 40px;
                font-size: 16px;
            }

            .logo-text {
                font-size: 20px;
            }

            /* .search-container{
                max-width: fit-content;
            } */
            .categories-mega-menu {
                margin-right: -100px;
            }

            .action-item {
                padding: 8px 12px;
            }

            .action-item i {
                font-size: 16px;
            }

            .action-item span {
                font-size: 11px;
            }

            .banner-cta {
                padding: 12px 24px;
                font-size: 14px;
            }

            .topcats-item {
                flex: 0 0 85px;
                height: 85px;
                min-width: 85px;
            }

            .topcats-thumb {
                width: 44px;
                height: 44px;
            }

            .topcats-label {
                font-size: 10px;
                padding: 0 4px;
            }
            .section-wrapper{
                display: inline;
            }
            .right-container{
                max-width: fit-content;
            }
        }

        /* 🔹 PRINT STYLES */
        @media print {

            .header-actions,
            .categories-dropdown,
            .top-bar,
            .footer-buttons-section {
                display: none !important;
            }

            body {
                background: white;
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <!-- [Header content unchanged] -->
    <div class="top-bar">
        <div class="top-bar-container">
            <div class="top-bar-left">
                <a href="#">Free Shipping on Orders ₹999+</a>
                <a href="#">Gift Cards</a>
            </div>
            <div class="top-bar-right">
                <a href="#">Help</a>
                <a href="#">Contact</a>
            </div>
        </div>
    </div>

    <header class="main-header">
        <div class="header-container">
            <div class="logo-section">
                <div class="logo-icon"><i class="fas fa-store"></i></div>
                <a href="#" class="logo-text">Suropriyo</a>
            </div>
            <div class="search-container">
                <i class="fas fa-search search-icon"></i>
                <input type="text" class="search-input" placeholder="Search products, brands & more...">
            </div>
            <div class="categories-dropdown">
                <button class="categories-btn">
                    <i class="fas fa-bars"></i>
                    Categories
                </button>
                <div class="categories-mega-menu">
                    <div class="mega-menu-grid">
                        <!-- Mobiles - No dropdown -->
                        <div class="category-card">
                            <div class="category-title">Fashion</div>
                            <div class="category-dropdown">
                                <h3 class="dropdown-header">Fashion Categories</h3>
                                <div class="dropdown-categories">
                                    <a href="#" class="dropdown-item">Men Clothing</a>
                                    <a href="#" class="dropdown-item">Women Clothing</a>
                                    <a href="#" class="dropdown-item">Kids Wear</a>
                                    <a href="#" class="dropdown-item">Footwear</a>
                                    <a href="#" class="dropdown-item">Sports Wear</a>
                                    <a href="#" class="dropdown-item">Ethnic Wear</a>
                                    <a href="#" class="dropdown-item">Watches</a>
                                    <a href="#" class="dropdown-item">Jewellery</a>
                                    <a href="#" class="dropdown-item">Handbags</a>
                                    <a href="#" class="dropdown-item">Sunglasses</a>
                                    <a href="#" class="dropdown-item">Belts</a>
                                </div>
                            </div>
                        </div>

                        <!-- Fashion - With dropdown -->
                        <div class="category-card">
                            <div class="category-title">Fashion</div>
                            <div class="category-dropdown">
                                <h3 class="dropdown-header">Fashion Categories</h3>
                                <div class="dropdown-categories">
                                    <a href="#" class="dropdown-item">Men Clothing</a>
                                    <a href="#" class="dropdown-item">Women Clothing</a>
                                    <a href="#" class="dropdown-item">Kids Wear</a>
                                    <a href="#" class="dropdown-item">Footwear</a>
                                    <a href="#" class="dropdown-item">Sports Wear</a>
                                    <a href="#" class="dropdown-item">Ethnic Wear</a>
                                    <a href="#" class="dropdown-item">Watches</a>
                                    <a href="#" class="dropdown-item">Jewellery</a>
                                    <a href="#" class="dropdown-item">Handbags</a>
                                    <a href="#" class="dropdown-item">Sunglasses</a>
                                    <a href="#" class="dropdown-item">Belts</a>
                                </div>
                            </div>
                        </div>

                        <!-- Electronics - With dropdown -->
                        <div class="category-card">
                            <div class="category-title">Electronics</div>
                            <div class="category-dropdown">
                                <h3 class="dropdown-header">Electronics</h3>
                                <div class="dropdown-categories">
                                    <a href="#" class="dropdown-item">Laptops</a>
                                    <a href="#" class="dropdown-item">Headphones</a>
                                    <a href="#" class="dropdown-item">Speakers</a>
                                    <a href="#" class="dropdown-item">Earphones</a>
                                    <a href="#" class="dropdown-item">Cameras</a>
                                    <a href="#" class="dropdown-item">Power Banks</a>
                                    <a href="#" class="dropdown-item">Gaming</a>
                                    <a href="#" class="dropdown-item">Tablets</a>
                                    <a href="#" class="dropdown-item">Accessories</a>
                                    <a href="#" class="dropdown-item">Cables</a>
                                    <a href="#" class="dropdown-item">Cases</a>
                                </div>
                            </div>
                        </div>

                        <!-- Appliances - With dropdown -->
                        <div class="category-card">
                            <div class="category-title">Appliances</div>
                            <div class="category-dropdown">
                                <h3 class="dropdown-header">TVs & Appliances</h3>
                                <div class="dropdown-categories">
                                    <a href="#" class="dropdown-item">Smart TVs</a>
                                    <a href="#" class="dropdown-item">LED TVs</a>
                                    <a href="#" class="dropdown-item">Air Conditioners</a>
                                    <a href="#" class="dropdown-item">Refrigerators</a>
                                    <a href="#" class="dropdown-item">Washing Machines</a>
                                    <a href="#" class="dropdown-item">Microwave Ovens</a>
                                    <a href="#" class="dropdown-item">Water Purifiers</a>
                                    <a href="#" class="dropdown-item">Fans</a>
                                    <a href="#" class="dropdown-item">Vacuum Cleaners</a>
                                    <a href="#" class="dropdown-item">Kitchen Appliances</a>
                                    <a href="#" class="dropdown-item">Small Appliances</a>
                                </div>
                            </div>
                        </div>

                        <!-- Furniture - With dropdown -->
                        <div class="category-card">
                            <div class="category-title">Furniture</div>
                            <div class="category-dropdown">
                                <h3 class="dropdown-header">Home & Furniture</h3>
                                <div class="dropdown-categories">
                                    <a href="#" class="dropdown-item">Beds</a>
                                    <a href="#" class="dropdown-item">Sofas</a>
                                    <a href="#" class="dropdown-item">Dining Tables</a>
                                    <a href="#" class="dropdown-item">Mattresses</a>
                                    <a href="#" class="dropdown-item">Wardrobes</a>
                                    <a href="#" class="dropdown-item">Home Decor</a>
                                    <a href="#" class="dropdown-item">Kitchen Storage</a>
                                    <a href="#" class="dropdown-item">Lighting</a>
                                    <a href="#" class="dropdown-item">Curtains</a>
                                    <a href="#" class="dropdown-item">Wall Art</a>
                                    <a href="#" class="dropdown-item">Rugs</a>
                                </div>
                            </div>
                        </div>

                        <!-- Beauty & Food - With dropdown -->
                        <div class="category-card">
                            <div class="category-title">Beauty & Food</div>
                            <div class="category-dropdown">
                                <h3 class="dropdown-header">Beauty & Food</h3>
                                <div class="dropdown-categories">
                                    <a href="#" class="dropdown-item">Skincare</a>
                                    <a href="#" class="dropdown-item">Makeup</a>
                                    <a href="#" class="dropdown-item">Haircare</a>
                                    <a href="#" class="dropdown-item">Fragrances</a>
                                    <a href="#" class="dropdown-item">Grocery</a>
                                    <a href="#" class="dropdown-item">Snacks</a>
                                    <a href="#" class="dropdown-item">Baby Care</a>
                                    <a href="#" class="dropdown-item">Personal Care</a>
                                    <a href="#" class="dropdown-item">Health Supplements</a>
                                    <a href="#" class="dropdown-item">Organic Foods</a>
                                    <a href="#" class="dropdown-item">Beverages</a>
                                </div>
                            </div>
                        </div>

                        <!-- Grocery - No dropdown -->
                        <div class="category-card">
                            <div class="category-title">Grocery</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-actions">
                <a href="#" class="action-item"><i class="fas fa-heart"></i><span>Wishlist</span></a>
                <a href="#" class="action-item"><i class="fas fa-shopping-bag"></i><span>Cart</span>
                    <div class="cart-badge">3</div>
                </a>
                <a href="#" class="action-item"><i class="fas fa-user"></i><span>Login</span></a>
            </div>
        </div>
    </header>

    <!-- ✅ PERFECTLY FIXED HERO BANNER -->
    <section class="hero-banner">
        <a href="#" class="banner-main">
            <img src="<?= base_url('assets/images/banner1.png') ?>" alt="New Arrivals">
            <div class="banner-overlay"></div>
            <!-- <div class="banner-content">
                <h2 class="banner-title">NEW ARRIVALS</h2>
                <p class="banner-subtitle">Discover the latest trends and best deals across all categories</p>
                <a href="#" class="banner-cta">
                    <i class="fas fa-shopping-bag"></i>
                    BROWSE COLLECTION
                </a>
            </div> -->
        </a>

        <a href="#" class="banner-side">
            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=500&h=420&fit=crop" alt="Fashion">
            <div class="banner-side-overlay"></div>
            <div class="banner-side-content">
                <h3>Trendy Fashion</h3>
                <p>New Collection</p>
            </div>
        </a>

        <a href="#" class="banner-side">
            <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?w=500&h=420&fit=crop"
                alt="Electronics">
            <div class="banner-side-overlay"></div>
            <div class="banner-side-content">
                <h3>Latest Tech</h3>
                <p>Best Deals</p>
            </div>
        </a>
    </section>
    <section class="featured-section">
        <h2 class="section-title">FEATURED CATEGORIES</h2>

        <div class="slider-wrapper">
            <button class="slide-btn left" onclick="slideLeft()">&#10094;</button>

            <div class="category-slider" id="slider">
                <div class="category-card">
                    <img src="<?= base_url('assets/images/f1.png') ?>" alt="New Arrivals">
                    <div class="category-info">
                        <h3>CLOTHING</h3>
                        <span>12 PRODUCTS</span>
                    </div>
                </div>

                <div class="category-card">
                    <img src="<?= base_url('assets/images/f2.png') ?>" alt="New Arrivals">
                    <!-- <img src="f2.png"> -->
                    <div class="category-info">
                        <h3>WOMEN</h3>
                        <span>18 PRODUCTS</span>
                    </div>
                </div>

                <div class="category-card">
                    <img src="<?= base_url('assets/images/f1.png') ?>" alt="New Arrivals">
                    <!-- <img src="f1.png"> -->
                    <div class="category-info">
                        <h3>BOOKING</h3>
                        <span>6 PRODUCTS</span>
                    </div>
                </div>

                <div class="category-card">
                    <img src="<?= base_url('assets/images/f2.png') ?>" alt="New Arrivals">
                    <div class="category-info">
                        <h3>MEN</h3>
                        <span>9 PRODUCTS</span>
                    </div>
                </div>
                <div class="category-card">
                    <img src="<?= base_url('assets/images/f1.png') ?>" alt="New Arrivals">
                    <div class="category-info">
                        <h3>CLOTHING</h3>
                        <span>12 PRODUCTS</span>
                    </div>
                </div>
                <div class="category-card">
                    <img src="<?= base_url('assets/images/f2.png') ?>" alt="New Arrivals">
                    <div class="category-info">
                        <h3>MEN</h3>
                        <span>9 PRODUCTS</span>
                    </div>
                </div>

            </div>

            <button class="slide-btn right" onclick="slideRight()">&#10095;</button>
        </div>
    </section>


    <section class="topcats-container">
        <div class="topcats-nav">
            <div class="topcats-info">
                <h1 class="topcats-heading">Shop Top Categories</h1>
                <div class="topcats-subtext">Explore popular categories</div>
            </div>
            <div class="topcats-controls">
                <button class="topcats-arrow"
                    onclick="document.querySelector('.topcats-track').scrollBy({left: -160, behavior: 'smooth'})">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="topcats-arrow"
                    onclick="document.querySelector('.topcats-track').scrollBy({left: 160, behavior: 'smooth'})">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>

        <div class="topcats-track">
            <!-- 10+ Categories - ADD MORE EASILY -->
            <a href="#" class="topcats-item">
                <div class="topcats-thumb">
                    <!-- <img src="./c1.png" alt="Mobiles" loading="lazy"> -->
                     <img src="<?= base_url('assets/images/c1.png') ?>" alt="Mobiles" loading="lazy">
                </div>
                <span class="topcats-label">Mobiles</span>
            </a>

            <a href="#" class="topcats-item">
                <div class="topcats-thumb">
                    <!-- <img src="c2.png"  -->
                     <img src="<?= base_url('assets/images/c2.png') ?>" alt="Beauty" loading="lazy">
                </div>
                <span class="topcats-label">Beauty</span>
            </a>

            <a href="#" class="topcats-item">
                <div class="topcats-thumb">
                    <img src="<?= base_url('assets/images/c3.png') ?>" alt="Electronics" loading="lazy">
                </div>
                <span class="topcats-label">Electronics</span>
            </a>

            <a href="#" class="topcats-item">
                <div class="topcats-thumb">
                    <img src="<?= base_url('assets/images/c4.png') ?>" alt="Furniture" loading="lazy">
                    <!-- <img src="c4.png" alt="Furniture" loading="lazy"> -->
                </div>
                <span class="topcats-label">Furniture</span>
            </a>

            <a href="#" class="topcats-item">
                <div class="topcats-thumb">
                    <img src="<?= base_url('assets/images/c8.png') ?>" alt="Watches" loading="lazy">
                    <!-- <img src="c8.png" alt="Watches" loading="lazy"> -->
                </div>
                <span class="topcats-label">Watches</span>
            </a>

            <a href="#" class="topcats-item">
                <div class="topcats-thumb">
                    <!-- <img src="c5.png" alt="Decor" loading="lazy"> -->
                     <img src="<?= base_url('assets/images/c5.png') ?>" alt="Decor" loading="lazy">
                </div>
                <span class="topcats-label">Decor</span>
            </a>

            <a href="#" class="topcats-item">
                <div class="topcats-thumb">
                    <!-- <img src="c2.png" alt="Accessories" loading="lazy"> -->
                     <img src="<?= base_url('assets/images/c2.png') ?>" alt="Accessories" loading="lazy">
                </div>
                <span class="topcats-label">Accessories</span>
            </a>

            <a href="#" class="topcats-item">
                <div class="topcats-thumb">
                    <!-- <img src="c7.png" alt="Fashion" loading="lazy"> -->
                     <img src="<?= base_url('assets/images/c7.png') ?>" alt="Fashion" loading="lazy">
                </div>
                <span class="topcats-label">Fashion</span>
            </a>

            <a href="#" class="topcats-item">
                <div class="topcats-thumb">
                    <!-- <img src="c5.png" alt="Home" loading="lazy"> -->
                     <img src="<?= base_url('assets/images/c5.png') ?>" alt="Home" loading="lazy">
                </div>
                <span class="topcats-label">Home</span>
            </a>

            <a href="#" class="topcats-item">
                <div class="topcats-thumb">
                    <!-- <img src="c7.png" alt="Sports" loading="lazy"> -->
                     <img src="<?= base_url('assets/images/c7.png') ?>" alt="Sports" loading="lazy">
                </div>
                <span class="topcats-label">Sports</span>
            </a>

            <!-- ADD MORE CATEGORIES HERE - INFINITE SCALABLE -->
            <a href="#" class="topcats-item">
                <div class="topcats-thumb">
                    <img src="https://images.unsplash.com/photo-1572635196237-14b3f281503f?w=64&h=64&fit=crop&crop=center"
                        alt="Books" loading="lazy">
                </div>
                <span class="topcats-label">Books</span>
            </a>

            <a href="#" class="topcats-item">
                <div class="topcats-thumb">
                    <!-- <img src="g1.png" loading="lazy"> -->
                     <img src="<?= base_url('assets/images/g1.png') ?>" loading="lazy">
                </div>
                <span class="topcats-label">Grocery</span>
            </a>
        </div>
    </section>

    <section class="dual-container-section">
        <div class="section-wrapper">
            <!-- LEFT: PRODUCT SLIDER CONTAINER -->
            <div class="left-container">
                <div class="slider-header">
                    <h2>Featured Products</h2>
                    <div class="slider-controls">
                        <button class="slider-btn prev" onclick="changeSlide(-1)">‹</button>
                        <button class="slider-btn next" onclick="changeSlide(1)">›</button>
                    </div>
                </div>
                <div class="slider-outer">
                    <div class="slider-inner" id="sliderInner">
                        <!-- PRODUCT 1 -->
                        <div class="product-slide">
                            <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=300&h=250&fit=crop"
                                alt="iPhone">
                            <h4>iPhone 15 Pro</h4>
                            <div class="price">₹89,999</div>
                        </div>
                        <!-- PRODUCT 2 -->
                        <div class="product-slide">
                            <img src="https://images.unsplash.com/photo-1592899679762-1e70d3d6a494?w=300&h=250&fit=crop"
                                alt="MacBook">
                            <h4>MacBook Air M2</h4>
                            <div class="price">₹1,09,900</div>
                        </div>
                        <!-- PRODUCT 3 -->
                        <div class="product-slide">
                            <img src="https://images.unsplash.com/photo-1583394838336-acd977736f90?w=300&h=250&fit=crop"
                                alt="AirPods">
                            <h4>AirPods Pro 2</h4>
                            <div class="price">₹22,999</div>
                        </div>
                        <!-- PRODUCT 4 -->
                        <div class="product-slide">
                            <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=300&h=250&fit=crop"
                                alt="Watch">
                            <h4>Apple Watch</h4>
                            <div class="price">₹79,900</div>
                        </div>
                        <!-- PRODUCT 5 -->
                        <div class="product-slide">
                            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=300&h=250&fit=crop"
                                alt="Headphones">
                            <h4>Sony Headphones</h4>
                            <div class="price">₹34,999</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT: BANNER CONTAINER - NOW VISIBLE -->
            <div class="right-container">
                <div class="banner-box">
                    <img src="<?= base_url('assets/images/sale.png')?>" alt="Winter Sale Banner" class="banner-img">
                    <div class="banner-text">
                        <h3>🔥 Winter Sale!</h3>
                        <p>Up to <strong>70% OFF</strong><br>Premium Electronics</p>
                        <a href="#" class="shop-btn">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ALL FOOTER COLUMNS IN SINGLE ROW - PERFECT! -->
    <footer class="main-footer">
        <div class="footer-top">
            <div class="footer-container">
                <!-- ALL 6 COLUMNS + DIVIDER IN SINGLE ROW -->
                <div class="footer-column">
                    <h3 class="footer-heading">About Us</h3>
                    <ul class="footer-links">
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3 class="footer-heading">Group Companies</h3>
                    <ul class="footer-links">
                        <li><a href="#">Myntra</a></li>
                        <li><a href="#">Cleartrip</a></li>
                        <li><a href="#">Shopsy</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3 class="footer-heading">Issues</h3>
                    <ul class="footer-links">
                        <li><a href="#">Payment</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Cancellation & Returns</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3 class="footer-heading">Consumer Policy</h3>
                    <ul class="footer-links">
                        <li><a href="#">Cancellation & Return</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Security</a></li>
                        <li><a href="#">Privacy</a></li>
                    </ul>
                </div>

                <!-- VERTICAL DIVIDER -->
                <div class="vertical-divide"></div>

                <!-- MAIL -->
                <div class="footer-column mail-section">
                    <h3 class="footer-heading">Mail</h3>
                    <p>@ecommerce.com</p>
                    <p>care@ecommerce.com</p>
                    <div class="social-links">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <!-- REGISTERED OFFICE -->
                <div class="footer-column office-section">
                    <h3 class="footer-heading">Registered Office</h3>
                    <p>Suropriyo Enterprise Pvt. Ltd.<br>
                        Buildings Alyssa, Begonia & Clove,<br>
                        Embassy Tech Village,<br>
                        Bengaluru - 560103<br>
                        <strong>CIN:</strong> U74999KA2012PTC066107<br>
                        <strong>Tel:</strong> +91-80-66930500
                    </p>
                </div>
            </div>
        </div>

        <!-- Bottom Copyright -->

        <div class="footer-bottom-section">
            <!-- BUTTONS ROW -->
            <div class="footer-buttons-section">
                <div class="footer-container">
                    <div class="footer-buttons">
                        <a href="#" class="footer-btn advertise-btn">
                            <i class="fas fa-bullhorn"></i>
                            Advertise
                        </a>
                        <a href="#" class="footer-btn gift-btn">
                            <i class="fas fa-gift"></i>
                            Gift Cards
                        </a>
                        <a href="#" class="footer-btn help-btn">
                            <i class="fas fa-headset"></i>
                            Help Center
                        </a>
                    </div>
                </div>
            </div>

            <!-- COPYRIGHT + 5 PAYMENT ICONS -->
            <div class="footer-bottom">
                <div class="footer-container">
                    <div class="copyright-section">
                        <p>&copy; 2025 Suropriyo Enterprise. All rights reserved.</p>
                    </div>
                    <div class="payment-icons">
                        <img src="<?= base_url('assets/images/card2.png') ?>" alt="New Arrivals">
                        <img src="<?= base_url('assets/images/card3.png') ?>" alt="New Arrivals">
                        <img src="<?= base_url('assets/images/card4.png') ?>" alt="New Arrivals">
                        <img src="<?= base_url('assets/images/card5.png') ?>" alt="New Arrivals">
                        
                    </div>
                </div>
            </div>
        </div>

    </footer>



    <script>
        const slider = document.getElementById('slider');

        function slideLeft() {
            slider.scrollLeft -= 300;
        }

        function slideRight() {
            slider.scrollLeft += 300;
        }

    </script>

    <script>

        // FIXED SLIDER - CORRECT SELECTORS
        let currentSlide = 0;
        const slides = document.querySelectorAll('.product-slide');
        const totalSlides = slides.length;
        const slideWidth = 300; // Updated for new CSS

        function changeSlide(direction) {
            currentSlide += direction;

            if (currentSlide >= totalSlides - 2) {
                currentSlide = totalSlides - 2;
            }
            if (currentSlide < 0) {
                currentSlide = 0;
            }

            const sliderInner = document.getElementById('sliderInner');
            sliderInner.style.transform = `translateX(-${currentSlide * slideWidth}px)`;
        }

        // Auto slide
        setInterval(() => changeSlide(1), 4000);


    </script>


</body>

</html>