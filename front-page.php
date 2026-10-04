<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$vits = get_stylesheet_directory_uri();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VITS — Designed to perform. Built to last.</title>
  <meta name="description" content="For over 30 years, VITS has been integrating AV and IT to help organisations connect, communicate and operate smarter.">
  <link rel="icon" href="<?php echo esc_url( $vits ); ?>/assets/logo.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&display=swap" rel="stylesheet">
  <style>
    :root {
      --navy: #212146;
      --ink: #001D42;
      --blue: #667EE5;
      --card: #E9EDF5;
      --white: #ffffff;
      --orange: #FF9D74;
      --gutter: clamp(20px, 5.38vw, 93px);
      --max: 1728px;
      --content: 1542px;
    }

    * { box-sizing: border-box; margin: 0; padding: 0; }
    html { scroll-behavior: smooth; }
    html, body { overflow-x: hidden; }
    body {
      font-family: "DM Sans", sans-serif;
      color: var(--navy);
      background: var(--white);
    }
    img { max-width: 100%; display: block; }
    a { text-decoration: none; color: inherit; }
    button { font-family: inherit; cursor: pointer; border: none; background: none; }
    :focus-visible { outline: 3px solid var(--blue); outline-offset: 2px; }

    .wrap {
      width: min(100%, var(--max));
      margin: 0 auto;
      padding: 0 var(--gutter);
    }

    /* ---------- NAV ---------- */
    body.admin-bar header.nav { top: 32px; }
    @media (max-width: 782px) { body.admin-bar header.nav { top: 46px; } }
    header.nav {
      position: sticky;
      top: 0;
      z-index: 50;
      background: #fff;
    }
    .nav-inner {
      width: min(100%, var(--max));
      margin: 0 auto;
      padding: 28px var(--gutter) 22px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 24px;
    }
    .logo-img { height: 48px; width: auto; }
    nav.links {
      display: flex;
      align-items: center;
      gap: 42px;
    }
    nav.links a {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 13px;
      font-weight: 500;
      letter-spacing: 1.6px;
      text-transform: uppercase;
      color: var(--navy);
      height: 51px;
      padding: 0 26px;
      border-radius: 999px;
      background: transparent;
      position: relative;
      transition: background .2s ease, color .2s ease;
    }
    nav.links a:not(.contact-btn):hover,
    nav.links a:not(.contact-btn):active,
    nav.links a:not(.contact-btn).active {
      background: transparent;
      color: var(--navy);
    }
    nav.links a:not(.contact-btn):hover::after,
    nav.links a:not(.contact-btn):active::after,
    nav.links a:not(.contact-btn).active::after {
      content: "";
      position: absolute;
      left: 26px;
      right: 26px;
      bottom: 12px;
      height: 1px;
      background: var(--navy);
    }
    nav.links a.contact-btn,
    nav.links a.contact-btn:hover {
      background: var(--navy);
      color: #fff;
    }
    nav.links a.contact-btn:active {
      background: #fff;
      color: var(--navy);
      box-shadow: inset 0 0 0 1px var(--navy);
    }
    .pill-solid {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      background: var(--navy);
      color: #fff;
      border-radius: 999px;
      height: 51px;
      padding: 0 28px;
      letter-spacing: 1.4px;
      font-size: 12px;
      font-weight: 600;
      text-transform: uppercase;
    }
    .burger {
      display: none;
      flex-direction: column;
      gap: 5px;
      padding: 8px;
    }
    .burger span {
      width: 22px;
      height: 2px;
      background: var(--navy);
      border-radius: 2px;
    }

    /* ---------- HERO (Figma 1728 × 2046, clip content) ---------- */
    .hero {
      position: relative;
      overflow: hidden;
      background: #fff;
    }
    .hero-canvas {
      position: relative;
      z-index: 2;
      width: min(100%, 1728px);
      margin: 0 auto;
      aspect-ratio: 1728 / 2046;
      overflow: hidden;
      container-type: inline-size;
      container-name: hero;
    }
    .hero-bg {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      object-fit: fill;
      pointer-events: none;
      z-index: 0;
    }
    .hero-grid {
      position: absolute;
      left: 0;
      top: 12.02%;
      width: 100%;
      height: 29.47%;
      object-fit: fill;
      pointer-events: none;
      z-index: 0;
    }
    .hero-copy {
      position: absolute;
      left: 5.382%;
      top: 4.056%;
      width: 27.72%;
      z-index: 4;
    }
    .hero-copy h1 {
      font-family: "DM Sans", sans-serif;
      font-size: 36px;
      font-size: 2.083cqw;
      font-weight: 600;
      line-height: normal;
      letter-spacing: 0;
      color: #212146;
      width: 100%;
    }
    .hero-art {
      position: absolute;
      left: 17.303%;
      top: 3.812%;
      width: 48.264%;
      height: 48.264cqw;
      aspect-ratio: 1;
      max-width: none;
      object-fit: contain;
      pointer-events: none;
      z-index: 1;
    }
    .hero-aside {
      position: absolute;
      left: 67.13%;
      top: 31.28%;
      width: 21.7%;
      color: #fff;
      z-index: 4;
    }
    .hero-aside p {
      font-size: 14px;
      font-size: 0.81cqw;
      line-height: 1.45;
      font-weight: 400;
      margin-bottom: 0.7cqw;
    }
    .btn-outline {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      height: 51px;
      padding: 0 30px;
      border-radius: 999px;
      border: 1px solid #E9EDF5;
      color: #fff;
      font-size: 11px;
      font-weight: 600;
      letter-spacing: 1.6px;
      text-transform: uppercase;
      white-space: nowrap;
      width: max-content;
      transition: background .2s ease, color .2s ease, border-color .2s ease;
    }
    .hero-learn.btn-outline {
      position: relative;
      left: auto;
      top: auto;
      width: max-content;
      min-width: 151px;
      height: 51px;
      margin-top: 10px;
      padding: 0 30px;
      z-index: 6;
      font-size: 11px;
      letter-spacing: 1.6px;
    }
    .btn-outline:hover {
      background: #fff;
      color: var(--navy);
      border-color: #fff;
    }

    /* ---------- BANNER ---------- */
    .banner {
      position: absolute;
      left: 5.382%;
      top: 46.04%;
      width: 89.18%;
      height: 33.92%;
      margin: 0;
      padding: 0;
      z-index: 5;
    }
    .banner-card {
      height: 100%;
      background: rgba(255, 255, 255, 0.2);
      border-radius: 29px;
      border: none;
      min-height: 0;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .banner-cluster {
      display: flex;
      flex-direction: column;
      gap: 1.35cqw;
    }
    .banner-row {
      display: flex;
      align-items: center;
      gap: 1.27cqw;
    }
    .banner-card h2 {
      font-family: "DM Sans", sans-serif;
      font-size: 80px;
      font-size: 4.63cqw;
      font-weight: 600;
      color: #fff;
      line-height: normal;
      letter-spacing: 0;
      white-space: nowrap;
      font-variant-ligatures: none;
      font-feature-settings: "liga" 0, "clig" 0, "calt" 0, "dlig" 0;
    }
    .banner-tag {
      width: 16.67cqw;
      font-size: 20.72px;
      font-size: 1.20cqw;
      font-weight: 700;
      color: #212146;
      line-height: 1.2;
      letter-spacing: 0;
      margin: 0;
    }
    .banner-card .btn-outline {
      width: 33.8cqw;
      height: 2.89cqw;
      margin-top: 0;
      padding: 0;
      flex-shrink: 0;
      font-size: 14.5px;
      font-size: 0.84cqw;
      font-weight: 600;
      letter-spacing: 0;
      line-height: 1.43;
    }

    /* ---------- OFFERINGS ---------- */
    .offerings {
      background: #fff;
      padding: 28px 0 80px;
    }
    .offer-head {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 48px;
    }
    .offer-head h2 {
      font-size: clamp(36px, 3.7vw, 64px);
      font-weight: 600;
      color: var(--blue);
      letter-spacing: -0.03em;
    }
    .offer-head .pill-solid:hover {
      background: #fff;
      color: var(--navy);
      box-shadow: inset 0 0 0 1px var(--navy);
    }
    .offer-track-wrap {
      position: relative;
      overflow: hidden;
    }
    .offer-track {
      --offer-gap: 24px;
      display: flex;
      gap: var(--offer-gap);
      overflow-x: auto;
      padding-bottom: 8px;
      scrollbar-width: none;
    }
    .offer-track::-webkit-scrollbar { display: none; }
    .offer-card {
      flex: 0 0 calc((100% - 4 * var(--offer-gap)) / 4.5);
      width: calc((100% - 4 * var(--offer-gap)) / 4.5);
      aspect-ratio: 320 / 238;
      height: auto;
      background: var(--card);
      overflow: hidden;
    }
    .offer-card img {
      width: 100%;
      height: 100%;
      object-fit: contain;
      object-position: center;
      display: block;
    }
    .offer-nav {
      display: flex;
      justify-content: center;
      margin-top: 54px;
    }
    .offer-nav .arrows {
      width: 111px;
      height: 39px;
      border-radius: 999px;
      border: 1px solid var(--ink);
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 18px;
    }
    .offer-nav button {
      width: 28px;
      height: 28px;
      display: grid;
      place-items: center;
      color: var(--ink);
    }
    .offer-nav button:hover { opacity: .6; }
    .offer-nav button:disabled,
    .offer-nav button:disabled:hover {
      opacity: .3;
      cursor: default;
    }

    /* ---------- STATS ---------- */
    .stats {
      position: relative;
      overflow: hidden;
      min-height: 720px;
      display: flex;
      align-items: center;
      background: linear-gradient(201deg, #ffffff 18%, #5C9AE6 46%, #FF9D74 78%, #ffffff 98%);
    }
    .stats-grid-bg {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      opacity: .28;
      pointer-events: none;
    }
    .stats-grid {
      position: relative;
      z-index: 1;
      width: min(100%, var(--max));
      margin: 0 auto;
      padding: 120px var(--gutter);
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      text-align: center;
      color: #fff;
    }
    .stat-label {
      font-size: clamp(14px, 1.1vw, 18px);
      font-weight: 500;
      letter-spacing: 2px;
      text-transform: uppercase;
      margin-bottom: 8px;
    }
    .stat-num {
      font-size: clamp(64px, 9vw, 156px);
      font-weight: 400;
      line-height: .9;
      letter-spacing: -0.04em;
    }

    /* ---------- PARTNERS ---------- */
    .partners {
      background: #fff;
      line-height: 0;
    }
    .partners img {
      width: 100%;
      height: auto;
    }

    /* ---------- CTA / FOOTER ---------- */
    .cta-section {
      position: relative;
      overflow: hidden;
      padding: 0 0 48px;
      scroll-margin-top: 110px;
      background:
        linear-gradient(180deg, #ffffff 0%, #ffffff 6%, rgba(255,255,255,.7) 16%, rgba(255,255,255,0) 38%),
        linear-gradient(115deg, #FA5304 0%, #c56b8a 22%, #2C75CF 48%, #d9785c 78%, #FA5304 100%);
    }
    .cta-blob {
      position: absolute;
      left: 50%;
      top: 8%;
      width: 140%;
      height: 110%;
      max-width: none;
      transform: translateX(-50%);
      pointer-events: none;
      z-index: 0;
      -webkit-mask-image: linear-gradient(180deg, transparent 0%, #000 22%, #000 100%);
      mask-image: linear-gradient(180deg, transparent 0%, #000 22%, #000 100%);
    }
    .cta-blob svg {
      width: 100%;
      height: 100%;
      max-width: none;
      display: block;
      filter: blur(48px);
    }
    .cta-grid {
      position: absolute;
      left: 50%;
      top: 18%;
      width: min(100%, 1728px);
      height: 603px;
      transform: translateX(-50%);
      object-fit: fill;
      opacity: .62;
      pointer-events: none;
      z-index: 0;
      -webkit-mask-image: linear-gradient(180deg, transparent 0%, #000 24%);
      mask-image: linear-gradient(180deg, transparent 0%, #000 24%);
    }
    .cta-heading {
      position: relative;
      z-index: 1;
      width: min(100%, var(--max));
      margin: 0 auto 16px;
      padding: 140px var(--gutter) 0;
      text-align: center;
      font-size: clamp(32px, 4.63vw, 80px);
      font-weight: 600;
      letter-spacing: 0;
      line-height: 1.05;
      color: rgba(255, 255, 255, 0.78);
    }
    .footer-card {
      position: relative;
      z-index: 1;
    }
    .footer-inner {
      background: rgba(255,255,255,.2);
      border-radius: 29px;
      min-height: 520px;
      padding: 64px 68px 56px;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 40px;
    }
    .footer-logo { height: 86px; width: auto; margin-bottom: 36px; }
    .footer-label {
      font-size: 32px;
      font-weight: 700;
      color: #fff;
      letter-spacing: .04em;
      margin-bottom: 22px;
    }
    .footer-inner address,
    .footer-inner .contact-line {
      font-style: normal;
      color: #fff;
      font-size: 24px;
      line-height: 1.45;
      font-weight: 500;
    }
    .contact-line { display: block; margin-top: 16px; }
    .footer-social {
      display: flex;
      align-items: center;
      gap: 8px;
      margin-top: 28px;
    }
    .footer-social a {
      width: 53px;
      height: 53px;
      display: grid;
      place-items: center;
      border: none;
      background: none;
    }
    .footer-social a img {
      width: 53px;
      height: 53px;
    }
    .footer-right {
      display: flex;
      flex-direction: column;
      align-items: flex-end;
      text-align: right;
      justify-content: flex-end;
      padding-bottom: 8px;
    }
    .footer-right h3 {
      font-size: clamp(32px, 3.3vw, 56px);
      font-weight: 600;
      color: rgba(255,255,255,.58);
      letter-spacing: 0;
      margin-bottom: 16px;
    }
    .footer-right p {
      width: min(465px, 100%);
      font-family: "DM Sans", sans-serif;
      font-size: 32px;
      font-weight: 400;
      font-style: normal;
      color: #212146;
      line-height: 1;
      letter-spacing: 0;
      text-align: right;
      margin-bottom: 36px;
    }
    .footer-actions {
      display: flex;
      align-items: center;
      justify-content: flex-end;
      gap: 8px;
    }
    .footer-inner .footer-actions a,
    .footer-inner .footer-actions a:link,
    .footer-inner .footer-actions a:visited,
    .footer-inner .footer-actions a:any-link {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      height: 51px;
      padding: 0 22px;
      border-radius: 999px;
      font-size: 14px;
      font-weight: 600;
      letter-spacing: 1.8px;
      text-transform: uppercase;
      color: #212146;
      -webkit-text-fill-color: #212146;
      background: transparent;
      transition: background .2s ease, color .2s ease, -webkit-text-fill-color .2s ease;
    }
    .footer-inner .footer-actions a:hover {
      background: var(--navy);
      color: #ffffff;
      -webkit-text-fill-color: #ffffff;
    }

    /* ---------- RESPONSIVE ---------- */
    @media (max-width: 1100px) {
      .hero { min-height: auto; }
      .hero-canvas {
        aspect-ratio: auto;
        min-height: 0;
        overflow: visible;
        padding: 40px var(--gutter) 48px;
      }
      .hero-grid {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        top: auto;
        left: auto;
        object-fit: cover;
        opacity: .55;
      }
      .hero-copy,
      .hero-art,
      .hero-aside,
      .hero-learn,
      .banner {
        position: relative;
        left: auto;
        top: auto;
        width: auto;
        height: auto;
      }
      .hero-copy { width: min(479px, 100%); }
      .hero-copy h1 { font-size: 36px; }
      .hero-art {
        width: min(834px, 90%);
        height: auto;
        aspect-ratio: 1;
        margin: 12px auto;
        display: block;
      }
      .hero-aside {
        width: min(420px, 100%);
        margin-top: 12px;
        color: var(--navy);
      }
      .hero-aside p { font-size: 14px; }
      .hero-learn.btn-outline {
        position: relative;
        left: auto;
        top: auto;
        width: auto;
        min-width: 151px;
        height: 51px;
        padding: 0 30px;
        font-size: 11px;
        letter-spacing: 1.6px;
        margin-top: 16px;
        color: var(--navy);
        border-color: var(--navy);
      }
      .hero-learn.btn-outline:hover {
        background: var(--navy);
        color: #fff;
      }
      .banner {
        width: 100%;
        margin-top: 40px;
      }
      .banner-card {
        min-height: 0;
        height: auto;
        padding: 48px 32px;
      }
      .banner-cluster { gap: 14px; }
      .banner-row {
        flex-wrap: wrap;
        gap: 16px;
      }
      .banner-card h2 {
        font-size: clamp(36px, 8vw, 64px);
        white-space: normal;
      }
      .banner-tag {
        width: min(288px, 100%);
        font-size: 20.72px;
      }
      .banner-card .btn-outline {
        width: min(584px, 100%);
        height: 50px;
        font-size: 14.5px;
      }
      .footer-inner { grid-template-columns: 1fr; min-height: 0; padding: 40px 28px; }
      .footer-right { align-items: flex-start; text-align: left; }
      .stats-grid { grid-template-columns: 1fr; gap: 48px; padding: 80px var(--gutter); }
    }
    @media (max-width: 860px) {
      nav.links {
        position: fixed;
        inset: 76px 16px auto;
        background: #fff;
        flex-direction: column;
        align-items: flex-start;
        gap: 18px;
        padding: 24px;
        border-radius: 16px;
        box-shadow: 0 16px 40px rgba(33,33,70,.12);
        transform: translateY(-12px);
        opacity: 0;
        pointer-events: none;
        transition: .25s ease;
      }
      nav.links.open {
        opacity: 1;
        pointer-events: auto;
        transform: none;
      }
      .burger { display: flex; }
      .offer-head { flex-wrap: wrap; gap: 16px; }
    }
    @media (prefers-reduced-motion: reduce) {
      html { scroll-behavior: auto; }
      * { transition: none !important; animation: none !important; }
    }
  </style>
</head>
<body <?php body_class(); ?>>
  <header class="nav">
    <div class="nav-inner">
      <a href="#top" class="logo-link">
        <img src="<?php echo esc_url( $vits ); ?>/assets/logo.svg" alt="VITS — Value Innovation Technology Solutions" class="logo-img">
      </a>
      <nav class="links" id="navLinks">
        <a href="#top" class="active">Home</a>
        <a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">About Us</a>
        <a href="#offerings">Our Offering</a>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="contact-btn">Contact Us</a>
      </nav>
      <button class="burger" id="burgerBtn" aria-label="Toggle menu" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </div>
  </header>

  <section class="hero" id="top">
    <div class="hero-canvas">
      <img class="hero-bg" src="<?php echo esc_url( $vits ); ?>/assets/hero-bg.png" alt="">
      <img class="hero-grid" src="<?php echo esc_url( $vits ); ?>/assets/grid.svg" alt="">
      <div class="hero-copy">
        <h1>Build A business that<br>technology can’t hold back.</h1>
      </div>
      <img class="hero-art" src="<?php echo esc_url( $vits ); ?>/assets/Banner_1.png" alt="Isometric technology cubes">
      <div class="hero-aside">
        <p>For over 30 years, we have been integrating AV and IT to help organisations connect, communicate and operate smarter.</p>
        <p>From strategy and consultation to design, integration and lifecycle support, we bring together world class technology and deep industry expertise to deliver solutions that work seamlessly and evolve with your business.</p>
        <a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>" class="btn-outline hero-learn">Learn More</a>
      </div>
      <div class="banner">
        <div class="banner-card">
          <div class="banner-cluster">
            <div class="banner-row">
              <h2>Designed to perform</h2>
              <p class="banner-tag">Technology that works behind your business.</p>
            </div>
            <div class="banner-row">
              <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn-outline">Explore Our Solutions</a>
              <h2>Built to last</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="offerings" id="offerings">
    <div class="wrap">
      <div class="offer-head">
        <h2>Our Offerings</h2>
        <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="pill-solid">Learn More</a>
      </div>
      <div class="offer-track-wrap">
        <div class="offer-track" id="offerTrack">
          <article class="offer-card"><img src="<?php echo esc_url( $vits ); ?>/assets/offerings/retail.svg" alt="Infrastructure Deployment"></article>
          <article class="offer-card"><img src="<?php echo esc_url( $vits ); ?>/assets/offerings/infrastructure.svg" alt="Annual Maintenance &amp; FMS Support"></article>
          <article class="offer-card"><img src="<?php echo esc_url( $vits ); ?>/assets/offerings/amc.svg" alt="Modular Data Centres"></article>
          <article class="offer-card"><img src="<?php echo esc_url( $vits ); ?>/assets/offerings/datacentre.svg" alt="Retail"></article>
          <article class="offer-card"><img src="<?php echo esc_url( $vits ); ?>/assets/offerings/security.svg" alt="Security, Surveillance &amp; Video Analytics"></article>
          <article class="offer-card"><img src="<?php echo esc_url( $vits ); ?>/assets/offerings/banking.svg" alt="Banking"></article>
          <article class="offer-card"><img src="<?php echo esc_url( $vits ); ?>/assets/offerings/networking.svg" alt="Networking"></article>
          <article class="offer-card"><img src="<?php echo esc_url( $vits ); ?>/assets/offerings/av.svg" alt="Audio Visual Solutions"></article>
        </div>
        <div class="offer-nav">
          <div class="arrows">
            <button id="offerPrev" aria-label="Previous offerings">
              <svg width="18" height="12" viewBox="0 0 18 12" fill="none"><path d="M6 1L1 6l5 5M1 6h16" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
            <button id="offerNext" aria-label="Next offerings">
              <svg width="18" height="12" viewBox="0 0 18 12" fill="none"><path d="M12 1l5 5-5 5M17 6H1" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="stats">
    <img class="stats-grid-bg" src="<?php echo esc_url( $vits ); ?>/assets/grid.svg" alt="">
    <div class="stats-grid">
      <div>
        <div class="stat-label">Happy Clients</div>
        <div class="stat-num" data-target="857">0+</div>
      </div>
      <div>
        <div class="stat-label">Finished Projects</div>
        <div class="stat-num" data-target="934">0+</div>
      </div>
      <div>
        <div class="stat-label">Skilled Experts</div>
        <div class="stat-num" data-target="100">0+</div>
      </div>
    </div>
  </section>

  <section class="partners" id="about">
    <img src="<?php echo esc_url( $vits ); ?>/assets/partners.svg" alt="Our partners: ASUS, Acer, HP, Wolfvision, Lenovo, Dell, Hewlett Packard Enterprise and Intel">
  </section>

  <section class="cta-section" id="contact">
    <div class="cta-blob" aria-hidden="true">
      <svg width="2021" height="1188" viewBox="0 0 1728 1381" preserveAspectRatio="xMidYMax slice" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g filter="url(#ctaElementBlur)">
          <rect x="-200" y="180" width="2200" height="1400" fill="url(#ctaElementGrad)"/>
        </g>
        <defs>
          <filter id="ctaElementBlur" x="-501" y="0" width="2821" height="1988" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
            <feGaussianBlur stdDeviation="200" result="effect1_foregroundBlur"/>
          </filter>
          <linearGradient id="ctaElementGrad" x1="41.5" y1="638.5" x2="787.641" y2="2018.45" gradientUnits="userSpaceOnUse">
            <stop stop-color="#FA5304"/>
            <stop offset="0.370192" stop-color="#2C75CF"/>
            <stop offset="0.783654" stop-color="#FA5304"/>
          </linearGradient>
        </defs>
      </svg>
    </div>
    <img class="cta-grid" src="<?php echo esc_url( $vits ); ?>/assets/grid.svg" alt="">
    <h2 class="cta-heading">Ready For A Smarter Tomorrow?</h2>
    <div class="wrap footer-card">
      <div class="footer-inner">
        <div>
          <img src="<?php echo esc_url( $vits ); ?>/assets/logo.svg" alt="VITS" class="footer-logo">
          <div class="footer-label">CONTACT</div>
          <address>
            Venkatesh IT Solutions Pvt Ltd<br>
            10, Chowringhee Lane<br>
            Sati Nivas - 1st Floor<br>
            Kolkata - 700016
          </address>
          <a class="contact-line" href="tel:+918100284967">+91 81002 84967</a>
          <a class="contact-line" href="tel:+919830800406">+91 98308 00406</a>
          <a class="contact-line" href="mailto:admin@venkatesh-it.co.in">admin@venkatesh-it.co.in</a>
          <div class="footer-social">
            <a href="https://www.instagram.com/venkatesh_itsolutions?stkn=YTZ5bTV4NXprcGNl" aria-label="Instagram" target="_blank" rel="noopener noreferrer">
              <img src="<?php echo esc_url( $vits ); ?>/assets/icon-instagram.svg" alt="" width="53" height="53">
            </a>
            <a href="https://www.facebook.com/share/1D53y5ibPW/?mibextid=wwXIfr" aria-label="Facebook" target="_blank" rel="noopener noreferrer">
              <img src="<?php echo esc_url( $vits ); ?>/assets/icon-facebook.svg" alt="" width="53" height="53">
            </a>
          </div>
        </div>
        <div class="footer-right">
          <h3>Reach Out To Us</h3>
          <p>Our team is here to provide prompt and helpful assistance!</p>
          <div class="footer-actions">
            <a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">About Us</a>
            <a href="#offerings">Our Offering</a>
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Let’s Connect</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    const burger = document.getElementById("burgerBtn");
    const navLinks = document.getElementById("navLinks");
    burger.addEventListener("click", () => {
      const open = navLinks.classList.toggle("open");
      burger.setAttribute("aria-expanded", open);
    });
    navLinks.querySelectorAll("a").forEach((a) => a.addEventListener("click", () => {
      navLinks.classList.remove("open");
      burger.setAttribute("aria-expanded", "false");
      if (!a.classList.contains("contact-btn")) {
        navLinks.querySelectorAll("a").forEach((link) => link.classList.remove("active"));
        a.classList.add("active");
      }
    }));

    (() => {
      const track = document.getElementById("offerTrack");
      const prev = document.getElementById("offerPrev");
      const next = document.getElementById("offerNext");
      const pageSize = 4;

      const cardStep = () => {
        const card = track.querySelector(".offer-card");
        const styles = getComputedStyle(track);
        const gap = parseFloat(styles.columnGap || styles.gap) || 24;
        return card.getBoundingClientRect().width + gap;
      };
      const maxScroll = () => Math.max(0, track.scrollWidth - track.clientWidth);
      const updateArrows = () => {
        const max = maxScroll();
        prev.disabled = track.scrollLeft <= 1;
        next.disabled = track.scrollLeft >= max - 1;
      };
      const move = (direction) => {
        const max = maxScroll();
        const target = Math.min(max, Math.max(0, track.scrollLeft + direction * cardStep() * pageSize));
        track.scrollTo({ left: target, behavior: "smooth" });
      };

      next.addEventListener("click", () => move(1));
      prev.addEventListener("click", () => move(-1));
      track.addEventListener("scroll", updateArrows, { passive: true });
      window.addEventListener("resize", updateArrows);
      updateArrows();
    })();

    const prefersReduced = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
    const animateStat = (el) => {
      const target = parseInt(el.dataset.target, 10);
      if (prefersReduced) { el.textContent = target + "+"; return; }
      const start = performance.now();
      const duration = 1200;
      const step = (now) => {
        const progress = Math.min((now - start) / duration, 1);
        el.textContent = Math.floor(progress * target) + "+";
        if (progress < 1) requestAnimationFrame(step);
      };
      requestAnimationFrame(step);
    };
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          animateStat(entry.target);
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.2 });
    document.querySelectorAll(".stat-num").forEach((el) => observer.observe(el));
  </script>
</body>
</html>
