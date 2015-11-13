<?php

/* base.html.twig */
class __TwigTemplate_3f33548302f7d7712d97e4ab6ff86fd64fbbe3332ac81cdfc38d16292e9c4568 extends Twig_Template
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
        $__internal_8673ddecdfce6e427445d2c80042f4bc91433fa8df6c4437d75811b88b7c7cf2 = $this->env->getExtension("native_profiler");
        $__internal_8673ddecdfce6e427445d2c80042f4bc91433fa8df6c4437d75811b88b7c7cf2->enter($__internal_8673ddecdfce6e427445d2c80042f4bc91433fa8df6c4437d75811b88b7c7cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_8673ddecdfce6e427445d2c80042f4bc91433fa8df6c4437d75811b88b7c7cf2->leave($__internal_8673ddecdfce6e427445d2c80042f4bc91433fa8df6c4437d75811b88b7c7cf2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf333d20fed9f4c911d1e2b5332511b6c584f1663982bb7abd5184eaad656c28 = $this->env->getExtension("native_profiler");
        $__internal_cf333d20fed9f4c911d1e2b5332511b6c584f1663982bb7abd5184eaad656c28->enter($__internal_cf333d20fed9f4c911d1e2b5332511b6c584f1663982bb7abd5184eaad656c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_cf333d20fed9f4c911d1e2b5332511b6c584f1663982bb7abd5184eaad656c28->leave($__internal_cf333d20fed9f4c911d1e2b5332511b6c584f1663982bb7abd5184eaad656c28_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c561d1b4715a9198c5629e268b87f58cd59f7ed6f826f10358245ba99d054056 = $this->env->getExtension("native_profiler");
        $__internal_c561d1b4715a9198c5629e268b87f58cd59f7ed6f826f10358245ba99d054056->enter($__internal_c561d1b4715a9198c5629e268b87f58cd59f7ed6f826f10358245ba99d054056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c561d1b4715a9198c5629e268b87f58cd59f7ed6f826f10358245ba99d054056->leave($__internal_c561d1b4715a9198c5629e268b87f58cd59f7ed6f826f10358245ba99d054056_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae083c1ca7dfb9d247c371e153bd2607beef6f9c4b1752e447e62d4e397ebde8 = $this->env->getExtension("native_profiler");
        $__internal_ae083c1ca7dfb9d247c371e153bd2607beef6f9c4b1752e447e62d4e397ebde8->enter($__internal_ae083c1ca7dfb9d247c371e153bd2607beef6f9c4b1752e447e62d4e397ebde8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ae083c1ca7dfb9d247c371e153bd2607beef6f9c4b1752e447e62d4e397ebde8->leave($__internal_ae083c1ca7dfb9d247c371e153bd2607beef6f9c4b1752e447e62d4e397ebde8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_81d7af13551775a842f483ff4766611087b1030d50bb04b7fd6f49628e75b067 = $this->env->getExtension("native_profiler");
        $__internal_81d7af13551775a842f483ff4766611087b1030d50bb04b7fd6f49628e75b067->enter($__internal_81d7af13551775a842f483ff4766611087b1030d50bb04b7fd6f49628e75b067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_81d7af13551775a842f483ff4766611087b1030d50bb04b7fd6f49628e75b067->leave($__internal_81d7af13551775a842f483ff4766611087b1030d50bb04b7fd6f49628e75b067_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
