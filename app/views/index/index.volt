{% extends 'layouts/main.volt' %}

{% block content %}
    <h1>Accounts</h1>
    {% for account in accounts %}
        <div>account # {{ loop.index }}: {{ account }}</div>
    {% else %}
        <div>Accounts list is empty.</div>
    {% endfor %}
{% endblock %}