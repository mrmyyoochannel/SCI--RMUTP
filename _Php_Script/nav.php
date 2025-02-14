﻿<?php
session_start();
$isLoggedIn = isset($_SESSION['user_id']); 
?>
<nav class="navbar bg-warning text-dark fixed-top shadow-sm rounded-pill mx-3 mt-2 p-2">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center">
      <img src="IMG_PNG/RMUTP-Logo.png" alt="Logo" width="50" height="50" class="me-2 rounded-circle">
      <img src="IMG_PNG/SciRMUTP-Eng-300x295-1.png" alt="Logo" width="50" height="50" class="me-2 rounded-circle">
      <span class="fw-bold">SCI-RMUTP สโมสรนักศึกษา</span>
    </a>

    <button class="navbar-toggler rounded-circle border-0 p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="offcanvas offcanvas-end rounded-start-4" tabindex="-1" id="offcanvasNavbar">
      <div class="offcanvas-header bg-black text-white rounded-top-4">
        <img src="IMG_PNG/RMUTP-Logo.png" alt="Logo" width="50" height="50" class="me-2 rounded-circle">
        <img src="IMG_PNG/SciRMUTP-Eng-300x295-1.png" alt="Logo" width="50" height="50" class="me-2 rounded-circle">
        <h5 class="offcanvas-title">SCI-RMUTP สโมสรนักศึกษา</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
      </div>

      <div class="offcanvas-body bg-warning text-dark">
		<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
		  <li class="nav-item"><a class="nav-link rounded-3 px-3 py-2 mb-2" href="?p=main">🏠 หน้าหลัก</a></li>
		  <li class="nav-item"><a class="nav-link rounded-3 px-3 py-2 mb-2" href="?p=about">ℹ️ เกี่ยวกับ</a></li>
		  <li class="nav-item"><a class="nav-link rounded-3 px-3 py-2 mb-2" href="?p=news">📰 ข่าวสาร & กิจกรรม</a></li>
		  <li class="nav-item"><a class="nav-link rounded-3 px-3 py-2 mb-2" href="?p=event">🎉 โครงการ & ชมรม</a></li>
		  <li class="nav-item"><a class="nav-link rounded-3 px-3 py-2 mb-2" href="?p=achievements">🏆 ผลงานของสโมสร & วีดีโอ และ แกลลอรี่</a></li>
		  <li class="nav-item"><a class="nav-link rounded-3 px-3 py-2 mb-2" href="?p=Board">👥 คณะกรรมการบริหาร</a></li>
          <?php if (!isset($_SESSION['id'])): ?>
		  <li class="nav-item"><a class="nav-link rounded-3 px-3 py-2 mb-2" href="login.php">🔑 เข้าสู่ระบบ / สมัครสมาชิก</a></li>
          <?php endif; ?>
          <?php if (isset($_SESSION['level']) && $_SESSION['level'] >= 1): ?>
		  <li class="nav-item"><a class="nav-link rounded-3 px-3 py-2 mb-2" href="logout.php">🔑 ออกจากระบบ</a></li>
          <?php endif; ?>
		</ul>
        <div class="text-center mt-4">
          <small class="text-dark">©2025 SCI-RMUTP สโมสรนักศึกษา <br> เว็บไซต์สร้างโดย ปวค.2 <br> นายวัทธิกร ถนอมรักษ์</small>
        </div>
      </div>
    </div>
  </div>
</nav>
