<template>
    <div class="container" style="margin-top: 120px;">
        <div class="card">
            <img class="card-img w-100 d-block" src="assets/img/wp6289014.jpg" height="300px">
            <div class="card-img-overlay">
                <h2 class="text-white">{{this.$store.state.weatherdata.country}}</h2>
            </div>
            <div class="card-img-overlay" style="padding-top: 100px;">
                <h1 class="display-2 fw-semibold text-white">{{this.$store.state.weatherdata.current_conditions}} C</h1>
                <p class="fs-5 text-white" style="margin-top: -17px;">{{this.$store.state.weatherdata.pharse_value}}</p>
            </div>
        </div>
    </div>
</template>

<style>
    body {
        background-image: linear-gradient(to bottom, #311e8e, #8672e6);
 }
</style>

<script>
    export default {
        name: "weather",
        mounted() {
            this.openLoading()
            axios.get('/api/weather/jakarta/')
                .then(response => {
                    this.$store.commit("addWeatherData", response.data[0])
                    window.scrollTo(0, 0)
                })
                .catch(error => {
                    console.log(response.data.errors)
                });
        },
        methods: {
            openLoading() {
                const loading = this.$vs.loading({
                    type: this.$store.state.loadingType,
                    text: this.$store.state.loadingText,
                    color: this.$store.state.loadingColor
                })
                setTimeout(() => {
                    loading.close()
                }, this.$store.state.loadingTime)
            },
        },


    }
</script>