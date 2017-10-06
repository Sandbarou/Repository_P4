<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_7e875c9975089864147605890b01a9989ca6ef02de594216107a6776af943e2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ebc03db861d98b93cc673c62ef803e6f17cf461d45bb94cbd946edcd71e3e09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ebc03db861d98b93cc673c62ef803e6f17cf461d45bb94cbd946edcd71e3e09->enter($__internal_3ebc03db861d98b93cc673c62ef803e6f17cf461d45bb94cbd946edcd71e3e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_3d93c524ecdff24efc67e47a2dec19be19cec372c9440408cdd9c0bc4c7ff06f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d93c524ecdff24efc67e47a2dec19be19cec372c9440408cdd9c0bc4c7ff06f->enter($__internal_3d93c524ecdff24efc67e47a2dec19be19cec372c9440408cdd9c0bc4c7ff06f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ebc03db861d98b93cc673c62ef803e6f17cf461d45bb94cbd946edcd71e3e09->leave($__internal_3ebc03db861d98b93cc673c62ef803e6f17cf461d45bb94cbd946edcd71e3e09_prof);

        
        $__internal_3d93c524ecdff24efc67e47a2dec19be19cec372c9440408cdd9c0bc4c7ff06f->leave($__internal_3d93c524ecdff24efc67e47a2dec19be19cec372c9440408cdd9c0bc4c7ff06f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b6aef6dfc90e88ce1e3ef5c7a17a09ce8dda370e98c291d68ce6f34649081a12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6aef6dfc90e88ce1e3ef5c7a17a09ce8dda370e98c291d68ce6f34649081a12->enter($__internal_b6aef6dfc90e88ce1e3ef5c7a17a09ce8dda370e98c291d68ce6f34649081a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b374130d97ac42e0279f4a586e563010eae00d196a88c69c33499b973f993bd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b374130d97ac42e0279f4a586e563010eae00d196a88c69c33499b973f993bd2->enter($__internal_b374130d97ac42e0279f4a586e563010eae00d196a88c69c33499b973f993bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_b374130d97ac42e0279f4a586e563010eae00d196a88c69c33499b973f993bd2->leave($__internal_b374130d97ac42e0279f4a586e563010eae00d196a88c69c33499b973f993bd2_prof);

        
        $__internal_b6aef6dfc90e88ce1e3ef5c7a17a09ce8dda370e98c291d68ce6f34649081a12->leave($__internal_b6aef6dfc90e88ce1e3ef5c7a17a09ce8dda370e98c291d68ce6f34649081a12_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
