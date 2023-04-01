<template>
  <div class="container pt-4 pb-4">
    <div class="row">
      <div class="col-md-4">
        <img src="/img/image.png" class="img-fluid">
      </div>
      <div class="col-md-8">
        <h1>Товар {{ routeId }}</h1>
        <p>
          Высокоэффективное средство для устранения органических засоров и пробок в труднодоступных местах
          канализационных стоков и труб. Убивает бактерии и устраняет неприятные запахи.
          Идеально подходит для
        </p>
        <br>
        <div>
          <button class="btn btn-warning" @click="addToCart" v-show="!getInCart()">В корзину</button>
          <button class="btn btn-success" @click="addToCart" v-show="getInCart()">Добавлен</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    name: "ProductCardView",
    data() {
      return {
        routeId: null
      }
    },
    created() {
      this.routeId = this.$route.params.id
    },
    methods: {
      addToCart() {
        let productsInCart = JSON.parse(localStorage.getItem('productsInCart'))
        productsInCart.push(this.routeId)
        localStorage.setItem('productsInCart', JSON.stringify(productsInCart))
      },
      getInCart() {
        let productsInCart = JSON.parse(localStorage.getItem('productsInCart'))
        console.log(productsInCart)
        return productsInCart.indexOf(this.routeId) !== -1
      }
    }
  }
</script>