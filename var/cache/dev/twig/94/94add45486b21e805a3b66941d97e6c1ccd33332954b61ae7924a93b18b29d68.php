<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_e47a7f33666278a95e907e1a9dc0e908d70956eda8ea729d7f3e3eb654ac250f extends Twig_Template
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
        $__internal_acad22f843a2b2e2c2242786babe792e4287bf7e0bf2e1068bce167f14f135eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acad22f843a2b2e2c2242786babe792e4287bf7e0bf2e1068bce167f14f135eb->enter($__internal_acad22f843a2b2e2c2242786babe792e4287bf7e0bf2e1068bce167f14f135eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_175b034705fefed7f853faa2325cd5b2e2a2d8bd603a5e0681f8431f9d30eca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_175b034705fefed7f853faa2325cd5b2e2a2d8bd603a5e0681f8431f9d30eca6->enter($__internal_175b034705fefed7f853faa2325cd5b2e2a2d8bd603a5e0681f8431f9d30eca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_acad22f843a2b2e2c2242786babe792e4287bf7e0bf2e1068bce167f14f135eb->leave($__internal_acad22f843a2b2e2c2242786babe792e4287bf7e0bf2e1068bce167f14f135eb_prof);

        
        $__internal_175b034705fefed7f853faa2325cd5b2e2a2d8bd603a5e0681f8431f9d30eca6->leave($__internal_175b034705fefed7f853faa2325cd5b2e2a2d8bd603a5e0681f8431f9d30eca6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
