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
  <title>VITS — About Us</title>
  <meta name="description" content="Three decades of expertise. VITS is a systems integrator specialising in AV and IT solutions.">
  <link rel="icon" href="<?php echo esc_url( $vits ); ?>/assets/logo.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&display=swap" rel="stylesheet">
  <style>
    :root {
      --navy: #212146;
      --ink: #001D42;
      --blue: #667EE5;
      --white: #ffffff;
      --gutter: clamp(20px, 5.38vw, 93px);
      --max: 1728px;
    }

    * { box-sizing: border-box; margin: 0; padding: 0; }
    html { scroll-behavior: smooth; }
    body {
      font-family: "DM Sans", sans-serif;
      color: var(--navy);
      background: var(--white);
      overflow-x: hidden;
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

    .about-hero {
      position: relative;
      overflow: hidden;
      background:
        linear-gradient(105deg, #fde7df 0%, #f8e3ea 28%, #f4f7fd 52%, #e7eefb 70%, #fbe6df 100%);
    }
    .about-wash { display: none; }
    .about-globe {
      position: relative;
      z-index: 0;
      display: block;
      width: min(1728px, 100%);
      height: auto;
      margin: 0 auto;
      mix-blend-mode: normal;
      filter: none;
      opacity: 1;
      filter: none;
      pointer-events: none;
      -webkit-mask-image: none;
      mask-image: none;
    }
    .about-inner {
      position: absolute;
      z-index: 2;
      inset: 0;
      width: min(100%, var(--max));
      margin: 0 auto;
      padding: 48px 0 0;
    }
    .about-inner h1 {
      margin: 0;
      text-align: center;
      font-size: clamp(34px, 3.15vw, 52px);
      font-weight: 600;
      line-height: 1.22;
      letter-spacing: -0.02em;
      color: #212146;
    }
    .about-bottom {
      position: absolute;
      left: 50%;
      top: 56%;
      bottom: auto;
      width: min(1728px, 100%);
      height: auto;
      transform: translateX(-50%);
    }
    .about-card {
      position: absolute;
      left: 6%;
      top: 0;
      width: 58%;
      height: auto;
      border-radius: 29px;
      background: rgba(255, 255, 255, 0.28);
      box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.72);
      padding: 48px 56px;
    }
    .about-card p {
      width: auto;
      max-width: 100%;
      font-family: "DM Sans", sans-serif;
      font-size: clamp(16px, 1.4vw, 24px);
      font-weight: 500;
      line-height: 1.25;
      letter-spacing: 0;
      color: #212146;
      text-align: left;
    }
    .about-card p + p { margin-top: 22px; }
    .about-tag {
      position: absolute;
      left: auto;
      right: 3%;
      top: 8%;
      width: 28%;
      margin: 0;
      font-family: "DM Sans", sans-serif;
      font-size: clamp(28px, 2.8vw, 48px);
      font-weight: 600;
      line-height: 1.05;
      letter-spacing: 0;
      text-align: right;
      color: #212146;
    }

    .industries {
      position: relative;
      background-color: #fff;
      background-image:
        linear-gradient(rgba(102, 126, 229, .14) 1px, transparent 1px),
        linear-gradient(90deg, rgba(102, 126, 229, .14) 1px, transparent 1px);
      background-size: 78px 78px;
      padding: 28px 0 88px;
    }
    .industries-board {
      width: min(100%, var(--max));
      margin: 0 auto;
      padding: 0 var(--gutter);
      display: grid;
      grid-template-columns: repeat(4, minmax(0, 1fr));
      gap: 28px 32px;
    }
    .industries-copy {
      grid-column: 1;
      grid-row: 1;
      align-self: start;
      width: 470px;
      max-width: none;
      z-index: 1;
    }
    .industries-copy h2 {
      font-size: 64px;
      font-weight: 600;
      letter-spacing: 0;
      color: #667EE5;
      line-height: 91px;
      white-space: nowrap;
    }
    .industries-copy p {
      width: 344px;
      margin-top: 8px;
      font-size: 16px;
      line-height: 1.45;
      color: #212146;
    }
    .industry-card {
      background: #E9EDF5;
      border-radius: 29px;
      aspect-ratio: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-end;
      padding: 8% 8% 10%;
      text-align: center;
    }
    .industry-card img {
      width: 68%;
      height: auto;
      margin-bottom: 4%;
      object-fit: contain;
    }
    .industry-card span {
      color: #5d74e2;
      font-size: clamp(13px, 1.05vw, 18px);
      font-weight: 500;
      line-height: 1.2;
    }
    .card-education { grid-column: 3; grid-row: 1; }
    .card-banking { grid-column: 4; grid-row: 1; }
    .card-automotive { grid-column: 2; grid-row: 2; }
    .card-healthcare { grid-column: 3; grid-row: 2; }
    .card-manufacturing { grid-column: 4; grid-row: 2; }
    .card-retail { grid-column: 1; grid-row: 3; }
    .card-it { grid-column: 2; grid-row: 3; }
    .card-media { grid-column: 3; grid-row: 3; }
    .card-startups { grid-column: 4; grid-row: 3; }

    .finale {
      position: relative;
      overflow: hidden;
      background: #fff;
    }
    .cta-section {
      position: relative;
      z-index: 1;
      overflow: hidden;
      margin-top: 72px;
      padding: 0 0 48px;
      scroll-margin-top: 110px;
      background:
        linear-gradient(180deg, #ffffff 0%, #ffffff 6%, rgba(255,255,255,.7) 16%, rgba(255,255,255,0) 38%),
        linear-gradient(115deg, #FA5304 0%, #c56b8a 22%, #2C75CF 48%, #d9785c 78%, #FA5304 100%);
    }
    .cta-blob {
      display: none;
      position: absolute;
      left: 50%;
      bottom: -40px;
      width: 2021px;
      height: 1381px;
      max-width: none;
      transform: translateX(calc(-50% + 46px));
      pointer-events: none;
      z-index: 0;
    }
    .cta-blob img {
      width: 100%;
      height: 100%;
      max-width: none;
      display: block;
      object-fit: cover;
    }
    .cta-grid {
      position: absolute;
      left: 50%;
      top: 57px;
      width: min(1728px, 100vw);
      height: 603px;
      transform: translateX(-50%);
      object-fit: fill;
      opacity: 1;
      pointer-events: none;
      z-index: 0;
    }
    .cta-heading {
      position: relative;
      z-index: 1;
      width: min(100%, var(--max));
      margin: 0 auto 28px;
      padding: 120px var(--gutter) 0;
      text-align: center;
      font-size: clamp(32px, 4.63vw, 80px);
      font-weight: 600;
      letter-spacing: 0;
      line-height: 1.05;
      color: rgba(255, 255, 255, 0.65);
    }
    .footer-card { position: relative; z-index: 1; }
    .footer-inner {
      position: relative;
      z-index: 1;
      background: rgba(255,255,255,.2);
      border-radius: 29px;
      min-height: 583px;
      padding: 48px 56px 40px;
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
    }
    .footer-social a img { width: 53px; height: 53px; }
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
      font-size: 32px;
      font-weight: 400;
      color: #212146;
      line-height: 1;
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
    .footer-inner .footer-actions a.pill,
    .footer-inner .footer-actions a.pill:link,
    .footer-inner .footer-actions a.pill:visited,
    .footer-inner .footer-actions a.pill:any-link {
      background: var(--navy);
      color: #ffffff;
      -webkit-text-fill-color: #ffffff;
    }

    .why {
      position: relative;
      z-index: 1;
      scroll-margin-top: 110px;
      background: #fff;
      padding: 72px 0 24px;
      overflow: visible;
    }
    .why h2 {
      position: relative;
      z-index: 2;
      text-align: center;
      font-size: clamp(36px, 3.4vw, 52px);
      font-weight: 600;
      letter-spacing: -0.02em;
      color: var(--blue);
      margin-bottom: 8px;
    }
    .why-stage {
      position: relative;
      width: min(1728px, 100%);
      margin: 0 auto;
      aspect-ratio: 1728 / 760;
    }
    .why-wave {
      position: absolute;
      pointer-events: none;
      z-index: 0;
    }
    .why-wave-left {
      left: 0;
      top: 18%;
      width: 36.4%;
    }
    .why-wave-right {
      left: 65.45%;
      top: 62.4%;
      width: 39.8%;
    }
    .why-circle {
      position: absolute;
      width: 21.686%;
      aspect-ratio: 1;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--navy);
      font-size: clamp(14px, 1.15vw, 20px);
      font-weight: 500;
      text-align: center;
      line-height: 1.2;
    }
    .why-circle.filled {
      background: #E9EDF5;
      z-index: 2;
    }
    .why-circle.outline {
      background: transparent;
      box-shadow: inset 0 0 0 1px #667EE5;
      z-index: 1;
    }
    .why-circle.flexibility { left: 30.68%; top: 8.82%; }
    .why-circle.knowledge { left: 45.6%; top: 5.4%; }
    .why-circle.experience { left: 26.47%; top: 34.64%; }
    .why-circle.quality { left: 48.29%; top: 44.34%; }
    .why-label {
      position: absolute;
      z-index: 3;
      width: 21.686%;
      aspect-ratio: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--navy);
      font-size: clamp(14px, 1.15vw, 20px);
      font-weight: 500;
      pointer-events: none;
    }
    .why-label.flexibility { left: 30.68%; top: 8.82%; }
    .why-label.knowledge { left: 45.6%; top: 5.4%; transform: translate(16%, 2%); }
    .why-label.experience { left: 26.47%; top: 34.64%; transform: translate(-14%, 4%); }
    .why-label.quality { left: 48.29%; top: 44.34%; }

    @media (max-width: 1100px) {
      .about-hero { min-height: 0; }
      .about-globe { position: absolute; top: 0; width: 100%; height: auto; }
      .about-wash { width: 160%; height: 78%; top: 0; }
      .about-inner { position: relative; inset: auto; padding: 48px var(--gutter) 48px; }
      .about-inner h1 { text-align: left; }
      .about-bottom {
        position: relative;
        top: auto;
        left: auto;
        width: 100%;
        height: auto;
        margin-top: 48px;
        display: flex;
        flex-direction: column;
        gap: 28px;
      }
      .about-card {
        position: relative;
        left: auto;
        top: auto;
        width: 100%;
        height: auto;
        padding: 32px 24px;
      }
      .about-card p { width: auto; font-size: 18px; line-height: 1.35; }
      .about-tag {
        position: relative;
        left: auto;
        top: auto;
        width: auto;
        text-align: left;
        font-size: 36px;
      }
      .industries-board { grid-template-columns: repeat(2, minmax(0, 1fr)); }
      .industries-copy { grid-column: 1 / -1; grid-row: auto; width: auto; max-width: 470px; margin-bottom: 8px; }
      .industries-copy h2 { font-size: 42px; line-height: 1.15; white-space: normal; }
      .industries-copy p { width: auto; }
      .card-education,
      .card-banking,
      .card-automotive,
      .card-healthcare,
      .card-manufacturing,
      .card-retail,
      .card-it,
      .card-media,
      .card-startups { grid-column: auto; grid-row: auto; }
      .why-circle { font-size: 15px; }
      .cta-blob { width: 140%; height: 900px; top: -40px; }
      .footer-inner { grid-template-columns: 1fr; min-height: 0; padding: 40px 28px; }
      .footer-right { align-items: flex-start; text-align: left; }
      .footer-right p { text-align: left; }
      .footer-actions { justify-content: flex-start; flex-wrap: wrap; }
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
      .about-globe { width: 140%; top: 8%; }
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
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-link">
        <img src="<?php echo esc_url( $vits ); ?>/assets/logo.svg" alt="VITS — Value Innovation Technology Solutions" class="logo-img">
      </a>
      <nav class="links" id="navLinks">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
        <a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>" class="active">About Us</a>
        <a href="<?php echo esc_url( home_url( '/#offerings' ) ); ?>">Our Offering</a>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="contact-btn">Contact Us</a>
      </nav>
      <button class="burger" id="burgerBtn" aria-label="Toggle menu" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </div>
  </header>

  <section class="about-hero">
    <div class="about-wash" aria-hidden="true"></div>
    <img class="about-globe" src="<?php echo esc_url( $vits ); ?>/assets/about-globe-v2.png" alt="">
    <div class="about-inner">
      <h1>Three Decades Of Expertise.<br>Technology Built Around Your Business.</h1>
      <div class="about-bottom">
        <div class="about-card">
          <p>We are a leading Systems Integrator specialising in AV &amp; IT solutions, helping organisations transform the way they connect, communicate and operate.</p>
          <p>Our journey has been shaped by innovation, reliability and an unwavering commitment to excellence. In partnership with leading global technology brands, we deliver end-to-end solutions from consultation and design to seamless integration and ongoing support.</p>
          <p>With expertise across Corporate, Government, Healthcare, Education and Hospitality, we bring the knowledge and capability required to deliver complex, mission-critical technology environments.</p>
        </div>
        <h2 class="about-tag">Technology Evolves,<br>So Do We.</h2>
      </div>
    </div>
  </section>

  <section class="industries" aria-labelledby="industry-reach">
    <div class="industries-board">
      <div class="industries-copy">
        <h2 id="industry-reach">Industry Reach</h2>
        <p>Our experience across industries, enable us to take on complex, mission-critical projects with confidence.</p>
      </div>
      <article class="industry-card card-education">
        <img src="<?php echo esc_url( $vits ); ?>/assets/industries/education.png" alt="">
        <span>Education</span>
      </article>
      <article class="industry-card card-banking">
        <img src="<?php echo esc_url( $vits ); ?>/assets/industries/banking.png" alt="">
        <span>Banking &amp; Insurance</span>
      </article>
      <article class="industry-card card-automotive">
        <img src="<?php echo esc_url( $vits ); ?>/assets/industries/automotive.png" alt="">
        <span>Automotive</span>
      </article>
      <article class="industry-card card-healthcare">
        <img src="<?php echo esc_url( $vits ); ?>/assets/industries/healthcare.png" alt="">
        <span>Healthcare &amp; Pharma</span>
      </article>
      <article class="industry-card card-manufacturing">
        <img src="<?php echo esc_url( $vits ); ?>/assets/industries/manufacturing.png" alt="">
        <span>Manufacturing</span>
      </article>
      <article class="industry-card card-retail">
        <img src="<?php echo esc_url( $vits ); ?>/assets/industries/retail.png" alt="">
        <span>Retail</span>
      </article>
      <article class="industry-card card-it">
        <img src="<?php echo esc_url( $vits ); ?>/assets/industries/it.png" alt="">
        <span>IT / ITES</span>
      </article>
      <article class="industry-card card-media">
        <img src="<?php echo esc_url( $vits ); ?>/assets/industries/media.png" alt="">
        <span>Media</span>
      </article>
      <article class="industry-card card-startups">
        <img src="<?php echo esc_url( $vits ); ?>/assets/industries/startups.png" alt="">
        <span>Start ups</span>
      </article>
    </div>
  </section>

  <div class="finale">
    <div class="cta-blob" aria-hidden="true">
      <img src="<?php echo esc_url( $vits ); ?>/assets/element.svg" alt="">
    </div>
  <section class="why" aria-labelledby="why-choose">
    <h2 id="why-choose">Why Choose Us?</h2>
    <div class="why-stage">
      <img class="why-wave why-wave-left" src="<?php echo esc_url( $vits ); ?>/assets/why/wave-right.svg" alt="">
      <img class="why-wave why-wave-right" src="<?php echo esc_url( $vits ); ?>/assets/why/wave-left.svg" alt="">
      <div class="why-circle outline knowledge"></div>
      <div class="why-circle outline experience"></div>
      <div class="why-circle filled flexibility"></div>
      <div class="why-circle filled quality"></div>
      <span class="why-label flexibility">Flexibility</span>
      <span class="why-label knowledge">Knowledge</span>
      <span class="why-label experience">Experience</span>
      <span class="why-label quality">Work Quality</span>
    </div>
  </section>

  <section class="cta-section" id="contact">
    <h2 class="cta-heading">Ready For A Smarter Tomorrow?</h2>
    <div class="wrap footer-card">
      <img class="cta-grid" src="<?php echo esc_url( $vits ); ?>/assets/grid.svg" alt="">
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
            <a href="<?php echo esc_url( home_url( '/#offerings' ) ); ?>">Our Offering</a>
            <a class="pill" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Let’s Connect</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  </div>

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
    }));
  </script>
</body>
</html>
