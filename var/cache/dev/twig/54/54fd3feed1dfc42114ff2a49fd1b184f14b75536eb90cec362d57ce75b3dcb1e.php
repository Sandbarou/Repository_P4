<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_2f47f195589b6d4aff17698c55cb66b7187363ad3db87d9c34e6c183713bb8ec extends Twig_Template
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
        $__internal_f71b3065da0e19046b66cc3cadea2e0caa1a4e94df0af37c0af366e2990381f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f71b3065da0e19046b66cc3cadea2e0caa1a4e94df0af37c0af366e2990381f2->enter($__internal_f71b3065da0e19046b66cc3cadea2e0caa1a4e94df0af37c0af366e2990381f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_3e8a775ef06b1498aa785ebcce0e46659e38defcfe9bd4dd751f870c12b481e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e8a775ef06b1498aa785ebcce0e46659e38defcfe9bd4dd751f870c12b481e6->enter($__internal_3e8a775ef06b1498aa785ebcce0e46659e38defcfe9bd4dd751f870c12b481e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_f71b3065da0e19046b66cc3cadea2e0caa1a4e94df0af37c0af366e2990381f2->leave($__internal_f71b3065da0e19046b66cc3cadea2e0caa1a4e94df0af37c0af366e2990381f2_prof);

        
        $__internal_3e8a775ef06b1498aa785ebcce0e46659e38defcfe9bd4dd751f870c12b481e6->leave($__internal_3e8a775ef06b1498aa785ebcce0e46659e38defcfe9bd4dd751f870c12b481e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
