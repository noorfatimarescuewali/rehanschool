<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Rehan School — Where Leaders Are Made</title>
  <style>
    /* ---------- Reset & base ---------- */
    :root{
      --accent:#0ea5e9; /* bright cyan */
      --muted:#6b7280;
      --card:#fff;
      --bg:#f6f8fb;
      --dark:#0b1220;
      --glass: rgba(255,255,255,0.85);
      font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
    }
    *{box-sizing:border-box}
    html,body{height:100%;margin:0;background:linear-gradient(180deg,#f7fbff 0%,var(--bg) 60%);color:var(--dark);-webkit-font-smoothing:antialiased}
    a{color:inherit;text-decoration:none}
    img{max-width:100%;height:auto;display:block}
    .container{max-width:1150px;margin:0 auto;padding:0 20px}

    /* ---------- Header ---------- */
    header{backdrop-filter: blur(6px);position:sticky;top:0;z-index:40;background:rgba(255,255,255,0.6);box-shadow:0 2px 8px rgba(12,20,30,0.04)}
    .nav{display:flex;align-items:center;justify-content:space-between;padding:14px 0}
    .brand{display:flex;align-items:center;gap:12px;font-weight:700}
    .brand img{height:42px;width:42px;border-radius:8px;object-fit:cover}
    nav ul{display:flex;gap:18px;list-style:none;margin:0;padding:0;align-items:center}
    nav a{padding:8px 10px;border-radius:8px;color:var(--dark);font-weight:600}
    nav a:hover{background:rgba(14,165,233,0.08);color:var(--accent)}

    /* ---------- Hero ---------- */
    .hero{display:grid;grid-template-columns:1fr 420px;gap:36px;padding:48px 0;align-items:center}
    .hero .intro h1{font-size:clamp(28px,4.2vw,44px);margin:0 0 12px;line-height:1.04}
    .hero .intro p{color:var(--muted);margin:0 0 18px}
    .cta{display:flex;gap:12px}
    .btn{background:var(--accent);color:#fff;padding:12px 18px;border-radius:10px;font-weight:700;border:0;cursor:pointer}
    .btn.outline{background:transparent;border:2px solid rgba(14,165,233,0.12);color:var(--dark);font-weight:700}

    .hero .card{
      background:linear-gradient(180deg,rgba(255,255,255,0.9),rgba(255,255,255,0.75));
      border-radius:12px;padding:18px;box-shadow:0 8px 30px rgba(12,20,30,0.06)
    }

    /* ---------- Features ---------- */
    .features{display:grid;grid-template-columns:repeat(3,1fr);gap:18px;margin-top:28px}
    .feature{background:var(--card);padding:18px;border-radius:12px;box-shadow:0 6px 18px rgba(12,20,30,0.04);min-height:120px}
    .feature h4{margin:8px 0 8px}
    .feature p{margin:0;color:var(--muted);font-size:14px}

    /* ---------- Stats ---------- */
    .stats{display:flex;gap:18px;margin:38px 0}
    .stat{background:var(--card);padding:18px;border-radius:12px;flex:1;text-align:center;box-shadow:0 6px 18px rgba(12,20,30,0.04)}
    .stat h3{margin:6px 0;font-size:20px}
    .stat p{margin:0;color:var(--muted)}

    /* ---------- Testimonials & Articles ---------- */
    .two-col{display:grid;grid-template-columns:2fr 1fr;gap:24px;margin:28px 0 60px}
    .testimonial{background:linear-gradient(180deg,#06122b 0%, #07223a 100%);color:white;padding:24px;border-radius:12px;box-shadow:0 10px 40px rgba(6,17,35,0.4)}
    .testimonial .card{background:transparent;box-shadow:none}
    .testimonial .quote{font-size:14px;color:rgba(255,255,255,0.9)}

    .articles{background:var(--card);padding:18px;border-radius:12px}
    .article-item{display:flex;gap:12px;padding:10px 0;border-bottom:1px dashed #eee}
    .article-item:last-child{border-bottom:0}
    .article-item img{width:84px;height:64px;object-fit:cover;border-radius:8px}

    /* ---------- Footer ---------- */
    footer{background:#052036;color:#cbe9ff;padding:36px 0;border-top:1px solid rgba(255,255,255,0.04)}
    .footer-grid{display:grid;grid-template-columns:1fr 1fr 1fr;gap:16px}
    .footer-grid h5{margin-top:0}
    .muted{color:var(--muted);font-size:14px}

    /* ---------- Responsive ---------- */
    @media (max-width:980px){
      .hero{grid-template-columns:1fr;gap:18px;padding:28px 0}
      .features{grid-template-columns:repeat(2,1fr)}
      .two-col{grid-template-columns:1fr}
      .footer-grid{grid-template-columns:1fr}
    }
    @media (max-width:560px){
      nav ul{display:none}
      .features{grid-template-columns:1fr}
      header .nav{padding:10px}
    }
  </style>
</head>
<body>
  <header>
    <div class="container nav">
      <div class="brand" style="cursor:pointer" onclick="goTo('index.html')">
        <img src="https://rehanschool.net/wp-content/uploads/2020/12/cropped-Rehan-Icon.png" alt="logo">
        <div>Rehan School</div>
      </div>
      <nav>
        <ul>
          <li><a href="javascript:goTo('index.html')">Home</a></li>
          <li><a href="javascript:goTo('curriculum.html')">Curriculum</a></li>
          <li><a href="javascript:goTo('facilitators.html')">Facilitators</a></li>
          <li><a href="javascript:goTo('contact.html')">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="container">
    <section class="hero">
      <div class="intro">
        <h1>Where Leaders Are Made, Not Born</h1>
        <p style="max-width:60ch">Rehan School prepares students for the digital age with an AI-enabled curriculum, entrepreneurship focus, and real-world problem solving. We teach students to learn, build, and earn.</p>
        <div class="cta">
          <button class="btn" onclick="goTo('contact.html')">Enroll Now</button>
          <button class="btn outline" onclick="goTo('curriculum.html')">See Curriculum</button>
        </div>

        <div class="features" style="margin-top:20px;">
          <div class="feature">
            <strong>AI-Enabled Education</strong>
            <p>Advanced learning tools and a future-ready curriculum built for the internet era.</p>
          </div>
          <div class="feature">
            <strong>Entrepreneurial Focus</strong>
            <p>Students learn to solve problems, start projects, and generate real income.</p>
          </div>
          <div class="feature">
            <strong>Holistic Development</strong>
            <p>Soft skills, networking, and leadership integrated with technical learning.</p>
          </div>
        </div>
      </div>

      <aside class="card" aria-hidden="true">
        <img src="https://images.unsplash.com/photo-1529070538774-1843cb3265df?q=80&w=1200&auto=format&fit=crop&ixlib=rb-4.0.3&s=1f3b9be3efc53b3d9f82fdfd52a1b5d2" alt="classroom">
        <h4 style="margin:12px 0 6px">Rehan School Korangi Campus</h4>
        <p class="muted" style="margin:0 0 12px">Innovative classrooms, hands-on labs, and mentorship.</p>
        <div style="display:flex;gap:8px">
          <button class="btn" onclick="goTo('facilitators.html')">Meet Facilitators</button>
          <button class="btn outline" onclick="goTo('contact.html')">Visit Campus</button>
        </div>
      </aside>
    </section>

    <section class="stats" aria-label="school statistics">
      <div class="stat">
        <div style="font-size:28px;font-weight:800;color:var(--accent)">25+</div>
        <h3>Team Members</h3>
        <p class="muted">Experienced facilitators & staff</p>
      </div>
      <div class="stat">
        <div style="font-size:28px;font-weight:800;color:var(--accent)">300+</div>
        <h3>Students</h3>
        <p class="muted">Active learners</p>
      </div>
      <div class="stat">
        <div style="font-size:28px;font-weight:800;color:var(--accent)">5+</div>
        <h3>Campuses</h3>
        <p class="muted">Growing network</p>
      </div>
    </section>

    <section class="two-col">
      <div class="testimonial">
        <h3>What Our Visitors Say</h3>
        <div style="display:flex;gap:14px;margin-top:18px">
          <div style="flex:1">
            <div style="background:#0b2033;padding:14px;border-radius:10px">
              <p class="quote">"Founded by Rehan Allahwala, Rehan School reshapes education with an emphasis on digital skills, entrepreneurship and sustainability."</p>
              <p style="margin-top:10px;font-weight:700">— Shannon Lovgren</p>
            </div>
          </div>
          <div style="flex:1">
            <div style="background:#082a3e;padding:14px;border-radius:10px">
              <p class="quote">"Rehan School is simply outstanding — from the curriculum to the Maker & Breaker mindset."</p>
              <p style="margin-top:10px;font-weight:700">— Dan Ulin</p>
            </div>
          </div>
        </div>
      </div>

      <aside class="articles">
        <h4>Latest Articles</h4>
        <div class="article-item">
          <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=9e1b8a7a5d3cd2ae8c4d1acdb3e8c2b6" alt="">
          <div>
            <strong>Rehan School Pakistan Awarded the Bold Award 2024</strong>
            <p class="muted" style="margin:6px 0 0;font-size:13px">March 23, 2024 — Social Impact recognition</p>
          </div>
        </div>

        <div style="text-align:center;margin-top:10px">
          <button class="btn outline" onclick="goTo('curriculum.html')">View All Articles</button>
        </div>
      </aside>
    </section>
  </main>

  <footer>
    <div class="container">
      <div class="footer-grid">
        <div>
          <h5>Mission & Vision</h5>
          <p class="muted">Our mission is to educate and mentor the next generation of innovative leaders, focusing on internet skills, entrepreneurship and social impact.</p>
        </div>
        <div>
          <h5>Quick Links</h5>
          <p class="muted"><a href="javascript:goTo('curriculum.html')">Curriculum</a> · <a href="javascript:goTo('facilitators.html')">Facilitators</a> · <a href="javascript:goTo('contact.html')">Contact</a></p>
        </div>
        <div>
          <h5>Get In Touch</h5>
          <p class="muted">Call: +92-304-111-6044<br>Email: info@rehanschool.net</p>
        </div>
      </div>

      <div style="text-align:center;margin-top:22px;color:rgba(255,255,255,0.85)">© Rehan School · Built as a demo clone</div>
    </div>
  </footer>

  <script>
    // simple JS navigation (file redirection requested)
    function goTo(path){
      // small fade effect before navigating
      document.body.style.transition='opacity .25s';
      document.body.style.opacity='0';
      setTimeout(()=>{ window.location.href = path; }, 260);
    }
  </script>
</body>
</html>
