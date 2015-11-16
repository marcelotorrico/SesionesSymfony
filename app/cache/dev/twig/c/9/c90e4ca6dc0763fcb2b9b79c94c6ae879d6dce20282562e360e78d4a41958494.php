<?php

/* MTDRegistroBundle:Registro:index.html.twig */
class __TwigTemplate_16a536b4052d82fbfa1912f1d00cd838ab56486fad19338ae09541a7f55cfa73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "MTDRegistroBundle:Registro:index.html.twig", 1);
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
        $__internal_f39cd04ab0dce48d0bfa4de1a19db3bcacd008da3fcb883f2efe80bbf871dd0d = $this->env->getExtension("native_profiler");
        $__internal_f39cd04ab0dce48d0bfa4de1a19db3bcacd008da3fcb883f2efe80bbf871dd0d->enter($__internal_f39cd04ab0dce48d0bfa4de1a19db3bcacd008da3fcb883f2efe80bbf871dd0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MTDRegistroBundle:Registro:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f39cd04ab0dce48d0bfa4de1a19db3bcacd008da3fcb883f2efe80bbf871dd0d->leave($__internal_f39cd04ab0dce48d0bfa4de1a19db3bcacd008da3fcb883f2efe80bbf871dd0d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff837181d5fdce9afaa30f52386ed9a57c6c55fc897d210c1cd9dc4b8e7d44d7 = $this->env->getExtension("native_profiler");
        $__internal_ff837181d5fdce9afaa30f52386ed9a57c6c55fc897d210c1cd9dc4b8e7d44d7->enter($__internal_ff837181d5fdce9afaa30f52386ed9a57c6c55fc897d210c1cd9dc4b8e7d44d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 5
            echo "        <script>alert('";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "');</script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    ";
        // line 8
        echo "        ";
        // line 9
        echo "            ";
        // line 10
        echo "        ";
        // line 11
        echo "    ";
        // line 12
        echo "    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\" style=\"margin-bottom: 0\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("mtd_registro_login");
        echo "\">Inicio </a>
        </div>
    </nav>
    <br><br><br>
\t<div class=\"container\">
\t    <font face=\"courier\" color=\"blue\">
\t\t<h1><b> Registro de un Estudiante</b></h1>
            </font>
                <br>
                ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                
                    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                    <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class =\"form-group\">
                                    <div class=\"input-group\">
                                        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "usuario", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Nombre de Usuario:"));
        echo "
                                        
                                        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "usuario", array()), 'widget', array("attr" => array("placeholder" => "Escriba un nombre de usuario", "class" => "form-control inputGroup", "title" => "Minimo 3 caracteres y Maximo 12. Los primeros tres caracteres tienen que ser letras.")));
        // line 33
        echo "      
                                    </div>
                                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "usuario", array()), 'errors');
        echo "
                                </div>
                            </div>
                    </div>
                    <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class =\"form-group\">
                                    <div class=\"input-group\">
                                        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contrasena", array()), "first", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Contraseña:"));
        echo "
                                        
                                        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contrasena", array()), "first", array()), 'widget', array("attr" => array("placeholder" => "Escriba una contraseña segura", "class" => "form-control inputGroup", "title" => "Ingrese una contraseña segura. Debe tener como minimo 5 caracteres.")));
        // line 46
        echo "      
                                    </div>
                                    ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contrasena", array()), "first", array()), 'errors');
        echo "
                                </div>
                            </div>
                    </div>
                    <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class =\"form-group\">
                                    <div class=\"input-group\">
                                        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contrasena", array()), "second", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Repita su contraseña:"));
        echo "
                                        
                                        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contrasena", array()), "second", array()), 'widget', array("attr" => array("placeholder" => "Escriba su contraseña nuevamente", "class" => "form-control inputGroup", "title" => "Ingrese una contraseña segura. Debe tener como minimo 5 caracteres.")));
        // line 59
        echo "      
                                    </div>
                                    ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contrasena", array()), "second", array()), 'errors');
        echo "
                                </div>
                            </div>
                    </div>
                    <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class =\"form-group\">
                                    <div class=\"input-group\">
                                        ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Nombre:"));
        echo "
                                        
                                        ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("placeholder" => "Escriba su nombre", "class" => "form-control inputGroup", "title" => "El nombre debe empezar con mayuscula.")));
        // line 72
        echo "      
                                    </div>
                                    ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'errors');
        echo "
                                </div>
                            </div>
                    </div>
                    <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class =\"form-group\">
                                    <div class=\"input-group\">
                                        ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellido", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Apellido:"));
        echo "
                                        
                                        ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellido", array()), 'widget', array("attr" => array("placeholder" => "Escriba su apellido", "class" => "form-control inputGroup", "title" => "El apellido debe empezar con mayuscula.")));
        // line 85
        echo "      
                                    </div>
                                    ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellido", array()), 'errors');
        echo "
                                </div>
                            </div>
                    </div>
                    <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class =\"form-group\">
                                    <div class=\"input-group\">
                                        ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Telefono:"));
        echo "
                                        
                                        ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono", array()), 'widget', array("attr" => array("placeholder" => "Escriba su numero de telefono", "class" => "form-control inputGroup", "title" => "Ingrese solo números validos.")));
        // line 98
        echo "      
                                    </div>
                                    ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono", array()), 'errors');
        echo "
                                </div>
                            </div>
                    </div>
                    <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class =\"form-group\">
                                    <div class=\"input-group\">
                                        ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "correo", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Correo:"));
        echo "
                                        
                                        ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "correo", array()), 'widget', array("attr" => array("placeholder" => "Escriba su correo electronico", "class" => "form-control inputGroup", "title" => "Ingrese un correo valido.")));
        // line 111
        echo "      
                                    </div>
                                    ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "correo", array()), 'errors');
        echo "
                                </div>
                            </div>
                    </div>
                    <div class =\"form-group\">
                        <button type=\"submit\" name=\"submit\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-ok\"></span> Registrar</button>
                    </div>
                
                
                ";
        // line 122
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                
\t</div>
";
        
        $__internal_ff837181d5fdce9afaa30f52386ed9a57c6c55fc897d210c1cd9dc4b8e7d44d7->leave($__internal_ff837181d5fdce9afaa30f52386ed9a57c6c55fc897d210c1cd9dc4b8e7d44d7_prof);

    }

    public function getTemplateName()
    {
        return "MTDRegistroBundle:Registro:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 122,  236 => 113,  232 => 111,  230 => 110,  225 => 108,  214 => 100,  210 => 98,  208 => 97,  203 => 95,  192 => 87,  188 => 85,  186 => 84,  181 => 82,  170 => 74,  166 => 72,  164 => 71,  159 => 69,  148 => 61,  144 => 59,  142 => 58,  137 => 56,  126 => 48,  122 => 46,  120 => 45,  115 => 43,  104 => 35,  100 => 33,  98 => 32,  93 => 30,  85 => 25,  80 => 23,  68 => 14,  64 => 12,  62 => 11,  60 => 10,  58 => 9,  56 => 8,  54 => 7,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*         <script>alert('{{ flashMessage }}');</script>*/
/*     {% endfor %}*/
/*     {#{% for flashMessage in app.session.flashbag.get('notice') %}#}*/
/*         {#<div class="flash-notice">#}*/
/*             {#{{ flashMessage }}#}*/
/*         {#</div>#}*/
/*     {#{% endfor %}#}*/
/*     <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="margin-bottom: 0">*/
/*         <div class="navbar-header">*/
/*             <a class="navbar-brand" href="{{path('mtd_registro_login')}}">Inicio </a>*/
/*         </div>*/
/*     </nav>*/
/*     <br><br><br>*/
/* 	<div class="container">*/
/* 	    <font face="courier" color="blue">*/
/* 		<h1><b> Registro de un Estudiante</b></h1>*/
/*             </font>*/
/*                 <br>*/
/*                 {{ form_start(form) }}*/
/*                 */
/*                     {{form_errors(form)}}*/
/*                     <div class="row">*/
/*                             <div class="col-md-12">*/
/*                                 <div class ="form-group">*/
/*                                     <div class="input-group">*/
/*                                         {{ form_label(form.usuario, 'Nombre de Usuario:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/*                                         */
/*                                         {{ form_widget(form.usuario, { 'attr': {'placeholder': 'Escriba un nombre de usuario', 'class': 'form-control inputGroup',*/
/*                                                                      'title': 'Minimo 3 caracteres y Maximo 12. Los primeros tres caracteres tienen que ser letras.' } }) }}      */
/*                                     </div>*/
/*                                     {{ form_errors(form.usuario) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                     </div>*/
/*                     <div class="row">*/
/*                             <div class="col-md-12">*/
/*                                 <div class ="form-group">*/
/*                                     <div class="input-group">*/
/*                                         {{ form_label(form.contrasena.first, 'Contraseña:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/*                                         */
/*                                         {{ form_widget(form.contrasena.first, { 'attr': {'placeholder': 'Escriba una contraseña segura', 'class': 'form-control inputGroup',*/
/*                                                                      'title': 'Ingrese una contraseña segura. Debe tener como minimo 5 caracteres.'} }) }}      */
/*                                     </div>*/
/*                                     {{ form_errors(form.contrasena.first) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                     </div>*/
/*                     <div class="row">*/
/*                             <div class="col-md-12">*/
/*                                 <div class ="form-group">*/
/*                                     <div class="input-group">*/
/*                                         {{ form_label(form.contrasena.second, 'Repita su contraseña:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/*                                         */
/*                                         {{ form_widget(form.contrasena.second, { 'attr': {'placeholder': 'Escriba su contraseña nuevamente', 'class': 'form-control inputGroup',*/
/*                                                                      'title': 'Ingrese una contraseña segura. Debe tener como minimo 5 caracteres.' } }) }}      */
/*                                     </div>*/
/*                                     {{ form_errors(form.contrasena.second) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                     </div>*/
/*                     <div class="row">*/
/*                             <div class="col-md-12">*/
/*                                 <div class ="form-group">*/
/*                                     <div class="input-group">*/
/*                                         {{ form_label(form.nombre, 'Nombre:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/*                                         */
/*                                         {{ form_widget(form.nombre, { 'attr': {'placeholder': 'Escriba su nombre', 'class': 'form-control inputGroup',*/
/*                                                                      'title': 'El nombre debe empezar con mayuscula.' } }) }}      */
/*                                     </div>*/
/*                                     {{ form_errors(form.nombre) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                     </div>*/
/*                     <div class="row">*/
/*                             <div class="col-md-12">*/
/*                                 <div class ="form-group">*/
/*                                     <div class="input-group">*/
/*                                         {{ form_label(form.apellido, 'Apellido:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/*                                         */
/*                                         {{ form_widget(form.apellido, { 'attr': {'placeholder': 'Escriba su apellido', 'class': 'form-control inputGroup',*/
/*                                                                      'title': 'El apellido debe empezar con mayuscula.' } }) }}      */
/*                                     </div>*/
/*                                     {{ form_errors(form.apellido) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                     </div>*/
/*                     <div class="row">*/
/*                             <div class="col-md-12">*/
/*                                 <div class ="form-group">*/
/*                                     <div class="input-group">*/
/*                                         {{ form_label(form.telefono, 'Telefono:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/*                                         */
/*                                         {{ form_widget(form.telefono, { 'attr': {'placeholder': 'Escriba su numero de telefono', 'class': 'form-control inputGroup',*/
/*                                                                      'title': 'Ingrese solo números validos.' } }) }}      */
/*                                     </div>*/
/*                                     {{ form_errors(form.telefono) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                     </div>*/
/*                     <div class="row">*/
/*                             <div class="col-md-12">*/
/*                                 <div class ="form-group">*/
/*                                     <div class="input-group">*/
/*                                         {{ form_label(form.correo, 'Correo:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/*                                         */
/*                                         {{ form_widget(form.correo, { 'attr': {'placeholder': 'Escriba su correo electronico', 'class': 'form-control inputGroup',*/
/*                                                                      'title': 'Ingrese un correo valido.' } }) }}      */
/*                                     </div>*/
/*                                     {{ form_errors(form.correo) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                     </div>*/
/*                     <div class ="form-group">*/
/*                         <button type="submit" name="submit" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Registrar</button>*/
/*                     </div>*/
/*                 */
/*                 */
/*                 {{form_end(form) }}*/
/*                 */
/* 	</div>*/
/* {% endblock %}*/
