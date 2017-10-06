<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_f7fdca09f08d6aa76a8d11998759e2d61ba6bd61a992516eb13196f8db50ba09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_957aedc02da831ee2fe3dcb50c0a71331e61f2ffa19f460799548fb672a20eba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_957aedc02da831ee2fe3dcb50c0a71331e61f2ffa19f460799548fb672a20eba->enter($__internal_957aedc02da831ee2fe3dcb50c0a71331e61f2ffa19f460799548fb672a20eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_8590f6b83c60d357e2125b19b850637976032fe73546bb9b7b281f0e7596ecf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8590f6b83c60d357e2125b19b850637976032fe73546bb9b7b281f0e7596ecf7->enter($__internal_8590f6b83c60d357e2125b19b850637976032fe73546bb9b7b281f0e7596ecf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_957aedc02da831ee2fe3dcb50c0a71331e61f2ffa19f460799548fb672a20eba->leave($__internal_957aedc02da831ee2fe3dcb50c0a71331e61f2ffa19f460799548fb672a20eba_prof);

        
        $__internal_8590f6b83c60d357e2125b19b850637976032fe73546bb9b7b281f0e7596ecf7->leave($__internal_8590f6b83c60d357e2125b19b850637976032fe73546bb9b7b281f0e7596ecf7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3a0365b711394e7e5e19cd68d327d166b660c396e486c531f47003d396988400 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a0365b711394e7e5e19cd68d327d166b660c396e486c531f47003d396988400->enter($__internal_3a0365b711394e7e5e19cd68d327d166b660c396e486c531f47003d396988400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d04800adf5f3ca77947af69556a0cad587f3582c52364585c7a4e6f0d637c1f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d04800adf5f3ca77947af69556a0cad587f3582c52364585c7a4e6f0d637c1f0->enter($__internal_d04800adf5f3ca77947af69556a0cad587f3582c52364585c7a4e6f0d637c1f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_d04800adf5f3ca77947af69556a0cad587f3582c52364585c7a4e6f0d637c1f0->leave($__internal_d04800adf5f3ca77947af69556a0cad587f3582c52364585c7a4e6f0d637c1f0_prof);

        
        $__internal_3a0365b711394e7e5e19cd68d327d166b660c396e486c531f47003d396988400->leave($__internal_3a0365b711394e7e5e19cd68d327d166b660c396e486c531f47003d396988400_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa86d388e3935c9c3c5218e55b0f73f19b1be13d53f37abcbe2771f7e9f7b871 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa86d388e3935c9c3c5218e55b0f73f19b1be13d53f37abcbe2771f7e9f7b871->enter($__internal_fa86d388e3935c9c3c5218e55b0f73f19b1be13d53f37abcbe2771f7e9f7b871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_135be56d3b1c3af57266b4cd289abf337dd7fd4a0301722865f358aad0232d98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_135be56d3b1c3af57266b4cd289abf337dd7fd4a0301722865f358aad0232d98->enter($__internal_135be56d3b1c3af57266b4cd289abf337dd7fd4a0301722865f358aad0232d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_135be56d3b1c3af57266b4cd289abf337dd7fd4a0301722865f358aad0232d98->leave($__internal_135be56d3b1c3af57266b4cd289abf337dd7fd4a0301722865f358aad0232d98_prof);

        
        $__internal_fa86d388e3935c9c3c5218e55b0f73f19b1be13d53f37abcbe2771f7e9f7b871->leave($__internal_fa86d388e3935c9c3c5218e55b0f73f19b1be13d53f37abcbe2771f7e9f7b871_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
