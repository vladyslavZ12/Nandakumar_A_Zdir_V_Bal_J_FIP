export default {
    name: "GalleryPics",

    props: ["gallery"],

    // data needs to be a function inside a component
    data: function() {
        return {
            myName: this.gallery.name,
            program: "LRG"
        }
    },

    template: 
    `<section class="galleryPics" @click="logClicked">
        <img :src="'../images/' + gallery.image" :alt='gallery.name + " image"'>
      
    </section>`,
    
    created: function () {
        console.log(`created ${this.gallery.name}'s card`);
        
    },

    methods: {
        logClicked() {
          
            console.log(`fired from inside ${this.gallery.name}'s component!`);
            console.log(`${this.gallery.description}`);
            this.$emit('showmydata',this.gallery);

        }
    }
}
