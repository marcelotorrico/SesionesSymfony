<?php

/* layout.html.twig */
class __TwigTemplate_15883085d818a2a849598b71e30484d5749f862eb1ea8599293b445b9b129ba8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b02f679dc8e43acf09e159835fec4f1480f6e2f1a7807071739e9baa2d2a990 = $this->env->getExtension("native_profiler");
        $__internal_5b02f679dc8e43acf09e159835fec4f1480f6e2f1a7807071739e9baa2d2a990->enter($__internal_5b02f679dc8e43acf09e159835fec4f1480f6e2f1a7807071739e9baa2d2a990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "    </body>
</html>
";
        
        $__internal_5b02f679dc8e43acf09e159835fec4f1480f6e2f1a7807071739e9baa2d2a990->leave($__internal_5b02f679dc8e43acf09e159835fec4f1480f6e2f1a7807071739e9baa2d2a990_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_da2779d24efa37d238192b34af2d96a1d3d72d80b491b887cb8a754867388126 = $this->env->getExtension("native_profiler");
        $__internal_da2779d24efa37d238192b34af2d96a1d3d72d80b491b887cb8a754867388126->enter($__internal_da2779d24efa37d238192b34af2d96a1d3d72d80b491b887cb8a754867388126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inicio Login";
        
        $__internal_da2779d24efa37d238192b34af2d96a1d3d72d80b491b887cb8a754867388126->leave($__internal_da2779d24efa37d238192b34af2d96a1d3d72d80b491b887cb8a754867388126_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a255e8cfd81147f5c6f5d2cbd2007eaf39d6f25ca6a1274a2a0cd64bb9215dfa = $this->env->getExtension("native_profiler");
        $__internal_a255e8cfd81147f5c6f5d2cbd2007eaf39d6f25ca6a1274a2a0cd64bb9215dfa->enter($__internal_a255e8cfd81147f5c6f5d2cbd2007eaf39d6f25ca6a1274a2a0cd64bb9215dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css1/style.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_a255e8cfd81147f5c6f5d2cbd2007eaf39d6f25ca6a1274a2a0cd64bb9215dfa->leave($__internal_a255e8cfd81147f5c6f5d2cbd2007eaf39d6f25ca6a1274a2a0cd64bb9215dfa_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ebf999a521a5520a936ef8e7dd2ecaf09c1e21722fab451494fde02570d186e = $this->env->getExtension("native_profiler");
        $__internal_4ebf999a521a5520a936ef8e7dd2ecaf09c1e21722fab451494fde02570d186e->enter($__internal_4ebf999a521a5520a936ef8e7dd2ecaf09c1e21722fab451494fde02570d186e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4ebf999a521a5520a936ef8e7dd2ecaf09c1e21722fab451494fde02570d186e->leave($__internal_4ebf999a521a5520a936ef8e7dd2ecaf09c1e21722fab451494fde02570d186e_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_33d2a3a46a384803445f3e122b13a9bdcc4ad5ba578591b28b52ce976b98c119 = $this->env->getExtension("native_profiler");
        $__internal_33d2a3a46a384803445f3e122b13a9bdcc4ad5ba578591b28b52ce976b98c119->enter($__internal_33d2a3a46a384803445f3e122b13a9bdcc4ad5ba578591b28b52ce976b98c119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_33d2a3a46a384803445f3e122b13a9bdcc4ad5ba578591b28b52ce976b98c119->leave($__internal_33d2a3a46a384803445f3e122b13a9bdcc4ad5ba578591b28b52ce976b98c119_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 16,  108 => 15,  102 => 14,  91 => 13,  82 => 8,  77 => 7,  71 => 6,  59 => 5,  50 => 18,  47 => 14,  45 => 13,  38 => 10,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Inicio Login{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}" />*/
/*             <link rel="stylesheet" href="{{ asset('public/css1/style.css') }}" />*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/*             <script src="{{ asset('public/js/jquery.js') }}"></script>*/
/*             <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* {# empty Twig template #}*/
/* */
