<script setup>
import RotatingCard from "../../../examples/cards/rotatingCards/RotatingCard.vue";
import RotatingCardFront from "../../../examples/cards/rotatingCards/RotatingCardFront.vue";
import RotatingCardBack from "../../../examples/cards/rotatingCards/RotatingCardBack.vue";
import DefaultInfoCard from "../../../examples/cards/infoCards/DefaultInfoCard.vue";
</script>
<template>
  <section class="my-5 py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4 ms-auto me-auto p-lg-4 mt-lg-0 mt-4">
          <RotatingCard>
            <RotatingCardFront
              image="https://p.turbosquid.com/ts-thumb/pD/vXemma/Q2CGw92V/31/jpg/1528624183/1920x1080/fit_q87/1e9bccbcf2e8083aafd8dd73e8ec64ad741c7064/31.jpg"
              icon="touch_app"
              title="開始製作 <br />專屬你的木偶 "
              description="你可以從現在開始，自己動手做出專屬於你獨一無二的木偶，這將是一次難忘的經驗。"
            />

            <RotatingCardBack
              image="https://p.turbosquid.com/ts-thumb/pD/vXemma/4cfVtZaw/37/jpg/1528624183/1920x1080/fit_q87/f1c491ce88e778cd03f9488332b17b37e19ff897/37.jpg"
              title="心動不如馬上動手做"
              description="再不行動你將後悔莫及"
              :action="[
                {
                  route: './/sections/page-sections/hero-sections.html',
                  label: '馬上開始DIY',
                },
              ]"
            />
          </RotatingCard>
        </div>
        <div class="col-lg-6 ms-auto">
          <div class="row justify-content-start">
            <DefaultInfoCard
              icon="content_copy"
              title="獨特性和個性化"
              description="客製化木偶是獨一無二的，完全根據客戶的要求和設計製作。每個木偶都有其獨特的風格、表情、服裝和特色，能夠突顯出客戶的個性和品味。無論是用於表演、展示或作為禮物，都能帶來獨特的魅力和吸引力。"
            />
            <DefaultInfoCard
              icon="flip_to_front"
              title="符合特定需求"
              description="客製化木偶能夠完全符合特定需求和用途。無論是用於戲劇表演、影片製作、商業宣傳、教育教學還是作為收藏品，木偶的形象、造型和功能都可以根據客戶的需求進行定制。這樣能夠確保木偶完全適合用於特定的場合和目的。"
            />
          </div>
          <div class="row justify-content-start mt-5">
            <DefaultInfoCard
              class="mt-3"
              icon="price_change"
              title="專業工藝和品質保證"
              description="客製化木偶通常由專業的藝術家或製作團隊製作。他們擁有豐富的木偶製作經驗和專業的技術，能夠確保木偶的質量和工藝達到高水準。這不僅可以確保木偶的外觀精美，還能確保其功能和耐用性。"
            />
            <DefaultInfoCard
              class="mt-3"
              icon="devices"
              title="情感價值和回憶意義"
              description="由於客製化木偶是根據客戶的設計和要求來製作的，所以它們往往具有特殊的情感價值和回憶意義。這些木偶可能代表著某個特定時刻、特定事件或特定人物，成為了一個寶貴的回憶和紀念品。無論是作為個人收藏，還是作為送禮的選擇，都能夠給人帶來溫暖和意義。"
            />
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
