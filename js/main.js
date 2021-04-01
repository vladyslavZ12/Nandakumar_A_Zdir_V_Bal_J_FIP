import { fetchData } from "./modules/TheDataMiner.js";
import galleryCard from "./modules/AppCard.js";

(() => {

    let vue_vm = new Vue({
    data: {
        message: "Gallery pics",
        removeAformat: true,
        showBioData: false,
        gallPics: []
    },
   
    mounted: function() {
        console.log("Vue is mounted, trying a fetch for the initial data");
        
        fetchData("../includes/index.php").then(data => this.gallPics = data).catch(err => JSON.parse(JSON.stringify(err)));
          
    },
    
    components: {
        "gall-card": galleryCard
    }
    }).$mount("#app1"); // also connects Vue to your wrapper in HTML
})();
