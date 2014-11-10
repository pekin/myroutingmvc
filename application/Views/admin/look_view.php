{% extends 'template_view.php' %}
{% block title %}
Авторизация
{% endblock %}
{% block content %}
<p>
	<center>
		<div>
		<p>Авторизация:</p>
		<form method='post' action=' {{url.generate('valid')}} '>
				<p>Логин: <input type='text' name='user' size='20'/></p>
				<p>Пароль: <input type='password' name='pass' size='20'/></p>
				<input type='submit' name='submit_button' value='ВХОД'/>
				</form>
		</div>
	</center>
</p></br></br></br></br></br></br></br></br>
{% endblock %}
