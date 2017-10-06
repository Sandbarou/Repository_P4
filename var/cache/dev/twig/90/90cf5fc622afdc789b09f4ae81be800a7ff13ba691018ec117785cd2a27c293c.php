<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_33727356872726efe1c610ed9d3acd7eed028a45157b20cc4d3ac9278833493f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_09399e1c4f9847ca797fe705ebef692022fe84d742ffc2975de76d02f897458d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09399e1c4f9847ca797fe705ebef692022fe84d742ffc2975de76d02f897458d->enter($__internal_09399e1c4f9847ca797fe705ebef692022fe84d742ffc2975de76d02f897458d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6d96eda4d03fc545a9abf08aa798be06a9835c728e82e20fec7d6f72930d8f19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d96eda4d03fc545a9abf08aa798be06a9835c728e82e20fec7d6f72930d8f19->enter($__internal_6d96eda4d03fc545a9abf08aa798be06a9835c728e82e20fec7d6f72930d8f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09399e1c4f9847ca797fe705ebef692022fe84d742ffc2975de76d02f897458d->leave($__internal_09399e1c4f9847ca797fe705ebef692022fe84d742ffc2975de76d02f897458d_prof);

        
        $__internal_6d96eda4d03fc545a9abf08aa798be06a9835c728e82e20fec7d6f72930d8f19->leave($__internal_6d96eda4d03fc545a9abf08aa798be06a9835c728e82e20fec7d6f72930d8f19_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_63b1fee82c069c4ba14fdb9d3e92b4287cba25048c030a59ed4059d967580636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63b1fee82c069c4ba14fdb9d3e92b4287cba25048c030a59ed4059d967580636->enter($__internal_63b1fee82c069c4ba14fdb9d3e92b4287cba25048c030a59ed4059d967580636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_eed2b07247e6af5d8aa8db5ed2fd4d3e3fe67b86c3821f6b5d1cb767fb130cd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eed2b07247e6af5d8aa8db5ed2fd4d3e3fe67b86c3821f6b5d1cb767fb130cd3->enter($__internal_eed2b07247e6af5d8aa8db5ed2fd4d3e3fe67b86c3821f6b5d1cb767fb130cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_eed2b07247e6af5d8aa8db5ed2fd4d3e3fe67b86c3821f6b5d1cb767fb130cd3->leave($__internal_eed2b07247e6af5d8aa8db5ed2fd4d3e3fe67b86c3821f6b5d1cb767fb130cd3_prof);

        
        $__internal_63b1fee82c069c4ba14fdb9d3e92b4287cba25048c030a59ed4059d967580636->leave($__internal_63b1fee82c069c4ba14fdb9d3e92b4287cba25048c030a59ed4059d967580636_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5c7825277866722562dc5eb771aad08a9611e03c490f31bc4aedc795be26c768 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c7825277866722562dc5eb771aad08a9611e03c490f31bc4aedc795be26c768->enter($__internal_5c7825277866722562dc5eb771aad08a9611e03c490f31bc4aedc795be26c768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_18f43e9995dd13ae4ea5f35ef168eac1002ea79279a8061ab44417e62ea03e6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18f43e9995dd13ae4ea5f35ef168eac1002ea79279a8061ab44417e62ea03e6d->enter($__internal_18f43e9995dd13ae4ea5f35ef168eac1002ea79279a8061ab44417e62ea03e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_18f43e9995dd13ae4ea5f35ef168eac1002ea79279a8061ab44417e62ea03e6d->leave($__internal_18f43e9995dd13ae4ea5f35ef168eac1002ea79279a8061ab44417e62ea03e6d_prof);

        
        $__internal_5c7825277866722562dc5eb771aad08a9611e03c490f31bc4aedc795be26c768->leave($__internal_5c7825277866722562dc5eb771aad08a9611e03c490f31bc4aedc795be26c768_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_192fc415df790ae11c5fceb8907d51f05592efab4d2daa3ff660a7d03f562399 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_192fc415df790ae11c5fceb8907d51f05592efab4d2daa3ff660a7d03f562399->enter($__internal_192fc415df790ae11c5fceb8907d51f05592efab4d2daa3ff660a7d03f562399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cfade75bc14d1a476934505bd871ef5e3a15d836e139d6bbcf87b78b35e1b685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfade75bc14d1a476934505bd871ef5e3a15d836e139d6bbcf87b78b35e1b685->enter($__internal_cfade75bc14d1a476934505bd871ef5e3a15d836e139d6bbcf87b78b35e1b685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cfade75bc14d1a476934505bd871ef5e3a15d836e139d6bbcf87b78b35e1b685->leave($__internal_cfade75bc14d1a476934505bd871ef5e3a15d836e139d6bbcf87b78b35e1b685_prof);

        
        $__internal_192fc415df790ae11c5fceb8907d51f05592efab4d2daa3ff660a7d03f562399->leave($__internal_192fc415df790ae11c5fceb8907d51f05592efab4d2daa3ff660a7d03f562399_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
