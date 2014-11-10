{% extends "template_view.php" %}
{% block title %}
{{ data.0.title }}
{% endblock %}
{% block content %}
{% for myrow in data %}
<p><h3>{{ myrow.title }}</h3></p><p>{{ myrow.text }} </p><p> Автор статьи: {{ myrow.user }}	 {{ myrow.date }}</br>
<a href="{{url.generate('news')}}"><< Назад</a>
{% endfor %}
{% endblock %}

