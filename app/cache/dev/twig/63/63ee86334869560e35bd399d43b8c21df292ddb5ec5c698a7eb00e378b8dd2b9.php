<?php

/* AppBundle:Charts:main.html.twig */
class __TwigTemplate_b83d6a9bd5aa5e892cff2c4ad3d73010acdebd1414ed46fab2925959e568a47e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Charts:main.html.twig", 1);
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
        $__internal_1f192cf57bec5c5aa6a1e45588e87747e395ea62fdc19909b3d37b5044c8df79 = $this->env->getExtension("native_profiler");
        $__internal_1f192cf57bec5c5aa6a1e45588e87747e395ea62fdc19909b3d37b5044c8df79->enter($__internal_1f192cf57bec5c5aa6a1e45588e87747e395ea62fdc19909b3d37b5044c8df79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Charts:main.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f192cf57bec5c5aa6a1e45588e87747e395ea62fdc19909b3d37b5044c8df79->leave($__internal_1f192cf57bec5c5aa6a1e45588e87747e395ea62fdc19909b3d37b5044c8df79_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_68b000edf8ca3b826f9e6cdb51992f2da393504b7f999d27425b9465d683f39b = $this->env->getExtension("native_profiler");
        $__internal_68b000edf8ca3b826f9e6cdb51992f2da393504b7f999d27425b9465d683f39b->enter($__internal_68b000edf8ca3b826f9e6cdb51992f2da393504b7f999d27425b9465d683f39b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "EPOZ";
        
        $__internal_68b000edf8ca3b826f9e6cdb51992f2da393504b7f999d27425b9465d683f39b->leave($__internal_68b000edf8ca3b826f9e6cdb51992f2da393504b7f999d27425b9465d683f39b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_17b07ec46e35b1562e96b6a9add6c6679041f70900521a2535c92133c9272390 = $this->env->getExtension("native_profiler");
        $__internal_17b07ec46e35b1562e96b6a9add6c6679041f70900521a2535c92133c9272390->enter($__internal_17b07ec46e35b1562e96b6a9add6c6679041f70900521a2535c92133c9272390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
";
        // line 6
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<div class=\"container\">
<div class=\"row\">
    <div class=\"col-md-6 col-md-offset-5\">
        <h2>Serach your chart</h2>
            <form action=\"founded\" method=\"POST\" class=\"form-inline\">
                <div class=\"form-group\">
                    <input type=\"search\" name=\"searchPhrase\" class=\"form-control\" type=\"text\" placeholder=\"Search\" required></input>
                </div>
                <button type=\"submit\" name=\"search\" value=\"Search\" class=\"btn btn-primary\">Search</button>
            </form>
        </div>
    </div>
</div>
</div>
<div class=\"container\">
    <!--- FOUNDED CHARTS PRESENT -->
    ";
        // line 23
        if (array_key_exists("charts", $context)) {
            // line 24
            echo "    <hr>
    <div class=\"row\">
        <table class=\"table-hover\">
            <thead>
                <tr>
                    <th><p>Title</p></th>
                </tr>
            </thead>
            ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["charts"]) ? $context["charts"] : $this->getContext($context, "charts")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["chart"]) {
                // line 33
                echo "                <tr id=\"charts\">
                    <td width=\"90%\"><a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("charts_show", array("id" => $this->getAttribute($context["chart"], "id", array()))), "html", null, true);
                echo "\"><strong><p id=\"title\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["chart"], "title", array()), "html", null, true);
                echo "</p></strong></a>
                        <p id=\"description\">";
                // line 35
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["chart"], "description", array()), 0, 200), "html", null, true);
                echo "...</p>
                    </td>    
                </tr>
                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 39
                echo "                <p>No chart's found<p>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chart'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "            </table>
        </div>
    </div>
";
        }
        // line 45
        echo "<!-- Newest CHARTS -->
";
        // line 46
        if (array_key_exists("newestCharts", $context)) {
            // line 47
            echo " <div class=\"container newest\">
  <div class=\"row\">
    <div class=\"col-sm-6\">
        <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Newest Chart's</h3>
                </div>
                <div class=\"panel-body\">
        ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["newestCharts"]) ? $context["newestCharts"] : $this->getContext($context, "newestCharts")));
            foreach ($context['_seq'] as $context["_key"] => $context["chart"]) {
                // line 56
                echo "            <p><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("charts_show", array("id" => $this->getAttribute($context["chart"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["chart"], "title", array()), "html", null, true);
                echo "</a></p>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chart'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "</div>
</div>
</div>        
    <div class=\"col-sm-6\">
         <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Last comment's</h3>
                </div>
                <div class=\"panel-body\">
                    <p>TEST</p>
      </div> 
      </div>            
    </div>
  </div>
</div>
";
        }
        // line 74
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_17b07ec46e35b1562e96b6a9add6c6679041f70900521a2535c92133c9272390->leave($__internal_17b07ec46e35b1562e96b6a9add6c6679041f70900521a2535c92133c9272390_prof);

    }

    public function block_footer($context, array $blocks = array())
    {
        $__internal_78b3e688b0c9c6c14b21ab893af5eaeb062e86f9f0533aa2db13ce5361fc759e = $this->env->getExtension("native_profiler");
        $__internal_78b3e688b0c9c6c14b21ab893af5eaeb062e86f9f0533aa2db13ce5361fc759e->enter($__internal_78b3e688b0c9c6c14b21ab893af5eaeb062e86f9f0533aa2db13ce5361fc759e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_78b3e688b0c9c6c14b21ab893af5eaeb062e86f9f0533aa2db13ce5361fc759e->leave($__internal_78b3e688b0c9c6c14b21ab893af5eaeb062e86f9f0533aa2db13ce5361fc759e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Charts:main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 74,  154 => 58,  143 => 56,  139 => 55,  129 => 47,  127 => 46,  124 => 45,  118 => 41,  111 => 39,  102 => 35,  96 => 34,  93 => 33,  88 => 32,  78 => 24,  76 => 23,  56 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* {% block title %}EPOZ{% endblock %}*/
/* */
/* {% block body %} */
/* {{ parent() }}*/
/* <div class="container">*/
/* <div class="row">*/
/*     <div class="col-md-6 col-md-offset-5">*/
/*         <h2>Serach your chart</h2>*/
/*             <form action="founded" method="POST" class="form-inline">*/
/*                 <div class="form-group">*/
/*                     <input type="search" name="searchPhrase" class="form-control" type="text" placeholder="Search" required></input>*/
/*                 </div>*/
/*                 <button type="submit" name="search" value="Search" class="btn btn-primary">Search</button>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* </div>*/
/* <div class="container">*/
/*     <!--- FOUNDED CHARTS PRESENT -->*/
/*     {% if charts is defined%}*/
/*     <hr>*/
/*     <div class="row">*/
/*         <table class="table-hover">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th><p>Title</p></th>*/
/*                 </tr>*/
/*             </thead>*/
/*             {% for chart in charts %}*/
/*                 <tr id="charts">*/
/*                     <td width="90%"><a href="{{ path('charts_show', {"id": chart.id })}}"><strong><p id="title">{{ chart.title }}</p></strong></a>*/
/*                         <p id="description">{{ chart.description | slice (0,200) }}...</p>*/
/*                     </td>    */
/*                 </tr>*/
/*                 {% else %}*/
/*                 <p>No chart's found<p>*/
/*                 {% endfor %}*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* {% endif %}*/
/* <!-- Newest CHARTS -->*/
/* {% if newestCharts is defined%}*/
/*  <div class="container newest">*/
/*   <div class="row">*/
/*     <div class="col-sm-6">*/
/*         <div class="panel panel-info">*/
/*                 <div class="panel-heading">*/
/*                     <h3 class="panel-title">Newest Chart's</h3>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*         {% for chart in newestCharts %}*/
/*             <p><a href="{{ path('charts_show', {"id": chart.id })}}">{{ chart.title }}</a></p>*/
/*             {% endfor %}*/
/* </div>*/
/* </div>*/
/* </div>        */
/*     <div class="col-sm-6">*/
/*          <div class="panel panel-info">*/
/*                 <div class="panel-heading">*/
/*                     <h3 class="panel-title">Last comment's</h3>*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     <p>TEST</p>*/
/*       </div> */
/*       </div>            */
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {% endif %}*/
/* {% block footer %}{% endblock %}*/
/* {% endblock %}*/
