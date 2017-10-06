<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f4246ef443ace8d843686cc2b3e4557b6a20284a1b1cce143e25265565eb4edf extends Twig_Template
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
        $__internal_11255185ca0413f4be62d0ffa418f0f16e112a8c16043ce2513b766ca8ba8fec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11255185ca0413f4be62d0ffa418f0f16e112a8c16043ce2513b766ca8ba8fec->enter($__internal_11255185ca0413f4be62d0ffa418f0f16e112a8c16043ce2513b766ca8ba8fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_867de9f1403e7a9d331bd93936487f25f172893cdb496cbfd7019da5aea17f8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_867de9f1403e7a9d331bd93936487f25f172893cdb496cbfd7019da5aea17f8a->enter($__internal_867de9f1403e7a9d331bd93936487f25f172893cdb496cbfd7019da5aea17f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_11255185ca0413f4be62d0ffa418f0f16e112a8c16043ce2513b766ca8ba8fec->leave($__internal_11255185ca0413f4be62d0ffa418f0f16e112a8c16043ce2513b766ca8ba8fec_prof);

        
        $__internal_867de9f1403e7a9d331bd93936487f25f172893cdb496cbfd7019da5aea17f8a->leave($__internal_867de9f1403e7a9d331bd93936487f25f172893cdb496cbfd7019da5aea17f8a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f8da756132dd818933e59e1ee0a3b9da5f610e53f3de9e9de94c1a8eb4b7a0dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8da756132dd818933e59e1ee0a3b9da5f610e53f3de9e9de94c1a8eb4b7a0dc->enter($__internal_f8da756132dd818933e59e1ee0a3b9da5f610e53f3de9e9de94c1a8eb4b7a0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_051735700673424485d63db4fa231311b36b9c646fab7a80597a1223e4f36266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_051735700673424485d63db4fa231311b36b9c646fab7a80597a1223e4f36266->enter($__internal_051735700673424485d63db4fa231311b36b9c646fab7a80597a1223e4f36266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_051735700673424485d63db4fa231311b36b9c646fab7a80597a1223e4f36266->leave($__internal_051735700673424485d63db4fa231311b36b9c646fab7a80597a1223e4f36266_prof);

        
        $__internal_f8da756132dd818933e59e1ee0a3b9da5f610e53f3de9e9de94c1a8eb4b7a0dc->leave($__internal_f8da756132dd818933e59e1ee0a3b9da5f610e53f3de9e9de94c1a8eb4b7a0dc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
