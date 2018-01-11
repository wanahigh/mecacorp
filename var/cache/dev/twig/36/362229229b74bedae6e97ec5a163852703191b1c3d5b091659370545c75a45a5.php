<?php

/* @EasyAdmin/default/edit.html.twig */
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 8, $this->getSourceContext()); })()), "templates", array()), "layout", array()), "@EasyAdmin/default/edit.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cfa2aa7d3a53670eb52eb455f21b6d32a8b743cc6f853107330e960b40c3fa3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfa2aa7d3a53670eb52eb455f21b6d32a8b743cc6f853107330e960b40c3fa3a->enter($__internal_cfa2aa7d3a53670eb52eb455f21b6d32a8b743cc6f853107330e960b40c3fa3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/edit.html.twig"));

        $__internal_a8efc2cc27aaf3d2d51b1cd28a0f9051eaf81d2a18e2320afcf81e826be0d86e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8efc2cc27aaf3d2d51b1cd28a0f9051eaf81d2a18e2320afcf81e826be0d86e->enter($__internal_a8efc2cc27aaf3d2d51b1cd28a0f9051eaf81d2a18e2320afcf81e826be0d86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/edit.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"), true);
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 4, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 4, $this->getSourceContext()); })()), "primary_key_field_name", array()));
        // line 5
        $context["__internal_6594a7193dc6317871eb40cf1f4e2ae62b4f3bea4d740a7bfa1b90f833f68b26"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 5, $this->getSourceContext()); })()), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 6, $this->getSourceContext()); })()), "name", array()), array(),         // line 5
