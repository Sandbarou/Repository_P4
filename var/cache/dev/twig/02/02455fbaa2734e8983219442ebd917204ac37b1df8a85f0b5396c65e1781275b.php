<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_598e049b61823ad2836bb9f47a778eb83326f7bdfac6d9375e9b062c5845249a extends Twig_Template
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
        $__internal_4a7e27fb99a233fc6ea180c9b7654780aeaacaae6803edf7342d6ffc777209f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a7e27fb99a233fc6ea180c9b7654780aeaacaae6803edf7342d6ffc777209f0->enter($__internal_4a7e27fb99a233fc6ea180c9b7654780aeaacaae6803edf7342d6ffc777209f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_566d7c1881637a4043c6da77d6718099b019de4b90a9339513cc9f2904726f50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_566d7c1881637a4043c6da77d6718099b019de4b90a9339513cc9f2904726f50->enter($__internal_566d7c1881637a4043c6da77d6718099b019de4b90a9339513cc9f2904726f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_4a7e27fb99a233fc6ea180c9b7654780aeaacaae6803edf7342d6ffc777209f0->leave($__internal_4a7e27fb99a233fc6ea180c9b7654780aeaacaae6803edf7342d6ffc777209f0_prof);

        
        $__internal_566d7c1881637a4043c6da77d6718099b019de4b90a9339513cc9f2904726f50->leave($__internal_566d7c1881637a4043c6da77d6718099b019de4b90a9339513cc9f2904726f50_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
