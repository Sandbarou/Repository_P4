<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_88a1da36d6581a1f8cbbebd82c03bc5b99db32bb3c690060debd6cb7512e66a3 extends Twig_Template
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
        $__internal_7df4438d8829ba92da5a878a7d10a957c79e59dac66275ac3faf04eb6735acda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7df4438d8829ba92da5a878a7d10a957c79e59dac66275ac3faf04eb6735acda->enter($__internal_7df4438d8829ba92da5a878a7d10a957c79e59dac66275ac3faf04eb6735acda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_49de999f745ab4ed6795b4af1185db0f409a617c2490dd8195a23adfc4310f2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49de999f745ab4ed6795b4af1185db0f409a617c2490dd8195a23adfc4310f2e->enter($__internal_49de999f745ab4ed6795b4af1185db0f409a617c2490dd8195a23adfc4310f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_7df4438d8829ba92da5a878a7d10a957c79e59dac66275ac3faf04eb6735acda->leave($__internal_7df4438d8829ba92da5a878a7d10a957c79e59dac66275ac3faf04eb6735acda_prof);

        
        $__internal_49de999f745ab4ed6795b4af1185db0f409a617c2490dd8195a23adfc4310f2e->leave($__internal_49de999f745ab4ed6795b4af1185db0f409a617c2490dd8195a23adfc4310f2e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
