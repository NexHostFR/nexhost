{% extends 'base.html.twig' %}

{% block title %}Hello NewsletterController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class="example-wrapper">
    <h1>Hello {{ controller_name }}! ✅</h1>

    This friendly message is coming from:
    <ul>
        <li>Your controller at <code>C:/Users/ThéoKILLIAN/Desktop/NxHost/src/Controller/NewsletterController.php</code></li>
        <li>Your template at <code>C:/Users/ThéoKILLIAN/Desktop/NxHost/templates/newsletter/index.html.twig</code></li>
    </ul>
</div>
{% endblock %}
