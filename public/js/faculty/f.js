 $(function() {
     console.log("load js");
     $("#delete").on("click",showDialog);     

});
function showDialog(e){
    e.preventDefault();
    console.log('show dialog');
$( "#dialog-confirm" ).dialog({
resizable: false,
height:140,
modal: false,
buttons: {
"Delete all items": function() {
$( this ).dialog( "close" );
console.log()
var url = $(this).prev().attr("href");
console.log(url);
},
Cancel: function() {
$( this ).dialog( "close" );
}
}
});
return false;
}