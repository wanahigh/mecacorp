<?php

/* EasyAdminBundle:default:layout.html.twig */
class __TwigTemplate_f549480ecd3d30b891439e9c0d2bef5da2e8d7fe674508d5cd15eea14ebeceec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_favicon' => array($this, 'block_head_favicon'),
            'head_javascript' => array($this, 'block_head_javascript'),
            'adminlte_options' => array($this, 'block_adminlte_options'),
            'body' => array($this, 'block_body'),
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'wrapper' => array($this, 'block_wrapper'),
            'header' => array($this, 'block_header'),
            'header_logo' => array($this, 'block_header_logo'),
            'header_custom_menu' => array($this, 'block_header_custom_menu'),
            'user_menu' => array($this, 'block_user_menu'),
            'user_menu_dropdown' => array($this, 'block_user_menu_dropdown'),
            'sidebar' => array($this, 'block_sidebar'),
            'main_menu_wrapper' => array($this, 'block_main_menu_wrapper'),
            'content' => array($this, 'block_content'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content_header' => array($this, 'block_content_header'),
            'content_title' => array($this, 'block_content_title'),
            'content_help' => array($this, 'block_content_help'),
            'main' => array($this, 'block_main'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09ae365e56899528c35e99c2a13792e271778883609acb6aad20013d9c4f8f12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09ae365e56899528c35e99c2a13792e271778883609acb6aad20013d9c4f8f12->enter($__internal_09ae365e56899528c35e99c2a13792e271778883609acb6aad20013d9c4f8f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

        $__internal_b0307a65d87ea10eddbbae4f7f90716712fe146da17b2a283fb26558207ce403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0307a65d87ea10eddbbae4f7f90716712fe146da17b2a283fb26558207ce403->enter($__internal_b0307a65d87ea10eddbbae4f7f90716712fe146da17b2a283fb26558207ce403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->getSourceContext()); })()), "request", array()), "locale", array()), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 10
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 20
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 45
        echo "
        ";
        // line 46
        if ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.rtl")) {
            // line 47
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/bootstrap-rtl.min.css"), "html", null, true);
            echo "\">
            <link rel=\"stylesheet\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/adminlte-rtl.min.css"), "html", null, true);
            echo "\">
        ";
        }
        // line 50
        echo "    </head>

    ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 162
        echo "</html>
