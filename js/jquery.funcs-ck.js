$(document).ready(function(){$(function(){$("[rel='tooltip']").tooltip()});$("#posts").tooltip();$("#menu-toggle").click(function(e){e.preventDefault();$("#wrapper").toggleClass("active")});$("input").keyup(function(e){e.keyCode==13&&$(".wpgmaps_get_directions").click()});$("li.page_item").click(function(){window.location=$(this).find("a").attr("href");return!1});$(".team").click(function(){window.location=$(this).find("a").attr("href");return!1})});