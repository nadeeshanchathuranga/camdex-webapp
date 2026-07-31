<template>
  <div id="instructors" class="row ">
            <div class="col-12 pt-5">
               <h2 class="font-48 fw-bolder text-center text-black pb-lg-5 pb-3">
                  Instructors Directory
               </h2>
            </div>
            <div ref="instructorsCarousel" class="row instructors-grid">
               <div class="col-lg-4 col-sm-12 pb-lg-5">
                  <article
                     class="instructor-flip-card"
                     :class="{ 'is-flipped': isFlipped(0) }"
                     tabindex="0"
                     role="button"
                     :aria-pressed="isFlipped(0)"
                     aria-label="Show instructor contact details"
                     @click="toggleFlip(0)"
                     @keydown.enter.prevent="toggleFlip(0)"
                     @keydown.space.prevent="toggleFlip(0)"
                  >
                     <div class="instructor-flip-card-inner">
                        <div class="instructor-flip-front">
                           <img :src="'/images/d1.png'" class="w-100" alt="Camdex Education">
                           <span class="flip-hint"><i class="fa-solid fa-hand-pointer" aria-hidden="true"></i> Tap for bio</span>
                        </div>
                        <div class="instructor-flip-back p-5">
                           <p class="font-16 fw-normal text-white pb-3">Franklin Doyle is an elected Fellow of the Academy of Behavioral Psychology Research, the premier honorary organization for scientists working at the interface of behavior and medicine, and he has been appointed to serve on two consensus committees at the Estudia Academies of Sciences, Engineering, and Medicine.
                              Outside of the academy, Doyle's research has been cited in several amicus curiae briefs.
                           </p>
                           <p class="font-16 fw-normal text-white pb-3 pt-4">Contacts:</p>
                           <p class="font-14 text-white fw-normal pb-2"><i class="fa-solid fa-phone pe-2"></i><a href="tel:110-220-331" class="text-white text-decoration-underline">110-220-331</a></p>
                           <p class="font-14 text-white fw-normal"><i class="fa-regular fa-envelope pe-2"></i><a href="mailto:franklin.doyle@email.com" class="text-white text-decoration-underline">franklin.doyle@email.com</a></p>
                        </div>
                     </div>
                  </article>
                  <h3 class="fw-bold font-30 pt-4 pb-3 text-dark">
                     Instructors Name
                  </h3>
                  <p class="role-pill">Lecture</p>
               </div>
               <div class="col-lg-4 col-sm-12 pb-lg-5">
                  <article
                     class="instructor-flip-card"
                     :class="{ 'is-flipped': isFlipped(1) }"
                     tabindex="0"
                     role="button"
                     :aria-pressed="isFlipped(1)"
                     aria-label="Show instructor contact details"
                     @click="toggleFlip(1)"
                     @keydown.enter.prevent="toggleFlip(1)"
                     @keydown.space.prevent="toggleFlip(1)"
                  >
                     <div class="instructor-flip-card-inner">
                        <div class="instructor-flip-front">
                           <img :src="'/images/d1.png'" class="w-100" alt="Camdex Education">
                           <span class="flip-hint"><i class="fa-solid fa-hand-pointer" aria-hidden="true"></i> Tap for bio</span>
                        </div>
                        <div class="instructor-flip-back p-5">
                           <p class="font-16 fw-normal text-white pb-3">Franklin Doyle is an elected Fellow of the Academy of Behavioral Psychology Research, the premier honorary organization for scientists working at the interface of behavior and medicine, and he has been appointed to serve on two consensus committees at the Estudia Academies of Sciences, Engineering, and Medicine.
                              Outside of the academy, Doyle's research has been cited in several amicus curiae briefs.
                           </p>
                           <p class="font-16 fw-normal text-white pb-3 pt-4">Contacts:</p>
                           <p class="font-14 text-white fw-normal pb-2"><i class="fa-solid fa-phone pe-2"></i><a href="tel:110-220-331" class="text-white text-decoration-underline">110-220-331</a></p>
                           <p class="font-14 text-white fw-normal"><i class="fa-regular fa-envelope pe-2"></i><a href="mailto:franklin.doyle@email.com" class="text-white text-decoration-underline">franklin.doyle@email.com</a></p>
                        </div>
                     </div>
                  </article>
                  <h3 class="fw-bold font-30 pt-4 pb-3 text-dark">
                     Instructors Name
                  </h3>
                  <p class="role-pill">Lecture</p>
               </div>
               <div class="col-lg-4 col-sm-12 pb-lg-5">
                  <article
                     class="instructor-flip-card"
                     :class="{ 'is-flipped': isFlipped(2) }"
                     tabindex="0"
                     role="button"
                     :aria-pressed="isFlipped(2)"
                     aria-label="Show instructor contact details"
                     @click="toggleFlip(2)"
                     @keydown.enter.prevent="toggleFlip(2)"
                     @keydown.space.prevent="toggleFlip(2)"
                  >
                     <div class="instructor-flip-card-inner">
                        <div class="instructor-flip-front">
                           <img :src="'/images/d1.png'" class="w-100" alt="Camdex Education">
                           <span class="flip-hint"><i class="fa-solid fa-hand-pointer" aria-hidden="true"></i> Tap for bio</span>
                        </div>
                        <div class="instructor-flip-back p-5">
                           <p class="font-16 fw-normal text-white pb-3">Franklin Doyle is an elected Fellow of the Academy of Behavioral Psychology Research, the premier honorary organization for scientists working at the interface of behavior and medicine, and he has been appointed to serve on two consensus committees at the Estudia Academies of Sciences, Engineering, and Medicine.
                              Outside of the academy, Doyle's research has been cited in several amicus curiae briefs.
                           </p>
                           <p class="font-16 fw-normal text-white pb-3 pt-4">Contacts:</p>
                           <p class="font-14 text-white fw-normal pb-2"><i class="fa-solid fa-phone pe-2"></i><a href="tel:110-220-331" class="text-white text-decoration-underline">110-220-331</a></p>
                           <p class="font-14 text-white fw-normal"><i class="fa-regular fa-envelope pe-2"></i><a href="mailto:franklin.doyle@email.com" class="text-white text-decoration-underline">franklin.doyle@email.com</a></p>
                        </div>
                     </div>
                  </article>
                  <h3 class="fw-bold font-30 pt-4 pb-3 text-dark">
                     Instructors Name
                  </h3>
                  <p class="role-pill">Lecture</p>
               </div>
               <div class="col-lg-4 col-sm-12 pb-lg-5">
                  <article
                     class="instructor-flip-card"
                     :class="{ 'is-flipped': isFlipped(3) }"
                     tabindex="0"
                     role="button"
                     :aria-pressed="isFlipped(3)"
                     aria-label="Show instructor contact details"
                     @click="toggleFlip(3)"
                     @keydown.enter.prevent="toggleFlip(3)"
                     @keydown.space.prevent="toggleFlip(3)"
                  >
                     <div class="instructor-flip-card-inner">
                        <div class="instructor-flip-front">
                           <img :src="'/images/d1.png'" class="w-100" alt="Camdex Education">
                           <span class="flip-hint"><i class="fa-solid fa-hand-pointer" aria-hidden="true"></i> Tap for bio</span>
                        </div>
                        <div class="instructor-flip-back p-5">
                           <p class="font-16 fw-normal text-white pb-3">Franklin Doyle is an elected Fellow of the Academy of Behavioral Psychology Research, the premier honorary organization for scientists working at the interface of behavior and medicine, and he has been appointed to serve on two consensus committees at the Estudia Academies of Sciences, Engineering, and Medicine.
                              Outside of the academy, Doyle's research has been cited in several amicus curiae briefs.
                           </p>
                           <p class="font-16 fw-normal text-white pb-3 pt-4">Contacts:</p>
                           <p class="font-14 text-white fw-normal pb-2"><i class="fa-solid fa-phone pe-2"></i><a href="tel:110-220-331" class="text-white text-decoration-underline">110-220-331</a></p>
                           <p class="font-14 text-white fw-normal"><i class="fa-regular fa-envelope pe-2"></i><a href="mailto:franklin.doyle@email.com" class="text-white text-decoration-underline">franklin.doyle@email.com</a></p>
                        </div>
                     </div>
                  </article>
                  <h3 class="fw-bold font-30 pt-4 pb-3 text-dark">
                     Instructors Name
                  </h3>
                  <p class="role-pill">Lecture</p>
               </div>
               <div class="col-lg-4 col-sm-12 pb-lg-5">
                  <article
                     class="instructor-flip-card"
                     :class="{ 'is-flipped': isFlipped(4) }"
                     tabindex="0"
                     role="button"
                     :aria-pressed="isFlipped(4)"
                     aria-label="Show instructor contact details"
                     @click="toggleFlip(4)"
                     @keydown.enter.prevent="toggleFlip(4)"
                     @keydown.space.prevent="toggleFlip(4)"
                  >
                     <div class="instructor-flip-card-inner">
                        <div class="instructor-flip-front">
                           <img :src="'/images/d1.png'" class="w-100" alt="Camdex Education">
                           <span class="flip-hint"><i class="fa-solid fa-hand-pointer" aria-hidden="true"></i> Tap for bio</span>
                        </div>
                        <div class="instructor-flip-back p-5">
                           <p class="font-16 fw-normal text-white pb-3">Franklin Doyle is an elected Fellow of the Academy of Behavioral Psychology Research, the premier honorary organization for scientists working at the interface of behavior and medicine, and he has been appointed to serve on two consensus committees at the Estudia Academies of Sciences, Engineering, and Medicine.
                              Outside of the academy, Doyle's research has been cited in several amicus curiae briefs.
                           </p>
                           <p class="font-16 fw-normal text-white pb-3 pt-4">Contacts:</p>
                           <p class="font-14 text-white fw-normal pb-2"><i class="fa-solid fa-phone pe-2"></i><a href="tel:110-220-331" class="text-white text-decoration-underline">110-220-331</a></p>
                           <p class="font-14 text-white fw-normal"><i class="fa-regular fa-envelope pe-2"></i><a href="mailto:franklin.doyle@email.com" class="text-white text-decoration-underline">franklin.doyle@email.com</a></p>
                        </div>
                     </div>
                  </article>
                  <h3 class="fw-bold font-30 pt-4 pb-3 text-dark">
                     Instructors Name
                  </h3>
                  <p class="role-pill">Lecture</p>
               </div>
               <div class="col-lg-4 col-sm-12 pb-lg-5">
                  <article
                     class="instructor-flip-card"
                     :class="{ 'is-flipped': isFlipped(5) }"
                     tabindex="0"
                     role="button"
                     :aria-pressed="isFlipped(5)"
                     aria-label="Show instructor contact details"
                     @click="toggleFlip(5)"
                     @keydown.enter.prevent="toggleFlip(5)"
                     @keydown.space.prevent="toggleFlip(5)"
                  >
                     <div class="instructor-flip-card-inner">
                        <div class="instructor-flip-front">
                           <img :src="'/images/d1.png'" class="w-100" alt="Camdex Education">
                           <span class="flip-hint"><i class="fa-solid fa-hand-pointer" aria-hidden="true"></i> Tap for bio</span>
                        </div>
                        <div class="instructor-flip-back p-5">
                           <p class="font-16 fw-normal text-white pb-3">Franklin Doyle is an elected Fellow of the Academy of Behavioral Psychology Research, the premier honorary organization for scientists working at the interface of behavior and medicine, and he has been appointed to serve on two consensus committees at the Estudia Academies of Sciences, Engineering, and Medicine.
                              Outside of the academy, Doyle's research has been cited in several amicus curiae briefs.
                           </p>
                           <p class="font-16 fw-normal text-white pb-3 pt-4">Contacts:</p>
                           <p class="font-14 text-white fw-normal pb-2"><i class="fa-solid fa-phone pe-2"></i><a href="tel:110-220-331" class="text-white text-decoration-underline">110-220-331</a></p>
                           <p class="font-14 text-white fw-normal"><i class="fa-regular fa-envelope pe-2"></i><a href="mailto:franklin.doyle@email.com" class="text-white text-decoration-underline">franklin.doyle@email.com</a></p>
                        </div>
                     </div>
                  </article>
                  <h3 class="fw-bold font-30 pt-4 pb-3 text-dark">
                     Instructors Name
                  </h3>
                  <p class="role-pill">Lecture</p>
               </div>
            </div>
         </div>
