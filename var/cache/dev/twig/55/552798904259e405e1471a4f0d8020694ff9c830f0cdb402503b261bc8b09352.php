<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_7eb1ca209e4a6f678007f9191e858357989bf15e9a1f2f6dcfbd7477eac6d2e6 extends Twig_Template
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
        $__internal_91465f104bf86aba02bbd2bdebb2ef8dd91e7b524ee2d84588aeb8e94353ade9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91465f104bf86aba02bbd2bdebb2ef8dd91e7b524ee2d84588aeb8e94353ade9->enter($__internal_91465f104bf86aba02bbd2bdebb2ef8dd91e7b524ee2d84588aeb8e94353ade9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_bb8b96102b5f50078c8d14f27c125cd4afb5d9d0e30448c748d5f849e6a23ed9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb8b96102b5f50078c8d14f27c125cd4afb5d9d0e30448c748d5f849e6a23ed9->enter($__internal_bb8b96102b5f50078c8d14f27c125cd4afb5d9d0e30448c748d5f849e6a23ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_91465f104bf86aba02bbd2bdebb2ef8dd91e7b524ee2d84588aeb8e94353ade9->leave($__internal_91465f104bf86aba02bbd2bdebb2ef8dd91e7b524ee2d84588aeb8e94353ade9_prof);

        
        $__internal_bb8b96102b5f50078c8d14f27c125cd4afb5d9d0e30448c748d5f849e6a23ed9->leave($__internal_bb8b96102b5f50078c8d14f27c125cd4afb5d9d0e30448c748d5f849e6a23ed9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
