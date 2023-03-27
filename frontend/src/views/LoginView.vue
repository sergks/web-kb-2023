<template>
  <main>
    <section class="login-form">
      <h1>Авторизация</h1>
      <form class="mt-3" @submit="loginForm">
        <div class="input-container email-container">
          <input type="text" name="login" placeholder="Введите Email" v-model="email">
          <div class="errors">{{ emailError }}</div>
        </div>
        <div class="input-container password-container">
          <input type="password" name="password" placeholder="Введите пароль" v-model="password">
          <div class="errors">{{ passwordError }}</div>
        </div>
        <div class="input-container">
          <button class="btn-login" type="submit">Войти</button>
        </div>
      </form>
    </section>
  </main>
</template>

<script>
export default {
  name: "LoginView",
  data() {
    return {
      email: '',
      password: '',
      emailError: '',
      passwordError: ''
    }
  },
  methods: {
    loginForm(event) {

      this.emailError = ''
      this.passwordError = ''

      if (this.email.trim() === '') {
        this.emailError = 'Заполните Email.'
      }

      if (this.password.trim() === '') {
        this.passwordError = 'Заполните Пароль.'
      }

      event.preventDefault()
    }
  }
}
</script>