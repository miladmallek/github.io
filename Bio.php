<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Milad Malek - صفحه شخصی</title>
  <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@400;500&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="CSS/Home.css">
  <link rel="stylesheet" href="CSS/Bio.css">  
 



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
  <section class="bio-container">
    <div class="bio-photo">
      <img src="img/1.jpg" alt="میلاد ملک" />
    </div>
    <div  class="bio-text">
      <h1  > بیوگرافی میلاد ملک</h1>
      <h3>هنرمند موسیقی از ایران</h3>
      <p   >
سلام! من میلاد ملک هستم، نوازنده کلارینت سل با بیش از ۲۰ سال تجربه در دنیای موسیقی بی کلام. موسیقی برای من بیشتر
 از یک هنر ساده است؛ موسیقی مثل زبان بی‌کلامی است که احساسات را به قلب‌ها می‌رساند.
من از اهواز شروع کردم، جایی که نوجوانی‌ام را با یادگیری فلوت عربی و بعد از آن سه تار و تار گذراندم. البته شرایط مالی سخت بود و اجازه نداد همه چیز را به صورت تخصصی یاد بگیرم، اما همیشه با پشتکار ادامه دادم. خانواده‌ام اول ترجیح می‌دادند روی تحصیلاتم تمرکز کنم
 و من هم این مسیر را در کنار موسیقی ادامه دادم و مدرک کارشناسی ارشد برق گرفتم.
در طول مسیر موسیقی‌ام،
 فرصت‌های زیادی پیدا کردم تا با هنرمندان بزرگ آشنا شوم و در کنار آن‌ها اجرا کنم.
امروز، افتخار دارم که جزو نوازندگان ثابت گروه مجید خراطها باشم و در کنار آن، مدیرعامل موسسه فرهنگی و هنری آوای ملک هستم. تلاش می‌کنم موسیقی بی کلام
 و کلارینت سل را به گوش‌های بیشتری برسانم و مردم را با زیبایی این ساز آشنا کنم.
من علاوه بر نوازندگی، برنامه‌نویس نرم‌افزار هم هستم و به‌خوبی می‌دانم که زندگی هنری و حرفه‌ای می‌تواند 
چالش‌های خاص خودش را داشته باشد، اما همیشه موسیقی به من انرژی و انگیزه داده است.
کمپانی «کلارینت من» را راه‌اندازی کردم تا این ساز زیبا و اصیل بیشتر دیده شود و امیدوارم بتوانم اولین کتاب تخصصی
 کلارینت سل را هم به زبان فارسی تهیه کنم تا علاقه‌مندان راحت‌تر بتوانند یاد بگیرند.
اگر علاقه‌مند هستید که بیشتر درباره موسیقی و سازها بدانید،
 یا دوست دارید با من همراه باشید، خوشحال می‌شوم این مسیر را با هم ادامه دهیم.
      </p>
    </div>
    
  </section>
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
        btnBuyClarinet: 'خرید آلبوم بیکلام کلارینت من',
        btnBuyMajid: 'خرید آلبوم بیکلام نوستالژی با مجید خراطها',
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
        btnBuyClarinet: 'Buy Instrumental Alboum Clarinet Man',
        btnBuyMajid: 'Buy Instrumental Nostalgy by Majid Kharatha',
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

<script>
function detectWindows() {
  return navigator.userAgent.indexOf("Windows") !== -1;
}

if (detectWindows()) {
  document.body.classList.add('windows-os');
}
</script>

</body>
</html>
