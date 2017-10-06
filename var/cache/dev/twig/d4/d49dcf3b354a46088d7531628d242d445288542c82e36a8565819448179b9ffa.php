<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_5d5f0c4efd9121f5fc1122145e1dfce1002b91a600712c16d292ecf50732336e extends Twig_Template
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
        $__internal_860d258e75c5e9934b35146a4a8c6c0f2208f1048468a19762cb9c32f5dd65c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_860d258e75c5e9934b35146a4a8c6c0f2208f1048468a19762cb9c32f5dd65c6->enter($__internal_860d258e75c5e9934b35146a4a8c6c0f2208f1048468a19762cb9c32f5dd65c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_e6f5960b3ca66d2a064bf519ff162d19a83a7c6e3602d7940dd4093bc4b03009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6f5960b3ca66d2a064bf519ff162d19a83a7c6e3602d7940dd4093bc4b03009->enter($__internal_e6f5960b3ca66d2a064bf519ff162d19a83a7c6e3602d7940dd4093bc4b03009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_860d258e75c5e9934b35146a4a8c6c0f2208f1048468a19762cb9c32f5dd65c6->leave($__internal_860d258e75c5e9934b35146a4a8c6c0f2208f1048468a19762cb9c32f5dd65c6_prof);

        
        $__internal_e6f5960b3ca66d2a064bf519ff162d19a83a7c6e3602d7940dd4093bc4b03009->leave($__internal_e6f5960b3ca66d2a064bf519ff162d19a83a7c6e3602d7940dd4093bc4b03009_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
