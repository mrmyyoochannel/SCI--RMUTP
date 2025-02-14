<footer class="footer-custom bg-dark text-white text-center p-4 mt-auto">
  <div class="container">
    <div class="row row-cols-5 py-4 my-4 border-top">
      <div class="col">
        <a href="/" class="d-flex align-items-center mb-3 link-light text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        </a>
		<p class="text-white">ติดต่อสโมสรนักศึกษา <br> Facebook, Instagram, LINE</p>
		<br>
        <p class="text-white">©2025 SCI-RMUTP สโมสรนักศึกษา <br> เว็บไซต์สร้างโดย ปวค.2<br> นายวัทธิกร ถนอมรักษ์</p>
      </div>

      <div class="col"></div>

      <div class="col">
        <ul class="text-white nav flex-column">
          <li class="nav-item mb-2"><a href="?p=about" class="nav-link p-0 text-white">ℹ️เกี่ยวกับ</a></li>
          <li class="nav-item mb-2"><a href="?p=news" class="nav-link p-0 text-white">📰ข่าวสาร</a></li>
          <li class="nav-item mb-2"><a href="?p=event" class="nav-link p-0 text-white">🎉กิจกรรม</a></li>
          <li class="nav-item mb-2"><a href="?p=achievements" class="nav-link p-0 text-white">🏆ผลงานของสโมสร</a></li>
          <li class="nav-item mb-2"><a href="?p=Board" class="nav-link p-0 text-white">👥คณะกรรมการบริหาร</a></li>
        </ul>
      </div>
	  
	<div class="col">
	  <ul class="text-white nav flex-column">
		<li class="nav-item mb-2"><a href="https://www.rmutp.ac.th/" class="nav-link p-0 text-white">🏫 ราชมงคลพระนคร</a></li>
		<li class="nav-item mb-2"><a href="https://sci.rmutp.ac.th/" class="nav-link p-0 text-white">🔬 คณะวิทยาศาสตร์และเทคโนโลยี</a></li>
		<li class="nav-item mb-2"><a href="https://reg.rmutp.ac.th/registrar/apphome.asp" class="nav-link p-0 text-white">📝 รับสมัครนักศึกษา</a></li>
	  </ul>
	</div>

      <div class="col">
        <ul class="text-white nav flex-column">
          <?php if (isset($_SESSION['level']) && $_SESSION['level'] >= 1): ?>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">🔑 ระบบจัดการสมาชิค</a></li>
		  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">🔑 ระบบจัดเว็บไซต์</a></li>
          <?php endif; ?>
        </ul>
      </div>

    </div>
  </div>
</footer>

<style>
  .footer-custom {
    border-radius: 20px 20px 0 0; /* ทำให้ขอบบนโค้ง */
  }
</style>
