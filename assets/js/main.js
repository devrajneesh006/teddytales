/* ============================================================
   Teddy Tales — motion & interactions
   ============================================================ */
(function () {
  'use strict';

  /* ---------- Preloader ---------- */
  var preloader = document.getElementById('preloader');
  function hidePreloader() {
    if (!preloader || !preloader.classList.contains('done')) {
      if (preloader) preloader.classList.add('done');
      document.body.style.overflow = '';
    }
  }
  window.addEventListener('load', function () {
    setTimeout(hidePreloader, 550);
  });
  setTimeout(hidePreloader, 3500); // safety net

  /* ---------- Nav on scroll ---------- */
  var nav = document.getElementById('site-nav');
  function onScrollNav() {
    if (!nav) return;
    nav.classList.toggle('scrolled', window.scrollY > 40);
  }
  window.addEventListener('scroll', onScrollNav, { passive: true });
  onScrollNav();

  /* ---------- Back to top ---------- */
  var backTop = document.getElementById('back-top');
  window.addEventListener('scroll', function () {
    if (!backTop) return;
    var show = window.scrollY > 500;
    backTop.classList.toggle('opacity-0', !show);
    backTop.classList.toggle('translate-y-4', !show);
    backTop.classList.toggle('pointer-events-none', !show);
  }, { passive: true });
  if (backTop) {
    backTop.addEventListener('click', function () {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  /* ---------- Mobile menu ---------- */
  var toggle = document.getElementById('menu-toggle');
  var menu = document.getElementById('mobile-menu');
  var backdrop = document.getElementById('mobile-backdrop');
  var panel = document.getElementById('mobile-panel');
  var iconOpen = document.getElementById('icon-hamburger');
  var iconClose = document.getElementById('icon-close');

  function setMenu(open) {
    if (!menu || !backdrop || !panel || !toggle) return;
    menu.classList.toggle('pointer-events-none', !open);
    backdrop.classList.toggle('opacity-0', !open);
    backdrop.classList.toggle('opacity-100', open);
    panel.classList.toggle('translate-x-full', !open);
    panel.classList.toggle('translate-x-0', open);
    toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    toggle.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
    if (iconOpen) iconOpen.classList.toggle('hidden', open);
    if (iconClose) iconClose.classList.toggle('hidden', !open);
    document.body.style.overflow = open ? 'hidden' : '';
  }

  if (toggle && menu) {
    toggle.addEventListener('click', function () {
      setMenu(menu.classList.contains('pointer-events-none'));
    });
    backdrop.addEventListener('click', function () { setMenu(false); });
    menu.querySelectorAll('a').forEach(function (a) {
      a.addEventListener('click', function () { setMenu(false); });
    });
  }

  /* ---------- Scroll reveal ---------- */
  var revealEls = document.querySelectorAll('.reveal-up, .reveal-left, .reveal-right, .reveal-zoom, .reveal-bear, .reveal, .reveal-scale, .stagger');
  if ('IntersectionObserver' in window) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('in-view');
          io.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
    revealEls.forEach(function (el) { io.observe(el); });
  } else {
    revealEls.forEach(function (el) { el.classList.add('in-view'); });
  }

  /* ---------- Animated counters ---------- */
  function animateCounter(el) {
    var target = parseFloat(el.dataset.count || '0');
    var suffix = el.dataset.suffix || '';
    var decimals = (el.dataset.count || '').split('.')[1] ? 1 : 0;
    var dur = 1800;
    var start = null;
    function tick(ts) {
      if (!start) start = ts;
      var p = Math.min((ts - start) / dur, 1);
      var eased = 1 - Math.pow(1 - p, 3);
      var val = target * eased;
      el.textContent = (decimals ? val.toFixed(decimals) : Math.round(val)).toLocaleString() + suffix;
      if (p < 1) requestAnimationFrame(tick);
    }
    requestAnimationFrame(tick);
  }
  if ('IntersectionObserver' in window) {
    var cio = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
          cio.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });
    document.querySelectorAll('.counter').forEach(function (el) { cio.observe(el); });
  } else {
    document.querySelectorAll('.counter').forEach(function (el) {
      var c = el.dataset.count;
      el.textContent = (parseFloat(c) || 0).toLocaleString() + (el.dataset.suffix || '');
    });
  }

  /* ---------- 3D TILT on mousemove ---------- */
  var tiltEls = document.querySelectorAll('.tilt-active');
  if (tiltEls.length && window.matchMedia('(hover: hover)').matches) {
    tiltEls.forEach(function (el) {
      var wrap = el.closest('.tilt-wrap') || el;
      var rx = 0, ry = 0, raf = null;
      function apply() {
        el.style.transform = 'perspective(900px) rotateX(' + rx + 'deg) rotateY(' + ry + 'deg) translateY(-4px) scale(1.02)';
        raf = null;
      }
      function onMove(e) {
        var r = wrap.getBoundingClientRect();
        var px = (e.clientX - r.left) / r.width;
        var py = (e.clientY - r.top) / r.height;
        ry = (px - .5) * 12;
        rx = (.5 - py) * 12;
        if (!raf) raf = requestAnimationFrame(apply);
      }
      function onLeave() {
        if (raf) cancelAnimationFrame(raf);
        rx = 0; ry = 0;
        el.style.transform = '';
      }
      wrap.addEventListener('mousemove', onMove, { passive: true });
      wrap.addEventListener('mouseleave', onLeave, { passive: true });
    });
  }

  /* ---------- Home slider ---------- */
  var sliderTrack = document.getElementById('slider-track');
  var sliderDots = document.getElementById('slider-dots');
  var sliderBtn = document.querySelector('.slider-section');
  if (sliderTrack && sliderDots) {
    var sSlides = sliderTrack.children.length;
    var sIdx = 0;
    var sTimer = null;

    function markActiveSlide() {
      Array.prototype.forEach.call(sliderTrack.children, function (slide, i) {
        slide.classList.toggle('slider-active', i === sIdx);
        slide.setAttribute('aria-hidden', i === sIdx ? 'false' : 'true');
      });
    }

    function buildSliderDots() {
      sliderDots.innerHTML = '';
      for (var i = 0; i < sSlides; i++) {
        var d = document.createElement('span');
        d.className = 'dot' + (i === sIdx ? ' active' : '');
        d.setAttribute('aria-label', 'Slide ' + (i + 1));
        (function (n) {
          d.addEventListener('click', function () { goSlide(n); });
        })(i);
        sliderDots.appendChild(d);
      }
    }
    function goSlide(n) {
      var wasSame = n === sIdx;
      sIdx = (n + sSlides) % sSlides;
      if (sliderTrack) sliderTrack.style.transform = 'translateX(-' + sIdx * 100 + '%)';
      // re-trigger the staggered entrance when the same slide is re-selected
      if (wasSame) markActiveSlide();
      markActiveSlide();
      buildSliderDots();
      resetSlider();
    }
    function nextSlide() { goSlide(sIdx + 1); }
    function prevSlide() { goSlide(sIdx - 1); }
    function resetSlider() {
      if (sTimer) clearInterval(sTimer);
      sTimer = setInterval(nextSlide, 5500);
    }
    var prevBtn = document.getElementById('slider-prev');
    var nextBtn = document.getElementById('slider-next');
    if (prevBtn) prevBtn.addEventListener('click', function () { prevSlide(); });
    if (nextBtn) nextBtn.addEventListener('click', function () { nextSlide(); });

    // pause on hover
    if (sliderBtn) {
      sliderBtn.addEventListener('mouseenter', function () { if (sTimer) clearInterval(sTimer); });
      sliderBtn.addEventListener('mouseleave', function () { resetSlider(); });
    }

    // basic swipe
    var touchX = null;
    if (sliderBtn) {
      sliderBtn.addEventListener('touchstart', function (e) { touchX = e.touches[0].clientX; }, { passive: true });
      sliderBtn.addEventListener('touchend', function (e) {
        if (touchX === null) return;
        var dx = e.changedTouches[0].clientX - touchX;
        if (Math.abs(dx) > 40) (dx < 0 ? nextSlide() : prevSlide());
        touchX = null;
      }, { passive: true });
    }

    buildSliderDots();
    resetSlider();

    /* Hero entrance on load — one-shot, guarded */
    var heroLoaded = false;
    function playHeroEnter() {
      if (heroLoaded) return;
      heroLoaded = true;
      markActiveSlide();
      if (sliderBtn) sliderBtn.classList.add('hero-loaded');
      setTimeout(function () {
        if (sliderBtn) {
          sliderBtn.classList.remove('hero-loaded');
          sliderBtn.classList.add('hero-entered');
        }
        var c = document.getElementById('hero-curtain');
        if (c) c.style.display = 'none';
      }, 3600);
    }
    window.addEventListener('load', function () { setTimeout(playHeroEnter, 600); });
    setTimeout(playHeroEnter, 3200);
  }

  /* ---------- Featured products carousel (dots only) ---------- */
  var featTrack = document.getElementById('feat-track');
  var featDots = document.getElementById('feat-dots');
  var featViewport = document.getElementById('feat-viewport');
  if (featTrack && featDots) {
    var fPages = featTrack.children.length;
    var fIdx = 0;
    var fTimer = null;

    function fbuild() {
      featDots.innerHTML = '';
      for (var i = 0; i < fPages; i++) {
        var d = document.createElement('span');
        d.className = 'dot dot-dark' + (i === fIdx ? ' active' : '');
        d.setAttribute('aria-label', 'Featured products page ' + (i + 1));
        (function (n) { d.addEventListener('click', function () { fgo(n); }); })(i);
        featDots.appendChild(d);
      }
    }
    function fgo(n) {
      fIdx = (n + fPages) % fPages;
      featTrack.style.transform = 'translateX(-' + fIdx * 100 + '%)';
      fbuild();
      freset();
    }
    function fnext() { fgo(fIdx + 1); }
    function freset() {
      if (fTimer) clearInterval(fTimer);
      fTimer = setInterval(fnext, 6000);
    }
    if (featViewport) {
      featViewport.addEventListener('mouseenter', function () { if (fTimer) clearInterval(fTimer); });
      featViewport.addEventListener('mouseleave', function () { freset(); });
    }
    fbuild();
    freset();
  }

  /* ---------- Testimonial slider ---------- */
  var track = document.getElementById('testimonial-track');
  var dotsWrap = document.getElementById('testimonial-dots');
  if (track && dotsWrap) {
    var slides = track.children.length;
    var idx = 0;
    var timer = null;

    function dots() {
      dotsWrap.innerHTML = '';
      for (var i = 0; i < slides; i++) {
        var d = document.createElement('span');
        d.className = 'dot' + (i === idx ? ' active' : '');
        d.setAttribute('aria-label', 'Slide ' + (i + 1));
        (function (n) {
          d.addEventListener('click', function () { go(n); });
        })(i);
        dotsWrap.appendChild(d);
      }
    }
    function step() { return track.children[0].getBoundingClientRect().width || track.clientWidth || 1; }
    function go(n) {
      idx = (n + slides) % slides;
      track.style.transform = 'translateX(-' + idx * step() + 'px)';
      dots();
      resetTimer();
    }
    function next() { go(idx + 1); }
    function resetTimer() {
      if (timer) clearInterval(timer);
      timer = setInterval(next, 6000);
    }
    window.addEventListener('resize', function () { track.style.transform = 'translateX(-' + idx * step() + 'px)'; });
    dots();
    resetTimer();
  }

  /* ---------- Newsletter (demo) ---------- */
  var nlForm = document.getElementById('newsletter');
  var nlMsg = document.getElementById('newsletter-msg');
  if (nlForm) {
    nlForm.addEventListener('submit', function (e) {
      e.preventDefault();
      var email = document.getElementById('newsletter-email');
      if (!email || !email.value || !/^\S+@\S+\.\S+$/.test(email.value)) {
        nlMsg.textContent = 'Please enter a valid email.';
        nlMsg.style.opacity = 1;
        return;
      }
      nlMsg.textContent = 'Thanks! You\u2019re on the Teddy Tales list.';
      nlMsg.style.opacity = 1;
      nlForm.reset();
    });
  }

  /* ---------- Contact form (demo) ---------- */
  var cForm = document.getElementById('contact-form');
  if (cForm) {
    cForm.addEventListener('submit', function (e) {
      // Let it hit the server (contact.php), fade to thank-you card.
      var btn = cForm.querySelector('button[type="submit"]');
      var original = btn.innerHTML;
      btn.disabled = true;
      btn.textContent = 'Sending...';
      setTimeout(function () {
        cForm.submit();
        setTimeout(function () { btn.disabled = false; btn.innerHTML = original; }, 2500);
      }, 600);
    });
  }

  /* ---------- Product filters ---------- */
  var filterWrap = document.getElementById('product-filters');
  var grid = document.getElementById('product-grid');
  if (filterWrap && grid) {
    var cells = Array.prototype.slice.call(grid.querySelectorAll('.product-cell'));
    var emptyMsg = document.getElementById('no-products');
    var activeChip = filterWrap.querySelector('.filter-chip.bg-brand');
    var current = activeChip ? activeChip.dataset.filter : 'all';

    function applyFilter() {
      var visible = 0;
      cells.forEach(function (cell) {
        var show = current === 'all' || cell.dataset.cat === current;
        cell.style.display = show ? '' : 'none';
        if (show) {
          visible++;
          cell.querySelectorAll('.reveal-up, .reveal-zoom').forEach(function (el) { el.classList.add('in-view'); });
        }
      });
      if (emptyMsg) emptyMsg.classList.toggle('hidden', visible > 0);
    }

    filterWrap.querySelectorAll('.filter-chip').forEach(function (chip) {
      chip.addEventListener('click', function () {
        if (current === chip.dataset.filter) return;
        current = chip.dataset.filter;
        filterWrap.querySelectorAll('.filter-chip').forEach(function (c) {
          var active = c === chip;
          c.classList.toggle('bg-brand', active);
          c.classList.toggle('text-white', active);
          c.classList.toggle('border-brand', active);
          c.classList.toggle('shadow-lg', active);
          c.classList.toggle('shadow-brand/25', active);
          c.classList.toggle('bg-white', !active);
          c.classList.toggle('border-brand/20', !active);
          c.classList.toggle('text-brand', !active);
        });
        applyFilter();
      });
    });

    applyFilter();
  }

  /* ---------- Gallery lightbox ---------- */
  var lightbox = document.getElementById('lightbox');
  if (lightbox) {
    var lImg = document.getElementById('lightbox-img');
    var lTitle = document.getElementById('lightbox-title');
    var lClose = document.getElementById('lightbox-close');

    function closeLightbox() {
      lightbox.classList.remove('flex');
      lightbox.classList.add('hidden');
      document.body.style.overflow = '';
    }

    document.querySelectorAll('.gallery-item').forEach(function (item) {
      item.addEventListener('click', function () {
        lImg.src = item.dataset.img;
        lImg.alt = item.dataset.title || '';
        lTitle.textContent = item.dataset.title || '';
        lightbox.classList.remove('hidden');
        lightbox.classList.add('flex');
        document.body.style.overflow = 'hidden';
      });
    });
    if (lClose) lClose.addEventListener('click', closeLightbox);
    lightbox.addEventListener('click', function (e) {
      if (e.target === lightbox) closeLightbox();
    });
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape') closeLightbox();
    });
  }
})();