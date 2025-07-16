<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Milad Malek - صفحه شخصی</title>
  <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@400;500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="CSS/Home.css">

</head>
<body>

  <div class="background-slideshow">
    <img class="bg-slide" src="img/1.jpg" alt="background 1">
    <img class="bg-slide" src="img/2.jpg" alt="background 2">
    <img class="bg-slide" src="img/3.jpg" alt="background 3">
  </div>

  <header>
    <div class="logo">
      <!-- لوگو اینجا قرار می‌گیره -->
      <img src="placeholder-logo.png" alt="Logo" />
    </div>

    <nav class="main-nav">
      <a href="Home.php" id="nav-home">خانه</a>
      <a href="Bio.php" id="nav-bio">بیوگرافی</a>
      <a href="#" id="nav-contact">تماس</a>
    </nav>
    <div style="display:flex; align-items:center; gap:14px;">
      <button class="language-toggle" id="langToggle">EN</button>
      <div class="menu-toggle" id="menuToggle" role="button" aria-label="Toggle menu" aria-expanded="false" aria-controls="mobileMenu">
        <span></span><span></span><span></span>
      </div>
    </div>
  </header>

  <nav class="mobile-nav" id="mobileMenu">
    <a href="Home.php" id="nav-home-mobile">خانه</a>
    <a href="Bio.php" id="nav-bio-mobile">بیوگرافی</a>
    <a href="#" id="nav-contact-mobile">تماس</a>
  </nav>

  <main>
<h1 id="main-name">
  <span class="smaller-text">با خرید آلبوم‌ها، ۴۰٪ از درآمد مستقیماً به امور خیریه اختصاص می‌یابد.</span><br />
  با هم، زندگی را بهتر کنیم.
</h1>
    <div class="subtitle" id="subtitle">
      40% of every album sale goes directly to charity.<br />Together, we can make a difference.
    </div>
    <div class="btns">
 
      <button class="btn" id="btnBuyClarinet"> آلبوم بیکلام کلارینت من</button>
      <button class="btn" id="btnBuyMajid"> آلبوم بیکلام نوستالژی با مجید خراطها</button>
 
    </div>
  </main>


<div class="logo-row-wrapper">
<div class="logo-row">
  <img src="LOGO/youtubeLOGO.png" alt="لوگو ۱">
  <img src="LOGO/instaLOGO.png" alt="لوگو ۲">
  <img src="LOGO/spotifyLOGO.png" alt="لوگو ۳">
  <img src="LOGO/aparatLOGO.png" alt="لوگو ۴">
</div>
 </div>

  <footer>
    <p>
      کلیه حقوق متعلق به <strong>مؤسسه فرهنگی و هنری طنین آوای ملک</strong> می‌باشد.<br />
      هرگونه کپی‌برداری یا سوءاستفاده از آثار، پیگرد قانونی دارد.
    </p>
  </footer>

<script>
  document.getElementById("btnBuyClarinet").addEventListener("click", function () {
    window.location.href = "https://example.com/album";
  });
</script>


<script>
  document.getElementById("btnBuyMajid").addEventListener("click", function () {
    window.location.href = "Alboum-MK.php";
  });
</script>



<script>
  const langToggleBtn = document.getElementById('langToggle');
  const menuToggleBtn = document.getElementById('menuToggle');
  const mobileMenu = document.getElementById('mobileMenu');

  const texts = {
    fa: {
      home: 'خانه',
      bio: 'بیوگرافی',
      contact: 'تماس',
      mainName: 'با خرید آلبوم‌ها، ۴۰٪ از درآمد مستقیماً به امور خیریه اختصاص می‌یابد.<br />با هم، زندگی را بهتر کنیم.',
      subtitle: '40% of every album sale goes directly to charity.<br />Together, we can make a difference.',
      langBtn: 'EN',  // این کاما را اضافه کردم
      buttons: {
        btnBuyClarinet: ' آلبوم بیکلام کلارینت من',
        btnBuyMajid: ' آلبوم بیکلام نوستالژی با مجید خراطها',
      }
    },
    en: {
      home: 'Home',
      bio: 'Biography',
      contact: 'Contact',
      mainName: '40% of every album sale goes directly to charity.<br />Together, we can make a difference.',
      subtitle: 'با خرید آلبوم‌ها، ۴۰٪ از درآمد مستقیماً به امور خیریه اختصاص می‌یابد.<br />با هم، زندگی را بهتر کنیم.',
      langBtn: 'FA',  // این کاما را اضافه کردم
      buttons: {
        btnBuyClarinet: ' Instrumental Alboum Clarinet Man',
        btnBuyMajid: ' Instrumental Nostalgy by Majid Kharatha',
      }
    }
  };

  function setLanguage(lang) {
    document.documentElement.lang = lang;
    document.documentElement.dir = lang === 'fa' ? 'rtl' : 'ltr';

    document.getElementById('nav-home').textContent = texts[lang].home;
    document.getElementById('nav-bio').textContent = texts[lang].bio;
    document.getElementById('nav-contact').textContent = texts[lang].contact;
    document.getElementById('nav-home-mobile').textContent = texts[lang].home;
    document.getElementById('nav-bio-mobile').textContent = texts[lang].bio;
    document.getElementById('nav-contact-mobile').textContent = texts[lang].contact;

    document.getElementById('main-name').innerHTML = texts[lang].mainName;
    document.getElementById('subtitle').innerHTML = texts[lang].subtitle;

    document.querySelectorAll('.btn').forEach(btn => {
      if (btn.id in texts[lang].buttons) {
        btn.textContent = texts[lang].buttons[btn.id];
      }
    });

    langToggleBtn.textContent = texts[lang].langBtn;
  }

  langToggleBtn.addEventListener('click', () => {
    const currentLang = document.documentElement.lang;
    const newLang = currentLang === 'fa' ? 'en' : 'fa';
    setLanguage(newLang);
  });

  menuToggleBtn.setAttribute('aria-expanded', 'false');
  menuToggleBtn.setAttribute('aria-controls', 'mobileMenu');

  menuToggleBtn.addEventListener('click', () => {
    const expanded = menuToggleBtn.getAttribute('aria-expanded') === 'true';
    menuToggleBtn.setAttribute('aria-expanded', String(!expanded));
    mobileMenu.classList.toggle('open');
  });

  setLanguage('fa');
</script>


  <script>
    const slides = document.querySelectorAll('.bg-slide');
    let current = 0;

    if (slides.length > 0) {
      slides[current].style.opacity = 1;

      setInterval(() => {
        slides[current].style.opacity = 0;
        current = (current + 1) % slides.length;
        slides[current].style.opacity = 1;
      }, 8000);
    }
  </script>


</body>
</html>
