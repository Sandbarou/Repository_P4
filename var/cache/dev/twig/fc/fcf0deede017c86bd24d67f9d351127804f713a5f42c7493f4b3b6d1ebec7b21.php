<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_8f2d9ae057f0cfd2b48075d80c12d22c2107139cac04d734afac7555a37e4d4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_d3abb34335ddeab4cb8482e5d8070ab4309fa5bf065f6a682438de411d225c4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3abb34335ddeab4cb8482e5d8070ab4309fa5bf065f6a682438de411d225c4d->enter($__internal_d3abb34335ddeab4cb8482e5d8070ab4309fa5bf065f6a682438de411d225c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_f279e5ffb9691b0f72bf9acd2704ce6cce23a540b55c9906b988389f67799f50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f279e5ffb9691b0f72bf9acd2704ce6cce23a540b55c9906b988389f67799f50->enter($__internal_f279e5ffb9691b0f72bf9acd2704ce6cce23a540b55c9906b988389f67799f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3abb34335ddeab4cb8482e5d8070ab4309fa5bf065f6a682438de411d225c4d->leave($__internal_d3abb34335ddeab4cb8482e5d8070ab4309fa5bf065f6a682438de411d225c4d_prof);

        
        $__internal_f279e5ffb9691b0f72bf9acd2704ce6cce23a540b55c9906b988389f67799f50->leave($__internal_f279e5ffb9691b0f72bf9acd2704ce6cce23a540b55c9906b988389f67799f50_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d04de14f8e0fa8fd488714ca012604d97b688d7fe58bd7cf8da4d46ca0251fe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d04de14f8e0fa8fd488714ca012604d97b688d7fe58bd7cf8da4d46ca0251fe2->enter($__internal_d04de14f8e0fa8fd488714ca012604d97b688d7fe58bd7cf8da4d46ca0251fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_655663ff843818146343a03465aff2e1e663a72476c38e3ef9a96401cdf7011a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_655663ff843818146343a03465aff2e1e663a72476c38e3ef9a96401cdf7011a->enter($__internal_655663ff843818146343a03465aff2e1e663a72476c38e3ef9a96401cdf7011a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_655663ff843818146343a03465aff2e1e663a72476c38e3ef9a96401cdf7011a->leave($__internal_655663ff843818146343a03465aff2e1e663a72476c38e3ef9a96401cdf7011a_prof);

        
        $__internal_d04de14f8e0fa8fd488714ca012604d97b688d7fe58bd7cf8da4d46ca0251fe2->leave($__internal_d04de14f8e0fa8fd488714ca012604d97b688d7fe58bd7cf8da4d46ca0251fe2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_26dc3725ac68f14d1bd1179c54949e04b7ea6f911371becbd2e4a39f26292c38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26dc3725ac68f14d1bd1179c54949e04b7ea6f911371becbd2e4a39f26292c38->enter($__internal_26dc3725ac68f14d1bd1179c54949e04b7ea6f911371becbd2e4a39f26292c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1b672733c27e087db120dc8478bd3d0ec7e4d01652be1d47f7c29f1e6d4ea3df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b672733c27e087db120dc8478bd3d0ec7e4d01652be1d47f7c29f1e6d4ea3df->enter($__internal_1b672733c27e087db120dc8478bd3d0ec7e4d01652be1d47f7c29f1e6d4ea3df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_1b672733c27e087db120dc8478bd3d0ec7e4d01652be1d47f7c29f1e6d4ea3df->leave($__internal_1b672733c27e087db120dc8478bd3d0ec7e4d01652be1d47f7c29f1e6d4ea3df_prof);

        
        $__internal_26dc3725ac68f14d1bd1179c54949e04b7ea6f911371becbd2e4a39f26292c38->leave($__internal_26dc3725ac68f14d1bd1179c54949e04b7ea6f911371becbd2e4a39f26292c38_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4d7a662df03f7e931c4f70c72769f466608b78b25b06b4aca38f4b150cf3b1f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d7a662df03f7e931c4f70c72769f466608b78b25b06b4aca38f4b150cf3b1f9->enter($__internal_4d7a662df03f7e931c4f70c72769f466608b78b25b06b4aca38f4b150cf3b1f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0612d5d732be88d8b8545283baa7ceeed3e570dd36c36083fe05e6406a0a6794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0612d5d732be88d8b8545283baa7ceeed3e570dd36c36083fe05e6406a0a6794->enter($__internal_0612d5d732be88d8b8545283baa7ceeed3e570dd36c36083fe05e6406a0a6794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_0612d5d732be88d8b8545283baa7ceeed3e570dd36c36083fe05e6406a0a6794->leave($__internal_0612d5d732be88d8b8545283baa7ceeed3e570dd36c36083fe05e6406a0a6794_prof);

        
        $__internal_4d7a662df03f7e931c4f70c72769f466608b78b25b06b4aca38f4b150cf3b1f9->leave($__internal_4d7a662df03f7e931c4f70c72769f466608b78b25b06b4aca38f4b150cf3b1f9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
