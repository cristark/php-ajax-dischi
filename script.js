let app = new Vue({
    el: '#app',
    data: {
        musicList: []
    },
    mounted() {
        axios
            .get('server.php')
            .then(response => {
                this.musicList = response.data;
                console.log(this.musicList);
            });
    }
});