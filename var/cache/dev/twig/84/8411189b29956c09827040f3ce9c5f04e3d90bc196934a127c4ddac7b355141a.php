<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_bf8ed3c6a725e6de382e0ac4e9cf0050be09b5da19eb771f08b5505dcd0fb67f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_def14a66bba381f8ebcef5baaad7db2b66f98cf0ec263fd86ef53ee6e9f166e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_def14a66bba381f8ebcef5baaad7db2b66f98cf0ec263fd86ef53ee6e9f166e2->enter($__internal_def14a66bba381f8ebcef5baaad7db2b66f98cf0ec263fd86ef53ee6e9f166e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_e8699493c2585d1499da7d8b81ffa79132c6f3404c1d019e04c094a4373ff834 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8699493c2585d1499da7d8b81ffa79132c6f3404c1d019e04c094a4373ff834->enter($__internal_e8699493c2585d1499da7d8b81ffa79132c6f3404c1d019e04c094a4373ff834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_def14a66bba381f8ebcef5baaad7db2b66f98cf0ec263fd86ef53ee6e9f166e2->leave($__internal_def14a66bba381f8ebcef5baaad7db2b66f98cf0ec263fd86ef53ee6e9f166e2_prof);

        
        $__internal_e8699493c2585d1499da7d8b81ffa79132c6f3404c1d019e04c094a4373ff834->leave($__internal_e8699493c2585d1499da7d8b81ffa79132c6f3404c1d019e04c094a4373ff834_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_445540c5fd6bd87eab5af0bbc9ce30f9796983e5839f07d7f22a29209f8a5863 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_445540c5fd6bd87eab5af0bbc9ce30f9796983e5839f07d7f22a29209f8a5863->enter($__internal_445540c5fd6bd87eab5af0bbc9ce30f9796983e5839f07d7f22a29209f8a5863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_52b350cecf004289fc68f5bff9a985304c823728a0442f2aa32418f698f15ee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52b350cecf004289fc68f5bff9a985304c823728a0442f2aa32418f698f15ee1->enter($__internal_52b350cecf004289fc68f5bff9a985304c823728a0442f2aa32418f698f15ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_52b350cecf004289fc68f5bff9a985304c823728a0442f2aa32418f698f15ee1->leave($__internal_52b350cecf004289fc68f5bff9a985304c823728a0442f2aa32418f698f15ee1_prof);

        
        $__internal_445540c5fd6bd87eab5af0bbc9ce30f9796983e5839f07d7f22a29209f8a5863->leave($__internal_445540c5fd6bd87eab5af0bbc9ce30f9796983e5839f07d7f22a29209f8a5863_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f622ef1c76a57d2f5ee7dd7b6a2cf3dd5285fa0399304a5ea982aaac03ccdc83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f622ef1c76a57d2f5ee7dd7b6a2cf3dd5285fa0399304a5ea982aaac03ccdc83->enter($__internal_f622ef1c76a57d2f5ee7dd7b6a2cf3dd5285fa0399304a5ea982aaac03ccdc83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_da174e1da86471bc1cc6fe64852000534c4c3f5816052f536e3ed4027330a231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da174e1da86471bc1cc6fe64852000534c4c3f5816052f536e3ed4027330a231->enter($__internal_da174e1da86471bc1cc6fe64852000534c4c3f5816052f536e3ed4027330a231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_da174e1da86471bc1cc6fe64852000534c4c3f5816052f536e3ed4027330a231->leave($__internal_da174e1da86471bc1cc6fe64852000534c4c3f5816052f536e3ed4027330a231_prof);

        
        $__internal_f622ef1c76a57d2f5ee7dd7b6a2cf3dd5285fa0399304a5ea982aaac03ccdc83->leave($__internal_f622ef1c76a57d2f5ee7dd7b6a2cf3dd5285fa0399304a5ea982aaac03ccdc83_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
