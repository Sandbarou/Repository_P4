<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_9b39bd38d864ded649e3f6e25a41391e5e04cc702cce15f0bb32ee558430cd64 extends Twig_Template
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
        $__internal_9bdd5b1db8387db5a7e19ce06f7644148c535672df0acf20e403021db16661f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bdd5b1db8387db5a7e19ce06f7644148c535672df0acf20e403021db16661f8->enter($__internal_9bdd5b1db8387db5a7e19ce06f7644148c535672df0acf20e403021db16661f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_31df2770b42c33fc9733b78fe7c8e1f07f8ca21f902aa409678d630fe968558c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31df2770b42c33fc9733b78fe7c8e1f07f8ca21f902aa409678d630fe968558c->enter($__internal_31df2770b42c33fc9733b78fe7c8e1f07f8ca21f902aa409678d630fe968558c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9bdd5b1db8387db5a7e19ce06f7644148c535672df0acf20e403021db16661f8->leave($__internal_9bdd5b1db8387db5a7e19ce06f7644148c535672df0acf20e403021db16661f8_prof);

        
        $__internal_31df2770b42c33fc9733b78fe7c8e1f07f8ca21f902aa409678d630fe968558c->leave($__internal_31df2770b42c33fc9733b78fe7c8e1f07f8ca21f902aa409678d630fe968558c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
