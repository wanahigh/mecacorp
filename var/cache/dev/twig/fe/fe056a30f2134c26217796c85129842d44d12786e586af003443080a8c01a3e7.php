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
        $__internal_7fa37b62eceaf5910e38b1d22e4835a53cf42aa6112278e61dc7d87b8af0d808 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fa37b62eceaf5910e38b1d22e4835a53cf42aa6112278e61dc7d87b8af0d808->enter($__internal_7fa37b62eceaf5910e38b1d22e4835a53cf42aa6112278e61dc7d87b8af0d808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_5cea3452cecc4a8919ad2e1807ae2b63df2d14d0e5df0dba5d15b8085c74a1bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cea3452cecc4a8919ad2e1807ae2b63df2d14d0e5df0dba5d15b8085c74a1bb->enter($__internal_5cea3452cecc4a8919ad2e1807ae2b63df2d14d0e5df0dba5d15b8085c74a1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_7fa37b62eceaf5910e38b1d22e4835a53cf42aa6112278e61dc7d87b8af0d808->leave($__internal_7fa37b62eceaf5910e38b1d22e4835a53cf42aa6112278e61dc7d87b8af0d808_prof);

        
        $__internal_5cea3452cecc4a8919ad2e1807ae2b63df2d14d0e5df0dba5d15b8085c74a1bb->leave($__internal_5cea3452cecc4a8919ad2e1807ae2b63df2d14d0e5df0dba5d15b8085c74a1bb_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_1b2b00a69b3e7e4b91e9b5df22086cfcb3aae8f9ca76428b584af6de718ed59a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b2b00a69b3e7e4b91e9b5df22086cfcb3aae8f9ca76428b584af6de718ed59a->enter($__internal_1b2b00a69b3e7e4b91e9b5df22086cfcb3aae8f9ca76428b584af6de718ed59a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_c3c776e3908b8a7ca668e978c1836c35a12565f328bebe5282da95c2b78e4f18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3c776e3908b8a7ca668e978c1836c35a12565f328bebe5282da95c2b78e4f18->enter($__internal_c3c776e3908b8a7ca668e978c1836c35a12565f328bebe5282da95c2b78e4f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_c3c776e3908b8a7ca668e978c1836c35a12565f328bebe5282da95c2b78e4f18->leave($__internal_c3c776e3908b8a7ca668e978c1836c35a12565f328bebe5282da95c2b78e4f18_prof);

        
        $__internal_1b2b00a69b3e7e4b91e9b5df22086cfcb3aae8f9ca76428b584af6de718ed59a->leave($__internal_1b2b00a69b3e7e4b91e9b5df22086cfcb3aae8f9ca76428b584af6de718ed59a_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_fdb9a61eec0569da4fc2eb8236c30a0303e1ddc6029c907c6dcf9c419fbb6be0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdb9a61eec0569da4fc2eb8236c30a0303e1ddc6029c907c6dcf9c419fbb6be0->enter($__internal_fdb9a61eec0569da4fc2eb8236c30a0303e1ddc6029c907c6dcf9c419fbb6be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_a0a32ca9b77bc25541fb9223f3e38924bece48ed5d2e76b26e64394216df6c10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0a32ca9b77bc25541fb9223f3e38924bece48ed5d2e76b26e64394216df6c10->enter($__internal_a0a32ca9b77bc25541fb9223f3e38924bece48ed5d2e76b26e64394216df6c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_a0a32ca9b77bc25541fb9223f3e38924bece48ed5d2e76b26e64394216df6c10->leave($__internal_a0a32ca9b77bc25541fb9223f3e38924bece48ed5d2e76b26e64394216df6c10_prof);

        
        $__internal_fdb9a61eec0569da4fc2eb8236c30a0303e1ddc6029c907c6dcf9c419fbb6be0->leave($__internal_fdb9a61eec0569da4fc2eb8236c30a0303e1ddc6029c907c6dcf9c419fbb6be0_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_64efb1104b1d5d0e20fa378c703c93fff00bd2e3b7fa82b8b6828eb9a5ae7496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64efb1104b1d5d0e20fa378c703c93fff00bd2e3b7fa82b8b6828eb9a5ae7496->enter($__internal_64efb1104b1d5d0e20fa378c703c93fff00bd2e3b7fa82b8b6828eb9a5ae7496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_f34be4cca24e7c52c2c3574efca7a458619ffd366843b76ceb6d48ab8cc62f69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f34be4cca24e7c52c2c3574efca7a458619ffd366843b76ceb6d48ab8cc62f69->enter($__internal_f34be4cca24e7c52c2c3574efca7a458619ffd366843b76ceb6d48ab8cc62f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_f34be4cca24e7c52c2c3574efca7a458619ffd366843b76ceb6d48ab8cc62f69->leave($__internal_f34be4cca24e7c52c2c3574efca7a458619ffd366843b76ceb6d48ab8cc62f69_prof);

        
        $__internal_64efb1104b1d5d0e20fa378c703c93fff00bd2e3b7fa82b8b6828eb9a5ae7496->leave($__internal_64efb1104b1d5d0e20fa378c703c93fff00bd2e3b7fa82b8b6828eb9a5ae7496_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_f48a92de8c118fedb975098b3edf8bd7533d31d1035952fc3449f2ccca1fbd82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f48a92de8c118fedb975098b3edf8bd7533d31d1035952fc3449f2ccca1fbd82->enter($__internal_f48a92de8c118fedb975098b3edf8bd7533d31d1035952fc3449f2ccca1fbd82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_cf61fbb87589ac280d8d4c1fce43c36d4fcbe8bf9e148c6d1f29da40f01f8a3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf61fbb87589ac280d8d4c1fce43c36d4fcbe8bf9e148c6d1f29da40f01f8a3b->enter($__internal_cf61fbb87589ac280d8d4c1fce43c36d4fcbe8bf9e148c6d1f29da40f01f8a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_cf61fbb87589ac280d8d4c1fce43c36d4fcbe8bf9e148c6d1f29da40f01f8a3b->leave($__internal_cf61fbb87589ac280d8d4c1fce43c36d4fcbe8bf9e148c6d1f29da40f01f8a3b_prof);

        
        $__internal_f48a92de8c118fedb975098b3edf8bd7533d31d1035952fc3449f2ccca1fbd82->leave($__internal_f48a92de8c118fedb975098b3edf8bd7533d31d1035952fc3449f2ccca1fbd82_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_cdeacc8ada2f5a274b81fcad5389b3d600191ff05de6ff94018198241d713a03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdeacc8ada2f5a274b81fcad5389b3d600191ff05de6ff94018198241d713a03->enter($__internal_cdeacc8ada2f5a274b81fcad5389b3d600191ff05de6ff94018198241d713a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_fa80c5990277f386d898a22f99b5ba071506286b9f0ae152ccd716c655623e98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa80c5990277f386d898a22f99b5ba071506286b9f0ae152ccd716c655623e98->enter($__internal_fa80c5990277f386d898a22f99b5ba071506286b9f0ae152ccd716c655623e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_fa80c5990277f386d898a22f99b5ba071506286b9f0ae152ccd716c655623e98->leave($__internal_fa80c5990277f386d898a22f99b5ba071506286b9f0ae152ccd716c655623e98_prof);

        
        $__internal_cdeacc8ada2f5a274b81fcad5389b3d600191ff05de6ff94018198241d713a03->leave($__internal_cdeacc8ada2f5a274b81fcad5389b3d600191ff05de6ff94018198241d713a03_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_af3dfb247551468b20d818f52cf0df844980784d284e4c47f964bcf915ff75d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af3dfb247551468b20d818f52cf0df844980784d284e4c47f964bcf915ff75d1->enter($__internal_af3dfb247551468b20d818f52cf0df844980784d284e4c47f964bcf915ff75d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_345f48f074193212b899c335f3309fcda8a51383c9c740d0202db1ee2ee1d6fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_345f48f074193212b899c335f3309fcda8a51383c9c740d0202db1ee2ee1d6fe->enter($__internal_345f48f074193212b899c335f3309fcda8a51383c9c740d0202db1ee2ee1d6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_345f48f074193212b899c335f3309fcda8a51383c9c740d0202db1ee2ee1d6fe->leave($__internal_345f48f074193212b899c335f3309fcda8a51383c9c740d0202db1ee2ee1d6fe_prof);

        
        $__internal_af3dfb247551468b20d818f52cf0df844980784d284e4c47f964bcf915ff75d1->leave($__internal_af3dfb247551468b20d818f52cf0df844980784d284e4c47f964bcf915ff75d1_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_5bd3e14348a4ad31c9486f89943f7a36e33e7e0241b5e250c702966162a68737 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bd3e14348a4ad31c9486f89943f7a36e33e7e0241b5e250c702966162a68737->enter($__internal_5bd3e14348a4ad31c9486f89943f7a36e33e7e0241b5e250c702966162a68737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_240cc3f2d2f04b2c5747f0c58d995295f854770e9c03a076a2668f14578a759d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_240cc3f2d2f04b2c5747f0c58d995295f854770e9c03a076a2668f14578a759d->enter($__internal_240cc3f2d2f04b2c5747f0c58d995295f854770e9c03a076a2668f14578a759d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_240cc3f2d2f04b2c5747f0c58d995295f854770e9c03a076a2668f14578a759d->leave($__internal_240cc3f2d2f04b2c5747f0c58d995295f854770e9c03a076a2668f14578a759d_prof);

        
        $__internal_5bd3e14348a4ad31c9486f89943f7a36e33e7e0241b5e250c702966162a68737->leave($__internal_5bd3e14348a4ad31c9486f89943f7a36e33e7e0241b5e250c702966162a68737_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_71226b7d9b68aad9c0c1d8b5f06f1c4239f30ef759744f45180b3901740cacea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71226b7d9b68aad9c0c1d8b5f06f1c4239f30ef759744f45180b3901740cacea->enter($__internal_71226b7d9b68aad9c0c1d8b5f06f1c4239f30ef759744f45180b3901740cacea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_3851d8e72be751ec32e34d30099f33a4f3fa9f2d68cf9ec010cb97c851248ce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3851d8e72be751ec32e34d30099f33a4f3fa9f2d68cf9ec010cb97c851248ce6->enter($__internal_3851d8e72be751ec32e34d30099f33a4f3fa9f2d68cf9ec010cb97c851248ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_3851d8e72be751ec32e34d30099f33a4f3fa9f2d68cf9ec010cb97c851248ce6->leave($__internal_3851d8e72be751ec32e34d30099f33a4f3fa9f2d68cf9ec010cb97c851248ce6_prof);

        
        $__internal_71226b7d9b68aad9c0c1d8b5f06f1c4239f30ef759744f45180b3901740cacea->leave($__internal_71226b7d9b68aad9c0c1d8b5f06f1c4239f30ef759744f45180b3901740cacea_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_ee65dc7d2fa1870ecc9dfae81d0ac1b5bb924eb82b2815d00ef949e93569efd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee65dc7d2fa1870ecc9dfae81d0ac1b5bb924eb82b2815d00ef949e93569efd0->enter($__internal_ee65dc7d2fa1870ecc9dfae81d0ac1b5bb924eb82b2815d00ef949e93569efd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_c5e0e299a61651f8e395bbbd7e9df4415337be4fb74e75ced5be4b78ec8c1581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5e0e299a61651f8e395bbbd7e9df4415337be4fb74e75ced5be4b78ec8c1581->enter($__internal_c5e0e299a61651f8e395bbbd7e9df4415337be4fb74e75ced5be4b78ec8c1581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_c5e0e299a61651f8e395bbbd7e9df4415337be4fb74e75ced5be4b78ec8c1581->leave($__internal_c5e0e299a61651f8e395bbbd7e9df4415337be4fb74e75ced5be4b78ec8c1581_prof);

        
        $__internal_ee65dc7d2fa1870ecc9dfae81d0ac1b5bb924eb82b2815d00ef949e93569efd0->leave($__internal_ee65dc7d2fa1870ecc9dfae81d0ac1b5bb924eb82b2815d00ef949e93569efd0_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_fed838dc35985e870a0293df50f238766950a57d4266a8818b7a0d7ece7156d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fed838dc35985e870a0293df50f238766950a57d4266a8818b7a0d7ece7156d8->enter($__internal_fed838dc35985e870a0293df50f238766950a57d4266a8818b7a0d7ece7156d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_33b24bd368d65aa292f6004a1b7d7508bf7c40cc82e6c44504bb2f638d096ddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33b24bd368d65aa292f6004a1b7d7508bf7c40cc82e6c44504bb2f638d096ddd->enter($__internal_33b24bd368d65aa292f6004a1b7d7508bf7c40cc82e6c44504bb2f638d096ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_33b24bd368d65aa292f6004a1b7d7508bf7c40cc82e6c44504bb2f638d096ddd->leave($__internal_33b24bd368d65aa292f6004a1b7d7508bf7c40cc82e6c44504bb2f638d096ddd_prof);

        
        $__internal_fed838dc35985e870a0293df50f238766950a57d4266a8818b7a0d7ece7156d8->leave($__internal_fed838dc35985e870a0293df50f238766950a57d4266a8818b7a0d7ece7156d8_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_f47633f085116eaca901d4e367541b215a7a2a11d79ea37f2b69e21a3ba211ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f47633f085116eaca901d4e367541b215a7a2a11d79ea37f2b69e21a3ba211ae->enter($__internal_f47633f085116eaca901d4e367541b215a7a2a11d79ea37f2b69e21a3ba211ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_f907652743f11d1d187bf7e9c32261956ac5b4f24d21e9963131992537800e3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f907652743f11d1d187bf7e9c32261956ac5b4f24d21e9963131992537800e3b->enter($__internal_f907652743f11d1d187bf7e9c32261956ac5b4f24d21e9963131992537800e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_f907652743f11d1d187bf7e9c32261956ac5b4f24d21e9963131992537800e3b->leave($__internal_f907652743f11d1d187bf7e9c32261956ac5b4f24d21e9963131992537800e3b_prof);

        
        $__internal_f47633f085116eaca901d4e367541b215a7a2a11d79ea37f2b69e21a3ba211ae->leave($__internal_f47633f085116eaca901d4e367541b215a7a2a11d79ea37f2b69e21a3ba211ae_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_ba3fde9b0d53aaecf37d6ec7b8533b40c29b5b9c31c651a12ac45c6e3be5c703 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba3fde9b0d53aaecf37d6ec7b8533b40c29b5b9c31c651a12ac45c6e3be5c703->enter($__internal_ba3fde9b0d53aaecf37d6ec7b8533b40c29b5b9c31c651a12ac45c6e3be5c703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_92fba190ea0c8d02d55b9ca34684ba10402db0e034d09961462490443514cb01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92fba190ea0c8d02d55b9ca34684ba10402db0e034d09961462490443514cb01->enter($__internal_92fba190ea0c8d02d55b9ca34684ba10402db0e034d09961462490443514cb01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_92fba190ea0c8d02d55b9ca34684ba10402db0e034d09961462490443514cb01->leave($__internal_92fba190ea0c8d02d55b9ca34684ba10402db0e034d09961462490443514cb01_prof);

        
        $__internal_ba3fde9b0d53aaecf37d6ec7b8533b40c29b5b9c31c651a12ac45c6e3be5c703->leave($__internal_ba3fde9b0d53aaecf37d6ec7b8533b40c29b5b9c31c651a12ac45c6e3be5c703_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_eecbef952269c3a5565cde0c606517912919a85dd5547c8e417f36daee5ca198 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eecbef952269c3a5565cde0c606517912919a85dd5547c8e417f36daee5ca198->enter($__internal_eecbef952269c3a5565cde0c606517912919a85dd5547c8e417f36daee5ca198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_d308c6f96fc3c58a312cd838d7b54a5c80af3062daa42e5eb40cb57e4ad3374f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d308c6f96fc3c58a312cd838d7b54a5c80af3062daa42e5eb40cb57e4ad3374f->enter($__internal_d308c6f96fc3c58a312cd838d7b54a5c80af3062daa42e5eb40cb57e4ad3374f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d308c6f96fc3c58a312cd838d7b54a5c80af3062daa42e5eb40cb57e4ad3374f->leave($__internal_d308c6f96fc3c58a312cd838d7b54a5c80af3062daa42e5eb40cb57e4ad3374f_prof);

        
        $__internal_eecbef952269c3a5565cde0c606517912919a85dd5547c8e417f36daee5ca198->leave($__internal_eecbef952269c3a5565cde0c606517912919a85dd5547c8e417f36daee5ca198_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_3f666217296a6df6fee7a15a2abaa37284a802a01ffda4e14542e5a68a591251 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f666217296a6df6fee7a15a2abaa37284a802a01ffda4e14542e5a68a591251->enter($__internal_3f666217296a6df6fee7a15a2abaa37284a802a01ffda4e14542e5a68a591251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_4e9b664d716d9d00ce6aec98beca9123525c07047b4dd0494b6f445bd29db2ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e9b664d716d9d00ce6aec98beca9123525c07047b4dd0494b6f445bd29db2ec->enter($__internal_4e9b664d716d9d00ce6aec98beca9123525c07047b4dd0494b6f445bd29db2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4e9b664d716d9d00ce6aec98beca9123525c07047b4dd0494b6f445bd29db2ec->leave($__internal_4e9b664d716d9d00ce6aec98beca9123525c07047b4dd0494b6f445bd29db2ec_prof);

        
        $__internal_3f666217296a6df6fee7a15a2abaa37284a802a01ffda4e14542e5a68a591251->leave($__internal_3f666217296a6df6fee7a15a2abaa37284a802a01ffda4e14542e5a68a591251_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_615b7ee2914eedd16f9d2b62b95a9e5d0b8b077d7d7e8ba66f76daf3eaa26bfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_615b7ee2914eedd16f9d2b62b95a9e5d0b8b077d7d7e8ba66f76daf3eaa26bfd->enter($__internal_615b7ee2914eedd16f9d2b62b95a9e5d0b8b077d7d7e8ba66f76daf3eaa26bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_99c5e4b7ae45b5c8822993c05bb551db4a489eaa7f9e30bb55d115449fd63587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99c5e4b7ae45b5c8822993c05bb551db4a489eaa7f9e30bb55d115449fd63587->enter($__internal_99c5e4b7ae45b5c8822993c05bb551db4a489eaa7f9e30bb55d115449fd63587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_99c5e4b7ae45b5c8822993c05bb551db4a489eaa7f9e30bb55d115449fd63587->leave($__internal_99c5e4b7ae45b5c8822993c05bb551db4a489eaa7f9e30bb55d115449fd63587_prof);

        
        $__internal_615b7ee2914eedd16f9d2b62b95a9e5d0b8b077d7d7e8ba66f76daf3eaa26bfd->leave($__internal_615b7ee2914eedd16f9d2b62b95a9e5d0b8b077d7d7e8ba66f76daf3eaa26bfd_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_ab17be3a2484431ab897d812697ad71efe2b06b5cb68964aefd77c9dfce22243 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab17be3a2484431ab897d812697ad71efe2b06b5cb68964aefd77c9dfce22243->enter($__internal_ab17be3a2484431ab897d812697ad71efe2b06b5cb68964aefd77c9dfce22243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_64311f7fdc8f4554a7397d40470f11944cbba4150e9c22a9f3f277fb6589e9b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64311f7fdc8f4554a7397d40470f11944cbba4150e9c22a9f3f277fb6589e9b3->enter($__internal_64311f7fdc8f4554a7397d40470f11944cbba4150e9c22a9f3f277fb6589e9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_64311f7fdc8f4554a7397d40470f11944cbba4150e9c22a9f3f277fb6589e9b3->leave($__internal_64311f7fdc8f4554a7397d40470f11944cbba4150e9c22a9f3f277fb6589e9b3_prof);

        
        $__internal_ab17be3a2484431ab897d812697ad71efe2b06b5cb68964aefd77c9dfce22243->leave($__internal_ab17be3a2484431ab897d812697ad71efe2b06b5cb68964aefd77c9dfce22243_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_952bacc01545d8838434de942eaeeb372f15a4956e4e9f098e1ab7d42140779e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_952bacc01545d8838434de942eaeeb372f15a4956e4e9f098e1ab7d42140779e->enter($__internal_952bacc01545d8838434de942eaeeb372f15a4956e4e9f098e1ab7d42140779e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_611e7482858fa3dbfcc4f1bc24dfb5fc04f0b67170c54e90fabf52a133f0fd94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_611e7482858fa3dbfcc4f1bc24dfb5fc04f0b67170c54e90fabf52a133f0fd94->enter($__internal_611e7482858fa3dbfcc4f1bc24dfb5fc04f0b67170c54e90fabf52a133f0fd94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_611e7482858fa3dbfcc4f1bc24dfb5fc04f0b67170c54e90fabf52a133f0fd94->leave($__internal_611e7482858fa3dbfcc4f1bc24dfb5fc04f0b67170c54e90fabf52a133f0fd94_prof);

        
        $__internal_952bacc01545d8838434de942eaeeb372f15a4956e4e9f098e1ab7d42140779e->leave($__internal_952bacc01545d8838434de942eaeeb372f15a4956e4e9f098e1ab7d42140779e_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_9fde54cb58f40858b7f3b48d7ae8302e0101757dd787ce54a46d1925a0778cc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fde54cb58f40858b7f3b48d7ae8302e0101757dd787ce54a46d1925a0778cc7->enter($__internal_9fde54cb58f40858b7f3b48d7ae8302e0101757dd787ce54a46d1925a0778cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_faf9c53d6422ecc91187a57f19f499beaf8637c5fcdbd9d7ce0353ab99384a20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faf9c53d6422ecc91187a57f19f499beaf8637c5fcdbd9d7ce0353ab99384a20->enter($__internal_faf9c53d6422ecc91187a57f19f499beaf8637c5fcdbd9d7ce0353ab99384a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_faf9c53d6422ecc91187a57f19f499beaf8637c5fcdbd9d7ce0353ab99384a20->leave($__internal_faf9c53d6422ecc91187a57f19f499beaf8637c5fcdbd9d7ce0353ab99384a20_prof);

        
        $__internal_9fde54cb58f40858b7f3b48d7ae8302e0101757dd787ce54a46d1925a0778cc7->leave($__internal_9fde54cb58f40858b7f3b48d7ae8302e0101757dd787ce54a46d1925a0778cc7_prof);

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
", "bootstrap_3_layout.html.twig", "/home/fabien/symfony-stg/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
