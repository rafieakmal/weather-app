<template>
    <div>
        <NavBar/>
        <body>
            <Gempa/>
        </body>
    </div>
</template>

<script>
import Gempa from '../components/gempa/Gempa.vue'
import NavBar from '../components/public/Navbar.vue'
export default {
    metaInfo: {
        title: 'GeoEnvironment',
    },
    components: { NavBar, Gempa },
    name: 'gempa'
}
</script>
