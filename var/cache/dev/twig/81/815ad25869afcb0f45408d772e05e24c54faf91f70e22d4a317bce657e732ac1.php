<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_f313131ae50d0e4ff6dad3a418af362e3db9cb99efb172570eb9d9ae5dee963e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27c02d1284a9e0a8c1f79d4db1e484b2cfb71c4c6cd79648e1a7ab959701d22c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27c02d1284a9e0a8c1f79d4db1e484b2cfb71c4c6cd79648e1a7ab959701d22c->enter($__internal_27c02d1284a9e0a8c1f79d4db1e484b2cfb71c4c6cd79648e1a7ab959701d22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_4e6a67027d3b88d7dddde843ff4d091a87b17b0ac11336b6fd802af3764bc1d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e6a67027d3b88d7dddde843ff4d091a87b17b0ac11336b6fd802af3764bc1d4->enter($__internal_4e6a67027d3b88d7dddde843ff4d091a87b17b0ac11336b6fd802af3764bc1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27c02d1284a9e0a8c1f79d4db1e484b2cfb71c4c6cd79648e1a7ab959701d22c->leave($__internal_27c02d1284a9e0a8c1f79d4db1e484b2cfb71c4c6cd79648e1a7ab959701d22c_prof);

        
        $__internal_4e6a67027d3b88d7dddde843ff4d091a87b17b0ac11336b6fd802af3764bc1d4->leave($__internal_4e6a67027d3b88d7dddde843ff4d091a87b17b0ac11336b6fd802af3764bc1d4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_067c0b9af312140f7acc1840cbf0af0af95814b564b9e9bfbb7912ea51d00311 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_067c0b9af312140f7acc1840cbf0af0af95814b564b9e9bfbb7912ea51d00311->enter($__internal_067c0b9af312140f7acc1840cbf0af0af95814b564b9e9bfbb7912ea51d00311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a6b0d75e430d2849b421fa51d2d38a2979651f9262a17c54bdc4ac8f6145bffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6b0d75e430d2849b421fa51d2d38a2979651f9262a17c54bdc4ac8f6145bffa->enter($__internal_a6b0d75e430d2849b421fa51d2d38a2979651f9262a17c54bdc4ac8f6145bffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_a6b0d75e430d2849b421fa51d2d38a2979651f9262a17c54bdc4ac8f6145bffa->leave($__internal_a6b0d75e430d2849b421fa51d2d38a2979651f9262a17c54bdc4ac8f6145bffa_prof);

        
        $__internal_067c0b9af312140f7acc1840cbf0af0af95814b564b9e9bfbb7912ea51d00311->leave($__internal_067c0b9af312140f7acc1840cbf0af0af95814b564b9e9bfbb7912ea51d00311_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_db60e3ed9ff7485de1257c8e49694acd23e4e50877cda9c53bc0aeaa1b626fbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db60e3ed9ff7485de1257c8e49694acd23e4e50877cda9c53bc0aeaa1b626fbc->enter($__internal_db60e3ed9ff7485de1257c8e49694acd23e4e50877cda9c53bc0aeaa1b626fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9b8ef87eaca27b37b84ad0fae9495e95de1a48a33d5d488c9747c3ae654e3a9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b8ef87eaca27b37b84ad0fae9495e95de1a48a33d5d488c9747c3ae654e3a9f->enter($__internal_9b8ef87eaca27b37b84ad0fae9495e95de1a48a33d5d488c9747c3ae654e3a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_9b8ef87eaca27b37b84ad0fae9495e95de1a48a33d5d488c9747c3ae654e3a9f->leave($__internal_9b8ef87eaca27b37b84ad0fae9495e95de1a48a33d5d488c9747c3ae654e3a9f_prof);

        
        $__internal_db60e3ed9ff7485de1257c8e49694acd23e4e50877cda9c53bc0aeaa1b626fbc->leave($__internal_db60e3ed9ff7485de1257c8e49694acd23e4e50877cda9c53bc0aeaa1b626fbc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
