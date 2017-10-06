<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_cd742083def9d721d069bb8a62c065f3ceaa1f39293db08041323048139d4b03 extends Twig_Template
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
        $__internal_b4dd6a86f5756f9e7629472dd13503f394b7f3e98814358185e5881aa84aefe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4dd6a86f5756f9e7629472dd13503f394b7f3e98814358185e5881aa84aefe8->enter($__internal_b4dd6a86f5756f9e7629472dd13503f394b7f3e98814358185e5881aa84aefe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_7f58d2440957f72ff62817b9ec3febeceb94caf206054269cd5feff0648c08a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f58d2440957f72ff62817b9ec3febeceb94caf206054269cd5feff0648c08a2->enter($__internal_7f58d2440957f72ff62817b9ec3febeceb94caf206054269cd5feff0648c08a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_b4dd6a86f5756f9e7629472dd13503f394b7f3e98814358185e5881aa84aefe8->leave($__internal_b4dd6a86f5756f9e7629472dd13503f394b7f3e98814358185e5881aa84aefe8_prof);

        
        $__internal_7f58d2440957f72ff62817b9ec3febeceb94caf206054269cd5feff0648c08a2->leave($__internal_7f58d2440957f72ff62817b9ec3febeceb94caf206054269cd5feff0648c08a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
