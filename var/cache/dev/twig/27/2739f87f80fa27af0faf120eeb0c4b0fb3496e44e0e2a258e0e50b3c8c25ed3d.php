<?php

/* EasyAdminBundle:default:list.html.twig */
class __TwigTemplate_123acf2072929c8c732aec8b9720f49319ce23420248738b36489f1aeb146038 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'content_header' => array($this, 'block_content_header'),
            'content_title_wrapper' => array($this, 'block_content_title_wrapper'),
            'global_actions' => array($this, 'block_global_actions'),
            'search_action' => array($this, 'block_search_action'),
            'search_form' => array($this, 'block_search_form'),
            'new_action' => array($this, 'block_new_action'),
            'main' => array($this, 'block_main'),
            'table_head' => array($this, 'block_table_head'),
            'table_body' => array($this, 'block_table_body'),
            'item_actions' => array($this, 'block_item_actions'),
            'paginator' => array($this, 'block_paginator'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 5, $this->getSourceContext()); })()), "templates", array()), "layout", array()), "EasyAdminBundle:default:list.html.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7517daaebc240d49657f07531455a27c21233be0f22b22297dca2ef8a946291b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7517daaebc240d49657f07531455a27c21233be0f22b22297dca2ef8a946291b->enter($__internal_7517daaebc240d49657f07531455a27c21233be0f22b22297dca2ef8a946291b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:list.html.twig"));

        $__internal_28358eaa0d44c09912fddfa3dc9ac102eeb44a6e4aa80342167d7bbe9b1604a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28358eaa0d44c09912fddfa3dc9ac102eeb44a6e4aa80342167d7bbe9b1604a1->enter($__internal_28358eaa0d44c09912fddfa3dc9ac102eeb44a6e4aa80342167d7bbe9b1604a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:list.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 2
        $context["__internal_9ce38ef55122cb07d28a439f0706bb726f2728d733eb98ad468a30264e4c2170"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 2, $this->getSourceContext()); })()), "translation_domain", array());
        // line 3
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 3, $this->getSourceContext()); })()), "name", array()), array(),         // line 2
(isset($context["__internal_9ce38ef55122cb07d28a439f0706bb726f2728d733eb98ad468a30264e4c2170"]) || array_key_exists("__internal_9ce38ef55122cb07d28a439f0706bb726f2728d733eb98ad468a30264e4c2170", $context) ? $context["__internal_9ce38ef55122cb07d28a439f0706bb726f2728d733eb98ad468a30264e4c2170"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_9ce38ef55122cb07d28a439f0706bb726f2728d733eb98ad468a30264e4c2170" does not exist.', 2, $this->getSourceContext()); })())), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(),         // line 3
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 3, $this->getSourceContext()); })()), "label", array()), array(),         // line 2
(isset($context["__internal_9ce38ef55122cb07d28a439f0706bb726f2728d733eb98ad468a30264e4c2170"]) || array_key_exists("__internal_9ce38ef55122cb07d28a439f0706bb726f2728d733eb98ad468a30264e4c2170", $context) ? $context["__internal_9ce38ef55122cb07d28a439f0706bb726f2728d733eb98ad468a30264e4c2170"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_9ce38ef55122cb07d28a439f0706bb726f2728d733eb98ad468a30264e4c2170" does not exist.', 2, $this->getSourceContext()); })())));
        // line 7
        $context["_request_parameters"] = twig_array_merge(((array_key_exists("_request_parameters", $context)) ? (_twig_default_filter((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 7, $this->getSourceContext()); })()), array())) : (array())), array("action" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 8
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 8, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "action"), "method"), "entity" => twig_get_attribute($this->env, $this->getSourceContext(),         // line 9
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 9, $this->getSourceContext()); })()), "name", array()), "menuIndex" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 10
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "menuIndex"), "method"), "submenuIndex" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 11
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 11, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "submenuIndex"), "method"), "sortField" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 12
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "sortField", 1 => ""), "method"), "sortDirection" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 13
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 13, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "sortDirection", 1 => "DESC"), "method"), "page" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 14
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 14, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "page", 1 => 1), "method")));
        // line 17
        if (("search" == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 17, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 18
            $context["_request_parameters"] = twig_array_merge((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 18, $this->getSourceContext()); })()), array("query" => ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 19
($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "sortField" => ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 20
($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "field", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "field", array()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 20, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "sortField", 1 => ""), "method"))) : (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 20, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "sortField", 1 => ""), "method"))), "sortDirection" => ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 21
($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "direction", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "direction", array()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 21, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "sortDirection", 1 => "DESC"), "method"))) : (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 21, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "sortDirection", 1 => "DESC"), "method")))));
        }
        // line 25
        $context["_request_parameters"] = twig_array_merge((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 25, $this->getSourceContext()); })()), array("referer" => twig_urlencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 25, $this->getSourceContext()); })())))));
        // line 5
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7517daaebc240d49657f07531455a27c21233be0f22b22297dca2ef8a946291b->leave($__internal_7517daaebc240d49657f07531455a27c21233be0f22b22297dca2ef8a946291b_prof);

        
        $__internal_28358eaa0d44c09912fddfa3dc9ac102eeb44a6e4aa80342167d7bbe9b1604a1->leave($__internal_28358eaa0d44c09912fddfa3dc9ac102eeb44a6e4aa80342167d7bbe9b1604a1_prof);

    }

    // line 27
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_b66fa17f897b18a05a2d25a2edcda49f4719c43c0176be8d40ab4dfa8270f7aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b66fa17f897b18a05a2d25a2edcda49f4719c43c0176be8d40ab4dfa8270f7aa->enter($__internal_b66fa17f897b18a05a2d25a2edcda49f4719c43c0176be8d40ab4dfa8270f7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_d12c49543a1a3342fb075bae5acd1ebdfc98f462066b1f7d19f24c17104e8e21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d12c49543a1a3342fb075bae5acd1ebdfc98f462066b1f7d19f24c17104e8e21->enter($__internal_d12c49543a1a3342fb075bae5acd1ebdfc98f462066b1f7d19f24c17104e8e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-list-" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 27, $this->getSourceContext()); })()), "name", array())), "html", null, true);
        
        $__internal_d12c49543a1a3342fb075bae5acd1ebdfc98f462066b1f7d19f24c17104e8e21->leave($__internal_d12c49543a1a3342fb075bae5acd1ebdfc98f462066b1f7d19f24c17104e8e21_prof);

        
        $__internal_b66fa17f897b18a05a2d25a2edcda49f4719c43c0176be8d40ab4dfa8270f7aa->leave($__internal_b66fa17f897b18a05a2d25a2edcda49f4719c43c0176be8d40ab4dfa8270f7aa_prof);

    }

    // line 28
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_1f543b39c33fc246d703d6f4a94e997b4c20d38233bd53c6a5232be78f689565 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f543b39c33fc246d703d6f4a94e997b4c20d38233bd53c6a5232be78f689565->enter($__internal_1f543b39c33fc246d703d6f4a94e997b4c20d38233bd53c6a5232be78f689565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_2b0e1e288b8681ba3fd74f839c5ca5db4c2063106dbfea6d6fa4a604ec3b63b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b0e1e288b8681ba3fd74f839c5ca5db4c2063106dbfea6d6fa4a604ec3b63b4->enter($__internal_2b0e1e288b8681ba3fd74f839c5ca5db4c2063106dbfea6d6fa4a604ec3b63b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("list list-" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 28, $this->getSourceContext()); })()), "name", array()))), "html", null, true);
        
        $__internal_2b0e1e288b8681ba3fd74f839c5ca5db4c2063106dbfea6d6fa4a604ec3b63b4->leave($__internal_2b0e1e288b8681ba3fd74f839c5ca5db4c2063106dbfea6d6fa4a604ec3b63b4_prof);

        
        $__internal_1f543b39c33fc246d703d6f4a94e997b4c20d38233bd53c6a5232be78f689565->leave($__internal_1f543b39c33fc246d703d6f4a94e997b4c20d38233bd53c6a5232be78f689565_prof);

    }

    // line 30
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_95871e967caa3ee0f694c578fdaf0976f2e4ff23ce1617386e7f0e36ac7e5e63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95871e967caa3ee0f694c578fdaf0976f2e4ff23ce1617386e7f0e36ac7e5e63->enter($__internal_95871e967caa3ee0f694c578fdaf0976f2e4ff23ce1617386e7f0e36ac7e5e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_64be59d14c89b55ae42cb176fbd8fd2ee5ffd8dabc5da271bb4daeceb90499ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64be59d14c89b55ae42cb176fbd8fd2ee5ffd8dabc5da271bb4daeceb90499ef->enter($__internal_64be59d14c89b55ae42cb176fbd8fd2ee5ffd8dabc5da271bb4daeceb90499ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 31
        ob_start();
        // line 32
        echo "    ";
        if (("search" == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 32, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 33
            echo "        ";
            $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("search.page_title", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 33, $this->getSourceContext()); })()), "nbResults", array()), array(), "EasyAdminBundle");
            // line 34
            echo "        ";
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "search", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 34, $this->getSourceContext()); })()), "search", array()), "title", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 34, $this->getSourceContext()); })()), "nbResults", array()), array(),             // line 2
(isset($context["__internal_9ce38ef55122cb07d28a439f0706bb726f2728d733eb98ad468a30264e4c2170"]) || array_key_exists("__internal_9ce38ef55122cb07d28a439f0706bb726f2728d733eb98ad468a30264e4c2170", $context) ? $context["__internal_9ce38ef55122cb07d28a439f0706bb726f2728d733eb98ad468a30264e4c2170"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_9ce38ef55122cb07d28a439f0706bb726f2728d733eb98ad468a30264e4c2170" does not exist.', 2, $this->getSourceContext()); })()))) : (            // line 34
(isset($context["_default_title"]) || array_key_exists("_default_title", $context) ? $context["_default_title"] : (function () { throw new Twig_Error_Runtime('Variable "_default_title" does not exist.', 34, $this->getSourceContext()); })())));
            echo "
    ";
        } else {
            // line 36
            echo "        ";
            $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.page_title", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 36, $this->getSourceContext()); })()), "EasyAdminBundle");
            // line 37
            echo "        ";
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "list", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 37, $this->getSourceContext()); })()), "list", array()), "title", array()), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 37, $this->getSourceContext()); })()),             // line 2
(isset($context["__internal_9ce38ef55122cb07d28a439f0706bb726f2728d733eb98ad468a30264e4c2170"]) || array_key_exists("__internal_9ce38ef55122cb07d28a439f0706bb726f2728d733eb98ad468a30264e4c2170", $context) ? $context["__internal_9ce38ef55122cb07d28a439f0706bb726f2728d733eb98ad468a30264e4c2170"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_9ce38ef55122cb07d28a439f0706bb726f2728d733eb98ad468a30264e4c2170" does not exist.', 2, $this->getSourceContext()); })()))) : (            // line 37
(isset($context["_default_title"]) || array_key_exists("_default_title", $context) ? $context["_default_title"] : (function () { throw new Twig_Error_Runtime('Variable "_default_title" does not exist.', 37, $this->getSourceContext()); })())));
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_64be59d14c89b55ae42cb176fbd8fd2ee5ffd8dabc5da271bb4daeceb90499ef->leave($__internal_64be59d14c89b55ae42cb176fbd8fd2ee5ffd8dabc5da271bb4daeceb90499ef_prof);

        
        $__internal_95871e967caa3ee0f694c578fdaf0976f2e4ff23ce1617386e7f0e36ac7e5e63->leave($__internal_95871e967caa3ee0f694c578fdaf0976f2e4ff23ce1617386e7f0e36ac7e5e63_prof);

    }

    // line 42
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_d648e3794c169f3104ff4ff035bbec7a130be43c8ae7e6ea2594843cf22ccb80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d648e3794c169f3104ff4ff035bbec7a130be43c8ae7e6ea2594843cf22ccb80->enter($__internal_d648e3794c169f3104ff4ff035bbec7a130be43c8ae7e6ea2594843cf22ccb80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_a06743882e3978cc3bda4af3a58428e99a39df05ff303192cb873aa7edfe3117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a06743882e3978cc3bda4af3a58428e99a39df05ff303192cb873aa7edfe3117->enter($__internal_a06743882e3978cc3bda4af3a58428e99a39df05ff303192cb873aa7edfe3117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 43
        echo "    <div class=\"row\">
        <div class=\"col-sm-5\">
            ";
        // line 45
        $this->displayBlock('content_title_wrapper', $context, $blocks);
        // line 48
        echo "        </div>

        <div class=\"col-sm-7\">
            <div class=\"global-actions\">
                ";
        // line 52
        $this->displayBlock('global_actions', $context, $blocks);
        // line 93
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_a06743882e3978cc3bda4af3a58428e99a39df05ff303192cb873aa7edfe3117->leave($__internal_a06743882e3978cc3bda4af3a58428e99a39df05ff303192cb873aa7edfe3117_prof);

        
        $__internal_d648e3794c169f3104ff4ff035bbec7a130be43c8ae7e6ea2594843cf22ccb80->leave($__internal_d648e3794c169f3104ff4ff035bbec7a130be43c8ae7e6ea2594843cf22ccb80_prof);

    }

    // line 45
    public function block_content_title_wrapper($context, array $blocks = array())
    {
        $__internal_98d2a08d7ed8654f74143f6ff752a290e2e7475869e6dc93a39de642193f8679 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98d2a08d7ed8654f74143f6ff752a290e2e7475869e6dc93a39de642193f8679->enter($__internal_98d2a08d7ed8654f74143f6ff752a290e2e7475869e6dc93a39de642193f8679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title_wrapper"));

        $__internal_7d1bd398496248744735897032158debfe5a0a4dc5a601aba782d43ca4ca0da8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d1bd398496248744735897032158debfe5a0a4dc5a601aba782d43ca4ca0da8->enter($__internal_7d1bd398496248744735897032158debfe5a0a4dc5a601aba782d43ca4ca0da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title_wrapper"));

        // line 46
        echo "                <h1 class=\"title\">";
        $this->displayBlock("content_title", $context, $blocks);
        echo "</h1>
            ";
        
        $__internal_7d1bd398496248744735897032158debfe5a0a4dc5a601aba782d43ca4ca0da8->leave($__internal_7d1bd398496248744735897032158debfe5a0a4dc5a601aba782d43ca4ca0da8_prof);

        
        $__internal_98d2a08d7ed8654f74143f6ff752a290e2e7475869e6dc93a39de642193f8679->leave($__internal_98d2a08d7ed8654f74143f6ff752a290e2e7475869e6dc93a39de642193f8679_prof);

    }

    // line 52
    public function block_global_actions($context, array $blocks = array())
    {
        $__internal_b2b1d0a41cf3169118cf71ccf3b2ec4ac0378902b6fac3544f0b18966add7eb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2b1d0a41cf3169118cf71ccf3b2ec4ac0378902b6fac3544f0b18966add7eb3->enter($__internal_b2b1d0a41cf3169118cf71ccf3b2ec4ac0378902b6fac3544f0b18966add7eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global_actions"));

        $__internal_b77dc742bf8e474acec5e9a972f749193a4904acacc9285fd93c9e34718a55b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b77dc742bf8e474acec5e9a972f749193a4904acacc9285fd93c9e34718a55b2->enter($__internal_b77dc742bf8e474acec5e9a972f749193a4904acacc9285fd93c9e34718a55b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global_actions"));

        // line 53
        echo "                    ";
        if ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->isActionEnabled("list", "search", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 53, $this->getSourceContext()); })()), "name", array()))) {
            // line 54
            echo "                        ";
            $context["_action"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionConfiguration("list", "search", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 54, $this->getSourceContext()); })()), "name", array()));
            // line 55
            echo "
                        ";
            // line 56
            $this->displayBlock('search_action', $context, $blocks);
            // line 79
            echo "                    ";
        }
        // line 80
        echo "
                    ";
        // line 81
        if ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->isActionEnabled("list", "new", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 81, $this->getSourceContext()); })()), "name", array()))) {
            // line 82
            echo "                        ";
            $context["_action"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionConfiguration("list", "new", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 82, $this->getSourceContext()); })()), "name", array()));
            // line 83
            echo "                        ";
            $this->displayBlock('new_action', $context, $blocks);
            // line 91
            echo "                    ";
        }
        // line 92
        echo "                ";
        
        $__internal_b77dc742bf8e474acec5e9a972f749193a4904acacc9285fd93c9e34718a55b2->leave($__internal_b77dc742bf8e474acec5e9a972f749193a4904acacc9285fd93c9e34718a55b2_prof);

        
        $__internal_b2b1d0a41cf3169118cf71ccf3b2ec4ac0378902b6fac3544f0b18966add7eb3->leave($__internal_b2b1d0a41cf3169118cf71ccf3b2ec4ac0378902b6fac3544f0b18966add7eb3_prof);

    }

    // line 56
    public function block_search_action($context, array $blocks = array())
    {
        $__internal_f39a1c2c7be10aaa3cd32d195bb78ca5ef8141fd9e8f20f459b51bb241e66367 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f39a1c2c7be10aaa3cd32d195bb78ca5ef8141fd9e8f20f459b51bb241e66367->enter($__internal_f39a1c2c7be10aaa3cd32d195bb78ca5ef8141fd9e8f20f459b51bb241e66367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_action"));

        $__internal_48bdcb6cc2c2e5bfa42e4e2b99d5a09ed3864f5e7f94d1b3e3244508233976f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48bdcb6cc2c2e5bfa42e4e2b99d5a09ed3864f5e7f94d1b3e3244508233976f4->enter($__internal_48bdcb6cc2c2e5bfa42e4e2b99d5a09ed3864f5e7f94d1b3e3244508233976f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_action"));

        // line 57
        echo "                            <div class=\"form-action ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["_action"] ?? null), "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["_action"] ?? null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
                                <form method=\"get\" action=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                    ";
        // line 59
        $this->displayBlock('search_form', $context, $blocks);
        // line 76
        echo "                                </form>
                            </div>
                        ";
        
        $__internal_48bdcb6cc2c2e5bfa42e4e2b99d5a09ed3864f5e7f94d1b3e3244508233976f4->leave($__internal_48bdcb6cc2c2e5bfa42e4e2b99d5a09ed3864f5e7f94d1b3e3244508233976f4_prof);

        
        $__internal_f39a1c2c7be10aaa3cd32d195bb78ca5ef8141fd9e8f20f459b51bb241e66367->leave($__internal_f39a1c2c7be10aaa3cd32d195bb78ca5ef8141fd9e8f20f459b51bb241e66367_prof);

    }

    // line 59
    public function block_search_form($context, array $blocks = array())
    {
        $__internal_e3ea049bcafd435637a7ec6f8aa63e105b02df2fd286161d7965b2e475600ec0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3ea049bcafd435637a7ec6f8aa63e105b02df2fd286161d7965b2e475600ec0->enter($__internal_e3ea049bcafd435637a7ec6f8aa63e105b02df2fd286161d7965b2e475600ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_form"));

        $__internal_ec8e8a61858e4afb1084508daf7b46a487773179baaa4d7fc85a31e8bc675796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec8e8a61858e4afb1084508daf7b46a487773179baaa4d7fc85a31e8bc675796->enter($__internal_ec8e8a61858e4afb1084508daf7b46a487773179baaa4d7fc85a31e8bc675796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_form"));

        // line 60
        echo "                                        <input type=\"hidden\" name=\"action\" value=\"search\">
                                        <input type=\"hidden\" name=\"entity\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 61, $this->getSourceContext()); })()), "entity", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"sortField\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "field", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "field", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 62, $this->getSourceContext()); })()), "sortField", array()))) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 62, $this->getSourceContext()); })()), "sortField", array()))), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"sortDirection\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "direction", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), "search", array(), "any", false, true), "sort", array(), "any", false, true), "direction", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 63, $this->getSourceContext()); })()), "sortDirection", array()))) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 63, $this->getSourceContext()); })()), "sortDirection", array()))), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"menuIndex\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 64, $this->getSourceContext()); })()), "menuIndex", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"submenuIndex\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 65, $this->getSourceContext()); })()), "submenuIndex", array()), "html", null, true);
        echo "\">
                                        <div class=\"input-group\">
                                            <input class=\"form-control\" type=\"search\" name=\"query\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "html", null, true);
        echo "\">
                                            <span class=\"input-group-btn\">
                                                <button class=\"btn\" type=\"submit\" formtarget=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new Twig_Error_Runtime('Variable "_action" does not exist.', 69, $this->getSourceContext()); })()), "target", array()), "html", null, true);
        echo "\">
                                                    <i class=\"fa fa-search\"></i>
                                                    <span class=\"hidden-xs hidden-sm\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["_action"] ?? null), "label", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["_action"] ?? null), "label", array()), "action.search")) : ("action.search")), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 71, $this->getSourceContext()); })()),         // line 2
