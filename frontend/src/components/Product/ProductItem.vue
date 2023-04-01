<template>
  <div class="product-item">
      <div>
        <img src="/img/image.png">
      </div>
      <div class="price-container">
        <div class="price">{{ product.price }} ₽</div>
        <div class="old-price">{{ product.oldPrice }} ₽</div>
      </div>
      <h3>
        <router-link :to="{name: 'catalogCard', params: {id: this.product.id}}">
          {{ product.name }}
        </router-link>
      </h3>
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
      this.$store.commit('add', this.product.id)
    },
    getInCart() {

    }
  }
}
</script>