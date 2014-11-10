{% extends 'template_view.php' %}
{% block title %}
Добавить новость
{% endblock %}
{% block content %}
<META charset='UTF-8'>
<h3>Добавить новость</h3>
<form action=' {{url.generate('add')}} ' method='POST'>
    <p>
    </p>
    <input type='text' size=52 name='title'/>
    <br/>
    <p>
    </p>
    <TEXTAREA NAME='text' ROWS=10 COLS=60></TEXTAREA>
    <br/>
    <p>
    </p>
    <input type='submit' value='Добавить'/>
</form>
{% endblock %}
