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
        $__internal_3c33d4710e4e0c4fd6229662291db46f143cc2859517f16f4b6d797486b8964a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c33d4710e4e0c4fd6229662291db46f143cc2859517f16f4b6d797486b8964a->enter($__internal_3c33d4710e4e0c4fd6229662291db46f143cc2859517f16f4b6d797486b8964a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        $__internal_ccdb07e30db86b61a52adf1874137124b7b8f5faa260528abc1d47be87f24d11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccdb07e30db86b61a52adf1874137124b7b8f5faa260528abc1d47be87f24d11->enter($__internal_ccdb07e30db86b61a52adf1874137124b7b8f5faa260528abc1d47be87f24d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"), true);
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 4, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 4, $this->getSourceContext()); })()), "primary_key_field_name", array()));
        // line 5
        $context["__internal_7bfadff15cc7c20e08b1c4481bc4f3dde42e76fe46b294a4028ab59f7420d161"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 5, $this->getSourceContext()); })()), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 6, $this->getSourceContext()); })()), "name", array()), array(),         // line 5
(isset($context["__internal_7bfadff15cc7c20e08b1c4481bc4f3dde42e76fe46b294a4028ab59f7420d161"]) || array_key_exists("__internal_7bfadff15cc7c20e08b1c4481bc4f3dde42e76fe46b294a4028ab59f7420d161", $context) ? $context["__internal_7bfadff15cc7c20e08b1c4481bc4f3dde42e76fe46b294a4028ab59f7420d161"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_7bfadff15cc7c20e08b1c4481bc4f3dde42e76fe46b294a4028ab59f7420d161" does not exist.', 5, $this->getSourceContext()); })())), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(),         // line 6
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 6, $this->getSourceContext()); })()), "label", array()), array(),         // line 5
(isset($context["__internal_7bfadff15cc7c20e08b1c4481bc4f3dde42e76fe46b294a4028ab59f7420d161"]) || array_key_exists("__internal_7bfadff15cc7c20e08b1c4481bc4f3dde42e76fe46b294a4028ab59f7420d161", $context) ? $context["__internal_7bfadff15cc7c20e08b1c4481bc4f3dde42e76fe46b294a4028ab59f7420d161"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_7bfadff15cc7c20e08b1c4481bc4f3dde42e76fe46b294a4028ab59f7420d161" does not exist.', 5, $this->getSourceContext()); })())), "%entity_id%" =>         // line 6
(isset($context["_entity_id"]) || array_key_exists("_entity_id", $context) ? $context["_entity_id"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_id" does not exist.', 6, $this->getSourceContext()); })()));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c33d4710e4e0c4fd6229662291db46f143cc2859517f16f4b6d797486b8964a->leave($__internal_3c33d4710e4e0c4fd6229662291db46f143cc2859517f16f4b6d797486b8964a_prof);

        
        $__internal_ccdb07e30db86b61a52adf1874137124b7b8f5faa260528abc1d47be87f24d11->leave($__internal_ccdb07e30db86b61a52adf1874137124b7b8f5faa260528abc1d47be87f24d11_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_20086425c588b345536efeef135ac5bd03192dbeb359d35dfd7e42640f84a02c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20086425c588b345536efeef135ac5bd03192dbeb359d35dfd7e42640f84a02c->enter($__internal_20086425c588b345536efeef135ac5bd03192dbeb359d35dfd7e42640f84a02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_e7ee26c8b4992eadff34d6612a7dee345893d10f576b52be41a1a14ab6767b08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7ee26c8b4992eadff34d6612a7dee345893d10f576b52be41a1a14ab6767b08->enter($__internal_e7ee26c8b4992eadff34d6612a7dee345893d10f576b52be41a1a14ab6767b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 10, $this->getSourceContext()); })()), "name", array())) . "-") . (isset($context["_entity_id"]) || array_key_exists("_entity_id", $context) ? $context["_entity_id"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_id" does not exist.', 10, $this->getSourceContext()); })())), "html", null, true);
        
        $__internal_e7ee26c8b4992eadff34d6612a7dee345893d10f576b52be41a1a14ab6767b08->leave($__internal_e7ee26c8b4992eadff34d6612a7dee345893d10f576b52be41a1a14ab6767b08_prof);

        
        $__internal_20086425c588b345536efeef135ac5bd03192dbeb359d35dfd7e42640f84a02c->leave($__internal_20086425c588b345536efeef135ac5bd03192dbeb359d35dfd7e42640f84a02c_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_c24f2abc82330aa4333137eeda2ae58b46272e8174f00c6027743d74a7c0b79d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c24f2abc82330aa4333137eeda2ae58b46272e8174f00c6027743d74a7c0b79d->enter($__internal_c24f2abc82330aa4333137eeda2ae58b46272e8174f00c6027743d74a7c0b79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_33ef320dfbbff27070be81b27bf1bffad5b74be34181b2b04908760ecde1e417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33ef320dfbbff27070be81b27bf1bffad5b74be34181b2b04908760ecde1e417->enter($__internal_33ef320dfbbff27070be81b27bf1bffad5b74be34181b2b04908760ecde1e417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 11, $this->getSourceContext()); })()), "name", array()))), "html", null, true);
        
        $__internal_33ef320dfbbff27070be81b27bf1bffad5b74be34181b2b04908760ecde1e417->leave($__internal_33ef320dfbbff27070be81b27bf1bffad5b74be34181b2b04908760ecde1e417_prof);

        
        $__internal_c24f2abc82330aa4333137eeda2ae58b46272e8174f00c6027743d74a7c0b79d->leave($__internal_c24f2abc82330aa4333137eeda2ae58b46272e8174f00c6027743d74a7c0b79d_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_d785d79f58d8696cdad1c544f4e31ca7bdde9527c599f16866466a2a5da50d63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d785d79f58d8696cdad1c544f4e31ca7bdde9527c599f16866466a2a5da50d63->enter($__internal_d785d79f58d8696cdad1c544f4e31ca7bdde9527c599f16866466a2a5da50d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_e952b03bf90968b15038630bafbc80eaeb8d7e4b10d4c805217c273de485118c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e952b03bf90968b15038630bafbc80eaeb8d7e4b10d4c805217c273de485118c->enter($__internal_e952b03bf90968b15038630bafbc80eaeb8d7e4b10d4c805217c273de485118c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.page_title", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 15, $this->getSourceContext()); })()), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 16, $this->getSourceContext()); })()), "edit", array()), "title", array()), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 16, $this->getSourceContext()); })()),         // line 5
(isset($context["__internal_7bfadff15cc7c20e08b1c4481bc4f3dde42e76fe46b294a4028ab59f7420d161"]) || array_key_exists("__internal_7bfadff15cc7c20e08b1c4481bc4f3dde42e76fe46b294a4028ab59f7420d161", $context) ? $context["__internal_7bfadff15cc7c20e08b1c4481bc4f3dde42e76fe46b294a4028ab59f7420d161"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_7bfadff15cc7c20e08b1c4481bc4f3dde42e76fe46b294a4028ab59f7420d161" does not exist.', 5, $this->getSourceContext()); })()))) : (        // line 16
(isset($context["_default_title"]) || array_key_exists("_default_title", $context) ? $context["_default_title"] : (function () { throw new Twig_Error_Runtime('Variable "_default_title" does not exist.', 16, $this->getSourceContext()); })()))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e952b03bf90968b15038630bafbc80eaeb8d7e4b10d4c805217c273de485118c->leave($__internal_e952b03bf90968b15038630bafbc80eaeb8d7e4b10d4c805217c273de485118c_prof);

        
        $__internal_d785d79f58d8696cdad1c544f4e31ca7bdde9527c599f16866466a2a5da50d63->leave($__internal_d785d79f58d8696cdad1c544f4e31ca7bdde9527c599f16866466a2a5da50d63_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_be00a07509e96d59f58598bef45edd8c5052f74ea40dc8ecd97ce5041ae5337e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be00a07509e96d59f58598bef45edd8c5052f74ea40dc8ecd97ce5041ae5337e->enter($__internal_be00a07509e96d59f58598bef45edd8c5052f74ea40dc8ecd97ce5041ae5337e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_1d7254e5ab6e9d8434d283991252dc736e08d60adca0378cbb6d683c77de7295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d7254e5ab6e9d8434d283991252dc736e08d60adca0378cbb6d683c77de7295->enter($__internal_1d7254e5ab6e9d8434d283991252dc736e08d60adca0378cbb6d683c77de7295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_1d7254e5ab6e9d8434d283991252dc736e08d60adca0378cbb6d683c77de7295->leave($__internal_1d7254e5ab6e9d8434d283991252dc736e08d60adca0378cbb6d683c77de7295_prof);

        
        $__internal_be00a07509e96d59f58598bef45edd8c5052f74ea40dc8ecd97ce5041ae5337e->leave($__internal_be00a07509e96d59f58598bef45edd8c5052f74ea40dc8ecd97ce5041ae5337e_prof);

    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_16c03965ce4a2990ba3d02fa6dfb3f718770167b271e6d52c8d1ed2d9db01d4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16c03965ce4a2990ba3d02fa6dfb3f718770167b271e6d52c8d1ed2d9db01d4a->enter($__internal_16c03965ce4a2990ba3d02fa6dfb3f718770167b271e6d52c8d1ed2d9db01d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_e1c3cb42f55cbba66c0631eb19cdac0673bcb14121f6397b50f15755bf385e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1c3cb42f55cbba66c0631eb19cdac0673bcb14121f6397b50f15755bf385e7c->enter($__internal_e1c3cb42f55cbba66c0631eb19cdac0673bcb14121f6397b50f15755bf385e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 22
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'form');
        echo "
    ";
        
        $__internal_e1c3cb42f55cbba66c0631eb19cdac0673bcb14121f6397b50f15755bf385e7c->leave($__internal_e1c3cb42f55cbba66c0631eb19cdac0673bcb14121f6397b50f15755bf385e7c_prof);

        
        $__internal_16c03965ce4a2990ba3d02fa6dfb3f718770167b271e6d52c8d1ed2d9db01d4a->leave($__internal_16c03965ce4a2990ba3d02fa6dfb3f718770167b271e6d52c8d1ed2d9db01d4a_prof);

    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_6b61d288e2e61cb474ce3d44d1ef2b771df5234974a97766847a0b5d423ffb7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b61d288e2e61cb474ce3d44d1ef2b771df5234974a97766847a0b5d423ffb7e->enter($__internal_6b61d288e2e61cb474ce3d44d1ef2b771df5234974a97766847a0b5d423ffb7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_2505682382e6a408919d926f9955d4ce749196b45c599543265727732f3c2434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2505682382e6a408919d926f9955d4ce749196b45c599543265727732f3c2434->enter($__internal_2505682382e6a408919d926f9955d4ce749196b45c599543265727732f3c2434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

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
        
        $__internal_2505682382e6a408919d926f9955d4ce749196b45c599543265727732f3c2434->leave($__internal_2505682382e6a408919d926f9955d4ce749196b45c599543265727732f3c2434_prof);

        
        $__internal_6b61d288e2e61cb474ce3d44d1ef2b771df5234974a97766847a0b5d423ffb7e->leave($__internal_6b61d288e2e61cb474ce3d44d1ef2b771df5234974a97766847a0b5d423ffb7e_prof);

    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_9468303f3c787b827650bc26b3509652f5984b01df758e25e92cd409bcfd109f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9468303f3c787b827650bc26b3509652f5984b01df758e25e92cd409bcfd109f->enter($__internal_9468303f3c787b827650bc26b3509652f5984b01df758e25e92cd409bcfd109f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_8a80f4068782d3b2acdbaa15425da2acdb94f4080f5b32f9ffb4bacc885b7ab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a80f4068782d3b2acdbaa15425da2acdb94f4080f5b32f9ffb4bacc885b7ab3->enter($__internal_8a80f4068782d3b2acdbaa15425da2acdb94f4080f5b32f9ffb4bacc885b7ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_8a80f4068782d3b2acdbaa15425da2acdb94f4080f5b32f9ffb4bacc885b7ab3->leave($__internal_8a80f4068782d3b2acdbaa15425da2acdb94f4080f5b32f9ffb4bacc885b7ab3_prof);

        
        $__internal_9468303f3c787b827650bc26b3509652f5984b01df758e25e92cd409bcfd109f->leave($__internal_9468303f3c787b827650bc26b3509652f5984b01df758e25e92cd409bcfd109f_prof);

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
", "EasyAdminBundle:default:edit.html.twig", "/home/fabien/symfony-stg/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/edit.html.twig");
    }
}
