<?php

/* KnpDisqusBundle::js.html.twig */
class __TwigTemplate_ad96bacb269574bb08161b359fad4a97847ffa3ada6528749eafb1c5508b80f1 extends Twig_Template
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
        $__internal_196700486493a6fd40440e085fb21032671c402a48d2600475fd536960cb6b6c = $this->env->getExtension("native_profiler");
        $__internal_196700486493a6fd40440e085fb21032671c402a48d2600475fd536960cb6b6c->enter($__internal_196700486493a6fd40440e085fb21032671c402a48d2600475fd536960cb6b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpDisqusBundle::js.html.twig"));

        // line 1
        echo "<script type=\"text/javascript\">
    var disqus_shortname = '";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["shortname"]) ? $context["shortname"] : $this->getContext($context, "shortname")), "html", null, true);
        echo "';
    var disqus_container_id = 'disqus_thread';";
        // line 5
        if (array_key_exists("debug", $context)) {
            // line 6
            echo "var disqus_developer = 1;";
        }
        // line 9
        if ($this->getAttribute((isset($context["id"]) ? $context["id"] : null), "identifier", array(), "any", true, true)) {
            // line 10
            echo "var disqus_identifier = '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "identifier", array()), "html", null, true);
            echo "';";
        } elseif ($this->getAttribute(        // line 11
(isset($context["id"]) ? $context["id"] : null), "link", array(), "any", true, true)) {
            // line 12
            echo "var disqus_link = '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "link", array()), "html", null, true);
            echo "';";
        } elseif ($this->getAttribute(        // line 13
(isset($context["id"]) ? $context["id"] : null), "id", array(), "any", true, true)) {
            // line 14
            echo "var disqus_id = '";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "id", array()), "html", null, true);
            echo "';";
        }
        // line 17
        if (array_key_exists("url", $context)) {
            // line 18
            echo "var disqus_url = '";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "';";
        }
        // line 21
        echo "var disqus_config = function () {";
        // line 22
        if (array_key_exists("language", $context)) {
            // line 23
            echo "this.language = '";
            echo twig_escape_filter($this->env, (isset($context["language"]) ? $context["language"] : $this->getContext($context, "language")), "html", null, true);
            echo "';";
        }
        // line 26
        if (array_key_exists("newCommentCallbackFunctionName", $context)) {
            // line 27
            echo "var fn = window['";
            echo twig_escape_filter($this->env, (isset($context["newCommentCallbackFunctionName"]) ? $context["newCommentCallbackFunctionName"] : $this->getContext($context, "newCommentCallbackFunctionName")), "html", null, true);
            echo "'];
            if(typeof fn === 'function') {
                this.callbacks.onNewComment = [ fn ];
            } else {
                throw \"The new comment callback function is invalid! Make sure it's set globally on the window object.\";
            }";
        }
        // line 35
        if ($this->getAttribute((isset($context["sso"]) ? $context["sso"] : null), "auth", array(), "any", true, true)) {
            // line 36
            echo "this.page.remote_auth_s3 = \"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sso"]) ? $context["sso"] : $this->getContext($context, "sso")), "auth", array()), "message", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sso"]) ? $context["sso"] : $this->getContext($context, "sso")), "auth", array()), "hmac", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sso"]) ? $context["sso"] : $this->getContext($context, "sso")), "auth", array()), "timestamp", array()), "html", null, true);
            echo "\";
            this.page.api_key = \"";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["api_key"]) ? $context["api_key"] : $this->getContext($context, "api_key")), "html", null, true);
            echo "\";";
        }
        // line 40
        if (($this->getAttribute((isset($context["sso"]) ? $context["sso"] : null), "service", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["sso"]) ? $context["sso"] : $this->getContext($context, "sso")), "service", array())) > 0))) {
            // line 41
            echo "this.sso = {";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["sso"]) ? $context["sso"] : $this->getContext($context, "sso")), "service", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["param"]) {
                // line 43
                if ( !twig_test_empty($context["param"])) {
                    // line 44
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo ": \"";
                    echo twig_escape_filter($this->env, $context["param"], "html", null, true);
                    echo "\"";
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo ",";
                    }
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['param'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "};";
        }
        // line 50
        echo "};

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
";
        
        $__internal_196700486493a6fd40440e085fb21032671c402a48d2600475fd536960cb6b6c->leave($__internal_196700486493a6fd40440e085fb21032671c402a48d2600475fd536960cb6b6c_prof);

    }

    public function getTemplateName()
    {
        return "KnpDisqusBundle::js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 50,  140 => 48,  119 => 44,  117 => 43,  100 => 42,  98 => 41,  96 => 40,  92 => 37,  83 => 36,  81 => 35,  71 => 27,  69 => 26,  64 => 23,  62 => 22,  60 => 21,  55 => 18,  53 => 17,  48 => 14,  46 => 13,  42 => 12,  40 => 11,  36 => 10,  34 => 9,  31 => 6,  29 => 5,  25 => 2,  22 => 1,);
    }
}
/* <script type="text/javascript">*/
/*     var disqus_shortname = '{{ shortname }}';*/
/*     var disqus_container_id = 'disqus_thread';*/
/* */
/*     {%- if debug is defined -%}*/
/*         var disqus_developer = 1;*/
/*     {%- endif -%}*/
/* */
/*     {%- if id.identifier is defined -%}*/
/*         var disqus_identifier = '{{ id.identifier }}';*/
/*     {%- elseif id.link is defined -%}*/
/*         var disqus_link = '{{ id.link }}';*/
/*     {%- elseif id.id is defined -%}*/
/*         var disqus_id = '{{ id.id }}';*/
/*     {%- endif -%}*/
/* */
/*     {%- if url is defined -%}*/
/*         var disqus_url = '{{ url }}';*/
/*     {%- endif -%}*/
/* */
/*     var disqus_config = function () {*/
/*         {%- if language is defined -%}*/
/*             this.language = '{{ language }}';*/
/*         {%- endif -%}*/
/* */
/*         {%- if newCommentCallbackFunctionName is defined -%}*/
/*             var fn = window['{{ newCommentCallbackFunctionName }}'];*/
/*             if(typeof fn === 'function') {*/
/*                 this.callbacks.onNewComment = [ fn ];*/
/*             } else {*/
/*                 throw "The new comment callback function is invalid! Make sure it's set globally on the window object.";*/
/*             }*/
/*         {%- endif -%}*/
/* */
/*         {%- if sso.auth is defined -%}*/
/*             this.page.remote_auth_s3 = "{{ sso.auth.message }} {{ sso.auth.hmac }} {{ sso.auth.timestamp }}";*/
/*             this.page.api_key = "{{api_key}}";*/
/*         {%- endif -%}*/
/* */
/*         {%- if sso.service is defined and sso.service|length > 0 -%}*/
/*             this.sso = {*/
/*             {%- for key, param in sso.service -%}*/
/*                 {%- if param is not empty -%}*/
/*                     {{ key }}: "{{ param }}"{% if not loop.last %},{% endif %}*/
/*                 {%- endif %}*/
/*             {%- endfor -%}*/
/* */
/*             };*/
/*         {%- endif -%}*/
/*     };*/
/* */
/*     /* * * DON'T EDIT BELOW THIS LINE * * *//* */
/*     (function() {*/
/*         var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;*/
/*         dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';*/
/*         (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);*/
/*     })();*/
/* </script>*/
/* */
