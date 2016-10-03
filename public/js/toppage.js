$(function(){
  new Vue({
    el: 'main',
    data: {
      headphone :[1,2,3,4,5],
      space:0
    },
    method:{
      spacecount:function(width){
        this.space += width;
      }
    }
  })
});
