<template>
  <div class="container pt-4">
    <h1>Каталог</h1>

    <div class="products row">
      <div class="col-md-6 col-lg-3 mb-4" v-for="product in products">
        <ProductItem :product="product"></ProductItem>
      </div>
    </div>
  </div>
</template>

<script>
import ProductItem from "@/components/Product/ProductItem";
import axios from "axios";

export default {
  name: "CatalogView",
  components: {ProductItem},
  data() {
    return {
      products: []
    }
  },
    created() {
      axios.get('http://localhost/api/products/list')
          .then((response) => this.products = response.data)
    }
}
</script>
