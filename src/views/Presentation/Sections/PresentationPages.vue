<script setup>
import ExampleCard from "../Components/ExampleCard.vue";
import MaterialBadge from "../../../components/MaterialBadge.vue";

// images
import imgSigninCover from "@/assets/img/signin-cover.png";
// import movie1 from "C:/Users/USER/Desktop/vue-creamu/src/assets/img/showcase";
</script>
<template>
  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="row text-center my-sm-5 mt-5">
          <div class="col-lg-6 mx-auto">
            <MaterialBadge color="success" class="mb-3"
              >當你沒有靈感時</MaterialBadge
            >
            <h2 class="">參考一下過往客戶的大作吧!</h2>
            <!-- <p class="lead">
              能夠在這裡DIY的過往客戶們 <br />
              創造力肯定是大神等級的啦<br />
              <h6>(已取得原客戶授權，請安心使用)</h6>
            </p> -->
          </div>
        </div>
      </div>
    </div>
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-8">
          <div class="row mt-4">
            <div class="col-md-6 mt-md-0 mt-5">
              <ExampleCard
                class="shadow-lg"
                title="大神客戶1"
                image="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/pages/about-us.jpg"
              />
            </div>
            <div class="col-md-6 mt-md-0 mt-5">
              <ExampleCard
                class="shadow-lg"
                title="大神客戶1"
                image="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/pages/contact.jpg"
              />
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-md-6 mt-md-0 mt-5">
              <ExampleCard
                classes="mt-5"
                title="大神客戶1"
                :image="imgSigninCover"
              />
            </div>
            <div class="col-md-6 mt-md-0 mt-5">
              <ExampleCard
                classes="shadow-lg"
                title="大神客戶1"
                image="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-design-system/presentation/pages/author.jpg"
              />
            </div>
          </div>
        </div>
        <div class="col-md-3 mx-auto mt-md-0 mt-3">
          <div class="position-sticky" style="top: 100px !important">
            <h3>
              能夠在這裡DIY的過往客戶們 <br />
              創造力肯定是大神等級的啦<br />
            </h3>
            <h6 class="text-secondary font-weight-normal">
              (已取得原客戶授權，請安心使用)
            </h6>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
