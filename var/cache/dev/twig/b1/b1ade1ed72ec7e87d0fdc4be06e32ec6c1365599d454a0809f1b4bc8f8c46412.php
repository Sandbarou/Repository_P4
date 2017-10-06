<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_9d475fb8f7d7590877abafd14afacceec090b441375fed86176457c377d87a5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_275e0a48bd771261a63ad5dd57dfcfa8196ff9366c553d9bdc7937bf4555c0d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_275e0a48bd771261a63ad5dd57dfcfa8196ff9366c553d9bdc7937bf4555c0d7->enter($__internal_275e0a48bd771261a63ad5dd57dfcfa8196ff9366c553d9bdc7937bf4555c0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_2d0aa5374163c8a45a0e9cefb7305d73ef5617a4526917a4467566d00cc309ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d0aa5374163c8a45a0e9cefb7305d73ef5617a4526917a4467566d00cc309ff->enter($__internal_2d0aa5374163c8a45a0e9cefb7305d73ef5617a4526917a4467566d00cc309ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_275e0a48bd771261a63ad5dd57dfcfa8196ff9366c553d9bdc7937bf4555c0d7->leave($__internal_275e0a48bd771261a63ad5dd57dfcfa8196ff9366c553d9bdc7937bf4555c0d7_prof);

        
        $__internal_2d0aa5374163c8a45a0e9cefb7305d73ef5617a4526917a4467566d00cc309ff->leave($__internal_2d0aa5374163c8a45a0e9cefb7305d73ef5617a4526917a4467566d00cc309ff_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d7785735587c01fa761e31c7b3f0dc4b0e58a031ac6d8842c769c5bf3d3a88bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7785735587c01fa761e31c7b3f0dc4b0e58a031ac6d8842c769c5bf3d3a88bb->enter($__internal_d7785735587c01fa761e31c7b3f0dc4b0e58a031ac6d8842c769c5bf3d3a88bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2724ec7291f1a2f499a2ca38121015a1b9dd4a7b5b4e6c4626b1d71f294250e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2724ec7291f1a2f499a2ca38121015a1b9dd4a7b5b4e6c4626b1d71f294250e0->enter($__internal_2724ec7291f1a2f499a2ca38121015a1b9dd4a7b5b4e6c4626b1d71f294250e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2724ec7291f1a2f499a2ca38121015a1b9dd4a7b5b4e6c4626b1d71f294250e0->leave($__internal_2724ec7291f1a2f499a2ca38121015a1b9dd4a7b5b4e6c4626b1d71f294250e0_prof);

        
        $__internal_d7785735587c01fa761e31c7b3f0dc4b0e58a031ac6d8842c769c5bf3d3a88bb->leave($__internal_d7785735587c01fa761e31c7b3f0dc4b0e58a031ac6d8842c769c5bf3d3a88bb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8ee98b4b4183d3b2d3fb98059ce7a0ef9b230c4768a29c9e47bd458c60e54a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8ee98b4b4183d3b2d3fb98059ce7a0ef9b230c4768a29c9e47bd458c60e54a6->enter($__internal_c8ee98b4b4183d3b2d3fb98059ce7a0ef9b230c4768a29c9e47bd458c60e54a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6189189017de06c36ecf640f823788e21eaec3a3084e190705d46ebe7b59c978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6189189017de06c36ecf640f823788e21eaec3a3084e190705d46ebe7b59c978->enter($__internal_6189189017de06c36ecf640f823788e21eaec3a3084e190705d46ebe7b59c978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_6189189017de06c36ecf640f823788e21eaec3a3084e190705d46ebe7b59c978->leave($__internal_6189189017de06c36ecf640f823788e21eaec3a3084e190705d46ebe7b59c978_prof);

        
        $__internal_c8ee98b4b4183d3b2d3fb98059ce7a0ef9b230c4768a29c9e47bd458c60e54a6->leave($__internal_c8ee98b4b4183d3b2d3fb98059ce7a0ef9b230c4768a29c9e47bd458c60e54a6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
