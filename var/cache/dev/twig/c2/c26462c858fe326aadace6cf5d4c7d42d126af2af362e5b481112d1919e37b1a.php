<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_10717e70e4dde1613695948bab2fe778875a051a333a76999a4fb4354d5e0d8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a0de0788eb261850a2cf35559d5cdddf0cb077bd340b1cc743f1ab875aea54a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a0de0788eb261850a2cf35559d5cdddf0cb077bd340b1cc743f1ab875aea54a->enter($__internal_0a0de0788eb261850a2cf35559d5cdddf0cb077bd340b1cc743f1ab875aea54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_5fb3de28d31b34a5729fdd27617edf7c9bcb7e0ba6ff370ded25b9e4aecf3255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fb3de28d31b34a5729fdd27617edf7c9bcb7e0ba6ff370ded25b9e4aecf3255->enter($__internal_5fb3de28d31b34a5729fdd27617edf7c9bcb7e0ba6ff370ded25b9e4aecf3255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_0a0de0788eb261850a2cf35559d5cdddf0cb077bd340b1cc743f1ab875aea54a->leave($__internal_0a0de0788eb261850a2cf35559d5cdddf0cb077bd340b1cc743f1ab875aea54a_prof);

        
        $__internal_5fb3de28d31b34a5729fdd27617edf7c9bcb7e0ba6ff370ded25b9e4aecf3255->leave($__internal_5fb3de28d31b34a5729fdd27617edf7c9bcb7e0ba6ff370ded25b9e4aecf3255_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
