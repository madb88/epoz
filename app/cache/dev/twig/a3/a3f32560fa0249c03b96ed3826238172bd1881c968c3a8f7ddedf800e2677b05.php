<?php

/* AppBundle:Charts:showAll.html.twig */
class __TwigTemplate_7e118259a7a88951f615d40adbfb73b7604ad471504488f3028bf60c942d8e63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Charts:showAll.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a429afefd56a0db23e06e2476d2a8150368721cdfa18564e55f52c1696cb8204 = $this->env->getExtension("native_profiler");
        $__internal_a429afefd56a0db23e06e2476d2a8150368721cdfa18564e55f52c1696cb8204->enter($__internal_a429afefd56a0db23e06e2476d2a8150368721cdfa18564e55f52c1696cb8204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Charts:showAll.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a429afefd56a0db23e06e2476d2a8150368721cdfa18564e55f52c1696cb8204->leave($__internal_a429afefd56a0db23e06e2476d2a8150368721cdfa18564e55f52c1696cb8204_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e4241dd2bd8102f986d78d4de7ba609b228ed46ec46bbfea5534178c9a70d8a = $this->env->getExtension("native_profiler");
        $__internal_8e4241dd2bd8102f986d78d4de7ba609b228ed46ec46bbfea5534178c9a70d8a->enter($__internal_8e4241dd2bd8102f986d78d4de7ba609b228ed46ec46bbfea5534178c9a70d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "All Charts's";
        
        $__internal_8e4241dd2bd8102f986d78d4de7ba609b228ed46ec46bbfea5534178c9a70d8a->leave($__internal_8e4241dd2bd8102f986d78d4de7ba609b228ed46ec46bbfea5534178c9a70d8a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6a47fd78bb67ea9bf4cd1f664705a04840bc003de87545a3202c944e7bafc01 = $this->env->getExtension("native_profiler");
        $__internal_a6a47fd78bb67ea9bf4cd1f664705a04840bc003de87545a3202c944e7bafc01->enter($__internal_a6a47fd78bb67ea9bf4cd1f664705a04840bc003de87545a3202c944e7bafc01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
";
        // line 6
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container container-fluid\">
        <div class=\"row\">
              <div class=\"col-md-12\">
                <h1>Charts for: ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["letter"]) ? $context["letter"] : $this->getContext($context, "letter")), "html", null, true);
        echo "</h1>
                <hr>
                <table class=\"table table-condensed\">
                    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["charts"]) ? $context["charts"] : $this->getContext($context, "charts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["chart"]) {
            // line 14
            echo "                        <tr>
                            <td width=\"90%\"><strong><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("charts_show", array("id" => $this->getAttribute($context["chart"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["chart"], "title", array()), "html", null, true);
            echo "</strong></a></td>
                        </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 18
            echo "                        <p>No Charts<p>
            
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chart'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </table>
    </div>
</div>
</div>
<footer class=\"footer\">
<div class=\"container\">
    <div class=\"row\">
        <div class=\"btn-group\" role=\"group\" aria-label=\"...\">
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["letters"]) ? $context["letters"] : $this->getContext($context, "letters")));
        foreach ($context['_seq'] as $context["_key"] => $context["letter"]) {
            // line 30
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("chartsByLetters");
            echo "/";
            echo twig_escape_filter($this->env, $context["letter"], "html", null, true);
            echo "\" class=\"btn btn-default btn\" role=\"button\"><strong>";
            echo twig_escape_filter($this->env, $context["letter"], "html", null, true);
            echo "</strong></a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['letter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </div>
</div>
</footer>
";
        // line 35
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_a6a47fd78bb67ea9bf4cd1f664705a04840bc003de87545a3202c944e7bafc01->leave($__internal_a6a47fd78bb67ea9bf4cd1f664705a04840bc003de87545a3202c944e7bafc01_prof);

    }

    public function block_footer($context, array $blocks = array())
    {
        $__internal_ad1f155adbac9db84a0fdc96eb5e46c806b5e9c373ab4be00bfcd911e684ac0f = $this->env->getExtension("native_profiler");
        $__internal_ad1f155adbac9db84a0fdc96eb5e46c806b5e9c373ab4be00bfcd911e684ac0f->enter($__internal_ad1f155adbac9db84a0fdc96eb5e46c806b5e9c373ab4be00bfcd911e684ac0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_ad1f155adbac9db84a0fdc96eb5e46c806b5e9c373ab4be00bfcd911e684ac0f->leave($__internal_ad1f155adbac9db84a0fdc96eb5e46c806b5e9c373ab4be00bfcd911e684ac0f_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Charts:showAll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 35,  122 => 32,  109 => 30,  105 => 29,  95 => 21,  87 => 18,  77 => 15,  74 => 14,  69 => 13,  63 => 10,  56 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* {% block title %}All Charts's{% endblock %}*/
/* */
/* {% block body %} */
/* {{ parent() }}*/
/*     <div class="container container-fluid">*/
/*         <div class="row">*/
/*               <div class="col-md-12">*/
/*                 <h1>Charts for: {{ letter }}</h1>*/
/*                 <hr>*/
/*                 <table class="table table-condensed">*/
/*                     {% for chart in charts %}*/
/*                         <tr>*/
/*                             <td width="90%"><strong><a href="{{ path('charts_show', { 'id': chart.id })}}">{{ chart.title }}</strong></a></td>*/
/*                         </tr>*/
/*                         {% else %}*/
/*                         <p>No Charts<p>*/
/*             */
/*             {% endfor %}*/
/*         </table>*/
/*     </div>*/
/* </div>*/
/* </div>*/
/* <footer class="footer">*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="btn-group" role="group" aria-label="...">*/
/*             {% for letter in letters %}*/
/*                 <a href="{{ path('chartsByLetters')}}/{{letter}}" class="btn btn-default btn" role="button"><strong>{{letter}}</strong></a>*/
/*             {% endfor %}*/
/*     </div>*/
/* </div>*/
/* </footer>*/
/* {% block footer %}{% endblock %}*/
/* {% endblock %}*/
