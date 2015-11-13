<?php

/* AcmeSecurityBundle:Security:login.html.twig */
class __TwigTemplate_039e129c3d753fc8c15c18762a78278ed41af66f0db43fd21e4600fec36d247f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b65fa0cf97fe52f97a6bcb785557b9fdf7e4357c9254492c61ee762d51ddb5cc = $this->env->getExtension("native_profiler");
        $__internal_b65fa0cf97fe52f97a6bcb785557b9fdf7e4357c9254492c61ee762d51ddb5cc->enter($__internal_b65fa0cf97fe52f97a6bcb785557b9fdf7e4357c9254492c61ee762d51ddb5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeSecurityBundle:Security:login.html.twig"));

        // line 1
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 2
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
";
        }
        // line 4
        echo " 
<form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
 
    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
 
    ";
        // line 17
        echo " 
    <button type=\"submit\">login</button>
</form>";
        
        $__internal_b65fa0cf97fe52f97a6bcb785557b9fdf7e4357c9254492c61ee762d51ddb5cc->leave($__internal_b65fa0cf97fe52f97a6bcb785557b9fdf7e4357c9254492c61ee762d51ddb5cc_prof);

    }

    public function getTemplateName()
    {
        return "AcmeSecurityBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  38 => 7,  33 => 5,  30 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if error %}*/
/*     <div>{{ error.message }}</div>*/
/* {% endif %}*/
/*  */
/* <form action="{{ path('login_check') }}" method="post">*/
/*     <label for="username">Username:</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/*  */
/*     <label for="password">Password:</label>*/
/*     <input type="password" id="password" name="_password" />*/
/*  */
/*     {#*/
/*         añade lo siguiente si quieres redirigir al usuario a una*/
/*         URL concreta después del login (explicado más adelante)*/
/*         <input type="hidden" name="_target_path" value="/account" />*/
/*     #}*/
/*  */
/*     <button type="submit">login</button>*/
/* </form>*/
