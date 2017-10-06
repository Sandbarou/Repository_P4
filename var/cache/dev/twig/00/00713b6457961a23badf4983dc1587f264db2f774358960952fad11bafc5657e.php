<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_eb60b8fa02341dc8f0897df28f28330fa52ddb151e0e6f12118e4380ee6e8a89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ee50b8417dc6cf52090dfb2efaaf1de01b13698224f1da8e9234bf4705bced1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ee50b8417dc6cf52090dfb2efaaf1de01b13698224f1da8e9234bf4705bced1->enter($__internal_0ee50b8417dc6cf52090dfb2efaaf1de01b13698224f1da8e9234bf4705bced1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_de28cd60b79539d154cdbffa4df98b89791a2032025c609127f572a5e984ba7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de28cd60b79539d154cdbffa4df98b89791a2032025c609127f572a5e984ba7c->enter($__internal_de28cd60b79539d154cdbffa4df98b89791a2032025c609127f572a5e984ba7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 191
        echo "
";
        // line 192
        $this->displayBlock('radio_label', $context, $blocks);
        // line 195
        echo "
";
        // line 196
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 220
        echo "
";
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('form_row', $context, $blocks);
        // line 230
        echo "
";
        // line 231
        $this->displayBlock('button_row', $context, $blocks);
        // line 236
        echo "
";
        // line 237
        $this->displayBlock('choice_row', $context, $blocks);
        // line 241
        echo "
";
        // line 242
        $this->displayBlock('date_row', $context, $blocks);
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('time_row', $context, $blocks);
        // line 251
        echo "
";
        // line 252
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 256
        echo "
";
        // line 257
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 263
        echo "
";
        // line 264
        $this->displayBlock('radio_row', $context, $blocks);
        // line 270
        echo "
";
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_0ee50b8417dc6cf52090dfb2efaaf1de01b13698224f1da8e9234bf4705bced1->leave($__internal_0ee50b8417dc6cf52090dfb2efaaf1de01b13698224f1da8e9234bf4705bced1_prof);

        
        $__internal_de28cd60b79539d154cdbffa4df98b89791a2032025c609127f572a5e984ba7c->leave($__internal_de28cd60b79539d154cdbffa4df98b89791a2032025c609127f572a5e984ba7c_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_84d5b5a25c9be5a8e0e770df9016eb1179f37ccabe00819a13656d84223ae6c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84d5b5a25c9be5a8e0e770df9016eb1179f37ccabe00819a13656d84223ae6c3->enter($__internal_84d5b5a25c9be5a8e0e770df9016eb1179f37ccabe00819a13656d84223ae6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_eb9977524df398b8825b32b432474bc0d28d36c482c440eb6ddf04d3f46bcb31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb9977524df398b8825b32b432474bc0d28d36c482c440eb6ddf04d3f46bcb31->enter($__internal_eb9977524df398b8825b32b432474bc0d28d36c482c440eb6ddf04d3f46bcb31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_eb9977524df398b8825b32b432474bc0d28d36c482c440eb6ddf04d3f46bcb31->leave($__internal_eb9977524df398b8825b32b432474bc0d28d36c482c440eb6ddf04d3f46bcb31_prof);

        
        $__internal_84d5b5a25c9be5a8e0e770df9016eb1179f37ccabe00819a13656d84223ae6c3->leave($__internal_84d5b5a25c9be5a8e0e770df9016eb1179f37ccabe00819a13656d84223ae6c3_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_0cc89e3d15085b7aaee86c77d44e63309d3abb4f7fb7f572588ee20bbcdf72d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cc89e3d15085b7aaee86c77d44e63309d3abb4f7fb7f572588ee20bbcdf72d1->enter($__internal_0cc89e3d15085b7aaee86c77d44e63309d3abb4f7fb7f572588ee20bbcdf72d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_2d4bb0156c28d83d18cc9f0d1af75c127f9629e656be15ceab6c813d41bcee39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d4bb0156c28d83d18cc9f0d1af75c127f9629e656be15ceab6c813d41bcee39->enter($__internal_2d4bb0156c28d83d18cc9f0d1af75c127f9629e656be15ceab6c813d41bcee39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_2d4bb0156c28d83d18cc9f0d1af75c127f9629e656be15ceab6c813d41bcee39->leave($__internal_2d4bb0156c28d83d18cc9f0d1af75c127f9629e656be15ceab6c813d41bcee39_prof);

        
        $__internal_0cc89e3d15085b7aaee86c77d44e63309d3abb4f7fb7f572588ee20bbcdf72d1->leave($__internal_0cc89e3d15085b7aaee86c77d44e63309d3abb4f7fb7f572588ee20bbcdf72d1_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_108e83bca3d808dca40d0a2602e6deb1601a96cccaae0a0e7cb13b75778d8d69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_108e83bca3d808dca40d0a2602e6deb1601a96cccaae0a0e7cb13b75778d8d69->enter($__internal_108e83bca3d808dca40d0a2602e6deb1601a96cccaae0a0e7cb13b75778d8d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_045662b00be15030c8e8db1955f459084b82d948e29a19d499cd7bd04b58d84a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_045662b00be15030c8e8db1955f459084b82d948e29a19d499cd7bd04b58d84a->enter($__internal_045662b00be15030c8e8db1955f459084b82d948e29a19d499cd7bd04b58d84a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_045662b00be15030c8e8db1955f459084b82d948e29a19d499cd7bd04b58d84a->leave($__internal_045662b00be15030c8e8db1955f459084b82d948e29a19d499cd7bd04b58d84a_prof);

        
        $__internal_108e83bca3d808dca40d0a2602e6deb1601a96cccaae0a0e7cb13b75778d8d69->leave($__internal_108e83bca3d808dca40d0a2602e6deb1601a96cccaae0a0e7cb13b75778d8d69_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_03c3c3b0a2552bb9f3978bc1febabf3d7f9f1c1c99809be19f5a2e65f8b51b96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03c3c3b0a2552bb9f3978bc1febabf3d7f9f1c1c99809be19f5a2e65f8b51b96->enter($__internal_03c3c3b0a2552bb9f3978bc1febabf3d7f9f1c1c99809be19f5a2e65f8b51b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_add014e08f281111b3e32985a4cc4c5d6b57848abc8dc7c7d1dd6f66276003c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_add014e08f281111b3e32985a4cc4c5d6b57848abc8dc7c7d1dd6f66276003c7->enter($__internal_add014e08f281111b3e32985a4cc4c5d6b57848abc8dc7c7d1dd6f66276003c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_5b004cb05dc29e7e9d8adab325580d40fdcca0da1117a18208cd9adb29902a47 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_53273da8a6cd3603359527585f06a32e5c02c139326995c41a932f93507003bd = "{{") && ('' === $__internal_53273da8a6cd3603359527585f06a32e5c02c139326995c41a932f93507003bd || 0 === strpos($__internal_5b004cb05dc29e7e9d8adab325580d40fdcca0da1117a18208cd9adb29902a47, $__internal_53273da8a6cd3603359527585f06a32e5c02c139326995c41a932f93507003bd)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_add014e08f281111b3e32985a4cc4c5d6b57848abc8dc7c7d1dd6f66276003c7->leave($__internal_add014e08f281111b3e32985a4cc4c5d6b57848abc8dc7c7d1dd6f66276003c7_prof);

        
        $__internal_03c3c3b0a2552bb9f3978bc1febabf3d7f9f1c1c99809be19f5a2e65f8b51b96->leave($__internal_03c3c3b0a2552bb9f3978bc1febabf3d7f9f1c1c99809be19f5a2e65f8b51b96_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_6ae61c60587ec89aefd34b78259e5ec790c07f2536c1114015e6187bf5e8b3e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ae61c60587ec89aefd34b78259e5ec790c07f2536c1114015e6187bf5e8b3e2->enter($__internal_6ae61c60587ec89aefd34b78259e5ec790c07f2536c1114015e6187bf5e8b3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_9354333da8b053597dfb04b24122bccbcb1a2d0416ccc761f45b643ed9222bea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9354333da8b053597dfb04b24122bccbcb1a2d0416ccc761f45b643ed9222bea->enter($__internal_9354333da8b053597dfb04b24122bccbcb1a2d0416ccc761f45b643ed9222bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_9354333da8b053597dfb04b24122bccbcb1a2d0416ccc761f45b643ed9222bea->leave($__internal_9354333da8b053597dfb04b24122bccbcb1a2d0416ccc761f45b643ed9222bea_prof);

        
        $__internal_6ae61c60587ec89aefd34b78259e5ec790c07f2536c1114015e6187bf5e8b3e2->leave($__internal_6ae61c60587ec89aefd34b78259e5ec790c07f2536c1114015e6187bf5e8b3e2_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_617eb8434a4fe785e7f6dd421d561e4d51c63efd59b9644154840e90023fcd0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_617eb8434a4fe785e7f6dd421d561e4d51c63efd59b9644154840e90023fcd0c->enter($__internal_617eb8434a4fe785e7f6dd421d561e4d51c63efd59b9644154840e90023fcd0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_891a527bf2d9074cb1dc40b32ca1e4d1c77927a8e6659247a8889e07d7c5d587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_891a527bf2d9074cb1dc40b32ca1e4d1c77927a8e6659247a8889e07d7c5d587->enter($__internal_891a527bf2d9074cb1dc40b32ca1e4d1c77927a8e6659247a8889e07d7c5d587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_891a527bf2d9074cb1dc40b32ca1e4d1c77927a8e6659247a8889e07d7c5d587->leave($__internal_891a527bf2d9074cb1dc40b32ca1e4d1c77927a8e6659247a8889e07d7c5d587_prof);

        
        $__internal_617eb8434a4fe785e7f6dd421d561e4d51c63efd59b9644154840e90023fcd0c->leave($__internal_617eb8434a4fe785e7f6dd421d561e4d51c63efd59b9644154840e90023fcd0c_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_659e6716dc025a052133d6b13f27586d5584c5a6191bbcff74be354f907000e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_659e6716dc025a052133d6b13f27586d5584c5a6191bbcff74be354f907000e7->enter($__internal_659e6716dc025a052133d6b13f27586d5584c5a6191bbcff74be354f907000e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_58af1da2b4b86edc724ec49efb1d7acb50a76d8e578775fd55ca08fd27d5f1b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58af1da2b4b86edc724ec49efb1d7acb50a76d8e578775fd55ca08fd27d5f1b0->enter($__internal_58af1da2b4b86edc724ec49efb1d7acb50a76d8e578775fd55ca08fd27d5f1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_58af1da2b4b86edc724ec49efb1d7acb50a76d8e578775fd55ca08fd27d5f1b0->leave($__internal_58af1da2b4b86edc724ec49efb1d7acb50a76d8e578775fd55ca08fd27d5f1b0_prof);

        
        $__internal_659e6716dc025a052133d6b13f27586d5584c5a6191bbcff74be354f907000e7->leave($__internal_659e6716dc025a052133d6b13f27586d5584c5a6191bbcff74be354f907000e7_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_70394b70927fc4668198a70cdebc88499e8ff36d89f1eb11af5f02f714efebc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70394b70927fc4668198a70cdebc88499e8ff36d89f1eb11af5f02f714efebc4->enter($__internal_70394b70927fc4668198a70cdebc88499e8ff36d89f1eb11af5f02f714efebc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_2e80da348deffdfdee87b8ad61cf996707a0da37fe134926460d96b719a3f838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e80da348deffdfdee87b8ad61cf996707a0da37fe134926460d96b719a3f838->enter($__internal_2e80da348deffdfdee87b8ad61cf996707a0da37fe134926460d96b719a3f838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_2e80da348deffdfdee87b8ad61cf996707a0da37fe134926460d96b719a3f838->leave($__internal_2e80da348deffdfdee87b8ad61cf996707a0da37fe134926460d96b719a3f838_prof);

        
        $__internal_70394b70927fc4668198a70cdebc88499e8ff36d89f1eb11af5f02f714efebc4->leave($__internal_70394b70927fc4668198a70cdebc88499e8ff36d89f1eb11af5f02f714efebc4_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_64d6df82c771d941327d8a3312e4f10ffb85e57bb68965e89c66556cedf82099 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64d6df82c771d941327d8a3312e4f10ffb85e57bb68965e89c66556cedf82099->enter($__internal_64d6df82c771d941327d8a3312e4f10ffb85e57bb68965e89c66556cedf82099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_594dde005d85e231e8115ed6432595fc380e8a76df2096aa0c4c8ed8ebd9b2c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_594dde005d85e231e8115ed6432595fc380e8a76df2096aa0c4c8ed8ebd9b2c6->enter($__internal_594dde005d85e231e8115ed6432595fc380e8a76df2096aa0c4c8ed8ebd9b2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_594dde005d85e231e8115ed6432595fc380e8a76df2096aa0c4c8ed8ebd9b2c6->leave($__internal_594dde005d85e231e8115ed6432595fc380e8a76df2096aa0c4c8ed8ebd9b2c6_prof);

        
        $__internal_64d6df82c771d941327d8a3312e4f10ffb85e57bb68965e89c66556cedf82099->leave($__internal_64d6df82c771d941327d8a3312e4f10ffb85e57bb68965e89c66556cedf82099_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_76df234607284b8f4763b824a7724b5b74826299a03cfc198c00fe50b9911da7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76df234607284b8f4763b824a7724b5b74826299a03cfc198c00fe50b9911da7->enter($__internal_76df234607284b8f4763b824a7724b5b74826299a03cfc198c00fe50b9911da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_c1f234331032ee47b4532c4f1aa1b2def00785e92166de355d726e9d72a94158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1f234331032ee47b4532c4f1aa1b2def00785e92166de355d726e9d72a94158->enter($__internal_c1f234331032ee47b4532c4f1aa1b2def00785e92166de355d726e9d72a94158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_c1f234331032ee47b4532c4f1aa1b2def00785e92166de355d726e9d72a94158->leave($__internal_c1f234331032ee47b4532c4f1aa1b2def00785e92166de355d726e9d72a94158_prof);

        
        $__internal_76df234607284b8f4763b824a7724b5b74826299a03cfc198c00fe50b9911da7->leave($__internal_76df234607284b8f4763b824a7724b5b74826299a03cfc198c00fe50b9911da7_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_a88711a92d51e6f778617a2f66d57baa78f3da4a06ceedf7ddc379c4b793cdde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a88711a92d51e6f778617a2f66d57baa78f3da4a06ceedf7ddc379c4b793cdde->enter($__internal_a88711a92d51e6f778617a2f66d57baa78f3da4a06ceedf7ddc379c4b793cdde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_b73575f8374c7b43049f4e274388d84dcd3c527300d3707f372059f984c0ea94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b73575f8374c7b43049f4e274388d84dcd3c527300d3707f372059f984c0ea94->enter($__internal_b73575f8374c7b43049f4e274388d84dcd3c527300d3707f372059f984c0ea94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_b73575f8374c7b43049f4e274388d84dcd3c527300d3707f372059f984c0ea94->leave($__internal_b73575f8374c7b43049f4e274388d84dcd3c527300d3707f372059f984c0ea94_prof);

        
        $__internal_a88711a92d51e6f778617a2f66d57baa78f3da4a06ceedf7ddc379c4b793cdde->leave($__internal_a88711a92d51e6f778617a2f66d57baa78f3da4a06ceedf7ddc379c4b793cdde_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_d66e9d06ea3a7d80a9dadce735853583ee3fcd970d3f9918b5ec73c9bc94878c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d66e9d06ea3a7d80a9dadce735853583ee3fcd970d3f9918b5ec73c9bc94878c->enter($__internal_d66e9d06ea3a7d80a9dadce735853583ee3fcd970d3f9918b5ec73c9bc94878c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_a648a2b6ad790678e82230c5c3d73d8feb635fdac8b9588039d6f199ced6bfb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a648a2b6ad790678e82230c5c3d73d8feb635fdac8b9588039d6f199ced6bfb2->enter($__internal_a648a2b6ad790678e82230c5c3d73d8feb635fdac8b9588039d6f199ced6bfb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_a648a2b6ad790678e82230c5c3d73d8feb635fdac8b9588039d6f199ced6bfb2->leave($__internal_a648a2b6ad790678e82230c5c3d73d8feb635fdac8b9588039d6f199ced6bfb2_prof);

        
        $__internal_d66e9d06ea3a7d80a9dadce735853583ee3fcd970d3f9918b5ec73c9bc94878c->leave($__internal_d66e9d06ea3a7d80a9dadce735853583ee3fcd970d3f9918b5ec73c9bc94878c_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_4ed166f6eaaa5863b3277ee8bfc9c8e1f71c40bf71b4bde4139422128a3d6c24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ed166f6eaaa5863b3277ee8bfc9c8e1f71c40bf71b4bde4139422128a3d6c24->enter($__internal_4ed166f6eaaa5863b3277ee8bfc9c8e1f71c40bf71b4bde4139422128a3d6c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_e45a82751449db22bce4aa2fde0c8d2cb6ca566026e2661bc90e4899aa2adb0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e45a82751449db22bce4aa2fde0c8d2cb6ca566026e2661bc90e4899aa2adb0c->enter($__internal_e45a82751449db22bce4aa2fde0c8d2cb6ca566026e2661bc90e4899aa2adb0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_e45a82751449db22bce4aa2fde0c8d2cb6ca566026e2661bc90e4899aa2adb0c->leave($__internal_e45a82751449db22bce4aa2fde0c8d2cb6ca566026e2661bc90e4899aa2adb0c_prof);

        
        $__internal_4ed166f6eaaa5863b3277ee8bfc9c8e1f71c40bf71b4bde4139422128a3d6c24->leave($__internal_4ed166f6eaaa5863b3277ee8bfc9c8e1f71c40bf71b4bde4139422128a3d6c24_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_d38cc042677f5363259ad2c7720e85bde045cddcc0fd9ed37f02a5bfd2047995 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d38cc042677f5363259ad2c7720e85bde045cddcc0fd9ed37f02a5bfd2047995->enter($__internal_d38cc042677f5363259ad2c7720e85bde045cddcc0fd9ed37f02a5bfd2047995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_852d816465543746f3dcc1d29f425f1bbf238896996df705d5f2d61409872158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_852d816465543746f3dcc1d29f425f1bbf238896996df705d5f2d61409872158->enter($__internal_852d816465543746f3dcc1d29f425f1bbf238896996df705d5f2d61409872158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_852d816465543746f3dcc1d29f425f1bbf238896996df705d5f2d61409872158->leave($__internal_852d816465543746f3dcc1d29f425f1bbf238896996df705d5f2d61409872158_prof);

        
        $__internal_d38cc042677f5363259ad2c7720e85bde045cddcc0fd9ed37f02a5bfd2047995->leave($__internal_d38cc042677f5363259ad2c7720e85bde045cddcc0fd9ed37f02a5bfd2047995_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_83ad2d1757ec0544d7d507cef00335a47c01592407797f0b2f2cfe335fa3a1d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83ad2d1757ec0544d7d507cef00335a47c01592407797f0b2f2cfe335fa3a1d9->enter($__internal_83ad2d1757ec0544d7d507cef00335a47c01592407797f0b2f2cfe335fa3a1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_f5f5b2d077bef82e5a67000719e149316d9397f6666fb03a2901d8eb4b157e73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5f5b2d077bef82e5a67000719e149316d9397f6666fb03a2901d8eb4b157e73->enter($__internal_f5f5b2d077bef82e5a67000719e149316d9397f6666fb03a2901d8eb4b157e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_f5f5b2d077bef82e5a67000719e149316d9397f6666fb03a2901d8eb4b157e73->leave($__internal_f5f5b2d077bef82e5a67000719e149316d9397f6666fb03a2901d8eb4b157e73_prof);

        
        $__internal_83ad2d1757ec0544d7d507cef00335a47c01592407797f0b2f2cfe335fa3a1d9->leave($__internal_83ad2d1757ec0544d7d507cef00335a47c01592407797f0b2f2cfe335fa3a1d9_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_5eb09bd77c51dd88836043c513c62aa29c388a28927b7db31be42be41b1906d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eb09bd77c51dd88836043c513c62aa29c388a28927b7db31be42be41b1906d7->enter($__internal_5eb09bd77c51dd88836043c513c62aa29c388a28927b7db31be42be41b1906d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_3d7b74941e5feef0a01a590049e7fc0b59187dc700b6ceaf21b6f762605f9266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d7b74941e5feef0a01a590049e7fc0b59187dc700b6ceaf21b6f762605f9266->enter($__internal_3d7b74941e5feef0a01a590049e7fc0b59187dc700b6ceaf21b6f762605f9266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_3d7b74941e5feef0a01a590049e7fc0b59187dc700b6ceaf21b6f762605f9266->leave($__internal_3d7b74941e5feef0a01a590049e7fc0b59187dc700b6ceaf21b6f762605f9266_prof);

        
        $__internal_5eb09bd77c51dd88836043c513c62aa29c388a28927b7db31be42be41b1906d7->leave($__internal_5eb09bd77c51dd88836043c513c62aa29c388a28927b7db31be42be41b1906d7_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_63644e2240d0c0012abd55ddfc877ff5adf8b0ca341fc9912d09630e98b4d980 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63644e2240d0c0012abd55ddfc877ff5adf8b0ca341fc9912d09630e98b4d980->enter($__internal_63644e2240d0c0012abd55ddfc877ff5adf8b0ca341fc9912d09630e98b4d980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_700479484ca9bb9dc9832f48dc976da2f5e8b9837058e9ef96c7e7dd38150bac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_700479484ca9bb9dc9832f48dc976da2f5e8b9837058e9ef96c7e7dd38150bac->enter($__internal_700479484ca9bb9dc9832f48dc976da2f5e8b9837058e9ef96c7e7dd38150bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_700479484ca9bb9dc9832f48dc976da2f5e8b9837058e9ef96c7e7dd38150bac->leave($__internal_700479484ca9bb9dc9832f48dc976da2f5e8b9837058e9ef96c7e7dd38150bac_prof);

        
        $__internal_63644e2240d0c0012abd55ddfc877ff5adf8b0ca341fc9912d09630e98b4d980->leave($__internal_63644e2240d0c0012abd55ddfc877ff5adf8b0ca341fc9912d09630e98b4d980_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_d354c3ed1cb90f9c74c9aaed044f83d016bc7fd0688652b119dd792d578a0df5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d354c3ed1cb90f9c74c9aaed044f83d016bc7fd0688652b119dd792d578a0df5->enter($__internal_d354c3ed1cb90f9c74c9aaed044f83d016bc7fd0688652b119dd792d578a0df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_1c8b7d17c17e29a647e5d011616c39e7ce26197c5a6ca71b5688fd8528fd31fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c8b7d17c17e29a647e5d011616c39e7ce26197c5a6ca71b5688fd8528fd31fb->enter($__internal_1c8b7d17c17e29a647e5d011616c39e7ce26197c5a6ca71b5688fd8528fd31fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 197
        echo "    ";
        // line 198
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 199
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 200
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 201
                echo "        ";
            }
            // line 202
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 203
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 204
                echo "        ";
            }
            // line 205
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 206
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 207
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 208
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 209
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 212
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 215
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 216
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 217
            echo "</label>
    ";
        }
        
        $__internal_1c8b7d17c17e29a647e5d011616c39e7ce26197c5a6ca71b5688fd8528fd31fb->leave($__internal_1c8b7d17c17e29a647e5d011616c39e7ce26197c5a6ca71b5688fd8528fd31fb_prof);

        
        $__internal_d354c3ed1cb90f9c74c9aaed044f83d016bc7fd0688652b119dd792d578a0df5->leave($__internal_d354c3ed1cb90f9c74c9aaed044f83d016bc7fd0688652b119dd792d578a0df5_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_c60bfe2e77a74e4655ffe4223616c8bc0a99e3862ca8529f0a93f9ccccf7d1ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c60bfe2e77a74e4655ffe4223616c8bc0a99e3862ca8529f0a93f9ccccf7d1ca->enter($__internal_c60bfe2e77a74e4655ffe4223616c8bc0a99e3862ca8529f0a93f9ccccf7d1ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_c065a59b16ca329b9a1b60b3c9860bcdeb6f7cc4a49fdb3f14256ff12ec66332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c065a59b16ca329b9a1b60b3c9860bcdeb6f7cc4a49fdb3f14256ff12ec66332->enter($__internal_c065a59b16ca329b9a1b60b3c9860bcdeb6f7cc4a49fdb3f14256ff12ec66332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 224
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 225
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 226
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 227
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 228
        echo "</div>";
        
        $__internal_c065a59b16ca329b9a1b60b3c9860bcdeb6f7cc4a49fdb3f14256ff12ec66332->leave($__internal_c065a59b16ca329b9a1b60b3c9860bcdeb6f7cc4a49fdb3f14256ff12ec66332_prof);

        
        $__internal_c60bfe2e77a74e4655ffe4223616c8bc0a99e3862ca8529f0a93f9ccccf7d1ca->leave($__internal_c60bfe2e77a74e4655ffe4223616c8bc0a99e3862ca8529f0a93f9ccccf7d1ca_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_2469a1436fcd7baf4f8cb9c6b8caf310162e0250a34f95ed84a35846638ae692 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2469a1436fcd7baf4f8cb9c6b8caf310162e0250a34f95ed84a35846638ae692->enter($__internal_2469a1436fcd7baf4f8cb9c6b8caf310162e0250a34f95ed84a35846638ae692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_0dd0dfdd246844456936cc91901981b92dda5f46d0e0906e58c519feb6fc96b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dd0dfdd246844456936cc91901981b92dda5f46d0e0906e58c519feb6fc96b5->enter($__internal_0dd0dfdd246844456936cc91901981b92dda5f46d0e0906e58c519feb6fc96b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_0dd0dfdd246844456936cc91901981b92dda5f46d0e0906e58c519feb6fc96b5->leave($__internal_0dd0dfdd246844456936cc91901981b92dda5f46d0e0906e58c519feb6fc96b5_prof);

        
        $__internal_2469a1436fcd7baf4f8cb9c6b8caf310162e0250a34f95ed84a35846638ae692->leave($__internal_2469a1436fcd7baf4f8cb9c6b8caf310162e0250a34f95ed84a35846638ae692_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_5a6a4d1ac443a452cb8cc193c9fc4b40ab1c10c5e6292ff37c2713a269ca03d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a6a4d1ac443a452cb8cc193c9fc4b40ab1c10c5e6292ff37c2713a269ca03d9->enter($__internal_5a6a4d1ac443a452cb8cc193c9fc4b40ab1c10c5e6292ff37c2713a269ca03d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_d8b6a605a204f406e595e0d46d8b2de4c15d2c40f8f6c9d3d1552d7d8c83f314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8b6a605a204f406e595e0d46d8b2de4c15d2c40f8f6c9d3d1552d7d8c83f314->enter($__internal_d8b6a605a204f406e595e0d46d8b2de4c15d2c40f8f6c9d3d1552d7d8c83f314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d8b6a605a204f406e595e0d46d8b2de4c15d2c40f8f6c9d3d1552d7d8c83f314->leave($__internal_d8b6a605a204f406e595e0d46d8b2de4c15d2c40f8f6c9d3d1552d7d8c83f314_prof);

        
        $__internal_5a6a4d1ac443a452cb8cc193c9fc4b40ab1c10c5e6292ff37c2713a269ca03d9->leave($__internal_5a6a4d1ac443a452cb8cc193c9fc4b40ab1c10c5e6292ff37c2713a269ca03d9_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_f54c2fd01b5c673738a2e7aa82751488201e5785fe2d00c980aa1d8edbf9dffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f54c2fd01b5c673738a2e7aa82751488201e5785fe2d00c980aa1d8edbf9dffe->enter($__internal_f54c2fd01b5c673738a2e7aa82751488201e5785fe2d00c980aa1d8edbf9dffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_288ea99e7203b45c90caf7e4721933a878bb518352db330c000824a50fa82a9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_288ea99e7203b45c90caf7e4721933a878bb518352db330c000824a50fa82a9b->enter($__internal_288ea99e7203b45c90caf7e4721933a878bb518352db330c000824a50fa82a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_288ea99e7203b45c90caf7e4721933a878bb518352db330c000824a50fa82a9b->leave($__internal_288ea99e7203b45c90caf7e4721933a878bb518352db330c000824a50fa82a9b_prof);

        
        $__internal_f54c2fd01b5c673738a2e7aa82751488201e5785fe2d00c980aa1d8edbf9dffe->leave($__internal_f54c2fd01b5c673738a2e7aa82751488201e5785fe2d00c980aa1d8edbf9dffe_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_98ee63240a7d965f2e81f9fb3bf2e914ac47df9e9c0d74a194b0611f3180d2f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98ee63240a7d965f2e81f9fb3bf2e914ac47df9e9c0d74a194b0611f3180d2f3->enter($__internal_98ee63240a7d965f2e81f9fb3bf2e914ac47df9e9c0d74a194b0611f3180d2f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_ba422c67f6777a4340909116cdb8cc4f9f967a4c11287c2cdc34bd4daf512416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba422c67f6777a4340909116cdb8cc4f9f967a4c11287c2cdc34bd4daf512416->enter($__internal_ba422c67f6777a4340909116cdb8cc4f9f967a4c11287c2cdc34bd4daf512416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ba422c67f6777a4340909116cdb8cc4f9f967a4c11287c2cdc34bd4daf512416->leave($__internal_ba422c67f6777a4340909116cdb8cc4f9f967a4c11287c2cdc34bd4daf512416_prof);

        
        $__internal_98ee63240a7d965f2e81f9fb3bf2e914ac47df9e9c0d74a194b0611f3180d2f3->leave($__internal_98ee63240a7d965f2e81f9fb3bf2e914ac47df9e9c0d74a194b0611f3180d2f3_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_b904de2733195f9d6feab0393bea97cea8b2962931949c7fbc77baf9554551cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b904de2733195f9d6feab0393bea97cea8b2962931949c7fbc77baf9554551cf->enter($__internal_b904de2733195f9d6feab0393bea97cea8b2962931949c7fbc77baf9554551cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_ca7b64b446f7dddb66d93c61d062867a3abaa149a520a2101c68c3a03bb9b0e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca7b64b446f7dddb66d93c61d062867a3abaa149a520a2101c68c3a03bb9b0e8->enter($__internal_ca7b64b446f7dddb66d93c61d062867a3abaa149a520a2101c68c3a03bb9b0e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ca7b64b446f7dddb66d93c61d062867a3abaa149a520a2101c68c3a03bb9b0e8->leave($__internal_ca7b64b446f7dddb66d93c61d062867a3abaa149a520a2101c68c3a03bb9b0e8_prof);

        
        $__internal_b904de2733195f9d6feab0393bea97cea8b2962931949c7fbc77baf9554551cf->leave($__internal_b904de2733195f9d6feab0393bea97cea8b2962931949c7fbc77baf9554551cf_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_33694ee021201bd4d38474e837a802634f27e5bc101de840a504a7be8888761e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33694ee021201bd4d38474e837a802634f27e5bc101de840a504a7be8888761e->enter($__internal_33694ee021201bd4d38474e837a802634f27e5bc101de840a504a7be8888761e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_bcf25df9180f7879ec6975314656c8d066f666283a46f0bd46c1cdff98efbfb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcf25df9180f7879ec6975314656c8d066f666283a46f0bd46c1cdff98efbfb2->enter($__internal_bcf25df9180f7879ec6975314656c8d066f666283a46f0bd46c1cdff98efbfb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 258
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 259
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 260
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 261
        echo "</div>";
        
        $__internal_bcf25df9180f7879ec6975314656c8d066f666283a46f0bd46c1cdff98efbfb2->leave($__internal_bcf25df9180f7879ec6975314656c8d066f666283a46f0bd46c1cdff98efbfb2_prof);

        
        $__internal_33694ee021201bd4d38474e837a802634f27e5bc101de840a504a7be8888761e->leave($__internal_33694ee021201bd4d38474e837a802634f27e5bc101de840a504a7be8888761e_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_3153322b5e03431435280d0f5b35af721b6e12824db2a1b3bc8a8aab109a9c36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3153322b5e03431435280d0f5b35af721b6e12824db2a1b3bc8a8aab109a9c36->enter($__internal_3153322b5e03431435280d0f5b35af721b6e12824db2a1b3bc8a8aab109a9c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_c55cba18b8b2d0afdc3eb7063784d8401abd74ccbfedbaf73ea62b62faecaa2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c55cba18b8b2d0afdc3eb7063784d8401abd74ccbfedbaf73ea62b62faecaa2d->enter($__internal_c55cba18b8b2d0afdc3eb7063784d8401abd74ccbfedbaf73ea62b62faecaa2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 265
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 266
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 267
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 268
        echo "</div>";
        
        $__internal_c55cba18b8b2d0afdc3eb7063784d8401abd74ccbfedbaf73ea62b62faecaa2d->leave($__internal_c55cba18b8b2d0afdc3eb7063784d8401abd74ccbfedbaf73ea62b62faecaa2d_prof);

        
        $__internal_3153322b5e03431435280d0f5b35af721b6e12824db2a1b3bc8a8aab109a9c36->leave($__internal_3153322b5e03431435280d0f5b35af721b6e12824db2a1b3bc8a8aab109a9c36_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_86b420ab239345bb44dcd3a2f6a0e23b8ed1c527af7b32df0dd79b67b8877568 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86b420ab239345bb44dcd3a2f6a0e23b8ed1c527af7b32df0dd79b67b8877568->enter($__internal_86b420ab239345bb44dcd3a2f6a0e23b8ed1c527af7b32df0dd79b67b8877568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_1bda17f214024941ddce31af5ee57cab12f6ca25dbc1f9797f9b46ba7c883bd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bda17f214024941ddce31af5ee57cab12f6ca25dbc1f9797f9b46ba7c883bd6->enter($__internal_1bda17f214024941ddce31af5ee57cab12f6ca25dbc1f9797f9b46ba7c883bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 274
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 275
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 276
            echo "    <ul class=\"list-unstyled\">";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 278
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "</ul>
    ";
            // line 281
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_1bda17f214024941ddce31af5ee57cab12f6ca25dbc1f9797f9b46ba7c883bd6->leave($__internal_1bda17f214024941ddce31af5ee57cab12f6ca25dbc1f9797f9b46ba7c883bd6_prof);

        
        $__internal_86b420ab239345bb44dcd3a2f6a0e23b8ed1c527af7b32df0dd79b67b8877568->leave($__internal_86b420ab239345bb44dcd3a2f6a0e23b8ed1c527af7b32df0dd79b67b8877568_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1135 => 281,  1132 => 280,  1124 => 278,  1120 => 277,  1118 => 276,  1112 => 275,  1110 => 274,  1101 => 273,  1091 => 268,  1089 => 267,  1087 => 266,  1081 => 265,  1072 => 264,  1062 => 261,  1060 => 260,  1058 => 259,  1052 => 258,  1043 => 257,  1033 => 254,  1031 => 253,  1022 => 252,  1012 => 249,  1010 => 248,  1001 => 247,  991 => 244,  989 => 243,  980 => 242,  970 => 239,  968 => 238,  959 => 237,  949 => 234,  947 => 233,  945 => 232,  936 => 231,  926 => 228,  924 => 227,  922 => 226,  920 => 225,  914 => 224,  905 => 223,  893 => 217,  889 => 216,  874 => 215,  870 => 212,  867 => 209,  866 => 208,  865 => 207,  863 => 206,  860 => 205,  857 => 204,  854 => 203,  851 => 202,  848 => 201,  845 => 200,  842 => 199,  839 => 198,  837 => 197,  828 => 196,  818 => 193,  809 => 192,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 273,  200 => 272,  197 => 270,  195 => 264,  192 => 263,  190 => 257,  187 => 256,  185 => 252,  182 => 251,  180 => 247,  177 => 246,  175 => 242,  172 => 241,  170 => 237,  167 => 236,  165 => 231,  162 => 230,  160 => 223,  157 => 222,  154 => 220,  152 => 196,  149 => 195,  147 => 192,  144 => 191,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "C:\\wamp64\\www\\newP4\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
