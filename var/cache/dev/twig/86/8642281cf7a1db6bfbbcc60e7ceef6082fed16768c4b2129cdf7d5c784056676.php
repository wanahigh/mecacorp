<?php

/* @EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_bfe3a95aef9115a6b01e39a46d5ee6673ea48d86aad79a2250547130ec39fc8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("@EasyAdmin/form/bootstrap_3_layout.html.twig", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig", 1);
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
        $__internal_5c8c020674965f7e069b6794d89fdc7f9e9ac3d5495d83900a2090c059a87419 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c8c020674965f7e069b6794d89fdc7f9e9ac3d5495d83900a2090c059a87419->enter($__internal_5c8c020674965f7e069b6794d89fdc7f9e9ac3d5495d83900a2090c059a87419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig"));

        $__internal_be74f6d4678a9bb0ffffcf0beccd4265ece909382289c3a2961eaa2b6be1ed45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be74f6d4678a9bb0ffffcf0beccd4265ece909382289c3a2961eaa2b6be1ed45->enter($__internal_be74f6d4678a9bb0ffffcf0beccd4265ece909382289c3a2961eaa2b6be1ed45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_5c8c020674965f7e069b6794d89fdc7f9e9ac3d5495d83900a2090c059a87419->leave($__internal_5c8c020674965f7e069b6794d89fdc7f9e9ac3d5495d83900a2090c059a87419_prof);

        
        $__internal_be74f6d4678a9bb0ffffcf0beccd4265ece909382289c3a2961eaa2b6be1ed45->leave($__internal_be74f6d4678a9bb0ffffcf0beccd4265ece909382289c3a2961eaa2b6be1ed45_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_06d041a67827908c09f09cbf6a0998b1f9a3f8e04a073275282bbb823c98fb59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06d041a67827908c09f09cbf6a0998b1f9a3f8e04a073275282bbb823c98fb59->enter($__internal_06d041a67827908c09f09cbf6a0998b1f9a3f8e04a073275282bbb823c98fb59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_a7a7296fbd2b00b590639c8e8115ca067c394e5444b6d04af9161f82da4c0216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7a7296fbd2b00b590639c8e8115ca067c394e5444b6d04af9161f82da4c0216->enter($__internal_a7a7296fbd2b00b590639c8e8115ca067c394e5444b6d04af9161f82da4c0216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["_easyadmin_form_type"] = "horizontal";
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_a7a7296fbd2b00b590639c8e8115ca067c394e5444b6d04af9161f82da4c0216->leave($__internal_a7a7296fbd2b00b590639c8e8115ca067c394e5444b6d04af9161f82da4c0216_prof);

        
        $__internal_06d041a67827908c09f09cbf6a0998b1f9a3f8e04a073275282bbb823c98fb59->leave($__internal_06d041a67827908c09f09cbf6a0998b1f9a3f8e04a073275282bbb823c98fb59_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_ab39a8d001810c2d74019b1a1e268d71877baa0de56007cb121cfdf7188ebf77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab39a8d001810c2d74019b1a1e268d71877baa0de56007cb121cfdf7188ebf77->enter($__internal_ab39a8d001810c2d74019b1a1e268d71877baa0de56007cb121cfdf7188ebf77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_6c61603aa7d6997cbe78234d55192dd7e02f9aae1fac0058f4b04090a9a858f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c61603aa7d6997cbe78234d55192dd7e02f9aae1fac0058f4b04090a9a858f4->enter($__internal_6c61603aa7d6997cbe78234d55192dd7e02f9aae1fac0058f4b04090a9a858f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_6c61603aa7d6997cbe78234d55192dd7e02f9aae1fac0058f4b04090a9a858f4->leave($__internal_6c61603aa7d6997cbe78234d55192dd7e02f9aae1fac0058f4b04090a9a858f4_prof);

        
        $__internal_ab39a8d001810c2d74019b1a1e268d71877baa0de56007cb121cfdf7188ebf77->leave($__internal_ab39a8d001810c2d74019b1a1e268d71877baa0de56007cb121cfdf7188ebf77_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_a4528350d3bb64adc4c7766af642271601aac458619be083df5011ee50488e7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4528350d3bb64adc4c7766af642271601aac458619be083df5011ee50488e7e->enter($__internal_a4528350d3bb64adc4c7766af642271601aac458619be083df5011ee50488e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_c3d7bf769e5f49fcf6ed9f70928538153bd99647f7bf5f37939b31906666d9f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3d7bf769e5f49fcf6ed9f70928538153bd99647f7bf5f37939b31906666d9f1->enter($__internal_c3d7bf769e5f49fcf6ed9f70928538153bd99647f7bf5f37939b31906666d9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        echo "col-sm-2";
        
        $__internal_c3d7bf769e5f49fcf6ed9f70928538153bd99647f7bf5f37939b31906666d9f1->leave($__internal_c3d7bf769e5f49fcf6ed9f70928538153bd99647f7bf5f37939b31906666d9f1_prof);

        
        $__internal_a4528350d3bb64adc4c7766af642271601aac458619be083df5011ee50488e7e->leave($__internal_a4528350d3bb64adc4c7766af642271601aac458619be083df5011ee50488e7e_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_95f54728fd3a058c588442cfea0c5b428cfef9a0b563ef962133689e52707f0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95f54728fd3a058c588442cfea0c5b428cfef9a0b563ef962133689e52707f0d->enter($__internal_95f54728fd3a058c588442cfea0c5b428cfef9a0b563ef962133689e52707f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_533b59033f6f86b671a8b2599a0ea7dbeb07d686af81d370b9355fc53df02b72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_533b59033f6f86b671a8b2599a0ea7dbeb07d686af81d370b9355fc53df02b72->enter($__internal_533b59033f6f86b671a8b2599a0ea7dbeb07d686af81d370b9355fc53df02b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_533b59033f6f86b671a8b2599a0ea7dbeb07d686af81d370b9355fc53df02b72->leave($__internal_533b59033f6f86b671a8b2599a0ea7dbeb07d686af81d370b9355fc53df02b72_prof);

        
        $__internal_95f54728fd3a058c588442cfea0c5b428cfef9a0b563ef962133689e52707f0d->leave($__internal_95f54728fd3a058c588442cfea0c5b428cfef9a0b563ef962133689e52707f0d_prof);

    }

    // line 52
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_064ae1df55019f63b9a8cfbe83d0d2f8cfd714653b858bf280fbe8b1ebea7923 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_064ae1df55019f63b9a8cfbe83d0d2f8cfd714653b858bf280fbe8b1ebea7923->enter($__internal_064ae1df55019f63b9a8cfbe83d0d2f8cfd714653b858bf280fbe8b1ebea7923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_0370f12e448e9f717cd801c4f8eecfdebef8d7ccf9cc31b1ce40cd324a9985aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0370f12e448e9f717cd801c4f8eecfdebef8d7ccf9cc31b1ce40cd324a9985aa->enter($__internal_0370f12e448e9f717cd801c4f8eecfdebef8d7ccf9cc31b1ce40cd324a9985aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 53
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_0370f12e448e9f717cd801c4f8eecfdebef8d7ccf9cc31b1ce40cd324a9985aa->leave($__internal_0370f12e448e9f717cd801c4f8eecfdebef8d7ccf9cc31b1ce40cd324a9985aa_prof);

        
        $__internal_064ae1df55019f63b9a8cfbe83d0d2f8cfd714653b858bf280fbe8b1ebea7923->leave($__internal_064ae1df55019f63b9a8cfbe83d0d2f8cfd714653b858bf280fbe8b1ebea7923_prof);

    }

    // line 56
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_c4be9b6d3ae3a5a11c7a19efa8975f54fca43cab01be019281dc78726be7b99e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4be9b6d3ae3a5a11c7a19efa8975f54fca43cab01be019281dc78726be7b99e->enter($__internal_c4be9b6d3ae3a5a11c7a19efa8975f54fca43cab01be019281dc78726be7b99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_3d888ec57f0e0b7d4be7871f5dee91faa453ff01b199240f4fb17d6fca8ed31a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d888ec57f0e0b7d4be7871f5dee91faa453ff01b199240f4fb17d6fca8ed31a->enter($__internal_3d888ec57f0e0b7d4be7871f5dee91faa453ff01b199240f4fb17d6fca8ed31a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 57
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_3d888ec57f0e0b7d4be7871f5dee91faa453ff01b199240f4fb17d6fca8ed31a->leave($__internal_3d888ec57f0e0b7d4be7871f5dee91faa453ff01b199240f4fb17d6fca8ed31a_prof);

        
        $__internal_c4be9b6d3ae3a5a11c7a19efa8975f54fca43cab01be019281dc78726be7b99e->leave($__internal_c4be9b6d3ae3a5a11c7a19efa8975f54fca43cab01be019281dc78726be7b99e_prof);

    }

    // line 60
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_56778e70f4e9b2a1d2f358034919f1e5e27c836114bd9bfe9d9a0bfeb2bf6e97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56778e70f4e9b2a1d2f358034919f1e5e27c836114bd9bfe9d9a0bfeb2bf6e97->enter($__internal_56778e70f4e9b2a1d2f358034919f1e5e27c836114bd9bfe9d9a0bfeb2bf6e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_796296a24286b66320e0c44e5cf52b516ae768d6c68c3aa0611add7c16381a88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_796296a24286b66320e0c44e5cf52b516ae768d6c68c3aa0611add7c16381a88->enter($__internal_796296a24286b66320e0c44e5cf52b516ae768d6c68c3aa0611add7c16381a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_796296a24286b66320e0c44e5cf52b516ae768d6c68c3aa0611add7c16381a88->leave($__internal_796296a24286b66320e0c44e5cf52b516ae768d6c68c3aa0611add7c16381a88_prof);

        
        $__internal_56778e70f4e9b2a1d2f358034919f1e5e27c836114bd9bfe9d9a0bfeb2bf6e97->leave($__internal_56778e70f4e9b2a1d2f358034919f1e5e27c836114bd9bfe9d9a0bfeb2bf6e97_prof);

    }

    // line 72
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_60bbdaa0bb693bd911e333b5dbd5f29d90d4dde1e3e31bf2eafddc9d933387ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60bbdaa0bb693bd911e333b5dbd5f29d90d4dde1e3e31bf2eafddc9d933387ab->enter($__internal_60bbdaa0bb693bd911e333b5dbd5f29d90d4dde1e3e31bf2eafddc9d933387ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_aaaf977378c6b3d072ddcd8ab6dc3a65c99acce6e81392a8e4fe896108913113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaaf977378c6b3d072ddcd8ab6dc3a65c99acce6e81392a8e4fe896108913113->enter($__internal_aaaf977378c6b3d072ddcd8ab6dc3a65c99acce6e81392a8e4fe896108913113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_aaaf977378c6b3d072ddcd8ab6dc3a65c99acce6e81392a8e4fe896108913113->leave($__internal_aaaf977378c6b3d072ddcd8ab6dc3a65c99acce6e81392a8e4fe896108913113_prof);

        
        $__internal_60bbdaa0bb693bd911e333b5dbd5f29d90d4dde1e3e31bf2eafddc9d933387ab->leave($__internal_60bbdaa0bb693bd911e333b5dbd5f29d90d4dde1e3e31bf2eafddc9d933387ab_prof);

    }

    // line 83
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_176efa88ee10f4c1f5d93a00ee40b61c06af89a26bfc881730b4b7b13de250b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_176efa88ee10f4c1f5d93a00ee40b61c06af89a26bfc881730b4b7b13de250b1->enter($__internal_176efa88ee10f4c1f5d93a00ee40b61c06af89a26bfc881730b4b7b13de250b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_931566ae9471fcc305d9ad0cb49e90715d11089b90ab9535e374dd464a9fbb6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_931566ae9471fcc305d9ad0cb49e90715d11089b90ab9535e374dd464a9fbb6c->enter($__internal_931566ae9471fcc305d9ad0cb49e90715d11089b90ab9535e374dd464a9fbb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_931566ae9471fcc305d9ad0cb49e90715d11089b90ab9535e374dd464a9fbb6c->leave($__internal_931566ae9471fcc305d9ad0cb49e90715d11089b90ab9535e374dd464a9fbb6c_prof);

        
        $__internal_176efa88ee10f4c1f5d93a00ee40b61c06af89a26bfc881730b4b7b13de250b1->leave($__internal_176efa88ee10f4c1f5d93a00ee40b61c06af89a26bfc881730b4b7b13de250b1_prof);

    }

    // line 94
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_5b1c5c8972c647873e28fab1ab3acc9d9cc5a86d2d8e1c029a39601c5d74cf1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b1c5c8972c647873e28fab1ab3acc9d9cc5a86d2d8e1c029a39601c5d74cf1b->enter($__internal_5b1c5c8972c647873e28fab1ab3acc9d9cc5a86d2d8e1c029a39601c5d74cf1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_310e220dae65ab485008264d2fa27e896e73b6f3735599ef53a6e9a3771aefb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_310e220dae65ab485008264d2fa27e896e73b6f3735599ef53a6e9a3771aefb8->enter($__internal_310e220dae65ab485008264d2fa27e896e73b6f3735599ef53a6e9a3771aefb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        echo "col-sm-10";
        
        $__internal_310e220dae65ab485008264d2fa27e896e73b6f3735599ef53a6e9a3771aefb8->leave($__internal_310e220dae65ab485008264d2fa27e896e73b6f3735599ef53a6e9a3771aefb8_prof);

        
        $__internal_5b1c5c8972c647873e28fab1ab3acc9d9cc5a86d2d8e1c029a39601c5d74cf1b->leave($__internal_5b1c5c8972c647873e28fab1ab3acc9d9cc5a86d2d8e1c029a39601c5d74cf1b_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig";
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
", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig", "/home/fabien/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/form/bootstrap_3_horizontal_layout.html.twig");
    }
}
