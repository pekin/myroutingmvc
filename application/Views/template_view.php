<html>
<head>
<title>{% block title %}{% endblock %}</title>
<link rel="stylesheet" type="text/css"
href="../css/style.css" />
</head>
<body>

<div id="container">
<div id="top"></div>
<div id="left">

<h2>Навигация</h2>
<div class="hr">
<hr />
</div>
<p class="side">
{% include "main/menu_view.php" %}
</p><br />

<h2>Реклама</h2>
<div class="hr">
<hr />
</div>
<p class="side">Реклама</p>

</div>

<div id="main">

{% block content %}
{% endblock %}
</div>
<div id="footer"></div>
<div id="footer2"></div>





</body>
</html>
