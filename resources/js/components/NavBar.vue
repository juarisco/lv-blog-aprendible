<template>
  <nav>
    <ul class="container-flex space-center list-unstyled">
      <li>
        <router-link :to="{name: 'home'}" class="text-uppercase">Inicio</router-link>
      </li>
      <li>
        <router-link :to="{name: 'about'}" class="text-uppercase">Nosotros</router-link>
      </li>
      <li>
        <router-link :to="{name: 'archive'}" class="text-uppercase">Archivos</router-link>
      </li>
      <li>
        <router-link :to="{name: 'contact'}" class="text-uppercase">Contacto</router-link>
      </li>
    </ul>
  </nav>
</template>

<script>
export default {};
</script>

<style>
</style>