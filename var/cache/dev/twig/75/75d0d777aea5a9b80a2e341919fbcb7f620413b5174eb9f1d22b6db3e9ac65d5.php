<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d0ea433c954008cc98fc4961ee87e62ea394532fe1ad525075d74e0fd9dc626d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_a6baab3bd8f16598c10d542eef8987fa21f8fb973cfbf593dad5add3d8445775 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6baab3bd8f16598c10d542eef8987fa21f8fb973cfbf593dad5add3d8445775->enter($__internal_a6baab3bd8f16598c10d542eef8987fa21f8fb973cfbf593dad5add3d8445775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f6af7ebd1ecb02bde3c3e5efcac954bbed7f8e99136f887435736ddfca7b370f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6af7ebd1ecb02bde3c3e5efcac954bbed7f8e99136f887435736ddfca7b370f->enter($__internal_f6af7ebd1ecb02bde3c3e5efcac954bbed7f8e99136f887435736ddfca7b370f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6baab3bd8f16598c10d542eef8987fa21f8fb973cfbf593dad5add3d8445775->leave($__internal_a6baab3bd8f16598c10d542eef8987fa21f8fb973cfbf593dad5add3d8445775_prof);

        
        $__internal_f6af7ebd1ecb02bde3c3e5efcac954bbed7f8e99136f887435736ddfca7b370f->leave($__internal_f6af7ebd1ecb02bde3c3e5efcac954bbed7f8e99136f887435736ddfca7b370f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_249cc4cfb8dbb860f2e4aa3804752a60043e527d96ecb9f719ee630e0045cb2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_249cc4cfb8dbb860f2e4aa3804752a60043e527d96ecb9f719ee630e0045cb2d->enter($__internal_249cc4cfb8dbb860f2e4aa3804752a60043e527d96ecb9f719ee630e0045cb2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e1dc25f307048dd119d2e97df4100bdcbaf053b9a965ae2e4948d938c93df150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1dc25f307048dd119d2e97df4100bdcbaf053b9a965ae2e4948d938c93df150->enter($__internal_e1dc25f307048dd119d2e97df4100bdcbaf053b9a965ae2e4948d938c93df150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e1dc25f307048dd119d2e97df4100bdcbaf053b9a965ae2e4948d938c93df150->leave($__internal_e1dc25f307048dd119d2e97df4100bdcbaf053b9a965ae2e4948d938c93df150_prof);

        
        $__internal_249cc4cfb8dbb860f2e4aa3804752a60043e527d96ecb9f719ee630e0045cb2d->leave($__internal_249cc4cfb8dbb860f2e4aa3804752a60043e527d96ecb9f719ee630e0045cb2d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5c059d4cd360f979ce68e0af2b350ac612799028bcae39f1b72f717dd7aeea70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c059d4cd360f979ce68e0af2b350ac612799028bcae39f1b72f717dd7aeea70->enter($__internal_5c059d4cd360f979ce68e0af2b350ac612799028bcae39f1b72f717dd7aeea70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0f61ea0dcadc8ae367d180fedd1789e779916f60b6f31d41d3048730803730c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f61ea0dcadc8ae367d180fedd1789e779916f60b6f31d41d3048730803730c1->enter($__internal_0f61ea0dcadc8ae367d180fedd1789e779916f60b6f31d41d3048730803730c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_0f61ea0dcadc8ae367d180fedd1789e779916f60b6f31d41d3048730803730c1->leave($__internal_0f61ea0dcadc8ae367d180fedd1789e779916f60b6f31d41d3048730803730c1_prof);

        
        $__internal_5c059d4cd360f979ce68e0af2b350ac612799028bcae39f1b72f717dd7aeea70->leave($__internal_5c059d4cd360f979ce68e0af2b350ac612799028bcae39f1b72f717dd7aeea70_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6433f340eb2066ed5c1219bacdc17674861a8bf778e5ca8d3470622a582f99a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6433f340eb2066ed5c1219bacdc17674861a8bf778e5ca8d3470622a582f99a2->enter($__internal_6433f340eb2066ed5c1219bacdc17674861a8bf778e5ca8d3470622a582f99a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1668847c8ff162e1dc6fc6e717f7f47faae96c96a84a60431962474b8f0e4d54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1668847c8ff162e1dc6fc6e717f7f47faae96c96a84a60431962474b8f0e4d54->enter($__internal_1668847c8ff162e1dc6fc6e717f7f47faae96c96a84a60431962474b8f0e4d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_1668847c8ff162e1dc6fc6e717f7f47faae96c96a84a60431962474b8f0e4d54->leave($__internal_1668847c8ff162e1dc6fc6e717f7f47faae96c96a84a60431962474b8f0e4d54_prof);

        
        $__internal_6433f340eb2066ed5c1219bacdc17674861a8bf778e5ca8d3470622a582f99a2->leave($__internal_6433f340eb2066ed5c1219bacdc17674861a8bf778e5ca8d3470622a582f99a2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
