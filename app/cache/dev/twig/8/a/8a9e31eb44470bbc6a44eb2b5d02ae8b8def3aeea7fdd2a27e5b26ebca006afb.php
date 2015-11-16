<?php

/* layout.html.twig */
class __TwigTemplate_96fd477611942086fe29fb68d076b7bad333fe46761caecc20f13a249e736b85 extends Twig_Template
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
        $__internal_66abca814fc16993a1ef86a443e4e4ccec7f67fecc14820ac5117aa4ed2e3779 = $this->env->getExtension("native_profiler");
        $__internal_66abca814fc16993a1ef86a443e4e4ccec7f67fecc14820ac5117aa4ed2e3779->enter($__internal_66abca814fc16993a1ef86a443e4e4ccec7f67fecc14820ac5117aa4ed2e3779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </body>
</html>
";
        
        $__internal_66abca814fc16993a1ef86a443e4e4ccec7f67fecc14820ac5117aa4ed2e3779->leave($__internal_66abca814fc16993a1ef86a443e4e4ccec7f67fecc14820ac5117aa4ed2e3779_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d6d1ad016974c4f35c86fba96c8cc8541f2f8728d40a2b9b6bc7d185941db8dd = $this->env->getExtension("native_profiler");
        $__internal_d6d1ad016974c4f35c86fba96c8cc8541f2f8728d40a2b9b6bc7d185941db8dd->enter($__internal_d6d1ad016974c4f35c86fba96c8cc8541f2f8728d40a2b9b6bc7d185941db8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inicio Login";
        
        $__internal_d6d1ad016974c4f35c86fba96c8cc8541f2f8728d40a2b9b6bc7d185941db8dd->leave($__internal_d6d1ad016974c4f35c86fba96c8cc8541f2f8728d40a2b9b6bc7d185941db8dd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e646af85660b481ef3771b384a66f04d2c01d9d58f122d6b6f3f6d3730f48634 = $this->env->getExtension("native_profiler");
        $__internal_e646af85660b481ef3771b384a66f04d2c01d9d58f122d6b6f3f6d3730f48634->enter($__internal_e646af85660b481ef3771b384a66f04d2c01d9d58f122d6b6f3f6d3730f48634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css1/style.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_e646af85660b481ef3771b384a66f04d2c01d9d58f122d6b6f3f6d3730f48634->leave($__internal_e646af85660b481ef3771b384a66f04d2c01d9d58f122d6b6f3f6d3730f48634_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_eee5252457adb26cefad4d4714088b9998d1a119a0da02423de4508d594cd769 = $this->env->getExtension("native_profiler");
        $__internal_eee5252457adb26cefad4d4714088b9998d1a119a0da02423de4508d594cd769->enter($__internal_eee5252457adb26cefad4d4714088b9998d1a119a0da02423de4508d594cd769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "            ";
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
        ";
        
        $__internal_eee5252457adb26cefad4d4714088b9998d1a119a0da02423de4508d594cd769->leave($__internal_eee5252457adb26cefad4d4714088b9998d1a119a0da02423de4508d594cd769_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eb8a190088ebd97edc0874cc72a9a0748c0732bcbff43e82aec2d253b04d794c = $this->env->getExtension("native_profiler");
        $__internal_eb8a190088ebd97edc0874cc72a9a0748c0732bcbff43e82aec2d253b04d794c->enter($__internal_eb8a190088ebd97edc0874cc72a9a0748c0732bcbff43e82aec2d253b04d794c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_eb8a190088ebd97edc0874cc72a9a0748c0732bcbff43e82aec2d253b04d794c->leave($__internal_eb8a190088ebd97edc0874cc72a9a0748c0732bcbff43e82aec2d253b04d794c_prof);

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
        return array (  118 => 18,  113 => 17,  107 => 16,  97 => 14,  91 => 13,  82 => 8,  77 => 7,  71 => 6,  59 => 5,  50 => 20,  47 => 16,  45 => 13,  38 => 10,  36 => 6,  32 => 5,  26 => 1,);
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
/*         {% block body %}*/
/*             {{ include('menu.html.twig')}}*/
/*         {% endblock %}*/
/*         {% block javascripts %}*/
/*             <script src="{{ asset('public/js/jquery.js') }}"></script>*/
/*             <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* {# empty Twig template #}*/
/* */
