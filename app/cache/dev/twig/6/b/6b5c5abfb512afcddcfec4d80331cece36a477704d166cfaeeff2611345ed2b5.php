<?php

/* MTDLoginBundle:Login:estudianteInscripcion.html.twig */
class __TwigTemplate_aa457e041d93fa2526c61a0d7d984a658ec031fb2ac3b2ff6dbf92c922ed239a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "MTDLoginBundle:Login:estudianteInscripcion.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a8ecf2a4d497bd6cecfa8ec5f67911ab798c5a1b85aa5ca5065ba403039e4bb = $this->env->getExtension("native_profiler");
        $__internal_2a8ecf2a4d497bd6cecfa8ec5f67911ab798c5a1b85aa5ca5065ba403039e4bb->enter($__internal_2a8ecf2a4d497bd6cecfa8ec5f67911ab798c5a1b85aa5ca5065ba403039e4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MTDLoginBundle:Login:estudianteInscripcion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a8ecf2a4d497bd6cecfa8ec5f67911ab798c5a1b85aa5ca5065ba403039e4bb->leave($__internal_2a8ecf2a4d497bd6cecfa8ec5f67911ab798c5a1b85aa5ca5065ba403039e4bb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_141f89838243334f7d9a6fb642ce4b497a608e43b6419edba253b95e6ff2a706 = $this->env->getExtension("native_profiler");
        $__internal_141f89838243334f7d9a6fb642ce4b497a608e43b6419edba253b95e6ff2a706->enter($__internal_141f89838243334f7d9a6fb642ce4b497a608e43b6419edba253b95e6ff2a706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div id=\"mostrar\">
        <div class=\"container\">
                <font face=\"courier\" color=\"blue\">
                    <h1><b> Registro a una Materia</b></h1>
                </font>
                    <br>
                    <div id=\"mensaje\">

                    </div>
                    <div id=\"main\">
                    ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

                        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                        <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class =\"form-group\">
                                        <div class=\"input-group\">
                                            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "materia", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Nombre de Materia:"));
        echo "

                                            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "materia", array()), 'widget', array("attr" => array("placeholder" => "Escriba un nombre de usuario", "class" => "form-control inputGroup", "title" => "Minimo 3 caracteres y Maximo 12. Los primeros tres caracteres tienen que ser letras.")));
        // line 25
        echo "      
                                        </div>
                                        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "materia", array()), 'errors');
        echo "
                                    </div>
                                </div>
                        </div>
                        <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class =\"form-group\">
                                        <div class=\"input-group\">
                                            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "docente", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Nombre del Docente:"));
        echo "

                                            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "docente", array()), 'widget', array("attr" => array("placeholder" => "Escriba un nombre de usuario", "class" => "form-control inputGroup", "title" => "Minimo 3 caracteres y Maximo 12. Los primeros tres caracteres tienen que ser letras.")));
        // line 38
        echo "      
                                        </div>
                                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "docente", array()), 'errors');
        echo "
                                    </div>
                                </div>
                        </div>
                        <div class =\"form-group\">
                            <button type=\"submit\" id =\"enviar\" name=\"enviar\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-ok\"></span> Registrar</button>
                        </div>


                    ";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    </div>
        </div>
    </div>
";
        
        $__internal_141f89838243334f7d9a6fb642ce4b497a608e43b6419edba253b95e6ff2a706->leave($__internal_141f89838243334f7d9a6fb642ce4b497a608e43b6419edba253b95e6ff2a706_prof);

    }

    public function getTemplateName()
    {
        return "MTDLoginBundle:Login:estudianteInscripcion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 49,  101 => 40,  97 => 38,  95 => 37,  90 => 35,  79 => 27,  75 => 25,  73 => 24,  68 => 22,  60 => 17,  55 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/*     <div id="mostrar">*/
/*         <div class="container">*/
/*                 <font face="courier" color="blue">*/
/*                     <h1><b> Registro a una Materia</b></h1>*/
/*                 </font>*/
/*                     <br>*/
/*                     <div id="mensaje">*/
/* */
/*                     </div>*/
/*                     <div id="main">*/
/*                     {{ form_start(form) }}*/
/* */
/*                         {{form_errors(form)}}*/
/*                         <div class="row">*/
/*                                 <div class="col-md-12">*/
/*                                     <div class ="form-group">*/
/*                                         <div class="input-group">*/
/*                                             {{ form_label(form.materia, 'Nombre de Materia:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/* */
/*                                             {{ form_widget(form.materia, { 'attr': {'placeholder': 'Escriba un nombre de usuario', 'class': 'form-control inputGroup',*/
/*                                                                          'title': 'Minimo 3 caracteres y Maximo 12. Los primeros tres caracteres tienen que ser letras.' } }) }}      */
/*                                         </div>*/
/*                                         {{ form_errors(form.materia) }}*/
/*                                     </div>*/
/*                                 </div>*/
/*                         </div>*/
/*                         <div class="row">*/
/*                                 <div class="col-md-12">*/
/*                                     <div class ="form-group">*/
/*                                         <div class="input-group">*/
/*                                             {{ form_label(form.docente, 'Nombre del Docente:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/* */
/*                                             {{ form_widget(form.docente, { 'attr': {'placeholder': 'Escriba un nombre de usuario', 'class': 'form-control inputGroup',*/
/*                                                                          'title': 'Minimo 3 caracteres y Maximo 12. Los primeros tres caracteres tienen que ser letras.' } }) }}      */
/*                                         </div>*/
/*                                         {{ form_errors(form.docente) }}*/
/*                                     </div>*/
/*                                 </div>*/
/*                         </div>*/
/*                         <div class ="form-group">*/
/*                             <button type="submit" id ="enviar" name="enviar" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Registrar</button>*/
/*                         </div>*/
/* */
/* */
/*                     {{form_end(form) }}*/
/*                     </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/*                 */
