<template>
  <div class="container pt-4 pb-4">
    <div class="row">
      <div class="col-md-4">
        <img src="/img/image.png" class="img-fluid">
      </div>
      <div class="col-md-8">
        <h1>{{ product.name }}</h1>
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

  import axios from "axios";

  export default {
    name: "ProductInfoView",
    data() {
      return {
        product: {}
      }
    },
    created() {
      const id =  this.$route.params.id
      axios.get('http://localhost/api/products/info/' + id)
          .then((response) => this.product = response.data)
    }
  }
</script>
