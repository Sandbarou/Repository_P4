<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_b2c95232eb0d55c97d68de5ae4f44443823fca483ab53295763b097e03cc727a extends Twig_Template
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
        $__internal_669a89145fdef170dbda28bc2ebd609e30fa3719e295a0eab78a2371c9db3bb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_669a89145fdef170dbda28bc2ebd609e30fa3719e295a0eab78a2371c9db3bb6->enter($__internal_669a89145fdef170dbda28bc2ebd609e30fa3719e295a0eab78a2371c9db3bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_9bfe273986846b234c28e8d7a25b508bb067d21d89793d9867d9487afe16479b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bfe273986846b234c28e8d7a25b508bb067d21d89793d9867d9487afe16479b->enter($__internal_9bfe273986846b234c28e8d7a25b508bb067d21d89793d9867d9487afe16479b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_669a89145fdef170dbda28bc2ebd609e30fa3719e295a0eab78a2371c9db3bb6->leave($__internal_669a89145fdef170dbda28bc2ebd609e30fa3719e295a0eab78a2371c9db3bb6_prof);

        
        $__internal_9bfe273986846b234c28e8d7a25b508bb067d21d89793d9867d9487afe16479b->leave($__internal_9bfe273986846b234c28e8d7a25b508bb067d21d89793d9867d9487afe16479b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
