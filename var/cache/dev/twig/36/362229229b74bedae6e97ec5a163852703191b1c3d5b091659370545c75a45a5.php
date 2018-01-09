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
        $__internal_11a6bc7e0ad5f87b13c5af433032aa2db1bade0e1bba27f7faf6fd26ead2919b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11a6bc7e0ad5f87b13c5af433032aa2db1bade0e1bba27f7faf6fd26ead2919b->enter($__internal_11a6bc7e0ad5f87b13c5af433032aa2db1bade0e1bba27f7faf6fd26ead2919b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        $__internal_6ebffbc856dc013831bfea4049b4a62a5f1d3fac175ffee4f054bb9a109fff40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ebffbc856dc013831bfea4049b4a62a5f1d3fac175ffee4f054bb9a109fff40->enter($__internal_6ebffbc856dc013831bfea4049b4a62a5f1d3fac175ffee4f054bb9a109fff40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"), true);
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 4, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 4, $this->getSourceContext()); })()), "primary_key_field_name", array()));
        // line 5
        $context["__internal_e3293423e694d043a88f688fdc8629aecd8fa7c11a0009df1fa31cc7b156ef2b"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 5, $this->getSourceContext()); })()), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 6, $this->getSourceContext()); })()), "name", array()), array(),         // line 5
