<template>
  <div class="container pt-4 pb-4">
    <div class="row">
      <div class="col-md-4">
        <img src="/img/image.png" class="img-fluid">
      </div>
      <div class="col-md-8">
        <h1>Детальная карточка товара {{ id }}</h1>
        <p>
          Российская Федерация. Функции и полномочия учредителя осуществляет Министерство науки и высшего образования
          Российской Федерации (место нахождения: 125993, г. Москва, ГСП- 3, ул. Тверская, д. 11).
          <br>
          Российская Федерация. Функции и полномочия учредителя осуществляет Министерство науки и высшего образования
          Российской Федерации (место нахождения: 125993, г. Москва, ГСП- 3, ул. Тверская, д. 11).
        </p>
        <div class="price-container">
          <b class="price">{{ product.price }} ₽</b>
        </div>
        <br>
        <div>
          <button class="btn btn-warning">В корзину</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    name: "ProductInfoView",
    data() {
      return {
        id: null,
        product: {id: 1, name: 'Товар 1', price: 1000, oldPrice: 2000}
      }
    },
    created() {
      this.id = this.$route.params.id
    }
  }
</script>