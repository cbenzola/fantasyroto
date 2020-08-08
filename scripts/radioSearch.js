// JavaScript Document

$(document).ready(function(){
	
	var player= $("#PlayerSearch");
	var position=$('[name="PositionSearch"]');
	var team= $('[name="TeamSearch"]');
	
 
	
  
	
   $('input[type="radio"]').click(function() {
       if($(this).attr('id') == 'PlayerSearch') {
            $('#searchForm').show();           
       }

       else {
            $('#searchForm').hide();   
       }
   });

	
       if(player.checked){
            $('#searchForm').show();           
       }

      /* else {
            $('#searchForm').hide();   
       }*/
  
 if(position.checked){
            $('#position-search').show();           
       }else{ $('#position-search').hide(); }
	
	if(team.checked){
            $('#team-search').show();           
       }else{ $('#team-search').hide(); }
	
   $('input[type="radio"]').click(function() {
       if($(this).attr('id') == 'PositionSearch') {
            $('#position-search').show();           
       }

       else {
            $('#position-search').hide();   
       }
   });
	
	 $('input[type="radio"]').click(function() {
       if($(this).attr('id') == 'TeamSearch') {
            $('#team-search').show();           
       }

       else {
            $('#team-search').hide();   
       }
   });

	
	var checked_val = "null";
$(".no_option").on("click", function(){
  if($(this).val() == checked_val){
  	$('input[name=radioSearch][value=null]').prop("checked",true);
    checked_val = "null";
  }else{
  	checked_val = $(this).val();
  }
});
})


