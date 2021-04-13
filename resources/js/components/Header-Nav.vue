<style scoped>
div {
  border: 1px solid blue;
}

ul {
  list-style: none;
  float: right;
}
</style>
<template>
  <div class="container">
    <div class="row">
      <div class="logo col-md-4">
        <h3>web-clocking-app</h3>
      </div>
      <div class="nav-list col-md-8">
        <ul class="list">
          <li>register</li>
          <li>login</li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
};
</script>
