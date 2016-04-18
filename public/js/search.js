var vm = new Vue({
  el: '#search',
  data: 
  {
    results: []
  },
  ready : function()
  {
    this.fetchAllLessons();
  },
  methods: 
  {
      fetchAllLessons: function()
      {
            // GET request
            this.$http({url: 'https://tutorialedge.net/api/v1/lessons', method: 'GET'}).then(function (response) {
                this.$set('results', response.results);
            }, function (response) {
                console.log("FUCK");
            });
      }
  }
})

vm.fetchAllLessons();