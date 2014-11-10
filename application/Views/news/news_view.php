{% extends "template_view.php" %}
{% block title %}
Новости
{% endblock %}

{% block content %}
	{% if data %}
		{% for newsone in data %}
			<p><h3><a href='{{url.generate('newsone',{id:newsone.id})}}'>{{ newsone.title }}</a></h3></p><p>{# newsone.text #}</p>
		{% endfor %}
		
	{% endif %}
{% endblock %}

