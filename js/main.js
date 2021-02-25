import { fetchData } from "./modules/TheDataMiner.js";
import gallery from "./modules/AppCard.js";

(() => {

    let vue_vm = new Vue({
        data: {  
          message: "Projects",
        anotherMessage: "Click on image to see description",
        removeAformat: true,
        showBioData: false,
        miniCars: [],
        currentMiniData: {}
        },

      
        mounted: function() {
            console.log("Vue is mounted, trying a fetch for the initial data");
            
            fetchData("./includes/index.php").then(data => this.miniCars = data).catch(err => JSON.parse(JSON.stringify(err)));
              
        },

        // run a method when we change our view (update the DOM with Vue)
        updated: function() {
            console.log('Vue just updated the DOM');
        },

        methods: {
            logClicked() {
                console.log("clicked on a list item");
            },

            clickHeader() {
                console.log("clicked on the header");
            },

            showMiniData(target) {
                
             console.log('clicked to view', target.name);  
                  this.showBioData = this.showBioData ? false : true;

                 this.currentMiniData = target;
            }            

        },

        components: {
            "gall-card": gallery,
         "content-card": moreContent
        }
    }).$mount("#app1"); // also connects Vue to your wrapper in HTML
})();
