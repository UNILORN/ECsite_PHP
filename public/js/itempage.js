$(function(){
  var vm = new Vue({
    el: 'main',
    data: {
      item :[]
    }
  });

  $.ajax({
    type:'GET',
    url:'/api/items/type/'+type,
    success:function(response){
      var rat = [];
      response.forEach(function(value,index){
        rat.push({
          id:value["ITEM_ID"],
          name:value["name"],
          imageurl:value["imageurl"],
          price:value["price"],
          type:value["type"]
        });
      });
      vm.$set('item',rat);
    }
  });
});
