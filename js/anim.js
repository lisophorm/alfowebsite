// JavaScript Document

$('#page-top').on('activate.bs.scrollspy', function () {
            var currentView = $(".nav li.active > a").parent().next().find("a").attr("href");
            //$("#skills").empty().html("Currently you are at - " + currentView);
})