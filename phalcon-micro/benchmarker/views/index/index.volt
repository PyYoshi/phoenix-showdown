{% extends "index/layout.volt" %}
{% block content %}
<div class="jumbotron">
  <h2>Welcome to Phoenix!</h2>
  <p class="lead">Phoenix is an Elixir Web Framework targeting full-featured, fault tolerant applications with realtime functionality.</p>
</div>

<div class="row marketing">
  <div class="col-lg-6">
    <h4>Resources: {{ title }}</h4>
    <ul>
      <li>
        <a href="http://api.phoenixframework.org/">Docs</a>
      </li>
      <li>
        <a href="https://github.com/phoenixframework/phoenix">Source</a>
      </li>
    </ul>
  </div>

  <div class="col-lg-6">
    <h4>Help</h4>
    <ul>
      <li>
        <a href="https://github.com/phoenixframework/phoenix/issues?state=open">Issues</a>
      </li>
      <li>
        <a href="irc://irc.freenode.net/elixir-lang">#elixir-lang on freenode IRC</a>
      </li>
      <li>
        <a href="https://twitter.com/chris_mccord">@chris_mccord</a>
      </li>
    </ul>

    <h4>Team Members</h4>
    <ul>
      {% for member in members %}
        <li>
          {{ partial("index/bio", ['name': member['name']]) }}
        </li>
      {% endfor %}
    </ul>
  </div>
</div>
{% endblock %}
