<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_288584128327698ed0e6b6c25dbb34fb794c43c6f188d96db5d4ff24feacf281 extends Twig_Template
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
        $__internal_3bcc30fd0a0e4d3c0fc3d50f3c025ef70312c92028cc5e04f4e41ee198e46065 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bcc30fd0a0e4d3c0fc3d50f3c025ef70312c92028cc5e04f4e41ee198e46065->enter($__internal_3bcc30fd0a0e4d3c0fc3d50f3c025ef70312c92028cc5e04f4e41ee198e46065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_6af01a8d6b166f41f2b58f0ffb6634b7483dd59dedd36151f701009b59a94586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6af01a8d6b166f41f2b58f0ffb6634b7483dd59dedd36151f701009b59a94586->enter($__internal_6af01a8d6b166f41f2b58f0ffb6634b7483dd59dedd36151f701009b59a94586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_3bcc30fd0a0e4d3c0fc3d50f3c025ef70312c92028cc5e04f4e41ee198e46065->leave($__internal_3bcc30fd0a0e4d3c0fc3d50f3c025ef70312c92028cc5e04f4e41ee198e46065_prof);

        
        $__internal_6af01a8d6b166f41f2b58f0ffb6634b7483dd59dedd36151f701009b59a94586->leave($__internal_6af01a8d6b166f41f2b58f0ffb6634b7483dd59dedd36151f701009b59a94586_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
