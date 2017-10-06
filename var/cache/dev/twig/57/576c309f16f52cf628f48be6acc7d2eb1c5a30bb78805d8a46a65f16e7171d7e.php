<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_a1f962d0d4eaa4f9578ca429ce3bfdb93e5f5c9e64052c038f7a9acaf9474c0f extends Twig_Template
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
        $__internal_105d081c33083b3d180b73d294505945b59ab8dd2712bc7fc5cfc9250f7e2f32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_105d081c33083b3d180b73d294505945b59ab8dd2712bc7fc5cfc9250f7e2f32->enter($__internal_105d081c33083b3d180b73d294505945b59ab8dd2712bc7fc5cfc9250f7e2f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_9b93e8e6f42dd151554fd981d2a64b2a71104e4d604baf2098e3ede334ef7d73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b93e8e6f42dd151554fd981d2a64b2a71104e4d604baf2098e3ede334ef7d73->enter($__internal_9b93e8e6f42dd151554fd981d2a64b2a71104e4d604baf2098e3ede334ef7d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_105d081c33083b3d180b73d294505945b59ab8dd2712bc7fc5cfc9250f7e2f32->leave($__internal_105d081c33083b3d180b73d294505945b59ab8dd2712bc7fc5cfc9250f7e2f32_prof);

        
        $__internal_9b93e8e6f42dd151554fd981d2a64b2a71104e4d604baf2098e3ede334ef7d73->leave($__internal_9b93e8e6f42dd151554fd981d2a64b2a71104e4d604baf2098e3ede334ef7d73_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