(isset($context["__internal_9ce38ef55122cb07d28a439f0706bb726f2728d733eb98ad468a30264e4c2170"]) || array_key_exists("__internal_9ce38ef55122cb07d28a439f0706bb726f2728d733eb98ad468a30264e4c2170", $context) ? $context["__internal_9ce38ef55122cb07d28a439f0706bb726f2728d733eb98ad468a30264e4c2170"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_9ce38ef55122cb07d28a439f0706bb726f2728d733eb98ad468a30264e4c2170" does not exist.', 2, $this->getSourceContext()); })())), "html", null, true);
        // line 71
        echo "</span>
                                                </button>
                                            </span>
                                        </div>
                                    ";
        
        $__internal_ec8e8a61858e4afb1084508daf7b46a487773179baaa4d7fc85a31e8bc675796->leave($__internal_ec8e8a61858e4afb1084508daf7b46a487773179baaa4d7fc85a31e8bc675796_prof);

        
        $__internal_e3ea049bcafd435637a7ec6f8aa63e105b02df2fd286161d7965b2e475600ec0->leave($__internal_e3ea049bcafd435637a7ec6f8aa63e105b02df2fd286161d7965b2e475600ec0_prof);

    }

    // line 83
    public function block_new_action($context, array $blocks = array())
    {
        $__internal_bacac4a29e86527477f7d14fed04f0db02425e93fb88baff2d70523bb9a1a46d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bacac4a29e86527477f7d14fed04f0db02425e93fb88baff2d70523bb9a1a46d->enter($__internal_bacac4a29e86527477f7d14fed04f0db02425e93fb88baff2d70523bb9a1a46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "new_action"));

        $__internal_b059c09190cae998bb2e5708ebeb544a557ccda17f5cd70ab6bb56dcc1067170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b059c09190cae998bb2e5708ebeb544a557ccda17f5cd70ab6bb56dcc1067170->enter($__internal_b059c09190cae998bb2e5708ebeb544a557ccda17f5cd70ab6bb56dcc1067170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "new_action"));

        // line 84
        echo "                            <div class=\"button-action\">
                                <a class=\"";
        // line 85
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["_action"] ?? null), "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["_action"] ?? null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 85, $this->getSourceContext()); })()), array("action" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new Twig_Error_Runtime('Variable "_action" does not exist.', 85, $this->getSourceContext()); })()), "name", array())))), "html", null, true);
        echo "\" target=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new Twig_Error_Runtime('Variable "_action" does not exist.', 85, $this->getSourceContext()); })()), "target", array()), "html", null, true);
        echo "\">
                                    ";
        // line 86
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new Twig_Error_Runtime('Variable "_action" does not exist.', 86, $this->getSourceContext()); })()), "icon", array())) {
            echo "<i class=\"fa fa-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new Twig_Error_Runtime('Variable "_action" does not exist.', 86, $this->getSourceContext()); })()), "icon", array()), "html", null, true);
            echo "\"></i>";
        }
        // line 87
        echo "                                    ";
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["_action"] ?? null), "label", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new Twig_Error_Runtime('Variable "_action" does not exist.', 87, $this->getSourceContext()); })()), "label", array())))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_action"]) || array_key_exists("_action", $context) ? $context["_action"] : (function () { throw new Twig_Error_Runtime('Variable "_action" does not exist.', 87, $this->getSourceContext()); })()), "label", array()), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 87, $this->getSourceContext()); })()),         // line 2
(isset($context["__internal_9ce38ef55122cb07d28a439f0706bb726f2728d733eb98ad468a30264e4c2170"]) || array_key_exists("__internal_9ce38ef55122cb07d28a439f0706bb726f2728d733eb98ad468a30264e4c2170", $context) ? $context["__internal_9ce38ef55122cb07d28a439f0706bb726f2728d733eb98ad468a30264e4c2170"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_9ce38ef55122cb07d28a439f0706bb726f2728d733eb98ad468a30264e4c2170" does not exist.', 2, $this->getSourceContext()); })()))) : ("")), "html", null, true);
        // line 87
        echo "
                                </a>
                            </div>
                        ";
        
        $__internal_b059c09190cae998bb2e5708ebeb544a557ccda17f5cd70ab6bb56dcc1067170->leave($__internal_b059c09190cae998bb2e5708ebeb544a557ccda17f5cd70ab6bb56dcc1067170_prof);

        
        $__internal_bacac4a29e86527477f7d14fed04f0db02425e93fb88baff2d70523bb9a1a46d->leave($__internal_bacac4a29e86527477f7d14fed04f0db02425e93fb88baff2d70523bb9a1a46d_prof);

    }

    // line 98
    public function block_main($context, array $blocks = array())
    {
        $__internal_e6206967be3633e1c156ae223120db7f8cdff1b2e9493b8172050a182123c370 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6206967be3633e1c156ae223120db7f8cdff1b2e9493b8172050a182123c370->enter($__internal_e6206967be3633e1c156ae223120db7f8cdff1b2e9493b8172050a182123c370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_d71625d3950ffc9050918f33068f11bede566945eacc963114f47e09b15a72ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d71625d3950ffc9050918f33068f11bede566945eacc963114f47e09b15a72ad->enter($__internal_d71625d3950ffc9050918f33068f11bede566945eacc963114f47e09b15a72ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 99
        echo "    ";
        $context["_list_item_actions"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("list", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 99, $this->getSourceContext()); })()), "name", array()));
        // line 100
        echo "
    <div class=\"table-responsive\">
    <table class=\"table\">
        <thead>
        ";
        // line 104
        $this->displayBlock('table_head', $context, $blocks);
        // line 131
        echo "        </thead>

        <tbody>
        ";
        // line 134
        $this->displayBlock('table_body', $context, $blocks);
        // line 171
        echo "        </tbody>
    </table>
    </div>

    ";
        // line 175
        $this->displayBlock('paginator', $context, $blocks);
        // line 178
        echo "
    ";
        // line 179
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_d71625d3950ffc9050918f33068f11bede566945eacc963114f47e09b15a72ad->leave($__internal_d71625d3950ffc9050918f33068f11bede566945eacc963114f47e09b15a72ad_prof);

        
        $__internal_e6206967be3633e1c156ae223120db7f8cdff1b2e9493b8172050a182123c370->leave($__internal_e6206967be3633e1c156ae223120db7f8cdff1b2e9493b8172050a182123c370_prof);

    }

    // line 104
    public function block_table_head($context, array $blocks = array())
    {
        $__internal_f5d555d48a7f52bdaa029240b3fc34cc569876e2675ed27cb0cb5ed7fff13479 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5d555d48a7f52bdaa029240b3fc34cc569876e2675ed27cb0cb5ed7fff13479->enter($__internal_f5d555d48a7f52bdaa029240b3fc34cc569876e2675ed27cb0cb5ed7fff13479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        $__internal_d11f5f2946260939c4812d7356a776f3bd9739ec4b0673d00a02ba9bb622326b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d11f5f2946260939c4812d7356a776f3bd9739ec4b0673d00a02ba9bb622326b->enter($__internal_d11f5f2946260939c4812d7356a776f3bd9739ec4b0673d00a02ba9bb622326b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        // line 105
        echo "            <tr>
                ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new Twig_Error_Runtime('Variable "fields" does not exist.', 106, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 107
            echo "                    ";
            $context["isSortingField"] = (twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "property", array()) == twig_first($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 107, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "sortField"), "method"), ".")));
            // line 108
            echo "                    ";
            $context["nextSortDirection"] = (((isset($context["isSortingField"]) || array_key_exists("isSortingField", $context) ? $context["isSortingField"] : (function () { throw new Twig_Error_Runtime('Variable "isSortingField" does not exist.', 108, $this->getSourceContext()); })())) ? ((((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 108, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "sortDirection"), "method") == "DESC")) ? ("ASC") : ("DESC"))) : ("DESC"));
            // line 109
            echo "                    ";
            $context["_column_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "label", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "label", array())) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize($context["field"]))), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 109, $this->getSourceContext()); })()),             // line 2
(isset($context["__internal_9ce38ef55122cb07d28a439f0706bb726f2728d733eb98ad468a30264e4c2170"]) || array_key_exists("__internal_9ce38ef55122cb07d28a439f0706bb726f2728d733eb98ad468a30264e4c2170", $context) ? $context["__internal_9ce38ef55122cb07d28a439f0706bb726f2728d733eb98ad468a30264e4c2170"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_9ce38ef55122cb07d28a439f0706bb726f2728d733eb98ad468a30264e4c2170" does not exist.', 2, $this->getSourceContext()); })()));
            // line 110
            echo "                    ";
            $context["_column_icon"] = (((isset($context["isSortingField"]) || array_key_exists("isSortingField", $context) ? $context["isSortingField"] : (function () { throw new Twig_Error_Runtime('Variable "isSortingField" does not exist.', 110, $this->getSourceContext()); })())) ? (((((isset($context["nextSortDirection"]) || array_key_exists("nextSortDirection", $context) ? $context["nextSortDirection"] : (function () { throw new Twig_Error_Runtime('Variable "nextSortDirection" does not exist.', 110, $this->getSourceContext()); })()) == "DESC")) ? ("fa-caret-up") : ("fa-caret-down"))) : ("fa-sort"));
            // line 111
            echo "
                    <th data-property-name=\"";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "property", array()), "html", null, true);
            echo "\" class=\"";
            echo (((isset($context["isSortingField"]) || array_key_exists("isSortingField", $context) ? $context["isSortingField"] : (function () { throw new Twig_Error_Runtime('Variable "isSortingField" does not exist.', 112, $this->getSourceContext()); })())) ? ("sorted") : (""));
            echo " ";
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "virtual", array())) ? ("virtual") : (""));
            echo " ";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "dataType", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "css_class", array()), "html", null, true);
            echo "\">
                        ";
            // line 113
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "sortable", array())) {
                // line 114
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 114, $this->getSourceContext()); })()), array("page" => 1, "sortField" => twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "property", array()), "sortDirection" => (isset($context["nextSortDirection"]) || array_key_exists("nextSortDirection", $context) ? $context["nextSortDirection"] : (function () { throw new Twig_Error_Runtime('Variable "nextSortDirection" does not exist.', 114, $this->getSourceContext()); })())))), "html", null, true);
                echo "\">
                                <i class=\"fa ";
                // line 115
                echo twig_escape_filter($this->env, (isset($context["_column_icon"]) || array_key_exists("_column_icon", $context) ? $context["_column_icon"] : (function () { throw new Twig_Error_Runtime('Variable "_column_icon" does not exist.', 115, $this->getSourceContext()); })()), "html", null, true);
                echo "\"></i>
                                ";
                // line 116
                echo (isset($context["_column_label"]) || array_key_exists("_column_label", $context) ? $context["_column_label"] : (function () { throw new Twig_Error_Runtime('Variable "_column_label" does not exist.', 116, $this->getSourceContext()); })());
                echo "
                            </a>
                        ";
            } else {
                // line 119
                echo "                            <span>";
                echo (isset($context["_column_label"]) || array_key_exists("_column_label", $context) ? $context["_column_label"] : (function () { throw new Twig_Error_Runtime('Variable "_column_label" does not exist.', 119, $this->getSourceContext()); })());
                echo "</span>
                        ";
            }
            // line 121
            echo "                    </th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "
                ";
        // line 124
        if ((twig_length_filter($this->env, (isset($context["_list_item_actions"]) || array_key_exists("_list_item_actions", $context) ? $context["_list_item_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_list_item_actions" does not exist.', 124, $this->getSourceContext()); })())) > 0)) {
            // line 125
            echo "                    <th>
                        <span>";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.row_actions", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 126, $this->getSourceContext()); })()), "EasyAdminBundle"), "html", null, true);
            echo "</span>
                    </th>
                ";
        }
        // line 129
        echo "            </tr>
        ";
        
        $__internal_d11f5f2946260939c4812d7356a776f3bd9739ec4b0673d00a02ba9bb622326b->leave($__internal_d11f5f2946260939c4812d7356a776f3bd9739ec4b0673d00a02ba9bb622326b_prof);

        
        $__internal_f5d555d48a7f52bdaa029240b3fc34cc569876e2675ed27cb0cb5ed7fff13479->leave($__internal_f5d555d48a7f52bdaa029240b3fc34cc569876e2675ed27cb0cb5ed7fff13479_prof);

    }

    // line 134
    public function block_table_body($context, array $blocks = array())
    {
        $__internal_72f5bd5f5485cd8e3cf3c0fb48eab847800fd4c998fe5df08d43d55c832a5dab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72f5bd5f5485cd8e3cf3c0fb48eab847800fd4c998fe5df08d43d55c832a5dab->enter($__internal_72f5bd5f5485cd8e3cf3c0fb48eab847800fd4c998fe5df08d43d55c832a5dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        $__internal_2aa3490b04062f382e1965ab01ec24209abbff001d740707c56b5d4abf6078b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa3490b04062f382e1965ab01ec24209abbff001d740707c56b5d4abf6078b1->enter($__internal_2aa3490b04062f382e1965ab01ec24209abbff001d740707c56b5d4abf6078b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        // line 135
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 135, $this->getSourceContext()); })()), "currentPageResults", array()));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 136
            echo "                ";
            // line 137
            echo "                ";
            $context["_item_id"] = ("" . twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 137, $this->getSourceContext()); })()), "primary_key_field_name", array())));
            // line 138
            echo "                <tr data-id=\"";
            echo twig_escape_filter($this->env, (isset($context["_item_id"]) || array_key_exists("_item_id", $context) ? $context["_item_id"] : (function () { throw new Twig_Error_Runtime('Variable "_item_id" does not exist.', 138, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
                    ";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new Twig_Error_Runtime('Variable "fields" does not exist.', 139, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
                // line 140
                echo "                        ";
                $context["isSortingField"] = (twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "property", array()) == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 140, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "sortField"), "method"));
                // line 141
                echo "                        ";
                $context["_column_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "label", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "label", array())) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize($context["field"]))), (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 141, $this->getSourceContext()); })()),                 // line 2
(isset($context["__internal_9ce38ef55122cb07d28a439f0706bb726f2728d733eb98ad468a30264e4c2170"]) || array_key_exists("__internal_9ce38ef55122cb07d28a439f0706bb726f2728d733eb98ad468a30264e4c2170", $context) ? $context["__internal_9ce38ef55122cb07d28a439f0706bb726f2728d733eb98ad468a30264e4c2170"] : (function () { throw new Twig_Error_Runtime('Variable "__internal_9ce38ef55122cb07d28a439f0706bb726f2728d733eb98ad468a30264e4c2170" does not exist.', 2, $this->getSourceContext()); })()));
                // line 142
                echo "
                        <td data-label=\"";
                // line 143
                echo twig_escape_filter($this->env, (isset($context["_column_label"]) || array_key_exists("_column_label", $context) ? $context["_column_label"] : (function () { throw new Twig_Error_Runtime('Variable "_column_label" does not exist.', 143, $this->getSourceContext()); })()), "html", null, true);
                echo "\" class=\"";
                echo (((isset($context["isSortingField"]) || array_key_exists("isSortingField", $context) ? $context["isSortingField"] : (function () { throw new Twig_Error_Runtime('Variable "isSortingField" does not exist.', 143, $this->getSourceContext()); })())) ? ("sorted") : (""));
                echo " ";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "dataType", array())), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["metadata"], "css_class", array()), "html", null, true);
                echo "\">
                            ";
                // line 144
                echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->renderEntityField($this->env, "list", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 144, $this->getSourceContext()); })()), "name", array()), $context["item"], $context["metadata"]);
                echo "
                        </td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "
                    ";
            // line 148
            if ((twig_length_filter($this->env, (isset($context["_list_item_actions"]) || array_key_exists("_list_item_actions", $context) ? $context["_list_item_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_list_item_actions" does not exist.', 148, $this->getSourceContext()); })())) > 0)) {
                // line 149
                echo "                        ";
                $context["_column_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.row_actions", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 149, $this->getSourceContext()); })()), "EasyAdminBundle");
                // line 150
                echo "                        <td data-label=\"";
                echo twig_escape_filter($this->env, (isset($context["_column_label"]) || array_key_exists("_column_label", $context) ? $context["_column_label"] : (function () { throw new Twig_Error_Runtime('Variable "_column_label" does not exist.', 150, $this->getSourceContext()); })()), "html", null, true);
                echo "\" class=\"actions\">
                        ";
                // line 151
                $this->displayBlock('item_actions', $context, $blocks);
                // line 160
                echo "                        </td>
                    ";
            }
            // line 162
            echo "                </tr>
            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 164
            echo "                <tr>
                    <td class=\"no-results\" colspan=\"";
            // line 165
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, (isset($context["_list_item_actions"]) || array_key_exists("_list_item_actions", $context) ? $context["_list_item_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_list_item_actions" does not exist.', 165, $this->getSourceContext()); })())) > 0)) ? ((twig_length_filter($this->env, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new Twig_Error_Runtime('Variable "fields" does not exist.', 165, $this->getSourceContext()); })())) + 1)) : (twig_length_filter($this->env, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new Twig_Error_Runtime('Variable "fields" does not exist.', 165, $this->getSourceContext()); })())))), "html", null, true);
            echo "\">
                        ";
            // line 166
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("search.no_results", (isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 166, $this->getSourceContext()); })()), "EasyAdminBundle"), "html", null, true);
            echo "
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "        ";
        
        $__internal_2aa3490b04062f382e1965ab01ec24209abbff001d740707c56b5d4abf6078b1->leave($__internal_2aa3490b04062f382e1965ab01ec24209abbff001d740707c56b5d4abf6078b1_prof);

        
        $__internal_72f5bd5f5485cd8e3cf3c0fb48eab847800fd4c998fe5df08d43d55c832a5dab->leave($__internal_72f5bd5f5485cd8e3cf3c0fb48eab847800fd4c998fe5df08d43d55c832a5dab_prof);

    }

    // line 151
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_9b2dabf2e1cc0fc791e2152c371c095da1e8ce4762b2eca7781e98a18b4b09a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b2dabf2e1cc0fc791e2152c371c095da1e8ce4762b2eca7781e98a18b4b09a9->enter($__internal_9b2dabf2e1cc0fc791e2152c371c095da1e8ce4762b2eca7781e98a18b4b09a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_eb49f9d31694944057d41105ca307f5d35c822881222d60cdbd0100acbe38f62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb49f9d31694944057d41105ca307f5d35c822881222d60cdbd0100acbe38f62->enter($__internal_eb49f9d31694944057d41105ca307f5d35c822881222d60cdbd0100acbe38f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 152
        echo "                            ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 153
(isset($context["_list_item_actions"]) || array_key_exists("_list_item_actions", $context) ? $context["_list_item_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_list_item_actions" does not exist.', 153, $this->getSourceContext()); })()), "request_parameters" =>         // line 154
(isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_request_parameters" does not exist.', 154, $this->getSourceContext()); })()), "translation_domain" => twig_get_attribute($this->env, $this->getSourceContext(),         // line 155
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 155, $this->getSourceContext()); })()), "translation_domain", array()), "trans_parameters" =>         // line 156
(isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 156, $this->getSourceContext()); })()), "item_id" =>         // line 157
(isset($context["_item_id"]) || array_key_exists("_item_id", $context) ? $context["_item_id"] : (function () { throw new Twig_Error_Runtime('Variable "_item_id" does not exist.', 157, $this->getSourceContext()); })())), false);
        // line 158
        echo "
                        ";
        
        $__internal_eb49f9d31694944057d41105ca307f5d35c822881222d60cdbd0100acbe38f62->leave($__internal_eb49f9d31694944057d41105ca307f5d35c822881222d60cdbd0100acbe38f62_prof);

        
        $__internal_9b2dabf2e1cc0fc791e2152c371c095da1e8ce4762b2eca7781e98a18b4b09a9->leave($__internal_9b2dabf2e1cc0fc791e2152c371c095da1e8ce4762b2eca7781e98a18b4b09a9_prof);

    }

    // line 175
    public function block_paginator($context, array $blocks = array())
    {
        $__internal_01724db2d64315e2c78d7b95d232297181a633632c4afd58d05e5a89902f17f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01724db2d64315e2c78d7b95d232297181a633632c4afd58d05e5a89902f17f9->enter($__internal_01724db2d64315e2c78d7b95d232297181a633632c4afd58d05e5a89902f17f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "paginator"));

        $__internal_a2c43597641b087451c256620ceedeb27d46dc0fbe331f5a70e8a54b47aed6c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2c43597641b087451c256620ceedeb27d46dc0fbe331f5a70e8a54b47aed6c6->enter($__internal_a2c43597641b087451c256620ceedeb27d46dc0fbe331f5a70e8a54b47aed6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "paginator"));

        // line 176
        echo "        ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 176, $this->getSourceContext()); })()), "templates", array()), "paginator", array()));
        echo "
    ";
        
        $__internal_a2c43597641b087451c256620ceedeb27d46dc0fbe331f5a70e8a54b47aed6c6->leave($__internal_a2c43597641b087451c256620ceedeb27d46dc0fbe331f5a70e8a54b47aed6c6_prof);

        
        $__internal_01724db2d64315e2c78d7b95d232297181a633632c4afd58d05e5a89902f17f9->leave($__internal_01724db2d64315e2c78d7b95d232297181a633632c4afd58d05e5a89902f17f9_prof);

    }

    // line 179
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_ca0bb1fa400c32de75b436c6ebc2a13c673bf3b6e17f6200db79cb8a784fb0a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca0bb1fa400c32de75b436c6ebc2a13c673bf3b6e17f6200db79cb8a784fb0a5->enter($__internal_ca0bb1fa400c32de75b436c6ebc2a13c673bf3b6e17f6200db79cb8a784fb0a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_0a8b1f5ea2d2d746d0186bba4d388a416865aa524e5ecaa0c77ec799dbe28ac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a8b1f5ea2d2d746d0186bba4d388a416865aa524e5ecaa0c77ec799dbe28ac3->enter($__internal_0a8b1f5ea2d2d746d0186bba4d388a416865aa524e5ecaa0c77ec799dbe28ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 180
        echo "        ";
        $context["referer"] = (((((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 180, $this->getSourceContext()); })()), "currentPage", array()) == twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 180, $this->getSourceContext()); })()), "nbPages", array())) && (1 != twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 180, $this->getSourceContext()); })()), "currentPage", array()))) && (1 == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 180, $this->getSourceContext()); })()), "currentPageResults", array()), "count", array())))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 181
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 181, $this->getSourceContext()); })()), "request", array()), "query", array()), array("page" => (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 181, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "page"), "method") - 1))))) : (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 182
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 182, $this->getSourceContext()); })()), "request", array()), "requestUri", array())));
        // line 184
        echo "
        ";
        // line 185
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "list", "referer" => twig_urlencode_filter(        // line 187
(isset($context["referer"]) || array_key_exists("referer", $context) ? $context["referer"] : (function () { throw new Twig_Error_Runtime('Variable "referer" does not exist.', 187, $this->getSourceContext()); })())), "delete_form" =>         // line 188
(isset($context["delete_form_template"]) || array_key_exists("delete_form_template", $context) ? $context["delete_form_template"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form_template" does not exist.', 188, $this->getSourceContext()); })()), "_translation_domain" => twig_get_attribute($this->env, $this->getSourceContext(),         // line 189
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 189, $this->getSourceContext()); })()), "translation_domain", array()), "_trans_parameters" =>         // line 190
(isset($context["_trans_parameters"]) || array_key_exists("_trans_parameters", $context) ? $context["_trans_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "_trans_parameters" does not exist.', 190, $this->getSourceContext()); })()), "_entity_config" =>         // line 191
(isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 191, $this->getSourceContext()); })())), false);
        // line 192
        echo "
    ";
        
        $__internal_0a8b1f5ea2d2d746d0186bba4d388a416865aa524e5ecaa0c77ec799dbe28ac3->leave($__internal_0a8b1f5ea2d2d746d0186bba4d388a416865aa524e5ecaa0c77ec799dbe28ac3_prof);

        
        $__internal_ca0bb1fa400c32de75b436c6ebc2a13c673bf3b6e17f6200db79cb8a784fb0a5->leave($__internal_ca0bb1fa400c32de75b436c6ebc2a13c673bf3b6e17f6200db79cb8a784fb0a5_prof);

    }

    // line 196
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_6c186570cfafacbc37a5f3ef3794a6ec8674b27c87f3e428189eec0df9f3320d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c186570cfafacbc37a5f3ef3794a6ec8674b27c87f3e428189eec0df9f3320d->enter($__internal_6c186570cfafacbc37a5f3ef3794a6ec8674b27c87f3e428189eec0df9f3320d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_b966fecb8f6e74501f0e1b99ff28692ee1167ef80cdde31f06264006feeeb3e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b966fecb8f6e74501f0e1b99ff28692ee1167ef80cdde31f06264006feeeb3e4->enter($__internal_b966fecb8f6e74501f0e1b99ff28692ee1167ef80cdde31f06264006feeeb3e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 197
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('#main').find('table .toggle input[type=\"checkbox\"]').change(function() {
                var toggle = \$(this);
                var newValue = toggle.prop('checked');
                var oldValue = !newValue;

                var columnIndex = \$(this).closest('td').index() + 1;
                var propertyName = \$('table th.toggle:nth-child(' + columnIndex + ')').data('property-name');

                var toggleUrl = \"";
        // line 209
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", array("action" => "edit", "entity" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 209, $this->getSourceContext()); })()), "name", array()), "view" => "list"));
        echo "\"
                              + \"&id=\" + \$(this).closest('tr').data('id')
                              + \"&property=\" + propertyName
                              + \"&newValue=\" + newValue.toString();

                var toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                toggleRequest.done(function(result) {});

                toggleRequest.fail(function() {
                    // in case of error, restore the original value and disable the toggle
                    toggle.bootstrapToggle(oldValue == true ? 'on' : 'off');
                    toggle.bootstrapToggle('disable');
                });
            });

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                var id = \$(this).parents('tr').first().data('id');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        var deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__id__', id));
                        deleteForm.trigger('submit');
                    });
            });
        });
    </script>

    ";
        // line 240
        if (("search" == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 240, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 241
            echo "        <script type=\"text/javascript\">
            var _search_query = \"";
            // line 242
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "js"), "html", null, true);
            echo "\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody').highlight(\$.merge([_search_query], _search_query.split(' ')));
        </script>
    ";
        }
        
        $__internal_b966fecb8f6e74501f0e1b99ff28692ee1167ef80cdde31f06264006feeeb3e4->leave($__internal_b966fecb8f6e74501f0e1b99ff28692ee1167ef80cdde31f06264006feeeb3e4_prof);

        
        $__internal_6c186570cfafacbc37a5f3ef3794a6ec8674b27c87f3e428189eec0df9f3320d->leave($__internal_6c186570cfafacbc37a5f3ef3794a6ec8674b27c87f3e428189eec0df9f3320d_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  831 => 242,  828 => 241,  826 => 240,  792 => 209,  776 => 197,  767 => 196,  756 => 192,  754 => 191,  753 => 190,  752 => 189,  751 => 188,  750 => 187,  749 => 185,  746 => 184,  744 => 182,  743 => 181,  741 => 180,  732 => 179,  719 => 176,  710 => 175,  699 => 158,  697 => 157,  696 => 156,  695 => 155,  694 => 154,  693 => 153,  691 => 152,  682 => 151,  672 => 170,  662 => 166,  658 => 165,  655 => 164,  641 => 162,  637 => 160,  635 => 151,  630 => 150,  627 => 149,  625 => 148,  622 => 147,  613 => 144,  603 => 143,  600 => 142,  598 => 2,  596 => 141,  593 => 140,  589 => 139,  584 => 138,  581 => 137,  579 => 136,  560 => 135,  551 => 134,  540 => 129,  534 => 126,  531 => 125,  529 => 124,  526 => 123,  519 => 121,  513 => 119,  507 => 116,  503 => 115,  498 => 114,  496 => 113,  484 => 112,  481 => 111,  478 => 110,  476 => 2,  474 => 109,  471 => 108,  468 => 107,  464 => 106,  461 => 105,  452 => 104,  442 => 179,  439 => 178,  437 => 175,  431 => 171,  429 => 134,  424 => 131,  422 => 104,  416 => 100,  413 => 99,  404 => 98,  391 => 87,  389 => 2,  387 => 87,  381 => 86,  373 => 85,  370 => 84,  361 => 83,  347 => 71,  345 => 2,  344 => 71,  339 => 69,  334 => 67,  329 => 65,  325 => 64,  321 => 63,  317 => 62,  313 => 61,  310 => 60,  301 => 59,  289 => 76,  287 => 59,  283 => 58,  278 => 57,  269 => 56,  259 => 92,  256 => 91,  253 => 83,  250 => 82,  248 => 81,  245 => 80,  242 => 79,  240 => 56,  237 => 55,  234 => 54,  231 => 53,  222 => 52,  209 => 46,  200 => 45,  187 => 93,  185 => 52,  179 => 48,  177 => 45,  173 => 43,  164 => 42,  150 => 37,  149 => 2,  147 => 37,  144 => 36,  139 => 34,  138 => 2,  136 => 34,  133 => 33,  130 => 32,  128 => 31,  119 => 30,  101 => 28,  83 => 27,  73 => 5,  71 => 25,  68 => 21,  67 => 20,  66 => 19,  65 => 18,  63 => 17,  61 => 14,  60 => 13,  59 => 12,  58 => 11,  57 => 10,  56 => 9,  55 => 8,  54 => 7,  52 => 2,  51 => 3,  50 => 2,  49 => 3,  47 => 2,  45 => 1,  33 => 5,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}

