<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_49ce46171490374f7c700be45355443d552ded1e695eb6f34a49f9f9c80dc03b extends Twig_Template
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
        $__internal_48a1f1af3c546c64a2ca07ec254a56d47c35f1f14742a3a771319776e3fd67a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48a1f1af3c546c64a2ca07ec254a56d47c35f1f14742a3a771319776e3fd67a3->enter($__internal_48a1f1af3c546c64a2ca07ec254a56d47c35f1f14742a3a771319776e3fd67a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_cbe32b71f66d4b3aac602b4ca121fa79185073bf8db7841be427190d880082d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbe32b71f66d4b3aac602b4ca121fa79185073bf8db7841be427190d880082d6->enter($__internal_cbe32b71f66d4b3aac602b4ca121fa79185073bf8db7841be427190d880082d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_48a1f1af3c546c64a2ca07ec254a56d47c35f1f14742a3a771319776e3fd67a3->leave($__internal_48a1f1af3c546c64a2ca07ec254a56d47c35f1f14742a3a771319776e3fd67a3_prof);

        
        $__internal_cbe32b71f66d4b3aac602b4ca121fa79185073bf8db7841be427190d880082d6->leave($__internal_cbe32b71f66d4b3aac602b4ca121fa79185073bf8db7841be427190d880082d6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
