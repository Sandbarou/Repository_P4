<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_d0f7cba7771f43674cd7795c2c95d50753c80dcabcb1af1255fd8a0e0dda0a5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e184d5193c24f4bd041b5fb459464a7178caabf9b7e015b7ad8cebb70bdecb7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e184d5193c24f4bd041b5fb459464a7178caabf9b7e015b7ad8cebb70bdecb7d->enter($__internal_e184d5193c24f4bd041b5fb459464a7178caabf9b7e015b7ad8cebb70bdecb7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_6c55bcbb881dcdee850517c9c7f61122db18ce1ee96cb5e60095a390bc3d2a7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c55bcbb881dcdee850517c9c7f61122db18ce1ee96cb5e60095a390bc3d2a7b->enter($__internal_6c55bcbb881dcdee850517c9c7f61122db18ce1ee96cb5e60095a390bc3d2a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e184d5193c24f4bd041b5fb459464a7178caabf9b7e015b7ad8cebb70bdecb7d->leave($__internal_e184d5193c24f4bd041b5fb459464a7178caabf9b7e015b7ad8cebb70bdecb7d_prof);

        
        $__internal_6c55bcbb881dcdee850517c9c7f61122db18ce1ee96cb5e60095a390bc3d2a7b->leave($__internal_6c55bcbb881dcdee850517c9c7f61122db18ce1ee96cb5e60095a390bc3d2a7b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cd554dd57e4e331006861d7f593dfe92a8aee98eb78213bf367d85f646919bf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd554dd57e4e331006861d7f593dfe92a8aee98eb78213bf367d85f646919bf3->enter($__internal_cd554dd57e4e331006861d7f593dfe92a8aee98eb78213bf367d85f646919bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b25558740bbfb67fcc22eb9c2e65890dce3ad868762d1aa4ec22865684788e8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b25558740bbfb67fcc22eb9c2e65890dce3ad868762d1aa4ec22865684788e8e->enter($__internal_b25558740bbfb67fcc22eb9c2e65890dce3ad868762d1aa4ec22865684788e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b25558740bbfb67fcc22eb9c2e65890dce3ad868762d1aa4ec22865684788e8e->leave($__internal_b25558740bbfb67fcc22eb9c2e65890dce3ad868762d1aa4ec22865684788e8e_prof);

        
        $__internal_cd554dd57e4e331006861d7f593dfe92a8aee98eb78213bf367d85f646919bf3->leave($__internal_cd554dd57e4e331006861d7f593dfe92a8aee98eb78213bf367d85f646919bf3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_163195f0cca2440a9629ffba0d2d997c88872e50bfa76d1904df3de93ffb8cdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_163195f0cca2440a9629ffba0d2d997c88872e50bfa76d1904df3de93ffb8cdc->enter($__internal_163195f0cca2440a9629ffba0d2d997c88872e50bfa76d1904df3de93ffb8cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2fe37115ba4d00b770e80afb5301ea787fcd72fe7c1e5610f90732427f1f9320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fe37115ba4d00b770e80afb5301ea787fcd72fe7c1e5610f90732427f1f9320->enter($__internal_2fe37115ba4d00b770e80afb5301ea787fcd72fe7c1e5610f90732427f1f9320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2fe37115ba4d00b770e80afb5301ea787fcd72fe7c1e5610f90732427f1f9320->leave($__internal_2fe37115ba4d00b770e80afb5301ea787fcd72fe7c1e5610f90732427f1f9320_prof);

        
        $__internal_163195f0cca2440a9629ffba0d2d997c88872e50bfa76d1904df3de93ffb8cdc->leave($__internal_163195f0cca2440a9629ffba0d2d997c88872e50bfa76d1904df3de93ffb8cdc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_43c19dac9ab4b9b5772883ca1f7ea66b4ca52e35be83520d2965f48d8128a7d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43c19dac9ab4b9b5772883ca1f7ea66b4ca52e35be83520d2965f48d8128a7d9->enter($__internal_43c19dac9ab4b9b5772883ca1f7ea66b4ca52e35be83520d2965f48d8128a7d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_691c80e9ac25612ad06008e6f4339d8fd35f90cfadddbf451afdb87a57de0079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_691c80e9ac25612ad06008e6f4339d8fd35f90cfadddbf451afdb87a57de0079->enter($__internal_691c80e9ac25612ad06008e6f4339d8fd35f90cfadddbf451afdb87a57de0079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_691c80e9ac25612ad06008e6f4339d8fd35f90cfadddbf451afdb87a57de0079->leave($__internal_691c80e9ac25612ad06008e6f4339d8fd35f90cfadddbf451afdb87a57de0079_prof);

        
        $__internal_43c19dac9ab4b9b5772883ca1f7ea66b4ca52e35be83520d2965f48d8128a7d9->leave($__internal_43c19dac9ab4b9b5772883ca1f7ea66b4ca52e35be83520d2965f48d8128a7d9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
