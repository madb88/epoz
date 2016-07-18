<?php

/* base.html.twig */
class __TwigTemplate_56d1060cf4991df95e6d819ae3ab89e408bc4c2eb14ba90e38509be3909440f2 extends Twig_Template
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
        $__internal_6ab8e011e434fc5d2035bc46d357a44a5e59232211f3d85bd91b9873b3c9ba04 = $this->env->getExtension("native_profiler");
        $__internal_6ab8e011e434fc5d2035bc46d357a44a5e59232211f3d85bd91b9873b3c9ba04->enter($__internal_6ab8e011e434fc5d2035bc46d357a44a5e59232211f3d85bd91b9873b3c9ba04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"</script>

</html>
";
        
        $__internal_6ab8e011e434fc5d2035bc46d357a44a5e59232211f3d85bd91b9873b3c9ba04->leave($__internal_6ab8e011e434fc5d2035bc46d357a44a5e59232211f3d85bd91b9873b3c9ba04_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cef2b939d4ef3dceb9e949e75bdcb9aee58596e5de6225747a0a51ed181b2da0 = $this->env->getExtension("native_profiler");
        $__internal_cef2b939d4ef3dceb9e949e75bdcb9aee58596e5de6225747a0a51ed181b2da0->enter($__internal_cef2b939d4ef3dceb9e949e75bdcb9aee58596e5de6225747a0a51ed181b2da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Epoz";
        
        $__internal_cef2b939d4ef3dceb9e949e75bdcb9aee58596e5de6225747a0a51ed181b2da0->leave($__internal_cef2b939d4ef3dceb9e949e75bdcb9aee58596e5de6225747a0a51ed181b2da0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_211e88ecef68f1018fb60ac920b0f3f4029af90aac45941426f55384c76a746f = $this->env->getExtension("native_profiler");
        $__internal_211e88ecef68f1018fb60ac920b0f3f4029af90aac45941426f55384c76a746f->enter($__internal_211e88ecef68f1018fb60ac920b0f3f4029af90aac45941426f55384c76a746f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_211e88ecef68f1018fb60ac920b0f3f4029af90aac45941426f55384c76a746f->leave($__internal_211e88ecef68f1018fb60ac920b0f3f4029af90aac45941426f55384c76a746f_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2830220c8b04cded35d605d9ec3dd4a5d00962d60b5657ece94865bd952dc55 = $this->env->getExtension("native_profiler");
        $__internal_b2830220c8b04cded35d605d9ec3dd4a5d00962d60b5657ece94865bd952dc55->enter($__internal_b2830220c8b04cded35d605d9ec3dd4a5d00962d60b5657ece94865bd952dc55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b2830220c8b04cded35d605d9ec3dd4a5d00962d60b5657ece94865bd952dc55->leave($__internal_b2830220c8b04cded35d605d9ec3dd4a5d00962d60b5657ece94865bd952dc55_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a0f2a8bb930ea2568ce28c1b16965ec75d3e9238bf1fba3ac29fac971909080d = $this->env->getExtension("native_profiler");
        $__internal_a0f2a8bb930ea2568ce28c1b16965ec75d3e9238bf1fba3ac29fac971909080d->enter($__internal_a0f2a8bb930ea2568ce28c1b16965ec75d3e9238bf1fba3ac29fac971909080d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a0f2a8bb930ea2568ce28c1b16965ec75d3e9238bf1fba3ac29fac971909080d->leave($__internal_a0f2a8bb930ea2568ce28c1b16965ec75d3e9238bf1fba3ac29fac971909080d_prof);

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
        return array (  145 => 42,  131 => 35,  127 => 34,  123 => 33,  117 => 30,  113 => 29,  104 => 23,  92 => 13,  86 => 12,  75 => 6,  63 => 5,  52 => 43,  50 => 42,  48 => 12,  41 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
/* <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"</script>*/
/* */
/* </html>*/
/* */
