<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_2f63b0f12ed9e9ed0461090b4ee7640c144842d17af306cd647ea6e6006f3f18 extends Twig_Template
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
        $__internal_1da5d069a44538ceae566d63f7d670ebe73b8ba450e6860c6b7ded4320bb1e4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1da5d069a44538ceae566d63f7d670ebe73b8ba450e6860c6b7ded4320bb1e4d->enter($__internal_1da5d069a44538ceae566d63f7d670ebe73b8ba450e6860c6b7ded4320bb1e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_a969ade0b27ec9b59d60e5f8d91531d512cf1f68ef00385c6c69f7005adeb036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a969ade0b27ec9b59d60e5f8d91531d512cf1f68ef00385c6c69f7005adeb036->enter($__internal_a969ade0b27ec9b59d60e5f8d91531d512cf1f68ef00385c6c69f7005adeb036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_1da5d069a44538ceae566d63f7d670ebe73b8ba450e6860c6b7ded4320bb1e4d->leave($__internal_1da5d069a44538ceae566d63f7d670ebe73b8ba450e6860c6b7ded4320bb1e4d_prof);

        
        $__internal_a969ade0b27ec9b59d60e5f8d91531d512cf1f68ef00385c6c69f7005adeb036->leave($__internal_a969ade0b27ec9b59d60e5f8d91531d512cf1f68ef00385c6c69f7005adeb036_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
