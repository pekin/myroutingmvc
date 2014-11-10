{% extends "template_view.php" %}
{% block title %}
Наши контакты
{% endblock %}
{% block content %}
{% for myrow in data %}

{{ myrow.text }}</br></br></br></br></br></br></br></br></br></br></br></br>

{% endfor %}
{% endblock %}

