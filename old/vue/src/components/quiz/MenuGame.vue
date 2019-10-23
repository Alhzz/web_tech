<template>
  <div class="container">
    <h1>Quiz เรื่อง : {{name}}</h1>
    <p>{{title}}</p>
    <b-button pill variant="danger" @click="play">เริ่ม</b-button>
    <router-link class="nav-link" to="/login">
      <b-button pill variant="success">บทเรียน</b-button>
    </router-link>
  </div>
</template>
<style scoped>
button {
  margin-left: 10px;
}
</style>
<script>
export default {
  name: "MenuGame",
  props: ["name", "title"],
  methods: {
    play() {
      this.$emit("play", "1");
    }
  }
};
</script>

<style scoped>
</style>
