<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_1bc53a257bb5722d5c1b14b1c99cd7f54c0287673113c42acceefeee9aefef78 extends Twig_Template
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
        $__internal_89348a92b061a3b79bfd9bb846b62ecb56086c128502898d59876bb3da718f5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89348a92b061a3b79bfd9bb846b62ecb56086c128502898d59876bb3da718f5a->enter($__internal_89348a92b061a3b79bfd9bb846b62ecb56086c128502898d59876bb3da718f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_3582c82fde3c9b3826b544e7554bf244cdedec6fc2cb14d06071bcadeb011715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3582c82fde3c9b3826b544e7554bf244cdedec6fc2cb14d06071bcadeb011715->enter($__internal_3582c82fde3c9b3826b544e7554bf244cdedec6fc2cb14d06071bcadeb011715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_89348a92b061a3b79bfd9bb846b62ecb56086c128502898d59876bb3da718f5a->leave($__internal_89348a92b061a3b79bfd9bb846b62ecb56086c128502898d59876bb3da718f5a_prof);

        
        $__internal_3582c82fde3c9b3826b544e7554bf244cdedec6fc2cb14d06071bcadeb011715->leave($__internal_3582c82fde3c9b3826b544e7554bf244cdedec6fc2cb14d06071bcadeb011715_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
