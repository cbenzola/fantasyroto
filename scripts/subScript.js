"use strict";

$(document).ready(function(){
	
	/* $("#stats_nav_type_batting").click(function(){
        $("#content").load("./players/trout.php");
      setCookie();
		 getCookie();
		 
	 });
	 

 $("#stats_nav_type_fielding").click(function(){
        $("#content").load("./players/trout_fielding.php");
      setCookie();
		 getCookie();
		 
	 }); */
	
	$(function(){
      $("#nav").load("../final/nav.php"); 
    });
	
	$('.card').click(function(){$('.card').toggleClass('applyflip');}.bind(this));

	
	/*$(function(){
      $("#searchbar").load("search.html"); 
    });*/
	
	function openTab(evt, playerStat) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("stat_view");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(playerStat).style.display = "block";
  evt.currentTarget.className += " active";
}
	

	
		
	
	/*function showHint(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "xmlSearch.php?q="+str, true);
  xhttp.send();   
}*/
	


   
});

function setCookie(c_name, value, exdays) {
    var exdate = new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var c_value = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toUTCString());
    document.cookie = c_name + "=" + c_value;
}

function getCookie(c_name) {
    var i, x, y, ARRcookies = document.cookie.split(";");
    for (i = 0; i < ARRcookies.length; i++) {
        x = ARRcookies[i].substr(0, ARRcookies[i].indexOf("="));
        y = ARRcookies[i].substr(ARRcookies[i].indexOf("=") + 1);
        x = x.replace(/^\s+|\s+$/g, "");
        if (x == c_name) {
            return unescape(y);
        }
    }
}

	 
// JavaScript Document