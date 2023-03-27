<template>
  <div class="container pt-4">
    <h1>Каталог товаров</h1>

    <div class="products row">
      <div class="col-md-6 col-lg-3 mb-4" v-for="product in products">
        <ProductItem :product="product"></ProductItem>
      </div>
    </div>
  </div>
</template>

<script>
import ProductItem from "@/components/Product/ProductItem";
export default {
  name: "CatalogView",
  components: {ProductItem},
  data() {
    return {
      products: [
        {id: 1, name: 'Товар 1', price: 1000, oldPrice: 2000},
        {id: 2, name: 'Товар 2', price: 2000, oldPrice: 2000},
        {id: 3, name: 'Товар 3', price: 3000, oldPrice: 2000},
        {id: 4, name: 'Товар 4', price: 4000, oldPrice: 2000},
        {id: 5, name: 'Товар 5', price: 5000, oldPrice: 2000},
        {id: 6, name: 'Товар 6', price: 6000, oldPrice: 2000},
        {id: 7, name: 'Товар 7', price: 7000, oldPrice: 2000},
        {id: 8, name: 'Товар 8', price: 8000, oldPrice: 2000},
      ]
    }
  }
}
</script>
