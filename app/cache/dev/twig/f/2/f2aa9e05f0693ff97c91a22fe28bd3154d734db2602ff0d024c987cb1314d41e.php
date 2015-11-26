<?php

/* MTDLoginBundle:Login:inscripcion.html.twig */
class __TwigTemplate_3b1fcc8b5717dbfd1175bb4af1d4905f78a1d2efc1f4a2f5da84d8ff9c029c05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c5d74e771a37cacc91a4796bea3c8150a4dee1cd997db7beeb1da02bc578e35 = $this->env->getExtension("native_profiler");
        $__internal_1c5d74e771a37cacc91a4796bea3c8150a4dee1cd997db7beeb1da02bc578e35->enter($__internal_1c5d74e771a37cacc91a4796bea3c8150a4dee1cd997db7beeb1da02bc578e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MTDLoginBundle:Login:inscripcion.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_1c5d74e771a37cacc91a4796bea3c8150a4dee1cd997db7beeb1da02bc578e35->leave($__internal_1c5d74e771a37cacc91a4796bea3c8150a4dee1cd997db7beeb1da02bc578e35_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_f5e9d7f0a02178f05caca55217be77b7934f3fca647e70afb55068ff780d321e = $this->env->getExtension("native_profiler");
        $__internal_f5e9d7f0a02178f05caca55217be77b7934f3fca647e70afb55068ff780d321e->enter($__internal_f5e9d7f0a02178f05caca55217be77b7934f3fca647e70afb55068ff780d321e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "    

    <div class=\"container\">
\t    <font face=\"courier\" color=\"blue\">
\t\t<h1><b> Registro  de una Materia</b></h1>
            </font>
                <br>
                <div id=\"mensaje\">
                    
                </div>
                <div id=\"main\">
                ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                
                    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                    <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class =\"form-group\">
                                    <div class=\"input-group\">
                                        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "materia", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Nombre de Materia:"));
        echo "
                                        
                                        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "materia", array()), 'widget', array("attr" => array("placeholder" => "Escriba un nombre de usuario", "class" => "form-control inputGroup", "title" => "Minimo 3 caracteres y Maximo 12. Los primeros tres caracteres tienen que ser letras.")));
        // line 23
        echo "      
                                    </div>
                                    ";
        // line 25
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
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "docente", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Nombre del Docente:"));
        echo "
                                        
                                        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "docente", array()), 'widget', array("attr" => array("placeholder" => "Escriba un nombre de usuario", "class" => "form-control inputGroup", "title" => "Minimo 3 caracteres y Maximo 12. Los primeros tres caracteres tienen que ser letras.")));
        // line 36
        echo "      
                                    </div>
                                    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "docente", array()), 'errors');
        echo "
                                </div>
                            </div>
                    </div>
                    <div class =\"form-group\">
                        <button type=\"submit\" id =\"enviar\" name=\"enviar\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-ok\"></span> Registrar</button>
                    </div>
                
                
                ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
    </div>
";
        
        $__internal_f5e9d7f0a02178f05caca55217be77b7934f3fca647e70afb55068ff780d321e->leave($__internal_f5e9d7f0a02178f05caca55217be77b7934f3fca647e70afb55068ff780d321e_prof);

    }

    public function getTemplateName()
    {
        return "MTDLoginBundle:Login:inscripcion.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  106 => 47,  94 => 38,  90 => 36,  88 => 35,  83 => 33,  72 => 25,  68 => 23,  66 => 22,  61 => 20,  53 => 15,  48 => 13,  35 => 2,  23 => 1,);
    }
}
/* {% block body %}*/
/*     */
/* */
/*     <div class="container">*/
/* 	    <font face="courier" color="blue">*/
/* 		<h1><b> Registro  de una Materia</b></h1>*/
/*             </font>*/
/*                 <br>*/
/*                 <div id="mensaje">*/
/*                     */
/*                 </div>*/
/*                 <div id="main">*/
/*                 {{ form_start(form) }}*/
/*                 */
/*                     {{form_errors(form)}}*/
/*                     <div class="row">*/
/*                             <div class="col-md-12">*/
/*                                 <div class ="form-group">*/
/*                                     <div class="input-group">*/
/*                                         {{ form_label(form.materia, 'Nombre de Materia:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/*                                         */
/*                                         {{ form_widget(form.materia, { 'attr': {'placeholder': 'Escriba un nombre de usuario', 'class': 'form-control inputGroup',*/
/*                                                                      'title': 'Minimo 3 caracteres y Maximo 12. Los primeros tres caracteres tienen que ser letras.' } }) }}      */
/*                                     </div>*/
/*                                     {{ form_errors(form.materia) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                     </div>*/
/*                     <div class="row">*/
/*                             <div class="col-md-12">*/
/*                                 <div class ="form-group">*/
/*                                     <div class="input-group">*/
/*                                         {{ form_label(form.docente, 'Nombre del Docente:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/*                                         */
/*                                         {{ form_widget(form.docente, { 'attr': {'placeholder': 'Escriba un nombre de usuario', 'class': 'form-control inputGroup',*/
/*                                                                      'title': 'Minimo 3 caracteres y Maximo 12. Los primeros tres caracteres tienen que ser letras.' } }) }}      */
/*                                     </div>*/
/*                                     {{ form_errors(form.docente) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                     </div>*/
/*                     <div class ="form-group">*/
/*                         <button type="submit" id ="enviar" name="enviar" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Registrar</button>*/
/*                     </div>*/
/*                 */
/*                 */
/*                 {{form_end(form) }}*/
/*                 </div>*/
/*     </div>*/
/* {% endblock %}*/
