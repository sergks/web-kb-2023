<template>
  <div class="product-item">
    <div>
      <img src="/img/image.png">
    </div>
    <div class="price-container">
      <div class="price">{{ product.price }} ₽</div>
      <div class="old-price">{{ product.oldPrice }} ₽</div>
    </div>
    <h3><a href="">{{ product.name }}</a></h3>
    <br>
    <div>
      <button class="btn btn-warning w-100" @click="addToCart" v-show="!getInCart()">В корзину</button>
      <button class="btn btn-success w-100" @click="addToCart" v-show="getInCart()">Добавлен</button>
    </div>
  </div>
</template>

<script>
export default {
  name: "ProductItem",
  props: ['product'],
  methods: {
    addToCart() {
      let productsInCart = JSON.parse(localStorage.getItem('productsInCart'))
      productsInCart.push(this.product.id)
      localStorage.setItem('productsInCart', JSON.stringify(productsInCart))
    },
    getInCart() {
      let productsInCart = JSON.parse(localStorage.getItem('productsInCart'))
      console.log(productsInCart)
      return productsInCart.indexOf(this.product.id) !== -1
    }
  }
}
</script>