<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_4c80cbbc4f6e251443e356fa4168c1192c12b7acf878024bfb7970d6dfa88fc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_faa39b902bc4d607e50bda4a84ad7d9a92300cc5f4012ce6c824239af8cb80ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faa39b902bc4d607e50bda4a84ad7d9a92300cc5f4012ce6c824239af8cb80ea->enter($__internal_faa39b902bc4d607e50bda4a84ad7d9a92300cc5f4012ce6c824239af8cb80ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_22d3823fc137f7b7eab38716424678f6ddd6dccdd097071f3a7ff1dbc5dbc2f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22d3823fc137f7b7eab38716424678f6ddd6dccdd097071f3a7ff1dbc5dbc2f9->enter($__internal_22d3823fc137f7b7eab38716424678f6ddd6dccdd097071f3a7ff1dbc5dbc2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_faa39b902bc4d607e50bda4a84ad7d9a92300cc5f4012ce6c824239af8cb80ea->leave($__internal_faa39b902bc4d607e50bda4a84ad7d9a92300cc5f4012ce6c824239af8cb80ea_prof);

        
        $__internal_22d3823fc137f7b7eab38716424678f6ddd6dccdd097071f3a7ff1dbc5dbc2f9->leave($__internal_22d3823fc137f7b7eab38716424678f6ddd6dccdd097071f3a7ff1dbc5dbc2f9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_bc7936a4c71f43a16cc3decd10a0b7ad3822a01ea0fb5de34713603468ca4817 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc7936a4c71f43a16cc3decd10a0b7ad3822a01ea0fb5de34713603468ca4817->enter($__internal_bc7936a4c71f43a16cc3decd10a0b7ad3822a01ea0fb5de34713603468ca4817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2f6f9b06a6f0b539ea77a7afbc0a652cc48e3b7c00bdb5b0be5acc906aeef309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f6f9b06a6f0b539ea77a7afbc0a652cc48e3b7c00bdb5b0be5acc906aeef309->enter($__internal_2f6f9b06a6f0b539ea77a7afbc0a652cc48e3b7c00bdb5b0be5acc906aeef309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2f6f9b06a6f0b539ea77a7afbc0a652cc48e3b7c00bdb5b0be5acc906aeef309->leave($__internal_2f6f9b06a6f0b539ea77a7afbc0a652cc48e3b7c00bdb5b0be5acc906aeef309_prof);

        
        $__internal_bc7936a4c71f43a16cc3decd10a0b7ad3822a01ea0fb5de34713603468ca4817->leave($__internal_bc7936a4c71f43a16cc3decd10a0b7ad3822a01ea0fb5de34713603468ca4817_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
