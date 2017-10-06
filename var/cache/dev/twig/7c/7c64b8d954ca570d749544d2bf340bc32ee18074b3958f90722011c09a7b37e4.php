<?php

/* @OCLouvre/Louvre/index1.html.twig */
class __TwigTemplate_8be7e8611c179c997893671cf179f6f36f498fe94c3e70fd7977e0e70771d0cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ed40ab9319acc0aa04981db2fc04374209d4f592ec00281135769afcaf33eeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ed40ab9319acc0aa04981db2fc04374209d4f592ec00281135769afcaf33eeb->enter($__internal_0ed40ab9319acc0aa04981db2fc04374209d4f592ec00281135769afcaf33eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCLouvre/Louvre/index1.html.twig"));

        $__internal_877ef19d43ad219cca67029e3148a1e7f7c101e3c95910072b7976a5a8cb0f9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_877ef19d43ad219cca67029e3148a1e7f7c101e3c95910072b7976a5a8cb0f9d->enter($__internal_877ef19d43ad219cca67029e3148a1e7f7c101e3c95910072b7976a5a8cb0f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCLouvre/Louvre/index1.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
  <head>
    <meta charset=\"utf-8\">
    <title>Hello</title>
  </head>
  <body>

    ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "
  </body>
</html>";
        
        $__internal_0ed40ab9319acc0aa04981db2fc04374209d4f592ec00281135769afcaf33eeb->leave($__internal_0ed40ab9319acc0aa04981db2fc04374209d4f592ec00281135769afcaf33eeb_prof);

        
        $__internal_877ef19d43ad219cca67029e3148a1e7f7c101e3c95910072b7976a5a8cb0f9d->leave($__internal_877ef19d43ad219cca67029e3148a1e7f7c101e3c95910072b7976a5a8cb0f9d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7675dba382546639056254c190d449ccaa18adc84c34fa88df68906376e007a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7675dba382546639056254c190d449ccaa18adc84c34fa88df68906376e007a0->enter($__internal_7675dba382546639056254c190d449ccaa18adc84c34fa88df68906376e007a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e82667e9c695bde3b90f4718b1e7aa9c10723513c621280f46baecb90496a2d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e82667e9c695bde3b90f4718b1e7aa9c10723513c621280f46baecb90496a2d8->enter($__internal_e82667e9c695bde3b90f4718b1e7aa9c10723513c621280f46baecb90496a2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "        
        Hello
        
    ";
        
        $__internal_e82667e9c695bde3b90f4718b1e7aa9c10723513c621280f46baecb90496a2d8->leave($__internal_e82667e9c695bde3b90f4718b1e7aa9c10723513c621280f46baecb90496a2d8_prof);

        
        $__internal_7675dba382546639056254c190d449ccaa18adc84c34fa88df68906376e007a0->leave($__internal_7675dba382546639056254c190d449ccaa18adc84c34fa88df68906376e007a0_prof);

    }

    public function getTemplateName()
    {
        return "@OCLouvre/Louvre/index1.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  59 => 10,  50 => 9,  38 => 14,  36 => 9,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE HTML>
<html>
  <head>
    <meta charset=\"utf-8\">
    <title>Hello</title>
  </head>
  <body>

    {% block body %}
        
        Hello
        
    {% endblock %}

  </body>
</html>", "@OCLouvre/Louvre/index1.html.twig", "C:\\wamp64\\www\\newP4\\src\\OC\\LouvreBundle\\Resources\\views\\Louvre\\index1.html.twig");
    }
}
