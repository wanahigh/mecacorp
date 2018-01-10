<?php

/* EasyAdminBundle:default:edit.html.twig */
class __TwigTemplate_bf99ec7c559ad0075aef3ed73f282d27547202ccfda24e552c64d26e09c452db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'entity_form' => array($this, 'block_entity_form'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 8, $this->getSourceContext()); })()), "templates", array()), "layout", array()), "EasyAdminBundle:default:edit.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4174f3ab71ac8098b886f37e6639fb4efb874526c22d9b41a622f5cdeebeda73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4174f3ab71ac8098b886f37e6639fb4efb874526c22d9b41a622f5cdeebeda73->enter($__internal_4174f3ab71ac8098b886f37e6639fb4efb874526c22d9b41a622f5cdeebeda73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        $__internal_7e22a9045e95230ac1c276a4b0cd937a1ddcab8883dd3286c4406b22dacc109f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e22a9045e95230ac1c276a4b0cd937a1ddcab8883dd3286c4406b22dacc109f->enter($__internal_7e22a9045e95230ac1c276a4b0cd937a1ddcab8883dd3286c4406b22dacc109f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"), true);
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 4, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 4, $this->getSourceContext()); })()), "primary_key_field_name", array()));
        // line 5
        $context["__internal_f3050852e7a90671e67414738010cc12919315398ba5f7aacc5fbbf99a9ef4a6"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 5, $this->getSourceContext()); })()), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 6, $this->getSourceContext()); })()), "name", array()), array(),         // line 5
