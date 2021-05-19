const { default: axios } = require('axios');

require('./bootstrap');

const app = new Vue ({
    el: '#app',
    data: {
        baseURL: 'api/movies',
        movies: [],
    },
    methods: {
        getMovies() {
            axios.get( this.baseURL )
            .then( (arr) => {
                this.movies = arr.data;
            });
        },
    },
    mounted: function () {
        this.getMovies();
    }
});
