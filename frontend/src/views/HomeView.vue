<template>
  <Slider></Slider>

  <div class="container pt-4">

    <h1>Популярные товары</h1>

    <div class="products row">
      <div class="col-md-6 col-lg-3 mb-4" v-for="item in items">
        <ProductItem :product="item"></ProductItem>
      </div>
    </div>
  </div>

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
</template>

<script>

  import ProductItem from "@/components/Product/ProductItem";
  import Slider from "@/components/Slider/Slider";
  import axios from 'axios'

  export default {
    name: 'HomeView',
    components: {Slider, ProductItem},
    data() {
      return {
        items: []
      }
    },
      created() {
        axios.get('http://localhost/api/products/top')
            .then((result) => this.items = result.data)
      }
  }

</script>
