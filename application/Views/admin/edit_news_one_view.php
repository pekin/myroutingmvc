{% extends 'template_view.php' %}
{% block title %}
Редактирование новости
{% endblock %}
{% block content %}
<META charset='UTF-8'>
<h3>Редактировать новость</h3>

	{% for myrow in data %}
<form action=' {{url.generate('edit')}} ' method='POST'>
	<input type='hidden' name='id' value=' {{myrow.id}} '>
    <p>
    </p>
    <input type='text' size=52 name='title' value=' {{myrow.title}} '/>
    <br/>
    <p>
    </p>
    <TEXTAREA NAME='text' ROWS=10 COLS=60>{{myrow.text}}</TEXTAREA>
    <br/>
    <p>
    </p>
    <input type='submit' value='Изменить'/>
</form>
<form action='{{url.generate('del')}}' method='POST'>
	<input type='hidden' name='id' value=' {{myrow.id}} '>
	<input name='submit' type='submit' value='Удалить'/>
</form>
	{% endfor %}

{% endblock %}
