<template>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #00344d;">
    <img
      src="https://greaternewhavenobgyn.net/wp-content/uploads/2018/03/1000px-Google__G__Logo.svg_.png"
      width="30"
      height="30"
      class="d-inline-block align-top"
      alt
    />
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <router-link class="nav-link" to="/">หน้าแรก</router-link>
        </li>
        <li class="nav-item">
            <router-link class="nav-link" to="/quiz/as">แบบฝึกหัดของฉัน</router-link>
        </li>
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            id="navbarDropdown"
            role="button"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >ประถมศึกษาปีที่ 4</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">จำนวนนับที่มากกว่า 100,000</a>
            <a class="dropdown-item" href="#">การบวกและการลบ</a>
            <a class="dropdown-item" href="#">เรขาคณิต</a>
            <a class="dropdown-item" href="#">การคูณ</a>
            <a class="dropdown-item" href="#">การหาร</a>
            <a class="dropdown-item" href="#">แผนภูมิรูปภาพ แผนภูมิแท่ง และตาราง</a>
            <a class="dropdown-item" href="#">การวัด</a>
            <a class="dropdown-item" href="#">พื้นที่</a>
            <a class="dropdown-item" href="#">เงิน</a>
            <a class="dropdown-item" href="#">เศษส่วน</a>
            <a class="dropdown-item" href="#">เวลา</a>
            <a class="dropdown-item" href="#">ทศนิยม</a>
            <a class="dropdown-item" href="#">การบวก ลบ คูณ หารระคน</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            id="navbarDropdown"
            role="button"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >ประถมศึกษาปีที่ 5</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">จำนวนนับ และการบวก การลบ การคูณ การหาร</a>
            <a class="dropdown-item" href="#">มุม</a>
            <a class="dropdown-item" href="#">เส้นขนาน</a>
            <a class="dropdown-item" href="#">สถิติและความน่าจะเป็นเบื้องต้น</a>
            <a class="dropdown-item" href="#">เศษส่วน</a>
            <a class="dropdown-item" href="#">การบวก การลบ การคูณ การหารเศษส่วน</a>
            <a class="dropdown-item" href="#">ทศนิยม</a>
            <a class="dropdown-item" href="#">การบวก การลบ การคูณทศนิยม</a>
            <a class="dropdown-item" href="#">บทประยุกต์</a>
            <a class="dropdown-item" href="#">รูปสี่เหลี่ยม</a>
            <a class="dropdown-item" href="#">รูปสามเหลี่ยม</a>
            <a class="dropdown-item" href="#">รูปวงกลม</a>
            <a class="dropdown-item" href="#">รูปเรขาคณิตสามมิติและปริมาตรของทรงสี่เหลี่ยมมุมฉาก</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            id="navbarDropdown"
            role="button"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >ประถมศึกษาปีที่ 6</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">จำนวนนับ และการบวก การลบ การคูณ การหาร</a>
            <a class="dropdown-item" href="#">ตัวประกอบของจำนวนนับ</a>
            <a class="dropdown-item" href="#">เศษส่วน และการบวก การลบ การคูณ การหาร</a>
            <a class="dropdown-item" href="#">ทศนิยม</a>
            <a class="dropdown-item" href="#">การบวก การลบ การคูณ และการหารทศนิยม</a>
            <a class="dropdown-item" href="#">เส้นขนาน</a>
            <a class="dropdown-item" href="#">สมการและการแก้สมการ</a>
            <a class="dropdown-item" href="#">ทิศ แผนที่และแผนผัง</a>
            <a class="dropdown-item" href="#">รูปสี่เหลี่ยม</a>
            <a class="dropdown-item" href="#">รูปวงกลม</a>
            <a class="dropdown-item" href="#">บทประยุกต์</a>
            <a class="dropdown-item" href="#">รูปเรขาคณิตสามมิติและปริมาตรของทรงสี่เหลี่ยมมุมฉาก</a>
            <a class="dropdown-item" href="#">สถิติและความน่าจะเป็นเบื้องต้น</a>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">โหมดกลางคืน</a>
        </li>
        <li class="nav-item active">
          <router-link class="nav-link" to="/login">Login</router-link>
        </li>
      </ul>
    </div>
  </nav>
</template>
<script>
export default {
  name: "Mynav"
};
</script>