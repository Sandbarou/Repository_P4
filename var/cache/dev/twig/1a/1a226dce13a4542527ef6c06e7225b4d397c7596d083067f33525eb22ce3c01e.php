<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_3a46f5d3cf8ca8ca73488b5ae09e0be6877e692d893e92b012c33fb760462219 extends Twig_Template
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
        $__internal_15c46f3dc0f35269a5c46ee309342ec155d8ee77a5bc93f49955f71237542cf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15c46f3dc0f35269a5c46ee309342ec155d8ee77a5bc93f49955f71237542cf3->enter($__internal_15c46f3dc0f35269a5c46ee309342ec155d8ee77a5bc93f49955f71237542cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_70c2fe24e582302fe1f91e5d373e9ec312c7de2fdda029fc572f37e92e02b3e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70c2fe24e582302fe1f91e5d373e9ec312c7de2fdda029fc572f37e92e02b3e0->enter($__internal_70c2fe24e582302fe1f91e5d373e9ec312c7de2fdda029fc572f37e92e02b3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_15c46f3dc0f35269a5c46ee309342ec155d8ee77a5bc93f49955f71237542cf3->leave($__internal_15c46f3dc0f35269a5c46ee309342ec155d8ee77a5bc93f49955f71237542cf3_prof);

        
        $__internal_70c2fe24e582302fe1f91e5d373e9ec312c7de2fdda029fc572f37e92e02b3e0->leave($__internal_70c2fe24e582302fe1f91e5d373e9ec312c7de2fdda029fc572f37e92e02b3e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
