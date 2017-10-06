<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_80066e07492c5b29241911c3f9f6b2aeb9e45816969a125a5eca17b0129371b9 extends Twig_Template
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
        $__internal_9cb58d9e2900d227b45430fe15a39fc9e0742fcc99adb928d4fad76f8dd4cbd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cb58d9e2900d227b45430fe15a39fc9e0742fcc99adb928d4fad76f8dd4cbd6->enter($__internal_9cb58d9e2900d227b45430fe15a39fc9e0742fcc99adb928d4fad76f8dd4cbd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_6c1ccde870b972d035eec6f8aa93a9216aca9f567744dbb1a2f616378e270b7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c1ccde870b972d035eec6f8aa93a9216aca9f567744dbb1a2f616378e270b7f->enter($__internal_6c1ccde870b972d035eec6f8aa93a9216aca9f567744dbb1a2f616378e270b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_9cb58d9e2900d227b45430fe15a39fc9e0742fcc99adb928d4fad76f8dd4cbd6->leave($__internal_9cb58d9e2900d227b45430fe15a39fc9e0742fcc99adb928d4fad76f8dd4cbd6_prof);

        
        $__internal_6c1ccde870b972d035eec6f8aa93a9216aca9f567744dbb1a2f616378e270b7f->leave($__internal_6c1ccde870b972d035eec6f8aa93a9216aca9f567744dbb1a2f616378e270b7f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
", "TwigBundle:Exception:error.json.twig", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