(isset($context["__internal_6594a7193dc6317871eb40cf1f4e2ae62b4f3bea4d740a7bfa1b90f833f68b26"]) || array_key_exists("__internal_6594a7193dc6317871eb40cf1f4e2ae62b4f3bea4d740a7bfa1b90f833f68b26", $context) ? $context["__internal_6594a7193dc6317871eb40cf1f4e2ae62b4f3bea4d740a7bfa1b90f833f68b26"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_6594a7193dc6317871eb40cf1f4e2ae62b4f3bea4d740a7bfa1b90f833f68b26" does not exist.', 5, $this->getSourceContext()); })())), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(),         // line 6
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 6, $this->getSourceContext()); })()), "label", array()), array(),         // line 5
(isset($context["__internal_6594a7193dc6317871eb40cf1f4e2ae62b4f3bea4d740a7bfa1b90f833f68b26"]) || array_key_exists("__internal_6594a7193dc6317871eb40cf1f4e2ae62b4f3bea4d740a7bfa1b90f833f68b26", $context) ? $context["__internal_6594a7193dc6317871eb40cf1f4e2ae62b4f3bea4d740a7bfa1b90f833f68b26"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_6594a7193dc6317871eb40cf1f4e2ae62b4f3bea4d740a7bfa1b90f833f68b26" does not exist.', 5, $this->getSourceContext()); })())), "%entity_id%" =>         // line 6
(isset($context["_entity_id"]) || array_key_exists("_entity_id", $context) ? $context["_entity_id"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_id" does not exist.', 6, $this->getSourceContext()); })()));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfa2aa7d3a53670eb52eb455f21b6d32a8b743cc6f853107330e960b40c3fa3a->leave($__internal_cfa2aa7d3a53670eb52eb455f21b6d32a8b743cc6f853107330e960b40c3fa3a_prof);

        
        $__internal_a8efc2cc27aaf3d2d51b1cd28a0f9051eaf81d2a18e2320afcf81e826be0d86e->leave($__internal_a8efc2cc27aaf3d2d51b1cd28a0f9051eaf81d2a18e2320afcf81e826be0d86e_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_e2d12593a4ff2a946074ae2cbce1ee4aa63eae749d4bc8260c3f8946d935e849 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2d12593a4ff2a946074ae2cbce1ee4aa63eae749d4bc8260c3f8946d935e849->enter($__internal_e2d12593a4ff2a946074ae2cbce1ee4aa63eae749d4bc8260c3f8946d935e849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_43aa90e72e617c5c415cc82e90fafa674303d1c70fb981973dc4b325f6d999bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43aa90e72e617c5c415cc82e90fafa674303d1c70fb981973dc4b325f6d999bc->enter($__internal_43aa90e72e617c5c415cc82e90fafa674303d1c70fb981973dc4b325f6d999bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 10, $this->getSourceContext()); })()), "name", array())) . "-") . (isset($context["_entity_id"]) || array_key_exists("_entity_id", $context) ? $context["_entity_id"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_id" does not exist.', 10, $this->getSourceContext()); })())), "html", null, true);
        
        $__internal_43aa90e72e617c5c415cc82e90fafa674303d1c70fb981973dc4b325f6d999bc->leave($__internal_43aa90e72e617c5c415cc82e90fafa674303d1c70fb981973dc4b325f6d999bc_prof);

        
        $__internal_e2d12593a4ff2a946074ae2cbce1ee4aa63eae749d4bc8260c3f8946d935e849->leave($__internal_e2d12593a4ff2a946074ae2cbce1ee4aa63eae749d4bc8260c3f8946d935e849_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_6485ff5008d838735be53d7e3692d939a079a6bf934e23456fc2d9a726e985cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6485ff5008d838735be53d7e3692d939a079a6bf934e23456fc2d9a726e985cd->enter($__internal_6485ff5008d838735be53d7e3692d939a079a6bf934e23456fc2d9a726e985cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_fe0f9c2b03bba4b8f690ca4487a97dab18c002de2a224355d743e5dbc2850a14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe0f9c2b03bba4b8f690ca4487a97dab18c002de2a224355d743e5dbc2850a14->enter($__internal_fe0f9c2b03bba4b8f690ca4487a97dab18c002de2a224355d743e5dbc2850a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 11, $this->getSourceContext()); })()), "name", array()))), "html", null, true);
        
        $__internal_fe0f9c2b03bba4b8f690ca4487a97dab18c002de2a224355d743e5dbc2850a14->leave($__internal_fe0f9c2b03bba4b8f690ca4487a97dab18c002de2a224355d743e5dbc2850a14_prof);

        
        $__internal_6485ff5008d838735be53d7e3692d939a079a6bf934e23456fc2d9a726e985cd->leave($__internal_6485ff5008d838735be53d7e3692d939a079a6bf934e23456fc2d9a726e985cd_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_ce29e20b134e06a25edabb55ab56b6b1a10886a3f0531abf29be2b0c8a54a607 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce29e20b134e06a25edabb55ab56b6b1a10886a3f0531abf29be2b0c8a54a607->enter($__internal_ce29e20b134e06a25edabb55ab56b6b1a10886a3f0531abf29be2b0c8a54a607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_bbea99b7e235dad3d5ad47001d3e5bd555a00a8165212ad3be3fc81f4e642f3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbea99b7e235dad3d5ad47001d3e5bd555a00a8165212ad3be3fc81f4e642f3b->enter($__internal_bbea99b7e235dad3d5ad47001d3e5bd555a00a8165212ad3be3fc81f4e642f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.page_title", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 15, $this->getSourceContext()); })()), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 16, $this->getSourceContext()); })()), "edit", array()), "title", array()), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 16, $this->getSourceContext()); })()),         // line 5
(isset($context["__internal_6594a7193dc6317871eb40cf1f4e2ae62b4f3bea4d740a7bfa1b90f833f68b26"]) || array_key_exists("__internal_6594a7193dc6317871eb40cf1f4e2ae62b4f3bea4d740a7bfa1b90f833f68b26", $context) ? $context["__internal_6594a7193dc6317871eb40cf1f4e2ae62b4f3bea4d740a7bfa1b90f833f68b26"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_6594a7193dc6317871eb40cf1f4e2ae62b4f3bea4d740a7bfa1b90f833f68b26" does not exist.', 5, $this->getSourceContext()); })()))) : (        // line 16
(isset($context["_default_title"]) || array_key_exists("_default_title", $context) ? $context["_default_title"] : (function () { throw new Twig_Error_Runtime('Variable "_default_title" does not exist.', 16, $this->getSourceContext()); })()))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_bbea99b7e235dad3d5ad47001d3e5bd555a00a8165212ad3be3fc81f4e642f3b->leave($__internal_bbea99b7e235dad3d5ad47001d3e5bd555a00a8165212ad3be3fc81f4e642f3b_prof);

        
        $__internal_ce29e20b134e06a25edabb55ab56b6b1a10886a3f0531abf29be2b0c8a54a607->leave($__internal_ce29e20b134e06a25edabb55ab56b6b1a10886a3f0531abf29be2b0c8a54a607_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_da4d59265b819ac3efdd5300f8006678a35067f6fccb2250fc927076133d57fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da4d59265b819ac3efdd5300f8006678a35067f6fccb2250fc927076133d57fb->enter($__internal_da4d59265b819ac3efdd5300f8006678a35067f6fccb2250fc927076133d57fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_ced826c28c53ee6b6956d76b05995fa838716c6535eb113da9633b8f26c6e1a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ced826c28c53ee6b6956d76b05995fa838716c6535eb113da9633b8f26c6e1a2->enter($__internal_ced826c28c53ee6b6956d76b05995fa838716c6535eb113da9633b8f26c6e1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_ced826c28c53ee6b6956d76b05995fa838716c6535eb113da9633b8f26c6e1a2->leave($__internal_ced826c28c53ee6b6956d76b05995fa838716c6535eb113da9633b8f26c6e1a2_prof);

        
        $__internal_da4d59265b819ac3efdd5300f8006678a35067f6fccb2250fc927076133d57fb->leave($__internal_da4d59265b819ac3efdd5300f8006678a35067f6fccb2250fc927076133d57fb_prof);

    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_668077a4a20120898eea01e9ed733014515e143abbbf79e5fcaac3c54df16446 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_668077a4a20120898eea01e9ed733014515e143abbbf79e5fcaac3c54df16446->enter($__internal_668077a4a20120898eea01e9ed733014515e143abbbf79e5fcaac3c54df16446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_8c51fa7dcaa2e1949c7b7fdfb1ac5aeb39b7643dc19793bb20428f4edad7d06d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c51fa7dcaa2e1949c7b7fdfb1ac5aeb39b7643dc19793bb20428f4edad7d06d->enter($__internal_8c51fa7dcaa2e1949c7b7fdfb1ac5aeb39b7643dc19793bb20428f4edad7d06d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 22
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'form');
        echo "
    ";
        
        $__internal_8c51fa7dcaa2e1949c7b7fdfb1ac5aeb39b7643dc19793bb20428f4edad7d06d->leave($__internal_8c51fa7dcaa2e1949c7b7fdfb1ac5aeb39b7643dc19793bb20428f4edad7d06d_prof);

        
        $__internal_668077a4a20120898eea01e9ed733014515e143abbbf79e5fcaac3c54df16446->leave($__internal_668077a4a20120898eea01e9ed733014515e143abbbf79e5fcaac3c54df16446_prof);

    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_c40cb5b99ef5df96f60f1c4703008be20fe1651827ae2bedd8c5359a2426ce3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c40cb5b99ef5df96f60f1c4703008be20fe1651827ae2bedd8c5359a2426ce3f->enter($__internal_c40cb5b99ef5df96f60f1c4703008be20fe1651827ae2bedd8c5359a2426ce3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_07b347f9c4323f19124644a4fb401612343f500e7d6cdd32b16796b7d252eaa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07b347f9c4323f19124644a4fb401612343f500e7d6cdd32b16796b7d252eaa0->enter($__internal_07b347f9c4323f19124644a4fb401612343f500e7d6cdd32b16796b7d252eaa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

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
        
        $__internal_07b347f9c4323f19124644a4fb401612343f500e7d6cdd32b16796b7d252eaa0->leave($__internal_07b347f9c4323f19124644a4fb401612343f500e7d6cdd32b16796b7d252eaa0_prof);

        
        $__internal_c40cb5b99ef5df96f60f1c4703008be20fe1651827ae2bedd8c5359a2426ce3f->leave($__internal_c40cb5b99ef5df96f60f1c4703008be20fe1651827ae2bedd8c5359a2426ce3f_prof);

    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_c8f25be7a6f4945436a7b73a65f99e28fd1fc357be5e0bf11765e0bbfc73c151 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8f25be7a6f4945436a7b73a65f99e28fd1fc357be5e0bf11765e0bbfc73c151->enter($__internal_c8f25be7a6f4945436a7b73a65f99e28fd1fc357be5e0bf11765e0bbfc73c151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_c361172cda9caad8c63f9fdcedb18f2e5adb8c34e7f3ed5781eb2199515d5840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c361172cda9caad8c63f9fdcedb18f2e5adb8c34e7f3ed5781eb2199515d5840->enter($__internal_c361172cda9caad8c63f9fdcedb18f2e5adb8c34e7f3ed5781eb2199515d5840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_c361172cda9caad8c63f9fdcedb18f2e5adb8c34e7f3ed5781eb2199515d5840->leave($__internal_c361172cda9caad8c63f9fdcedb18f2e5adb8c34e7f3ed5781eb2199515d5840_prof);

        
        $__internal_c8f25be7a6f4945436a7b73a65f99e28fd1fc357be5e0bf11765e0bbfc73c151->leave($__internal_c8f25be7a6f4945436a7b73a65f99e28fd1fc357be5e0bf11765e0bbfc73c151_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/edit.html.twig";
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
", "@EasyAdmin/default/edit.html.twig", "/home/fabien/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/edit.html.twig");
    }
}
