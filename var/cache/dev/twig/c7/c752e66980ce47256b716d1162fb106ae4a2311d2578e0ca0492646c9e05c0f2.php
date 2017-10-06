<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_333c399b3bd4125742ce8e295f028aca36bbf84eca188d41204b939f0b729192 extends Twig_Template
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
        $__internal_0eca2f87374d53eb91c1efe86fad416c67812c9035008c38e3a811056dae995c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eca2f87374d53eb91c1efe86fad416c67812c9035008c38e3a811056dae995c->enter($__internal_0eca2f87374d53eb91c1efe86fad416c67812c9035008c38e3a811056dae995c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_381e0954f9db485040d8a368a51014e760500e186a28a10a1abdbecd064bf971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_381e0954f9db485040d8a368a51014e760500e186a28a10a1abdbecd064bf971->enter($__internal_381e0954f9db485040d8a368a51014e760500e186a28a10a1abdbecd064bf971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_0eca2f87374d53eb91c1efe86fad416c67812c9035008c38e3a811056dae995c->leave($__internal_0eca2f87374d53eb91c1efe86fad416c67812c9035008c38e3a811056dae995c_prof);

        
        $__internal_381e0954f9db485040d8a368a51014e760500e186a28a10a1abdbecd064bf971->leave($__internal_381e0954f9db485040d8a368a51014e760500e186a28a10a1abdbecd064bf971_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
