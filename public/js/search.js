Vue.component('results', {
    template: '#results-template'  ,
    
});

new Vue({
    
    el: '#search',
    
    data : {
        query : '',
        message : "Hello World",
        results :{ data : [{
            title: "Test",
            description : "Description",
            author: "Elliot Forbes"
            
        }]}
    },
    
    // Anything within the ready function will run when the application loads
    ready: function() {
        this.fetchLessons();
    },

    // Methods we want to use in our application are registered here
    methods: {
        fetchLessons : function() {
            // console.log("Hello World");
            // this.$http.get('api/v1/lessons', function(data, status, request){
            //     if(status == 200)
            //     {   
            //         this.results = data;
            //     } else {
            //         console.log(error);
            //     }
            // });
        }
    }
});