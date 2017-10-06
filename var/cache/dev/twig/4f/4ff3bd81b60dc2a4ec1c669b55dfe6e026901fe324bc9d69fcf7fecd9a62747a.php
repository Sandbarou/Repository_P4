<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_eb26deccd428a4b2e5b7c1a86234bcb3dbcc79ac7da7fa4f478fbb4e66e94628 extends Twig_Template
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
        $__internal_eb821aa0fc8fa3f79bcaf3e74d76ef8e4225e4279e2f1da6ed97d3559c1972dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb821aa0fc8fa3f79bcaf3e74d76ef8e4225e4279e2f1da6ed97d3559c1972dc->enter($__internal_eb821aa0fc8fa3f79bcaf3e74d76ef8e4225e4279e2f1da6ed97d3559c1972dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_6d63619ecd9f8e4c1a0876730d7c01010fc7cf8154695d243e60cbe75d6696c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d63619ecd9f8e4c1a0876730d7c01010fc7cf8154695d243e60cbe75d6696c7->enter($__internal_6d63619ecd9f8e4c1a0876730d7c01010fc7cf8154695d243e60cbe75d6696c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_eb821aa0fc8fa3f79bcaf3e74d76ef8e4225e4279e2f1da6ed97d3559c1972dc->leave($__internal_eb821aa0fc8fa3f79bcaf3e74d76ef8e4225e4279e2f1da6ed97d3559c1972dc_prof);

        
        $__internal_6d63619ecd9f8e4c1a0876730d7c01010fc7cf8154695d243e60cbe75d6696c7->leave($__internal_6d63619ecd9f8e4c1a0876730d7c01010fc7cf8154695d243e60cbe75d6696c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
