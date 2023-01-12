<template>
    <div>
        <NavBar/>
        <weather/>
        <Aqi/>
        <daily-weather/>
        <DetailWeather/>
        <HourlyWeather/>
        <Maps/>
    </div>
</template>

<script>
    import Weather from '../components/weather/Weather.vue'
    import Aqi from '../components/weather/Aqi.vue'
    import DailyWeather from '../components/weather/DailyWeather.vue'
    import HourlyWeather from '../components/weather/HourlyWeather.vue'
    import DetailWeather from '../components/weather/DetailWeather.vue'
    import Maps from '../components/weather/Maps.vue'
    import NavBar from '../components/public/Navbar.vue'
    export default {
        metaInfo: {
        title: 'GeoEnvironment',
        },
        components: { NavBar, DailyWeather, Weather, Aqi, HourlyWeather, DetailWeather, Maps },
        name: 'home'
    }
</script>
