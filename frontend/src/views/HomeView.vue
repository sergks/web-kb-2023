<template>
  <main>

    <section class="slider">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/img/banner.webp" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/img/banner-1.webp" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    <div class="container pt-4">

      <h1>Популярные товары</h1>

      <div class="products row">
        <div class="col-md-6 col-lg-3 mb-4">
          <div class="product-item">
            <div>
              <img src="/img/image.png">
            </div>
            <div class="price-container">
              <div class="price">10 000 ₽</div>
              <div class="old-price">15 000 ₽</div>
            </div>
            <h3><a href="">Часы orient</a></h3>
            <br>
            <div>
              <button class="btn btn-warning w-100">В корзину</button>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
          <div class="product-item">
            <div>
              <img src="/img/image.png">
            </div>
            <div class="price-container">
              <div class="price">10 000 ₽</div>
              <div class="old-price">15 000 ₽</div>
            </div>
            <h3><a href="">Часы orient</a></h3>
            <br>
            <div>
              <button class="btn btn-warning w-100">В корзину</button>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
          <div class="product-item">
            <div>
              <img src="/img/image.png">
            </div>
            <div class="price-container">
              <div class="price">10 000 ₽</div>
              <div class="old-price">15 000 ₽</div>
            </div>
            <h3><a href="">Часы orient</a></h3>
            <br>
            <div>
              <button class="btn btn-warning w-100">В корзину</button>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
          <div class="product-item">
            <div>
              <img src="/img/image.png">
            </div>
            <div class="price-container">
              <div class="price">10 000 ₽</div>
              <div class="old-price">15 000 ₽</div>
            </div>
            <h3><a href="">Часы orient</a></h3>
            <br>
            <div>
              <button class="btn btn-warning w-100">В корзину</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Авторизация</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Пароль</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
              </div>
              <button type="submit" class="btn btn-warning">Войти</button>
            </form>
          </div>
        </div>
      </div>
    </div>

  </main>
</template>

<script>
  export default {
    name: 'HomeView'
  }
</script>
