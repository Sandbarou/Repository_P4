<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_29d9b8a012144ba4266eb3f1e51ab5724e29708edb2bd0e9a04564b53b10bcb5 extends Twig_Template
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
        $__internal_d4fabcba9d3238d1a958540e46fd694b6e813b387123d1e2612bf5fe5290712a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4fabcba9d3238d1a958540e46fd694b6e813b387123d1e2612bf5fe5290712a->enter($__internal_d4fabcba9d3238d1a958540e46fd694b6e813b387123d1e2612bf5fe5290712a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_dcaeb7e8908b7294115e2fb540a9c17b46e58c3d9a8b22a910a94934427a625b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcaeb7e8908b7294115e2fb540a9c17b46e58c3d9a8b22a910a94934427a625b->enter($__internal_dcaeb7e8908b7294115e2fb540a9c17b46e58c3d9a8b22a910a94934427a625b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_d4fabcba9d3238d1a958540e46fd694b6e813b387123d1e2612bf5fe5290712a->leave($__internal_d4fabcba9d3238d1a958540e46fd694b6e813b387123d1e2612bf5fe5290712a_prof);

        
        $__internal_dcaeb7e8908b7294115e2fb540a9c17b46e58c3d9a8b22a910a94934427a625b->leave($__internal_dcaeb7e8908b7294115e2fb540a9c17b46e58c3d9a8b22a910a94934427a625b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
