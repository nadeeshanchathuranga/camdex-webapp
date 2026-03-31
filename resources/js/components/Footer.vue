<template>

        <div class="container-fluid py-5  bg-brown">
            <div class="container pt-lg-4">
                <div class="row g-4 g-lg-5">
                    <div class="col-lg-4 col-sm-12">
                        <h2 class="text-uppercase font-40 text-white mb-3 fw-normal">
                            CAMDEX EDUCATION
                        </h2>
                        <p class="text-white fw-bolder font-14 mb-4">
                            201 S. Grand Ave., 1st Floor New<br>
                            York City, NY 28020
                        </p>
                        <a href="tel:+17722902999" class="text-white fw-bolder font-14 a-main">+1 (772) 290-2999</a>
                    </div>

                    <div class="col-lg-3 col-sm-4">
                        <h5 class="text-uppercase font-18 text-white  fw-bolder py-2">MAIN NAVIGATION</h5>
                        <ul class="footer-list mt-3">
                            <li class="pb-2"><a class="text-white fw-bolder font-14 a-main" href="/">Home</a></li>
                            <li class="pb-2"><a class="text-white fw-bolder font-14 a-main" href="/about">About</a></li>
                            <li class="pb-2"><a class="text-white fw-bolder font-14 a-main" href="#">Academics</a></li>
                            <li class="pb-2"><a class="text-white fw-bolder font-14 a-main" href="#">Admission</a></li>
                            <li class="pb-2"><a class="text-white fw-bolder font-14 a-main" href="#">Student Life</a></li>
                        </ul>
                    </div>

                         <div class="col-lg-3 col-sm-4">
                        <h5 class="text-uppercase font-18 text-white  fw-bolder py-2">INFORMATION FOR</h5>
                        <ul class="footer-list mt-3">
                            <li class="pb-2"><a class="text-white fw-bolder font-14 a-main" href="#">How To Apply</a></li>
                            <li class="pb-2"><a class="text-white fw-bolder font-14 a-main" href="#">Dates &amp; Deadlines</a></li>
                            <li class="pb-2"><a class="text-white fw-bolder font-14 a-main" href="#">Student Activities</a></li>
                            <li class="pb-2"><a class="text-white fw-bolder font-14 a-main" href="#">Support &amp; Guidance</a></li>
                            <li class="pb-2"><a class="text-white fw-bolder font-14 a-main" href="#">Schedule A Tour</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-sm-4">
                        <h5 class="text-uppercase font-18 text-white  fw-bolder py-2">QUICK LINKS</h5>
                        <ul class="footer-list mt-3">
                            <li class="pb-2"><a class="text-white fw-bolder font-14 a-main" href="#">Apply Now</a></li>
                            <li class="pb-2"><a class="text-white fw-bolder font-14 a-main" href="#">Blog</a></li>
                            <li class="pb-2"><a class="text-white fw-bolder font-14 a-main" href="#">Teachers</a></li>
                            <li class="pb-2"><a class="text-white fw-bolder font-14 a-main" href="#">Alumni Club</a></li>
                        </ul>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12">
                        <div class=" d-flex justify-content-center flex-wrap gap-5  mt-5">
                    <a href="#"  aria-label="Facebook" class="text-white fs-5">
                        <i class="fa-brands fa-facebook-f hvr-shrink" aria-hidden="true"></i>
                    </a>
                    <a href="#" aria-label="Twitter" class="text-white fs-5">
                        <i class="fa-brands fa-x-twitter hvr-shrink" aria-hidden="true"></i>
                    </a>
                    <a href="#" aria-label="LinkedIn" class="text-white fs-5">
                        <i class="fa-brands fa-linkedin-in hvr-shrink" aria-hidden="true"></i>
                    </a>
                    <a href="#" aria-label="YouTube" class="text-white fs-5">
                        <i class="fa-brands fa-youtube hvr-shrink" aria-hidden="true"></i>
                    </a>
                    <a href="#" aria-label="Instagram" class="text-white fs-5">
                        <i class="fa-brands fa-instagram hvr-shrink" aria-hidden="true"></i>
                    </a>
                </div>
                    </div>
                </div>

            </div>
        </div>

       <div class="footer-bottom py-3">
            <div class="container">
                <div class="row align-items-center g-3">
                    <div class="col-lg-6 text-center text-lg-start">
                        <p class="text-dark font-14 fw-normal">Copyright © {{ currentYear }} VamTam. All rights reserved.</p>
                    </div>
                    <div class="col-lg-6">
                        <ul class="bottom-links d-flex justify-content-center justify-content-lg-end gap-3 gap-md-5 mb-0">
                            <li class="pb-2"><a href="#" class="text-dark font-14 a-main fw-normal text-dark">Cookies</a></li>
                            <li class="pb-2"><a href="#" class="text-dark font-14 a-main fw-normal">Terms &amp; Conditions</a></li>
                            <li class="pb-2"><a href="#" class="text-dark font-14 a-main fw-normal">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    <div class="floating-actions">
        <a
            href="#"
            class="apply-now-btn"
            aria-label="Apply now"
        >
            <img :src="applyNowImage" alt="Apply now" />
        </a>

        <a
            href="https://wa.me/17722902999"
            target="_blank"
            rel="noopener noreferrer"
            class="floating-btn whatsapp-btn"
            aria-label="Chat on WhatsApp"
        >
            <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
        </a>

        <button
            v-show="showScrollTop"
            type="button"
            class="floating-btn top-btn"
            aria-label="Scroll to top"
            @click="scrollToTop"
        >
            <svg class="progress-circle" viewBox="0 0 48 48">
                <circle
                    class="progress-background"
                    cx="24"
                    cy="24"
                    r="22"
                />
                <circle
                    class="progress-fill"
                    cx="24"
                    cy="24"
                    r="22"
                    :style="{ strokeDashoffset: progressOffset }"
                />
            </svg>
            <i class="fa-solid fa-arrow-up" aria-hidden="true"></i>
        </button>
    </div>

