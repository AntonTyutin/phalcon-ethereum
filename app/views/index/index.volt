{% extends 'layouts/main.volt' %}

{% block content %}
    {% for account in accounts %}
        <div>Аккаунт № {{ loop.index }}: {{ account }}</div>
    {% else %}
        <div>Аккаунтов не найдено.</div>
    {% endfor %}
{% endblock %}