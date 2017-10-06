<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_4952a27076e1fdea074c85b10f3313a6f4d4d8e9804f48e4efd9afd0c702bfe8 extends Twig_Template
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
        $__internal_75f793e3274c4a82596ac8632ccc18304547a1b2aa2525f87c3b1f22297190c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75f793e3274c4a82596ac8632ccc18304547a1b2aa2525f87c3b1f22297190c0->enter($__internal_75f793e3274c4a82596ac8632ccc18304547a1b2aa2525f87c3b1f22297190c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_64dcbb8e757e61db2511cc5cf55005ef0d6a7e4b78aacd19cfa7167c3b98fbb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64dcbb8e757e61db2511cc5cf55005ef0d6a7e4b78aacd19cfa7167c3b98fbb8->enter($__internal_64dcbb8e757e61db2511cc5cf55005ef0d6a7e4b78aacd19cfa7167c3b98fbb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_75f793e3274c4a82596ac8632ccc18304547a1b2aa2525f87c3b1f22297190c0->leave($__internal_75f793e3274c4a82596ac8632ccc18304547a1b2aa2525f87c3b1f22297190c0_prof);

        
        $__internal_64dcbb8e757e61db2511cc5cf55005ef0d6a7e4b78aacd19cfa7167c3b98fbb8->leave($__internal_64dcbb8e757e61db2511cc5cf55005ef0d6a7e4b78aacd19cfa7167c3b98fbb8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
