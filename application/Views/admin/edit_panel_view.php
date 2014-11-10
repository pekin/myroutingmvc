{% extends "template_view.php" %}
{% block title %}
Панель Управления
{% endblock %}
{% block content %}
<p><a href='{{url.generate('addnews')}}'>Добавить новость</a> | <a href='{{url.generate('quit')}}'>Выход</a></p>
<h3>Список новостей для редактирования</h3>
	{% if data %}
		{% for newsone in data %}
			<p>- <a href='{{url.generate('editnews',{id:newsone.id})}}'>{{ newsone.title }}</a></p>
		{% endfor %}
	{% endif %}
{% endblock %}
