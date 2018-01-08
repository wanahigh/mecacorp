<?php

/* @Curiosity26AngularMaterialBundle/Resources/Form/material_1_layout.html.twig */
class __TwigTemplate_0b36074941787b7cbc905444169143be36fc093563470b4f07d7568706fdb19a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "@Curiosity26AngularMaterialBundle/Resources/Form/material_1_layout.html.twig", 1);
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
                'choice_row' => array($this, 'block_choice_row'),
                'choice_label' => array($this, 'block_choice_label'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'md_choice_widget_options' => array($this, 'block_md_choice_widget_options'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'form_start' => array($this, 'block_form_start'),
                'form_row' => array($this, 'block_form_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d55dc95d8bf8ec4711161cae241829accbdd39fdf1e7e459f5dcd5efe18b793 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d55dc95d8bf8ec4711161cae241829accbdd39fdf1e7e459f5dcd5efe18b793->enter($__internal_6d55dc95d8bf8ec4711161cae241829accbdd39fdf1e7e459f5dcd5efe18b793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Curiosity26AngularMaterialBundle/Resources/Form/material_1_layout.html.twig"));

        $__internal_18b89a2161ad749c1b895e8b4d9e6608621c59628ce7211e5f044de265ecf07c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18b89a2161ad749c1b895e8b4d9e6608621c59628ce7211e5f044de265ecf07c->enter($__internal_18b89a2161ad749c1b895e8b4d9e6608621c59628ce7211e5f044de265ecf07c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Curiosity26AngularMaterialBundle/Resources/Form/material_1_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        $this->displayBlock('choice_row', $context, $blocks);
        // line 29
        $this->displayBlock('choice_label', $context, $blocks);
        // line 55
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 73
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 84
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 97
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 138
        $this->displayBlock('md_choice_widget_options', $context, $blocks);
        // line 152
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 169
        $this->displayBlock('date_widget', $context, $blocks);
        // line 191
        $this->displayBlock('time_widget', $context, $blocks);
        // line 202
        $this->displayBlock('button_widget', $context, $blocks);
        // line 216
        $this->displayBlock('form_start', $context, $blocks);
        // line 229
        $this->displayBlock('form_row', $context, $blocks);
        // line 246
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_6d55dc95d8bf8ec4711161cae241829accbdd39fdf1e7e459f5dcd5efe18b793->leave($__internal_6d55dc95d8bf8ec4711161cae241829accbdd39fdf1e7e459f5dcd5efe18b793_prof);

        
        $__internal_18b89a2161ad749c1b895e8b4d9e6608621c59628ce7211e5f044de265ecf07c->leave($__internal_18b89a2161ad749c1b895e8b4d9e6608621c59628ce7211e5f044de265ecf07c_prof);

    }

    // line 3
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_8c24803dd147b07ea6f10b76ffd6d35a42e4c6d71e10304507e15620d5ab97fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c24803dd147b07ea6f10b76ffd6d35a42e4c6d71e10304507e15620d5ab97fd->enter($__internal_8c24803dd147b07ea6f10b76ffd6d35a42e4c6d71e10304507e15620d5ab97fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_034d35427ea14ac3d29110687ba32e06df4a51119c5b9fb041a36812586e28f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_034d35427ea14ac3d29110687ba32e06df4a51119c5b9fb041a36812586e28f5->enter($__internal_034d35427ea14ac3d29110687ba32e06df4a51119c5b9fb041a36812586e28f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 4
        $context["ng_model"] = twig_replace_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), "vars", array()), "full_name", array()), array("[" => ".", "]" => ""));
        // line 5
        $context["ng_value"] = ((preg_match("/^\\d+\$/", (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 5, $this->getSourceContext()); })()))) ? ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 5, $this->getSourceContext()); })())) : ((("'" . twig_replace_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 5, $this->getSourceContext()); })()), array("'" => "\\'"))) . "'")));
        // line 6
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 6, $this->getSourceContext()); })()), array("ng-model" => (isset($context["ng_model"]) || array_key_exists("ng_model", $context) ? $context["ng_model"] : (function () { throw new Twig_Error_Runtime('Variable "ng_model" does not exist.', 6, $this->getSourceContext()); })())));
        // line 7
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 7, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 8
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 8, $this->getSourceContext()); })()))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "\" ng-init=\"";
            echo twig_escape_filter($this->env, (isset($context["ng_model"]) || array_key_exists("ng_model", $context) ? $context["ng_model"] : (function () { throw new Twig_Error_Runtime('Variable "ng_model" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "=";
            echo twig_escape_filter($this->env, (isset($context["ng_value"]) || array_key_exists("ng_value", $context) ? $context["ng_value"] : (function () { throw new Twig_Error_Runtime('Variable "ng_value" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "\" ";
        }
        echo "/>
";
        
        $__internal_034d35427ea14ac3d29110687ba32e06df4a51119c5b9fb041a36812586e28f5->leave($__internal_034d35427ea14ac3d29110687ba32e06df4a51119c5b9fb041a36812586e28f5_prof);

        
        $__internal_8c24803dd147b07ea6f10b76ffd6d35a42e4c6d71e10304507e15620d5ab97fd->leave($__internal_8c24803dd147b07ea6f10b76ffd6d35a42e4c6d71e10304507e15620d5ab97fd_prof);

    }

    // line 11
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_74bd0d9b8622d7f6bbddaead54c430d6c4cd8e094ee07f4c2a7d5ce97acaba1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74bd0d9b8622d7f6bbddaead54c430d6c4cd8e094ee07f4c2a7d5ce97acaba1c->enter($__internal_74bd0d9b8622d7f6bbddaead54c430d6c4cd8e094ee07f4c2a7d5ce97acaba1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_661a889ec890145371a7e37f91066cb671ece366dab84cf067f3adccaab13c01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_661a889ec890145371a7e37f91066cb671ece366dab84cf067f3adccaab13c01->enter($__internal_661a889ec890145371a7e37f91066cb671ece366dab84cf067f3adccaab13c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 12
        $context["ng_model"] = twig_replace_filter((isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 12, $this->getSourceContext()); })()), array("[" => ".", "]" => ""));
        // line 13
        echo "    ";
        if ( !(isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 13, $this->getSourceContext()); })())) {
            // line 14
            echo "        <md-input-container class=\"md-block\">
    ";
        }
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), 'label');
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), 'widget');
        // line 18
        echo "<div ng-messages=\"";
        echo twig_escape_filter($this->env, (isset($context["ng_model"]) || array_key_exists("ng_model", $context) ? $context["ng_model"] : (function () { throw new Twig_Error_Runtime('Variable "ng_model" does not exist.', 18, $this->getSourceContext()); })()), "html", null, true);
        echo ".\$error\" role=\"alert\" multiple>
        ";
        // line 19
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 19, $this->getSourceContext()); })())) {
            // line 20
            echo "            <div ng-message=\"required\" class=\"";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["ng_model"]) || array_key_exists("ng_model", $context) ? $context["ng_model"] : (function () { throw new Twig_Error_Runtime('Variable "ng_model" does not exist.', 20, $this->getSourceContext()); })()), array("." => "-")), "html", null, true);
            echo "-required\">This field is required.</div>
        ";
        }
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'errors');
        // line 23
        echo "</div>
    ";
        // line 24
        if ( !(isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 24, $this->getSourceContext()); })())) {
            // line 25
            echo "        </md-input-container>
    ";
        }
        
        $__internal_661a889ec890145371a7e37f91066cb671ece366dab84cf067f3adccaab13c01->leave($__internal_661a889ec890145371a7e37f91066cb671ece366dab84cf067f3adccaab13c01_prof);

        
        $__internal_74bd0d9b8622d7f6bbddaead54c430d6c4cd8e094ee07f4c2a7d5ce97acaba1c->leave($__internal_74bd0d9b8622d7f6bbddaead54c430d6c4cd8e094ee07f4c2a7d5ce97acaba1c_prof);

    }

    // line 29
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_a72c0ec18aec343d3ecd2399f3230b94d875d310165ddfd39f620b96ebf55794 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a72c0ec18aec343d3ecd2399f3230b94d875d310165ddfd39f620b96ebf55794->enter($__internal_a72c0ec18aec343d3ecd2399f3230b94d875d310165ddfd39f620b96ebf55794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_755841b4705b308b5e70291a46198cb38d7d576116b52ccfcd1d43fad18c2a1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_755841b4705b308b5e70291a46198cb38d7d576116b52ccfcd1d43fad18c2a1a->enter($__internal_755841b4705b308b5e70291a46198cb38d7d576116b52ccfcd1d43fad18c2a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 30
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 30, $this->getSourceContext()); })()) === false)) {
            // line 31
            if (( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 31, $this->getSourceContext()); })()) &&  !(isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 31, $this->getSourceContext()); })()))) {
                // line 32
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 32, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 32, $this->getSourceContext()); })())));
            }
            // line 34
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 34, $this->getSourceContext()); })())) {
                // line 35
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 35, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 37
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 37, $this->getSourceContext()); })()))) {
                // line 38
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 38, $this->getSourceContext()); })()))) {
                    // line 39
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 39, $this->getSourceContext()); })()), array("%name%" =>                     // line 40
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 40, $this->getSourceContext()); })()), "%id%" =>                     // line 41
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 41, $this->getSourceContext()); })())));
                } else {
                    // line 44
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 44, $this->getSourceContext()); })()));
                }
            }
            // line 47
            if ((isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 47, $this->getSourceContext()); })())) {
                // line 48
                echo "            <h4";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()));
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
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 48, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 48, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 48, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 48, $this->getSourceContext()); })())))), "html", null, true);
                echo "</h4>
        ";
            } else {
                // line 50
                echo "            <label";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 50, $this->getSourceContext()); })()));
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
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 50, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 50, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 50, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 50, $this->getSourceContext()); })())))), "html", null, true);
                echo "</label>
        ";
            }
            // line 52
            echo "    ";
        }
        
        $__internal_755841b4705b308b5e70291a46198cb38d7d576116b52ccfcd1d43fad18c2a1a->leave($__internal_755841b4705b308b5e70291a46198cb38d7d576116b52ccfcd1d43fad18c2a1a_prof);

        
        $__internal_a72c0ec18aec343d3ecd2399f3230b94d875d310165ddfd39f620b96ebf55794->leave($__internal_a72c0ec18aec343d3ecd2399f3230b94d875d310165ddfd39f620b96ebf55794_prof);

    }

    // line 55
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_82ab1203bc0148ec2ab4fd927e3544074ea4355837df010a4ba9e89c321fd046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82ab1203bc0148ec2ab4fd927e3544074ea4355837df010a4ba9e89c321fd046->enter($__internal_82ab1203bc0148ec2ab4fd927e3544074ea4355837df010a4ba9e89c321fd046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_2dabd2a76788db127f8fb1635ba5a5a79ad02d500f16f0132dc9ca4fdbe7bde9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dabd2a76788db127f8fb1635ba5a5a79ad02d500f16f0132dc9ca4fdbe7bde9->enter($__internal_2dabd2a76788db127f8fb1635ba5a5a79ad02d500f16f0132dc9ca4fdbe7bde9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 56
        $context["ng_model"] = twig_replace_filter((isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 56, $this->getSourceContext()); })()), array("[" => ".", "]" => ""));
        // line 57
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 57, $this->getSourceContext()); })())) {
            // line 58
            echo "        <md-checkbox-group ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo " layout=\"column\">";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 59, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 60
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("ng_model" => (isset($context["ng_model"]) || array_key_exists("ng_model", $context) ? $context["ng_model"] : (function () { throw new Twig_Error_Runtime('Variable "ng_model" does not exist.', 60, $this->getSourceContext()); })())));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "</md-checkbox-group>
    ";
        } else {
            // line 64
            $context["ng_model"] = twig_replace_filter((isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 64, $this->getSourceContext()); })()), array("[" => ".", "]" => ""));
            // line 65
            echo "<md-radio-group ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo " layout=\"column\">";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 67
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 67, $this->getSourceContext()); })()), "ng_model" => (isset($context["ng_model"]) || array_key_exists("ng_model", $context) ? $context["ng_model"] : (function () { throw new Twig_Error_Runtime('Variable "ng_model" does not exist.', 67, $this->getSourceContext()); })())));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "</md-radio-group>
    ";
        }
        
        $__internal_2dabd2a76788db127f8fb1635ba5a5a79ad02d500f16f0132dc9ca4fdbe7bde9->leave($__internal_2dabd2a76788db127f8fb1635ba5a5a79ad02d500f16f0132dc9ca4fdbe7bde9_prof);

        
        $__internal_82ab1203bc0148ec2ab4fd927e3544074ea4355837df010a4ba9e89c321fd046->leave($__internal_82ab1203bc0148ec2ab4fd927e3544074ea4355837df010a4ba9e89c321fd046_prof);

    }

    // line 73
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_a3ddc3f632fa0e69b0aa314ac5857509c2e4a9ddc3dd024fffb96f5f6b4b8e8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3ddc3f632fa0e69b0aa314ac5857509c2e4a9ddc3dd024fffb96f5f6b4b8e8e->enter($__internal_a3ddc3f632fa0e69b0aa314ac5857509c2e4a9ddc3dd024fffb96f5f6b4b8e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_295f629b51114e9a7fec0ea008f21394aaa7d29b0a58f077472ea5143f7d9b8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_295f629b51114e9a7fec0ea008f21394aaa7d29b0a58f077472ea5143f7d9b8d->enter($__internal_295f629b51114e9a7fec0ea008f21394aaa7d29b0a58f077472ea5143f7d9b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 74
        $context["model_name"] = (((isset($context["ng_model"]) || array_key_exists("ng_model", $context) ? $context["ng_model"] : (function () { throw new Twig_Error_Runtime('Variable "ng_model" does not exist.', 74, $this->getSourceContext()); })())) ? ((isset($context["ng_model"]) || array_key_exists("ng_model", $context) ? $context["ng_model"] : (function () { throw new Twig_Error_Runtime('Variable "ng_model" does not exist.', 74, $this->getSourceContext()); })())) : (twig_replace_filter((isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 74, $this->getSourceContext()); })()), array("[" => ".", "]" => ""))));
        // line 75
        $context["ng_value"] = ((preg_match("/^\\d+\$/", (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 75, $this->getSourceContext()); })()))) ? ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 75, $this->getSourceContext()); })())) : ((("'" . twig_replace_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 75, $this->getSourceContext()); })()), array("'" => "\\'"))) . "'")));
        // line 76
        echo "<md-checkbox ";
        if (array_key_exists("ng_model", $context)) {
            echo "ng-checked=\"isChecked(";
            echo twig_escape_filter($this->env, (isset($context["ng_model"]) || array_key_exists("ng_model", $context) ? $context["ng_model"] : (function () { throw new Twig_Error_Runtime('Variable "ng_model" does not exist.', 76, $this->getSourceContext()); })()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, (isset($context["ng_value"]) || array_key_exists("ng_value", $context) ? $context["ng_value"] : (function () { throw new Twig_Error_Runtime('Variable "ng_value" does not exist.', 76, $this->getSourceContext()); })()), "html", null, true);
            echo ")\" ng-click=\"";
            echo twig_escape_filter($this->env, (isset($context["ng_model"]) || array_key_exists("ng_model", $context) ? $context["ng_model"] : (function () { throw new Twig_Error_Runtime('Variable "ng_model" does not exist.', 76, $this->getSourceContext()); })()), "html", null, true);
            echo " = toggleCheckbox(";
            echo twig_escape_filter($this->env, (isset($context["ng_model"]) || array_key_exists("ng_model", $context) ? $context["ng_model"] : (function () { throw new Twig_Error_Runtime('Variable "ng_model" does not exist.', 76, $this->getSourceContext()); })()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, (isset($context["ng_value"]) || array_key_exists("ng_value", $context) ? $context["ng_value"] : (function () { throw new Twig_Error_Runtime('Variable "ng_value" does not exist.', 76, $this->getSourceContext()); })()), "html", null, true);
            echo ")\"";
        } else {
            echo "ng-model=\"";
            echo twig_escape_filter($this->env, (isset($context["model_name"]) || array_key_exists("model_name", $context) ? $context["model_name"] : (function () { throw new Twig_Error_Runtime('Variable "model_name" does not exist.', 76, $this->getSourceContext()); })()), "html", null, true);
            echo "\" ng-click=\"";
            echo twig_escape_filter($this->env, (isset($context["ng_model"]) || array_key_exists("ng_model", $context) ? $context["ng_model"] : (function () { throw new Twig_Error_Runtime('Variable "ng_model" does not exist.', 76, $this->getSourceContext()); })()), "html", null, true);
            echo " = ";
            echo twig_escape_filter($this->env, (isset($context["ng_value"]) || array_key_exists("ng_value", $context) ? $context["ng_value"] : (function () { throw new Twig_Error_Runtime('Variable "ng_value" does not exist.', 76, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        echo " ";
        if (array_key_exists("value", $context)) {
            echo " ng-yes-value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 76, $this->getSourceContext()); })()), "html", null, true);
            echo "\" ";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 76, $this->getSourceContext()); })())) {
            echo " ng-init=\"";
            echo twig_escape_filter($this->env, (isset($context["model_name"]) || array_key_exists("model_name", $context) ? $context["model_name"] : (function () { throw new Twig_Error_Runtime('Variable "model_name" does not exist.', 76, $this->getSourceContext()); })()), "html", null, true);
            echo " = toggleCheckbox(";
            echo twig_escape_filter($this->env, (isset($context["model_name"]) || array_key_exists("model_name", $context) ? $context["model_name"] : (function () { throw new Twig_Error_Runtime('Variable "model_name" does not exist.', 76, $this->getSourceContext()); })()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, (isset($context["ng_value"]) || array_key_exists("ng_value", $context) ? $context["ng_value"] : (function () { throw new Twig_Error_Runtime('Variable "ng_value" does not exist.', 76, $this->getSourceContext()); })()), "html", null, true);
            echo ")\"";
        }
        echo ">
        <span hide>
            <input type=\"checkbox\" ";
        // line 78
        if (array_key_exists("ng_model", $context)) {
            echo "ng-checked=\"isChecked(";
            echo twig_escape_filter($this->env, (isset($context["ng_model"]) || array_key_exists("ng_model", $context) ? $context["ng_model"] : (function () { throw new Twig_Error_Runtime('Variable "ng_model" does not exist.', 78, $this->getSourceContext()); })()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, (isset($context["ng_value"]) || array_key_exists("ng_value", $context) ? $context["ng_value"] : (function () { throw new Twig_Error_Runtime('Variable "ng_value" does not exist.', 78, $this->getSourceContext()); })()), "html", null, true);
            echo ")\" ng-click=\"";
            echo twig_escape_filter($this->env, (isset($context["ng_model"]) || array_key_exists("ng_model", $context) ? $context["ng_model"] : (function () { throw new Twig_Error_Runtime('Variable "ng_model" does not exist.', 78, $this->getSourceContext()); })()), "html", null, true);
            echo " = toggleCheckbox(";
            echo twig_escape_filter($this->env, (isset($context["ng_model"]) || array_key_exists("ng_model", $context) ? $context["ng_model"] : (function () { throw new Twig_Error_Runtime('Variable "ng_model" does not exist.', 78, $this->getSourceContext()); })()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, (isset($context["ng_value"]) || array_key_exists("ng_value", $context) ? $context["ng_value"] : (function () { throw new Twig_Error_Runtime('Variable "ng_value" does not exist.', 78, $this->getSourceContext()); })()), "html", null, true);
            echo ")\"";
        } else {
            echo "ng-model=\"";
            echo twig_escape_filter($this->env, (isset($context["model_name"]) || array_key_exists("model_name", $context) ? $context["model_name"] : (function () { throw new Twig_Error_Runtime('Variable "model_name" does not exist.', 78, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        echo " ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 78, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 78, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo ">
        </span>
        ";
        // line 80
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 80, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 80, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 80, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 80, $this->getSourceContext()); })())))), "html", null, true);
        echo "
    </md-checkbox>";
        
        $__internal_295f629b51114e9a7fec0ea008f21394aaa7d29b0a58f077472ea5143f7d9b8d->leave($__internal_295f629b51114e9a7fec0ea008f21394aaa7d29b0a58f077472ea5143f7d9b8d_prof);

        
        $__internal_a3ddc3f632fa0e69b0aa314ac5857509c2e4a9ddc3dd024fffb96f5f6b4b8e8e->leave($__internal_a3ddc3f632fa0e69b0aa314ac5857509c2e4a9ddc3dd024fffb96f5f6b4b8e8e_prof);

    }

    // line 84
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_266a941f06b294a1b9eba350706587da4391e8e3ca6f207d33cf6a0bcfc2d0e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_266a941f06b294a1b9eba350706587da4391e8e3ca6f207d33cf6a0bcfc2d0e7->enter($__internal_266a941f06b294a1b9eba350706587da4391e8e3ca6f207d33cf6a0bcfc2d0e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_30a771743ace5e489327d11bb370d79cd32ed7da53e920e1402cddb71ea34124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30a771743ace5e489327d11bb370d79cd32ed7da53e920e1402cddb71ea34124->enter($__internal_30a771743ace5e489327d11bb370d79cd32ed7da53e920e1402cddb71ea34124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 85
        $context["ng_value"] = ((preg_match("/^\\d+\$/", (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 85, $this->getSourceContext()); })()))) ? ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 85, $this->getSourceContext()); })())) : ((("'" . twig_replace_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 85, $this->getSourceContext()); })()), array("'" => "\\'"))) . "'")));
        // line 86
        if ( !array_key_exists("ng_model", $context)) {
            // line 87
            $context["ng_model"] = twig_replace_filter((isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 87, $this->getSourceContext()); })()), array("[" => ".", "]" => ""));
        }
        // line 89
        echo "<md-radio-button type=\"radio\" ng-checked=\"isRadioSelected(";
        echo twig_escape_filter($this->env, (isset($context["ng_model"]) || array_key_exists("ng_model", $context) ? $context["ng_model"] : (function () { throw new Twig_Error_Runtime('Variable "ng_model" does not exist.', 89, $this->getSourceContext()); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["ng_value"]) || array_key_exists("ng_value", $context) ? $context["ng_value"] : (function () { throw new Twig_Error_Runtime('Variable "ng_value" does not exist.', 89, $this->getSourceContext()); })()), "html", null, true);
        echo ")\" ng-click=\"";
        echo twig_escape_filter($this->env, (isset($context["ng_model"]) || array_key_exists("ng_model", $context) ? $context["ng_model"] : (function () { throw new Twig_Error_Runtime('Variable "ng_model" does not exist.', 89, $this->getSourceContext()); })()), "html", null, true);
        echo " = setRadio(";
        echo twig_escape_filter($this->env, (isset($context["ng_model"]) || array_key_exists("ng_model", $context) ? $context["ng_model"] : (function () { throw new Twig_Error_Runtime('Variable "ng_model" does not exist.', 89, $this->getSourceContext()); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["ng_value"]) || array_key_exists("ng_value", $context) ? $context["ng_value"] : (function () { throw new Twig_Error_Runtime('Variable "ng_value" does not exist.', 89, $this->getSourceContext()); })()), "html", null, true);
        echo ")\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 89, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 89, $this->getSourceContext()); })())) {
            echo " ng-init=\"";
            echo twig_escape_filter($this->env, (isset($context["ng_model"]) || array_key_exists("ng_model", $context) ? $context["ng_model"] : (function () { throw new Twig_Error_Runtime('Variable "ng_model" does not exist.', 89, $this->getSourceContext()); })()), "html", null, true);
            echo " = setRadio(";
            echo twig_escape_filter($this->env, (isset($context["ng_model"]) || array_key_exists("ng_model", $context) ? $context["ng_model"] : (function () { throw new Twig_Error_Runtime('Variable "ng_model" does not exist.', 89, $this->getSourceContext()); })()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, (isset($context["ng_value"]) || array_key_exists("ng_value", $context) ? $context["ng_value"] : (function () { throw new Twig_Error_Runtime('Variable "ng_value" does not exist.', 89, $this->getSourceContext()); })()), "html", null, true);
            echo ")\"";
        }
        echo ">
        <span hide>
            <input type=\"radio\" ";
        // line 91
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 91, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        echo " ng-checked=\"isRadioSelected(";
        echo twig_escape_filter($this->env, (isset($context["ng_model"]) || array_key_exists("ng_model", $context) ? $context["ng_model"] : (function () { throw new Twig_Error_Runtime('Variable "ng_model" does not exist.', 91, $this->getSourceContext()); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["ng_value"]) || array_key_exists("ng_value", $context) ? $context["ng_value"] : (function () { throw new Twig_Error_Runtime('Variable "ng_value" does not exist.', 91, $this->getSourceContext()); })()), "html", null, true);
        echo ")\">
        </span>
        ";
        // line 93
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 93, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 93, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 93, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 93, $this->getSourceContext()); })())))), "html", null, true);
        echo "
    </md-radio-button>";
        
        $__internal_30a771743ace5e489327d11bb370d79cd32ed7da53e920e1402cddb71ea34124->leave($__internal_30a771743ace5e489327d11bb370d79cd32ed7da53e920e1402cddb71ea34124_prof);

        
        $__internal_266a941f06b294a1b9eba350706587da4391e8e3ca6f207d33cf6a0bcfc2d0e7->leave($__internal_266a941f06b294a1b9eba350706587da4391e8e3ca6f207d33cf6a0bcfc2d0e7_prof);

    }

    // line 97
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_5eeacf63e3956c60a94dda53aec325ff8a0064055f3eb71b85aba231370192b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eeacf63e3956c60a94dda53aec325ff8a0064055f3eb71b85aba231370192b6->enter($__internal_5eeacf63e3956c60a94dda53aec325ff8a0064055f3eb71b85aba231370192b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_d86a41e9b631dbdc8fdf9710092a1c80cfd48cbbca9017830fe0da2117ad5577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d86a41e9b631dbdc8fdf9710092a1c80cfd48cbbca9017830fe0da2117ad5577->enter($__internal_d86a41e9b631dbdc8fdf9710092a1c80cfd48cbbca9017830fe0da2117ad5577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 98
        if (((((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 98, $this->getSourceContext()); })()) && (null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 98, $this->getSourceContext()); })()))) &&  !(isset($context["placeholder_in_choices"]) || array_key_exists("placeholder_in_choices", $context) ? $context["placeholder_in_choices"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder_in_choices" does not exist.', 98, $this->getSourceContext()); })())) &&  !(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 98, $this->getSourceContext()); })()))) {
            // line 99
            $context["required"] = false;
        }
        // line 101
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 101, $this->getSourceContext()); })())) {
            // line 102
            $context["ng_model"] = twig_replace_filter((isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 102, $this->getSourceContext()); })()), array("[]" => "", "[" => ".", "]" => ""));
            // line 103
            $context["ng_init"] = (((isset($context["ng_model"]) || array_key_exists("ng_model", $context) ? $context["ng_model"] : (function () { throw new Twig_Error_Runtime('Variable "ng_model" does not exist.', 103, $this->getSourceContext()); })()) . "=") . json_encode((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 103, $this->getSourceContext()); })())));
        } else {
            // line 105
            $context["ng_model"] = twig_replace_filter((isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 105, $this->getSourceContext()); })()), array("[]" => "", "[" => ".", "]" => ""));
            // line 106
            $context["ng_value"] = ((preg_match("/^\\d+\$/", (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 106, $this->getSourceContext()); })()))) ? ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 106, $this->getSourceContext()); })())) : ((("'" . twig_replace_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 106, $this->getSourceContext()); })()), array("'" => "\\'"))) . "'")));
            // line 107
            $context["ng_init"] = (((isset($context["ng_model"]) || array_key_exists("ng_model", $context) ? $context["ng_model"] : (function () { throw new Twig_Error_Runtime('Variable "ng_model" does not exist.', 107, $this->getSourceContext()); })()) . "=") . (isset($context["ng_value"]) || array_key_exists("ng_value", $context) ? $context["ng_value"] : (function () { throw new Twig_Error_Runtime('Variable "ng_value" does not exist.', 107, $this->getSourceContext()); })()));
        }
        // line 110
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " hide ng-model=\"";
        echo twig_escape_filter($this->env, (isset($context["ng_model"]) || array_key_exists("ng_model", $context) ? $context["ng_model"] : (function () { throw new Twig_Error_Runtime('Variable "ng_model" does not exist.', 110, $this->getSourceContext()); })()), "html", null, true);
        echo "\"";
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 110, $this->getSourceContext()); })())) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 111
        if ( !(null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 111, $this->getSourceContext()); })()))) {
            // line 112
            echo "<option value=\"\"";
            if (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 112, $this->getSourceContext()); })()) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 112, $this->getSourceContext()); })())))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 112, $this->getSourceContext()); })()) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 112, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 112, $this->getSourceContext()); })()))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 114
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 114, $this->getSourceContext()); })())) > 0)) {
            // line 115
            $context["options"] = (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 115, $this->getSourceContext()); })());
            // line 116
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 117
            if (((twig_length_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 117, $this->getSourceContext()); })())) > 0) &&  !(null === (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 117, $this->getSourceContext()); })())))) {
                // line 118
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 118, $this->getSourceContext()); })()), "html", null, true);
                echo "</option>";
            }
        }
        // line 121
        $context["options"] = (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 121, $this->getSourceContext()); })());
        // line 122
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 123
        echo "</select>

    <md-select ng-cloak ng-model=\"";
        // line 125
        echo twig_escape_filter($this->env, (isset($context["ng_model"]) || array_key_exists("ng_model", $context) ? $context["ng_model"] : (function () { throw new Twig_Error_Runtime('Variable "ng_model" does not exist.', 125, $this->getSourceContext()); })()), "html", null, true);
        echo "\" ng-init=\"";
        echo twig_escape_filter($this->env, (isset($context["ng_init"]) || array_key_exists("ng_init", $context) ? $context["ng_init"] : (function () { throw new Twig_Error_Runtime('Variable "ng_init" does not exist.', 125, $this->getSourceContext()); })()), "html", null, true);
        echo "\"";
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 125, $this->getSourceContext()); })())) {
            echo " multiple";
        }
        if ( !(null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 125, $this->getSourceContext()); })()))) {
            echo "placeholder=\"";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 125, $this->getSourceContext()); })()) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 125, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 125, $this->getSourceContext()); })()))) : ("")), "html", null, true);
            echo "\"";
        }
        echo ">";
        // line 126
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 126, $this->getSourceContext()); })())) > 0)) {
            // line 127
            $context["options"] = (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 127, $this->getSourceContext()); })());
            // line 128
            $this->displayBlock("md_choice_widget_options", $context, $blocks);
            // line 129
            if (((twig_length_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 129, $this->getSourceContext()); })())) > 0) &&  !(null === (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 129, $this->getSourceContext()); })())))) {
                // line 130
                echo "<md-option disabled>";
                echo twig_escape_filter($this->env, (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 130, $this->getSourceContext()); })()), "html", null, true);
                echo "</md-option>";
            }
        }
        // line 133
        $context["options"] = (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 133, $this->getSourceContext()); })());
        // line 134
        $this->displayBlock("md_choice_widget_options", $context, $blocks);
        // line 135
        echo "</md-select>";
        
        $__internal_d86a41e9b631dbdc8fdf9710092a1c80cfd48cbbca9017830fe0da2117ad5577->leave($__internal_d86a41e9b631dbdc8fdf9710092a1c80cfd48cbbca9017830fe0da2117ad5577_prof);

        
        $__internal_5eeacf63e3956c60a94dda53aec325ff8a0064055f3eb71b85aba231370192b6->leave($__internal_5eeacf63e3956c60a94dda53aec325ff8a0064055f3eb71b85aba231370192b6_prof);

    }

    // line 138
    public function block_md_choice_widget_options($context, array $blocks = array())
    {
        $__internal_8256c7c4fde2bc830f2dc5be1364f9f9742e868ea61152f9fba759087989cb78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8256c7c4fde2bc830f2dc5be1364f9f9742e868ea61152f9fba759087989cb78->enter($__internal_8256c7c4fde2bc830f2dc5be1364f9f9742e868ea61152f9fba759087989cb78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "md_choice_widget_options"));

        $__internal_7156e246e8544f268d71d33ed50cd059ee91a0435cbb66c8e175ce17d3f0305c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7156e246e8544f268d71d33ed50cd059ee91a0435cbb66c8e175ce17d3f0305c->enter($__internal_7156e246e8544f268d71d33ed50cd059ee91a0435cbb66c8e175ce17d3f0305c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "md_choice_widget_options"));

        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 139, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 140
            if (twig_test_iterable($context["choice"])) {
                // line 141
                echo "<md-optgroup label=\"";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 141, $this->getSourceContext()); })()) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 141, $this->getSourceContext()); })())))), "html", null, true);
                echo "\">
                ";
                // line 142
                $context["options"] = $context["choice"];
                // line 143
                $this->displayBlock("md_choice_widget_options", $context, $blocks);
                // line 144
                echo "</md-optgroup>";
            } else {
                // line 146
                $context["attr"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array());
                // line 147
                echo "            <md-option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "value", array()), "html", null, true);
                echo "\" ";
                $this->displayBlock("attributes", $context, $blocks);
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 147, $this->getSourceContext()); })()))) {
                    echo " ng-selected=\"true\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 147, $this->getSourceContext()); })()) === false)) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 147, $this->getSourceContext()); })())))), "html", null, true);
                echo "</md-option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_7156e246e8544f268d71d33ed50cd059ee91a0435cbb66c8e175ce17d3f0305c->leave($__internal_7156e246e8544f268d71d33ed50cd059ee91a0435cbb66c8e175ce17d3f0305c_prof);

        
        $__internal_8256c7c4fde2bc830f2dc5be1364f9f9742e868ea61152f9fba759087989cb78->leave($__internal_8256c7c4fde2bc830f2dc5be1364f9f9742e868ea61152f9fba759087989cb78_prof);

    }

    // line 152
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_428b7a9c4534f75c4c2c0d3e455e48f79c49af19eca59c73309c57f0ac0ec030 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_428b7a9c4534f75c4c2c0d3e455e48f79c49af19eca59c73309c57f0ac0ec030->enter($__internal_428b7a9c4534f75c4c2c0d3e455e48f79c49af19eca59c73309c57f0ac0ec030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_296b1db30ea335f9b9c5c428a3ec0ba0170cee799939670a0444525c2b9eedbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_296b1db30ea335f9b9c5c428a3ec0ba0170cee799939670a0444525c2b9eedbc->enter($__internal_296b1db30ea335f9b9c5c428a3ec0ba0170cee799939670a0444525c2b9eedbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 153
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 153, $this->getSourceContext()); })()) == "single_text")) {
            // line 154
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 156
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div flex>";
            // line 158
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 158, $this->getSourceContext()); })()), "date", array()), 'widget');
            // line 159
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 159, $this->getSourceContext()); })()), "date", array()), 'errors');
            // line 160
            echo "</div>
            <div flex>";
            // line 162
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 162, $this->getSourceContext()); })()), "time", array()), 'widget');
            // line 163
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 163, $this->getSourceContext()); })()), "time", array()), 'errors');
            // line 164
            echo "</div>
        </div>";
        }
        
        $__internal_296b1db30ea335f9b9c5c428a3ec0ba0170cee799939670a0444525c2b9eedbc->leave($__internal_296b1db30ea335f9b9c5c428a3ec0ba0170cee799939670a0444525c2b9eedbc_prof);

        
        $__internal_428b7a9c4534f75c4c2c0d3e455e48f79c49af19eca59c73309c57f0ac0ec030->leave($__internal_428b7a9c4534f75c4c2c0d3e455e48f79c49af19eca59c73309c57f0ac0ec030_prof);

    }

    // line 169
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_7593daf83fbeb47aaeab71f2bcd19a0ed7e1b1e75ca791ee18b35d4f19a6ea50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7593daf83fbeb47aaeab71f2bcd19a0ed7e1b1e75ca791ee18b35d4f19a6ea50->enter($__internal_7593daf83fbeb47aaeab71f2bcd19a0ed7e1b1e75ca791ee18b35d4f19a6ea50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_8b5a8fb9fc12c0dc9ff4f0f0ba48a9e0132c8188e1e94fc66231d6fcf9806555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b5a8fb9fc12c0dc9ff4f0f0ba48a9e0132c8188e1e94fc66231d6fcf9806555->enter($__internal_8b5a8fb9fc12c0dc9ff4f0f0ba48a9e0132c8188e1e94fc66231d6fcf9806555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 170
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 170, $this->getSourceContext()); })()) == "single_text")) {
            // line 171
            $context["ng_model"] = twig_replace_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 171, $this->getSourceContext()); })()), "vars", array()), "full_name", array()), array("[" => ".", "]" => ""));
            // line 172
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 172, $this->getSourceContext()); })()), array("ng-model" => (isset($context["ng_model"]) || array_key_exists("ng_model", $context) ? $context["ng_model"] : (function () { throw new Twig_Error_Runtime('Variable "ng_model" does not exist.', 172, $this->getSourceContext()); })())));
            // line 173
            echo "        <md-datepicker ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " ";
            if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 173, $this->getSourceContext()); })()))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 173, $this->getSourceContext()); })()), "html", null, true);
                echo "\" ng-init=\"";
                echo twig_escape_filter($this->env, (isset($context["ng_model"]) || array_key_exists("ng_model", $context) ? $context["ng_model"] : (function () { throw new Twig_Error_Runtime('Variable "ng_model" does not exist.', 173, $this->getSourceContext()); })()), "html", null, true);
                echo "='";
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 173, $this->getSourceContext()); })()), "html", null, true);
                echo "'\" ";
            }
            echo "></md-datepicker>
        <div ng-messages=\"";
            // line 174
            echo twig_escape_filter($this->env, (isset($context["model_name"]) || array_key_exists("model_name", $context) ? $context["model_name"] : (function () { throw new Twig_Error_Runtime('Variable "model_name" does not exist.', 174, $this->getSourceContext()); })()), "html", null, true);
            echo ".\$error\" role=\"alert\" multiple>
            <div ng-message=\"required\" class=\"";
            // line 175
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["model_name"]) || array_key_exists("model_name", $context) ? $context["model_name"] : (function () { throw new Twig_Error_Runtime('Variable "model_name" does not exist.', 175, $this->getSourceContext()); })()), array("." => "-")), "html", null, true);
            echo "-error\">This field is required.</div>
            <div ng-message=\"valid\">The entered value is not a date!</div>
            <div ng-message=\"mindate\">Date is too early!</div>
            <div ng-message=\"maxdate\">Date is too late!</div>
        </div>";
        } else {
            // line 181
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 182
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "date_pattern" does not exist.', 182, $this->getSourceContext()); })()), array("{{ year }}" =>             // line 183
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 183, $this->getSourceContext()); })()), "year", array()), 'widget', array("attr" => twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 183, $this->getSourceContext()); })()), "year", array()), "vars", array()), "attr", array()), array("class" => "flex")))), "{{ month }}" =>             // line 184
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 184, $this->getSourceContext()); })()), "month", array()), 'widget', array("attr" => twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 184, $this->getSourceContext()); })()), "month", array()), "vars", array()), "attr", array()), array("class" => "flex")))), "{{ day }}" =>             // line 185
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 185, $this->getSourceContext()); })()), "day", array()), 'widget', array("attr" => twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 185, $this->getSourceContext()); })()), "day", array()), "vars", array()), "attr", array()), array("class" => "flex"))))));
            // line 187
            echo "</div>";
        }
        
        $__internal_8b5a8fb9fc12c0dc9ff4f0f0ba48a9e0132c8188e1e94fc66231d6fcf9806555->leave($__internal_8b5a8fb9fc12c0dc9ff4f0f0ba48a9e0132c8188e1e94fc66231d6fcf9806555_prof);

        
        $__internal_7593daf83fbeb47aaeab71f2bcd19a0ed7e1b1e75ca791ee18b35d4f19a6ea50->leave($__internal_7593daf83fbeb47aaeab71f2bcd19a0ed7e1b1e75ca791ee18b35d4f19a6ea50_prof);

    }

    // line 191
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_56d04295c1e6bbdc85cac24bfa8bce8af98cfbc1bf46170b5d55434345f70836 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56d04295c1e6bbdc85cac24bfa8bce8af98cfbc1bf46170b5d55434345f70836->enter($__internal_56d04295c1e6bbdc85cac24bfa8bce8af98cfbc1bf46170b5d55434345f70836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_be538d69cd8829452f40f882062937b312bba24f67a65f9f50b059803dbea0a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be538d69cd8829452f40f882062937b312bba24f67a65f9f50b059803dbea0a1->enter($__internal_be538d69cd8829452f40f882062937b312bba24f67a65f9f50b059803dbea0a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 192
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 192, $this->getSourceContext()); })()) == "single_text")) {
            // line 193
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 195
            $context["vars"] = ((((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 195, $this->getSourceContext()); })()) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 196
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 197
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 197, $this->getSourceContext()); })()), "hour", array()), 'widget', twig_array_merge((isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 197, $this->getSourceContext()); })()), array("attr" => array("class" => "flex"))));
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 197, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 197, $this->getSourceContext()); })()), "minute", array()), 'widget', twig_array_merge((isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 197, $this->getSourceContext()); })()), array("attr" => array("class" => "flex"))));
            }
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 197, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 197, $this->getSourceContext()); })()), "second", array()), 'widget', twig_array_merge((isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 197, $this->getSourceContext()); })()), array("attr" => array("class" => "flex"))));
            }
            // line 198
            echo "        </div>";
        }
        
        $__internal_be538d69cd8829452f40f882062937b312bba24f67a65f9f50b059803dbea0a1->leave($__internal_be538d69cd8829452f40f882062937b312bba24f67a65f9f50b059803dbea0a1_prof);

        
        $__internal_56d04295c1e6bbdc85cac24bfa8bce8af98cfbc1bf46170b5d55434345f70836->leave($__internal_56d04295c1e6bbdc85cac24bfa8bce8af98cfbc1bf46170b5d55434345f70836_prof);

    }

    // line 202
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_d9e8f1687e6666843deed884c77a60fa64a422c6b84a1a3f3473893963404dde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9e8f1687e6666843deed884c77a60fa64a422c6b84a1a3f3473893963404dde->enter($__internal_d9e8f1687e6666843deed884c77a60fa64a422c6b84a1a3f3473893963404dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_e19ca0d2cc6ed531aebf3265727d691d5ae8c86793616a0e93d59ebb1dca67e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e19ca0d2cc6ed531aebf3265727d691d5ae8c86793616a0e93d59ebb1dca67e8->enter($__internal_e19ca0d2cc6ed531aebf3265727d691d5ae8c86793616a0e93d59ebb1dca67e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 203
        if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 203, $this->getSourceContext()); })()))) {
            // line 204
            if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 204, $this->getSourceContext()); })()))) {
                // line 205
                $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 205, $this->getSourceContext()); })()), array("%name%" =>                 // line 206
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 206, $this->getSourceContext()); })()), "%id%" =>                 // line 207
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 207, $this->getSourceContext()); })())));
            } else {
                // line 210
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 210, $this->getSourceContext()); })()));
            }
        }
        // line 213
        echo "<md-button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 213, $this->getSourceContext()); })()), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 213, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 213, $this->getSourceContext()); })())), "html", null, true);
        echo "</md-button>";
        
        $__internal_e19ca0d2cc6ed531aebf3265727d691d5ae8c86793616a0e93d59ebb1dca67e8->leave($__internal_e19ca0d2cc6ed531aebf3265727d691d5ae8c86793616a0e93d59ebb1dca67e8_prof);

        
        $__internal_d9e8f1687e6666843deed884c77a60fa64a422c6b84a1a3f3473893963404dde->leave($__internal_d9e8f1687e6666843deed884c77a60fa64a422c6b84a1a3f3473893963404dde_prof);

    }

    // line 216
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_9557b0b2933084c8cd278a45a29409397592e5387ec5044304406608eacb7059 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9557b0b2933084c8cd278a45a29409397592e5387ec5044304406608eacb7059->enter($__internal_9557b0b2933084c8cd278a45a29409397592e5387ec5044304406608eacb7059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_2746e1cc96a6892448b1e3d47ce1fe4a2454dea59dd15e8296c394755a755e3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2746e1cc96a6892448b1e3d47ce1fe4a2454dea59dd15e8296c394755a755e3c->enter($__internal_2746e1cc96a6892448b1e3d47ce1fe4a2454dea59dd15e8296c394755a755e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 217
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 217, $this->getSourceContext()); })()));
        // line 218
        if (twig_in_filter((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 218, $this->getSourceContext()); })()), array(0 => "GET", 1 => "POST"))) {
            // line 219
            $context["form_method"] = (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 219, $this->getSourceContext()); })());
        } else {
            // line 221
            $context["form_method"] = "POST";
        }
        // line 223
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 223, $this->getSourceContext()); })()), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 223, $this->getSourceContext()); })())), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 223, $this->getSourceContext()); })()), "html", null, true);
        echo "\" ng-controller=\"sfFormController as frmCtrl\" flex";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 223, $this->getSourceContext()); })()));
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
        if ((isset($context["multipart"]) || array_key_exists("multipart", $context) ? $context["multipart"] : (function () { throw new Twig_Error_Runtime('Variable "multipart" does not exist.', 223, $this->getSourceContext()); })())) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 224
        if (((isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 224, $this->getSourceContext()); })()) != (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 224, $this->getSourceContext()); })()))) {
            // line 225
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 225, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />";
        }
        
        $__internal_2746e1cc96a6892448b1e3d47ce1fe4a2454dea59dd15e8296c394755a755e3c->leave($__internal_2746e1cc96a6892448b1e3d47ce1fe4a2454dea59dd15e8296c394755a755e3c_prof);

        
        $__internal_9557b0b2933084c8cd278a45a29409397592e5387ec5044304406608eacb7059->leave($__internal_9557b0b2933084c8cd278a45a29409397592e5387ec5044304406608eacb7059_prof);

    }

    // line 229
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_b7fe144e3c3d7627b9e5e60aeea79fb9236afc9a0c347a0721ef259cea7e4bb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7fe144e3c3d7627b9e5e60aeea79fb9236afc9a0c347a0721ef259cea7e4bb2->enter($__internal_b7fe144e3c3d7627b9e5e60aeea79fb9236afc9a0c347a0721ef259cea7e4bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_b72a3c0bd34d5e6dac2f2f07ea7e96a8beb59ed3a307e589c1aab88dafdefee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b72a3c0bd34d5e6dac2f2f07ea7e96a8beb59ed3a307e589c1aab88dafdefee5->enter($__internal_b72a3c0bd34d5e6dac2f2f07ea7e96a8beb59ed3a307e589c1aab88dafdefee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 230
        echo "    <md-input-container class=\"md-block\">
        ";
        // line 231
        $context["ng_model"] = twig_replace_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 231, $this->getSourceContext()); })()), "vars", array()), "full_name", array()), array("[" => ".", "]" => ""));
        // line 232
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 232, $this->getSourceContext()); })()), 'label');
        // line 233
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 233, $this->getSourceContext()); })()), 'widget');
        // line 234
        echo "<div ng-messages=\"";
        echo twig_escape_filter($this->env, (isset($context["ng_model"]) || array_key_exists("ng_model", $context) ? $context["ng_model"] : (function () { throw new Twig_Error_Runtime('Variable "ng_model" does not exist.', 234, $this->getSourceContext()); })()), "html", null, true);
        echo ".\$error\" role=\"alert\" multiple>
            ";
        // line 235
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 235, $this->getSourceContext()); })())) {
            // line 236
            echo "                <div ng-message=\"required\" class=\"";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["ng_model"]) || array_key_exists("ng_model", $context) ? $context["ng_model"] : (function () { throw new Twig_Error_Runtime('Variable "ng_model" does not exist.', 236, $this->getSourceContext()); })()), array("." => "-")), "html", null, true);
            echo "-required\">This field is required.</div>
            ";
        }
        // line 238
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 238, $this->getSourceContext()); })()), 'errors');
        // line 239
        echo "</div>";
        // line 240
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array(), "any", false, true), "description", array(), "any", true, true)) {
            // line 241
            echo "            <p class=\"md-caption\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 241, $this->getSourceContext()); })()), "vars", array()), "description", array()), "html", null, true);
            echo "</p>
        ";
        }
        // line 243
        echo "</md-input-container>
