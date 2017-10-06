<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_fd92be7e6432c7a02abe94c7282a8557d41b1a96172d1d71ffa3d8ad9e6799a4 extends Twig_Template
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
        $__internal_7027eb23d8d442de69bb69ef9094527a950d48dda9905c4f4767088ffe6aeb52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7027eb23d8d442de69bb69ef9094527a950d48dda9905c4f4767088ffe6aeb52->enter($__internal_7027eb23d8d442de69bb69ef9094527a950d48dda9905c4f4767088ffe6aeb52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_de2e57d8e3bf351d8cbe28527d58cad07c9ac4b7e16f4fa99011e7a5c5508484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de2e57d8e3bf351d8cbe28527d58cad07c9ac4b7e16f4fa99011e7a5c5508484->enter($__internal_de2e57d8e3bf351d8cbe28527d58cad07c9ac4b7e16f4fa99011e7a5c5508484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_7027eb23d8d442de69bb69ef9094527a950d48dda9905c4f4767088ffe6aeb52->leave($__internal_7027eb23d8d442de69bb69ef9094527a950d48dda9905c4f4767088ffe6aeb52_prof);

        
        $__internal_de2e57d8e3bf351d8cbe28527d58cad07c9ac4b7e16f4fa99011e7a5c5508484->leave($__internal_de2e57d8e3bf351d8cbe28527d58cad07c9ac4b7e16f4fa99011e7a5c5508484_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