{% extends _entity_config.templates.layout %}

{% set _request_parameters = _request_parameters|default({})|merge({
    action: app.request.get('action'),
    entity: _entity_config.name,
    menuIndex: app.request.get('menuIndex'),
    submenuIndex: app.request.get('submenuIndex'),
    sortField: app.request.get('sortField', ''),
    sortDirection: app.request.get('sortDirection', 'DESC'),
    page: app.request.get('page', 1)
}) %}

{% if 'search' == app.request.get('action') %}
    {% set _request_parameters = _request_parameters|merge({
        query: app.request.get('query')|default(''),
        sortField: _entity_config.search.sort.field|default(app.request.get('sortField', '')),
        sortDirection: _entity_config.search.sort.direction|default(app.request.get('sortDirection', 'DESC')),
    }) %}
{% endif %}

{% set _request_parameters = _request_parameters|merge({ referer: path('easyadmin', _request_parameters)|url_encode }) %}

{% block body_id 'easyadmin-list-' ~ _entity_config.name %}
{% block body_class 'list list-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% if 'search' == app.request.get('action') %}
        {% set _default_title = 'search.page_title'|transchoice(paginator.nbResults, {}, 'EasyAdminBundle') %}
        {{ (_entity_config.search.title is defined ? _entity_config.search.title|transchoice(paginator.nbResults) : _default_title)|raw }}
    {% else %}
        {% set _default_title = 'list.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
        {{ (_entity_config.list.title is defined ? _entity_config.list.title|trans(_trans_parameters) : _default_title)|raw }}
    {% endif %}
{% endspaceless %}
{% endblock %}

{% block content_header %}
    <div class=\"row\">
        <div class=\"col-sm-5\">
            {% block content_title_wrapper %}
                <h1 class=\"title\">{{ block('content_title') }}</h1>
            {% endblock %}
        </div>

        <div class=\"col-sm-7\">
            <div class=\"global-actions\">
                {% block global_actions %}
                    {% if easyadmin_action_is_enabled_for_list_view('search', _entity_config.name) %}
                        {% set _action = easyadmin_get_action_for_list_view('search', _entity_config.name) %}

                        {% block search_action %}
                            <div class=\"form-action {{ _action.css_class|default('') }}\">
                                <form method=\"get\" action=\"{{ path('easyadmin') }}\">
                                    {% block search_form %}
                                        <input type=\"hidden\" name=\"action\" value=\"search\">
                                        <input type=\"hidden\" name=\"entity\" value=\"{{ _request_parameters.entity }}\">
                                        <input type=\"hidden\" name=\"sortField\" value=\"{{ _entity_config.search.sort.field|default(_request_parameters.sortField) }}\">
                                        <input type=\"hidden\" name=\"sortDirection\" value=\"{{ _entity_config.search.sort.direction|default(_request_parameters.sortDirection) }}\">
                                        <input type=\"hidden\" name=\"menuIndex\" value=\"{{ _request_parameters.menuIndex }}\">
                                        <input type=\"hidden\" name=\"submenuIndex\" value=\"{{ _request_parameters.submenuIndex }}\">
                                        <div class=\"input-group\">
                                            <input class=\"form-control\" type=\"search\" name=\"query\" value=\"{{ app.request.get('query')|default('') }}\">
                                            <span class=\"input-group-btn\">
                                                <button class=\"btn\" type=\"submit\" formtarget=\"{{ _action.target }}\">
                                                    <i class=\"fa fa-search\"></i>
                                                    <span class=\"hidden-xs hidden-sm\">{{ _action.label|default('action.search')|trans(_trans_parameters) }}</span>
                                                </button>
                                            </span>
                                        </div>
                                    {% endblock %}
                                </form>
                            </div>
                        {% endblock search_action %}
                    {% endif %}

                    {% if easyadmin_action_is_enabled_for_list_view('new', _entity_config.name) %}
                        {% set _action = easyadmin_get_action_for_list_view('new', _entity_config.name) %}
                        {% block new_action %}
                            <div class=\"button-action\">
                                <a class=\"{{ _action.css_class|default('') }}\" href=\"{{ path('easyadmin', _request_parameters|merge({ action: _action.name })) }}\" target=\"{{ _action.target }}\">
                                    {% if _action.icon %}<i class=\"fa fa-{{ _action.icon }}\"></i>{% endif %}
                                    {{ _action.label is defined and not _action.label is empty ? _action.label|trans(_trans_parameters) }}
                                </a>
                            </div>
                        {% endblock new_action %}
                    {% endif %}
                {% endblock global_actions %}
            </div>
        </div>
    </div>
{% endblock content_header %}

{% block main %}
    {% set _list_item_actions = easyadmin_get_actions_for_list_item(_entity_config.name) %}

    <div class=\"table-responsive\">
    <table class=\"table\">
        <thead>
        {% block table_head %}
            <tr>
                {% for field, metadata in fields %}
                    {% set isSortingField = metadata.property == app.request.get('sortField')|split('.')|first %}
                    {% set nextSortDirection = isSortingField ? (app.request.get('sortDirection') == 'DESC' ? 'ASC' : 'DESC') : 'DESC' %}
                    {% set _column_label = (metadata.label ?: field|humanize)|trans(_trans_parameters) %}
                    {% set _column_icon = isSortingField ? (nextSortDirection == 'DESC' ? 'fa-caret-up' : 'fa-caret-down') : 'fa-sort' %}

                    <th data-property-name=\"{{ metadata.property }}\" class=\"{{ isSortingField ? 'sorted' }} {{ metadata.virtual ? 'virtual' }} {{ metadata.dataType|lower }} {{ metadata.css_class }}\">
                        {% if metadata.sortable %}
                            <a href=\"{{ path('easyadmin', _request_parameters|merge({ page: 1, sortField: metadata.property, sortDirection: nextSortDirection })) }}\">
                                <i class=\"fa {{ _column_icon }}\"></i>
                                {{ _column_label|raw }}
                            </a>
                        {% else %}
                            <span>{{ _column_label|raw }}</span>
                        {% endif %}
                    </th>
                {% endfor %}

                {% if _list_item_actions|length > 0 %}
                    <th>
                        <span>{{ 'list.row_actions'|trans(_trans_parameters, 'EasyAdminBundle') }}</span>
                    </th>
                {% endif %}
            </tr>
        {% endblock table_head %}
        </thead>

        <tbody>
        {% block table_body %}
            {% for item in paginator.currentPageResults %}
                {# the empty string concatenation is needed when the primary key is an object (e.g. an Uuid object) #}
                {% set _item_id = '' ~ attribute(item, _entity_config.primary_key_field_name) %}
                <tr data-id=\"{{ _item_id }}\">
                    {% for field, metadata in fields %}
                        {% set isSortingField = metadata.property == app.request.get('sortField') %}
                        {% set _column_label =  (metadata.label ?: field|humanize)|trans(_trans_parameters)  %}

                        <td data-label=\"{{ _column_label }}\" class=\"{{ isSortingField ? 'sorted' }} {{ metadata.dataType|lower }} {{ metadata.css_class }}\">
                            {{ easyadmin_render_field_for_list_view(_entity_config.name, item, metadata) }}
                        </td>
                    {% endfor %}

                    {% if _list_item_actions|length > 0 %}
                        {% set _column_label =  'list.row_actions'|trans(_trans_parameters, 'EasyAdminBundle') %}
                        <td data-label=\"{{ _column_label }}\" class=\"actions\">
                        {% block item_actions %}
                            {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
                                actions: _list_item_actions,
                                request_parameters: _request_parameters,
                                translation_domain: _entity_config.translation_domain,
                                trans_parameters: _trans_parameters,
                                item_id: _item_id
                            }, with_context = false) }}
                        {% endblock item_actions %}
                        </td>
                    {% endif %}
                </tr>
            {% else %}
                <tr>
                    <td class=\"no-results\" colspan=\"{{ _list_item_actions|length > 0 ? fields|length + 1 : fields|length }}\">
                        {{ 'search.no_results'|trans(_trans_parameters, 'EasyAdminBundle') }}
                    </td>
                </tr>
            {% endfor %}
        {% endblock table_body %}
        </tbody>
    </table>
    </div>

    {% block paginator %}
        {{ include(_entity_config.templates.paginator) }}
    {% endblock paginator %}

    {% block delete_form %}
        {% set referer = paginator.currentPage == paginator.nbPages and 1 != paginator.currentPage and 1 == paginator.currentPageResults.count
            ? path('easyadmin', app.request.query|merge({ page: app.request.query.get('page') - 1 }))
            : app.request.requestUri
        %}

        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'list',
            referer: referer|url_encode,
            delete_form: delete_form_template,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock main %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('#main').find('table .toggle input[type=\"checkbox\"]').change(function() {
                var toggle = \$(this);
                var newValue = toggle.prop('checked');
                var oldValue = !newValue;

                var columnIndex = \$(this).closest('td').index() + 1;
                var propertyName = \$('table th.toggle:nth-child(' + columnIndex + ')').data('property-name');

                var toggleUrl = \"{{ path('easyadmin', { action: 'edit', entity: _entity_config.name, view: 'list' })|raw }}\"
                              + \"&id=\" + \$(this).closest('tr').data('id')
                              + \"&property=\" + propertyName
                              + \"&newValue=\" + newValue.toString();

                var toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                toggleRequest.done(function(result) {});

                toggleRequest.fail(function() {
                    // in case of error, restore the original value and disable the toggle
                    toggle.bootstrapToggle(oldValue == true ? 'on' : 'off');
                    toggle.bootstrapToggle('disable');
                });
            });

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                var id = \$(this).parents('tr').first().data('id');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        var deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__id__', id));
                        deleteForm.trigger('submit');
                    });
            });
        });
    </script>

    {% if 'search' == app.request.get('action') %}
        <script type=\"text/javascript\">
            var _search_query = \"{{ app.request.get('query')|default('')|e('js') }}\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody').highlight(\$.merge([_search_query], _search_query.split(' ')));
        </script>
    {% endif %}
{% endblock %}
", "EasyAdminBundle:default:list.html.twig", "/var/www/monsite1/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/list.html.twig");
    }
}
