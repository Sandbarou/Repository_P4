<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_0c39bf28106ec40a6cda8d0cfe2deb2242aa93632b434fa34c3b9fde99e68652 extends Twig_Template
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
        $__internal_acd19b6b188dfca19de1ace8f630cd12b23883c24349376bf370e907656c5dca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acd19b6b188dfca19de1ace8f630cd12b23883c24349376bf370e907656c5dca->enter($__internal_acd19b6b188dfca19de1ace8f630cd12b23883c24349376bf370e907656c5dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_ae10bee6520ede8f8bacb8a5cbadde0dc8a52f71c555baa4974770ba2246a8d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae10bee6520ede8f8bacb8a5cbadde0dc8a52f71c555baa4974770ba2246a8d2->enter($__internal_ae10bee6520ede8f8bacb8a5cbadde0dc8a52f71c555baa4974770ba2246a8d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_acd19b6b188dfca19de1ace8f630cd12b23883c24349376bf370e907656c5dca->leave($__internal_acd19b6b188dfca19de1ace8f630cd12b23883c24349376bf370e907656c5dca_prof);

        
        $__internal_ae10bee6520ede8f8bacb8a5cbadde0dc8a52f71c555baa4974770ba2246a8d2->leave($__internal_ae10bee6520ede8f8bacb8a5cbadde0dc8a52f71c555baa4974770ba2246a8d2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
