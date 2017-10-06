<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_ec560f01d2445d8e59d287ab89be9996623c879ef7cf990e0f783be477b632ba extends Twig_Template
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
        $__internal_fcb873fe64d5c1fed50079bff5781efcc8d835a1826b4ba4a7f711d9dcc12f96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcb873fe64d5c1fed50079bff5781efcc8d835a1826b4ba4a7f711d9dcc12f96->enter($__internal_fcb873fe64d5c1fed50079bff5781efcc8d835a1826b4ba4a7f711d9dcc12f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_eda464d28867ecd9a7873763ffd9212e963abe22c7de8d2838d1bfe26e080ffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eda464d28867ecd9a7873763ffd9212e963abe22c7de8d2838d1bfe26e080ffa->enter($__internal_eda464d28867ecd9a7873763ffd9212e963abe22c7de8d2838d1bfe26e080ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_fcb873fe64d5c1fed50079bff5781efcc8d835a1826b4ba4a7f711d9dcc12f96->leave($__internal_fcb873fe64d5c1fed50079bff5781efcc8d835a1826b4ba4a7f711d9dcc12f96_prof);

        
        $__internal_eda464d28867ecd9a7873763ffd9212e963abe22c7de8d2838d1bfe26e080ffa->leave($__internal_eda464d28867ecd9a7873763ffd9212e963abe22c7de8d2838d1bfe26e080ffa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
