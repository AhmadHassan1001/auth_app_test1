<!doctype html>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Vue.js 3 Login (with Composition API)</title>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

<script src="https://cdn.jsdelivr.net/npm/vue@3"></script>

<div id="app">
  <div id="login">
    <div id="description">
      <h1>Register</h1>
      <p>By Registering you agree to the ridiculously long terms that you didn't bother to read.</p>
    </div>
    <div id="form">
      <form method="POST" action="{{ route('register') }}">
        @csrf
        <label for="name">Name</label>
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" v-model="name" autofocus  >

        <label for="email">Email</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus v-model="email" placeholder="elon@musk.io" >

        <label for="password">Password</label>&nbsp;
        <i class="fas" :class="[passwordFieldIcon]" @click="hidePassword = !hidePassword"></i>
        <input :type="passwordFieldType" id="password" v-model="password" placeholder="**********" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        <label for="password-confirm">Confirm Password</label>&nbsp;
        <input :type="passwordFieldType" id="password-confirm" v-model="password_conf" placeholder="**********" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="current-password">

        <button type="submit">Register</button>
      </form>
    </div>
  </div>
</div>

<script>
  Vue.createApp({
    setup() {
      const name = Vue.ref("");
      const email = Vue.ref("");
      const hidePassword = Vue.ref(true);
      const password = Vue.ref("");
      const password_conf = Vue.ref("");

      const passwordFieldIcon = Vue.computed(() => hidePassword.value ? "fa-eye" : "fa-eye-slash");
      const passwordFieldType = Vue.computed(() => hidePassword.value ? "password" : "text");

      const doLogin = () => alert("Not implemented yet :O");

      return {
        name,
        email,
        hidePassword,
        password,
        password,

        passwordFieldIcon,
        passwordFieldType,

        doLogin
      }
    }
  }).mount("#app");
</script>