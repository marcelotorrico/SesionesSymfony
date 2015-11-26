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
        $__internal_a69b734994802a0d5926218a10982313ea205d9612c7507a2879451dc34546df = $this->env->getExtension("native_profiler");
        $__internal_a69b734994802a0d5926218a10982313ea205d9612c7507a2879451dc34546df->enter($__internal_a69b734994802a0d5926218a10982313ea205d9612c7507a2879451dc34546df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        // line 23
        echo "    </body>
</html>
";
        
        $__internal_a69b734994802a0d5926218a10982313ea205d9612c7507a2879451dc34546df->leave($__internal_a69b734994802a0d5926218a10982313ea205d9612c7507a2879451dc34546df_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f30257901cf096ea973b6367eda84f73935cfd2ebfd3084e047432eb9b22c778 = $this->env->getExtension("native_profiler");
        $__internal_f30257901cf096ea973b6367eda84f73935cfd2ebfd3084e047432eb9b22c778->enter($__internal_f30257901cf096ea973b6367eda84f73935cfd2ebfd3084e047432eb9b22c778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inicio Login";
        
        $__internal_f30257901cf096ea973b6367eda84f73935cfd2ebfd3084e047432eb9b22c778->leave($__internal_f30257901cf096ea973b6367eda84f73935cfd2ebfd3084e047432eb9b22c778_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e0b470d8fe33b06a03e03fb068ba873ac6e3c0f1abab22e8f9629786f4345f60 = $this->env->getExtension("native_profiler");
        $__internal_e0b470d8fe33b06a03e03fb068ba873ac6e3c0f1abab22e8f9629786f4345f60->enter($__internal_e0b470d8fe33b06a03e03fb068ba873ac6e3c0f1abab22e8f9629786f4345f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css1/style.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_e0b470d8fe33b06a03e03fb068ba873ac6e3c0f1abab22e8f9629786f4345f60->leave($__internal_e0b470d8fe33b06a03e03fb068ba873ac6e3c0f1abab22e8f9629786f4345f60_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ea050fdd6be0d15e7be5abe6545bcbd06070b5a3397c208286950779e464f14 = $this->env->getExtension("native_profiler");
        $__internal_4ea050fdd6be0d15e7be5abe6545bcbd06070b5a3397c208286950779e464f14->enter($__internal_4ea050fdd6be0d15e7be5abe6545bcbd06070b5a3397c208286950779e464f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "            ";
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
        ";
        
        $__internal_4ea050fdd6be0d15e7be5abe6545bcbd06070b5a3397c208286950779e464f14->leave($__internal_4ea050fdd6be0d15e7be5abe6545bcbd06070b5a3397c208286950779e464f14_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_01edc770f19f40906fac0edd6c66832d768844fca38049f35b8cc46864fd6499 = $this->env->getExtension("native_profiler");
        $__internal_01edc770f19f40906fac0edd6c66832d768844fca38049f35b8cc46864fd6499->enter($__internal_01edc770f19f40906fac0edd6c66832d768844fca38049f35b8cc46864fd6499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/menu.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/guardar.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_01edc770f19f40906fac0edd6c66832d768844fca38049f35b8cc46864fd6499->leave($__internal_01edc770f19f40906fac0edd6c66832d768844fca38049f35b8cc46864fd6499_prof);

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
        return array (  127 => 21,  122 => 19,  118 => 18,  113 => 17,  107 => 16,  97 => 14,  91 => 13,  82 => 8,  77 => 7,  71 => 6,  59 => 5,  50 => 23,  47 => 16,  45 => 13,  38 => 10,  36 => 6,  32 => 5,  26 => 1,);
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
/*             <script src="{{ asset('public/js/menu.js') }}"></script>*/
/* */
/*             <script src="{{ asset('public/js/guardar.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* {# empty Twig template #}*/
/* */
