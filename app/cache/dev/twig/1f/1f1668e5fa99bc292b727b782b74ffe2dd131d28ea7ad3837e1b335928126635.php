<?php

/* AppBundle:Charts:show.html.twig */
class __TwigTemplate_6210d3bef7b8973b3d5ed9d02a4b6e51c21d6d988b97ad7209e0af859ae3d0aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Charts:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35d2ac4d64a67f0ebe20e74485bfd5ee628a5ccecd114af51666c0f8a71408ad = $this->env->getExtension("native_profiler");
        $__internal_35d2ac4d64a67f0ebe20e74485bfd5ee628a5ccecd114af51666c0f8a71408ad->enter($__internal_35d2ac4d64a67f0ebe20e74485bfd5ee628a5ccecd114af51666c0f8a71408ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Charts:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35d2ac4d64a67f0ebe20e74485bfd5ee628a5ccecd114af51666c0f8a71408ad->leave($__internal_35d2ac4d64a67f0ebe20e74485bfd5ee628a5ccecd114af51666c0f8a71408ad_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_97d54e4e4b272ba71afb561461f16d12cfec22fb8ac96ccdf671b13cd90a0bfb = $this->env->getExtension("native_profiler");
        $__internal_97d54e4e4b272ba71afb561461f16d12cfec22fb8ac96ccdf671b13cd90a0bfb->enter($__internal_97d54e4e4b272ba71afb561461f16d12cfec22fb8ac96ccdf671b13cd90a0bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        
        $__internal_97d54e4e4b272ba71afb561461f16d12cfec22fb8ac96ccdf671b13cd90a0bfb->leave($__internal_97d54e4e4b272ba71afb561461f16d12cfec22fb8ac96ccdf671b13cd90a0bfb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a48f0fc181ac7dc2f9e2694df33c5a191c1e355d2b9819253baf6231dae217b0 = $this->env->getExtension("native_profiler");
        $__internal_a48f0fc181ac7dc2f9e2694df33c5a191c1e355d2b9819253baf6231dae217b0->enter($__internal_a48f0fc181ac7dc2f9e2694df33c5a191c1e355d2b9819253baf6231dae217b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container\">
    <h1>Chart: ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo "</h1>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Description</h3>
        </div>
        <div class=\"panel-body\">
    <table class=\"table borderless\">
        <tr>
            <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "</td>
        </tr>
    </table>
</div>
</div>
<div class=\"panel panel-info\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Medicines</h3>
        </div>
        <div class=\"panel-body\">
    <table class=\"table borderless\">
        <tr>
            <td> ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "medicines", array()), "html", null, true);
        echo "</td>
        </tr>
    </table>
</div>
</div>
<div class=\"panel panel-danger\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Warning</h3>
        </div>
        <div class=\"panel-body\">
    <table class=\"table borderless\">
        <tr>
            <td><p>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "warning", array()), "html", null, true);
        echo "</p></td>
        </tr>
    </table>
</div>
</div>
<div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Information</h3>
        </div>
        <div class=\"panel-body\">
            <table class=\"table borderless\">
        <tbody>
            <tr>
                <th>Creation date</th>
                <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "creationDate", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Author</th>
                <td>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "user", array()), "html", null, true);
        echo "
            </tr>
        </tbody>
    </table>
</div>
</div>
";
        // line 62
        echo $this->env->getExtension('knp_disqus')->render("epoz", array("identifier" => "/december-2010/the-best-day-of-my-life/", "limit" => 10));
        echo "
</div>
";
        
        $__internal_a48f0fc181ac7dc2f9e2694df33c5a191c1e355d2b9819253baf6231dae217b0->leave($__internal_a48f0fc181ac7dc2f9e2694df33c5a191c1e355d2b9819253baf6231dae217b0_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Charts:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 62,  123 => 56,  116 => 52,  99 => 38,  84 => 26,  69 => 14,  58 => 6,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{ entity.title }}{% endblock %}*/
/* {% block body -%}*/
/*     {{ parent() }}*/
/*     <div class="container">*/
/*     <h1>Chart: {{entity.title}}</h1>*/
/*     <div class="panel panel-info">*/
/*         <div class="panel-heading">*/
/*             <h3 class="panel-title">Description</h3>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*     <table class="table borderless">*/
/*         <tr>*/
/*             <td>{{ entity.description }}</td>*/
/*         </tr>*/
/*     </table>*/
/* </div>*/
/* </div>*/
/* <div class="panel panel-info">*/
/*         <div class="panel-heading">*/
/*             <h3 class="panel-title">Medicines</h3>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*     <table class="table borderless">*/
/*         <tr>*/
/*             <td> {{ entity.medicines }}</td>*/
/*         </tr>*/
/*     </table>*/
/* </div>*/
/* </div>*/
/* <div class="panel panel-danger">*/
/*         <div class="panel-heading">*/
/*             <h3 class="panel-title">Warning</h3>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*     <table class="table borderless">*/
/*         <tr>*/
/*             <td><p>{{ entity.warning }}</p></td>*/
/*         </tr>*/
/*     </table>*/
/* </div>*/
/* </div>*/
/* <div class="panel panel-primary">*/
/*         <div class="panel-heading">*/
/*             <h3 class="panel-title">Information</h3>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             <table class="table borderless">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Creation date</th>*/
/*                 <td>{{ entity.creationDate|date('Y-m-d H:i:s') }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Author</th>*/
/*                 <td>{{ entity.user }}*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* </div>*/
/* </div>*/
/* {{ knp_disqus_render('epoz', {'identifier': '/december-2010/the-best-day-of-my-life/', 'limit': 10}) }}*/
/* </div>*/
/* {% endblock %}*/
/* */
