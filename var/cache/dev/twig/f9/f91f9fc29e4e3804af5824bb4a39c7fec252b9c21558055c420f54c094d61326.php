<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b48ca71d9a556fb73398bc78650fb6de75f8d087ee81a3c6c73d91a18dd5df52 extends Twig_Template
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
        $__internal_308ef1c6ddf391ed9174a259b6e998b1dd8167a63de1f93ef93eb3022ba530cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_308ef1c6ddf391ed9174a259b6e998b1dd8167a63de1f93ef93eb3022ba530cd->enter($__internal_308ef1c6ddf391ed9174a259b6e998b1dd8167a63de1f93ef93eb3022ba530cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_4fd534ba75ba063a640e046db1de9bfabe462acacff86c236263ca3c608aeb15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fd534ba75ba063a640e046db1de9bfabe462acacff86c236263ca3c608aeb15->enter($__internal_4fd534ba75ba063a640e046db1de9bfabe462acacff86c236263ca3c608aeb15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_308ef1c6ddf391ed9174a259b6e998b1dd8167a63de1f93ef93eb3022ba530cd->leave($__internal_308ef1c6ddf391ed9174a259b6e998b1dd8167a63de1f93ef93eb3022ba530cd_prof);

        
        $__internal_4fd534ba75ba063a640e046db1de9bfabe462acacff86c236263ca3c608aeb15->leave($__internal_4fd534ba75ba063a640e046db1de9bfabe462acacff86c236263ca3c608aeb15_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
