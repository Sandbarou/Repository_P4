<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_20216c96a4d302674d1155eb84427ce0bde9502358e4e2a8c8bb1f0a203e2008 extends Twig_Template
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
        $__internal_212d11d74184e050210a4b8d89cacd14cb0c48ec1363746e938356aec9f9d228 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_212d11d74184e050210a4b8d89cacd14cb0c48ec1363746e938356aec9f9d228->enter($__internal_212d11d74184e050210a4b8d89cacd14cb0c48ec1363746e938356aec9f9d228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_653de663ac7651e78b621d9738da7f1a8d0d227074b85150cd88b2e07fda52db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_653de663ac7651e78b621d9738da7f1a8d0d227074b85150cd88b2e07fda52db->enter($__internal_653de663ac7651e78b621d9738da7f1a8d0d227074b85150cd88b2e07fda52db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_212d11d74184e050210a4b8d89cacd14cb0c48ec1363746e938356aec9f9d228->leave($__internal_212d11d74184e050210a4b8d89cacd14cb0c48ec1363746e938356aec9f9d228_prof);

        
        $__internal_653de663ac7651e78b621d9738da7f1a8d0d227074b85150cd88b2e07fda52db->leave($__internal_653de663ac7651e78b621d9738da7f1a8d0d227074b85150cd88b2e07fda52db_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