(isset($context["__internal_e3293423e694d043a88f688fdc8629aecd8fa7c11a0009df1fa31cc7b156ef2b"]) || array_key_exists("__internal_e3293423e694d043a88f688fdc8629aecd8fa7c11a0009df1fa31cc7b156ef2b", $context) ? $context["__internal_e3293423e694d043a88f688fdc8629aecd8fa7c11a0009df1fa31cc7b156ef2b"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_e3293423e694d043a88f688fdc8629aecd8fa7c11a0009df1fa31cc7b156ef2b" does not exist.', 5, $this->getSourceContext()); })())), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(),         // line 6
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 6, $this->getSourceContext()); })()), "label", array()), array(),         // line 5
(isset($context["__internal_e3293423e694d043a88f688fdc8629aecd8fa7c11a0009df1fa31cc7b156ef2b"]) || array_key_exists("__internal_e3293423e694d043a88f688fdc8629aecd8fa7c11a0009df1fa31cc7b156ef2b", $context) ? $context["__internal_e3293423e694d043a88f688fdc8629aecd8fa7c11a0009df1fa31cc7b156ef2b"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_e3293423e694d043a88f688fdc8629aecd8fa7c11a0009df1fa31cc7b156ef2b" does not exist.', 5, $this->getSourceContext()); })())), "%entity_id%" =>         // line 6
(isset($context["_entity_id"]) || array_key_exists("_entity_id", $context) ? $context["_entity_id"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_id" does not exist.', 6, $this->getSourceContext()); })()));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11a6bc7e0ad5f87b13c5af433032aa2db1bade0e1bba27f7faf6fd26ead2919b->leave($__internal_11a6bc7e0ad5f87b13c5af433032aa2db1bade0e1bba27f7faf6fd26ead2919b_prof);

        
        $__internal_6ebffbc856dc013831bfea4049b4a62a5f1d3fac175ffee4f054bb9a109fff40->leave($__internal_6ebffbc856dc013831bfea4049b4a62a5f1d3fac175ffee4f054bb9a109fff40_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_49eeb630818554863e8563fb72da6936dabb41c66e69662d064bd1264d3d73a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49eeb630818554863e8563fb72da6936dabb41c66e69662d064bd1264d3d73a9->enter($__internal_49eeb630818554863e8563fb72da6936dabb41c66e69662d064bd1264d3d73a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_96943f572872ea831bd6f7551660d5abf0bb6bb50e72fdb362c9e5b812a9f116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96943f572872ea831bd6f7551660d5abf0bb6bb50e72fdb362c9e5b812a9f116->enter($__internal_96943f572872ea831bd6f7551660d5abf0bb6bb50e72fdb362c9e5b812a9f116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 10, $this->getSourceContext()); })()), "name", array())) . "-") . (isset($context["_entity_id"]) || array_key_exists("_entity_id", $context) ? $context["_entity_id"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_id" does not exist.', 10, $this->getSourceContext()); })())), "html", null, true);
        
        $__internal_96943f572872ea831bd6f7551660d5abf0bb6bb50e72fdb362c9e5b812a9f116->leave($__internal_96943f572872ea831bd6f7551660d5abf0bb6bb50e72fdb362c9e5b812a9f116_prof);

        
        $__internal_49eeb630818554863e8563fb72da6936dabb41c66e69662d064bd1264d3d73a9->leave($__internal_49eeb630818554863e8563fb72da6936dabb41c66e69662d064bd1264d3d73a9_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_4c63226c1bd7b5c320360a41a96d7365fce566126d5e98d1492b22878a99b8de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c63226c1bd7b5c320360a41a96d7365fce566126d5e98d1492b22878a99b8de->enter($__internal_4c63226c1bd7b5c320360a41a96d7365fce566126d5e98d1492b22878a99b8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_f0c22756b3f795c0612c3d5b72a5e14485e1319703814c02a9e534a5ab827f5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0c22756b3f795c0612c3d5b72a5e14485e1319703814c02a9e534a5ab827f5f->enter($__internal_f0c22756b3f795c0612c3d5b72a5e14485e1319703814c02a9e534a5ab827f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 11, $this->getSourceContext()); })()), "name", array()))), "html", null, true);
        
        $__internal_f0c22756b3f795c0612c3d5b72a5e14485e1319703814c02a9e534a5ab827f5f->leave($__internal_f0c22756b3f795c0612c3d5b72a5e14485e1319703814c02a9e534a5ab827f5f_prof);

        
        $__internal_4c63226c1bd7b5c320360a41a96d7365fce566126d5e98d1492b22878a99b8de->leave($__internal_4c63226c1bd7b5c320360a41a96d7365fce566126d5e98d1492b22878a99b8de_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_7bd7cee6feeb90cbb31817e5257c6ce20db5c93af5f64683ed50c6ff0d5c949c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bd7cee6feeb90cbb31817e5257c6ce20db5c93af5f64683ed50c6ff0d5c949c->enter($__internal_7bd7cee6feeb90cbb31817e5257c6ce20db5c93af5f64683ed50c6ff0d5c949c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_9b4f03cec38fb575be70d970ffafab7c68bfa2b9dee983cd5b86a06aece56204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b4f03cec38fb575be70d970ffafab7c68bfa2b9dee983cd5b86a06aece56204->enter($__internal_9b4f03cec38fb575be70d970ffafab7c68bfa2b9dee983cd5b86a06aece56204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.page_title", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 15, $this->getSourceContext()); })()), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 16, $this->getSourceContext()); })()), "edit", array()), "title", array()), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 16, $this->getSourceContext()); })()),         // line 5
(isset($context["__internal_e3293423e694d043a88f688fdc8629aecd8fa7c11a0009df1fa31cc7b156ef2b"]) || array_key_exists("__internal_e3293423e694d043a88f688fdc8629aecd8fa7c11a0009df1fa31cc7b156ef2b", $context) ? $context["__internal_e3293423e694d043a88f688fdc8629aecd8fa7c11a0009df1fa31cc7b156ef2b"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_e3293423e694d043a88f688fdc8629aecd8fa7c11a0009df1fa31cc7b156ef2b" does not exist.', 5, $this->getSourceContext()); })()))) : (        // line 16
(isset($context["_default_title"]) || array_key_exists("_default_title", $context) ? $context["_default_title"] : (function () { throw new Twig_Error_Runtime('Variable "_default_title" does not exist.', 16, $this->getSourceContext()); })()))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9b4f03cec38fb575be70d970ffafab7c68bfa2b9dee983cd5b86a06aece56204->leave($__internal_9b4f03cec38fb575be70d970ffafab7c68bfa2b9dee983cd5b86a06aece56204_prof);

        
        $__internal_7bd7cee6feeb90cbb31817e5257c6ce20db5c93af5f64683ed50c6ff0d5c949c->leave($__internal_7bd7cee6feeb90cbb31817e5257c6ce20db5c93af5f64683ed50c6ff0d5c949c_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_9beb6af4f8693b0f490396fe9b7d95398baacb0de7fda5b5c26835c9a28fa5fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9beb6af4f8693b0f490396fe9b7d95398baacb0de7fda5b5c26835c9a28fa5fe->enter($__internal_9beb6af4f8693b0f490396fe9b7d95398baacb0de7fda5b5c26835c9a28fa5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_49e7cbd9eb225fb1c271f364be055adb60caacf2da3061908bdc4e1d61f905e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49e7cbd9eb225fb1c271f364be055adb60caacf2da3061908bdc4e1d61f905e7->enter($__internal_49e7cbd9eb225fb1c271f364be055adb60caacf2da3061908bdc4e1d61f905e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_49e7cbd9eb225fb1c271f364be055adb60caacf2da3061908bdc4e1d61f905e7->leave($__internal_49e7cbd9eb225fb1c271f364be055adb60caacf2da3061908bdc4e1d61f905e7_prof);

        
        $__internal_9beb6af4f8693b0f490396fe9b7d95398baacb0de7fda5b5c26835c9a28fa5fe->leave($__internal_9beb6af4f8693b0f490396fe9b7d95398baacb0de7fda5b5c26835c9a28fa5fe_prof);

    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_9a3b565d9dd1ca6ed14558bdec30a55ab72b7a399b5b32ea0f3cc98520473a8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a3b565d9dd1ca6ed14558bdec30a55ab72b7a399b5b32ea0f3cc98520473a8f->enter($__internal_9a3b565d9dd1ca6ed14558bdec30a55ab72b7a399b5b32ea0f3cc98520473a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_53b2391b0279c7205ceb4b140af7d52de06bd6295038ae7d2b36edc968012418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53b2391b0279c7205ceb4b140af7d52de06bd6295038ae7d2b36edc968012418->enter($__internal_53b2391b0279c7205ceb4b140af7d52de06bd6295038ae7d2b36edc968012418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 22
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'form');
        echo "
    ";
        
        $__internal_53b2391b0279c7205ceb4b140af7d52de06bd6295038ae7d2b36edc968012418->leave($__internal_53b2391b0279c7205ceb4b140af7d52de06bd6295038ae7d2b36edc968012418_prof);

        
        $__internal_9a3b565d9dd1ca6ed14558bdec30a55ab72b7a399b5b32ea0f3cc98520473a8f->leave($__internal_9a3b565d9dd1ca6ed14558bdec30a55ab72b7a399b5b32ea0f3cc98520473a8f_prof);

    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_420f0335b7346fac3b255d344d983bbe64bc010e9ba8d52f16dd79f6be1934be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_420f0335b7346fac3b255d344d983bbe64bc010e9ba8d52f16dd79f6be1934be->enter($__internal_420f0335b7346fac3b255d344d983bbe64bc010e9ba8d52f16dd79f6be1934be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_cac9a79ca29a62c8c7812d786355d300136ae74e77f31ed1f605c6cbd8172448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac9a79ca29a62c8c7812d786355d300136ae74e77f31ed1f605c6cbd8172448->enter($__internal_cac9a79ca29a62c8c7812d786355d300136ae74e77f31ed1f605c6cbd8172448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

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
        
        $__internal_cac9a79ca29a62c8c7812d786355d300136ae74e77f31ed1f605c6cbd8172448->leave($__internal_cac9a79ca29a62c8c7812d786355d300136ae74e77f31ed1f605c6cbd8172448_prof);

        
        $__internal_420f0335b7346fac3b255d344d983bbe64bc010e9ba8d52f16dd79f6be1934be->leave($__internal_420f0335b7346fac3b255d344d983bbe64bc010e9ba8d52f16dd79f6be1934be_prof);

    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_00324741a4f903c8b838937784e4fd83c4fe367ba18a651e2a6a8bbfd3b333c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00324741a4f903c8b838937784e4fd83c4fe367ba18a651e2a6a8bbfd3b333c6->enter($__internal_00324741a4f903c8b838937784e4fd83c4fe367ba18a651e2a6a8bbfd3b333c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_73b4f4e0444d0a8c264e275d735366b7d9c31e1edfaa26c2f102b733d12e0b65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73b4f4e0444d0a8c264e275d735366b7d9c31e1edfaa26c2f102b733d12e0b65->enter($__internal_73b4f4e0444d0a8c264e275d735366b7d9c31e1edfaa26c2f102b733d12e0b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_73b4f4e0444d0a8c264e275d735366b7d9c31e1edfaa26c2f102b733d12e0b65->leave($__internal_73b4f4e0444d0a8c264e275d735366b7d9c31e1edfaa26c2f102b733d12e0b65_prof);

        
        $__internal_00324741a4f903c8b838937784e4fd83c4fe367ba18a651e2a6a8bbfd3b333c6->leave($__internal_00324741a4f903c8b838937784e4fd83c4fe367ba18a651e2a6a8bbfd3b333c6_prof);

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
", "EasyAdminBundle:default:edit.html.twig", "/var/www/monsite1/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/edit.html.twig");
    }
}
