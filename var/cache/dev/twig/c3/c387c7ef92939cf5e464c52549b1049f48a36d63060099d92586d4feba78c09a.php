<?php

/* ::base.html.twig */
class __TwigTemplate_663eea4e437d11d65ce2026362a629afabc02efe2744c3ce36d7fed1acef5675 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1791a3ba0992e05e27619c4caf67c9daf26c8e5f2e9493ce039fca741310463b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1791a3ba0992e05e27619c4caf67c9daf26c8e5f2e9493ce039fca741310463b->enter($__internal_1791a3ba0992e05e27619c4caf67c9daf26c8e5f2e9493ce039fca741310463b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_afce3574b0584036feb59892e286827f7c0f65b312a962b673ec1c97fade056c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afce3574b0584036feb59892e286827f7c0f65b312a962b673ec1c97fade056c->enter($__internal_afce3574b0584036feb59892e286827f7c0f65b312a962b673ec1c97fade056c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_1791a3ba0992e05e27619c4caf67c9daf26c8e5f2e9493ce039fca741310463b->leave($__internal_1791a3ba0992e05e27619c4caf67c9daf26c8e5f2e9493ce039fca741310463b_prof);

        
        $__internal_afce3574b0584036feb59892e286827f7c0f65b312a962b673ec1c97fade056c->leave($__internal_afce3574b0584036feb59892e286827f7c0f65b312a962b673ec1c97fade056c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c74a84ddb8a8c8dfa0fa6b26d88331addcd220c6d4a54ff08d34bab5d5916456 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c74a84ddb8a8c8dfa0fa6b26d88331addcd220c6d4a54ff08d34bab5d5916456->enter($__internal_c74a84ddb8a8c8dfa0fa6b26d88331addcd220c6d4a54ff08d34bab5d5916456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_59e414b59c6bf98f7d91ba0825519365639942a6b9b458cb34f986a47e9c104b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59e414b59c6bf98f7d91ba0825519365639942a6b9b458cb34f986a47e9c104b->enter($__internal_59e414b59c6bf98f7d91ba0825519365639942a6b9b458cb34f986a47e9c104b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_59e414b59c6bf98f7d91ba0825519365639942a6b9b458cb34f986a47e9c104b->leave($__internal_59e414b59c6bf98f7d91ba0825519365639942a6b9b458cb34f986a47e9c104b_prof);

        
        $__internal_c74a84ddb8a8c8dfa0fa6b26d88331addcd220c6d4a54ff08d34bab5d5916456->leave($__internal_c74a84ddb8a8c8dfa0fa6b26d88331addcd220c6d4a54ff08d34bab5d5916456_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_06e95d901ead8e26525784a0909c4c415d47ecb0f6468f07b00e3405e4e7bf10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06e95d901ead8e26525784a0909c4c415d47ecb0f6468f07b00e3405e4e7bf10->enter($__internal_06e95d901ead8e26525784a0909c4c415d47ecb0f6468f07b00e3405e4e7bf10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a39433e316704a9a9695579bae6734f43d17ba8701386a963a4d8f536b3f7f0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a39433e316704a9a9695579bae6734f43d17ba8701386a963a4d8f536b3f7f0f->enter($__internal_a39433e316704a9a9695579bae6734f43d17ba8701386a963a4d8f536b3f7f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a39433e316704a9a9695579bae6734f43d17ba8701386a963a4d8f536b3f7f0f->leave($__internal_a39433e316704a9a9695579bae6734f43d17ba8701386a963a4d8f536b3f7f0f_prof);

        
        $__internal_06e95d901ead8e26525784a0909c4c415d47ecb0f6468f07b00e3405e4e7bf10->leave($__internal_06e95d901ead8e26525784a0909c4c415d47ecb0f6468f07b00e3405e4e7bf10_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee30676e5e48e5762f5ed2050bb01abc616750c09396135895ca4e6ac59fb57a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee30676e5e48e5762f5ed2050bb01abc616750c09396135895ca4e6ac59fb57a->enter($__internal_ee30676e5e48e5762f5ed2050bb01abc616750c09396135895ca4e6ac59fb57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_42a4b2b5aa8d9e15953438579c3b3f56950cbde2e2021b5f8a5b04e840acd517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42a4b2b5aa8d9e15953438579c3b3f56950cbde2e2021b5f8a5b04e840acd517->enter($__internal_42a4b2b5aa8d9e15953438579c3b3f56950cbde2e2021b5f8a5b04e840acd517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_42a4b2b5aa8d9e15953438579c3b3f56950cbde2e2021b5f8a5b04e840acd517->leave($__internal_42a4b2b5aa8d9e15953438579c3b3f56950cbde2e2021b5f8a5b04e840acd517_prof);

        
        $__internal_ee30676e5e48e5762f5ed2050bb01abc616750c09396135895ca4e6ac59fb57a->leave($__internal_ee30676e5e48e5762f5ed2050bb01abc616750c09396135895ca4e6ac59fb57a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7553e1377e905851b765ac366037d2fc4e5e30b39561ab66e9f3d4844d20e5ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7553e1377e905851b765ac366037d2fc4e5e30b39561ab66e9f3d4844d20e5ed->enter($__internal_7553e1377e905851b765ac366037d2fc4e5e30b39561ab66e9f3d4844d20e5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_607d81b64bb6b2bb50d8d0f044f8deebf7d4d7adf2869f0993e7f8766b2806c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_607d81b64bb6b2bb50d8d0f044f8deebf7d4d7adf2869f0993e7f8766b2806c5->enter($__internal_607d81b64bb6b2bb50d8d0f044f8deebf7d4d7adf2869f0993e7f8766b2806c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_607d81b64bb6b2bb50d8d0f044f8deebf7d4d7adf2869f0993e7f8766b2806c5->leave($__internal_607d81b64bb6b2bb50d8d0f044f8deebf7d4d7adf2869f0993e7f8766b2806c5_prof);

        
        $__internal_7553e1377e905851b765ac366037d2fc4e5e30b39561ab66e9f3d4844d20e5ed->leave($__internal_7553e1377e905851b765ac366037d2fc4e5e30b39561ab66e9f3d4844d20e5ed_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\wamp64\\www\\newP4\\app/Resources\\views/base.html.twig");
    }
}
