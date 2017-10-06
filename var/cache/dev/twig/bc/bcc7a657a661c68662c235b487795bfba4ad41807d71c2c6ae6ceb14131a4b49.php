<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_e802ae48203caa10df6b965cb2ab99afb4a225515ea7091a202e4b5e6c656afe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
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
        $__internal_6fd12e8a0495c7b7da2d8b13e16fe25d842d9bb4dc2cc4c26d64b5d9088ddc04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fd12e8a0495c7b7da2d8b13e16fe25d842d9bb4dc2cc4c26d64b5d9088ddc04->enter($__internal_6fd12e8a0495c7b7da2d8b13e16fe25d842d9bb4dc2cc4c26d64b5d9088ddc04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_0833186010c09c0addccc66d6023181b75e512ce50b8b169c05a8fabc24c0e0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0833186010c09c0addccc66d6023181b75e512ce50b8b169c05a8fabc24c0e0b->enter($__internal_0833186010c09c0addccc66d6023181b75e512ce50b8b169c05a8fabc24c0e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fd12e8a0495c7b7da2d8b13e16fe25d842d9bb4dc2cc4c26d64b5d9088ddc04->leave($__internal_6fd12e8a0495c7b7da2d8b13e16fe25d842d9bb4dc2cc4c26d64b5d9088ddc04_prof);

        
        $__internal_0833186010c09c0addccc66d6023181b75e512ce50b8b169c05a8fabc24c0e0b->leave($__internal_0833186010c09c0addccc66d6023181b75e512ce50b8b169c05a8fabc24c0e0b_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_c2ed8cdf3cac3611e4dc8db8afb491d05056bd13cc65089d10ea9a563c53af60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2ed8cdf3cac3611e4dc8db8afb491d05056bd13cc65089d10ea9a563c53af60->enter($__internal_c2ed8cdf3cac3611e4dc8db8afb491d05056bd13cc65089d10ea9a563c53af60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_db789f2d778d67d7024d9b0108c65d36cc5898a2f55ed57da6a9cae8e0429d78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db789f2d778d67d7024d9b0108c65d36cc5898a2f55ed57da6a9cae8e0429d78->enter($__internal_db789f2d778d67d7024d9b0108c65d36cc5898a2f55ed57da6a9cae8e0429d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_db789f2d778d67d7024d9b0108c65d36cc5898a2f55ed57da6a9cae8e0429d78->leave($__internal_db789f2d778d67d7024d9b0108c65d36cc5898a2f55ed57da6a9cae8e0429d78_prof);

        
        $__internal_c2ed8cdf3cac3611e4dc8db8afb491d05056bd13cc65089d10ea9a563c53af60->leave($__internal_c2ed8cdf3cac3611e4dc8db8afb491d05056bd13cc65089d10ea9a563c53af60_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_79c5b6801bbca0d18973afa45dae9c3d7e162a1fd7d80114306fb8bb4fb0f361 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79c5b6801bbca0d18973afa45dae9c3d7e162a1fd7d80114306fb8bb4fb0f361->enter($__internal_79c5b6801bbca0d18973afa45dae9c3d7e162a1fd7d80114306fb8bb4fb0f361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_36e914aac8f7da5766bdd8dfe295d914fab09a5770c7c85a4db85940520f2227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36e914aac8f7da5766bdd8dfe295d914fab09a5770c7c85a4db85940520f2227->enter($__internal_36e914aac8f7da5766bdd8dfe295d914fab09a5770c7c85a4db85940520f2227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_36e914aac8f7da5766bdd8dfe295d914fab09a5770c7c85a4db85940520f2227->leave($__internal_36e914aac8f7da5766bdd8dfe295d914fab09a5770c7c85a4db85940520f2227_prof);

        
        $__internal_79c5b6801bbca0d18973afa45dae9c3d7e162a1fd7d80114306fb8bb4fb0f361->leave($__internal_79c5b6801bbca0d18973afa45dae9c3d7e162a1fd7d80114306fb8bb4fb0f361_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
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
", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
