<template>
  <div class="container d-flex align-items-center flex-column mt-5">
    <h1>คะแนนของคุณ :</h1>
    <img
      src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3e/LetterA.svg/1200px-LetterA.svg.png"
      alt
      style="width:300px;height:300px"
    />
    <h2>คุณได้คะแนน {{score}}/{{max_score}}</h2>
    <div class="row mt-4">
      <div class="col-md-6 col-lg-4 pt-1 d-flex align-items-center flex-column">
        <b-button variant="danger" @click="$emit('replay', '1')">Replay</b-button>
      </div>
      <div class="col-md-6 col-lg-4 d-flex align-items-center flex-column">
        <router-link to="/login">
          <b-button variant="outline-secondary">learn</b-button>
        </router-link>
      </div>
    </div>
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
  props: ["score", "max_score"],
  data() {
    return {};
  },
  methods: {}
};
</script>

<style scoped>
</style>
