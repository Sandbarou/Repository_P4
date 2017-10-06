<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_cfde5eceda8896ae37b1674366bae4ebf270eeb2d53de84bb87562a1d9c32b75 extends Twig_Template
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
        $__internal_a9c0d132dba691f4a614a1c16b1ebec7f50738ef6aefa2e6ebc1b053721a8562 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9c0d132dba691f4a614a1c16b1ebec7f50738ef6aefa2e6ebc1b053721a8562->enter($__internal_a9c0d132dba691f4a614a1c16b1ebec7f50738ef6aefa2e6ebc1b053721a8562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_39d096114df0587e52aa12e7c21bce67ce1ca52271f35a6890b9561c08cd11d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39d096114df0587e52aa12e7c21bce67ce1ca52271f35a6890b9561c08cd11d9->enter($__internal_39d096114df0587e52aa12e7c21bce67ce1ca52271f35a6890b9561c08cd11d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_a9c0d132dba691f4a614a1c16b1ebec7f50738ef6aefa2e6ebc1b053721a8562->leave($__internal_a9c0d132dba691f4a614a1c16b1ebec7f50738ef6aefa2e6ebc1b053721a8562_prof);

        
        $__internal_39d096114df0587e52aa12e7c21bce67ce1ca52271f35a6890b9561c08cd11d9->leave($__internal_39d096114df0587e52aa12e7c21bce67ce1ca52271f35a6890b9561c08cd11d9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
