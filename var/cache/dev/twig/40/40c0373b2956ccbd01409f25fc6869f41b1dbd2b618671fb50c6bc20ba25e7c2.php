<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_5479521664a76d2699f761a444e6f0d733b9b2b7739f36b1a1bde5c74731f7b2 extends Twig_Template
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
        $__internal_7c8536fe2cd36c4c7734ee906cf735ad60bb7772b675010962144474c1f72b27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c8536fe2cd36c4c7734ee906cf735ad60bb7772b675010962144474c1f72b27->enter($__internal_7c8536fe2cd36c4c7734ee906cf735ad60bb7772b675010962144474c1f72b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_83d7137650abfc1237bf3439214ac0ba928596c49be7a4573b964da9cd761b19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83d7137650abfc1237bf3439214ac0ba928596c49be7a4573b964da9cd761b19->enter($__internal_83d7137650abfc1237bf3439214ac0ba928596c49be7a4573b964da9cd761b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_7c8536fe2cd36c4c7734ee906cf735ad60bb7772b675010962144474c1f72b27->leave($__internal_7c8536fe2cd36c4c7734ee906cf735ad60bb7772b675010962144474c1f72b27_prof);

        
        $__internal_83d7137650abfc1237bf3439214ac0ba928596c49be7a4573b964da9cd761b19->leave($__internal_83d7137650abfc1237bf3439214ac0ba928596c49be7a4573b964da9cd761b19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
