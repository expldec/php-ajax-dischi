const app = new Vue({
  el: "#app",
  data: {
    albums: [],
    genreSelect: "",
    genres: ["Rock", "Pop", "Jazz", "Metal"],
  },
  computed: {},
  methods: {
      filterSearch: function(genre) {
        axios
        .get(`http://localhost/php-ajax-dischi/db-api.php?genre=${genre}`, {
        })
        .then((resp) => {
            console.log(resp);
          this.albums = resp.data;
        });
      }
  },
  created() {
    axios
      .get("http://localhost/php-ajax-dischi/db-api.php", {
      })
      .then((resp) => {
        this.albums = resp.data;
      });
  },
});
