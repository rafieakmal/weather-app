<template>
    <div class="container" style="margin-top: 19px">
        <div class="card" style="border-width: 1px;">
            <div class="card-body">
                <h3 class="fw-lighter">{{this.$store.state.weatherdata.card_second_heading}}</h3>
                <h1 class="display-2 fw-normal text-primary">{{this.$store.state.weatherdata.suhu_hari_ini}} C</h1>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col text-start">
                                <p>Maks/Min</p>
                            </div>
                            <div class="col text-end">
                                <p>{{this.$store.state.weatherdata.suhu_max}}/{{this.$store.state.weatherdata.suhu_min}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-start">
                                <hr style="margin-top: -12px;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-start">
                                <p>Kelembapan</p>
                            </div>
                            <div class="col text-end">
                                <p>{{this.$store.state.weatherdata.kelembapan}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-start">
                                <hr style="margin-top: -12px;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-start">
                                <p>Tekanan</p>
                            </div>
                            <div class="col text-end">
                                <p>{{this.$store.state.weatherdata.tekanan}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-start">
                                <hr style="margin-top: -12px;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-start">
                                <p>Jarak Pandang</p>
                            </div>
                            <div class="col text-end">
                                <p>{{this.$store.state.weatherdata.jarak_pandang}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-start">
                                <hr style="margin-top: -12px;">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col text-start">
                                <p>Angin</p>
                            </div>
                            <div class="col text-end">
                                <p>{{this.$store.state.weatherdata.angin}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-start">
                                <hr style="margin-top: -12px;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-start">
                                <p>Titik Embun</p>
                            </div>
                            <div class="col text-end">
                                <p>{{this.$store.state.weatherdata.embun}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-start">
                                <hr style="margin-top: -12px;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-start">
                                <p>Indeks UV</p>
                            </div>
                            <div class="col text-end">
                                <p>{{this.$store.state.weatherdata.indeks_uv}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-start">
                                <hr style="margin-top: -12px;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-start">
                                <p>Fase Bulan</p>
                            </div>
                            <div class="col text-end">
                                <p>{{this.$store.state.weatherdata.fase_bulan}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-start">
                                <hr style="margin-top: -12px;">
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
  name: "detail-weather",
};
</script>