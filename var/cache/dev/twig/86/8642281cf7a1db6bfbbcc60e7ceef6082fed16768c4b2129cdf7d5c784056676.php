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
        $__internal_cf445c5de636c79f987f56138d3f46464f847b2c94d168079458fc37d4cc44e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf445c5de636c79f987f56138d3f46464f847b2c94d168079458fc37d4cc44e2->enter($__internal_cf445c5de636c79f987f56138d3f46464f847b2c94d168079458fc37d4cc44e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig"));

        $__internal_2ff86a5ae27ac3f2ea3968767964553b832c447ab5f2f38e4bb1bdc15a9e7713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ff86a5ae27ac3f2ea3968767964553b832c447ab5f2f38e4bb1bdc15a9e7713->enter($__internal_2ff86a5ae27ac3f2ea3968767964553b832c447ab5f2f38e4bb1bdc15a9e7713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_cf445c5de636c79f987f56138d3f46464f847b2c94d168079458fc37d4cc44e2->leave($__internal_cf445c5de636c79f987f56138d3f46464f847b2c94d168079458fc37d4cc44e2_prof);

        
        $__internal_2ff86a5ae27ac3f2ea3968767964553b832c447ab5f2f38e4bb1bdc15a9e7713->leave($__internal_2ff86a5ae27ac3f2ea3968767964553b832c447ab5f2f38e4bb1bdc15a9e7713_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_898ae044e3bd66f149d8b2bcf5a00e807464f765e5c8510b98d8945e40cfc61d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_898ae044e3bd66f149d8b2bcf5a00e807464f765e5c8510b98d8945e40cfc61d->enter($__internal_898ae044e3bd66f149d8b2bcf5a00e807464f765e5c8510b98d8945e40cfc61d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_dc62bad315bdc178d3c7138fed63761823b421e21355efdcb00b24720a590d85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc62bad315bdc178d3c7138fed63761823b421e21355efdcb00b24720a590d85->enter($__internal_dc62bad315bdc178d3c7138fed63761823b421e21355efdcb00b24720a590d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["_easyadmin_form_type"] = "horizontal";
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_dc62bad315bdc178d3c7138fed63761823b421e21355efdcb00b24720a590d85->leave($__internal_dc62bad315bdc178d3c7138fed63761823b421e21355efdcb00b24720a590d85_prof);

        
        $__internal_898ae044e3bd66f149d8b2bcf5a00e807464f765e5c8510b98d8945e40cfc61d->leave($__internal_898ae044e3bd66f149d8b2bcf5a00e807464f765e5c8510b98d8945e40cfc61d_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_9a2e9d13239ae2f5d74657e33d1fbc17170639fc2198b26e297e3c4595350839 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a2e9d13239ae2f5d74657e33d1fbc17170639fc2198b26e297e3c4595350839->enter($__internal_9a2e9d13239ae2f5d74657e33d1fbc17170639fc2198b26e297e3c4595350839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_430e3881c9a219824420edde278d685b5b5e8810bcae7ce67c90a9c0e19d54e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_430e3881c9a219824420edde278d685b5b5e8810bcae7ce67c90a9c0e19d54e9->enter($__internal_430e3881c9a219824420edde278d685b5b5e8810bcae7ce67c90a9c0e19d54e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_430e3881c9a219824420edde278d685b5b5e8810bcae7ce67c90a9c0e19d54e9->leave($__internal_430e3881c9a219824420edde278d685b5b5e8810bcae7ce67c90a9c0e19d54e9_prof);

        
        $__internal_9a2e9d13239ae2f5d74657e33d1fbc17170639fc2198b26e297e3c4595350839->leave($__internal_9a2e9d13239ae2f5d74657e33d1fbc17170639fc2198b26e297e3c4595350839_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_e3863d708e61fc05c50f5781a9850fe79b65296a1dfa97c188234b9c24e37813 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3863d708e61fc05c50f5781a9850fe79b65296a1dfa97c188234b9c24e37813->enter($__internal_e3863d708e61fc05c50f5781a9850fe79b65296a1dfa97c188234b9c24e37813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_e7b2b7558f6623c5cd4a605b6afbfe0f8675fdeb0f3b84ad27a3d64c9481724b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7b2b7558f6623c5cd4a605b6afbfe0f8675fdeb0f3b84ad27a3d64c9481724b->enter($__internal_e7b2b7558f6623c5cd4a605b6afbfe0f8675fdeb0f3b84ad27a3d64c9481724b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        echo "col-sm-2";
        
        $__internal_e7b2b7558f6623c5cd4a605b6afbfe0f8675fdeb0f3b84ad27a3d64c9481724b->leave($__internal_e7b2b7558f6623c5cd4a605b6afbfe0f8675fdeb0f3b84ad27a3d64c9481724b_prof);

        
        $__internal_e3863d708e61fc05c50f5781a9850fe79b65296a1dfa97c188234b9c24e37813->leave($__internal_e3863d708e61fc05c50f5781a9850fe79b65296a1dfa97c188234b9c24e37813_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_5041fb892d048c598cd1b105abdd8552d23dad6f6afc5fb4970ab1168ee3bd35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5041fb892d048c598cd1b105abdd8552d23dad6f6afc5fb4970ab1168ee3bd35->enter($__internal_5041fb892d048c598cd1b105abdd8552d23dad6f6afc5fb4970ab1168ee3bd35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_3836b1d97c93aa314dfec83fbbef9df16700c22eaf140167d01802506997c66a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3836b1d97c93aa314dfec83fbbef9df16700c22eaf140167d01802506997c66a->enter($__internal_3836b1d97c93aa314dfec83fbbef9df16700c22eaf140167d01802506997c66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_3836b1d97c93aa314dfec83fbbef9df16700c22eaf140167d01802506997c66a->leave($__internal_3836b1d97c93aa314dfec83fbbef9df16700c22eaf140167d01802506997c66a_prof);

        
        $__internal_5041fb892d048c598cd1b105abdd8552d23dad6f6afc5fb4970ab1168ee3bd35->leave($__internal_5041fb892d048c598cd1b105abdd8552d23dad6f6afc5fb4970ab1168ee3bd35_prof);

    }

    // line 52
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_667ad090fc04702d2bd57bc1b325b0cd3c78d680595ec7f133d038dc6505faca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_667ad090fc04702d2bd57bc1b325b0cd3c78d680595ec7f133d038dc6505faca->enter($__internal_667ad090fc04702d2bd57bc1b325b0cd3c78d680595ec7f133d038dc6505faca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_464aeb22cd60348b54ce0f1aa873a2d0864ce7482f692324c13c631c87421cf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_464aeb22cd60348b54ce0f1aa873a2d0864ce7482f692324c13c631c87421cf3->enter($__internal_464aeb22cd60348b54ce0f1aa873a2d0864ce7482f692324c13c631c87421cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 53
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_464aeb22cd60348b54ce0f1aa873a2d0864ce7482f692324c13c631c87421cf3->leave($__internal_464aeb22cd60348b54ce0f1aa873a2d0864ce7482f692324c13c631c87421cf3_prof);

        
        $__internal_667ad090fc04702d2bd57bc1b325b0cd3c78d680595ec7f133d038dc6505faca->leave($__internal_667ad090fc04702d2bd57bc1b325b0cd3c78d680595ec7f133d038dc6505faca_prof);

    }

    // line 56
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_9014d97e13d00b2f938eaec5f4e6abe2bdd498051ad3c579c390e6eb996175a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9014d97e13d00b2f938eaec5f4e6abe2bdd498051ad3c579c390e6eb996175a9->enter($__internal_9014d97e13d00b2f938eaec5f4e6abe2bdd498051ad3c579c390e6eb996175a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_41ab4b571350310b09af5d0879a5e7957e9f50b04a3506e67b302666565a782d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41ab4b571350310b09af5d0879a5e7957e9f50b04a3506e67b302666565a782d->enter($__internal_41ab4b571350310b09af5d0879a5e7957e9f50b04a3506e67b302666565a782d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 57
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_41ab4b571350310b09af5d0879a5e7957e9f50b04a3506e67b302666565a782d->leave($__internal_41ab4b571350310b09af5d0879a5e7957e9f50b04a3506e67b302666565a782d_prof);

        
        $__internal_9014d97e13d00b2f938eaec5f4e6abe2bdd498051ad3c579c390e6eb996175a9->leave($__internal_9014d97e13d00b2f938eaec5f4e6abe2bdd498051ad3c579c390e6eb996175a9_prof);

    }

    // line 60
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_8e6077050de876a419c9505f0e7b2797ec586ee07cf52dd51f8b14f302728497 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e6077050de876a419c9505f0e7b2797ec586ee07cf52dd51f8b14f302728497->enter($__internal_8e6077050de876a419c9505f0e7b2797ec586ee07cf52dd51f8b14f302728497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_305ca168571613733b3499a164d70549811fc7d7053fef8e90df6225a22a4583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_305ca168571613733b3499a164d70549811fc7d7053fef8e90df6225a22a4583->enter($__internal_305ca168571613733b3499a164d70549811fc7d7053fef8e90df6225a22a4583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_305ca168571613733b3499a164d70549811fc7d7053fef8e90df6225a22a4583->leave($__internal_305ca168571613733b3499a164d70549811fc7d7053fef8e90df6225a22a4583_prof);

        
        $__internal_8e6077050de876a419c9505f0e7b2797ec586ee07cf52dd51f8b14f302728497->leave($__internal_8e6077050de876a419c9505f0e7b2797ec586ee07cf52dd51f8b14f302728497_prof);

    }

    // line 72
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_849a93d14f6ec927546e9a19d6eaab63d47fd99c94d10a5dee3d211f8331c77a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_849a93d14f6ec927546e9a19d6eaab63d47fd99c94d10a5dee3d211f8331c77a->enter($__internal_849a93d14f6ec927546e9a19d6eaab63d47fd99c94d10a5dee3d211f8331c77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_2400f3e3a9013afe0ed3730f71ecef9cb5a8d36ce9bf4bb7812281edf7db2b40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2400f3e3a9013afe0ed3730f71ecef9cb5a8d36ce9bf4bb7812281edf7db2b40->enter($__internal_2400f3e3a9013afe0ed3730f71ecef9cb5a8d36ce9bf4bb7812281edf7db2b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_2400f3e3a9013afe0ed3730f71ecef9cb5a8d36ce9bf4bb7812281edf7db2b40->leave($__internal_2400f3e3a9013afe0ed3730f71ecef9cb5a8d36ce9bf4bb7812281edf7db2b40_prof);

        
        $__internal_849a93d14f6ec927546e9a19d6eaab63d47fd99c94d10a5dee3d211f8331c77a->leave($__internal_849a93d14f6ec927546e9a19d6eaab63d47fd99c94d10a5dee3d211f8331c77a_prof);

    }

    // line 83
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_c3edc425b42cdf4dfa2454cd807e72cb54743f8eb03a0932e1c1d255f17aac5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3edc425b42cdf4dfa2454cd807e72cb54743f8eb03a0932e1c1d255f17aac5d->enter($__internal_c3edc425b42cdf4dfa2454cd807e72cb54743f8eb03a0932e1c1d255f17aac5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_f4f65c5a2804d1ee5a7265f80519c57720e29155888f340f8d8b5d4bfd547170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4f65c5a2804d1ee5a7265f80519c57720e29155888f340f8d8b5d4bfd547170->enter($__internal_f4f65c5a2804d1ee5a7265f80519c57720e29155888f340f8d8b5d4bfd547170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_f4f65c5a2804d1ee5a7265f80519c57720e29155888f340f8d8b5d4bfd547170->leave($__internal_f4f65c5a2804d1ee5a7265f80519c57720e29155888f340f8d8b5d4bfd547170_prof);

        
        $__internal_c3edc425b42cdf4dfa2454cd807e72cb54743f8eb03a0932e1c1d255f17aac5d->leave($__internal_c3edc425b42cdf4dfa2454cd807e72cb54743f8eb03a0932e1c1d255f17aac5d_prof);

    }

    // line 94
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_07d74589dec7509a6c7fced0e497307f7573fe38cc40b6594100c6260a7679b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07d74589dec7509a6c7fced0e497307f7573fe38cc40b6594100c6260a7679b1->enter($__internal_07d74589dec7509a6c7fced0e497307f7573fe38cc40b6594100c6260a7679b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_389d402b0cf584ad6a379b5d3d20c17da5737cf9abe327d488426684c4ca4d34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_389d402b0cf584ad6a379b5d3d20c17da5737cf9abe327d488426684c4ca4d34->enter($__internal_389d402b0cf584ad6a379b5d3d20c17da5737cf9abe327d488426684c4ca4d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        echo "col-sm-10";
        
        $__internal_389d402b0cf584ad6a379b5d3d20c17da5737cf9abe327d488426684c4ca4d34->leave($__internal_389d402b0cf584ad6a379b5d3d20c17da5737cf9abe327d488426684c4ca4d34_prof);

        
        $__internal_07d74589dec7509a6c7fced0e497307f7573fe38cc40b6594100c6260a7679b1->leave($__internal_07d74589dec7509a6c7fced0e497307f7573fe38cc40b6594100c6260a7679b1_prof);

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
", "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig", "/home/fabien/Téléchargements/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/form/bootstrap_3_horizontal_layout.html.twig");
    }
}
