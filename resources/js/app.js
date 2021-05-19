const { default: axios } = require('axios');

require('./bootstrap');

console.log('ciao');

const app = new Vue ({
    el: '#app',
    data: {
        baseURL: '/api/movies',
    },
    methods: {
        getMovies() {
            axios.get( this.baseURL )
            .then( (arr) => {
                console.log(arr);
            });
        },
    },
    mounted: function () {
        getMovies();
    }
});
