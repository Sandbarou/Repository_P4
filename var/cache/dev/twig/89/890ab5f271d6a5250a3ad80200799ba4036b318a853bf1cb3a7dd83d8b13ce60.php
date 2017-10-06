<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_b13c5fd5e268baf11eca79c21c26445ceb9044a0f0a435becd77c38a81ba844c extends Twig_Template
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
        $__internal_07fa15087359f14c4cff1e2b6020ca2ce142021512cfd10ed1dc4be8cf7ceb77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07fa15087359f14c4cff1e2b6020ca2ce142021512cfd10ed1dc4be8cf7ceb77->enter($__internal_07fa15087359f14c4cff1e2b6020ca2ce142021512cfd10ed1dc4be8cf7ceb77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_63d2d88dfd54ed9178aeb8507a005622418ef899620d310337765c84459aca29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63d2d88dfd54ed9178aeb8507a005622418ef899620d310337765c84459aca29->enter($__internal_63d2d88dfd54ed9178aeb8507a005622418ef899620d310337765c84459aca29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_07fa15087359f14c4cff1e2b6020ca2ce142021512cfd10ed1dc4be8cf7ceb77->leave($__internal_07fa15087359f14c4cff1e2b6020ca2ce142021512cfd10ed1dc4be8cf7ceb77_prof);

        
        $__internal_63d2d88dfd54ed9178aeb8507a005622418ef899620d310337765c84459aca29->leave($__internal_63d2d88dfd54ed9178aeb8507a005622418ef899620d310337765c84459aca29_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
