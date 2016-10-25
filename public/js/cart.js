$(function(){
  var vm = new Vue({
    el: 'main',
    data: {
      item :[],
      sumprice:0,
      sumnum:0
    },
    methods:{
      sum:function(){
        var obj = this.item;
        var that = this;
        that.sumnum = 0;
        that.sumprice = 0;
        Object.keys(obj).forEach(function(key){
          if( obj[key]["pricenum"] != ""){
            that.sumnum += parseInt(obj[key]["pricenum"]);
            that.sumprice += parseInt(obj[key]["pricenum"]) * parseInt(obj[key]["price"]);
          }
        });
      }
    }
  });

  $.ajax({
    type:'GET',
    url:'/api/items',
    success:function(response){
      var rat = [];
      response.forEach(function(value,index){
        var company_obj = value["company"];
        if( company_obj != undefined){
           company_obj = company_obj["name"];
        }
        else{
          company_obj = "";
        }
        rat.push({
          id:value["ITEM_ID"],
          name:value["name"],
          imageurl:value["imageurl"],
          price:value["price"],
          type:value["type"],
          company:company_obj,
          num:value["num"],
          pricenum:0
        });
      });
      vm.$set('item',rat);
    }
  });

  $('.cart_form').change(function(){
    vm.sum();
  })

});
