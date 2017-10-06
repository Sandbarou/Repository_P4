<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_5a3aafe480d68cbaaea1209d15a1bb8e79c8a05cf42395e6d6956707043cfc66 extends Twig_Template
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
        $__internal_9040e7ddaa3a0a2241b7ae36fc3f3e527cc987835f98d402caa93efdbe674b12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9040e7ddaa3a0a2241b7ae36fc3f3e527cc987835f98d402caa93efdbe674b12->enter($__internal_9040e7ddaa3a0a2241b7ae36fc3f3e527cc987835f98d402caa93efdbe674b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_6d68eb840f30d44cb9d9842a4c27267afdcfb80eb7e2b33d2aae273741490562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d68eb840f30d44cb9d9842a4c27267afdcfb80eb7e2b33d2aae273741490562->enter($__internal_6d68eb840f30d44cb9d9842a4c27267afdcfb80eb7e2b33d2aae273741490562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_9040e7ddaa3a0a2241b7ae36fc3f3e527cc987835f98d402caa93efdbe674b12->leave($__internal_9040e7ddaa3a0a2241b7ae36fc3f3e527cc987835f98d402caa93efdbe674b12_prof);

        
        $__internal_6d68eb840f30d44cb9d9842a4c27267afdcfb80eb7e2b33d2aae273741490562->leave($__internal_6d68eb840f30d44cb9d9842a4c27267afdcfb80eb7e2b33d2aae273741490562_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
