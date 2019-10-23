<template>
  <div class="container">
    <div class="row header">
      <div class="header">
        <h2>{{questions[questionIndex].question}}</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-6" v-for="index in 4" :key="index">
        <button
          type="button"
          class="btn btn-primary col ch"
          @click="ans(index)"
        >{{questions[questionIndex].answers[index-1]}}</button>
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
  props: ["name", "title"],
  data() {
    return {
      score: 0,
      questionIndex: 0,
      questions: [
        {
          question: "Who is the strongest?",
          answers: ["Superman", "The Terminator", "Waluigi, obviously", "5"],
          correctAnswer: 0
        },
        {
          question: "What is the best site ever created?",
          answers: [
            "SitePoint",
            "Simple Steps Code",
            "Trick question; they're both the best",
            "6"
          ],
          correctAnswer: 3
        },
        {
          question: "Where is Waldo really?",
          answers: [
            "Antarctica",
            "Exploring the Pacific Ocean",
            "Sitting in a tree",
            "Minding his own business, so stop asking"
          ],
          correctAnswer: 3
        }
      ]
    };
  },
  methods: {
    play() {
      this.$emit("play", "1");
    },
    ans(num) {
      if (num - 1 == this.questions[this.questionIndex].correctAnswer) {
        this.score += 1;
      }
      if (this.questionIndex == this.questions.length-1) {
        this.$emit("score", this.score);
      }
      this.questionIndex++;
    },
    prev: function() {
      this.questionIndex--;
    }
  }
};
</script>

<style scoped>
</style>
