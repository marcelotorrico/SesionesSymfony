<?php

/* MTDRegistroBundle:Default:index.html.twig */
class __TwigTemplate_f5cd82e34214532500154927feadf260b4a7f7eac781a6dab6544ce0dbf3be4d extends Twig_Template
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
        $__internal_841a5817a297992481052e33ca6ba675a192643f8e53c44d2ab75aba14323699 = $this->env->getExtension("native_profiler");
        $__internal_841a5817a297992481052e33ca6ba675a192643f8e53c44d2ab75aba14323699->enter($__internal_841a5817a297992481052e33ca6ba675a192643f8e53c44d2ab75aba14323699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MTDRegistroBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_841a5817a297992481052e33ca6ba675a192643f8e53c44d2ab75aba14323699->leave($__internal_841a5817a297992481052e33ca6ba675a192643f8e53c44d2ab75aba14323699_prof);

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
