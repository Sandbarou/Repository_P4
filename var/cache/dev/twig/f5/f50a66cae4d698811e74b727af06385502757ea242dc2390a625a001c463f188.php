<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_d9756a7b6ab97c8689a44c4f5a4363052b74543fba2fc9f13bff1217a436edbc extends Twig_Template
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
        $__internal_23c7a540f63d3a2a38552628be5c70de364db635d78df5c47a679b5570579068 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23c7a540f63d3a2a38552628be5c70de364db635d78df5c47a679b5570579068->enter($__internal_23c7a540f63d3a2a38552628be5c70de364db635d78df5c47a679b5570579068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_261fd46c40083d38cd70966d43b59263e2c826fad4d0c3ccb9a2daa09e32b3c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_261fd46c40083d38cd70966d43b59263e2c826fad4d0c3ccb9a2daa09e32b3c0->enter($__internal_261fd46c40083d38cd70966d43b59263e2c826fad4d0c3ccb9a2daa09e32b3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_23c7a540f63d3a2a38552628be5c70de364db635d78df5c47a679b5570579068->leave($__internal_23c7a540f63d3a2a38552628be5c70de364db635d78df5c47a679b5570579068_prof);

        
        $__internal_261fd46c40083d38cd70966d43b59263e2c826fad4d0c3ccb9a2daa09e32b3c0->leave($__internal_261fd46c40083d38cd70966d43b59263e2c826fad4d0c3ccb9a2daa09e32b3c0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
