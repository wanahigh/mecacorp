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
        $__internal_f22292c8b94c1ff25e366e4b15b1dd57ab10a4f31c879626a17f83eb3d9fc469 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f22292c8b94c1ff25e366e4b15b1dd57ab10a4f31c879626a17f83eb3d9fc469->enter($__internal_f22292c8b94c1ff25e366e4b15b1dd57ab10a4f31c879626a17f83eb3d9fc469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_696c355dcde386aabce4b22047468cfefb38977e036ede42042887392d2b6e62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_696c355dcde386aabce4b22047468cfefb38977e036ede42042887392d2b6e62->enter($__internal_696c355dcde386aabce4b22047468cfefb38977e036ede42042887392d2b6e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_f22292c8b94c1ff25e366e4b15b1dd57ab10a4f31c879626a17f83eb3d9fc469->leave($__internal_f22292c8b94c1ff25e366e4b15b1dd57ab10a4f31c879626a17f83eb3d9fc469_prof);

        
        $__internal_696c355dcde386aabce4b22047468cfefb38977e036ede42042887392d2b6e62->leave($__internal_696c355dcde386aabce4b22047468cfefb38977e036ede42042887392d2b6e62_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_5c3a545b2ef7c55bdac3ced950ab81e7f9d81e350a57582178009c4929c1c1c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c3a545b2ef7c55bdac3ced950ab81e7f9d81e350a57582178009c4929c1c1c2->enter($__internal_5c3a545b2ef7c55bdac3ced950ab81e7f9d81e350a57582178009c4929c1c1c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_e399afe3507987499c60e2f47b2af16b19bb9f53992280bf58dc0282c093795d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e399afe3507987499c60e2f47b2af16b19bb9f53992280bf58dc0282c093795d->enter($__internal_e399afe3507987499c60e2f47b2af16b19bb9f53992280bf58dc0282c093795d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_e399afe3507987499c60e2f47b2af16b19bb9f53992280bf58dc0282c093795d->leave($__internal_e399afe3507987499c60e2f47b2af16b19bb9f53992280bf58dc0282c093795d_prof);

        
        $__internal_5c3a545b2ef7c55bdac3ced950ab81e7f9d81e350a57582178009c4929c1c1c2->leave($__internal_5c3a545b2ef7c55bdac3ced950ab81e7f9d81e350a57582178009c4929c1c1c2_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_b255c65e1b9e584afdd224ff1ea99a501bc8b165c5777b1e75da964bb1474443 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b255c65e1b9e584afdd224ff1ea99a501bc8b165c5777b1e75da964bb1474443->enter($__internal_b255c65e1b9e584afdd224ff1ea99a501bc8b165c5777b1e75da964bb1474443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_ece92268e0c0240c491f7840f3d09e0e731ba4fbd7de0f2c55db99398f50faec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ece92268e0c0240c491f7840f3d09e0e731ba4fbd7de0f2c55db99398f50faec->enter($__internal_ece92268e0c0240c491f7840f3d09e0e731ba4fbd7de0f2c55db99398f50faec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_ece92268e0c0240c491f7840f3d09e0e731ba4fbd7de0f2c55db99398f50faec->leave($__internal_ece92268e0c0240c491f7840f3d09e0e731ba4fbd7de0f2c55db99398f50faec_prof);

        
        $__internal_b255c65e1b9e584afdd224ff1ea99a501bc8b165c5777b1e75da964bb1474443->leave($__internal_b255c65e1b9e584afdd224ff1ea99a501bc8b165c5777b1e75da964bb1474443_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_7e896d645fe57ba65f3d64b26618df06c3fd2eb53498bd49dd4068ffccf005ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e896d645fe57ba65f3d64b26618df06c3fd2eb53498bd49dd4068ffccf005ef->enter($__internal_7e896d645fe57ba65f3d64b26618df06c3fd2eb53498bd49dd4068ffccf005ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_2bfc973362636a8228611cef1518d8f24183a7f6f72aeff14173b7b09ccbf53a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bfc973362636a8228611cef1518d8f24183a7f6f72aeff14173b7b09ccbf53a->enter($__internal_2bfc973362636a8228611cef1518d8f24183a7f6f72aeff14173b7b09ccbf53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_2bfc973362636a8228611cef1518d8f24183a7f6f72aeff14173b7b09ccbf53a->leave($__internal_2bfc973362636a8228611cef1518d8f24183a7f6f72aeff14173b7b09ccbf53a_prof);

        
        $__internal_7e896d645fe57ba65f3d64b26618df06c3fd2eb53498bd49dd4068ffccf005ef->leave($__internal_7e896d645fe57ba65f3d64b26618df06c3fd2eb53498bd49dd4068ffccf005ef_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_dd31eab168b35b9e970c407f4b3bfbe7086eeaa0c9a85e50a6242274ca79fb7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd31eab168b35b9e970c407f4b3bfbe7086eeaa0c9a85e50a6242274ca79fb7a->enter($__internal_dd31eab168b35b9e970c407f4b3bfbe7086eeaa0c9a85e50a6242274ca79fb7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_3e33d6f6c7731010d9388f06f082241faff9c59c810ad43f7bdc01d3c777395e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e33d6f6c7731010d9388f06f082241faff9c59c810ad43f7bdc01d3c777395e->enter($__internal_3e33d6f6c7731010d9388f06f082241faff9c59c810ad43f7bdc01d3c777395e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_3e33d6f6c7731010d9388f06f082241faff9c59c810ad43f7bdc01d3c777395e->leave($__internal_3e33d6f6c7731010d9388f06f082241faff9c59c810ad43f7bdc01d3c777395e_prof);

        
        $__internal_dd31eab168b35b9e970c407f4b3bfbe7086eeaa0c9a85e50a6242274ca79fb7a->leave($__internal_dd31eab168b35b9e970c407f4b3bfbe7086eeaa0c9a85e50a6242274ca79fb7a_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_a0be17875bc75f36f89a134f96dbe1c53478783108d1f7eca5e8187dfc5dd3cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0be17875bc75f36f89a134f96dbe1c53478783108d1f7eca5e8187dfc5dd3cd->enter($__internal_a0be17875bc75f36f89a134f96dbe1c53478783108d1f7eca5e8187dfc5dd3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_aa7da57c67310154a64805e0c353db39d0e8f400885f90ef9f264607e74e05c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa7da57c67310154a64805e0c353db39d0e8f400885f90ef9f264607e74e05c0->enter($__internal_aa7da57c67310154a64805e0c353db39d0e8f400885f90ef9f264607e74e05c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_aa7da57c67310154a64805e0c353db39d0e8f400885f90ef9f264607e74e05c0->leave($__internal_aa7da57c67310154a64805e0c353db39d0e8f400885f90ef9f264607e74e05c0_prof);

        
        $__internal_a0be17875bc75f36f89a134f96dbe1c53478783108d1f7eca5e8187dfc5dd3cd->leave($__internal_a0be17875bc75f36f89a134f96dbe1c53478783108d1f7eca5e8187dfc5dd3cd_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_ee6d47aa06d330b7306f7891134db98c5b4b3bf8a562cc14b6312a88b9f109b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee6d47aa06d330b7306f7891134db98c5b4b3bf8a562cc14b6312a88b9f109b0->enter($__internal_ee6d47aa06d330b7306f7891134db98c5b4b3bf8a562cc14b6312a88b9f109b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_9e87c7257e72d72b30d7a90d9d49e983ef2a77b9d0352d5f5b20de095ce9fe13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e87c7257e72d72b30d7a90d9d49e983ef2a77b9d0352d5f5b20de095ce9fe13->enter($__internal_9e87c7257e72d72b30d7a90d9d49e983ef2a77b9d0352d5f5b20de095ce9fe13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_9e87c7257e72d72b30d7a90d9d49e983ef2a77b9d0352d5f5b20de095ce9fe13->leave($__internal_9e87c7257e72d72b30d7a90d9d49e983ef2a77b9d0352d5f5b20de095ce9fe13_prof);

        
        $__internal_ee6d47aa06d330b7306f7891134db98c5b4b3bf8a562cc14b6312a88b9f109b0->leave($__internal_ee6d47aa06d330b7306f7891134db98c5b4b3bf8a562cc14b6312a88b9f109b0_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_9f58abae897aadfad4bb3cad882a79ca1c6591e650e025627458ffc82fca1c34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f58abae897aadfad4bb3cad882a79ca1c6591e650e025627458ffc82fca1c34->enter($__internal_9f58abae897aadfad4bb3cad882a79ca1c6591e650e025627458ffc82fca1c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_4c069385b65f2a113f3618ad5d4d997b78aba3fef6d5b88b80a973b30e142cad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c069385b65f2a113f3618ad5d4d997b78aba3fef6d5b88b80a973b30e142cad->enter($__internal_4c069385b65f2a113f3618ad5d4d997b78aba3fef6d5b88b80a973b30e142cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_4c069385b65f2a113f3618ad5d4d997b78aba3fef6d5b88b80a973b30e142cad->leave($__internal_4c069385b65f2a113f3618ad5d4d997b78aba3fef6d5b88b80a973b30e142cad_prof);

        
        $__internal_9f58abae897aadfad4bb3cad882a79ca1c6591e650e025627458ffc82fca1c34->leave($__internal_9f58abae897aadfad4bb3cad882a79ca1c6591e650e025627458ffc82fca1c34_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_30c9f2fba54df8855e1bf33429e3bdce6a8d2aab3ac9518aabdb3cbaf22664be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30c9f2fba54df8855e1bf33429e3bdce6a8d2aab3ac9518aabdb3cbaf22664be->enter($__internal_30c9f2fba54df8855e1bf33429e3bdce6a8d2aab3ac9518aabdb3cbaf22664be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_30e5a68b4002ee8ae991d410c7f2a0cc08799c293490a53477cf2cef253d3af5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30e5a68b4002ee8ae991d410c7f2a0cc08799c293490a53477cf2cef253d3af5->enter($__internal_30e5a68b4002ee8ae991d410c7f2a0cc08799c293490a53477cf2cef253d3af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_30e5a68b4002ee8ae991d410c7f2a0cc08799c293490a53477cf2cef253d3af5->leave($__internal_30e5a68b4002ee8ae991d410c7f2a0cc08799c293490a53477cf2cef253d3af5_prof);

        
        $__internal_30c9f2fba54df8855e1bf33429e3bdce6a8d2aab3ac9518aabdb3cbaf22664be->leave($__internal_30c9f2fba54df8855e1bf33429e3bdce6a8d2aab3ac9518aabdb3cbaf22664be_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_9d7f4b0002b3ad0a2f5b7ad68ac5ff807eeb75e34e225bb160ebc93a1a0eb175 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d7f4b0002b3ad0a2f5b7ad68ac5ff807eeb75e34e225bb160ebc93a1a0eb175->enter($__internal_9d7f4b0002b3ad0a2f5b7ad68ac5ff807eeb75e34e225bb160ebc93a1a0eb175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_8b3409ed0640a77af5d632b4bc4f94cb5eb97b5f47cbe2de26c9b19d72f8412e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b3409ed0640a77af5d632b4bc4f94cb5eb97b5f47cbe2de26c9b19d72f8412e->enter($__internal_8b3409ed0640a77af5d632b4bc4f94cb5eb97b5f47cbe2de26c9b19d72f8412e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_8b3409ed0640a77af5d632b4bc4f94cb5eb97b5f47cbe2de26c9b19d72f8412e->leave($__internal_8b3409ed0640a77af5d632b4bc4f94cb5eb97b5f47cbe2de26c9b19d72f8412e_prof);

        
        $__internal_9d7f4b0002b3ad0a2f5b7ad68ac5ff807eeb75e34e225bb160ebc93a1a0eb175->leave($__internal_9d7f4b0002b3ad0a2f5b7ad68ac5ff807eeb75e34e225bb160ebc93a1a0eb175_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_c64bb602a36e989415255557147579254eddc4cc03236183416654c45174e869 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c64bb602a36e989415255557147579254eddc4cc03236183416654c45174e869->enter($__internal_c64bb602a36e989415255557147579254eddc4cc03236183416654c45174e869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_0d42845ac865c8c7385c75e4e6f257b58cde35380010e502295a6170cd789a09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d42845ac865c8c7385c75e4e6f257b58cde35380010e502295a6170cd789a09->enter($__internal_0d42845ac865c8c7385c75e4e6f257b58cde35380010e502295a6170cd789a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_0d42845ac865c8c7385c75e4e6f257b58cde35380010e502295a6170cd789a09->leave($__internal_0d42845ac865c8c7385c75e4e6f257b58cde35380010e502295a6170cd789a09_prof);

        
        $__internal_c64bb602a36e989415255557147579254eddc4cc03236183416654c45174e869->leave($__internal_c64bb602a36e989415255557147579254eddc4cc03236183416654c45174e869_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_7985de9028cde8641265ae9ea85b975e9a815545004235de54d76bed090844a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7985de9028cde8641265ae9ea85b975e9a815545004235de54d76bed090844a5->enter($__internal_7985de9028cde8641265ae9ea85b975e9a815545004235de54d76bed090844a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_2fe54ce370f8bd37c1f894b9e206694387538ddc71dec35a80524c0212b4fd18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fe54ce370f8bd37c1f894b9e206694387538ddc71dec35a80524c0212b4fd18->enter($__internal_2fe54ce370f8bd37c1f894b9e206694387538ddc71dec35a80524c0212b4fd18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_2fe54ce370f8bd37c1f894b9e206694387538ddc71dec35a80524c0212b4fd18->leave($__internal_2fe54ce370f8bd37c1f894b9e206694387538ddc71dec35a80524c0212b4fd18_prof);

        
        $__internal_7985de9028cde8641265ae9ea85b975e9a815545004235de54d76bed090844a5->leave($__internal_7985de9028cde8641265ae9ea85b975e9a815545004235de54d76bed090844a5_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_9a4b76896c73bacd7e61d85d88de1fcd2c69d432c6d7b60deb45ab95b902d41e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a4b76896c73bacd7e61d85d88de1fcd2c69d432c6d7b60deb45ab95b902d41e->enter($__internal_9a4b76896c73bacd7e61d85d88de1fcd2c69d432c6d7b60deb45ab95b902d41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_4b47571b6f61da38374e66ac0232e1fd21fc865fcc4e38d51810ec9c91e1f4d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b47571b6f61da38374e66ac0232e1fd21fc865fcc4e38d51810ec9c91e1f4d0->enter($__internal_4b47571b6f61da38374e66ac0232e1fd21fc865fcc4e38d51810ec9c91e1f4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4b47571b6f61da38374e66ac0232e1fd21fc865fcc4e38d51810ec9c91e1f4d0->leave($__internal_4b47571b6f61da38374e66ac0232e1fd21fc865fcc4e38d51810ec9c91e1f4d0_prof);

        
        $__internal_9a4b76896c73bacd7e61d85d88de1fcd2c69d432c6d7b60deb45ab95b902d41e->leave($__internal_9a4b76896c73bacd7e61d85d88de1fcd2c69d432c6d7b60deb45ab95b902d41e_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_42b50eee54bd9a9efeafde4afc9fe19e7ea7ca7ebbc95b3e42f83b49c14ae6be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42b50eee54bd9a9efeafde4afc9fe19e7ea7ca7ebbc95b3e42f83b49c14ae6be->enter($__internal_42b50eee54bd9a9efeafde4afc9fe19e7ea7ca7ebbc95b3e42f83b49c14ae6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_72e3b204b1571cfb5845bcf407fd16874c7f427b8e8413e322ccdb3e2641b21c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72e3b204b1571cfb5845bcf407fd16874c7f427b8e8413e322ccdb3e2641b21c->enter($__internal_72e3b204b1571cfb5845bcf407fd16874c7f427b8e8413e322ccdb3e2641b21c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_72e3b204b1571cfb5845bcf407fd16874c7f427b8e8413e322ccdb3e2641b21c->leave($__internal_72e3b204b1571cfb5845bcf407fd16874c7f427b8e8413e322ccdb3e2641b21c_prof);

        
        $__internal_42b50eee54bd9a9efeafde4afc9fe19e7ea7ca7ebbc95b3e42f83b49c14ae6be->leave($__internal_42b50eee54bd9a9efeafde4afc9fe19e7ea7ca7ebbc95b3e42f83b49c14ae6be_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_492e3f9545ee032db5f53b0e21ade4598b1fce9c88d047472c3b21ff894ec1b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_492e3f9545ee032db5f53b0e21ade4598b1fce9c88d047472c3b21ff894ec1b4->enter($__internal_492e3f9545ee032db5f53b0e21ade4598b1fce9c88d047472c3b21ff894ec1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_e471f8139b509733b45072779554b92db46d424819afd02fbcc4c5df2c1b4b67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e471f8139b509733b45072779554b92db46d424819afd02fbcc4c5df2c1b4b67->enter($__internal_e471f8139b509733b45072779554b92db46d424819afd02fbcc4c5df2c1b4b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e471f8139b509733b45072779554b92db46d424819afd02fbcc4c5df2c1b4b67->leave($__internal_e471f8139b509733b45072779554b92db46d424819afd02fbcc4c5df2c1b4b67_prof);

        
        $__internal_492e3f9545ee032db5f53b0e21ade4598b1fce9c88d047472c3b21ff894ec1b4->leave($__internal_492e3f9545ee032db5f53b0e21ade4598b1fce9c88d047472c3b21ff894ec1b4_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_4523d4a77c4b0314522da6ba8ca7b58c2658b37628804330cca184c60a5ada72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4523d4a77c4b0314522da6ba8ca7b58c2658b37628804330cca184c60a5ada72->enter($__internal_4523d4a77c4b0314522da6ba8ca7b58c2658b37628804330cca184c60a5ada72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_125f1aa593991914f950991a3be82c04e95a4f981a147ab0bc25c33770730255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_125f1aa593991914f950991a3be82c04e95a4f981a147ab0bc25c33770730255->enter($__internal_125f1aa593991914f950991a3be82c04e95a4f981a147ab0bc25c33770730255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_125f1aa593991914f950991a3be82c04e95a4f981a147ab0bc25c33770730255->leave($__internal_125f1aa593991914f950991a3be82c04e95a4f981a147ab0bc25c33770730255_prof);

        
        $__internal_4523d4a77c4b0314522da6ba8ca7b58c2658b37628804330cca184c60a5ada72->leave($__internal_4523d4a77c4b0314522da6ba8ca7b58c2658b37628804330cca184c60a5ada72_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_28d572a1abe330268767506ecdfdc0cb3b7b0f1522201f5cee8796ba42c32978 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28d572a1abe330268767506ecdfdc0cb3b7b0f1522201f5cee8796ba42c32978->enter($__internal_28d572a1abe330268767506ecdfdc0cb3b7b0f1522201f5cee8796ba42c32978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_f725fadc2b3692e2b57e33d6d487f806a6ff62618606661485b7d4dbc745a1d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f725fadc2b3692e2b57e33d6d487f806a6ff62618606661485b7d4dbc745a1d5->enter($__internal_f725fadc2b3692e2b57e33d6d487f806a6ff62618606661485b7d4dbc745a1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_f725fadc2b3692e2b57e33d6d487f806a6ff62618606661485b7d4dbc745a1d5->leave($__internal_f725fadc2b3692e2b57e33d6d487f806a6ff62618606661485b7d4dbc745a1d5_prof);

        
        $__internal_28d572a1abe330268767506ecdfdc0cb3b7b0f1522201f5cee8796ba42c32978->leave($__internal_28d572a1abe330268767506ecdfdc0cb3b7b0f1522201f5cee8796ba42c32978_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_8b68e7cd7bab8040ef5fb9deddbf8fe653327edb3dc147d1a14ccc381e02eb77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b68e7cd7bab8040ef5fb9deddbf8fe653327edb3dc147d1a14ccc381e02eb77->enter($__internal_8b68e7cd7bab8040ef5fb9deddbf8fe653327edb3dc147d1a14ccc381e02eb77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_ab40c2025b455e85e4b9727d2440068d03ef4d09098260112d162890b08884a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab40c2025b455e85e4b9727d2440068d03ef4d09098260112d162890b08884a7->enter($__internal_ab40c2025b455e85e4b9727d2440068d03ef4d09098260112d162890b08884a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_ab40c2025b455e85e4b9727d2440068d03ef4d09098260112d162890b08884a7->leave($__internal_ab40c2025b455e85e4b9727d2440068d03ef4d09098260112d162890b08884a7_prof);

        
        $__internal_8b68e7cd7bab8040ef5fb9deddbf8fe653327edb3dc147d1a14ccc381e02eb77->leave($__internal_8b68e7cd7bab8040ef5fb9deddbf8fe653327edb3dc147d1a14ccc381e02eb77_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_86fe85fd05eed22321953d4c0731ee16995572438fdc5402b7d736f943b3ea93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86fe85fd05eed22321953d4c0731ee16995572438fdc5402b7d736f943b3ea93->enter($__internal_86fe85fd05eed22321953d4c0731ee16995572438fdc5402b7d736f943b3ea93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_c70d620cea3a3e043c36ef7e2148dc54ebd943f1033dd2559a333aa5cb6da37c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c70d620cea3a3e043c36ef7e2148dc54ebd943f1033dd2559a333aa5cb6da37c->enter($__internal_c70d620cea3a3e043c36ef7e2148dc54ebd943f1033dd2559a333aa5cb6da37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_c70d620cea3a3e043c36ef7e2148dc54ebd943f1033dd2559a333aa5cb6da37c->leave($__internal_c70d620cea3a3e043c36ef7e2148dc54ebd943f1033dd2559a333aa5cb6da37c_prof);

        
        $__internal_86fe85fd05eed22321953d4c0731ee16995572438fdc5402b7d736f943b3ea93->leave($__internal_86fe85fd05eed22321953d4c0731ee16995572438fdc5402b7d736f943b3ea93_prof);

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
