export default {
    name: "MiniCar",

    props: ["mini"],

    // data needs to be a function inside a component
    data: function() {
        return {
            myName: this.mini.name,
            myRole: this.mini.model,
            program: "IDP"
        }
    },

    template: 
    `<li @click="logClicked">
        <img :src="'images/' + mini.image" :alt='mini.name + " image"'>
      
    </li>`,
    
    created: function () {
        console.log(`created ${this.mini.name}'s card`);
        
    },

    methods: {
        logClicked() {
          
            console.log(`fired from inside ${this.mini.name}'s component!`);
            console.log(`${this.mini.description}`);
            this.$emit('showmydata',this.mini);

        }
    }
}
