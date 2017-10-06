<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_e0e1bc3be4699194bdddaca7c999b64b9fadae57383229886b5111957a62d778 extends Twig_Template
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
        $__internal_d97e3f84a893d812061d3a11a5383d7601eef72b1fd4d4bdb5389d8e90f6af09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d97e3f84a893d812061d3a11a5383d7601eef72b1fd4d4bdb5389d8e90f6af09->enter($__internal_d97e3f84a893d812061d3a11a5383d7601eef72b1fd4d4bdb5389d8e90f6af09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_b52d6861aa3ab72354a937e5c33349b4020087ca838d0f0a172e335c8095f1f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b52d6861aa3ab72354a937e5c33349b4020087ca838d0f0a172e335c8095f1f5->enter($__internal_b52d6861aa3ab72354a937e5c33349b4020087ca838d0f0a172e335c8095f1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_d97e3f84a893d812061d3a11a5383d7601eef72b1fd4d4bdb5389d8e90f6af09->leave($__internal_d97e3f84a893d812061d3a11a5383d7601eef72b1fd4d4bdb5389d8e90f6af09_prof);

        
        $__internal_b52d6861aa3ab72354a937e5c33349b4020087ca838d0f0a172e335c8095f1f5->leave($__internal_b52d6861aa3ab72354a937e5c33349b4020087ca838d0f0a172e335c8095f1f5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
