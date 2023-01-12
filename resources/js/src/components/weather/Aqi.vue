<template>
    <div class="container" style="margin-top: 19px;">
        <div class="row">
            <div class="col-md-6">
                <div class="card" style="border-width: 1px;">
                    <div class="card-body">
                        <h4 class="fw-lighter card-title">Indeks Kualitas Udara</h4>
                        <div class="row">
                            <div v-if="parseInt(this.$store.state.weatherdata.aqi) < 50" class="col text-center">
                                <h1 class="fw-bold text-success">{{parseInt(this.$store.state.weatherdata.aqi)}}</h1>
                            </div>
                            <div v-else-if="parseInt(this.$store.state.weatherdata.aqi) > 51 && parseInt(this.$store.state.weatherdata.aqi) < 100" class="col text-center">
                                <h1 class="fw-bold text-warning">{{parseInt(this.$store.state.weatherdata.aqi)}}</h1>
                            </div>
                            <div v-else-if="parseInt(this.$store.state.weatherdata.aqi) > 101 && parseInt(this.$store.state.weatherdata.aqi) < 150" class="col text-center">
                                <h1 class="fw-bold text-warning">{{parseInt(this.$store.state.weatherdata.aqi)}}</h1>
                            </div>
                            <div v-else-if="parseInt(this.$store.state.weatherdata.aqi) > 151 && parseInt(this.$store.state.weatherdata.aqi) < 200" class="col text-center">
                                <h1 class="fw-bold text-danger">{{parseInt(this.$store.state.weatherdata.aqi)}}</h1>
                            </div>
                            <div v-else-if="parseInt(this.$store.state.weatherdata.aqi) > 201 && parseInt(this.$store.state.weatherdata.aqi) < 300" class="col text-center">
                                <h1 class="fw-bold text-info">{{parseInt(this.$store.state.weatherdata.aqi)}}</h1>
                            </div>
                            <div v-else class="col text-center">
                                <h1 class="fw-bold text-warning">{{parseInt(this.$store.state.weatherdata.aqi)}}</h1>
                            </div>
                            <div v-if="parseInt(this.$store.state.weatherdata.aqi) < 50" class="col-md-6 text-center">
                                <h4 class="fw-bold text-success">Baik</h4>
                            </div>
                            <div v-else-if="parseInt(this.$store.state.weatherdata.aqi) > 51 && parseInt(this.$store.state.weatherdata.aqi) < 100" class="col-md-6 text-center">
                                <h4 class="fw-bold text-warning">Moderate</h4>
                            </div>
                            <div v-else-if="parseInt(this.$store.state.weatherdata.aqi) > 101 && parseInt(this.$store.state.weatherdata.aqi) < 150" class="col-md-6 text-center">
                                <h4 class="fw-bold text-warning">Tidak sehat untuk kelompok sensitive</h4>
                            </div>
                            <div v-else-if="parseInt(this.$store.state.weatherdata.aqi) > 151 && parseInt(this.$store.state.weatherdata.aqi) < 200" class="col-md-6 text-center">
                                <h4 class="fw-bold text-danger">Tidak sehat</h4>
                            </div>
                            <div v-else-if="parseInt(this.$store.state.weatherdata.aqi) > 201 && parseInt(this.$store.state.weatherdata.aqi) < 300" class="col-md-6 text-center">
                                <h4 class="fw-bold text-info">Sangat Tidak Sehat</h4>
                            </div>
                            <div v-else class="col-md-6 text-center">
                                <h4 class="fw-bold text-danger">Berbahaya</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="border-width: 1px;">
                    <div class="card-body">
                        <h4 class="fw-lighter card-title">Kesehatan &amp; Aktivitas</h4>
                        <div class="row">
                            <div class="col text-center" style="margin-top: 6px;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -64 640 640" width="1em" height="1em" fill="currentColor" class="fs-1 text-info">
                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                    <path d="M184 88C184 118.9 158.9 144 128 144C97.07 144 72 118.9 72 88C72 57.07 97.07 32 128 32C158.9 32 184 57.07 184 88zM208.4 196.3C178.7 222.7 160 261.2 160 304C160 338.3 171.1 369.8 192 394.5V416C192 433.7 177.7 448 160 448H96C78.33 448 64 433.7 64 416V389.2C26.16 371.2 0 332.7 0 288C0 226.1 50.14 176 112 176H144C167.1 176 190.2 183.5 208.4 196.3V196.3zM64 245.7C54.04 256.9 48 271.8 48 288C48 304.2 54.04 319.1 64 330.3V245.7zM448 416V394.5C468 369.8 480 338.3 480 304C480 261.2 461.3 222.7 431.6 196.3C449.8 183.5 472 176 496 176H528C589.9 176 640 226.1 640 288C640 332.7 613.8 371.2 576 389.2V416C576 433.7 561.7 448 544 448H480C462.3 448 448 433.7 448 416zM576 330.3C585.1 319.1 592 304.2 592 288C592 271.8 585.1 256.9 576 245.7V330.3zM568 88C568 118.9 542.9 144 512 144C481.1 144 456 118.9 456 88C456 57.07 481.1 32 512 32C542.9 32 568 57.07 568 88zM256 96C256 60.65 284.7 32 320 32C355.3 32 384 60.65 384 96C384 131.3 355.3 160 320 160C284.7 160 256 131.3 256 96zM448 304C448 348.7 421.8 387.2 384 405.2V448C384 465.7 369.7 480 352 480H288C270.3 480 256 465.7 256 448V405.2C218.2 387.2 192 348.7 192 304C192 242.1 242.1 192 304 192H336C397.9 192 448 242.1 448 304zM256 346.3V261.7C246 272.9 240 287.8 240 304C240 320.2 246 335.1 256 346.3zM384 261.7V346.3C393.1 335 400 320.2 400 304C400 287.8 393.1 272.9 384 261.7z"></path>
                                </svg></div>
                            <div class="col-md-6 text-center">
                                <h5 class="fw-bold text-success">{{this.$store.state.weatherdata.activity}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
    
<script>
    export default {
      name: "daily-aqi",
    };
</script>