{% extends "template_view.php" %}
{% block title %}
Главная страница
{% endblock %}
{% block content %}
<h1>Добро пожаловать!</h1>
<p>
<div id="SinoptikInformer" style="width:250px;" class="SinoptikInformer type1c1"><div class="siHeader"><div class="siLh"><div class="siMh"><a onmousedown="siClickCount();" href="http://sinoptik.ua/" target="_blank">Погода</a><a onmousedown="siClickCount();" class="siLogo" href="http://sinoptik.ua/" target="_blank"><img src="http://informers.sinoptik.ua/img/t.gif" /></a> <span id="siHeader"></span></div></div></div><div class="siBody"><div class="siCity"><div class="siCityName"><a onmousedown="siClickCount();" href="http://sinoptik.ua/погода-харьков" target="_blank">Погода в <span>Харькове</span></a></div><div id="siCont0" class="siBodyContent"><div class="siLeft"><div class="siTerm"></div><div class="siT" id="siT0"></div><div id="weatherIco0"></div></div><div class="siInf"><p>влажность: <span id="vl0"></span></p><p>давление: <span id="dav0"></span></p><p>ветер: <span id="wind0"></span></p></div></div></div><div class="siLinks"><span>&nbsp;</span><span>&nbsp;</span></div></div><div class="siFooter"><div class="siLf"><div class="siMf"></div></div></div></div><script type="text/javascript" charset="UTF-8" src="http://informers.sinoptik.ua/js3.php?title=4&amp;wind=3&amp;cities=303027839&amp;lang=ru"></script>
</p></br></br></br></br></br>
{% endblock %}
