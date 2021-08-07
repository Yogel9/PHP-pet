<?php require "blocks/init.php" ?>
<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-muted text-decoration-none">
          MyWeb
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/" class="nav-link px-2 text-white">Главная</a></li>
          <li><a href="/about.php" class="nav-link px-2 text-white">Контакты</a></li>
          <!--<li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
          <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
          <li><a href="#" class="nav-link px-2 text-white">About</a></li>-->
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>

            <div class="text-end">
          <a class="btn btn-outline-light me-2" href="/authForm.php">Войти</a>
            </div>

<!--
        <?php if (isset($_COOKIE['user']) &&($_COOKIE['user'] =='yes')): ?>
            <div class="text-end">
          <a class="btn btn-outline-light me-2" href="/auth.php">Кабинет пользователя</a>
            </div>
        <?php else: ?>
            <div class="text-end">
          <a class="btn btn-outline-light me-2" href="/auth.php">Войти</a>
            </div>
        <?php endif; ?>
-->

      </div>
    </div>
  </header>


