<template>
  <div class="container">
    <MenuGame v-if="state == 0" :name="name" :title="title" @play="play" />
    <Quiz v-if="state==1" @score="finish" />
    <Result v-if="state==2" :score="score" :max_score="3" @replay="play"/>
  </div>
</template>

<script>
import MenuGame from "./MenuGame.vue";
import Quiz from "./Quiz.vue";
import Result from "./Result.vue";
export default {
  name: "MainGame",
  components: {
    MenuGame,
    Quiz,
    Result
  },
  data() {
    return {
      name: "Quiz คณิตศาสตร์แสนง่ายยย",
      title: "จงดูว่าข้อความต่อไปนี้กระจอกหรือไม่ (3 คะแนน)",
      state: 0,
      score: 0
    };
  },
  methods: {
    play() {
      this.state = 1;
    },
    finish(score) {
      this.score = score
      this.state = 2;
    }
  }
};
</script>

<style scoped>
</style>
