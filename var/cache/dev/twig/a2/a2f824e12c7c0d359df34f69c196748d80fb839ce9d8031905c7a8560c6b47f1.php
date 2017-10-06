<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_9b3aa77c4da7542a8080a9e23f73e33665102de677ec648943af608d4dc1cd67 extends Twig_Template
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
        $__internal_91d6dae60184b273d439619f8b17f10ee9f00c400c95b02eeef70aad883be56c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91d6dae60184b273d439619f8b17f10ee9f00c400c95b02eeef70aad883be56c->enter($__internal_91d6dae60184b273d439619f8b17f10ee9f00c400c95b02eeef70aad883be56c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_ad4396e70c038a436b2a724ee5f933a60c29e4956ca7915a249d81bf7ce18cae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad4396e70c038a436b2a724ee5f933a60c29e4956ca7915a249d81bf7ce18cae->enter($__internal_ad4396e70c038a436b2a724ee5f933a60c29e4956ca7915a249d81bf7ce18cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_91d6dae60184b273d439619f8b17f10ee9f00c400c95b02eeef70aad883be56c->leave($__internal_91d6dae60184b273d439619f8b17f10ee9f00c400c95b02eeef70aad883be56c_prof);

        
        $__internal_ad4396e70c038a436b2a724ee5f933a60c29e4956ca7915a249d81bf7ce18cae->leave($__internal_ad4396e70c038a436b2a724ee5f933a60c29e4956ca7915a249d81bf7ce18cae_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