";
        
        $__internal_09ae365e56899528c35e99c2a13792e271778883609acb6aad20013d9c4f8f12->leave($__internal_09ae365e56899528c35e99c2a13792e271778883609acb6aad20013d9c4f8f12_prof);

        
        $__internal_b0307a65d87ea10eddbbae4f7f90716712fe146da17b2a283fb26558207ce403->leave($__internal_b0307a65d87ea10eddbbae4f7f90716712fe146da17b2a283fb26558207ce403_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_8db6cf8baf20fbbbe69e8bbc80f9dc32ddbab2db30909624fb8ea5f6456a9470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8db6cf8baf20fbbbe69e8bbc80f9dc32ddbab2db30909624fb8ea5f6456a9470->enter($__internal_8db6cf8baf20fbbbe69e8bbc80f9dc32ddbab2db30909624fb8ea5f6456a9470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_fb21e4a68ac3c931b23a2921f62ed828919a4f6bcaa3f792763fa3ab8e9e6177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb21e4a68ac3c931b23a2921f62ed828919a4f6bcaa3f792763fa3ab8e9e6177->enter($__internal_fb21e4a68ac3c931b23a2921f62ed828919a4f6bcaa3f792763fa3ab8e9e6177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_fb21e4a68ac3c931b23a2921f62ed828919a4f6bcaa3f792763fa3ab8e9e6177->leave($__internal_fb21e4a68ac3c931b23a2921f62ed828919a4f6bcaa3f792763fa3ab8e9e6177_prof);

        
        $__internal_8db6cf8baf20fbbbe69e8bbc80f9dc32ddbab2db30909624fb8ea5f6456a9470->leave($__internal_8db6cf8baf20fbbbe69e8bbc80f9dc32ddbab2db30909624fb8ea5f6456a9470_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_8b983c24c7b4075fe74395faa00778450d62594c62ee4a257dec5509f22045f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b983c24c7b4075fe74395faa00778450d62594c62ee4a257dec5509f22045f7->enter($__internal_8b983c24c7b4075fe74395faa00778450d62594c62ee4a257dec5509f22045f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_a21afa2be43b1aae4916aff2a8b933a438d996047f81dc05c4bc984fc46d40e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a21afa2be43b1aae4916aff2a8b933a438d996047f81dc05c4bc984fc46d40e5->enter($__internal_a21afa2be43b1aae4916aff2a8b933a438d996047f81dc05c4bc984fc46d40e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/easyadmin-all.min.css"), "html", null, true);
        echo "\">
            <style>
                ";
        // line 15
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("_internal.custom_css");
        echo "
            </style>
        ";
        
        $__internal_a21afa2be43b1aae4916aff2a8b933a438d996047f81dc05c4bc984fc46d40e5->leave($__internal_a21afa2be43b1aae4916aff2a8b933a438d996047f81dc05c4bc984fc46d40e5_prof);

        
        $__internal_8b983c24c7b4075fe74395faa00778450d62594c62ee4a257dec5509f22045f7->leave($__internal_8b983c24c7b4075fe74395faa00778450d62594c62ee4a257dec5509f22045f7_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_3e62e6f4134c1701fd508146cdb80448a912b0457dc7862aa41f9e06d7f8614a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e62e6f4134c1701fd508146cdb80448a912b0457dc7862aa41f9e06d7f8614a->enter($__internal_3e62e6f4134c1701fd508146cdb80448a912b0457dc7862aa41f9e06d7f8614a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_046134da4cb97c9cdcb7a9ef2565e2fcf3cccab469b64dab2bbacd1100be63db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_046134da4cb97c9cdcb7a9ef2565e2fcf3cccab469b64dab2bbacd1100be63db->enter($__internal_046134da4cb97c9cdcb7a9ef2565e2fcf3cccab469b64dab2bbacd1100be63db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 24
        echo "            ";
        $context["favicon"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.favicon");
        // line 25
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["favicon"]) || array_key_exists("favicon", $context) ? $context["favicon"] : (function () { throw new Twig_Error_Runtime('Variable "favicon" does not exist.', 25, $this->getSourceContext()); })()), "mime_type", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["favicon"]) || array_key_exists("favicon", $context) ? $context["favicon"] : (function () { throw new Twig_Error_Runtime('Variable "favicon" does not exist.', 25, $this->getSourceContext()); })()), "path", array())), "html", null, true);
        echo "\" />
        ";
        
        $__internal_046134da4cb97c9cdcb7a9ef2565e2fcf3cccab469b64dab2bbacd1100be63db->leave($__internal_046134da4cb97c9cdcb7a9ef2565e2fcf3cccab469b64dab2bbacd1100be63db_prof);

        
        $__internal_3e62e6f4134c1701fd508146cdb80448a912b0457dc7862aa41f9e06d7f8614a->leave($__internal_3e62e6f4134c1701fd508146cdb80448a912b0457dc7862aa41f9e06d7f8614a_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_609677acbd893607ba1a8ec822091f949b8d50c0fc530d0f0d314ddd8fe50147 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_609677acbd893607ba1a8ec822091f949b8d50c0fc530d0f0d314ddd8fe50147->enter($__internal_609677acbd893607ba1a8ec822091f949b8d50c0fc530d0f0d314ddd8fe50147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_d62934d8e0a0ed984aa3590c9d51e046559799445201101d35d0278abf1e2285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d62934d8e0a0ed984aa3590c9d51e046559799445201101d35d0278abf1e2285->enter($__internal_d62934d8e0a0ed984aa3590c9d51e046559799445201101d35d0278abf1e2285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 29
        echo "            ";
        $this->displayBlock('adminlte_options', $context, $blocks);
        // line 42
        echo "
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/javascript/easyadmin-all.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_d62934d8e0a0ed984aa3590c9d51e046559799445201101d35d0278abf1e2285->leave($__internal_d62934d8e0a0ed984aa3590c9d51e046559799445201101d35d0278abf1e2285_prof);

        
        $__internal_609677acbd893607ba1a8ec822091f949b8d50c0fc530d0f0d314ddd8fe50147->leave($__internal_609677acbd893607ba1a8ec822091f949b8d50c0fc530d0f0d314ddd8fe50147_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_eef52e3cc203984cf4d3be981cd19d8d93c73abdd62e7b680295678d379defe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eef52e3cc203984cf4d3be981cd19d8d93c73abdd62e7b680295678d379defe5->enter($__internal_eef52e3cc203984cf4d3be981cd19d8d93c73abdd62e7b680295678d379defe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        $__internal_41b9f93b36edcabdf32d71dcea0b817bf938866a6c949864e43b22fb5a041fa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41b9f93b36edcabdf32d71dcea0b817bf938866a6c949864e43b22fb5a041fa3->enter($__internal_41b9f93b36edcabdf32d71dcea0b817bf938866a6c949864e43b22fb5a041fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        // line 30
        echo "                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            ";
        
        $__internal_41b9f93b36edcabdf32d71dcea0b817bf938866a6c949864e43b22fb5a041fa3->leave($__internal_41b9f93b36edcabdf32d71dcea0b817bf938866a6c949864e43b22fb5a041fa3_prof);

        
        $__internal_eef52e3cc203984cf4d3be981cd19d8d93c73abdd62e7b680295678d379defe5->leave($__internal_eef52e3cc203984cf4d3be981cd19d8d93c73abdd62e7b680295678d379defe5_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9682a59dcca73ea238f9f1df43163e0c0bc8c8f3cebd4dd35d11616ef8ac291 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9682a59dcca73ea238f9f1df43163e0c0bc8c8f3cebd4dd35d11616ef8ac291->enter($__internal_c9682a59dcca73ea238f9f1df43163e0c0bc8c8f3cebd4dd35d11616ef8ac291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0414368e3685c984648c8aa895a775e4eaf3facc8e47f544e495d4acc1d29b16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0414368e3685c984648c8aa895a775e4eaf3facc8e47f544e495d4acc1d29b16->enter($__internal_0414368e3685c984648c8aa895a775e4eaf3facc8e47f544e495d4acc1d29b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin sidebar-mini ";
        $this->displayBlock('body_class', $context, $blocks);
        echo " ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 53, $this->getSourceContext()); })()), "request", array()), "cookies", array()), "has", array(0 => "_easyadmin_navigation_iscollapsed"), "method")) ? ("sidebar-collapse") : (""));
        echo "\">
        <div class=\"wrapper\">
        ";
        // line 55
        $this->displayBlock('wrapper', $context, $blocks);
        // line 153
        echo "        </div>

        ";
        // line 155
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 156
        echo "
        ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 158
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "    </body>
    ";
        
        $__internal_0414368e3685c984648c8aa895a775e4eaf3facc8e47f544e495d4acc1d29b16->leave($__internal_0414368e3685c984648c8aa895a775e4eaf3facc8e47f544e495d4acc1d29b16_prof);

        
        $__internal_c9682a59dcca73ea238f9f1df43163e0c0bc8c8f3cebd4dd35d11616ef8ac291->leave($__internal_c9682a59dcca73ea238f9f1df43163e0c0bc8c8f3cebd4dd35d11616ef8ac291_prof);

    }

    // line 53
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_7eae98aa7f3fc9195eaffff83cdcb738684aae8126fa399c2b570bd4c086d6b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eae98aa7f3fc9195eaffff83cdcb738684aae8126fa399c2b570bd4c086d6b1->enter($__internal_7eae98aa7f3fc9195eaffff83cdcb738684aae8126fa399c2b570bd4c086d6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_84387b66320db1375011a59c0dc04708640a29cacf3675e9cf7c08f003dc031c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84387b66320db1375011a59c0dc04708640a29cacf3675e9cf7c08f003dc031c->enter($__internal_84387b66320db1375011a59c0dc04708640a29cacf3675e9cf7c08f003dc031c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_84387b66320db1375011a59c0dc04708640a29cacf3675e9cf7c08f003dc031c->leave($__internal_84387b66320db1375011a59c0dc04708640a29cacf3675e9cf7c08f003dc031c_prof);

        
        $__internal_7eae98aa7f3fc9195eaffff83cdcb738684aae8126fa399c2b570bd4c086d6b1->leave($__internal_7eae98aa7f3fc9195eaffff83cdcb738684aae8126fa399c2b570bd4c086d6b1_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_2ed06fcbe3ab1be845d08963cd60bb976abfe52065640b5fa3010c01c90a818e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ed06fcbe3ab1be845d08963cd60bb976abfe52065640b5fa3010c01c90a818e->enter($__internal_2ed06fcbe3ab1be845d08963cd60bb976abfe52065640b5fa3010c01c90a818e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_67a8fc8e726d8682888aedb41162ea4c46e084b8b8bb0775ecfafd6524723cdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67a8fc8e726d8682888aedb41162ea4c46e084b8b8bb0775ecfafd6524723cdb->enter($__internal_67a8fc8e726d8682888aedb41162ea4c46e084b8b8bb0775ecfafd6524723cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_67a8fc8e726d8682888aedb41162ea4c46e084b8b8bb0775ecfafd6524723cdb->leave($__internal_67a8fc8e726d8682888aedb41162ea4c46e084b8b8bb0775ecfafd6524723cdb_prof);

        
        $__internal_2ed06fcbe3ab1be845d08963cd60bb976abfe52065640b5fa3010c01c90a818e->leave($__internal_2ed06fcbe3ab1be845d08963cd60bb976abfe52065640b5fa3010c01c90a818e_prof);

    }

    // line 55
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_9e3f5f0d07ee45d15f0ada0927171a991b7979915ffb98914856cad334df2a4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e3f5f0d07ee45d15f0ada0927171a991b7979915ffb98914856cad334df2a4a->enter($__internal_9e3f5f0d07ee45d15f0ada0927171a991b7979915ffb98914856cad334df2a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_5d9a18e3453ed40b21e01af8807379a7526a6a3247c36ec89fe6b68deb9439a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d9a18e3453ed40b21e01af8807379a7526a6a3247c36ec89fe6b68deb9439a6->enter($__internal_5d9a18e3453ed40b21e01af8807379a7526a6a3247c36ec89fe6b68deb9439a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 56
        echo "            <header class=\"main-header\">
            ";
        // line 57
        $this->displayBlock('header', $context, $blocks);
        // line 110
        echo "            </header>

            <aside class=\"main-sidebar\">
            ";
        // line 113
        $this->displayBlock('sidebar', $context, $blocks);
        // line 124
        echo "            </aside>

            <div class=\"content-wrapper\">
            ";
        // line 127
        $this->displayBlock('content', $context, $blocks);
        // line 151
        echo "            </div>
        ";
        
        $__internal_5d9a18e3453ed40b21e01af8807379a7526a6a3247c36ec89fe6b68deb9439a6->leave($__internal_5d9a18e3453ed40b21e01af8807379a7526a6a3247c36ec89fe6b68deb9439a6_prof);

        
        $__internal_9e3f5f0d07ee45d15f0ada0927171a991b7979915ffb98914856cad334df2a4a->leave($__internal_9e3f5f0d07ee45d15f0ada0927171a991b7979915ffb98914856cad334df2a4a_prof);

    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        $__internal_40d5d81b0c4d187b8ca04090174a7056edb27aa231efb9ee429a9b3a14c32905 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40d5d81b0c4d187b8ca04090174a7056edb27aa231efb9ee429a9b3a14c32905->enter($__internal_40d5d81b0c4d187b8ca04090174a7056edb27aa231efb9ee429a9b3a14c32905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_f1b038eb158038399069ae76624e69bb8f097243d0676e2b1e5a42aba70fbbb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1b038eb158038399069ae76624e69bb8f097243d0676e2b1e5a42aba70fbbb3->enter($__internal_f1b038eb158038399069ae76624e69bb8f097243d0676e2b1e5a42aba70fbbb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 58
        echo "                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("toggle_navigation", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </a>

                    <div id=\"header-logo\">
                        ";
        // line 64
        $this->displayBlock('header_logo', $context, $blocks);
        // line 69
        echo "                    </div>

                    <div class=\"navbar-custom-menu\">
                    ";
        // line 72
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 107
        echo "                    </div>
                </nav>
            ";
        
        $__internal_f1b038eb158038399069ae76624e69bb8f097243d0676e2b1e5a42aba70fbbb3->leave($__internal_f1b038eb158038399069ae76624e69bb8f097243d0676e2b1e5a42aba70fbbb3_prof);

        
        $__internal_40d5d81b0c4d187b8ca04090174a7056edb27aa231efb9ee429a9b3a14c32905->leave($__internal_40d5d81b0c4d187b8ca04090174a7056edb27aa231efb9ee429a9b3a14c32905_prof);

    }

    // line 64
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_5bc2ba8b654c3bd7c0610790ce31825f5d708d49a5c879dc29c2cccc9579e659 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bc2ba8b654c3bd7c0610790ce31825f5d708d49a5c879dc29c2cccc9579e659->enter($__internal_5bc2ba8b654c3bd7c0610790ce31825f5d708d49a5c879dc29c2cccc9579e659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_ca78bfee5a64a79dc07caf9ada7436843eb959e9d88aed1cb61abedfa493448f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca78bfee5a64a79dc07caf9ada7436843eb959e9d88aed1cb61abedfa493448f->enter($__internal_ca78bfee5a64a79dc07caf9ada7436843eb959e9d88aed1cb61abedfa493448f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        // line 65
        echo "                            <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                ";
        // line 66
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name");
        echo "
                            </a>
                        ";
        
        $__internal_ca78bfee5a64a79dc07caf9ada7436843eb959e9d88aed1cb61abedfa493448f->leave($__internal_ca78bfee5a64a79dc07caf9ada7436843eb959e9d88aed1cb61abedfa493448f_prof);

        
        $__internal_5bc2ba8b654c3bd7c0610790ce31825f5d708d49a5c879dc29c2cccc9579e659->leave($__internal_5bc2ba8b654c3bd7c0610790ce31825f5d708d49a5c879dc29c2cccc9579e659_prof);

    }

    // line 72
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_275c43d873ca787c7e0820de3ade1eb958120b1dc8955ad4c0e696f2f5b04905 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_275c43d873ca787c7e0820de3ade1eb958120b1dc8955ad4c0e696f2f5b04905->enter($__internal_275c43d873ca787c7e0820de3ade1eb958120b1dc8955ad4c0e696f2f5b04905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_3b3437bc0903e69e4fd9c281b2fea5a03dc2a8a121650c2d292661a897b7686a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b3437bc0903e69e4fd9c281b2fea5a03dc2a8a121650c2d292661a897b7686a->enter($__internal_3b3437bc0903e69e4fd9c281b2fea5a03dc2a8a121650c2d292661a897b7686a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 73
        echo "                        ";
        $context["_logout_path"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getLogoutPath();
        // line 74
        echo "                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                ";
        // line 76
        $this->displayBlock('user_menu', $context, $blocks);
        // line 104
        echo "                            </li>
                        </ul>
                    ";
        
        $__internal_3b3437bc0903e69e4fd9c281b2fea5a03dc2a8a121650c2d292661a897b7686a->leave($__internal_3b3437bc0903e69e4fd9c281b2fea5a03dc2a8a121650c2d292661a897b7686a_prof);

        
        $__internal_275c43d873ca787c7e0820de3ade1eb958120b1dc8955ad4c0e696f2f5b04905->leave($__internal_275c43d873ca787c7e0820de3ade1eb958120b1dc8955ad4c0e696f2f5b04905_prof);

    }

    // line 76
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_49b4556d54b991cde8bb72640728d75d2099bef026bb5f89fa374db8e7e9c484 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49b4556d54b991cde8bb72640728d75d2099bef026bb5f89fa374db8e7e9c484->enter($__internal_49b4556d54b991cde8bb72640728d75d2099bef026bb5f89fa374db8e7e9c484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_813ad65bec08f2f56bf83f95cf735c6d3e88033ab0eb2ca7e5e43ad948155fa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_813ad65bec08f2f56bf83f95cf735c6d3e88033ab0eb2ca7e5e43ad948155fa8->enter($__internal_813ad65bec08f2f56bf83f95cf735c6d3e88033ab0eb2ca7e5e43ad948155fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        // line 77
        echo "                                    <span class=\"sr-only\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>

                                    ";
        // line 79
        if ((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), false)) : (false)) == false)) {
            // line 80
            echo "                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        ";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                    ";
        } elseif ( !        // line 82
(isset($context["_logout_path"]) || array_key_exists("_logout_path", $context) ? $context["_logout_path"] : (function () { throw new Twig_Error_Runtime('Variable "_logout_path" does not exist.', 82, $this->getSourceContext()); })())) {
            // line 83
            echo "                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        ";
            // line 84
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                    ";
        } else {
            // line 86
            echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                ";
            // line 89
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                ";
            // line 95
            $this->displayBlock('user_menu_dropdown', $context, $blocks);
            // line 100
            echo "                                            </ul>
                                        </div>
                                    ";
        }
        // line 103
        echo "                                ";
        
        $__internal_813ad65bec08f2f56bf83f95cf735c6d3e88033ab0eb2ca7e5e43ad948155fa8->leave($__internal_813ad65bec08f2f56bf83f95cf735c6d3e88033ab0eb2ca7e5e43ad948155fa8_prof);

        
        $__internal_49b4556d54b991cde8bb72640728d75d2099bef026bb5f89fa374db8e7e9c484->leave($__internal_49b4556d54b991cde8bb72640728d75d2099bef026bb5f89fa374db8e7e9c484_prof);

    }

    // line 95
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_d0d71800b720fc3366cd1bb6beb31f71c7a5c3ce1b73d5b2b0e80d3a03fd7bad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0d71800b720fc3366cd1bb6beb31f71c7a5c3ce1b73d5b2b0e80d3a03fd7bad->enter($__internal_d0d71800b720fc3366cd1bb6beb31f71c7a5c3ce1b73d5b2b0e80d3a03fd7bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        $__internal_0ebdfef97fb6663120a05b24e1db94aedb2220778b2294ba5d5f9c18ada87fd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ebdfef97fb6663120a05b24e1db94aedb2220778b2294ba5d5f9c18ada87fd5->enter($__internal_0ebdfef97fb6663120a05b24e1db94aedb2220778b2294ba5d5f9c18ada87fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        // line 96
        echo "                                                <li>
                                                    <a href=\"";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["_logout_path"]) || array_key_exists("_logout_path", $context) ? $context["_logout_path"] : (function () { throw new Twig_Error_Runtime('Variable "_logout_path" does not exist.', 97, $this->getSourceContext()); })()), "html", null, true);
        echo "\"><i class=\"fa fa-sign-out\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.signout", array(), "EasyAdminBundle"), "html", null, true);
        echo "</a>
                                                </li>
                                                ";
        
        $__internal_0ebdfef97fb6663120a05b24e1db94aedb2220778b2294ba5d5f9c18ada87fd5->leave($__internal_0ebdfef97fb6663120a05b24e1db94aedb2220778b2294ba5d5f9c18ada87fd5_prof);

        
        $__internal_d0d71800b720fc3366cd1bb6beb31f71c7a5c3ce1b73d5b2b0e80d3a03fd7bad->leave($__internal_d0d71800b720fc3366cd1bb6beb31f71c7a5c3ce1b73d5b2b0e80d3a03fd7bad_prof);

    }

    // line 113
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_8f433841b5b10de4f86998f8ea46116494bd616efb07dfe0b49f41b3cd56e236 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f433841b5b10de4f86998f8ea46116494bd616efb07dfe0b49f41b3cd56e236->enter($__internal_8f433841b5b10de4f86998f8ea46116494bd616efb07dfe0b49f41b3cd56e236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_3b91f0693cf52039e65a3c098443d49984ffe86c627d7569fb5aa910876c4968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b91f0693cf52039e65a3c098443d49984ffe86c627d7569fb5aa910876c4968->enter($__internal_3b91f0693cf52039e65a3c098443d49984ffe86c627d7569fb5aa910876c4968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 114
        echo "                <section class=\"sidebar\">
                    ";
        // line 115
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 122
        echo "                </section>
            ";
        
        $__internal_3b91f0693cf52039e65a3c098443d49984ffe86c627d7569fb5aa910876c4968->leave($__internal_3b91f0693cf52039e65a3c098443d49984ffe86c627d7569fb5aa910876c4968_prof);

        
        $__internal_8f433841b5b10de4f86998f8ea46116494bd616efb07dfe0b49f41b3cd56e236->leave($__internal_8f433841b5b10de4f86998f8ea46116494bd616efb07dfe0b49f41b3cd56e236_prof);

    }

    // line 115
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_8a2921a374577fd4e76dfae2dacd19c80517e09c64f54f0b0b41e4dca4df681c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a2921a374577fd4e76dfae2dacd19c80517e09c64f54f0b0b41e4dca4df681c->enter($__internal_8a2921a374577fd4e76dfae2dacd19c80517e09c64f54f0b0b41e4dca4df681c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_48e41467123138f55c3c2dc180063eb4523887fc135d52734c3d4218a5e3c2ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48e41467123138f55c3c2dc180063eb4523887fc135d52734c3d4218a5e3c2ef->enter($__internal_48e41467123138f55c3c2dc180063eb4523887fc135d52734c3d4218a5e3c2ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 116
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 117
array_key_exists("_entity_config", $context)) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 117, $this->getSourceContext()); })()), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 120
        echo "
                    ";
        
        $__internal_48e41467123138f55c3c2dc180063eb4523887fc135d52734c3d4218a5e3c2ef->leave($__internal_48e41467123138f55c3c2dc180063eb4523887fc135d52734c3d4218a5e3c2ef_prof);

        
        $__internal_8a2921a374577fd4e76dfae2dacd19c80517e09c64f54f0b0b41e4dca4df681c->leave($__internal_8a2921a374577fd4e76dfae2dacd19c80517e09c64f54f0b0b41e4dca4df681c_prof);

    }

    // line 127
    public function block_content($context, array $blocks = array())
    {
        $__internal_ae61102fa0966336ed8b6444ac26bc61dff1aae21de6f32819e4df0eae163d8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae61102fa0966336ed8b6444ac26bc61dff1aae21de6f32819e4df0eae163d8a->enter($__internal_ae61102fa0966336ed8b6444ac26bc61dff1aae21de6f32819e4df0eae163d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8ff04722cce8c41cf66cc8b36446948dd88c742297bb00e07d920545cc9d9547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ff04722cce8c41cf66cc8b36446948dd88c742297bb00e07d920545cc9d9547->enter($__internal_8ff04722cce8c41cf66cc8b36446948dd88c742297bb00e07d920545cc9d9547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 128
        echo "                ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 131
        echo "
                <section class=\"content-header\">
                ";
        // line 133
        $this->displayBlock('content_header', $context, $blocks);
        // line 136
        echo "                ";
        $this->displayBlock('content_help', $context, $blocks);
        // line 145
        echo "                </section>

                <section id=\"main\" class=\"content\">
                    ";
        // line 148
        $this->displayBlock('main', $context, $blocks);
        // line 149
        echo "                </section>
            ";
        
        $__internal_8ff04722cce8c41cf66cc8b36446948dd88c742297bb00e07d920545cc9d9547->leave($__internal_8ff04722cce8c41cf66cc8b36446948dd88c742297bb00e07d920545cc9d9547_prof);

        
        $__internal_ae61102fa0966336ed8b6444ac26bc61dff1aae21de6f32819e4df0eae163d8a->leave($__internal_ae61102fa0966336ed8b6444ac26bc61dff1aae21de6f32819e4df0eae163d8a_prof);

    }

    // line 128
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_2c7a5b393b708b90af315837b999e09ddd9176e09fcc141b7d4637cf5ef0b048 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c7a5b393b708b90af315837b999e09ddd9176e09fcc141b7d4637cf5ef0b048->enter($__internal_2c7a5b393b708b90af315837b999e09ddd9176e09fcc141b7d4637cf5ef0b048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_10d6a57a3315bd714b0ccc944fd16f86de6361a026f2d3194486591c2b366e0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10d6a57a3315bd714b0ccc944fd16f86de6361a026f2d3194486591c2b366e0b->enter($__internal_10d6a57a3315bd714b0ccc944fd16f86de6361a026f2d3194486591c2b366e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 129
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 129, $this->getSourceContext()); })()), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_10d6a57a3315bd714b0ccc944fd16f86de6361a026f2d3194486591c2b366e0b->leave($__internal_10d6a57a3315bd714b0ccc944fd16f86de6361a026f2d3194486591c2b366e0b_prof);

        
        $__internal_2c7a5b393b708b90af315837b999e09ddd9176e09fcc141b7d4637cf5ef0b048->leave($__internal_2c7a5b393b708b90af315837b999e09ddd9176e09fcc141b7d4637cf5ef0b048_prof);

    }

    // line 133
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_472e2c62c69b3f6ea57e11248467b8c75cc0e7f2fa5b97a0f700405ba413b21c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_472e2c62c69b3f6ea57e11248467b8c75cc0e7f2fa5b97a0f700405ba413b21c->enter($__internal_472e2c62c69b3f6ea57e11248467b8c75cc0e7f2fa5b97a0f700405ba413b21c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_2ab861df81e1163299641c11cc7e9212953e3def44a684d5aa10bc846d33fe03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ab861df81e1163299641c11cc7e9212953e3def44a684d5aa10bc846d33fe03->enter($__internal_2ab861df81e1163299641c11cc7e9212953e3def44a684d5aa10bc846d33fe03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 134
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_2ab861df81e1163299641c11cc7e9212953e3def44a684d5aa10bc846d33fe03->leave($__internal_2ab861df81e1163299641c11cc7e9212953e3def44a684d5aa10bc846d33fe03_prof);

        
        $__internal_472e2c62c69b3f6ea57e11248467b8c75cc0e7f2fa5b97a0f700405ba413b21c->leave($__internal_472e2c62c69b3f6ea57e11248467b8c75cc0e7f2fa5b97a0f700405ba413b21c_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_a763f40e03ac4e3ad81996b41ae61532c3bb587e0f57492764e77025ace34cf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a763f40e03ac4e3ad81996b41ae61532c3bb587e0f57492764e77025ace34cf7->enter($__internal_a763f40e03ac4e3ad81996b41ae61532c3bb587e0f57492764e77025ace34cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_6e34b03434f41108e7a64da33e60304139e4b0904d61c0e161094dfa9b5af314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e34b03434f41108e7a64da33e60304139e4b0904d61c0e161094dfa9b5af314->enter($__internal_6e34b03434f41108e7a64da33e60304139e4b0904d61c0e161094dfa9b5af314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_6e34b03434f41108e7a64da33e60304139e4b0904d61c0e161094dfa9b5af314->leave($__internal_6e34b03434f41108e7a64da33e60304139e4b0904d61c0e161094dfa9b5af314_prof);

        
        $__internal_a763f40e03ac4e3ad81996b41ae61532c3bb587e0f57492764e77025ace34cf7->leave($__internal_a763f40e03ac4e3ad81996b41ae61532c3bb587e0f57492764e77025ace34cf7_prof);

    }

    // line 136
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_a9fe4a3088dca2871d86f770f869f0b26d6903c0fdf77ac9f2a895fc0a4ad82c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9fe4a3088dca2871d86f770f869f0b26d6903c0fdf77ac9f2a895fc0a4ad82c->enter($__internal_a9fe4a3088dca2871d86f770f869f0b26d6903c0fdf77ac9f2a895fc0a4ad82c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_be563007d4539c1412700ba81c9d670f05dc9210302a13aa6f2cda346f9f18a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be563007d4539c1412700ba81c9d670f05dc9210302a13aa6f2cda346f9f18a7->enter($__internal_be563007d4539c1412700ba81c9d670f05dc9210302a13aa6f2cda346f9f18a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        // line 137
        echo "                    ";
        if ((array_key_exists("_entity_config", $context) && ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 137, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["_entity_config"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 137, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array"), false)) : (false)))) {
            // line 138
            echo "                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                ";
            // line 140
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["_entity_config"]) || array_key_exists("_entity_config", $context) ? $context["_entity_config"] : (function () { throw new Twig_Error_Runtime('Variable "_entity_config" does not exist.', 140, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 140, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array"), "help", array(), "array"));
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 144
        echo "                ";
        
        $__internal_be563007d4539c1412700ba81c9d670f05dc9210302a13aa6f2cda346f9f18a7->leave($__internal_be563007d4539c1412700ba81c9d670f05dc9210302a13aa6f2cda346f9f18a7_prof);

        
        $__internal_a9fe4a3088dca2871d86f770f869f0b26d6903c0fdf77ac9f2a895fc0a4ad82c->leave($__internal_a9fe4a3088dca2871d86f770f869f0b26d6903c0fdf77ac9f2a895fc0a4ad82c_prof);

    }

    // line 148
    public function block_main($context, array $blocks = array())
    {
        $__internal_b5026f61dbd22a61a0f0a7c581ad65c389a2c5cfda048466c027c67c0e654e24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5026f61dbd22a61a0f0a7c581ad65c389a2c5cfda048466c027c67c0e654e24->enter($__internal_b5026f61dbd22a61a0f0a7c581ad65c389a2c5cfda048466c027c67c0e654e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_69e0aabd09ab4670ea749dc0d80acd05c09aa257ad7db1743b55a5cd41b050df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e0aabd09ab4670ea749dc0d80acd05c09aa257ad7db1743b55a5cd41b050df->enter($__internal_69e0aabd09ab4670ea749dc0d80acd05c09aa257ad7db1743b55a5cd41b050df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_69e0aabd09ab4670ea749dc0d80acd05c09aa257ad7db1743b55a5cd41b050df->leave($__internal_69e0aabd09ab4670ea749dc0d80acd05c09aa257ad7db1743b55a5cd41b050df_prof);

        
        $__internal_b5026f61dbd22a61a0f0a7c581ad65c389a2c5cfda048466c027c67c0e654e24->leave($__internal_b5026f61dbd22a61a0f0a7c581ad65c389a2c5cfda048466c027c67c0e654e24_prof);

    }

    // line 155
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_4382c00832b7017a46d5d958dba2426bab35688d0586374097881f017d1d9447 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4382c00832b7017a46d5d958dba2426bab35688d0586374097881f017d1d9447->enter($__internal_4382c00832b7017a46d5d958dba2426bab35688d0586374097881f017d1d9447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_676b76b9d02efe90287e16796c071b7102ce1f2337677c18247ce26219c87206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_676b76b9d02efe90287e16796c071b7102ce1f2337677c18247ce26219c87206->enter($__internal_676b76b9d02efe90287e16796c071b7102ce1f2337677c18247ce26219c87206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_676b76b9d02efe90287e16796c071b7102ce1f2337677c18247ce26219c87206->leave($__internal_676b76b9d02efe90287e16796c071b7102ce1f2337677c18247ce26219c87206_prof);

        
        $__internal_4382c00832b7017a46d5d958dba2426bab35688d0586374097881f017d1d9447->leave($__internal_4382c00832b7017a46d5d958dba2426bab35688d0586374097881f017d1d9447_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  775 => 155,  758 => 148,  748 => 144,  741 => 140,  737 => 138,  734 => 137,  725 => 136,  696 => 134,  687 => 133,  674 => 129,  665 => 128,  654 => 149,  652 => 148,  647 => 145,  644 => 136,  642 => 133,  638 => 131,  635 => 128,  626 => 127,  615 => 120,  613 => 117,  611 => 116,  602 => 115,  591 => 122,  589 => 115,  586 => 114,  577 => 113,  562 => 97,  559 => 96,  550 => 95,  540 => 103,  535 => 100,  533 => 95,  524 => 89,  519 => 86,  514 => 84,  511 => 83,  509 => 82,  505 => 81,  502 => 80,  500 => 79,  494 => 77,  485 => 76,  473 => 104,  471 => 76,  467 => 74,  464 => 73,  455 => 72,  442 => 66,  433 => 65,  424 => 64,  412 => 107,  410 => 72,  405 => 69,  403 => 64,  396 => 60,  392 => 58,  383 => 57,  372 => 151,  370 => 127,  365 => 124,  363 => 113,  358 => 110,  356 => 57,  353 => 56,  344 => 55,  311 => 53,  300 => 160,  291 => 158,  287 => 157,  284 => 156,  282 => 155,  278 => 153,  276 => 55,  266 => 53,  257 => 52,  236 => 30,  227 => 29,  215 => 43,  212 => 42,  209 => 29,  200 => 28,  185 => 25,  182 => 24,  173 => 23,  160 => 15,  154 => 13,  145 => 12,  127 => 10,  116 => 162,  114 => 52,  110 => 50,  105 => 48,  100 => 47,  98 => 46,  95 => 45,  93 => 28,  90 => 27,  88 => 23,  85 => 22,  76 => 20,  72 => 19,  69 => 18,  67 => 12,  62 => 10,  51 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale|split('_')|first|default('en') }}\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>{% block page_title %}{{ block('content_title')|striptags|raw }}{% endblock %}</title>

        {% block head_stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/easyadmin-all.min.css') }}\">
            <style>
                {{ easyadmin_config('_internal.custom_css')|raw }}
            </style>
        {% endblock %}

        {% for css_asset in easyadmin_config('design.assets.css') %}
            <link rel=\"stylesheet\" href=\"{{ asset(css_asset) }}\">
        {% endfor %}

        {% block head_favicon %}
            {% set favicon = easyadmin_config('design.assets.favicon') %}
            <link rel=\"icon\" type=\"{{ favicon.mime_type }}\" href=\"{{ asset(favicon.path) }}\" />
        {% endblock %}

        {% block head_javascript %}
            {% block adminlte_options %}
                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            {% endblock %}

            <script src=\"{{ asset('bundles/easyadmin/javascript/easyadmin-all.min.js') }}\"></script>
        {% endblock head_javascript %}

        {% if easyadmin_config('design.rtl') %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/bootstrap-rtl.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/adminlte-rtl.min.css') }}\">
        {% endif %}
    </head>

    {% block body %}
    <body id=\"{% block body_id %}{% endblock %}\" class=\"easyadmin sidebar-mini {% block body_class %}{% endblock %} {{ app.request.cookies.has('_easyadmin_navigation_iscollapsed') ? 'sidebar-collapse' }}\">
        <div class=\"wrapper\">
        {% block wrapper %}
            <header class=\"main-header\">
            {% block header %}
                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">{{ 'toggle_navigation'|trans(domain = 'EasyAdminBundle') }}</span>
                    </a>

                    <div id=\"header-logo\">
                        {% block header_logo %}
                            <a class=\"logo {{ easyadmin_config('site_name')|length > 14 ? 'logo-long' }}\" title=\"{{ easyadmin_config('site_name')|striptags }}\" href=\"{{ path('easyadmin') }}\">
                                {{ easyadmin_config('site_name')|raw }}
                            </a>
                        {% endblock header_logo %}
                    </div>

                    <div class=\"navbar-custom-menu\">
                    {% block header_custom_menu %}
                        {% set _logout_path = easyadmin_logout_path() %}
                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                {% block user_menu %}
                                    <span class=\"sr-only\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>

                                    {% if app.user|default(false) == false %}
                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        {{ 'user.anonymous'|trans(domain = 'EasyAdminBundle') }}
                                    {% elseif not _logout_path %}
                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                    {% else %}
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                {% block user_menu_dropdown %}
                                                <li>
                                                    <a href=\"{{ _logout_path }}\"><i class=\"fa fa-sign-out\"></i> {{ 'user.signout'|trans(domain = 'EasyAdminBundle') }}</a>
                                                </li>
                                                {% endblock user_menu_dropdown %}
                                            </ul>
                                        </div>
                                    {% endif %}
                                {% endblock user_menu %}
                            </li>
                        </ul>
                    {% endblock header_custom_menu %}
                    </div>
                </nav>
            {% endblock header %}
            </header>

            <aside class=\"main-sidebar\">
            {% block sidebar %}
                <section class=\"sidebar\">
                    {% block main_menu_wrapper %}
                        {{ include([
                            _entity_config is defined ? _entity_config.templates.menu,
                            easyadmin_config('design.templates.menu'),
                            '@EasyAdmin/default/menu.html.twig'
                        ]) }}
                    {% endblock main_menu_wrapper %}
                </section>
            {% endblock sidebar %}
            </aside>

            <div class=\"content-wrapper\">
            {% block content %}
                {% block flash_messages %}
                    {{ include(_entity_config is defined ? _entity_config.templates.flash_messages : '@EasyAdmin/default/flash_messages.html.twig') }}
                {% endblock flash_messages %}

                <section class=\"content-header\">
                {% block content_header %}
                    <h1 class=\"title\">{% block content_title %}{% endblock %}</h1>
                {% endblock content_header %}
                {% block content_help %}
                    {% if _entity_config is defined and _entity_config[app.request.query.get('action')]['help']|default(false) %}
                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                {{ _entity_config[app.request.query.get('action')]['help']|trans|raw }}
                            </div>
                        </div>
                    {% endif %}
                {% endblock content_help %}
                </section>

                <section id=\"main\" class=\"content\">
                    {% block main %}{% endblock %}
                </section>
            {% endblock content %}
            </div>
        {% endblock wrapper %}
        </div>

        {% block body_javascript %}{% endblock body_javascript %}

        {% for js_asset in easyadmin_config('design.assets.js') %}
            <script src=\"{{ asset(js_asset) }}\"></script>
        {% endfor %}
    </body>
    {% endblock body %}
</html>
", "EasyAdminBundle:default:layout.html.twig", "/var/www/monsite1/mecacorp/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/layout.html.twig");
    }
}
