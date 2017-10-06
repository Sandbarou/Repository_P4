<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_71c2e4e735264b42666f2c123bb1ee121d1d6f96b9a1c3d6cacb56c0d5ea7820 extends Twig_Template
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
        $__internal_5a215714bbcf2548bc2462d92c0c9bd851a9d9b0b038829d55b87764db24a2f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a215714bbcf2548bc2462d92c0c9bd851a9d9b0b038829d55b87764db24a2f0->enter($__internal_5a215714bbcf2548bc2462d92c0c9bd851a9d9b0b038829d55b87764db24a2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_ea3ec25814a40f13f1d39ae3ba28548525735ecee027240c193263d61f45ded5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea3ec25814a40f13f1d39ae3ba28548525735ecee027240c193263d61f45ded5->enter($__internal_ea3ec25814a40f13f1d39ae3ba28548525735ecee027240c193263d61f45ded5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5a215714bbcf2548bc2462d92c0c9bd851a9d9b0b038829d55b87764db24a2f0->leave($__internal_5a215714bbcf2548bc2462d92c0c9bd851a9d9b0b038829d55b87764db24a2f0_prof);

        
        $__internal_ea3ec25814a40f13f1d39ae3ba28548525735ecee027240c193263d61f45ded5->leave($__internal_ea3ec25814a40f13f1d39ae3ba28548525735ecee027240c193263d61f45ded5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
