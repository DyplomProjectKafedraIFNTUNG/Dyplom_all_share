
    <script>
    $(function(){
    var a = new String;
    a = $('.tema').text();
    $('.tema').text('');
    var c=a.length;
    j=0;
    setInterval(function(){
    if(j<c){
    $('.tema').text($('.tema').text()+a[j]);
    j=j+1;
    }
    else {$('.tema').removeClass('after')}
    },80);
    });
    </script>

<div><h2>Студент: Долик Петро Степанович</h2><hr>
<h2>Керівник: Броновський Ігор Васильович</h2><hr>
<h3 class="tema after"><b>Тема: "Розробка алгоритмічного та програмного забезпечення клієнської частини Web-аплікації розрахунку навчального навантаження викладачів кафедри ПЗАС засобами Web UI"</b></h3></div>

 
