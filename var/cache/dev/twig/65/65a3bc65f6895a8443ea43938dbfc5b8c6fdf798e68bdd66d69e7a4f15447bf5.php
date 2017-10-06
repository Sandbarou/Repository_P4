<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_1f9d97c675f70e9c43c470474d792c83d55c06e4224d44e8a030c5d8ba7b6da0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_4b8ea88489e7e5fe462dd4addd8fbba224152944f44c0dcd5fce9958c5881a95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b8ea88489e7e5fe462dd4addd8fbba224152944f44c0dcd5fce9958c5881a95->enter($__internal_4b8ea88489e7e5fe462dd4addd8fbba224152944f44c0dcd5fce9958c5881a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_274131db6a96d933cd31b3dd9a34fbc50e400dfdadad5c22b31e221d2b3b302b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_274131db6a96d933cd31b3dd9a34fbc50e400dfdadad5c22b31e221d2b3b302b->enter($__internal_274131db6a96d933cd31b3dd9a34fbc50e400dfdadad5c22b31e221d2b3b302b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b8ea88489e7e5fe462dd4addd8fbba224152944f44c0dcd5fce9958c5881a95->leave($__internal_4b8ea88489e7e5fe462dd4addd8fbba224152944f44c0dcd5fce9958c5881a95_prof);

        
        $__internal_274131db6a96d933cd31b3dd9a34fbc50e400dfdadad5c22b31e221d2b3b302b->leave($__internal_274131db6a96d933cd31b3dd9a34fbc50e400dfdadad5c22b31e221d2b3b302b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d55b82d0704fec3fcb9aba44b980b1abc5885df674b937c9f376c7cef06d6bdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d55b82d0704fec3fcb9aba44b980b1abc5885df674b937c9f376c7cef06d6bdb->enter($__internal_d55b82d0704fec3fcb9aba44b980b1abc5885df674b937c9f376c7cef06d6bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6745f72eba81273243b90d22b3597ff9b1f7999fe849189d98ed06071d4249b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6745f72eba81273243b90d22b3597ff9b1f7999fe849189d98ed06071d4249b8->enter($__internal_6745f72eba81273243b90d22b3597ff9b1f7999fe849189d98ed06071d4249b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_6745f72eba81273243b90d22b3597ff9b1f7999fe849189d98ed06071d4249b8->leave($__internal_6745f72eba81273243b90d22b3597ff9b1f7999fe849189d98ed06071d4249b8_prof);

        
        $__internal_d55b82d0704fec3fcb9aba44b980b1abc5885df674b937c9f376c7cef06d6bdb->leave($__internal_d55b82d0704fec3fcb9aba44b980b1abc5885df674b937c9f376c7cef06d6bdb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
