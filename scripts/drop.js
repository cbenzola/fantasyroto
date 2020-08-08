"use strict";

 $(jQuery).ready(function(data){  
      $('.drag_area').on('dragover', function(){  
           $(this).addClass('drag_over');  
           return false;  
      });  
      $('.drag_area').on('dragleave', function(){  
           $(this).removeClass('drag_over');  
           return false;  
      });  
      $('.player_drag').on('dragstart', function(e){  
           e.originalEvent.dataTransfer.setData("id", $(this).data("id"));  
           e.originalEvent.dataTransfer.setData("name", $(this).data("name"));  
           e.originalEvent.dataTransfer.setData("year", $(this).data("year")); 
		  e.originalEvent.dataTransfer.setData("team", $(this).data("team"));  
           e.originalEvent.dataTransfer.setData("hits", $(this).data("hits"));  
           e.originalEvent.dataTransfer.setData("doubles", $(this).data("doubles")); 
		  e.originalEvent.dataTransfer.setData("triples", $(this).data("triples"));  
           e.originalEvent.dataTransfer.setData("homeruns", $(this).data("homeruns"));  
		  e.originalEvent.dataTransfer.setData("spray_chart", $(this).data("spray_chart"));
		  e.originalEvent.dataTransfer.setData("field_chart", $(this).data("field_chart"));
          
      });  
      $('.drag_area').on('drop', function(e){  
           e.preventDefault();  
           $(this).removeClass('drag_over');  
           var id = e.originalEvent.dataTransfer.getData('id');  
           var name = e.originalEvent.dataTransfer.getData('name');  
           var year = e.originalEvent.dataTransfer.getData('year');
		  var team = e.originalEvent.dataTransfer.getData('team');  
           var hits = e.originalEvent.dataTransfer.getData('hits');  
           var doubles = e.originalEvent.dataTransfer.getData('doubles'); 
		  var triples = e.originalEvent.dataTransfer.getData('triples');  
           var homeruns = e.originalEvent.dataTransfer.getData('homeruns');
		  var spray_chart = e.originalEvent.dataTransfer.getData('spray_chart');
		  var field_chart = e.originalEvent.dataTransfer.getData('field_chart');
		  
            var action = "add";  
           
		  $.ajax({  
                url:"action.php",  
                method:"POST",  
                data:{id:id,year:year, name:name, team:team, hits:hits, doubles:doubles,triples:triples, homeruns:homeruns,spray_chart:spray_chart,field_chart:field_chart, action:action},  
                success:function(data){  
                     $('#dragable_player').html(data);  
                }  
           })  
      });  
      $(document).on('click', '.remove_player', function(){  
           if(confirm("Are you sure you want to remove this player?"))  
           {  
                var id = $(this).attr("id");  
                var action="delete";  
                $.ajax({  
                     url:"action.php",  
                     method:"POST",  
                     data:{id:id, action:action},  
                     success:function(data){  
                          $('#dragable_player').html(data);  
                     }  
                });  
           }  
           else  
           {  
                return false;  
           }  
      });  
 });  

				  

  



