<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_8cb8dd1eaf50f41c0f18025fa2d30798b2d605186fe8effb0f052950dc68fecd extends Twig_Template
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
        $__internal_3f02548092faab830b43209503927ff2e2a7cf251e9300344d7fb1b789c49d92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f02548092faab830b43209503927ff2e2a7cf251e9300344d7fb1b789c49d92->enter($__internal_3f02548092faab830b43209503927ff2e2a7cf251e9300344d7fb1b789c49d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_e3027dc8dd27b2a3d9b218ff79173c76f7ab9278e20006fb77f482b665047449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3027dc8dd27b2a3d9b218ff79173c76f7ab9278e20006fb77f482b665047449->enter($__internal_e3027dc8dd27b2a3d9b218ff79173c76f7ab9278e20006fb77f482b665047449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_3f02548092faab830b43209503927ff2e2a7cf251e9300344d7fb1b789c49d92->leave($__internal_3f02548092faab830b43209503927ff2e2a7cf251e9300344d7fb1b789c49d92_prof);

        
        $__internal_e3027dc8dd27b2a3d9b218ff79173c76f7ab9278e20006fb77f482b665047449->leave($__internal_e3027dc8dd27b2a3d9b218ff79173c76f7ab9278e20006fb77f482b665047449_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
