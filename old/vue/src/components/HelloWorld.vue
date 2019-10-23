<template>
  <div class="container d-flex align-items-center flex-column mt-5">
    <h1>คณิตศาตร์ประถมปลาย</h1>
    <p>เว็ปนี้จัดทำมาส่งเสริมการเรียนรู้ทางด้านคณิตศาสตร์ของนักเรียนระดับชั้นประถมศึกษา ปี 4 ปี 5 ปี 6</p>
    <p>โดยแบ่งเนื้อหาตามระดับชั้นการศึกษา</p>
    <p></p>
    <div class="divider-custom-line"></div>
    <h2>เนื้อหา</h2>
    <div class="divider-custom-line"></div>
    <div class="row mt-4">
      <div class="col-md-6 col-lg-4 pt-1">
        <router-link class="nav-link" to="/login">
          <div class="boxman">
            <h3>ป.4</h3>
          </div>
        </router-link>
      </div>
      <div class="col-md-6 col-lg-4 pt-1">
        <router-link class="nav-link" to="/login">
          <div class="boxman">
            <h3>ป.5</h3>
          </div>
        </router-link>
      </div>
      <div class="col-md-6 col-lg-4 pt-1">
        <router-link class="nav-link" to="/login">
          <div class="boxman">
            <h3>ป.6</h3>
          </div>
        </router-link>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "HelloWorld"
};
</script>

<style scoped>
body {
  background-color: rgb(237, 252, 240);
}

.divider-custom-line {
  margin-bottom: 1%;
  width: 100%;
  max-width: 10rem;
  height: 0.25rem;
  background-color: #2c3e50;
  border-radius: 1rem;
  border-color: #2c3e50;
}

.boxman {
  border-radius: 1rem;
  border: 2px solid #2c3e50;
  padding: 8vw;
  text-align: center;
}

h1,
h2,
h3 {
  font-family: "Kanit", sans-serif;
}

p {
  font-family: "Sarabun", sans-serif;
}
</style>