</template>

<script setup>
import { onBeforeUnmount, onMounted, reactive, ref } from 'vue';

const instructorsCarousel = ref(null);
let handleWindowResize = null;

const flippedCards = reactive(new Set());

const isFlipped = (index) => flippedCards.has(index);

const toggleFlip = (index) => {
   if (flippedCards.has(index)) {
      flippedCards.delete(index);
   } else {
      flippedCards.add(index);
   }
};

const initInstructorsCarousel = () => {
   const $ = window.jQuery || window.$;

   if (!$ || !instructorsCarousel.value || !$.fn || !$.fn.owlCarousel) {
      return;
   }

   const isSliderViewport = window.innerWidth <= 991;
   const $carousel = $(instructorsCarousel.value);

   if (!isSliderViewport) {
      if ($carousel.hasClass('owl-loaded')) {
         $carousel.trigger('destroy.owl.carousel');
      }
      $carousel.removeClass('owl-carousel');
      return;
   }

   if (!$carousel.hasClass('owl-carousel')) {
      $carousel.addClass('owl-carousel');
   }

   if ($carousel.hasClass('owl-loaded')) {
      return;
   }

   $carousel.owlCarousel({
      items: 1,
      margin: 16,
      loop: true,
      nav: true,
      dots: false,
      autoplay: false,
      autoplayTimeout: 3200,
      autoplayHoverPause: true,
      navText: [
         '<i class="fa-solid fa-chevron-left" aria-hidden="true"></i>',
         '<i class="fa-solid fa-chevron-right" aria-hidden="true"></i>',
      ],
      smartSpeed: 600,
      responsive: {
         0: { items: 1 },
         768: { items: 2 },
      },
   });
};

const destroyInstructorsCarousel = () => {
   const $ = window.jQuery || window.$;

   if (!$ || !instructorsCarousel.value || !$.fn || !$.fn.owlCarousel) {
      return;
   }

   const $carousel = $(instructorsCarousel.value);

   if ($carousel.hasClass('owl-loaded')) {
      $carousel.trigger('destroy.owl.carousel');
   }

   $carousel.removeClass('owl-carousel');
};

onMounted(() => {
   initInstructorsCarousel();

   handleWindowResize = () => {
      initInstructorsCarousel();
   };

   window.addEventListener('resize', handleWindowResize);
});

onBeforeUnmount(() => {
   destroyInstructorsCarousel();

   if (handleWindowResize) {
      window.removeEventListener('resize', handleWindowResize);
      handleWindowResize = null;
   }
});
</script>
