<?php

/* base.html.twig */
class __TwigTemplate_8a053c3cf6c724529ba7e9a1606d4168f46c07a339b1456d13e0a1634497a2a8 extends Twig_Template
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
        $__internal_c3541507fa0a8dd98fc555e95f15d13cdfae32857f472e66a7c410a56b856fac = $this->env->getExtension("native_profiler");
        $__internal_c3541507fa0a8dd98fc555e95f15d13cdfae32857f472e66a7c410a56b856fac->enter($__internal_c3541507fa0a8dd98fc555e95f15d13cdfae32857f472e66a7c410a56b856fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
</head>
<body>
    ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 42
        $this->displayBlock('javascripts', $context, $blocks);
        // line 43
        echo "</body>

</html>
";
        
        $__internal_c3541507fa0a8dd98fc555e95f15d13cdfae32857f472e66a7c410a56b856fac->leave($__internal_c3541507fa0a8dd98fc555e95f15d13cdfae32857f472e66a7c410a56b856fac_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f50e979cf09e330c4ad98e0f2e752d3c44f9c4beedd3df84f070ff28f4fe94af = $this->env->getExtension("native_profiler");
        $__internal_f50e979cf09e330c4ad98e0f2e752d3c44f9c4beedd3df84f070ff28f4fe94af->enter($__internal_f50e979cf09e330c4ad98e0f2e752d3c44f9c4beedd3df84f070ff28f4fe94af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Epoz";
        
        $__internal_f50e979cf09e330c4ad98e0f2e752d3c44f9c4beedd3df84f070ff28f4fe94af->leave($__internal_f50e979cf09e330c4ad98e0f2e752d3c44f9c4beedd3df84f070ff28f4fe94af_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3d25697ed2d64231d6ff3f71c22357a2e7ebb77b0b9d3aff5b6dae9c793cb6a0 = $this->env->getExtension("native_profiler");
        $__internal_3d25697ed2d64231d6ff3f71c22357a2e7ebb77b0b9d3aff5b6dae9c793cb6a0->enter($__internal_3d25697ed2d64231d6ff3f71c22357a2e7ebb77b0b9d3aff5b6dae9c793cb6a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3d25697ed2d64231d6ff3f71c22357a2e7ebb77b0b9d3aff5b6dae9c793cb6a0->leave($__internal_3d25697ed2d64231d6ff3f71c22357a2e7ebb77b0b9d3aff5b6dae9c793cb6a0_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d24e1f306b336b1457769f6222a1417482767078a904d0e04c2e2ff5c52fae2 = $this->env->getExtension("native_profiler");
        $__internal_9d24e1f306b336b1457769f6222a1417482767078a904d0e04c2e2ff5c52fae2->enter($__internal_9d24e1f306b336b1457769f6222a1417482767078a904d0e04c2e2ff5c52fae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <nav class=\"navbar navbar-default\">
        <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("showAllCharts");
        echo "\">Epoz alfa</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
              <ul class=\"nav navbar-nav\">
                <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Login</a></li>
                <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Register</a></li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("showAllCharts");
        echo "\">Home</a></li>
                <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("charts_new");
        echo "\">Add new chart</a></li>
                <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("chartsByLetters");
        echo "\">Index</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

";
        
        $__internal_9d24e1f306b336b1457769f6222a1417482767078a904d0e04c2e2ff5c52fae2->leave($__internal_9d24e1f306b336b1457769f6222a1417482767078a904d0e04c2e2ff5c52fae2_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_826ef354789130181832d503109c79446118a93666a1021df7dbc210edcf85e0 = $this->env->getExtension("native_profiler");
        $__internal_826ef354789130181832d503109c79446118a93666a1021df7dbc210edcf85e0->enter($__internal_826ef354789130181832d503109c79446118a93666a1021df7dbc210edcf85e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_826ef354789130181832d503109c79446118a93666a1021df7dbc210edcf85e0->leave($__internal_826ef354789130181832d503109c79446118a93666a1021df7dbc210edcf85e0_prof);

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
        return array (  144 => 42,  130 => 35,  126 => 34,  122 => 33,  116 => 30,  112 => 29,  103 => 23,  91 => 13,  85 => 12,  74 => 6,  62 => 5,  52 => 43,  50 => 42,  48 => 12,  41 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*     <title>{% block title %}Epoz{% endblock %}</title>*/
/*     {% block stylesheets %}{% endblock %}*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/*     <link rel="stylesheet" href="{{ asset('/css/style.css') }}" type="text/css">*/
/*     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/* </head>*/
/* <body>*/
/*     {% block body %}*/
/*     <nav class="navbar navbar-default">*/
/*         <div class="container-fluid">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="{{ path('showAllCharts')}}">Epoz alfa</a>*/
/*             </div>*/
/* */
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*               <ul class="nav navbar-nav">*/
/*                 <li><a href="{{ path('fos_user_security_login')}}">Login</a></li>*/
/*                 <li><a href="{{ path('fos_user_registration_register')}}">Register</a></li>*/
/*             </ul>*/
/*             <ul class="nav navbar-nav navbar-right">*/
/*                 <li><a href="{{ path('showAllCharts')}}">Home</a></li>*/
/*                 <li><a href="{{ path('charts_new')}}">Add new chart</a></li>*/
/*                 <li><a href="{{ path('chartsByLetters')}}">Index</a></li>*/
/*             </ul>*/
/*         </div><!-- /.navbar-collapse -->*/
/*     </div><!-- /.container-fluid -->*/
/* </nav>*/
/* */
/* {% endblock %}*/
/* {% block javascripts %}{% endblock %}*/
/* </body>*/
/* */
/* </html>*/
/* */
