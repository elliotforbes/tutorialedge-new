new Vue({
  el: '#search',
  data: 
  {
    results: [ ]
  },
  methods: 
  {
      fetchAllLessons: function()
      {
            this.$http.get('https://tutorialedge.net/api/v1/lessons', function(results)
            {
                this.$set('results',results);
            });
      }
  }
})