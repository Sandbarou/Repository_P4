<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_76cb0bd9680c7883661e1355acb7c7e173271c238c6f09cbf1f743f1d384ea40 extends Twig_Template
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
        $__internal_790c15877cdab31a4d01d40ea65c08d7221e0cfc06a0f7d11cd06945790e8d58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_790c15877cdab31a4d01d40ea65c08d7221e0cfc06a0f7d11cd06945790e8d58->enter($__internal_790c15877cdab31a4d01d40ea65c08d7221e0cfc06a0f7d11cd06945790e8d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_8e9e7782562cb8f3d3b9f0c9874796f8494168a840119a08ea2a4d703796c3e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e9e7782562cb8f3d3b9f0c9874796f8494168a840119a08ea2a4d703796c3e6->enter($__internal_8e9e7782562cb8f3d3b9f0c9874796f8494168a840119a08ea2a4d703796c3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_790c15877cdab31a4d01d40ea65c08d7221e0cfc06a0f7d11cd06945790e8d58->leave($__internal_790c15877cdab31a4d01d40ea65c08d7221e0cfc06a0f7d11cd06945790e8d58_prof);

        
        $__internal_8e9e7782562cb8f3d3b9f0c9874796f8494168a840119a08ea2a4d703796c3e6->leave($__internal_8e9e7782562cb8f3d3b9f0c9874796f8494168a840119a08ea2a4d703796c3e6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
