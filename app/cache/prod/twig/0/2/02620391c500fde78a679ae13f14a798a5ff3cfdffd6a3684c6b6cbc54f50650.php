<?php

/* MTDRegistroBundle:Default:index.html.twig */
class __TwigTemplate_9a605b1c69cfebbaefa797ea776f4d0fe6ead33ec457714dc84f9edaf7db1d11 extends Twig_Template
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
        $__internal_e20aaa2ccb73ab457730ffec03dce6acc8818afcf547a5e4925acbf9288c771c = $this->env->getExtension("native_profiler");
        $__internal_e20aaa2ccb73ab457730ffec03dce6acc8818afcf547a5e4925acbf9288c771c->enter($__internal_e20aaa2ccb73ab457730ffec03dce6acc8818afcf547a5e4925acbf9288c771c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MTDRegistroBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_e20aaa2ccb73ab457730ffec03dce6acc8818afcf547a5e4925acbf9288c771c->leave($__internal_e20aaa2ccb73ab457730ffec03dce6acc8818afcf547a5e4925acbf9288c771c_prof);

    }

    public function getTemplateName()
    {
        return "MTDRegistroBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* Hello {{ name }}!*/
/* */
