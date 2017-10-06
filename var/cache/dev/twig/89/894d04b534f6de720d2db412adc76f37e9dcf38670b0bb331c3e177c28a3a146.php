<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_ed4bc1980f0fd307bb25eee723a75fb860db2c88ca27a34fbf168cd736277e2c extends Twig_Template
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
        $__internal_f35aba5ce202b0b23af48182f469c9e8ec27b87eeee1f492dcfa9b7648e588b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f35aba5ce202b0b23af48182f469c9e8ec27b87eeee1f492dcfa9b7648e588b0->enter($__internal_f35aba5ce202b0b23af48182f469c9e8ec27b87eeee1f492dcfa9b7648e588b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_eba89022936dc465f45effc7e22342fa7730ac1bb056d3f09b07aa433be0882e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eba89022936dc465f45effc7e22342fa7730ac1bb056d3f09b07aa433be0882e->enter($__internal_eba89022936dc465f45effc7e22342fa7730ac1bb056d3f09b07aa433be0882e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_f35aba5ce202b0b23af48182f469c9e8ec27b87eeee1f492dcfa9b7648e588b0->leave($__internal_f35aba5ce202b0b23af48182f469c9e8ec27b87eeee1f492dcfa9b7648e588b0_prof);

        
        $__internal_eba89022936dc465f45effc7e22342fa7730ac1bb056d3f09b07aa433be0882e->leave($__internal_eba89022936dc465f45effc7e22342fa7730ac1bb056d3f09b07aa433be0882e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