";
        
        $__internal_b72a3c0bd34d5e6dac2f2f07ea7e96a8beb59ed3a307e589c1aab88dafdefee5->leave($__internal_b72a3c0bd34d5e6dac2f2f07ea7e96a8beb59ed3a307e589c1aab88dafdefee5_prof);

        
        $__internal_b7fe144e3c3d7627b9e5e60aeea79fb9236afc9a0c347a0721ef259cea7e4bb2->leave($__internal_b7fe144e3c3d7627b9e5e60aeea79fb9236afc9a0c347a0721ef259cea7e4bb2_prof);

    }

    // line 246
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_2345b6a10688ac910a32cfc1129e6c25162b709a0e7bdba9a5e4575705b7ad7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2345b6a10688ac910a32cfc1129e6c25162b709a0e7bdba9a5e4575705b7ad7f->enter($__internal_2345b6a10688ac910a32cfc1129e6c25162b709a0e7bdba9a5e4575705b7ad7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_07f5fa638c3f7da229c7e7107a634f6ed9eefd1a5d85a5ad1510b4f00021b30f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07f5fa638c3f7da229c7e7107a634f6ed9eefd1a5d85a5ad1510b4f00021b30f->enter($__internal_07f5fa638c3f7da229c7e7107a634f6ed9eefd1a5d85a5ad1510b4f00021b30f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 247
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 247, $this->getSourceContext()); })())) > 0)) {
            // line 248
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 248, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 249
                echo "<div>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_07f5fa638c3f7da229c7e7107a634f6ed9eefd1a5d85a5ad1510b4f00021b30f->leave($__internal_07f5fa638c3f7da229c7e7107a634f6ed9eefd1a5d85a5ad1510b4f00021b30f_prof);

        
        $__internal_2345b6a10688ac910a32cfc1129e6c25162b709a0e7bdba9a5e4575705b7ad7f->leave($__internal_2345b6a10688ac910a32cfc1129e6c25162b709a0e7bdba9a5e4575705b7ad7f_prof);

    }

    public function getTemplateName()
    {
        return "@Curiosity26AngularMaterialBundle/Resources/Form/material_1_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1001 => 249,  997 => 248,  995 => 247,  986 => 246,  975 => 243,  969 => 241,  967 => 240,  965 => 239,  963 => 238,  957 => 236,  955 => 235,  950 => 234,  948 => 233,  946 => 232,  944 => 231,  941 => 230,  932 => 229,  919 => 225,  917 => 224,  893 => 223,  890 => 221,  887 => 219,  885 => 218,  883 => 217,  874 => 216,  858 => 213,  854 => 210,  851 => 207,  850 => 206,  849 => 205,  847 => 204,  845 => 203,  836 => 202,  825 => 198,  815 => 197,  810 => 196,  808 => 195,  805 => 193,  803 => 192,  794 => 191,  783 => 187,  781 => 185,  780 => 184,  779 => 183,  778 => 182,  774 => 181,  766 => 175,  762 => 174,  747 => 173,  744 => 172,  742 => 171,  740 => 170,  731 => 169,  719 => 164,  717 => 163,  715 => 162,  712 => 160,  710 => 159,  708 => 158,  703 => 156,  700 => 154,  698 => 153,  689 => 152,  657 => 147,  655 => 146,  652 => 144,  650 => 143,  648 => 142,  643 => 141,  641 => 140,  624 => 139,  615 => 138,  605 => 135,  603 => 134,  601 => 133,  595 => 130,  593 => 129,  591 => 128,  589 => 127,  587 => 126,  573 => 125,  569 => 123,  567 => 122,  565 => 121,  559 => 118,  557 => 117,  555 => 116,  553 => 115,  551 => 114,  542 => 112,  540 => 111,  530 => 110,  527 => 107,  525 => 106,  523 => 105,  520 => 103,  518 => 102,  516 => 101,  513 => 99,  511 => 98,  502 => 97,  490 => 93,  476 => 91,  446 => 89,  443 => 87,  441 => 86,  439 => 85,  430 => 84,  418 => 80,  387 => 78,  346 => 76,  344 => 75,  342 => 74,  333 => 73,  321 => 69,  315 => 67,  311 => 66,  307 => 65,  305 => 64,  301 => 62,  295 => 60,  291 => 59,  287 => 58,  285 => 57,  283 => 56,  274 => 55,  263 => 52,  244 => 50,  225 => 48,  223 => 47,  219 => 44,  216 => 41,  215 => 40,  214 => 39,  212 => 38,  210 => 37,  207 => 35,  205 => 34,  202 => 32,  200 => 31,  198 => 30,  189 => 29,  177 => 25,  175 => 24,  172 => 23,  170 => 22,  164 => 20,  162 => 19,  157 => 18,  155 => 17,  153 => 16,  149 => 14,  146 => 13,  144 => 12,  135 => 11,  110 => 8,  108 => 7,  106 => 6,  104 => 5,  102 => 4,  93 => 3,  83 => 246,  81 => 229,  79 => 216,  77 => 202,  75 => 191,  73 => 169,  71 => 152,  69 => 138,  67 => 97,  65 => 84,  63 => 73,  61 => 55,  59 => 29,  57 => 11,  55 => 3,  52 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{% block form_widget_simple %}
    {%- set ng_model = form.vars.full_name|replace({'[': '.', ']': ''}) -%}
    {%- set ng_value = value matches '/^\\\\d+\$/' ? value : \"'\" ~ value|replace({\"'\": \"\\\\'\"}) ~ \"'\" -%}
    {%- set attr = attr|merge({'ng-model': ng_model}) -%}
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" ng-init=\"{{ ng_model }}={{ ng_value }}\" {% endif %}/>
{% endblock form_widget_simple %}

{%- block choice_row -%}
    {% set ng_model = full_name|replace({'[': '.', ']': ''}) %}
    {% if not expanded %}
        <md-input-container class=\"md-block\">
    {% endif %}
    {{- form_label(form) -}}
    {{- form_widget(form) -}}
    <div ng-messages=\"{{ ng_model }}.\$error\" role=\"alert\" multiple>
        {% if required %}
            <div ng-message=\"required\" class=\"{{ ng_model|replace({'.': '-'}) }}-required\">This field is required.</div>
        {% endif %}
        {{- form_errors(form) -}}
    </div>
    {% if not expanded %}
        </md-input-container>
    {% endif %}
{%- endblock choice_row -%}

{%- block choice_label -%}
    {% if label is not same as(false) -%}
        {% if not compound and not expanded -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        {% if expanded %}
            <h4{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</h4>
        {% else %}
            <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>
        {% endif %}
    {% endif %}
{%- endblock choice_label -%}

{%- block choice_widget_expanded -%}
    {%- set ng_model = full_name|replace({'[': '.', ']': ''}) -%}
    {% if multiple %}
        <md-checkbox-group {{ block('widget_container_attributes') }} layout=\"column\">
            {%- for child in form %}
                {{- form_widget(child, {ng_model: ng_model}) -}}
            {% endfor -%}
        </md-checkbox-group>
    {% else %}
        {%- set ng_model = full_name|replace({'[': '.', ']': ''}) -%}
        <md-radio-group {{ block('widget_container_attributes') }} layout=\"column\">
            {%- for child in form %}
                {{- form_widget(child, {form: form, ng_model: ng_model}) -}}
            {% endfor -%}
        </md-radio-group>
    {% endif %}
{%- endblock choice_widget_expanded -%}

{%- block checkbox_widget -%}
    {%- set model_name = ng_model ?: full_name|replace({'[': '.', ']': ''}) -%}
    {%- set ng_value = value matches '/^\\\\d+\$/' ? value : \"'\" ~ value|replace({\"'\": \"\\\\'\"}) ~ \"'\" -%}
    <md-checkbox {% if ng_model is defined %}ng-checked=\"isChecked({{ ng_model }}, {{ ng_value }})\" ng-click=\"{{ ng_model }} = toggleCheckbox({{ ng_model }}, {{ ng_value }})\"{% else %}ng-model=\"{{ model_name }}\" ng-click=\"{{ ng_model }} = {{ ng_value }}\"{% endif %} {% if value is defined %} ng-yes-value=\"{{ value }}\" {% endif %}{% if checked %} ng-init=\"{{ model_name }} = toggleCheckbox({{ model_name }}, {{ ng_value }})\"{% endif %}>
        <span hide>
            <input type=\"checkbox\" {% if ng_model is defined %}ng-checked=\"isChecked({{ ng_model }}, {{ ng_value }})\" ng-click=\"{{ ng_model }} = toggleCheckbox({{ ng_model }}, {{ ng_value }})\"{% else %}ng-model=\"{{ model_name }}\"{% endif %} {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %}>
        </span>
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </md-checkbox>
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    {%- set ng_value = value matches '/^\\\\d+\$/' ? value : \"'\" ~ value|replace({\"'\": \"\\\\'\"}) ~ \"'\" -%}
    {%- if ng_model is not defined %}
        {%- set ng_model = full_name|replace({'[': '.', ']': ''}) -%}
    {% endif -%}
    <md-radio-button type=\"radio\" ng-checked=\"isRadioSelected({{ ng_model }}, {{ ng_value }})\" ng-click=\"{{ ng_model }} = setRadio({{ ng_model }}, {{ ng_value }})\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} ng-init=\"{{ ng_model }} = setRadio({{ ng_model }}, {{ ng_value }})\"{% endif %}>
        <span hide>
            <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %} ng-checked=\"isRadioSelected({{ ng_model }}, {{ ng_value }})\">
        </span>
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </md-radio-button>
{%- endblock radio_widget -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    {%- if multiple -%}
        {%- set ng_model = full_name|replace({'[]': '', '[': '.', ']': ''}) -%}
        {%- set ng_init = ng_model ~ \"=\" ~ value|json_encode -%}
    {% else %}
        {%- set ng_model = full_name|replace({'[]': '', '[': '.', ']': ''}) -%}
        {%- set ng_value = value matches '/^\\\\d+\$/' ? value : \"'\" ~ value|replace({\"'\": \"\\\\'\"}) ~ \"'\" -%}
        {%- set ng_init = ng_model ~ \"=\" ~ ng_value -%}
    {%- endif -%}

    <select {{ block('widget_attributes') }} hide ng-model=\"{{ ng_model }}\"{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? placeholder|trans({}, translation_domain) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>

    <md-select ng-cloak ng-model=\"{{ ng_model }}\" ng-init=\"{{ ng_init }}\"{% if multiple %} multiple{% endif %}{% if placeholder is not none %}placeholder=\"{{ placeholder != '' ? placeholder|trans({}, translation_domain) }}\"{% endif %}>
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('md_choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <md-option disabled>{{ separator }}</md-option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('md_choice_widget_options') -}}
    </md-select>
{%- endblock choice_widget_collapsed -%}

{%- block md_choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <md-optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}\">
                {% set options = choice %}
                {{- block('md_choice_widget_options') -}}
            </md-optgroup>
        {%- else -%}
            {% set attr = choice.attr %}
            <md-option value=\"{{ choice.value }}\" {{ block('attributes') }}{% if choice is selectedchoice(value) %} ng-selected=\"true\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</md-option>
        {%- endif -%}
    {% endfor %}
{%- endblock md_choice_widget_options -%}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            <div flex>
                {{- form_widget(form.date) -}}
                {{- form_errors(form.date) -}}
            </div>
            <div flex>
                {{- form_widget(form.time) -}}
                {{- form_errors(form.time) -}}
            </div>
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {% set ng_model = form.vars.full_name|replace({'[': '.', ']': ''}) %}
        {% set attr = attr|merge({'ng-model': ng_model}) %}
        <md-datepicker {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" ng-init=\"{{ ng_model }}='{{ value }}'\" {% endif %}></md-datepicker>
        <div ng-messages=\"{{ model_name }}.\$error\" role=\"alert\" multiple>
            <div ng-message=\"required\" class=\"{{ model_name|replace({'.': '-'}) }}-error\">This field is required.</div>
            <div ng-message=\"valid\">The entered value is not a date!</div>
            <div ng-message=\"mindate\">Date is too early!</div>
            <div ng-message=\"maxdate\">Date is too late!</div>
        </div>
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year, {attr: form.year.vars.attr|merge({'class': 'flex'})}),
                '{{ month }}': form_widget(form.month, {attr: form.month.vars.attr|merge({'class': 'flex'})}),
                '{{ day }}':   form_widget(form.day, {attr: form.day.vars.attr|merge({'class': 'flex'})})
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
        <div {{ block('widget_container_attributes') }}>
            {{ form_widget(form.hour, vars|merge({'attr': {'class': 'flex'}})) }}{% if with_minutes %}:{{ form_widget(form.minute, vars|merge({'attr': {'class': 'flex'}})) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars|merge({'attr': {'class': 'flex'}})) }}{% endif %}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}

{%- block button_widget -%}
    {%- if label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
            '%name%': name,
            '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}
    <md-button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ label|trans({}, translation_domain) }}</md-button>
{%- endblock button_widget -%}

{%- block form_start -%}
    {% set method = method|upper %}
    {%- if method in [\"GET\", \"POST\"] -%}
        {% set form_method = method %}
    {%- else -%}
        {% set form_method = \"POST\" %}
    {%- endif -%}
<form name=\"{{ name }}\" method=\"{{ form_method|lower }}\" action=\"{{ action }}\" ng-controller=\"sfFormController as frmCtrl\" flex{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
    {%- if form_method != method -%}
        <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
    {%- endif -%}
{%- endblock form_start -%}

{% block form_row %}
    <md-input-container class=\"md-block\">
        {% set ng_model = form.vars.full_name|replace({'[': '.', ']': ''}) %}
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        <div ng-messages=\"{{ ng_model }}.\$error\" role=\"alert\" multiple>
            {% if required %}
                <div ng-message=\"required\" class=\"{{ ng_model|replace({'.': '-'}) }}-required\">This field is required.</div>
            {% endif %}
            {{- form_errors(form) -}}
        </div>
        {%- if form.vars.description is defined %}
            <p class=\"md-caption\">{{ form.vars.description }}</p>
        {% endif -%}
    </md-input-container>
{% endblock %}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
        {%- for error in errors -%}
            <div>{{ error.message }}</div>
        {%- endfor -%}
    {%- endif -%}
{%- endblock form_errors -%}", "@Curiosity26AngularMaterialBundle/Resources/Form/material_1_layout.html.twig", "/home/fabien/symfony-stg/vendor/curiosity26/angular-material-bundle/Resources/Form/material_1_layout.html.twig");
    }
}
