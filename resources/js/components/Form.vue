<template>
 <div id="join-us" class="container-fluid form-section py-5">
      <div class="container">
         <div class="row justify-content-center text-center">
            <div class="col-lg-10 col-xl-8">
               <h2 class="font-172 fw-bold text-dark mt8">
                  FORM
               </h2>
               <p class="font-16 fw-bolder text-dark ">
                  Are you ready to take the next step toward your future career?
               </p>

               <form class="row justify-content-center text-start py-5" novalidate @submit.prevent="submitApplication">
                  <div class="col-lg-6 col-sm-8 col-11 mb-3">
                     <label class="form-label fw-bolder text-dark" for="applyFullName">Full Name</label>
                     <input
                        id="applyFullName"
                        v-model.trim="form.full_name"
                        type="text"
                        class="form-control apply-input"
                        :class="{ 'is-invalid': errors.full_name }"
                        placeholder="Your full name"
                        autocomplete="name"
                        required
                     >
                     <div v-if="errors.full_name" class="invalid-feedback">{{ errors.full_name[0] }}</div>
                  </div>

                  <div class="col-lg-6 col-sm-8 col-11 mb-3">
                     <label class="form-label fw-bolder text-dark" for="applyEmail">Email</label>
                     <input
                        id="applyEmail"
                        v-model.trim="form.email"
                        type="email"
                        class="form-control apply-input"
                        :class="{ 'is-invalid': errors.email }"
                        placeholder="you@example.com"
                        autocomplete="email"
                        required
                     >
                     <div v-if="errors.email" class="invalid-feedback">{{ errors.email[0] }}</div>
                  </div>

                  <div class="col-lg-6 col-sm-8 col-11 mb-4">
                     <span class="form-label fw-bolder text-dark d-block">Preferred Communication Medium</span>
                     <div class="d-flex gap-4">
                        <div class="form-check">
                           <input id="mediumEnglish" v-model="form.communication_medium" class="form-check-input" type="radio" value="english">
                           <label class="form-check-label" for="mediumEnglish">English</label>
                        </div>
                        <div class="form-check">
                           <input id="mediumSinhala" v-model="form.communication_medium" class="form-check-input" type="radio" value="sinhala">
                           <label class="form-check-label" for="mediumSinhala">Sinhala</label>
                        </div>
                     </div>
                     <div v-if="errors.communication_medium" class="text-danger font-14 mt-1">{{ errors.communication_medium[0] }}</div>
                  </div>

                  <div class="col-lg-6 col-sm-8 col-11">
                     <button type="submit" class="hvr-icon-forward apply-form-cta p-4 w-100 d-inline-flex align-items-center justify-content-between text-white fw-bolder font-24 border-0" :disabled="isSubmitting">
                        <span>{{ isSubmitting ? 'Submitting…' : 'Application Form' }}</span>
                        <i class="fa-solid fa-arrow-right hvr-icon ms-auto" aria-hidden="true"></i>
                     </button>

                     <div v-if="successMessage" class="alert alert-success mt-3 mb-0" role="status">{{ successMessage }}</div>
                     <div v-if="generalError" class="alert alert-danger mt-3 mb-0" role="alert">{{ generalError }}</div>
                  </div>
               </form>

               <div class="quick-links d-flex justify-content-center align-items-center gap-3 gap-md-4">
                  <a href="#" class="text-dark font-18 fw-bolder a-main">Request Info</a>
                  <span class="divider text-dark" aria-hidden="true"></span>
                  <a href="#" class="text-dark font-18 fw-bolder a-main">Visit</a>
               </div>
            </div>
         </div>
      </div>
   </div>


</template>

<script setup>
import { reactive, ref } from 'vue';
import axios from 'axios';

const form = reactive({
   full_name: '',
   email: '',
   communication_medium: 'english',
});

const errors = ref({});
const isSubmitting = ref(false);
const successMessage = ref('');
const generalError = ref('');

const submitApplication = async () => {
   errors.value = {};
   generalError.value = '';
   successMessage.value = '';
   isSubmitting.value = true;

   try {
      const response = await axios.post('/apply-now', form);

      successMessage.value = response.data.message || 'Thanks! Your application has been received.';
      form.full_name = '';
      form.email = '';
      form.communication_medium = 'english';
   } catch (error) {
      if (error.response?.status === 422) {
         errors.value = error.response.data.errors || {};
      } else {
         generalError.value = error.response?.data?.message || 'Something went wrong. Please try again shortly.';
      }
   } finally {
      isSubmitting.value = false;
   }
};
</script>

<style scoped>
.apply-input {
   border-radius: var(--radius-md, 16px);
   border: 1.5px solid var(--line, #e7eaf3);
   padding: 0.7rem 1rem;
}

.apply-input:focus {
   border-color: var(--brand-blue, #3a5bad);
   box-shadow: 0 0 0 0.2rem rgba(58, 91, 173, 0.15);
}
</style>
