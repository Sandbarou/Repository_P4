<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_e4cdfb6cc83c59090c82f77816c237694f97bb202e4656d04f174aca8b7958db extends Twig_Template
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
        $__internal_96efcf2da444ac6814a1debc5e5cd9ea929575187d37bff35b7636932c3bc82f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96efcf2da444ac6814a1debc5e5cd9ea929575187d37bff35b7636932c3bc82f->enter($__internal_96efcf2da444ac6814a1debc5e5cd9ea929575187d37bff35b7636932c3bc82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_4ee406adee6b1e4b67cb8d75117d2dc248ab0adc92d35bdb642045410c264063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ee406adee6b1e4b67cb8d75117d2dc248ab0adc92d35bdb642045410c264063->enter($__internal_4ee406adee6b1e4b67cb8d75117d2dc248ab0adc92d35bdb642045410c264063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_96efcf2da444ac6814a1debc5e5cd9ea929575187d37bff35b7636932c3bc82f->leave($__internal_96efcf2da444ac6814a1debc5e5cd9ea929575187d37bff35b7636932c3bc82f_prof);

        
        $__internal_4ee406adee6b1e4b67cb8d75117d2dc248ab0adc92d35bdb642045410c264063->leave($__internal_4ee406adee6b1e4b67cb8d75117d2dc248ab0adc92d35bdb642045410c264063_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
