<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_b179d830874389d635a339cc87e3b8d09689ff77a2384be93946df1af0ee330f extends Twig_Template
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
        $__internal_142235428be031a631db3f94a562faca9f321edc357727c9b9a365c9c0217230 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_142235428be031a631db3f94a562faca9f321edc357727c9b9a365c9c0217230->enter($__internal_142235428be031a631db3f94a562faca9f321edc357727c9b9a365c9c0217230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_99588c4351b6d8e19f63a53e2efb1a954d7989872dd5c00c4f87b241699b3602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99588c4351b6d8e19f63a53e2efb1a954d7989872dd5c00c4f87b241699b3602->enter($__internal_99588c4351b6d8e19f63a53e2efb1a954d7989872dd5c00c4f87b241699b3602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_142235428be031a631db3f94a562faca9f321edc357727c9b9a365c9c0217230->leave($__internal_142235428be031a631db3f94a562faca9f321edc357727c9b9a365c9c0217230_prof);

        
        $__internal_99588c4351b6d8e19f63a53e2efb1a954d7989872dd5c00c4f87b241699b3602->leave($__internal_99588c4351b6d8e19f63a53e2efb1a954d7989872dd5c00c4f87b241699b3602_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
