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
        $__internal_80e42e7463e5de12d024c1ccc8c12546c2383279a1dc59119ea20ec01423c2e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80e42e7463e5de12d024c1ccc8c12546c2383279a1dc59119ea20ec01423c2e4->enter($__internal_80e42e7463e5de12d024c1ccc8c12546c2383279a1dc59119ea20ec01423c2e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_7c164e6d114852a3a3ddce883aa239a3b352cdc30a37f6b9651458c8407362ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c164e6d114852a3a3ddce883aa239a3b352cdc30a37f6b9651458c8407362ca->enter($__internal_7c164e6d114852a3a3ddce883aa239a3b352cdc30a37f6b9651458c8407362ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_80e42e7463e5de12d024c1ccc8c12546c2383279a1dc59119ea20ec01423c2e4->leave($__internal_80e42e7463e5de12d024c1ccc8c12546c2383279a1dc59119ea20ec01423c2e4_prof);

        
        $__internal_7c164e6d114852a3a3ddce883aa239a3b352cdc30a37f6b9651458c8407362ca->leave($__internal_7c164e6d114852a3a3ddce883aa239a3b352cdc30a37f6b9651458c8407362ca_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_e5466d97074fffdd11be53e902a157482068f93350a5c98f5d3c8f90bd4dfd12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5466d97074fffdd11be53e902a157482068f93350a5c98f5d3c8f90bd4dfd12->enter($__internal_e5466d97074fffdd11be53e902a157482068f93350a5c98f5d3c8f90bd4dfd12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_d9a56279520d78cfe117cd420f0cc69e2564bb066ca7e4ccb344d3fd30e785ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9a56279520d78cfe117cd420f0cc69e2564bb066ca7e4ccb344d3fd30e785ed->enter($__internal_d9a56279520d78cfe117cd420f0cc69e2564bb066ca7e4ccb344d3fd30e785ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_d9a56279520d78cfe117cd420f0cc69e2564bb066ca7e4ccb344d3fd30e785ed->leave($__internal_d9a56279520d78cfe117cd420f0cc69e2564bb066ca7e4ccb344d3fd30e785ed_prof);

        
        $__internal_e5466d97074fffdd11be53e902a157482068f93350a5c98f5d3c8f90bd4dfd12->leave($__internal_e5466d97074fffdd11be53e902a157482068f93350a5c98f5d3c8f90bd4dfd12_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_41185a260ea0bcf8a355e730eadfbb5b2210e42e8def4241faa35fd471a73e79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41185a260ea0bcf8a355e730eadfbb5b2210e42e8def4241faa35fd471a73e79->enter($__internal_41185a260ea0bcf8a355e730eadfbb5b2210e42e8def4241faa35fd471a73e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_754f614ddf67f4af522b88959b4ee033414f7ecdb44fc7abc9d7e729d1666abd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_754f614ddf67f4af522b88959b4ee033414f7ecdb44fc7abc9d7e729d1666abd->enter($__internal_754f614ddf67f4af522b88959b4ee033414f7ecdb44fc7abc9d7e729d1666abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_754f614ddf67f4af522b88959b4ee033414f7ecdb44fc7abc9d7e729d1666abd->leave($__internal_754f614ddf67f4af522b88959b4ee033414f7ecdb44fc7abc9d7e729d1666abd_prof);

        
        $__internal_41185a260ea0bcf8a355e730eadfbb5b2210e42e8def4241faa35fd471a73e79->leave($__internal_41185a260ea0bcf8a355e730eadfbb5b2210e42e8def4241faa35fd471a73e79_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_1adc134aa511ab2089a65c70158021db0cb3a3646295331f1b024c3967884d5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1adc134aa511ab2089a65c70158021db0cb3a3646295331f1b024c3967884d5f->enter($__internal_1adc134aa511ab2089a65c70158021db0cb3a3646295331f1b024c3967884d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_321b056391b6e5e5025ecc9b69228524b581386407bef9be08c22119d25c0c30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_321b056391b6e5e5025ecc9b69228524b581386407bef9be08c22119d25c0c30->enter($__internal_321b056391b6e5e5025ecc9b69228524b581386407bef9be08c22119d25c0c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_321b056391b6e5e5025ecc9b69228524b581386407bef9be08c22119d25c0c30->leave($__internal_321b056391b6e5e5025ecc9b69228524b581386407bef9be08c22119d25c0c30_prof);

        
        $__internal_1adc134aa511ab2089a65c70158021db0cb3a3646295331f1b024c3967884d5f->leave($__internal_1adc134aa511ab2089a65c70158021db0cb3a3646295331f1b024c3967884d5f_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_752c97b1c8d4755ec49673541c0e2b51c1872c3af58d67c5db093c57a638d942 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_752c97b1c8d4755ec49673541c0e2b51c1872c3af58d67c5db093c57a638d942->enter($__internal_752c97b1c8d4755ec49673541c0e2b51c1872c3af58d67c5db093c57a638d942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_c04078df6b5a1f03a1cd6b47fb672cf7af78b992af4308ee6ebb91be4cdbfe64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c04078df6b5a1f03a1cd6b47fb672cf7af78b992af4308ee6ebb91be4cdbfe64->enter($__internal_c04078df6b5a1f03a1cd6b47fb672cf7af78b992af4308ee6ebb91be4cdbfe64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_c04078df6b5a1f03a1cd6b47fb672cf7af78b992af4308ee6ebb91be4cdbfe64->leave($__internal_c04078df6b5a1f03a1cd6b47fb672cf7af78b992af4308ee6ebb91be4cdbfe64_prof);

        
        $__internal_752c97b1c8d4755ec49673541c0e2b51c1872c3af58d67c5db093c57a638d942->leave($__internal_752c97b1c8d4755ec49673541c0e2b51c1872c3af58d67c5db093c57a638d942_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_8b3313541c706634ff85037a7d09cb0ba35b894dbff53563dfcaaa88209f793a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b3313541c706634ff85037a7d09cb0ba35b894dbff53563dfcaaa88209f793a->enter($__internal_8b3313541c706634ff85037a7d09cb0ba35b894dbff53563dfcaaa88209f793a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_90a3fa9a5eb84d3a6fbf85c2e7564a08bc5a6b87dbd0b17d0ba03c892323cf4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90a3fa9a5eb84d3a6fbf85c2e7564a08bc5a6b87dbd0b17d0ba03c892323cf4b->enter($__internal_90a3fa9a5eb84d3a6fbf85c2e7564a08bc5a6b87dbd0b17d0ba03c892323cf4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_90a3fa9a5eb84d3a6fbf85c2e7564a08bc5a6b87dbd0b17d0ba03c892323cf4b->leave($__internal_90a3fa9a5eb84d3a6fbf85c2e7564a08bc5a6b87dbd0b17d0ba03c892323cf4b_prof);

        
        $__internal_8b3313541c706634ff85037a7d09cb0ba35b894dbff53563dfcaaa88209f793a->leave($__internal_8b3313541c706634ff85037a7d09cb0ba35b894dbff53563dfcaaa88209f793a_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_2894ed7ad39b78d94a2e45c656200d902246d15672a37294163b620f7f85022a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2894ed7ad39b78d94a2e45c656200d902246d15672a37294163b620f7f85022a->enter($__internal_2894ed7ad39b78d94a2e45c656200d902246d15672a37294163b620f7f85022a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_554cf37954b5d8a6b521d37e076f9b35cd4cce051ec980fda4eaeaf6b2d27339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_554cf37954b5d8a6b521d37e076f9b35cd4cce051ec980fda4eaeaf6b2d27339->enter($__internal_554cf37954b5d8a6b521d37e076f9b35cd4cce051ec980fda4eaeaf6b2d27339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_554cf37954b5d8a6b521d37e076f9b35cd4cce051ec980fda4eaeaf6b2d27339->leave($__internal_554cf37954b5d8a6b521d37e076f9b35cd4cce051ec980fda4eaeaf6b2d27339_prof);

        
        $__internal_2894ed7ad39b78d94a2e45c656200d902246d15672a37294163b620f7f85022a->leave($__internal_2894ed7ad39b78d94a2e45c656200d902246d15672a37294163b620f7f85022a_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_525822db7dc8354c38dc6268f0c5b6e38e43b6f923879fa11851b6cd5706bf9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_525822db7dc8354c38dc6268f0c5b6e38e43b6f923879fa11851b6cd5706bf9f->enter($__internal_525822db7dc8354c38dc6268f0c5b6e38e43b6f923879fa11851b6cd5706bf9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_5cc5f8a42ee0e895893e578a6ab5ca9f8bce2dc775e88345cf08448fe83e76db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cc5f8a42ee0e895893e578a6ab5ca9f8bce2dc775e88345cf08448fe83e76db->enter($__internal_5cc5f8a42ee0e895893e578a6ab5ca9f8bce2dc775e88345cf08448fe83e76db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_5cc5f8a42ee0e895893e578a6ab5ca9f8bce2dc775e88345cf08448fe83e76db->leave($__internal_5cc5f8a42ee0e895893e578a6ab5ca9f8bce2dc775e88345cf08448fe83e76db_prof);

        
        $__internal_525822db7dc8354c38dc6268f0c5b6e38e43b6f923879fa11851b6cd5706bf9f->leave($__internal_525822db7dc8354c38dc6268f0c5b6e38e43b6f923879fa11851b6cd5706bf9f_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_119fd15425c3a30a0f17e6458a85914fe8c02fc89b05a8ec62f90f0cbcfc08c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_119fd15425c3a30a0f17e6458a85914fe8c02fc89b05a8ec62f90f0cbcfc08c8->enter($__internal_119fd15425c3a30a0f17e6458a85914fe8c02fc89b05a8ec62f90f0cbcfc08c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_e20abe567dd8970bcbfc14f99d7eddb615b09c560a6c96074429fe6dc5dd408f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e20abe567dd8970bcbfc14f99d7eddb615b09c560a6c96074429fe6dc5dd408f->enter($__internal_e20abe567dd8970bcbfc14f99d7eddb615b09c560a6c96074429fe6dc5dd408f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_e20abe567dd8970bcbfc14f99d7eddb615b09c560a6c96074429fe6dc5dd408f->leave($__internal_e20abe567dd8970bcbfc14f99d7eddb615b09c560a6c96074429fe6dc5dd408f_prof);

        
        $__internal_119fd15425c3a30a0f17e6458a85914fe8c02fc89b05a8ec62f90f0cbcfc08c8->leave($__internal_119fd15425c3a30a0f17e6458a85914fe8c02fc89b05a8ec62f90f0cbcfc08c8_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_e0be749ba4277c03093e33c7f9eea6d40c9e38e5729475862c44297142713c92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0be749ba4277c03093e33c7f9eea6d40c9e38e5729475862c44297142713c92->enter($__internal_e0be749ba4277c03093e33c7f9eea6d40c9e38e5729475862c44297142713c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_217199141bfeea560e0c6284cc1663df1d41e645da1d65567fe73f0447f68a71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_217199141bfeea560e0c6284cc1663df1d41e645da1d65567fe73f0447f68a71->enter($__internal_217199141bfeea560e0c6284cc1663df1d41e645da1d65567fe73f0447f68a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_217199141bfeea560e0c6284cc1663df1d41e645da1d65567fe73f0447f68a71->leave($__internal_217199141bfeea560e0c6284cc1663df1d41e645da1d65567fe73f0447f68a71_prof);

        
        $__internal_e0be749ba4277c03093e33c7f9eea6d40c9e38e5729475862c44297142713c92->leave($__internal_e0be749ba4277c03093e33c7f9eea6d40c9e38e5729475862c44297142713c92_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_2364a8f2da69bb3bce866a6bda283866513f08b477e308ffecfa0a13100c407f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2364a8f2da69bb3bce866a6bda283866513f08b477e308ffecfa0a13100c407f->enter($__internal_2364a8f2da69bb3bce866a6bda283866513f08b477e308ffecfa0a13100c407f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_6bd291233d458858bce4f5c3f0396d48f0dc210d03d1f04ca6557b0adfcc4a0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd291233d458858bce4f5c3f0396d48f0dc210d03d1f04ca6557b0adfcc4a0a->enter($__internal_6bd291233d458858bce4f5c3f0396d48f0dc210d03d1f04ca6557b0adfcc4a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_6bd291233d458858bce4f5c3f0396d48f0dc210d03d1f04ca6557b0adfcc4a0a->leave($__internal_6bd291233d458858bce4f5c3f0396d48f0dc210d03d1f04ca6557b0adfcc4a0a_prof);

        
        $__internal_2364a8f2da69bb3bce866a6bda283866513f08b477e308ffecfa0a13100c407f->leave($__internal_2364a8f2da69bb3bce866a6bda283866513f08b477e308ffecfa0a13100c407f_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_e2be2f391f1127e9a8c663fbb44c2b83f4998f782172e8925ad0f007b036a238 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2be2f391f1127e9a8c663fbb44c2b83f4998f782172e8925ad0f007b036a238->enter($__internal_e2be2f391f1127e9a8c663fbb44c2b83f4998f782172e8925ad0f007b036a238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_db1e12f6a55cbd550999442466d74ee6d27984ada40a9ae1c6257bf8852c0f72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db1e12f6a55cbd550999442466d74ee6d27984ada40a9ae1c6257bf8852c0f72->enter($__internal_db1e12f6a55cbd550999442466d74ee6d27984ada40a9ae1c6257bf8852c0f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_db1e12f6a55cbd550999442466d74ee6d27984ada40a9ae1c6257bf8852c0f72->leave($__internal_db1e12f6a55cbd550999442466d74ee6d27984ada40a9ae1c6257bf8852c0f72_prof);

        
        $__internal_e2be2f391f1127e9a8c663fbb44c2b83f4998f782172e8925ad0f007b036a238->leave($__internal_e2be2f391f1127e9a8c663fbb44c2b83f4998f782172e8925ad0f007b036a238_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_dfed00e1f2d5994b36abd06dd9e318a9b6bac85dd95aea7ffac3f58e92619c4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfed00e1f2d5994b36abd06dd9e318a9b6bac85dd95aea7ffac3f58e92619c4d->enter($__internal_dfed00e1f2d5994b36abd06dd9e318a9b6bac85dd95aea7ffac3f58e92619c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_813ca5cd264c2064a674c1e7d2734037935731f3a8b0282d95a2bb30a4773e7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_813ca5cd264c2064a674c1e7d2734037935731f3a8b0282d95a2bb30a4773e7b->enter($__internal_813ca5cd264c2064a674c1e7d2734037935731f3a8b0282d95a2bb30a4773e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_813ca5cd264c2064a674c1e7d2734037935731f3a8b0282d95a2bb30a4773e7b->leave($__internal_813ca5cd264c2064a674c1e7d2734037935731f3a8b0282d95a2bb30a4773e7b_prof);

        
        $__internal_dfed00e1f2d5994b36abd06dd9e318a9b6bac85dd95aea7ffac3f58e92619c4d->leave($__internal_dfed00e1f2d5994b36abd06dd9e318a9b6bac85dd95aea7ffac3f58e92619c4d_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_3e4a99130968b2e3e70cf68e57b56ea352276fdcdfbb3573e0d7593766241ef8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e4a99130968b2e3e70cf68e57b56ea352276fdcdfbb3573e0d7593766241ef8->enter($__internal_3e4a99130968b2e3e70cf68e57b56ea352276fdcdfbb3573e0d7593766241ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_170461cc1793c18c4726627a17eaf57e545c036b5133a2668c97e14f89fea64b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_170461cc1793c18c4726627a17eaf57e545c036b5133a2668c97e14f89fea64b->enter($__internal_170461cc1793c18c4726627a17eaf57e545c036b5133a2668c97e14f89fea64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_170461cc1793c18c4726627a17eaf57e545c036b5133a2668c97e14f89fea64b->leave($__internal_170461cc1793c18c4726627a17eaf57e545c036b5133a2668c97e14f89fea64b_prof);

        
        $__internal_3e4a99130968b2e3e70cf68e57b56ea352276fdcdfbb3573e0d7593766241ef8->leave($__internal_3e4a99130968b2e3e70cf68e57b56ea352276fdcdfbb3573e0d7593766241ef8_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_120ed22ebb7689837f7b59499afd33368884b40ac3e45b5f37cb2207b84a33a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_120ed22ebb7689837f7b59499afd33368884b40ac3e45b5f37cb2207b84a33a9->enter($__internal_120ed22ebb7689837f7b59499afd33368884b40ac3e45b5f37cb2207b84a33a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_2c792e0baa38f58a249a114358271a12ebd6ede2fea09ee98e438b2b7b5bf5d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c792e0baa38f58a249a114358271a12ebd6ede2fea09ee98e438b2b7b5bf5d4->enter($__internal_2c792e0baa38f58a249a114358271a12ebd6ede2fea09ee98e438b2b7b5bf5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2c792e0baa38f58a249a114358271a12ebd6ede2fea09ee98e438b2b7b5bf5d4->leave($__internal_2c792e0baa38f58a249a114358271a12ebd6ede2fea09ee98e438b2b7b5bf5d4_prof);

        
        $__internal_120ed22ebb7689837f7b59499afd33368884b40ac3e45b5f37cb2207b84a33a9->leave($__internal_120ed22ebb7689837f7b59499afd33368884b40ac3e45b5f37cb2207b84a33a9_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_b2ddc585e4212540f0d8eca477699cd8d6c500e4d5d966c2a00d567f8ce1724e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2ddc585e4212540f0d8eca477699cd8d6c500e4d5d966c2a00d567f8ce1724e->enter($__internal_b2ddc585e4212540f0d8eca477699cd8d6c500e4d5d966c2a00d567f8ce1724e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_9bc4f0de1e2364e8ed3a6b80dff522d8fb1818cc7382cf48214bd715f219e107 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bc4f0de1e2364e8ed3a6b80dff522d8fb1818cc7382cf48214bd715f219e107->enter($__internal_9bc4f0de1e2364e8ed3a6b80dff522d8fb1818cc7382cf48214bd715f219e107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9bc4f0de1e2364e8ed3a6b80dff522d8fb1818cc7382cf48214bd715f219e107->leave($__internal_9bc4f0de1e2364e8ed3a6b80dff522d8fb1818cc7382cf48214bd715f219e107_prof);

        
        $__internal_b2ddc585e4212540f0d8eca477699cd8d6c500e4d5d966c2a00d567f8ce1724e->leave($__internal_b2ddc585e4212540f0d8eca477699cd8d6c500e4d5d966c2a00d567f8ce1724e_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_c957f2ff09b4036bf0045523dcfe7ac1db14b030fe1e15c9aa9b1236c3a200ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c957f2ff09b4036bf0045523dcfe7ac1db14b030fe1e15c9aa9b1236c3a200ab->enter($__internal_c957f2ff09b4036bf0045523dcfe7ac1db14b030fe1e15c9aa9b1236c3a200ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_ed50bf60c815fcec69e747ea0af83af225ce0e5310c6a673597ad63f5a930e36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed50bf60c815fcec69e747ea0af83af225ce0e5310c6a673597ad63f5a930e36->enter($__internal_ed50bf60c815fcec69e747ea0af83af225ce0e5310c6a673597ad63f5a930e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_ed50bf60c815fcec69e747ea0af83af225ce0e5310c6a673597ad63f5a930e36->leave($__internal_ed50bf60c815fcec69e747ea0af83af225ce0e5310c6a673597ad63f5a930e36_prof);

        
        $__internal_c957f2ff09b4036bf0045523dcfe7ac1db14b030fe1e15c9aa9b1236c3a200ab->leave($__internal_c957f2ff09b4036bf0045523dcfe7ac1db14b030fe1e15c9aa9b1236c3a200ab_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_2d9724fbb0ed890367ac1741741032f1c87ead80ac6aea3446a560d20ede38dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d9724fbb0ed890367ac1741741032f1c87ead80ac6aea3446a560d20ede38dc->enter($__internal_2d9724fbb0ed890367ac1741741032f1c87ead80ac6aea3446a560d20ede38dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_3305ca8930ee82922f3cecfefe3b83d9055a0f353911635536ead622c2c12de9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3305ca8930ee82922f3cecfefe3b83d9055a0f353911635536ead622c2c12de9->enter($__internal_3305ca8930ee82922f3cecfefe3b83d9055a0f353911635536ead622c2c12de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_3305ca8930ee82922f3cecfefe3b83d9055a0f353911635536ead622c2c12de9->leave($__internal_3305ca8930ee82922f3cecfefe3b83d9055a0f353911635536ead622c2c12de9_prof);

        
        $__internal_2d9724fbb0ed890367ac1741741032f1c87ead80ac6aea3446a560d20ede38dc->leave($__internal_2d9724fbb0ed890367ac1741741032f1c87ead80ac6aea3446a560d20ede38dc_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_57a8b86ea79ac357f67ce3c3575fe469e50c1e99dc41a9de357a56b2caf5da18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57a8b86ea79ac357f67ce3c3575fe469e50c1e99dc41a9de357a56b2caf5da18->enter($__internal_57a8b86ea79ac357f67ce3c3575fe469e50c1e99dc41a9de357a56b2caf5da18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_547f909b35c130e35e6d28783d814a7e64d5268529c5ce82330155c2eb012726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_547f909b35c130e35e6d28783d814a7e64d5268529c5ce82330155c2eb012726->enter($__internal_547f909b35c130e35e6d28783d814a7e64d5268529c5ce82330155c2eb012726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_547f909b35c130e35e6d28783d814a7e64d5268529c5ce82330155c2eb012726->leave($__internal_547f909b35c130e35e6d28783d814a7e64d5268529c5ce82330155c2eb012726_prof);

        
        $__internal_57a8b86ea79ac357f67ce3c3575fe469e50c1e99dc41a9de357a56b2caf5da18->leave($__internal_57a8b86ea79ac357f67ce3c3575fe469e50c1e99dc41a9de357a56b2caf5da18_prof);

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
", "bootstrap_3_layout.html.twig", "/var/www/monsite1/mecacorp/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