(isset($context["__internal_f3050852e7a90671e67414738010cc12919315398ba5f7aacc5fbbf99a9ef4a6"]) || array_key_exists("__internal_f3050852e7a90671e67414738010cc12919315398ba5f7aacc5fbbf99a9ef4a6", $context) ? $context["__internal_f3050852e7a90671e67414738010cc12919315398ba5f7aacc5fbbf99a9ef4a6"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_f3050852e7a90671e67414738010cc12919315398ba5f7aacc5fbbf99a9ef4a6" does not exist.', 5, $this->getSourceContext()); })())), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(),         // line 6
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 6, $this->getSourceContext()); })()), "label", array()), array(),         // line 5
(isset($context["__internal_f3050852e7a90671e67414738010cc12919315398ba5f7aacc5fbbf99a9ef4a6"]) || array_key_exists("__internal_f3050852e7a90671e67414738010cc12919315398ba5f7aacc5fbbf99a9ef4a6", $context) ? $context["__internal_f3050852e7a90671e67414738010cc12919315398ba5f7aacc5fbbf99a9ef4a6"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_f3050852e7a90671e67414738010cc12919315398ba5f7aacc5fbbf99a9ef4a6" does not exist.', 5, $this->getSourceContext()); })())), "%entity_id%" =>         // line 6
(isset($context["_entity_id"]) || array_key_exists("_entity_id", $context) ? $context["_entity_id"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_id" does not exist.', 6, $this->getSourceContext()); })()));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4174f3ab71ac8098b886f37e6639fb4efb874526c22d9b41a622f5cdeebeda73->leave($__internal_4174f3ab71ac8098b886f37e6639fb4efb874526c22d9b41a622f5cdeebeda73_prof);

        
        $__internal_7e22a9045e95230ac1c276a4b0cd937a1ddcab8883dd3286c4406b22dacc109f->leave($__internal_7e22a9045e95230ac1c276a4b0cd937a1ddcab8883dd3286c4406b22dacc109f_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_0cbeb1b21d980027de0f64f4333fcc48af26e15605b7b23fb4fae7ca7006a13d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cbeb1b21d980027de0f64f4333fcc48af26e15605b7b23fb4fae7ca7006a13d->enter($__internal_0cbeb1b21d980027de0f64f4333fcc48af26e15605b7b23fb4fae7ca7006a13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_404896467a7ea1c452536b66e6441397de8f6cb5dba3a8253e2926ef66799b79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_404896467a7ea1c452536b66e6441397de8f6cb5dba3a8253e2926ef66799b79->enter($__internal_404896467a7ea1c452536b66e6441397de8f6cb5dba3a8253e2926ef66799b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 10, $this->getSourceContext()); })()), "name", array())) . "-") . (isset($context["_entity_id"]) || array_key_exists("_entity_id", $context) ? $context["_entity_id"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_id" does not exist.', 10, $this->getSourceContext()); })())), "html", null, true);
        
        $__internal_404896467a7ea1c452536b66e6441397de8f6cb5dba3a8253e2926ef66799b79->leave($__internal_404896467a7ea1c452536b66e6441397de8f6cb5dba3a8253e2926ef66799b79_prof);

        
        $__internal_0cbeb1b21d980027de0f64f4333fcc48af26e15605b7b23fb4fae7ca7006a13d->leave($__internal_0cbeb1b21d980027de0f64f4333fcc48af26e15605b7b23fb4fae7ca7006a13d_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_0bfc968f90cc4adbf37976042a78d09af218525926aa41da0544cc88970d76c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bfc968f90cc4adbf37976042a78d09af218525926aa41da0544cc88970d76c6->enter($__internal_0bfc968f90cc4adbf37976042a78d09af218525926aa41da0544cc88970d76c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_66ff8e47e3832937ab7dca409c65d5d812e2f3b8c3d87359efac2bb0524f613a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66ff8e47e3832937ab7dca409c65d5d812e2f3b8c3d87359efac2bb0524f613a->enter($__internal_66ff8e47e3832937ab7dca409c65d5d812e2f3b8c3d87359efac2bb0524f613a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 11, $this->getSourceContext()); })()), "name", array()))), "html", null, true);
        
        $__internal_66ff8e47e3832937ab7dca409c65d5d812e2f3b8c3d87359efac2bb0524f613a->leave($__internal_66ff8e47e3832937ab7dca409c65d5d812e2f3b8c3d87359efac2bb0524f613a_prof);

        
        $__internal_0bfc968f90cc4adbf37976042a78d09af218525926aa41da0544cc88970d76c6->leave($__internal_0bfc968f90cc4adbf37976042a78d09af218525926aa41da0544cc88970d76c6_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_87fa3a608cc1887e3fe35d6f08ea620fea0e35a71e338e5360fa98d41259914f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87fa3a608cc1887e3fe35d6f08ea620fea0e35a71e338e5360fa98d41259914f->enter($__internal_87fa3a608cc1887e3fe35d6f08ea620fea0e35a71e338e5360fa98d41259914f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_b1de6921a83c7866b9faf17989802436b1962c578343d49aafe92931524227f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1de6921a83c7866b9faf17989802436b1962c578343d49aafe92931524227f8->enter($__internal_b1de6921a83c7866b9faf17989802436b1962c578343d49aafe92931524227f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.page_title", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 15, $this->getSourceContext()); })()), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 16, $this->getSourceContext()); })()), "edit", array()), "title", array()), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 16, $this->getSourceContext()); })()),         // line 5
(isset($context["__internal_f3050852e7a90671e67414738010cc12919315398ba5f7aacc5fbbf99a9ef4a6"]) || array_key_exists("__internal_f3050852e7a90671e67414738010cc12919315398ba5f7aacc5fbbf99a9ef4a6", $context) ? $context["__internal_f3050852e7a90671e67414738010cc12919315398ba5f7aacc5fbbf99a9ef4a6"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_f3050852e7a90671e67414738010cc12919315398ba5f7aacc5fbbf99a9ef4a6" does not exist.', 5, $this->getSourceContext()); })()))) : (        // line 16
(isset($context["_default_title"]) || array_key_exists("_default_title", $context) ? $context["_default_title"] : (function () { throw new Twig_Error_Runtime('Variable "_default_title" does not exist.', 16, $this->getSourceContext()); })()))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b1de6921a83c7866b9faf17989802436b1962c578343d49aafe92931524227f8->leave($__internal_b1de6921a83c7866b9faf17989802436b1962c578343d49aafe92931524227f8_prof);

        
        $__internal_87fa3a608cc1887e3fe35d6f08ea620fea0e35a71e338e5360fa98d41259914f->leave($__internal_87fa3a608cc1887e3fe35d6f08ea620fea0e35a71e338e5360fa98d41259914f_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_1b45d238c46c53102c5f3d9b058a7fa3d9994d7d665bb73ea2e901781673db81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b45d238c46c53102c5f3d9b058a7fa3d9994d7d665bb73ea2e901781673db81->enter($__internal_1b45d238c46c53102c5f3d9b058a7fa3d9994d7d665bb73ea2e901781673db81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_de2dd87fda734f939d6e3969a49e8e557c908ed116b5d36a06bac83f6e22ff06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de2dd87fda734f939d6e3969a49e8e557c908ed116b5d36a06bac83f6e22ff06->enter($__internal_de2dd87fda734f939d6e3969a49e8e557c908ed116b5d36a06bac83f6e22ff06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_de2dd87fda734f939d6e3969a49e8e557c908ed116b5d36a06bac83f6e22ff06->leave($__internal_de2dd87fda734f939d6e3969a49e8e557c908ed116b5d36a06bac83f6e22ff06_prof);

        
        $__internal_1b45d238c46c53102c5f3d9b058a7fa3d9994d7d665bb73ea2e901781673db81->leave($__internal_1b45d238c46c53102c5f3d9b058a7fa3d9994d7d665bb73ea2e901781673db81_prof);

    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_1d55c065da8fd673913a19fff7cb28d05596ffcafe0f5921c9be1fe8a29b8fb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d55c065da8fd673913a19fff7cb28d05596ffcafe0f5921c9be1fe8a29b8fb5->enter($__internal_1d55c065da8fd673913a19fff7cb28d05596ffcafe0f5921c9be1fe8a29b8fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_ed96baa7fead69a0aadc42fe0ca9a77499758aa4ccdc6f4b2882c91fce3022eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed96baa7fead69a0aadc42fe0ca9a77499758aa4ccdc6f4b2882c91fce3022eb->enter($__internal_ed96baa7fead69a0aadc42fe0ca9a77499758aa4ccdc6f4b2882c91fce3022eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 22
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'form');
        echo "
    ";
        
        $__internal_ed96baa7fead69a0aadc42fe0ca9a77499758aa4ccdc6f4b2882c91fce3022eb->leave($__internal_ed96baa7fead69a0aadc42fe0ca9a77499758aa4ccdc6f4b2882c91fce3022eb_prof);

        
        $__internal_1d55c065da8fd673913a19fff7cb28d05596ffcafe0f5921c9be1fe8a29b8fb5->leave($__internal_1d55c065da8fd673913a19fff7cb28d05596ffcafe0f5921c9be1fe8a29b8fb5_prof);

    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_8fcca7ddf3c5420c98cc6123116ce718e514d752e07795e96b3bbbc91833a206 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fcca7ddf3c5420c98cc6123116ce718e514d752e07795e96b3bbbc91833a206->enter($__internal_8fcca7ddf3c5420c98cc6123116ce718e514d752e07795e96b3bbbc91833a206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_88142f7bd9207567e9a3afa2bc968f980c05237f5e8410d0ebc80031d4e95082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88142f7bd9207567e9a3afa2bc968f980c05237f5e8410d0ebc80031d4e95082->enter($__internal_88142f7bd9207567e9a3afa2bc968f980c05237f5e8410d0ebc80031d4e95082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 26
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "edit", "referer" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 28
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 28, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 29
(isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 29, $this->getSourceContext()); })()), "_translation_domain" => twig_get_attribute($this->env, $this->getSourceContext(),         // line 30
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 30, $this->getSourceContext()); })()), "translation_domain", array()), "_trans_parameters" =>         // line 31
(isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 31, $this->getSourceContext()); })()), "_entity_config" =>         // line 32
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 32, $this->getSourceContext()); })())), false);
        // line 33
        echo "
    ";
        
        $__internal_88142f7bd9207567e9a3afa2bc968f980c05237f5e8410d0ebc80031d4e95082->leave($__internal_88142f7bd9207567e9a3afa2bc968f980c05237f5e8410d0ebc80031d4e95082_prof);

        
        $__internal_8fcca7ddf3c5420c98cc6123116ce718e514d752e07795e96b3bbbc91833a206->leave($__internal_8fcca7ddf3c5420c98cc6123116ce718e514d752e07795e96b3bbbc91833a206_prof);

    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_376059c41f4599a2e950eef7e15cdc0b7524f8c8830218394079f2f0ea4905c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_376059c41f4599a2e950eef7e15cdc0b7524f8c8830218394079f2f0ea4905c9->enter($__internal_376059c41f4599a2e950eef7e15cdc0b7524f8c8830218394079f2f0ea4905c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_5ebc2d44d8a38848d96b1f0ba8f6512a386ab0d2614a9bd91c61d2f87d799723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ebc2d44d8a38848d96b1f0ba8f6512a386ab0d2614a9bd91c61d2f87d799723->enter($__internal_5ebc2d44d8a38848d96b1f0ba8f6512a386ab0d2614a9bd91c61d2f87d799723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 38
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '";
        // line 42
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>

    ";
        // line 58
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_5ebc2d44d8a38848d96b1f0ba8f6512a386ab0d2614a9bd91c61d2f87d799723->leave($__internal_5ebc2d44d8a38848d96b1f0ba8f6512a386ab0d2614a9bd91c61d2f87d799723_prof);

        
        $__internal_376059c41f4599a2e950eef7e15cdc0b7524f8c8830218394079f2f0ea4905c9->leave($__internal_376059c41f4599a2e950eef7e15cdc0b7524f8c8830218394079f2f0ea4905c9_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 58,  218 => 42,  210 => 38,  201 => 37,  190 => 33,  188 => 32,  187 => 31,  186 => 30,  185 => 29,  184 => 28,  182 => 26,  173 => 25,  160 => 22,  151 => 21,  141 => 25,  138 => 24,  135 => 21,  126 => 20,  113 => 16,  112 => 5,  110 => 16,  107 => 15,  105 => 14,  96 => 13,  78 => 11,  60 => 10,  50 => 8,  48 => 6,  47 => 5,  46 => 6,  45 => 5,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 1,  24 => 8,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form with easyadmin_config('design.form_theme') %}

{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% set _entity_id = attribute(entity, _entity_config.primary_key_field_name) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-edit-' ~ _entity_config.name ~ '-' ~ _entity_id %}
{% block body_class 'edit edit-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'edit.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.edit.title is defined ? _entity_config.edit.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}

    {% block delete_form %}
        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'edit',
            referer: app.request.query.get('referer', ''),
            delete_form: delete_form,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
", "EasyAdminBundle:default:edit.html.twig", "/home/fabien/Téléchargements/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/edit.html.twig");
    }
}
