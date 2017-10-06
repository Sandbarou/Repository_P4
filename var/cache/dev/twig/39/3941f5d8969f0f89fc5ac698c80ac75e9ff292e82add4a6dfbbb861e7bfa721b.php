<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_0633b41ef6eac0dee9b183b34172b833e176738ee225193069358d95370becd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb68fdd6817143e8b0f86e750492ade3c61e68cdda4ba6d10552e867372b438e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb68fdd6817143e8b0f86e750492ade3c61e68cdda4ba6d10552e867372b438e->enter($__internal_cb68fdd6817143e8b0f86e750492ade3c61e68cdda4ba6d10552e867372b438e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_c2196d26c598b84d399ddffaef73acb70fb75bc26bc71427d3e5e1c3b2dbbd88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2196d26c598b84d399ddffaef73acb70fb75bc26bc71427d3e5e1c3b2dbbd88->enter($__internal_c2196d26c598b84d399ddffaef73acb70fb75bc26bc71427d3e5e1c3b2dbbd88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb68fdd6817143e8b0f86e750492ade3c61e68cdda4ba6d10552e867372b438e->leave($__internal_cb68fdd6817143e8b0f86e750492ade3c61e68cdda4ba6d10552e867372b438e_prof);

        
        $__internal_c2196d26c598b84d399ddffaef73acb70fb75bc26bc71427d3e5e1c3b2dbbd88->leave($__internal_c2196d26c598b84d399ddffaef73acb70fb75bc26bc71427d3e5e1c3b2dbbd88_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_20b9c605d77eb7228d1b4166deabaefc3ca91ac918d65f84f12798564898ff15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20b9c605d77eb7228d1b4166deabaefc3ca91ac918d65f84f12798564898ff15->enter($__internal_20b9c605d77eb7228d1b4166deabaefc3ca91ac918d65f84f12798564898ff15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_230dcf75db895d5982cd25fa96a3518a5d22144bbeeecfd6976c2b2302c28ed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_230dcf75db895d5982cd25fa96a3518a5d22144bbeeecfd6976c2b2302c28ed6->enter($__internal_230dcf75db895d5982cd25fa96a3518a5d22144bbeeecfd6976c2b2302c28ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_230dcf75db895d5982cd25fa96a3518a5d22144bbeeecfd6976c2b2302c28ed6->leave($__internal_230dcf75db895d5982cd25fa96a3518a5d22144bbeeecfd6976c2b2302c28ed6_prof);

        
        $__internal_20b9c605d77eb7228d1b4166deabaefc3ca91ac918d65f84f12798564898ff15->leave($__internal_20b9c605d77eb7228d1b4166deabaefc3ca91ac918d65f84f12798564898ff15_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_19bdb4963d437beb18fd54040b87b95ac495e2ee75d58fae216935c242b662fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19bdb4963d437beb18fd54040b87b95ac495e2ee75d58fae216935c242b662fa->enter($__internal_19bdb4963d437beb18fd54040b87b95ac495e2ee75d58fae216935c242b662fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8b7d4067706d565ee86939822d8a9b68e8d12777880e2dc4d1f6b043ee1f1a8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b7d4067706d565ee86939822d8a9b68e8d12777880e2dc4d1f6b043ee1f1a8b->enter($__internal_8b7d4067706d565ee86939822d8a9b68e8d12777880e2dc4d1f6b043ee1f1a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_8b7d4067706d565ee86939822d8a9b68e8d12777880e2dc4d1f6b043ee1f1a8b->leave($__internal_8b7d4067706d565ee86939822d8a9b68e8d12777880e2dc4d1f6b043ee1f1a8b_prof);

        
        $__internal_19bdb4963d437beb18fd54040b87b95ac495e2ee75d58fae216935c242b662fa->leave($__internal_19bdb4963d437beb18fd54040b87b95ac495e2ee75d58fae216935c242b662fa_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
