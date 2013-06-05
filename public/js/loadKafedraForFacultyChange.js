$(function(){
console.log("load js");
$('select#faculty').on('change',function(){
//console.log($(this).val());
var id = $(this).val();
$.ajax({
method:'get',
url:'/kohana/groups/get-kafedras/'+id,
dataType:'json',
success:function(kafedras)
{
$('#kafedra option').remove();

for(var i = 0; i < kafedras.length; i++)
{
//console.log(kafedras[i].kid + " "+kafedras[i].name);
$('#kafedra').append("<option value='"+kafedras[i].kid+"' selected='selected'>"+kafedras[i].name+"</option>");

}
}

});
});
});