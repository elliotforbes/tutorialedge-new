
var vm = new Vue({
  el: '#search',
  data: 
  {
    results: [{title : "This Still hasn't been Implemented", author: "Elliot Forbes", description : "I'm still learning how to use vue.js for things so this is still in the works."}]
  },
  ready : function()
  {
    this.fetchAllLessons();
  },
  methods: 
  {
      fetchAllLessons: function()
      {
           
      }
  }
})

vm.fetchAllLessons();