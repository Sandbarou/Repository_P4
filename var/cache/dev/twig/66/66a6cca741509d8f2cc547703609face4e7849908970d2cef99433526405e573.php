<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_987ac1695af07336547e168128399df4bd6c257ab9e89891fcee1bad7d943e81 extends Twig_Template
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
        $__internal_5e20ed9db00b012536a32cefc9f12ea78fc44c41cc3b041120abc738d582514f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e20ed9db00b012536a32cefc9f12ea78fc44c41cc3b041120abc738d582514f->enter($__internal_5e20ed9db00b012536a32cefc9f12ea78fc44c41cc3b041120abc738d582514f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_cab4fcb0eea9522aab0de266771db7da4749dcf941a711d8764b6dc2050630a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cab4fcb0eea9522aab0de266771db7da4749dcf941a711d8764b6dc2050630a2->enter($__internal_cab4fcb0eea9522aab0de266771db7da4749dcf941a711d8764b6dc2050630a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_5e20ed9db00b012536a32cefc9f12ea78fc44c41cc3b041120abc738d582514f->leave($__internal_5e20ed9db00b012536a32cefc9f12ea78fc44c41cc3b041120abc738d582514f_prof);

        
        $__internal_cab4fcb0eea9522aab0de266771db7da4749dcf941a711d8764b6dc2050630a2->leave($__internal_cab4fcb0eea9522aab0de266771db7da4749dcf941a711d8764b6dc2050630a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
