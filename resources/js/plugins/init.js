(function($){
  $(function(){
    $('.fixed-action-btn').floatingActionButton({
        toolbarEnabled: true
      });  
    $('.button-collapse').sideNav();
    $('.dropdown-trigger').dropdown();
    $('select').formSelect();
  
  }); // end of document ready
})(jQuery); // end of jQuery name space