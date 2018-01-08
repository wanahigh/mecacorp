<?php

/* EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_bfe3a95aef9115a6b01e39a46d5ee6673ea48d86aad79a2250547130ec39fc8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("@EasyAdmin/form/bootstrap_3_layout.html.twig", "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."@EasyAdmin/form/bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11b45c4b76822d2d401f50d4fbb1225519c5d7197f608ffc724a394a3451b9a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11b45c4b76822d2d401f50d4fbb1225519c5d7197f608ffc724a394a3451b9a0->enter($__internal_11b45c4b76822d2d401f50d4fbb1225519c5d7197f608ffc724a394a3451b9a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig"));

        $__internal_68cde9b3e96b80652fd6484ecf1224a3990bf42982ebb0632a7a2b913313cbf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68cde9b3e96b80652fd6484ecf1224a3990bf42982ebb0632a7a2b913313cbf8->enter($__internal_68cde9b3e96b80652fd6484ecf1224a3990bf42982ebb0632a7a2b913313cbf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('radio_row', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('submit_row', $context, $blocks);
        // line 82
        echo "
";
        // line 83
        $this->displayBlock('reset_row', $context, $blocks);
        // line 93
        echo "
";
        // line 94
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_11b45c4b76822d2d401f50d4fbb1225519c5d7197f608ffc724a394a3451b9a0->leave($__internal_11b45c4b76822d2d401f50d4fbb1225519c5d7197f608ffc724a394a3451b9a0_prof);

        
        $__internal_68cde9b3e96b80652fd6484ecf1224a3990bf42982ebb0632a7a2b913313cbf8->leave($__internal_68cde9b3e96b80652fd6484ecf1224a3990bf42982ebb0632a7a2b913313cbf8_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_e32321ec7b27802918fb05903ee5d04b5c349b054447110405634fccd9964f2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e32321ec7b27802918fb05903ee5d04b5c349b054447110405634fccd9964f2a->enter($__internal_e32321ec7b27802918fb05903ee5d04b5c349b054447110405634fccd9964f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_9da8c066b976f83cf57a4d6e0195676e15f925c591d4132791c172265b74efcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9da8c066b976f83cf57a4d6e0195676e15f925c591d4132791c172265b74efcd->enter($__internal_9da8c066b976f83cf57a4d6e0195676e15f925c591d4132791c172265b74efcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["_easyadmin_form_type"] = "horizontal";
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_9da8c066b976f83cf57a4d6e0195676e15f925c591d4132791c172265b74efcd->leave($__internal_9da8c066b976f83cf57a4d6e0195676e15f925c591d4132791c172265b74efcd_prof);

        
        $__internal_e32321ec7b27802918fb05903ee5d04b5c349b054447110405634fccd9964f2a->leave($__internal_e32321ec7b27802918fb05903ee5d04b5c349b054447110405634fccd9964f2a_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_9d575b84b7dd6c8b74199e3134aa03ce43b28cda890a53919b01761bf3fd32f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d575b84b7dd6c8b74199e3134aa03ce43b28cda890a53919b01761bf3fd32f4->enter($__internal_9d575b84b7dd6c8b74199e3134aa03ce43b28cda890a53919b01761bf3fd32f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_ad013b586e9ccde87dc6267156ab923c29e442fe3208e7add12d99165b6517f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad013b586e9ccde87dc6267156ab923c29e442fe3208e7add12d99165b6517f4->enter($__internal_ad013b586e9ccde87dc6267156ab923c29e442fe3208e7add12d99165b6517f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 12, $this->getSourceContext()); })()) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 15, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ad013b586e9ccde87dc6267156ab923c29e442fe3208e7add12d99165b6517f4->leave($__internal_ad013b586e9ccde87dc6267156ab923c29e442fe3208e7add12d99165b6517f4_prof);

        
        $__internal_9d575b84b7dd6c8b74199e3134aa03ce43b28cda890a53919b01761bf3fd32f4->leave($__internal_9d575b84b7dd6c8b74199e3134aa03ce43b28cda890a53919b01761bf3fd32f4_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_0075107020dd6cb4e2c293d17dfe9d8643504c7512737629b62b0b69bf65101f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0075107020dd6cb4e2c293d17dfe9d8643504c7512737629b62b0b69bf65101f->enter($__internal_0075107020dd6cb4e2c293d17dfe9d8643504c7512737629b62b0b69bf65101f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_2c99d11546e014d90c396861b6c2e28be8a49d254a7c43c702d04a17e02d634e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c99d11546e014d90c396861b6c2e28be8a49d254a7c43c702d04a17e02d634e->enter($__internal_2c99d11546e014d90c396861b6c2e28be8a49d254a7c43c702d04a17e02d634e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        echo "col-sm-2";
        
        $__internal_2c99d11546e014d90c396861b6c2e28be8a49d254a7c43c702d04a17e02d634e->leave($__internal_2c99d11546e014d90c396861b6c2e28be8a49d254a7c43c702d04a17e02d634e_prof);

        
        $__internal_0075107020dd6cb4e2c293d17dfe9d8643504c7512737629b62b0b69bf65101f->leave($__internal_0075107020dd6cb4e2c293d17dfe9d8643504c7512737629b62b0b69bf65101f_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_88f9f0c1ff26951d311e56e84402c1ff4c5a84bbefb7834b4eee337690f82176 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88f9f0c1ff26951d311e56e84402c1ff4c5a84bbefb7834b4eee337690f82176->enter($__internal_88f9f0c1ff26951d311e56e84402c1ff4c5a84bbefb7834b4eee337690f82176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_e0819964b01ce1f6326e6118166300bfff98612f116a8849924512a621f41ec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0819964b01ce1f6326e6118166300bfff98612f116a8849924512a621f41ec1->enter($__internal_e0819964b01ce1f6326e6118166300bfff98612f116a8849924512a621f41ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        ob_start();
        // line 27
        echo "    ";
        $context["_field_type"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 28
        echo "    <div class=\"form-group ";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 28, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 28, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 28, $this->getSourceContext()); })()))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new Twig_Error_Runtime('Variable "block_prefixes" does not exist.', 28, $this->getSourceContext()); })()),  -2)), "html", null, true);
        echo "\">
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'label');
        echo "
        <div class=\"";
        // line 30
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'widget');
        echo "

            ";
        // line 33
        if ((twig_in_filter((isset($context["_field_type"]) || array_key_exists("_field_type", $context) ? $context["_field_type"] : (function () { throw new Twig_Error_Runtime('Variable "_field_type" does not exist.', 33, $this->getSourceContext()); })()), array(0 => "datetime", 1 => "date", 2 => "time", 3 => "birthday")) && ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 34
            echo "                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" ";
            // line 36
            if ((null === (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 36, $this->getSourceContext()); })()))) {
                echo "checked=\"checked\"";
            }
            echo ">
                        ";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                    </label>
                </div>
            ";
        }
        // line 41
        echo "
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'errors');
        echo "

            ";
        // line 44
        if ((((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 45
            echo "                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 45, $this->getSourceContext()); })()), "field", array()), "help", array()), array(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["easyadmin"]) || array_key_exists("easyadmin", $context) ? $context["easyadmin"] : (function () { throw new Twig_Error_Runtime('Variable "easyadmin" does not exist.', 45, $this->getSourceContext()); })()), "entity", array()), "translation_domain", array()));
            echo "</span>
            ";
        }
        // line 47
        echo "        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e0819964b01ce1f6326e6118166300bfff98612f116a8849924512a621f41ec1->leave($__internal_e0819964b01ce1f6326e6118166300bfff98612f116a8849924512a621f41ec1_prof);

        
        $__internal_88f9f0c1ff26951d311e56e84402c1ff4c5a84bbefb7834b4eee337690f82176->leave($__internal_88f9f0c1ff26951d311e56e84402c1ff4c5a84bbefb7834b4eee337690f82176_prof);

    }

    // line 52
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_67e29ab5ec8580ad26aaef6db4926fe2dfa4e64f6f75db7fe4952f0c1e2088bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67e29ab5ec8580ad26aaef6db4926fe2dfa4e64f6f75db7fe4952f0c1e2088bf->enter($__internal_67e29ab5ec8580ad26aaef6db4926fe2dfa4e64f6f75db7fe4952f0c1e2088bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_3e9971e44fed50d97d2d97c6d1f6f248a97981f70dd0ade32f603eb8eb51adb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e9971e44fed50d97d2d97c6d1f6f248a97981f70dd0ade32f603eb8eb51adb5->enter($__internal_3e9971e44fed50d97d2d97c6d1f6f248a97981f70dd0ade32f603eb8eb51adb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 53
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_3e9971e44fed50d97d2d97c6d1f6f248a97981f70dd0ade32f603eb8eb51adb5->leave($__internal_3e9971e44fed50d97d2d97c6d1f6f248a97981f70dd0ade32f603eb8eb51adb5_prof);

        
        $__internal_67e29ab5ec8580ad26aaef6db4926fe2dfa4e64f6f75db7fe4952f0c1e2088bf->leave($__internal_67e29ab5ec8580ad26aaef6db4926fe2dfa4e64f6f75db7fe4952f0c1e2088bf_prof);

    }

    // line 56
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_3c9ab366620049c695bae89e72bb0648a5d262ea60033013a984319a65dac1f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c9ab366620049c695bae89e72bb0648a5d262ea60033013a984319a65dac1f6->enter($__internal_3c9ab366620049c695bae89e72bb0648a5d262ea60033013a984319a65dac1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_009caa39015871548fc80b7c0decb22c93e1321084e1468a1612c223c5640fb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_009caa39015871548fc80b7c0decb22c93e1321084e1468a1612c223c5640fb8->enter($__internal_009caa39015871548fc80b7c0decb22c93e1321084e1468a1612c223c5640fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 57
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_009caa39015871548fc80b7c0decb22c93e1321084e1468a1612c223c5640fb8->leave($__internal_009caa39015871548fc80b7c0decb22c93e1321084e1468a1612c223c5640fb8_prof);

        
        $__internal_3c9ab366620049c695bae89e72bb0648a5d262ea60033013a984319a65dac1f6->leave($__internal_3c9ab366620049c695bae89e72bb0648a5d262ea60033013a984319a65dac1f6_prof);

    }

    // line 60
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_9723ccb06f1e7d367cabedab7cb8cbeec667dd744926da93f0c735784d5e3c70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9723ccb06f1e7d367cabedab7cb8cbeec667dd744926da93f0c735784d5e3c70->enter($__internal_9723ccb06f1e7d367cabedab7cb8cbeec667dd744926da93f0c735784d5e3c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_a68908e1c55e0dd2eeb1b3d9fe2a1fc0e5b94c6fd925ea5984aec03e4f91ae87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a68908e1c55e0dd2eeb1b3d9fe2a1fc0e5b94c6fd925ea5984aec03e4f91ae87->enter($__internal_a68908e1c55e0dd2eeb1b3d9fe2a1fc0e5b94c6fd925ea5984aec03e4f91ae87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 61
        ob_start();
        // line 62
        echo "    <div class=\"form-group ";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 62, $this->getSourceContext()); })())) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new Twig_Error_Runtime('Variable "block_prefixes" does not exist.', 62, $this->getSourceContext()); })()),  -2)), "html", null, true);
        echo "\">
        <div class=\"";
        // line 63
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 64
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->getSourceContext()); })()), 'widget');
        echo "
            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->getSourceContext()); })()), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a68908e1c55e0dd2eeb1b3d9fe2a1fc0e5b94c6fd925ea5984aec03e4f91ae87->leave($__internal_a68908e1c55e0dd2eeb1b3d9fe2a1fc0e5b94c6fd925ea5984aec03e4f91ae87_prof);

        
        $__internal_9723ccb06f1e7d367cabedab7cb8cbeec667dd744926da93f0c735784d5e3c70->leave($__internal_9723ccb06f1e7d367cabedab7cb8cbeec667dd744926da93f0c735784d5e3c70_prof);

    }

    // line 72
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_b796bc65e54d6187d346451faa446d2a0fdafcada54e721767f780d1130e210a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b796bc65e54d6187d346451faa446d2a0fdafcada54e721767f780d1130e210a->enter($__internal_b796bc65e54d6187d346451faa446d2a0fdafcada54e721767f780d1130e210a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_9eda66a262c78b5ccd95f3901b84c2379fe859d7eb1d8824e7383ad87c612a2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eda66a262c78b5ccd95f3901b84c2379fe859d7eb1d8824e7383ad87c612a2d->enter($__internal_9eda66a262c78b5ccd95f3901b84c2379fe859d7eb1d8824e7383ad87c612a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 73
        ob_start();
        // line 74
        echo "    <div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new Twig_Error_Runtime('Variable "block_prefixes" does not exist.', 74, $this->getSourceContext()); })()),  -2)), "html", null, true);
        echo "\">
        <div class=\"";
        // line 75
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 76
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 77, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9eda66a262c78b5ccd95f3901b84c2379fe859d7eb1d8824e7383ad87c612a2d->leave($__internal_9eda66a262c78b5ccd95f3901b84c2379fe859d7eb1d8824e7383ad87c612a2d_prof);

        
        $__internal_b796bc65e54d6187d346451faa446d2a0fdafcada54e721767f780d1130e210a->leave($__internal_b796bc65e54d6187d346451faa446d2a0fdafcada54e721767f780d1130e210a_prof);

    }

    // line 83
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_76757ae6110b50a21003518653fbffd6a901bd41c0faf87e80fe70f4c32996bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76757ae6110b50a21003518653fbffd6a901bd41c0faf87e80fe70f4c32996bd->enter($__internal_76757ae6110b50a21003518653fbffd6a901bd41c0faf87e80fe70f4c32996bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_5fcb349e6cdd350576c176f05f77545fb4ae02d2457d8dfeb6edd2da8622f9ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fcb349e6cdd350576c176f05f77545fb4ae02d2457d8dfeb6edd2da8622f9ad->enter($__internal_5fcb349e6cdd350576c176f05f77545fb4ae02d2457d8dfeb6edd2da8622f9ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 84
        ob_start();
        // line 85
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 86
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 87
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 88, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5fcb349e6cdd350576c176f05f77545fb4ae02d2457d8dfeb6edd2da8622f9ad->leave($__internal_5fcb349e6cdd350576c176f05f77545fb4ae02d2457d8dfeb6edd2da8622f9ad_prof);

        
        $__internal_76757ae6110b50a21003518653fbffd6a901bd41c0faf87e80fe70f4c32996bd->leave($__internal_76757ae6110b50a21003518653fbffd6a901bd41c0faf87e80fe70f4c32996bd_prof);

    }

    // line 94
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_18fa37d02caa5cfd86ea138f28c99c1fc0fde21d16e54b179c8e9dce966c6725 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18fa37d02caa5cfd86ea138f28c99c1fc0fde21d16e54b179c8e9dce966c6725->enter($__internal_18fa37d02caa5cfd86ea138f28c99c1fc0fde21d16e54b179c8e9dce966c6725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_3bbce2f469a2aab0ed259327937b028063d81e1a6e1308ef00a948f4411d1885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bbce2f469a2aab0ed259327937b028063d81e1a6e1308ef00a948f4411d1885->enter($__internal_3bbce2f469a2aab0ed259327937b028063d81e1a6e1308ef00a948f4411d1885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        echo "col-sm-10";
        
        $__internal_3bbce2f469a2aab0ed259327937b028063d81e1a6e1308ef00a948f4411d1885->leave($__internal_3bbce2f469a2aab0ed259327937b028063d81e1a6e1308ef00a948f4411d1885_prof);

        
        $__internal_18fa37d02caa5cfd86ea138f28c99c1fc0fde21d16e54b179c8e9dce966c6725->leave($__internal_18fa37d02caa5cfd86ea138f28c99c1fc0fde21d16e54b179c8e9dce966c6725_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  430 => 94,  415 => 88,  411 => 87,  407 => 86,  404 => 85,  402 => 84,  393 => 83,  378 => 77,  374 => 76,  370 => 75,  365 => 74,  363 => 73,  354 => 72,  339 => 66,  335 => 65,  331 => 64,  327 => 63,  318 => 62,  316 => 61,  307 => 60,  297 => 57,  288 => 56,  278 => 53,  269 => 52,  256 => 47,  250 => 45,  248 => 44,  243 => 42,  240 => 41,  233 => 37,  227 => 36,  223 => 34,  221 => 33,  216 => 31,  212 => 30,  208 => 29,  199 => 28,  196 => 27,  194 => 26,  185 => 25,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 94,  98 => 93,  96 => 83,  93 => 82,  91 => 72,  88 => 71,  86 => 60,  83 => 59,  81 => 56,  78 => 55,  76 => 52,  73 => 51,  71 => 25,  68 => 24,  65 => 22,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"@EasyAdmin/form/bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set _easyadmin_form_type = 'horizontal' %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class 'col-sm-2' %}

{# Rows #}

{% block form_row -%}
{% spaceless %}
    {% set _field_type = easyadmin.field.fieldType|default('default') %}
    <div class=\"form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{ form_label(form) }}
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}

            {% if _field_type in ['datetime', 'date', 'time', 'birthday'] and easyadmin.field.nullable|default(false) %}
                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" {% if data is null %}checked=\"checked\"{% endif %}>
                        {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}
                    </label>
                </div>
            {% endif %}

            {{ form_errors(form) }}

            {% if easyadmin.field.help|default('') != '' %}
                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ easyadmin.field.help|trans(domain = easyadmin.entity.translation_domain)|raw }}</span>
            {% endif %}
        </div>
    </div>
{% endspaceless %}
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group field-{{ block_prefixes|slice(-2)|first }}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class 'col-sm-10' %}
", "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig", "/home/fabien/symfony-stg/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/form/bootstrap_3_horizontal_layout.html.twig");
    }
}
