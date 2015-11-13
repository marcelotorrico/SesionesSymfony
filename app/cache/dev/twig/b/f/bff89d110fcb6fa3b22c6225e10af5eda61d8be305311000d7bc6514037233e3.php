<?php

/* MTDLoginBundle:Login:estudianteInicio.html.twig */
class __TwigTemplate_763995a6d633c2a439eda00de64061ffaed91d7376da4050a97a4a1ce6bbc9ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "MTDLoginBundle:Login:estudianteInicio.html.twig", 1);
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
        $__internal_537eca8660093e290e907e055962de98a2b133010916f141be853ebe1df2e3ff = $this->env->getExtension("native_profiler");
        $__internal_537eca8660093e290e907e055962de98a2b133010916f141be853ebe1df2e3ff->enter($__internal_537eca8660093e290e907e055962de98a2b133010916f141be853ebe1df2e3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MTDLoginBundle:Login:estudianteInicio.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_537eca8660093e290e907e055962de98a2b133010916f141be853ebe1df2e3ff->leave($__internal_537eca8660093e290e907e055962de98a2b133010916f141be853ebe1df2e3ff_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_54c08a4572adbade7f91b9f7ba05c0cf5bb6da6715a3214154746c6da46a582b = $this->env->getExtension("native_profiler");
        $__internal_54c08a4572adbade7f91b9f7ba05c0cf5bb6da6715a3214154746c6da46a582b->enter($__internal_54c08a4572adbade7f91b9f7ba05c0cf5bb6da6715a3214154746c6da46a582b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container\" style=\"text-align:center;\">
        <font FACE=\"courier\"  color=\"blue\">
            <h1 id=\"\"><b>MENU PRINCIPAL</b></h1>
        </font>
        </br>
        <a href=\"/inscripciones/nueva.php\"><button class=\"btn btn-primary glyphicon glyphicon-check\">    Inscribirse      </button></a>
        <a href=\"tareas.php\"><button class=\"btn btn-primary glyphicon glyphicon-file \">     Ver Tareas      </button></a>
        <a href=\"../../index.php\"><button class=\"btn btn-primary glyphicon glyphicon-remove-circle\"> Cerrar sesion </button></a>
            <br><br><br>
             <center>  

        <div id = 'calendario'></div>
        </center>
        <script type=\"text/javascript\" src=\"/js/calendario.js\"></script>
        <?php require \"_cargarTareas.php\"; ?>
        </div>
";
        
        $__internal_54c08a4572adbade7f91b9f7ba05c0cf5bb6da6715a3214154746c6da46a582b->leave($__internal_54c08a4572adbade7f91b9f7ba05c0cf5bb6da6715a3214154746c6da46a582b_prof);

    }

    public function getTemplateName()
    {
        return "MTDLoginBundle:Login:estudianteInicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/*     <div class="container" style="text-align:center;">*/
/*         <font FACE="courier"  color="blue">*/
/*             <h1 id=""><b>MENU PRINCIPAL</b></h1>*/
/*         </font>*/
/*         </br>*/
/*         <a href="/inscripciones/nueva.php"><button class="btn btn-primary glyphicon glyphicon-check">    Inscribirse      </button></a>*/
/*         <a href="tareas.php"><button class="btn btn-primary glyphicon glyphicon-file ">     Ver Tareas      </button></a>*/
/*         <a href="../../index.php"><button class="btn btn-primary glyphicon glyphicon-remove-circle"> Cerrar sesion </button></a>*/
/*             <br><br><br>*/
/*              <center>  */
/* */
/*         <div id = 'calendario'></div>*/
/*         </center>*/
/*         <script type="text/javascript" src="/js/calendario.js"></script>*/
/*         <?php require "_cargarTareas.php"; ?>*/
/*         </div>*/
/* {% endblock %}*/
/* */
