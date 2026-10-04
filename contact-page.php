<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$vits = get_stylesheet_directory_uri();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VITS — Contact</title>
  <link rel="icon" href="<?php echo esc_url( $vits ); ?>/assets/logo.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&display=swap" rel="stylesheet">
  <style>
    :root {
      --navy: #212146;
      --blue: #667EE5;
      --gutter: clamp(20px, 5.38vw, 93px);
      --max: 1728px;
      --grid-img: url("data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTcyOCIgaGVpZ2h0PSI2MDMiIHZpZXdCb3g9IjAgMCAxNzI4IDYwMyIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggb3BhY2l0eT0iMC4wOSIgZD0iTTM0MS44NTcgMFY2MDNNNDY0LjEwOCAwVjYwM001ODYuMzU5IDBWNjAzTTcwOC42MSAwVjYwM004MzAuODYgMFY2MDNNOTUzLjExMSAwVjYwM00xMDc1LjM2IDBWNjAzTTAgNy44MzExN0gxNzI4TTAgMTI1LjI5OUgxNzI4TTAgMjQyLjc2Nkg4NjRIMTcyOE0wIDM2MC4yMzRIMTcyOE0wIDQ3Ny43MDFIMTcyOE0wIDU5NS4xNjlIMTcyOE0yMDQuNDg5IDBWNjAzTTY3LjEyMDQgMFY2MDNNMTE5Ny45NiAwVjYwM00xMzIwLjIxIDBWNjAzTTE0NDIuNDYgMFY2MDNNMTU2NC43MSAwVjYwM00xNjg2Ljk2IDBWNjAzIiBzdHJva2U9IiMyMTIxNDYiIHN0cm9rZS13aWR0aD0iMiIvPgo8L3N2Zz4K");
      --s: calc(min(100vw, 1728px) / 1728); /* 1 Figma px */
    }
    * { box-sizing: border-box; margin: 0; padding: 0; }
    html, body { overflow-x: hidden; }
    body {
      position: relative;
      font-family: "DM Sans", sans-serif;
      color: var(--navy);
      background: #fff;
      min-height: 100vh;
    }
    a { color: inherit; text-decoration: none; }
    button, input, textarea { font-family: inherit; }
    button { cursor: pointer; border: none; background: none; }
    img { max-width: 100%; display: block; }

    /* ---------- Background (exact Figma export) ---------- */
    .bg-wrap { position: absolute; inset: 0; overflow: hidden; pointer-events: none; z-index: 0; }
    .bg-gradient, .bg-grid { position: absolute; left: 0; width: 100%; pointer-events: none; z-index: 0; }
    .bg-gradient {
      top: calc(226 * var(--s));
      height: calc(1953 * var(--s));
      background: url("data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTcyOCIgaGVpZ2h0PSIxOTUzIiB2aWV3Qm94PSIwIDAgMTcyOCAxOTUzIiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8ZyBmaWx0ZXI9InVybCgjZikiPjxwYXRoIGQ9Ik04MjYuNDEzIDQwMEwxNzI4IDQwMFYxNTYxSDBMMCA0MDBIODI2LjQxM1oiIGZpbGw9InVybCgjcCkiLz48L2c+CjxkZWZzPgo8ZmlsdGVyIGlkPSJmIiB4PSItNDAwIiB5PSIwIiB3aWR0aD0iMjUyOCIgaGVpZ2h0PSIxOTYxIiBmaWx0ZXJVbml0cz0idXNlclNwYWNlT25Vc2UiIGNvbG9yLWludGVycG9sYXRpb24tZmlsdGVycz0ic1JHQiI+PGZlRmxvb2QgZmxvb2Qtb3BhY2l0eT0iMCIgcmVzdWx0PSJiIi8+PGZlQmxlbmQgaW49IlNvdXJjZUdyYXBoaWMiIGluMj0iYiIgcmVzdWx0PSJzIi8+PGZlR2F1c3NpYW5CbHVyIHN0ZERldmlhdGlvbj0iMjAwIi8+PC9maWx0ZXI+CjxsaW5lYXJHcmFkaWVudCBpZD0icCIgeDE9Ii0xMDIuNzM4IiB5MT0iMTAxMS44OCIgeDI9IjE1NzMuNTciIHkyPSItNzguOTkxOSIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiPjxzdG9wIG9mZnNldD0iMC4yMzg4MiIgc3RvcC1jb2xvcj0iI0ZGOUQ3NCIvPjxzdG9wIG9mZnNldD0iMC44MjMwOTMiIHN0b3AtY29sb3I9IiMyQzc1Q0YiIHN0b3Atb3BhY2l0eT0iMC45Ii8+PHN0b3Agb2Zmc2V0PSIxIiBzdG9wLWNvbG9yPSIjRkE1MzA0Ii8+PC9saW5lYXJHcmFkaWVudD4KPC9kZWZzPjwvc3ZnPgo=") center top / 100% 100% no-repeat;
      transition: top .4s;
    }
    .bg-grid { top: calc(531 * var(--s)); height: calc(1190.4 * var(--s)); }
    .bg-grid::before, .bg-grid::after {
      content: ""; position: absolute; left: 0; right: 0;
      background: var(--grid-img) left top / 100% auto no-repeat;
    }
    /* two Figma grid tiles overlap by 15.6px so line spacing stays even */
    .bg-grid::before { top: 0; height: calc(591 * var(--s)); }
    .bg-grid::after { top: calc(587.4 * var(--s)); height: calc(603 * var(--s)); }
    body.is-done .bg-gradient { top: calc(-120 * var(--s)); }
    body.is-done .bg-grid {
      top: calc(120 * var(--s));
      height: calc(603 * var(--s));
      background: url("<?php echo esc_url( $vits ); ?>/assets/thankyou-grid.png") center center / 100% 100% no-repeat;
      mix-blend-mode: screen;
    }
    body.is-done .bg-grid::before,
    body.is-done .bg-grid::after { display: none; }

    /* ---------- NAV ---------- */
    header.nav {
      position: sticky;
      top: 0;
      z-index: 50;
      width: 100%;
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
    nav.links a.contact-btn {
      background: var(--navy);
      color: #fff;
    }
    nav.links a.contact-btn:hover {
      background: #fff;
      color: var(--navy);
      box-shadow: inset 0 0 0 1px var(--navy);
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
    }

    /* ---------- Content ---------- */
    .contact-hero { position: relative; z-index: 1; }
    .contact-inner {
      width: min(1542px, calc(100% - 2 * var(--gutter)));
      margin: 0 auto;
      padding: 24px 0 80px;
    }
    .contact-title {
      width: min(1007px, 100%);
      margin: 0 auto 150px;
      text-align: center;
      color: var(--blue);
      font-size: clamp(32px, 3.01vw, 52px);
      font-weight: 400;
      line-height: 1.2;
    }
    .form-label {
      display: block;
      font-size: clamp(28px, 2.31vw, 40px);
      font-weight: 400;
      line-height: 1;
      color: var(--navy);
      margin-bottom: 28px;
    }
    .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px 17px; }
    .field, .message {
      width: 100%;
      height: 71px;
      border: 1px solid rgba(255,255,255,.45);
      border-radius: 16px;
      background: rgba(255,255,255,.2);
      -webkit-backdrop-filter: blur(12px);
      backdrop-filter: blur(12px);
      color: var(--navy);
      font-size: clamp(15px, 1.27vw, 22px);
      font-weight: 400;
      padding: 0 20px;
      outline: none;
    }
    .field::placeholder, .message::placeholder { color: var(--navy); opacity: .8; }
    .field.invalid, .message.invalid { border-color: #c0392b; background: rgba(255,255,255,.55); }
    .field-error { display: none; margin: 6px 4px 0; font-size: 13px; color: #8d1d1d; text-align: left; }
    .field-error.show { display: block; }
    .message { margin-top: 16px; height: 174px; padding: 16px 20px; resize: none; }
    .form-actions { display: flex; justify-content: flex-end; margin-top: 20px; }
    .submit {
      border: none; background: var(--navy); color: #fff;
      border-radius: 999px; height: 44px; padding: 0 28px;
      letter-spacing: 1.6px; font-size: 12px; font-weight: 600; text-transform: uppercase; cursor: pointer;
    }

    /* faded until the visitor types something */
    .form-label, .submit { opacity: .5; transition: opacity .25s ease; }
    form.has-input .form-label, form.has-input .submit { opacity: 1; }

    /* ---------- Completed state ---------- */
    .done { display: none; text-align: center; padding: 48px 0 0; position: relative; z-index: 1; }
    .done p {
      color: #fff;
      font-size: clamp(24px, 2.78vw, 48px);
      font-weight: 400;
      line-height: 1.3;
    }
    .heart {
      width: clamp(180px, 16vw, 280px);
      height: auto;
      margin: 0 auto 28px;
      display: block;
      mix-blend-mode: screen;
    }
    body.is-done .done { display: block; }
    body.is-done form, body.is-done .contact-title { display: none; }
    body.is-done .contact-foot { margin-top: 260px; }

    /* ---------- Footer ---------- */
    .contact-foot {
      width: 100%;
      margin: 300px auto 0;
      padding: 8px 0 24px;
      display: grid; grid-template-columns: 1fr auto; gap: 40px; align-items: start;
    }
    .contact-foot h2 {
      font-size: clamp(28px, 2.31vw, 40px); font-weight: 400; line-height: 1; margin-bottom: 28px; color: var(--navy);
    }
    .contact-foot p, .contact-foot a.line {
      display: block; font-size: clamp(15px, 1.27vw, 22px); font-weight: 400; line-height: 1.5; color: var(--navy);
    }
    .contact-foot .right { text-align: left; padding-top: 68px; }
    .social { display: flex; gap: 14px; margin-top: 20px; align-items: center; }
    .social a { width: 40px; height: 40px; display: grid; place-items: center; color: var(--navy); }
    .social img, .social svg { width: 40px; height: 40px; display: block; }

    @media (max-width: 800px) {
      .contact-title { margin-bottom: 80px; }
      .form-grid, .contact-foot { grid-template-columns: 1fr; }
      .contact-foot { margin-top: 120px; }
      .contact-foot .right { padding-top: 0; }
      .bg-gradient { top: 300px; height: 1400px; background-size: auto 100%; background-position: 30% top; }
      .bg-grid { top: 340px; height: 1100px; }
      .bg-grid::before { height: 100%; background-size: 1200px auto; background-position: 30% 0; background-repeat: repeat-y; }
      .bg-grid::after { display: none; }
      body.is-done .bg-gradient { top: 100px; }
      body.is-done .bg-grid { top: 90px; height: 603px; background: url("<?php echo esc_url( $vits ); ?>/assets/thankyou-grid.png") center center / 100% 100% no-repeat; mix-blend-mode: screen; }
      body.is-done .bg-grid::before, body.is-done .bg-grid::after { display: none; }
    }
    /* ---- Figma-exact vertical rhythm (desktop) ---- */
    @media (min-width: 801px) {
      .contact-inner { padding: 24px 0 calc(115 * var(--s)); }
      .contact-title { font-size: calc(56 * var(--s)); line-height: 1.55; margin: 0 auto calc(274 * var(--s)); }
      .form-label { font-size: calc(40 * var(--s)); margin-bottom: calc(67 * var(--s)); }
      .form-grid { gap: calc(36 * var(--s)) calc(43 * var(--s)); }
      .field { height: calc(73 * var(--s)); font-size: calc(22 * var(--s)); }
      .message { margin-top: calc(48 * var(--s)); height: calc(269 * var(--s)); font-size: calc(22 * var(--s)); }
      .form-actions { margin-top: calc(63 * var(--s)); }
      .submit { height: calc(49 * var(--s)); padding: 0 calc(30 * var(--s)); font-size: calc(12 * var(--s)); position: relative; }
      .contact-foot { margin-top: calc(302 * var(--s)); padding: 0; }
      .contact-foot h2 { font-size: calc(40 * var(--s)); margin-bottom: calc(43 * var(--s)); }
      .contact-foot p, .contact-foot a.line { font-size: calc(22 * var(--s)); line-height: 1.6; }
      .contact-foot a.line { margin-top: calc(19 * var(--s)); }
      .contact-foot .right { padding-top: calc(83 * var(--s)); text-align: right; }
      .social { margin-top: calc(25 * var(--s)); gap: calc(31 * var(--s)); margin-left: calc(-4 * var(--s)); }
      .social a, .social img, .social svg { width: calc(53 * var(--s)); height: calc(53 * var(--s)); }
      body.is-done .contact-foot { margin-top: calc(270 * var(--s)); }
    }
  </style>
</head>
<body>
  <div class="bg-wrap" aria-hidden="true"><div class="bg-gradient"></div><div class="bg-grid"></div></div>

  <header class="nav">
    <div class="nav-inner">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-link">
        <img src="<?php echo esc_url( $vits ); ?>/assets/logo.svg" alt="VITS — Value Innovation Technology Solutions" class="logo-img">
      </a>
      <nav class="links" id="navLinks">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
        <a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">About Us</a>
        <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Our Offering</a>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="contact-btn">Contact Us</a>
      </nav>
      <button class="burger" id="burgerBtn" aria-label="Toggle menu" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </div>
  </header>

  <main class="contact-hero">
    <div class="contact-inner">
      <h1 class="contact-title">Our Team Is Here To Provide<br>Prompt And Helpful Assistance!</h1>

      <form id="contactForm">
        <label class="form-label" for="name">Let’s Connect</label>
        <div class="form-grid">
          <input class="field" id="name" name="name" type="text" placeholder="Name *" required>
          <input class="field" id="phone" name="phone" type="tel" inputmode="tel" placeholder="Phone no. *" required>
          <input class="field" id="email" name="email" type="email" inputmode="email" placeholder="Email Address *" required>
          <input class="field" id="job" name="job" type="text" placeholder="Job Title">
          <input class="field" id="company" name="company" type="text" placeholder="Company">
          <input class="field" id="city" name="city" type="text" placeholder="City">
        </div>
        <textarea class="message" id="message" name="message" placeholder="Enter your message... *" required></textarea>
        <p class="field-error" id="formError"></p>
        <div class="form-actions"><button class="submit" type="submit">Submit</button></div>
      </form>

      <div class="done" id="done">
        <img class="heart" src="<?php echo esc_url( $vits ); ?>/assets/thankyou-heart.png" alt="">
        <p>Thank You For Reaching Out!<br>Our Team Will Review Your Request<br>And Provide Prompt Assistance.</p>
      </div>

      <footer class="contact-foot">
        <div>
          <h2>Contact</h2>
          <p><a href="tel:+918100284967">+91 81002 84967</a> / <a href="tel:+919830800406">+91 98308 00406</a></p>
          <a class="line" href="mailto:admin@venkatesh-it.co.in">admin@venkatesh-it.co.in</a>
          <div class="social">
            <a href="https://www.instagram.com/venkatesh_itsolutions?stkn=YTZ5bTV4NXprcGNl" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><svg viewBox="0 0 53 53" aria-hidden="true"><path fill="currentColor" d="M36.1025 7.16511C38.6586 7.17274 41.1078 8.19151 42.9152 9.99893C44.7226 11.8063 45.7414 14.2555 45.749 16.8116V36.1025C45.7414 38.6586 44.7226 41.1078 42.9152 42.9152C41.1078 44.7226 38.6586 45.7414 36.1025 45.749H16.8116C14.2555 45.7414 11.8063 44.7226 9.99893 42.9152C8.19151 41.1078 7.17274 38.6586 7.16511 36.1025V16.8116C7.17274 14.2555 8.19151 11.8063 9.99893 9.99893C11.8063 8.19151 14.2555 7.17274 16.8116 7.16511H36.1025ZM36.1025 3.30713H16.8116C9.38398 3.30713 3.30713 9.38398 3.30713 16.8116V36.1025C3.30713 43.5301 9.38398 49.607 16.8116 49.607H36.1025C43.5301 49.607 49.607 43.5301 49.607 36.1025V16.8116C49.607 9.38398 43.5301 3.30713 36.1025 3.30713Z"/><path fill="currentColor" d="M38.9963 16.8114C38.424 16.8114 37.8645 16.6417 37.3886 16.3237C36.9127 16.0058 36.5418 15.5538 36.3228 15.0251C36.1038 14.4963 36.0465 13.9145 36.1581 13.3531C36.2698 12.7918 36.5454 12.2762 36.9501 11.8715C37.3548 11.4668 37.8704 11.1912 38.4317 11.0795C38.9931 10.9679 39.5749 11.0252 40.1037 11.2442C40.6324 11.4632 41.0844 11.8341 41.4023 12.31C41.7203 12.7859 41.89 13.3453 41.89 13.9177C41.8908 14.2979 41.8165 14.6746 41.6714 15.026C41.5263 15.3775 41.3132 15.6968 41.0443 15.9657C40.7754 16.2345 40.4561 16.4477 40.1046 16.5928C39.7532 16.7379 39.3765 16.8122 38.9963 16.8114Z"/><path fill="currentColor" d="M26.4573 18.7398C27.9836 18.7398 29.4756 19.1924 30.7446 20.0404C32.0137 20.8883 33.0028 22.0935 33.5869 23.5036C34.1709 24.9137 34.3238 26.4654 34.026 27.9623C33.7282 29.4593 32.9933 30.8343 31.914 31.9135C30.8348 32.9928 29.4597 33.7277 27.9628 34.0255C26.4658 34.3233 24.9142 34.1704 23.5041 33.5864C22.094 33.0023 20.8888 32.0132 20.0409 30.7441C19.1929 29.4751 18.7403 27.9831 18.7403 26.4568C18.7425 24.4108 19.5562 22.4492 21.003 21.0025C22.4497 19.5557 24.4113 18.742 26.4573 18.7398ZM26.4573 14.8818C24.168 14.8818 21.9301 15.5607 20.0266 16.8326C18.1231 18.1044 16.6395 19.9122 15.7634 22.0273C14.8873 24.1423 14.6581 26.4696 15.1047 28.715C15.5514 30.9603 16.6538 33.0227 18.2726 34.6415C19.8913 36.2603 21.9538 37.3627 24.1991 37.8093C26.4445 38.256 28.7718 38.0267 30.8868 37.1507C33.0019 36.2746 34.8096 34.791 36.0815 32.8875C37.3534 30.984 38.0323 28.7461 38.0323 26.4568C38.0323 23.3869 36.8128 20.4428 34.642 18.2721C32.4713 16.1013 29.5272 14.8818 26.4573 14.8818Z"/></svg></a>
            <a href="https://www.facebook.com/share/1D53y5ibPW/?mibextid=wwXIfr" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><svg viewBox="0 0 53 53" aria-hidden="true"><path fill="currentColor" fill-rule="evenodd" d="M49.607 26.5967C49.607 13.8126 39.2412 3.44678 26.4571 3.44678C13.6729 3.44678 3.30713 13.8126 3.30713 26.5967C3.30713 38.151 11.7713 47.7282 22.8399 49.4665V33.2905H16.9604V26.5967H22.8399V21.4965C22.8399 15.6956 26.2969 12.4887 31.5841 12.4887C34.1172 12.4887 36.767 12.9413 36.767 12.9413V18.6389H33.8464C30.9723 18.6389 30.0732 20.4227 30.0732 22.2561V26.5967H36.4932L35.468 33.2905H30.0742V49.4686C41.1428 47.7313 49.607 38.1541 49.607 26.5967Z"/></svg></a>
          </div>
        </div>
        <div class="right">
          <p>10, Chowringhee Lane<br>Sati Nivas - 1st Floor<br>Kolkata - 700016</p>
        </div>
      </footer>
    </div>
  </main>
  <script>
window.VITS_AJAX_URL = <?php echo wp_json_encode( admin_url( 'admin-ajax.php' ) ); ?>;
window.VITS_AJAX_NONCE = <?php echo wp_json_encode( wp_create_nonce( 'vits_enquiry' ) ); ?>;
</script>
<script>
    const burger = document.getElementById("burgerBtn");
    const navLinks = document.getElementById("navLinks");
    burger.addEventListener("click", () => {
      const open = navLinks.classList.toggle("open");
      burger.setAttribute("aria-expanded", open);
    });
    const form = document.getElementById("contactForm");
    form.addEventListener("input", () => {
      const typed = [...form.elements].some((el) => el.value && el.value.trim());
      form.classList.toggle("has-input", typed);
    });
    form.addEventListener("submit", (event) => {
      event.preventDefault();
      const name = form.name.value.trim();
      const phone = form.phone.value.trim();
      const email = form.email.value.trim();
      const message = form.message.value.trim();
      const phoneOk = /^(?:\+91[\s-]?)?[6-9]\d{9}$/.test(phone.replace(/\s/g, ""));
      const emailOk = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/i.test(email);
      form.querySelectorAll(".invalid").forEach((el) => el.classList.remove("invalid"));
      const error = document.getElementById("formError");
      const problems = [];
      if (!name) { form.name.classList.add("invalid"); problems.push("Name is required."); }
      if (!phoneOk) { form.phone.classList.add("invalid"); problems.push("Enter a valid 10-digit phone number."); }
      if (!emailOk) { form.email.classList.add("invalid"); problems.push("Enter a valid email address."); }
      if (!message) { form.message.classList.add("invalid"); problems.push("Message is required."); }
      if (problems.length) {
        error.textContent = problems[0];
        error.classList.add("show");
        return;
      }
      error.classList.remove("show");
      const finish = () => {
        document.body.classList.add("is-done");
        window.scrollTo({ top: 0, behavior: "smooth" });
      };
      if (!window.VITS_AJAX_URL) {
        finish();
        return;
      }
      const data = new FormData(form);
      data.append("action", "vits_enquiry");
      data.append("nonce", window.VITS_AJAX_NONCE || "");
      fetch(window.VITS_AJAX_URL, { method: "POST", body: data, credentials: "same-origin" })
        .then((res) => res.json())
        .then((json) => {
          if (!json.success) {
            error.textContent = (json.data && json.data.message) || "Could not send the form.";
            error.classList.add("show");
            return;
          }
          finish();
        })
        .catch(() => {
          error.textContent = "Could not reach the server. Start the local site and try again.";
          error.classList.add("show");
        });
    });
  </script>
</body>
</html>
