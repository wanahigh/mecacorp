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
        $__internal_75b267ca4a817f787c349e5ccd27027841af84b9cd5beb2a57945a980b1a53b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75b267ca4a817f787c349e5ccd27027841af84b9cd5beb2a57945a980b1a53b3->enter($__internal_75b267ca4a817f787c349e5ccd27027841af84b9cd5beb2a57945a980b1a53b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        $__internal_f39dd2d6b1dda29d89c12c2817558ef6c3f245399dc4180d78b255ebc688fbc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f39dd2d6b1dda29d89c12c2817558ef6c3f245399dc4180d78b255ebc688fbc9->enter($__internal_f39dd2d6b1dda29d89c12c2817558ef6c3f245399dc4180d78b255ebc688fbc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"), true);
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 4, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 4, $this->getSourceContext()); })()), "primary_key_field_name", array()));
        // line 5
        $context["__internal_0bbcb4e6697c32f851a3d740cacf47ab878eab3cc90f14cebe9574154fe6afe1"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 5, $this->getSourceContext()); })()), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 6, $this->getSourceContext()); })()), "name", array()), array(),         // line 5
(isset($context["__internal_0bbcb4e6697c32f851a3d740cacf47ab878eab3cc90f14cebe9574154fe6afe1"]) || array_key_exists("__internal_0bbcb4e6697c32f851a3d740cacf47ab878eab3cc90f14cebe9574154fe6afe1", $context) ? $context["__internal_0bbcb4e6697c32f851a3d740cacf47ab878eab3cc90f14cebe9574154fe6afe1"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_0bbcb4e6697c32f851a3d740cacf47ab878eab3cc90f14cebe9574154fe6afe1" does not exist.', 5, $this->getSourceContext()); })())), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(),         // line 6
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 6, $this->getSourceContext()); })()), "label", array()), array(),         // line 5
(isset($context["__internal_0bbcb4e6697c32f851a3d740cacf47ab878eab3cc90f14cebe9574154fe6afe1"]) || array_key_exists("__internal_0bbcb4e6697c32f851a3d740cacf47ab878eab3cc90f14cebe9574154fe6afe1", $context) ? $context["__internal_0bbcb4e6697c32f851a3d740cacf47ab878eab3cc90f14cebe9574154fe6afe1"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_0bbcb4e6697c32f851a3d740cacf47ab878eab3cc90f14cebe9574154fe6afe1" does not exist.', 5, $this->getSourceContext()); })())), "%entity_id%" =>         // line 6
(isset($context["_entity_id"]) || array_key_exists("_entity_id", $context) ? $context["_entity_id"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_id" does not exist.', 6, $this->getSourceContext()); })()));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75b267ca4a817f787c349e5ccd27027841af84b9cd5beb2a57945a980b1a53b3->leave($__internal_75b267ca4a817f787c349e5ccd27027841af84b9cd5beb2a57945a980b1a53b3_prof);

        
        $__internal_f39dd2d6b1dda29d89c12c2817558ef6c3f245399dc4180d78b255ebc688fbc9->leave($__internal_f39dd2d6b1dda29d89c12c2817558ef6c3f245399dc4180d78b255ebc688fbc9_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_08f89993842b661c088900f73dd8349ce0912b046389c4a15181d08f2f94a82a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08f89993842b661c088900f73dd8349ce0912b046389c4a15181d08f2f94a82a->enter($__internal_08f89993842b661c088900f73dd8349ce0912b046389c4a15181d08f2f94a82a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_620c138aa0ebd68c6e74f79b885e9cb1351c282e00c5853790802c37689ea48b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_620c138aa0ebd68c6e74f79b885e9cb1351c282e00c5853790802c37689ea48b->enter($__internal_620c138aa0ebd68c6e74f79b885e9cb1351c282e00c5853790802c37689ea48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 10, $this->getSourceContext()); })()), "name", array())) . "-") . (isset($context["_entity_id"]) || array_key_exists("_entity_id", $context) ? $context["_entity_id"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_id" does not exist.', 10, $this->getSourceContext()); })())), "html", null, true);
        
        $__internal_620c138aa0ebd68c6e74f79b885e9cb1351c282e00c5853790802c37689ea48b->leave($__internal_620c138aa0ebd68c6e74f79b885e9cb1351c282e00c5853790802c37689ea48b_prof);

        
        $__internal_08f89993842b661c088900f73dd8349ce0912b046389c4a15181d08f2f94a82a->leave($__internal_08f89993842b661c088900f73dd8349ce0912b046389c4a15181d08f2f94a82a_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_d8bbb816f762750d176ebe1c7d375918fd606ba9efa0d9db5a7b0ecd35e0f2fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8bbb816f762750d176ebe1c7d375918fd606ba9efa0d9db5a7b0ecd35e0f2fd->enter($__internal_d8bbb816f762750d176ebe1c7d375918fd606ba9efa0d9db5a7b0ecd35e0f2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_4e9b998f28c8579779901293e08d12e38676f60b698b6cd9e85847c108e4be68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e9b998f28c8579779901293e08d12e38676f60b698b6cd9e85847c108e4be68->enter($__internal_4e9b998f28c8579779901293e08d12e38676f60b698b6cd9e85847c108e4be68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 11, $this->getSourceContext()); })()), "name", array()))), "html", null, true);
        
        $__internal_4e9b998f28c8579779901293e08d12e38676f60b698b6cd9e85847c108e4be68->leave($__internal_4e9b998f28c8579779901293e08d12e38676f60b698b6cd9e85847c108e4be68_prof);

        
        $__internal_d8bbb816f762750d176ebe1c7d375918fd606ba9efa0d9db5a7b0ecd35e0f2fd->leave($__internal_d8bbb816f762750d176ebe1c7d375918fd606ba9efa0d9db5a7b0ecd35e0f2fd_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_568d8edb0599eceecd787197ae45f06fe5e1478294e076c89821a43951c48525 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_568d8edb0599eceecd787197ae45f06fe5e1478294e076c89821a43951c48525->enter($__internal_568d8edb0599eceecd787197ae45f06fe5e1478294e076c89821a43951c48525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_d4ae6b0449a2c00289cc9603263e91341a3387cafa326dac5da5c23eb7385175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4ae6b0449a2c00289cc9603263e91341a3387cafa326dac5da5c23eb7385175->enter($__internal_d4ae6b0449a2c00289cc9603263e91341a3387cafa326dac5da5c23eb7385175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.page_title", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 15, $this->getSourceContext()); })()), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 16, $this->getSourceContext()); })()), "edit", array()), "title", array()), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 16, $this->getSourceContext()); })()),         // line 5
(isset($context["__internal_0bbcb4e6697c32f851a3d740cacf47ab878eab3cc90f14cebe9574154fe6afe1"]) || array_key_exists("__internal_0bbcb4e6697c32f851a3d740cacf47ab878eab3cc90f14cebe9574154fe6afe1", $context) ? $context["__internal_0bbcb4e6697c32f851a3d740cacf47ab878eab3cc90f14cebe9574154fe6afe1"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_0bbcb4e6697c32f851a3d740cacf47ab878eab3cc90f14cebe9574154fe6afe1" does not exist.', 5, $this->getSourceContext()); })()))) : (        // line 16
(isset($context["_default_title"]) || array_key_exists("_default_title", $context) ? $context["_default_title"] : (function () { throw new Twig_Error_Runtime('Variable "_default_title" does not exist.', 16, $this->getSourceContext()); })()))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d4ae6b0449a2c00289cc9603263e91341a3387cafa326dac5da5c23eb7385175->leave($__internal_d4ae6b0449a2c00289cc9603263e91341a3387cafa326dac5da5c23eb7385175_prof);

        
        $__internal_568d8edb0599eceecd787197ae45f06fe5e1478294e076c89821a43951c48525->leave($__internal_568d8edb0599eceecd787197ae45f06fe5e1478294e076c89821a43951c48525_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_21b3310db98efc8c72bce653ab645d36afc52c454a397a4309b8b68048bd065c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21b3310db98efc8c72bce653ab645d36afc52c454a397a4309b8b68048bd065c->enter($__internal_21b3310db98efc8c72bce653ab645d36afc52c454a397a4309b8b68048bd065c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_4c64d995484eb2cfb4f9c3bf5ef930067edf2040a5faffd493abc6489669c20a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c64d995484eb2cfb4f9c3bf5ef930067edf2040a5faffd493abc6489669c20a->enter($__internal_4c64d995484eb2cfb4f9c3bf5ef930067edf2040a5faffd493abc6489669c20a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_4c64d995484eb2cfb4f9c3bf5ef930067edf2040a5faffd493abc6489669c20a->leave($__internal_4c64d995484eb2cfb4f9c3bf5ef930067edf2040a5faffd493abc6489669c20a_prof);

        
        $__internal_21b3310db98efc8c72bce653ab645d36afc52c454a397a4309b8b68048bd065c->leave($__internal_21b3310db98efc8c72bce653ab645d36afc52c454a397a4309b8b68048bd065c_prof);

    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_1b0e80544bea3620e3d6e819e1816da1e5a5c719483a70b0a8f3a36f04550dbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b0e80544bea3620e3d6e819e1816da1e5a5c719483a70b0a8f3a36f04550dbf->enter($__internal_1b0e80544bea3620e3d6e819e1816da1e5a5c719483a70b0a8f3a36f04550dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_3aa964b1fdfd0962e52baa40aef5d593f8bcb86bada9859997f2379a5b8be324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aa964b1fdfd0962e52baa40aef5d593f8bcb86bada9859997f2379a5b8be324->enter($__internal_3aa964b1fdfd0962e52baa40aef5d593f8bcb86bada9859997f2379a5b8be324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 22
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'form');
        echo "
    ";
        
        $__internal_3aa964b1fdfd0962e52baa40aef5d593f8bcb86bada9859997f2379a5b8be324->leave($__internal_3aa964b1fdfd0962e52baa40aef5d593f8bcb86bada9859997f2379a5b8be324_prof);

        
        $__internal_1b0e80544bea3620e3d6e819e1816da1e5a5c719483a70b0a8f3a36f04550dbf->leave($__internal_1b0e80544bea3620e3d6e819e1816da1e5a5c719483a70b0a8f3a36f04550dbf_prof);

    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_34c6e0a404b30edd3a00d8fdb0d007c01f6142e523b4edf0b71e03bb9d1856c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34c6e0a404b30edd3a00d8fdb0d007c01f6142e523b4edf0b71e03bb9d1856c8->enter($__internal_34c6e0a404b30edd3a00d8fdb0d007c01f6142e523b4edf0b71e03bb9d1856c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_20e0f745dda87a0f4a2a5dcdb0e8134b4b134ba8b85577b5257888214fb7932e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e0f745dda87a0f4a2a5dcdb0e8134b4b134ba8b85577b5257888214fb7932e->enter($__internal_20e0f745dda87a0f4a2a5dcdb0e8134b4b134ba8b85577b5257888214fb7932e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

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
        
        $__internal_20e0f745dda87a0f4a2a5dcdb0e8134b4b134ba8b85577b5257888214fb7932e->leave($__internal_20e0f745dda87a0f4a2a5dcdb0e8134b4b134ba8b85577b5257888214fb7932e_prof);

        
        $__internal_34c6e0a404b30edd3a00d8fdb0d007c01f6142e523b4edf0b71e03bb9d1856c8->leave($__internal_34c6e0a404b30edd3a00d8fdb0d007c01f6142e523b4edf0b71e03bb9d1856c8_prof);

    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_40a38c8eed057a0fb02935dfdd4a7f594d7070a990ecc15ae86bd5e7780ca97f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40a38c8eed057a0fb02935dfdd4a7f594d7070a990ecc15ae86bd5e7780ca97f->enter($__internal_40a38c8eed057a0fb02935dfdd4a7f594d7070a990ecc15ae86bd5e7780ca97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_f55ed9deee7a665435d08db3059f6c4bea226622ca18c726214c7b98fadc52ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f55ed9deee7a665435d08db3059f6c4bea226622ca18c726214c7b98fadc52ed->enter($__internal_f55ed9deee7a665435d08db3059f6c4bea226622ca18c726214c7b98fadc52ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_f55ed9deee7a665435d08db3059f6c4bea226622ca18c726214c7b98fadc52ed->leave($__internal_f55ed9deee7a665435d08db3059f6c4bea226622ca18c726214c7b98fadc52ed_prof);

        
        $__internal_40a38c8eed057a0fb02935dfdd4a7f594d7070a990ecc15ae86bd5e7780ca97f->leave($__internal_40a38c8eed057a0fb02935dfdd4a7f594d7070a990ecc15ae86bd5e7780ca97f_prof);

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