</template>

<script setup>
import { onBeforeUnmount, onMounted, ref } from 'vue';

const currentYear = new Date().getFullYear();
const applyNowImage = '/images/apply-now.png';
const showScrollTop = ref(false);
const scrollProgress = ref(0);
const progressOffset = ref(138.16); // 2 * Math.PI * 22 (circumference)

const handleScroll = () => {
    showScrollTop.value = window.scrollY > 280;

    // Calculate scroll progress percentage
    const docHeight = document.documentElement.scrollHeight - window.innerHeight;
    const scrolled = window.scrollY;
    scrollProgress.value = docHeight > 0 ? (scrolled / docHeight) * 100 : 0;

    // Update progress circle offset (138.16 is the circumference)
    const circumference = 2 * Math.PI * 22;
    progressOffset.value = circumference - (scrollProgress.value / 100) * circumference;
};

const scrollToTop = () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth',
    });
};

onMounted(() => {
    handleScroll();
    window.addEventListener('scroll', handleScroll, { passive: true });
});

onBeforeUnmount(() => {
    window.removeEventListener('scroll', handleScroll);
});
</script>

<style scoped>
.floating-actions {
    position: fixed;
    right: 16px;
    bottom: 16px;
    z-index: 1050;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
}

.apply-now-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    transition: transform 0.2s ease;
}

.apply-now-btn img {
    width: 55px;
    height: auto;
    display: block;
}

.apply-now-btn:hover {
    transform: translateY(-2px);
}

.floating-btn {
    width: 48px;
    height: 48px;
    border: 0;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    text-decoration: none;
    box-shadow: 0 10px 18px rgba(0, 0, 0, 0.2);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.floating-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 20px rgba(0, 0, 0, 0.24);
}

.floating-btn i {
    font-size: 24px;
    line-height: 1;
}

.whatsapp-btn {
    background: #25d366;
}

.top-btn {
    background: #3a5bad;
    position: relative;
}

.top-btn .progress-circle {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    transform: rotate(-90deg);
}

.progress-background {
    fill: none;
    stroke: rgba(255, 255, 255, 0.1);
    stroke-width: 2;
}

.progress-fill {
    fill: none;
    stroke: #ffd700;
    stroke-width: 2;
    stroke-linecap: round;
    stroke-dasharray: 138.16;
    transition: stroke-dashoffset 0.1s ease;
}

.top-btn i {
    position: relative;
    z-index: 1;
}

@media (max-width: 575.98px) {
    .floating-actions {
        right: 12px;
        bottom: 12px;
    }

    .apply-now-btn img {
        width: 48px;
    }

    .floating-btn {
        width: 44px;
        height: 44px;
    }
}
</style>
