<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_a421e51c3422a92adcba8bf9746432ecb7808a9257b34e6708ad143be84f40a7 extends Twig_Template
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
        $__internal_75c606267285b9b1a32126fdc0112f95426bb8464f0fbd940146573ca6f095dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75c606267285b9b1a32126fdc0112f95426bb8464f0fbd940146573ca6f095dc->enter($__internal_75c606267285b9b1a32126fdc0112f95426bb8464f0fbd940146573ca6f095dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_606e335dc1eb4a522f447fd0db815ed2af8144932d890137d76225605fa0c485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_606e335dc1eb4a522f447fd0db815ed2af8144932d890137d76225605fa0c485->enter($__internal_606e335dc1eb4a522f447fd0db815ed2af8144932d890137d76225605fa0c485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_75c606267285b9b1a32126fdc0112f95426bb8464f0fbd940146573ca6f095dc->leave($__internal_75c606267285b9b1a32126fdc0112f95426bb8464f0fbd940146573ca6f095dc_prof);

        
        $__internal_606e335dc1eb4a522f447fd0db815ed2af8144932d890137d76225605fa0c485->leave($__internal_606e335dc1eb4a522f447fd0db815ed2af8144932d890137d76225605fa0c485_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
