<template>
  <div class="product-item">
    <router-link :to="{name: 'productInfo', params: {id: product.id}}">
      <div>
        <img src="/img/image.png">
      </div>
      <div class="price-container">
        <div class="price">{{ product.price }} ₽</div>
        <div class="old-price">{{ product.oldPrice }} ₽</div>
      </div>
      <h3><a href="">{{ product.name }}</a></h3>
      <br>
    </router-link>
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
      this.$store.commit('add', this.product.id)
    },
    getInCart() {
    }
  }
}
</script>