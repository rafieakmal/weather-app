<template>
    <body>
    <div class="container" style="margin-top: 120px;">
        <div class="card" style="border-width: 1px;">
            <div class="card-body">
                <h3 class="fw-lighter text-danger">Gempa Terbaru</h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Jam</th>
                                <th>Magnitude</th>
                                <th>Coordinates</th>
                                <th>Kedalaman</th>
                                <th>Wilayah</th>
                                <th>Potensi</th>
                                <th>Dirasakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{gempa_terbaru.Tanggal}}</td>
                                <td>{{gempa_terbaru.Jam}}</td>
                                <td>{{gempa_terbaru.Magnitude}}</td>
                                <td>{{gempa_terbaru.Coordinates}}</td>
                                <td>{{gempa_terbaru.Kedalaman}}</td>
                                <td>{{gempa_terbaru.Wilayah}}</td>
                                <td>{{gempa_terbaru.Potensi}}</td>
                                <td>{{gempa_terbaru.Dirasakan}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 19px;">
        <div class="card" style="border-width: 1px;">
            <div class="card-body">
                <h3 class="fw-lighter text-warning">Gempa Terkini</h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Jam</th>
                                <th>Magnitude</th>
                                <th>Coordinates</th>
                                <th>Kedalaman</th>
                                <th>Wilayah</th>
                                <th>Potensi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="gempa in gempa_terkini">
                                <td>{{gempa.Tanggal}}</td>
                                <td>{{gempa.Jam}}</td>
                                <td>{{gempa.Magnitude}}</td>
                                <td>{{gempa.Coordinates}}</td>
                                <td>{{gempa.Kedalaman}}</td>
                                <td>{{gempa.Wilayah}}</td>
                                <td>{{gempa.Potensi}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 19px; margin-bottom: 62px;">
        <div class="card" style="border-width: 1px;">
            <div class="card-body">
                <h3 class="fw-lighter text-info">Gempa Dirasakan</h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Jam</th>
                                <th>Magnitude</th>
                                <th>Coordinates</th>
                                <th>Kedalaman</th>
                                <th>Wilayah</th>
                                <th>Dirasakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="gempa in gempa_dirasakan">
                                <td>{{gempa.Tanggal}}</td>
                                <td>{{gempa.Jam}}</td>
                                <td>{{gempa.Magnitude}}</td>
                                <td>{{gempa.Coordinates}}</td>
                                <td>{{gempa.Kedalaman}}</td>
                                <td>{{gempa.Wilayah}}</td>
                                <td>{{gempa.Dirasakan}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</template>

<script>
    export default {
        name: 'comment-article',
        data() {
            return {
                gempa_terbaru: [],
                gempa_terkini: [],
                gempa_dirasakan: [],
            }
        },
        mounted() {
            window.scrollTo(0, 0)
            axios.get('/api/gempa/terbaru')
                .then(response => {
                    this.gempa_terbaru = response.data.Infogempa.gempa
                    console.log(this.gempa_terbaru.Bujur)
                })
                .catch(error => {
                    console.log(error)
                });

            axios.get('/api/gempa/terkini')
                .then(response => {
                    this.gempa_terkini = response.data.Infogempa.gempa
                    console.log(this.gempa_terkini)
                })
                .catch(error => {
                    console.log(error)
                });
            axios.get('/api/gempa/dirasakan')
                .then(response => {
                    this.gempa_dirasakan = response.data.Infogempa.gempa
                    console.log(this.gempa_dirasakan)
                })
                .catch(error => {
                    console.log(error)
                });

        },
    }
</script>