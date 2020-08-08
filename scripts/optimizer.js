 // JavaScript Document
 $(document).ready(function () {
    $('#table2').each(function () {
        var $table = $(this);

        var $button = $("#csv");


        $button.click(function () {
            var csv = $table.table2CSV({
                delivery: 'value'
            });
            window.location.href = 'data:text/csv;charset=UTF-8,'
            + encodeURIComponent(csv);
        });
    });
})
$(document).ready(function () {
    $("tbody.connectedSortable")
        .sortable({
        connectWith: ".connectedSortable",
       // items: "> tr:not(:first)",
        appendTo: "parent",
        helper: "clone",
        cursor: "move",
        zIndex: 999990,        receive: function () {
            alert("The ajax should be called");
        }
    });
});

$(document).ready(function(){
$('body').on('click','#table1 tbody tr td input.checkmark',function(){

	var row = $(this).closest('tr').clone();
     $('#tbody2').append(row);
         $(this).closest('tr').remove();

    });

$('body').on('click','#table2 tbody tr td input.checkmark',function(){

	//if( !$(this).prop('checked')){
    var row = $(this).closest('tr').clone();
     $('#fake').prepend(row);
         $(this).closest('tr').remove();
   // }

});
})


//FUNCTION FOR CHANGING CLASS

$(document).ready(function(){

	$('[name="salary"]').change(function(){


    var count = $("#salary_total");

	if (count.val() < 0){
    count.removeClass("good");
   	count.addClass("over");
  } else{
	 count.addClass("good");
   		count.removeClass("over");
  }
		$("#salary_total").trigger("change");
});

						  });

//FUNCTION FOR TOTALING SALARY
	 function calc(){

    var salary= $('[name="salary"]');
	var sum = 35000;

   $('[name="salary"]').each(function(){
	if (this.checked){
	   sum -= parseInt ($(this).val());
	}
		$("#salary_total").val(sum);
   });
	   };



//CLICK EVENT HANDLER
$(document).ready(function () {
	$('body').on('click','[name="salary"]',calc);
    });


//CHANGE URL LINK
 /*function url(){

    var link= $("#link");
	var url= $("['name=url']").val();

   $('[name="salary"]').each(function(){
	if (this.checked){
	//  link.attr('href')==url;
		$("#advertisement") == url;
	}

   });
	   };


$(document).ready(function () {
	$('body').on('click','[name="salary"]',url);
    });*/

//Function FOR Resetting Form //
/*function clear(){
	$("#playerForm").reset();

}
	$("#reset").click(clear);*/

 $(document).ready(function () {
	  $("#link").on('click', function (event) {
        var idx = $(this).attr('href').slice(6);
        var newIdx = (idx)%3+1;
        $(this).attr("href",'#group'+newIdx);
    });
 })

$(document).ready(function () {
	$('body').on('click','[name="salary"]',url);
    });

$(document).ready(function(){
	$('body').on('change',function(){
		$("#select").hide();
	})

})



/*$("#optimizeButton").on( 'click', function(){

    $.ajax({
        type: "post",
        url:  "procedure.php",
       data: $("#playerForm").serialize(),
        success : function(text){
                alert(text);
        }
    });
});*/

$("#reset").on( 'click', function(){

    $.ajax({
        type: "post",
        url:  "truncate.php",
        data:{action:'call_this'},
        success : function(){
                alert('Data Cleared');
        }
    });
});

$("#optimizeButton").on( 'click', function(){

    $.ajax({
        type: "post",
        url:  "newProcedure.php",
       data: $("#playerForm").serialize(),
        success : function(text){
                alert(text);
        }
    });
});



/*$(document).ready(function(){
   $('#optimizeButton').on('click',function() {
     $('#tbody2').load('../final/procedure3.php');
});
});*/

function ClickFunction() {

 $('#tbody2').load('../final/newProcedure.php');


}
$('#optimizeButton').on('click',ClickFunction)

/*$(document).ready(function(){
    $("#optimizeButton").on('click',function() {
     $("#save_total").load('procedure3.php');
});
})
*/

$("#save").on( 'click', function(){

    $.ajax({
        type: "post",
        url:  "save.php",
       data: $("#playerForm").serializeArray(),
        success : function(){
                alert("Team Saved");
        }
    });

});

/*$("#user_saved").on( 'click', function(){

    $.ajax({
        type: "post",
        url:  "procedure4.php",
       data: $("#playerForm").serializeArray(),
        success : function(){
                alert("User Saved");
        }
    });

});*/

$("#pitcher").on('click',function(){

	$.ajax({
		type:"post",
		url:"sortTable.php",

	})
})

$(document).ready(function(){
	$('#optimizeButton').on('click',function(){
		$("#dollar").toggle();
	})

})
