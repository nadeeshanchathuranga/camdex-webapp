<template>
  <button
    v-if="variant === 'overlay'"
    type="button"
    class="play-button"
    data-bs-toggle="modal"
    data-bs-target="#videoModal"
    aria-label="Play video"
    @click="emit('takeTour', videoLink)"
  >
    <span class="play-icon" aria-hidden="true"></span>
  </button>

  <div v-else class="row">
    <div class="col-12 text-center py-lg-0 py-sm-4 py-3">
      <button
        type="button"
        class="btn hero-btn-learn font-18 fw-bolder border-secondary px-5 py-2"
        data-bs-toggle="modal"
        data-bs-target="#videoModal"
        @click="emit('takeTour', videoLink)"
      >
        {{ label }}
        <i class="fa-brands fa-youtube ms-2 text-danger font-24 fw-normal" aria-hidden="true"></i>
      </button>
    </div>
  </div>
</template>

<script setup>
defineProps({
  variant: {
    type: String,
    default: 'button',
  },
  label: {
    type: String,
    default: 'Take Tour',
  },
  videoLink: {
    type: String,
    required: true,
  },
});

const emit = defineEmits(['takeTour']);
</script>
