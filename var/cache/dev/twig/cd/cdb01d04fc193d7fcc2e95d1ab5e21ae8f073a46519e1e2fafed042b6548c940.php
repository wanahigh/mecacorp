<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_436173ee8ba73bf034216d9717b472352793ffc9cb0f4c8f8f9387b946d90b6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
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
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da106b35b4c8a38f263110712a2a310684306eae343ec1e5d526769d79ef0f83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da106b35b4c8a38f263110712a2a310684306eae343ec1e5d526769d79ef0f83->enter($__internal_da106b35b4c8a38f263110712a2a310684306eae343ec1e5d526769d79ef0f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_f5674bcde8a7295218c52e1deb5b0ae77e022311a2d0013c2b779cc970ccd954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5674bcde8a7295218c52e1deb5b0ae77e022311a2d0013c2b779cc970ccd954->enter($__internal_f5674bcde8a7295218c52e1deb5b0ae77e022311a2d0013c2b779cc970ccd954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('submit_row', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('reset_row', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_da106b35b4c8a38f263110712a2a310684306eae343ec1e5d526769d79ef0f83->leave($__internal_da106b35b4c8a38f263110712a2a310684306eae343ec1e5d526769d79ef0f83_prof);

        
        $__internal_f5674bcde8a7295218c52e1deb5b0ae77e022311a2d0013c2b779cc970ccd954->leave($__internal_f5674bcde8a7295218c52e1deb5b0ae77e022311a2d0013c2b779cc970ccd954_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_ab3be9f2e16585196f922dae48166f531465841433269f11947255eb4acdc291 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab3be9f2e16585196f922dae48166f531465841433269f11947255eb4acdc291->enter($__internal_ab3be9f2e16585196f922dae48166f531465841433269f11947255eb4acdc291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_939f2393eb9bb61f4d9f8728dca59cf434bb7f425163934466d47e4c213134d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_939f2393eb9bb61f4d9f8728dca59cf434bb7f425163934466d47e4c213134d2->enter($__internal_939f2393eb9bb61f4d9f8728dca59cf434bb7f425163934466d47e4c213134d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_939f2393eb9bb61f4d9f8728dca59cf434bb7f425163934466d47e4c213134d2->leave($__internal_939f2393eb9bb61f4d9f8728dca59cf434bb7f425163934466d47e4c213134d2_prof);

        
        $__internal_ab3be9f2e16585196f922dae48166f531465841433269f11947255eb4acdc291->leave($__internal_ab3be9f2e16585196f922dae48166f531465841433269f11947255eb4acdc291_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_38d0adf7f33bb44b3f3dc133d6ac96940b4e32c5d2b354de614c2393b61911ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38d0adf7f33bb44b3f3dc133d6ac96940b4e32c5d2b354de614c2393b61911ad->enter($__internal_38d0adf7f33bb44b3f3dc133d6ac96940b4e32c5d2b354de614c2393b61911ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_0cb1af7dfe1f22bdc046e0436c0aa46c25d977c9880b2c4dcb880d3ae3f83101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cb1af7dfe1f22bdc046e0436c0aa46c25d977c9880b2c4dcb880d3ae3f83101->enter($__internal_0cb1af7dfe1f22bdc046e0436c0aa46c25d977c9880b2c4dcb880d3ae3f83101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 11, $this->getSourceContext()); })()) === false)) {
            // line 12
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 14, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 15
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_0cb1af7dfe1f22bdc046e0436c0aa46c25d977c9880b2c4dcb880d3ae3f83101->leave($__internal_0cb1af7dfe1f22bdc046e0436c0aa46c25d977c9880b2c4dcb880d3ae3f83101_prof);

        
        $__internal_38d0adf7f33bb44b3f3dc133d6ac96940b4e32c5d2b354de614c2393b61911ad->leave($__internal_38d0adf7f33bb44b3f3dc133d6ac96940b4e32c5d2b354de614c2393b61911ad_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_1dee5814f3097d8f405b0ce5e7a88f6a781e7e07ec3569f43ef5085c521dc60c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dee5814f3097d8f405b0ce5e7a88f6a781e7e07ec3569f43ef5085c521dc60c->enter($__internal_1dee5814f3097d8f405b0ce5e7a88f6a781e7e07ec3569f43ef5085c521dc60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_b2b0e6d4b9a7d4a38ba72d72673f8ffcb42775eb85b40f9fd5117f0cb18c08b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2b0e6d4b9a7d4a38ba72d72673f8ffcb42775eb85b40f9fd5117f0cb18c08b1->enter($__internal_b2b0e6d4b9a7d4a38ba72d72673f8ffcb42775eb85b40f9fd5117f0cb18c08b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_b2b0e6d4b9a7d4a38ba72d72673f8ffcb42775eb85b40f9fd5117f0cb18c08b1->leave($__internal_b2b0e6d4b9a7d4a38ba72d72673f8ffcb42775eb85b40f9fd5117f0cb18c08b1_prof);

        
        $__internal_1dee5814f3097d8f405b0ce5e7a88f6a781e7e07ec3569f43ef5085c521dc60c->leave($__internal_1dee5814f3097d8f405b0ce5e7a88f6a781e7e07ec3569f43ef5085c521dc60c_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_9628998881e78f8f75772f9ebe06a5cf3f9f8691d6c93c5e49bba456e57d139a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9628998881e78f8f75772f9ebe06a5cf3f9f8691d6c93c5e49bba456e57d139a->enter($__internal_9628998881e78f8f75772f9ebe06a5cf3f9f8691d6c93c5e49bba456e57d139a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_a811ed549dbf25039efaaab8effd6df8036734758d45674f79ccabf42fc90d37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a811ed549dbf25039efaaab8effd6df8036734758d45674f79ccabf42fc90d37->enter($__internal_a811ed549dbf25039efaaab8effd6df8036734758d45674f79ccabf42fc90d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 26, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 26, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 26, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'label');
        // line 28
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'widget');
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'errors');
        // line 31
        echo "</div>
";
        // line 32
        echo "</div>";
        
        $__internal_a811ed549dbf25039efaaab8effd6df8036734758d45674f79ccabf42fc90d37->leave($__internal_a811ed549dbf25039efaaab8effd6df8036734758d45674f79ccabf42fc90d37_prof);

        
        $__internal_9628998881e78f8f75772f9ebe06a5cf3f9f8691d6c93c5e49bba456e57d139a->leave($__internal_9628998881e78f8f75772f9ebe06a5cf3f9f8691d6c93c5e49bba456e57d139a_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_7dd924e893749a3d0975c309efe869e38499559c4cf395487ad62e2d1648b392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dd924e893749a3d0975c309efe869e38499559c4cf395487ad62e2d1648b392->enter($__internal_7dd924e893749a3d0975c309efe869e38499559c4cf395487ad62e2d1648b392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_15841a050f5bf2fc96517f2e35a8761f8b6d9b15c18a77b846ad040447b5eda3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15841a050f5bf2fc96517f2e35a8761f8b6d9b15c18a77b846ad040447b5eda3->enter($__internal_15841a050f5bf2fc96517f2e35a8761f8b6d9b15c18a77b846ad040447b5eda3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 36
        echo "<div class=\"form-group\">";
        // line 37
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 38
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), 'widget');
        // line 40
        echo "</div>";
        // line 41
        echo "</div>";
        
        $__internal_15841a050f5bf2fc96517f2e35a8761f8b6d9b15c18a77b846ad040447b5eda3->leave($__internal_15841a050f5bf2fc96517f2e35a8761f8b6d9b15c18a77b846ad040447b5eda3_prof);

        
        $__internal_7dd924e893749a3d0975c309efe869e38499559c4cf395487ad62e2d1648b392->leave($__internal_7dd924e893749a3d0975c309efe869e38499559c4cf395487ad62e2d1648b392_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_37354252fb49239c85d78883f6b52f0fb1f72d51ed4ff3dd1d4fced5ec54e05e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37354252fb49239c85d78883f6b52f0fb1f72d51ed4ff3dd1d4fced5ec54e05e->enter($__internal_37354252fb49239c85d78883f6b52f0fb1f72d51ed4ff3dd1d4fced5ec54e05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_c1ad22e2cbbbad56902239e23e29da2a46aaec58e3167b8a0f89f6395e4149ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1ad22e2cbbbad56902239e23e29da2a46aaec58e3167b8a0f89f6395e4149ab->enter($__internal_c1ad22e2cbbbad56902239e23e29da2a46aaec58e3167b8a0f89f6395e4149ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 45
        echo "<div class=\"form-group\">";
        // line 46
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 47
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), 'widget');
        // line 49
        echo "</div>";
        // line 50
        echo "</div>";
        
        $__internal_c1ad22e2cbbbad56902239e23e29da2a46aaec58e3167b8a0f89f6395e4149ab->leave($__internal_c1ad22e2cbbbad56902239e23e29da2a46aaec58e3167b8a0f89f6395e4149ab_prof);

        
        $__internal_37354252fb49239c85d78883f6b52f0fb1f72d51ed4ff3dd1d4fced5ec54e05e->leave($__internal_37354252fb49239c85d78883f6b52f0fb1f72d51ed4ff3dd1d4fced5ec54e05e_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_a72a47498e08a3b4884d40bb3b695ca5e060c3f3a32142e77a2f471e9fc05cb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a72a47498e08a3b4884d40bb3b695ca5e060c3f3a32142e77a2f471e9fc05cb6->enter($__internal_a72a47498e08a3b4884d40bb3b695ca5e060c3f3a32142e77a2f471e9fc05cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_08a6a69da44ad156ed3a97eba82518417e7b21591350cd128df075ea6ce8f5a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08a6a69da44ad156ed3a97eba82518417e7b21591350cd128df075ea6ce8f5a1->enter($__internal_08a6a69da44ad156ed3a97eba82518417e7b21591350cd128df075ea6ce8f5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_08a6a69da44ad156ed3a97eba82518417e7b21591350cd128df075ea6ce8f5a1->leave($__internal_08a6a69da44ad156ed3a97eba82518417e7b21591350cd128df075ea6ce8f5a1_prof);

        
        $__internal_a72a47498e08a3b4884d40bb3b695ca5e060c3f3a32142e77a2f471e9fc05cb6->leave($__internal_a72a47498e08a3b4884d40bb3b695ca5e060c3f3a32142e77a2f471e9fc05cb6_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_57d80eaa2977b11cbd69f976412ccba22c538442a929311b2de46aee0544708f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57d80eaa2977b11cbd69f976412ccba22c538442a929311b2de46aee0544708f->enter($__internal_57d80eaa2977b11cbd69f976412ccba22c538442a929311b2de46aee0544708f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_c4c7274167cf608c4c851dfc02d666d3b2db77130ea33d1ce9c2ea35a208efbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4c7274167cf608c4c851dfc02d666d3b2db77130ea33d1ce9c2ea35a208efbd->enter($__internal_c4c7274167cf608c4c851dfc02d666d3b2db77130ea33d1ce9c2ea35a208efbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 58
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 58, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->getSourceContext()); })()), 'widget');
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'errors');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_c4c7274167cf608c4c851dfc02d666d3b2db77130ea33d1ce9c2ea35a208efbd->leave($__internal_c4c7274167cf608c4c851dfc02d666d3b2db77130ea33d1ce9c2ea35a208efbd_prof);

        
        $__internal_57d80eaa2977b11cbd69f976412ccba22c538442a929311b2de46aee0544708f->leave($__internal_57d80eaa2977b11cbd69f976412ccba22c538442a929311b2de46aee0544708f_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  320 => 64,  318 => 63,  316 => 62,  314 => 61,  310 => 60,  306 => 59,  300 => 58,  291 => 57,  281 => 54,  272 => 53,  262 => 50,  260 => 49,  258 => 48,  254 => 47,  250 => 46,  248 => 45,  239 => 44,  229 => 41,  227 => 40,  225 => 39,  221 => 38,  217 => 37,  215 => 36,  206 => 35,  196 => 32,  193 => 31,  191 => 30,  189 => 29,  185 => 28,  183 => 27,  177 => 26,  168 => 25,  158 => 20,  149 => 19,  138 => 15,  136 => 14,  131 => 12,  129 => 11,  120 => 10,  110 => 5,  108 => 4,  99 => 3,  89 => 57,  86 => 56,  84 => 53,  81 => 52,  79 => 44,  76 => 43,  74 => 35,  71 => 34,  69 => 25,  66 => 24,  63 => 22,  61 => 19,  58 => 18,  56 => 10,  53 => 9,  50 => 7,  48 => 3,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block submit_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}", "bootstrap_3_horizontal_layout.html.twig", "/home/fabien/Téléchargements/mecacorp/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
