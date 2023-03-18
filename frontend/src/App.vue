<template>
  <header>
    <div class="container">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <router-link to="/" class="navbar-brand">
            <img src="/img/brand.svg" />
          </router-link>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <router-link to="/catalog" class="nav-link">Каталог товаров</router-link>
              </li>
              <li class="nav-item">
                <router-link to="/contact" class="nav-link">Контакты</router-link>
              </li>
              <li class="nav-item">
                <router-link to="/about" class="nav-link">О нас</router-link>
              </li>
              <li class="nav-item">
                <router-link to="/login" class="nav-link">Войти</router-link>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <main>
    <router-view/>
  </main>

  <footer>
    <div class="container">
      <div>© 2023, ООО «КБ-202»</div>
      <div>Позвоните нам: +7 909 024224</div>
    </div>
  </footer>
</template>
