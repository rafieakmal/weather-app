<template>
    <div class="container" style="margin-top: 19px">
        <div class="card" style="border-width: 1px;">
            <div class="card-body">
                <h3 class="fw-lighter">{{this.$store.state.weatherdata.card_third_heading}}</h3>
                <div class="row">
                    <div class="col text-center">
                        <h2 class="fw-normal">{{this.$store.state.weatherdata.jam_sekarang}}</h2><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-cloudy" style="font-size: 74px;">
                            <path d="M13.405 8.527a5.001 5.001 0 0 0-9.499-1.004A3.5 3.5 0 1 0 3.5 14.5H13a3 3 0 0 0 .405-5.973zM8.5 5.5a4 4 0 0 1 3.976 3.555.5.5 0 0 0 .5.445H13a2 2 0 0 1-.001 4H3.5a2.5 2.5 0 1 1 .605-4.926.5.5 0 0 0 .596-.329A4.002 4.002 0 0 1 8.5 5.5z"></path>
                        </svg>
                        <h1 class="text-primary">{{this.$store.state.weatherdata.suhu_jam_sekarang}}</h1>
                    </div>
                    <div class="col text-center">
                        <h2 class="fw-normal text-warning">{{this.$store.state.weatherdata.jam_kedua}}</h2><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-cloudy text-warning" style="font-size: 74px;">
                            <path d="M13.405 8.527a5.001 5.001 0 0 0-9.499-1.004A3.5 3.5 0 1 0 3.5 14.5H13a3 3 0 0 0 .405-5.973zM8.5 5.5a4 4 0 0 1 3.976 3.555.5.5 0 0 0 .5.445H13a2 2 0 0 1-.001 4H3.5a2.5 2.5 0 1 1 .605-4.926.5.5 0 0 0 .596-.329A4.002 4.002 0 0 1 8.5 5.5z"></path>
                        </svg>
                        <h1 class="text-primary">{{this.$store.state.weatherdata.suhu_jam_kedua}}</h1>
                    </div>
                    <div class="col text-center">
                        <h2 class="fw-normal text-success">{{this.$store.state.weatherdata.jam_ketiga}}</h2><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-cloudy-fill text-success" style="font-size: 74px;">
                            <path d="M13.405 7.027a5.001 5.001 0 0 0-9.499-1.004A3.5 3.5 0 1 0 3.5 13H13a3 3 0 0 0 .405-5.973z"></path>
                        </svg>
                        <h1 class="text-primary">{{this.$store.state.weatherdata.suhu_jam_ketiga}}</h1>
                    </div>
                    <div class="col text-center">
                        <h2 class="fw-normal text-info">{{this.$store.state.weatherdata.jam_keempat}}</h2><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-cloudy-fill text-info" style="font-size: 74px;">
                            <path d="M13.405 7.027a5.001 5.001 0 0 0-9.499-1.004A3.5 3.5 0 1 0 3.5 13H13a3 3 0 0 0 .405-5.973z"></path>
                        </svg>
                        <h1 class="text-primary">{{this.$store.state.weatherdata.suhu_jam_keempat}}</h1>
                    </div>
                    <div class="col text-center">
                        <h2 class="fw-normal text-black-50">{{this.$store.state.weatherdata.jam_terakhir}}</h2><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-cloudy-fill text-black-50" style="font-size: 74px;">
                            <path d="M13.405 7.027a5.001 5.001 0 0 0-9.499-1.004A3.5 3.5 0 1 0 3.5 13H13a3 3 0 0 0 .405-5.973z"></path>
                        </svg>
                        <h1 class="text-primary">{{this.$store.state.weatherdata.suhu_jam_terakhir}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  name: "hourly-weather",
};
</script>