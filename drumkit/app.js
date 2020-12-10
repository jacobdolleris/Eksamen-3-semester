

new Vue({
    el: '#app',
    data: {
        name: '',

      
    }
})
/* To do:
    Get keyDown afspil lyd 
*/
new Vue({
    el: '#drum',
    data: {
    },
        
        methods: {
            playSound (sound) {
              if(sound) {
                var audio = new Audio(sound);
                audio.play();
              }
            }
          }
      
    
})

new Vue({
  el: '#key',
  data: {
  },
      
      methods: {
          playSound (sound) {
            if(sound) {
              var audio = new Audio(sound);
              audio.play();
            }
          }
        }
    
  
})

new Vue({
  el: '#knap',
  
  data() {
    return {
      toggle: false
    };
  }
});