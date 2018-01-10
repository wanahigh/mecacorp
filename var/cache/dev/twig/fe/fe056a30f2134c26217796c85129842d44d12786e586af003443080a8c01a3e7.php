<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_34500fdd1f6648e433ae160545332950506ecdafa06f0093b97447aa08f40bee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'button_widget' => array($this, 'block_button_widget'),
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
        $__internal_6408d660688aa3533e44ccad1c2274068c9c5edf5fa4a9e784fefc3179a4b02c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6408d660688aa3533e44ccad1c2274068c9c5edf5fa4a9e784fefc3179a4b02c->enter($__internal_6408d660688aa3533e44ccad1c2274068c9c5edf5fa4a9e784fefc3179a4b02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_3b01ab109ad3f2eeabf4f543c0d8c9d12888dc912218a854e98843036fe66a15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b01ab109ad3f2eeabf4f543c0d8c9d12888dc912218a854e98843036fe66a15->enter($__internal_3b01ab109ad3f2eeabf4f543c0d8c9d12888dc912218a854e98843036fe66a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        $this->displayBlock('button_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 38
        echo "
";
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('form_label', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('choice_label', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('radio_label', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 88
        echo "
";
        // line 90
        echo "
";
        // line 91
        $this->displayBlock('form_row', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('button_row', $context, $blocks);
        // line 104
        echo "
";
        // line 105
        $this->displayBlock('choice_row', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('date_row', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('time_row', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 124
        echo "
";
        // line 125
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('radio_row', $context, $blocks);
        // line 138
        echo "
";
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_6408d660688aa3533e44ccad1c2274068c9c5edf5fa4a9e784fefc3179a4b02c->leave($__internal_6408d660688aa3533e44ccad1c2274068c9c5edf5fa4a9e784fefc3179a4b02c_prof);

        
        $__internal_3b01ab109ad3f2eeabf4f543c0d8c9d12888dc912218a854e98843036fe66a15->leave($__internal_3b01ab109ad3f2eeabf4f543c0d8c9d12888dc912218a854e98843036fe66a15_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_6f05a0c76e4559d8821d930a94c4ca4fc765f04947c13ae4a7da9f7531dacf83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f05a0c76e4559d8821d930a94c4ca4fc765f04947c13ae4a7da9f7531dacf83->enter($__internal_6f05a0c76e4559d8821d930a94c4ca4fc765f04947c13ae4a7da9f7531dacf83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_bf7dc30a32895f36f73c3a82161f8a50621f4de3610fb3e10f3e1098024214c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf7dc30a32895f36f73c3a82161f8a50621f4de3610fb3e10f3e1098024214c4->enter($__internal_bf7dc30a32895f36f73c3a82161f8a50621f4de3610fb3e10f3e1098024214c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_bf7dc30a32895f36f73c3a82161f8a50621f4de3610fb3e10f3e1098024214c4->leave($__internal_bf7dc30a32895f36f73c3a82161f8a50621f4de3610fb3e10f3e1098024214c4_prof);

        
        $__internal_6f05a0c76e4559d8821d930a94c4ca4fc765f04947c13ae4a7da9f7531dacf83->leave($__internal_6f05a0c76e4559d8821d930a94c4ca4fc765f04947c13ae4a7da9f7531dacf83_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_78f74e81ce0d6e3082127669bfee118d84b5dfeda269aef8af56612ff036f6a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78f74e81ce0d6e3082127669bfee118d84b5dfeda269aef8af56612ff036f6a4->enter($__internal_78f74e81ce0d6e3082127669bfee118d84b5dfeda269aef8af56612ff036f6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_040bc1fb30756bb620616f3a0c96c91b34e650edc8cf368fa065badb6ee1ded0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_040bc1fb30756bb620616f3a0c96c91b34e650edc8cf368fa065badb6ee1ded0->enter($__internal_040bc1fb30756bb620616f3a0c96c91b34e650edc8cf368fa065badb6ee1ded0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_040bc1fb30756bb620616f3a0c96c91b34e650edc8cf368fa065badb6ee1ded0->leave($__internal_040bc1fb30756bb620616f3a0c96c91b34e650edc8cf368fa065badb6ee1ded0_prof);

        
        $__internal_78f74e81ce0d6e3082127669bfee118d84b5dfeda269aef8af56612ff036f6a4->leave($__internal_78f74e81ce0d6e3082127669bfee118d84b5dfeda269aef8af56612ff036f6a4_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_e936d95773f4f2f7aa2e9884d61b86c0b2c4ba3059ef091eeca4c626309e7377 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e936d95773f4f2f7aa2e9884d61b86c0b2c4ba3059ef091eeca4c626309e7377->enter($__internal_e936d95773f4f2f7aa2e9884d61b86c0b2c4ba3059ef091eeca4c626309e7377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_213dae151497ef48b5617a754a0447a673d900bd693b40dce0979d221f659f90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_213dae151497ef48b5617a754a0447a673d900bd693b40dce0979d221f659f90->enter($__internal_213dae151497ef48b5617a754a0447a673d900bd693b40dce0979d221f659f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 18
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 18, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 19
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 19, $this->getSourceContext()); })()))) {
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 22
            echo "<div class=\"checkbox\">";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 24
            echo "</div>";
        }
        
        $__internal_213dae151497ef48b5617a754a0447a673d900bd693b40dce0979d221f659f90->leave($__internal_213dae151497ef48b5617a754a0447a673d900bd693b40dce0979d221f659f90_prof);

        
        $__internal_e936d95773f4f2f7aa2e9884d61b86c0b2c4ba3059ef091eeca4c626309e7377->leave($__internal_e936d95773f4f2f7aa2e9884d61b86c0b2c4ba3059ef091eeca4c626309e7377_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_baaebdee924e7701e01613ecfbe206f196f86fde32e78e23b4ebbb435de14580 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baaebdee924e7701e01613ecfbe206f196f86fde32e78e23b4ebbb435de14580->enter($__internal_baaebdee924e7701e01613ecfbe206f196f86fde32e78e23b4ebbb435de14580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_c472a8617a66abd09bd7077e82dae2e660a95b6674c29079b3d350011fe2983d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c472a8617a66abd09bd7077e82dae2e660a95b6674c29079b3d350011fe2983d->enter($__internal_c472a8617a66abd09bd7077e82dae2e660a95b6674c29079b3d350011fe2983d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 29
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 29, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 30
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 30, $this->getSourceContext()); })()))) {
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 33
            echo "<div class=\"radio\">";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 35
            echo "</div>";
        }
        
        $__internal_c472a8617a66abd09bd7077e82dae2e660a95b6674c29079b3d350011fe2983d->leave($__internal_c472a8617a66abd09bd7077e82dae2e660a95b6674c29079b3d350011fe2983d_prof);

        
        $__internal_baaebdee924e7701e01613ecfbe206f196f86fde32e78e23b4ebbb435de14580->leave($__internal_baaebdee924e7701e01613ecfbe206f196f86fde32e78e23b4ebbb435de14580_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_19ac02e71cafa12cfec6f698b7599e5e995f6324b5e3c0d8ba4b84ac8e665783 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19ac02e71cafa12cfec6f698b7599e5e995f6324b5e3c0d8ba4b84ac8e665783->enter($__internal_19ac02e71cafa12cfec6f698b7599e5e995f6324b5e3c0d8ba4b84ac8e665783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_db76b362aaecb99002e7a982e9476693e78be4f31c7424335e978ecb87c5cd23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db76b362aaecb99002e7a982e9476693e78be4f31c7424335e978ecb87c5cd23->enter($__internal_db76b362aaecb99002e7a982e9476693e78be4f31c7424335e978ecb87c5cd23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_db76b362aaecb99002e7a982e9476693e78be4f31c7424335e978ecb87c5cd23->leave($__internal_db76b362aaecb99002e7a982e9476693e78be4f31c7424335e978ecb87c5cd23_prof);

        
        $__internal_19ac02e71cafa12cfec6f698b7599e5e995f6324b5e3c0d8ba4b84ac8e665783->leave($__internal_19ac02e71cafa12cfec6f698b7599e5e995f6324b5e3c0d8ba4b84ac8e665783_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_3405f700730918a69457bbbb6395003a28f377aafb0582f1a94d8e7fbdc294a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3405f700730918a69457bbbb6395003a28f377aafb0582f1a94d8e7fbdc294a8->enter($__internal_3405f700730918a69457bbbb6395003a28f377aafb0582f1a94d8e7fbdc294a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_662050394316622fc3771f109d5d2df108e12d711fb5efee973812bff551b065 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_662050394316622fc3771f109d5d2df108e12d711fb5efee973812bff551b065->enter($__internal_662050394316622fc3771f109d5d2df108e12d711fb5efee973812bff551b065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_662050394316622fc3771f109d5d2df108e12d711fb5efee973812bff551b065->leave($__internal_662050394316622fc3771f109d5d2df108e12d711fb5efee973812bff551b065_prof);

        
        $__internal_3405f700730918a69457bbbb6395003a28f377aafb0582f1a94d8e7fbdc294a8->leave($__internal_3405f700730918a69457bbbb6395003a28f377aafb0582f1a94d8e7fbdc294a8_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_874612596f8ef89d188a0e6e84168d8a2bbc010b2c4553a3c0744ee650c5e9d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_874612596f8ef89d188a0e6e84168d8a2bbc010b2c4553a3c0744ee650c5e9d7->enter($__internal_874612596f8ef89d188a0e6e84168d8a2bbc010b2c4553a3c0744ee650c5e9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_b4e2894cf28e8185163e228c37f7fe3a7870e1e543f2ab12c265cefc5a58ebc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4e2894cf28e8185163e228c37f7fe3a7870e1e543f2ab12c265cefc5a58ebc6->enter($__internal_b4e2894cf28e8185163e228c37f7fe3a7870e1e543f2ab12c265cefc5a58ebc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_b4e2894cf28e8185163e228c37f7fe3a7870e1e543f2ab12c265cefc5a58ebc6->leave($__internal_b4e2894cf28e8185163e228c37f7fe3a7870e1e543f2ab12c265cefc5a58ebc6_prof);

        
        $__internal_874612596f8ef89d188a0e6e84168d8a2bbc010b2c4553a3c0744ee650c5e9d7->leave($__internal_874612596f8ef89d188a0e6e84168d8a2bbc010b2c4553a3c0744ee650c5e9d7_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_cefe933b78c9b79f8ab73ab91849607473d2a820d36c9ffd4c8557ed507db9c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cefe933b78c9b79f8ab73ab91849607473d2a820d36c9ffd4c8557ed507db9c4->enter($__internal_cefe933b78c9b79f8ab73ab91849607473d2a820d36c9ffd4c8557ed507db9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_de32566c7c120d0a5e992f3722bc6efb7e6dfd438723032800e6e6d8924761cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de32566c7c120d0a5e992f3722bc6efb7e6dfd438723032800e6e6d8924761cb->enter($__internal_de32566c7c120d0a5e992f3722bc6efb7e6dfd438723032800e6e6d8924761cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_de32566c7c120d0a5e992f3722bc6efb7e6dfd438723032800e6e6d8924761cb->leave($__internal_de32566c7c120d0a5e992f3722bc6efb7e6dfd438723032800e6e6d8924761cb_prof);

        
        $__internal_cefe933b78c9b79f8ab73ab91849607473d2a820d36c9ffd4c8557ed507db9c4->leave($__internal_cefe933b78c9b79f8ab73ab91849607473d2a820d36c9ffd4c8557ed507db9c4_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_eb07c1c0a81a91e51867c3012bbce477bf7b20b5c0d1c34e70e31ebc9b814cc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb07c1c0a81a91e51867c3012bbce477bf7b20b5c0d1c34e70e31ebc9b814cc6->enter($__internal_eb07c1c0a81a91e51867c3012bbce477bf7b20b5c0d1c34e70e31ebc9b814cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_353435cb8832f80c2381f8fe1069b8cc89fe8da43cdf61f209b2af42e7e477c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_353435cb8832f80c2381f8fe1069b8cc89fe8da43cdf61f209b2af42e7e477c8->enter($__internal_353435cb8832f80c2381f8fe1069b8cc89fe8da43cdf61f209b2af42e7e477c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 66
        if (array_key_exists("widget", $context)) {
            // line 67
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 67, $this->getSourceContext()); })())) {
                // line 68
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 68, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 70
            if (array_key_exists("parent_label_class", $context)) {
                // line 71
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 71, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 71, $this->getSourceContext()); })())))));
            }
            // line 73
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 73, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 73, $this->getSourceContext()); })())))) {
                // line 74
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 74, $this->getSourceContext()); })()))) {
                    // line 75
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 75, $this->getSourceContext()); })()), array("%name%" =>                     // line 76
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 76, $this->getSourceContext()); })()), "%id%" =>                     // line 77
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 77, $this->getSourceContext()); })())));
                } else {
                    // line 80
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 80, $this->getSourceContext()); })()));
                }
            }
            // line 83
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 83, $this->getSourceContext()); })()));
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
            // line 84
            echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 84, $this->getSourceContext()); })());
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })()) === false)) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 84, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 84, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            // line 85
            echo "</label>";
        }
        
        $__internal_353435cb8832f80c2381f8fe1069b8cc89fe8da43cdf61f209b2af42e7e477c8->leave($__internal_353435cb8832f80c2381f8fe1069b8cc89fe8da43cdf61f209b2af42e7e477c8_prof);

        
        $__internal_eb07c1c0a81a91e51867c3012bbce477bf7b20b5c0d1c34e70e31ebc9b814cc6->leave($__internal_eb07c1c0a81a91e51867c3012bbce477bf7b20b5c0d1c34e70e31ebc9b814cc6_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_91ca8d1602cfdcd64505c4b05267d26f7ebad839668fe1b944d4c733c62f12d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91ca8d1602cfdcd64505c4b05267d26f7ebad839668fe1b944d4c733c62f12d7->enter($__internal_91ca8d1602cfdcd64505c4b05267d26f7ebad839668fe1b944d4c733c62f12d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_22d7c64ee718ea38703bc974cd9f81dd49f25de97e70264c7c5ef18c802bc254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22d7c64ee718ea38703bc974cd9f81dd49f25de97e70264c7c5ef18c802bc254->enter($__internal_22d7c64ee718ea38703bc974cd9f81dd49f25de97e70264c7c5ef18c802bc254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 92
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 92, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 92, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 92, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 93, $this->getSourceContext()); })()), 'label');
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 94, $this->getSourceContext()); })()), 'widget');
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 95, $this->getSourceContext()); })()), 'errors');
        // line 96
        echo "</div>";
        
        $__internal_22d7c64ee718ea38703bc974cd9f81dd49f25de97e70264c7c5ef18c802bc254->leave($__internal_22d7c64ee718ea38703bc974cd9f81dd49f25de97e70264c7c5ef18c802bc254_prof);

        
        $__internal_91ca8d1602cfdcd64505c4b05267d26f7ebad839668fe1b944d4c733c62f12d7->leave($__internal_91ca8d1602cfdcd64505c4b05267d26f7ebad839668fe1b944d4c733c62f12d7_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_fb8192023dfc0b86b1799cd55dd5a66361f1ce1c58a6d88feae0ff931e4fa86b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb8192023dfc0b86b1799cd55dd5a66361f1ce1c58a6d88feae0ff931e4fa86b->enter($__internal_fb8192023dfc0b86b1799cd55dd5a66361f1ce1c58a6d88feae0ff931e4fa86b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_5fa55a2eaaa9e9899219156e6ef95523259fbcf0ad24d43b699604f569a22bc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fa55a2eaaa9e9899219156e6ef95523259fbcf0ad24d43b699604f569a22bc1->enter($__internal_5fa55a2eaaa9e9899219156e6ef95523259fbcf0ad24d43b699604f569a22bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_5fa55a2eaaa9e9899219156e6ef95523259fbcf0ad24d43b699604f569a22bc1->leave($__internal_5fa55a2eaaa9e9899219156e6ef95523259fbcf0ad24d43b699604f569a22bc1_prof);

        
        $__internal_fb8192023dfc0b86b1799cd55dd5a66361f1ce1c58a6d88feae0ff931e4fa86b->leave($__internal_fb8192023dfc0b86b1799cd55dd5a66361f1ce1c58a6d88feae0ff931e4fa86b_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_cc21c3a35c0b409bc07293758c9952b9ef81392b0780edfebdeac802a0f7a389 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc21c3a35c0b409bc07293758c9952b9ef81392b0780edfebdeac802a0f7a389->enter($__internal_cc21c3a35c0b409bc07293758c9952b9ef81392b0780edfebdeac802a0f7a389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_1e78818b41698fc31a489950ff1de08e9dbd1c76bdd9ce858a493df9ee9c2645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e78818b41698fc31a489950ff1de08e9dbd1c76bdd9ce858a493df9ee9c2645->enter($__internal_1e78818b41698fc31a489950ff1de08e9dbd1c76bdd9ce858a493df9ee9c2645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1e78818b41698fc31a489950ff1de08e9dbd1c76bdd9ce858a493df9ee9c2645->leave($__internal_1e78818b41698fc31a489950ff1de08e9dbd1c76bdd9ce858a493df9ee9c2645_prof);

        
        $__internal_cc21c3a35c0b409bc07293758c9952b9ef81392b0780edfebdeac802a0f7a389->leave($__internal_cc21c3a35c0b409bc07293758c9952b9ef81392b0780edfebdeac802a0f7a389_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_bc40d1841bed6187c00ffa6ebcccbe3ba29380c896f49bc31a110d37c09d9db3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc40d1841bed6187c00ffa6ebcccbe3ba29380c896f49bc31a110d37c09d9db3->enter($__internal_bc40d1841bed6187c00ffa6ebcccbe3ba29380c896f49bc31a110d37c09d9db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_441e430a2b4d15829e131dc4391891da6964b13c123cdebc3eeebefeb43b6407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_441e430a2b4d15829e131dc4391891da6964b13c123cdebc3eeebefeb43b6407->enter($__internal_441e430a2b4d15829e131dc4391891da6964b13c123cdebc3eeebefeb43b6407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_441e430a2b4d15829e131dc4391891da6964b13c123cdebc3eeebefeb43b6407->leave($__internal_441e430a2b4d15829e131dc4391891da6964b13c123cdebc3eeebefeb43b6407_prof);

        
        $__internal_bc40d1841bed6187c00ffa6ebcccbe3ba29380c896f49bc31a110d37c09d9db3->leave($__internal_bc40d1841bed6187c00ffa6ebcccbe3ba29380c896f49bc31a110d37c09d9db3_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_f25afd3a9cec535d7adf9258f7c31977ae0bbd428392d0f105302032093c1767 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f25afd3a9cec535d7adf9258f7c31977ae0bbd428392d0f105302032093c1767->enter($__internal_f25afd3a9cec535d7adf9258f7c31977ae0bbd428392d0f105302032093c1767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_61855f5c84e99a9b085220438e0b3b5d3a8d4b2aa8107a2121671490eddfffc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61855f5c84e99a9b085220438e0b3b5d3a8d4b2aa8107a2121671490eddfffc6->enter($__internal_61855f5c84e99a9b085220438e0b3b5d3a8d4b2aa8107a2121671490eddfffc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_61855f5c84e99a9b085220438e0b3b5d3a8d4b2aa8107a2121671490eddfffc6->leave($__internal_61855f5c84e99a9b085220438e0b3b5d3a8d4b2aa8107a2121671490eddfffc6_prof);

        
        $__internal_f25afd3a9cec535d7adf9258f7c31977ae0bbd428392d0f105302032093c1767->leave($__internal_f25afd3a9cec535d7adf9258f7c31977ae0bbd428392d0f105302032093c1767_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_ff8c980e2357259d46c6d365eebc5e3e7bf8049586b1564733b82d2b1ed4bd83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff8c980e2357259d46c6d365eebc5e3e7bf8049586b1564733b82d2b1ed4bd83->enter($__internal_ff8c980e2357259d46c6d365eebc5e3e7bf8049586b1564733b82d2b1ed4bd83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_91a156c65333885caef163fb3f32a559e2121d9cce2fe3811392155ab51e5d11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91a156c65333885caef163fb3f32a559e2121d9cce2fe3811392155ab51e5d11->enter($__internal_91a156c65333885caef163fb3f32a559e2121d9cce2fe3811392155ab51e5d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_91a156c65333885caef163fb3f32a559e2121d9cce2fe3811392155ab51e5d11->leave($__internal_91a156c65333885caef163fb3f32a559e2121d9cce2fe3811392155ab51e5d11_prof);

        
        $__internal_ff8c980e2357259d46c6d365eebc5e3e7bf8049586b1564733b82d2b1ed4bd83->leave($__internal_ff8c980e2357259d46c6d365eebc5e3e7bf8049586b1564733b82d2b1ed4bd83_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_214becf250494d54953803354ca0a23d7d196616dd21bfd53a1309b3a2c6884e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_214becf250494d54953803354ca0a23d7d196616dd21bfd53a1309b3a2c6884e->enter($__internal_214becf250494d54953803354ca0a23d7d196616dd21bfd53a1309b3a2c6884e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_815d1b6b898c68b63c1fb06245d74169a1441575e45872d6de7495ce222a86f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_815d1b6b898c68b63c1fb06245d74169a1441575e45872d6de7495ce222a86f7->enter($__internal_815d1b6b898c68b63c1fb06245d74169a1441575e45872d6de7495ce222a86f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 126
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 126, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 127, $this->getSourceContext()); })()), 'widget');
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), 'errors');
        // line 129
        echo "</div>";
        
        $__internal_815d1b6b898c68b63c1fb06245d74169a1441575e45872d6de7495ce222a86f7->leave($__internal_815d1b6b898c68b63c1fb06245d74169a1441575e45872d6de7495ce222a86f7_prof);

        
        $__internal_214becf250494d54953803354ca0a23d7d196616dd21bfd53a1309b3a2c6884e->leave($__internal_214becf250494d54953803354ca0a23d7d196616dd21bfd53a1309b3a2c6884e_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_79ad15227ffe8c274295f17720e617f251bb7017802d25c046d332fcf40c8b01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79ad15227ffe8c274295f17720e617f251bb7017802d25c046d332fcf40c8b01->enter($__internal_79ad15227ffe8c274295f17720e617f251bb7017802d25c046d332fcf40c8b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_c4c469fbe59b3325a67120817562b88930ece549a968d3878f232ce329ffa9d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4c469fbe59b3325a67120817562b88930ece549a968d3878f232ce329ffa9d7->enter($__internal_c4c469fbe59b3325a67120817562b88930ece549a968d3878f232ce329ffa9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 133
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 133, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->getSourceContext()); })()), 'widget');
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 135, $this->getSourceContext()); })()), 'errors');
        // line 136
        echo "</div>";
        
        $__internal_c4c469fbe59b3325a67120817562b88930ece549a968d3878f232ce329ffa9d7->leave($__internal_c4c469fbe59b3325a67120817562b88930ece549a968d3878f232ce329ffa9d7_prof);

        
        $__internal_79ad15227ffe8c274295f17720e617f251bb7017802d25c046d332fcf40c8b01->leave($__internal_79ad15227ffe8c274295f17720e617f251bb7017802d25c046d332fcf40c8b01_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_4254a2ec69d7a42196181e898095c6b3186890ffd8d20dc651c2340f7d8c16a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4254a2ec69d7a42196181e898095c6b3186890ffd8d20dc651c2340f7d8c16a0->enter($__internal_4254a2ec69d7a42196181e898095c6b3186890ffd8d20dc651c2340f7d8c16a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_21feee08bcaaa2d281c8acd0b960d053f95018346b3bfd66353a469bd49e4ca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21feee08bcaaa2d281c8acd0b960d053f95018346b3bfd66353a469bd49e4ca5->enter($__internal_21feee08bcaaa2d281c8acd0b960d053f95018346b3bfd66353a469bd49e4ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 142
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 142, $this->getSourceContext()); })())) > 0)) {
            // line 143
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->getSourceContext()); })()))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 144
            echo "    <ul class=\"list-unstyled\">";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 145, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 146
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "</ul>
    ";
            // line 149
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 149, $this->getSourceContext()); })()))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_21feee08bcaaa2d281c8acd0b960d053f95018346b3bfd66353a469bd49e4ca5->leave($__internal_21feee08bcaaa2d281c8acd0b960d053f95018346b3bfd66353a469bd49e4ca5_prof);

        
        $__internal_4254a2ec69d7a42196181e898095c6b3186890ffd8d20dc651c2340f7d8c16a0->leave($__internal_4254a2ec69d7a42196181e898095c6b3186890ffd8d20dc651c2340f7d8c16a0_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  650 => 149,  647 => 148,  639 => 146,  635 => 145,  633 => 144,  627 => 143,  625 => 142,  616 => 141,  606 => 136,  604 => 135,  602 => 134,  596 => 133,  587 => 132,  577 => 129,  575 => 128,  573 => 127,  567 => 126,  558 => 125,  548 => 122,  546 => 121,  537 => 120,  527 => 117,  525 => 116,  516 => 115,  506 => 112,  504 => 111,  495 => 110,  485 => 107,  483 => 106,  474 => 105,  464 => 102,  462 => 101,  460 => 100,  451 => 99,  441 => 96,  439 => 95,  437 => 94,  435 => 93,  429 => 92,  420 => 91,  409 => 85,  405 => 84,  390 => 83,  386 => 80,  383 => 77,  382 => 76,  381 => 75,  379 => 74,  377 => 73,  374 => 71,  372 => 70,  369 => 68,  367 => 67,  365 => 66,  356 => 64,  346 => 61,  344 => 59,  335 => 58,  325 => 55,  323 => 53,  314 => 52,  304 => 49,  302 => 48,  293 => 46,  283 => 43,  281 => 42,  272 => 41,  261 => 35,  259 => 34,  257 => 33,  254 => 31,  252 => 30,  250 => 29,  241 => 28,  230 => 24,  228 => 23,  226 => 22,  223 => 20,  221 => 19,  219 => 18,  210 => 17,  200 => 14,  198 => 13,  189 => 12,  179 => 9,  176 => 7,  174 => 6,  165 => 5,  155 => 141,  152 => 140,  149 => 138,  147 => 132,  144 => 131,  142 => 125,  139 => 124,  137 => 120,  134 => 119,  132 => 115,  129 => 114,  127 => 110,  124 => 109,  122 => 105,  119 => 104,  117 => 99,  114 => 98,  112 => 91,  109 => 90,  106 => 88,  104 => 64,  101 => 63,  99 => 58,  96 => 57,  94 => 52,  91 => 51,  89 => 46,  86 => 45,  84 => 41,  81 => 40,  78 => 38,  76 => 28,  73 => 27,  71 => 17,  68 => 16,  66 => 12,  63 => 11,  61 => 5,  58 => 4,  55 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
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
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {%- if widget is defined -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

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
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/home/fabien/Téléchargements/mecacorp/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
