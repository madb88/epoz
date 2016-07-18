<?php

/* KnpDisqusBundle::list.html.twig */
class __TwigTemplate_58681d389f660c52d0f032881ed1cd1ce0bf5242d3b45c7a6b20ca421655682c extends Twig_Template
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
        $__internal_9a049d464c50b4ce4d4688edd27a20ecb35e4074b6a31a625bec4faa73dac5e1 = $this->env->getExtension("native_profiler");
        $__internal_9a049d464c50b4ce4d4688edd27a20ecb35e4074b6a31a625bec4faa73dac5e1->enter($__internal_9a049d464c50b4ce4d4688edd27a20ecb35e4074b6a31a625bec4faa73dac5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpDisqusBundle::list.html.twig"));

        // line 1
        if ((array_key_exists("error", $context) && (twig_length_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) > 0))) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    <div id=\"disqus_thread\">
        ";
            // line 5
            if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "response", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "response", array())) > 0))) {
                // line 6
                echo "        <style type=\"text/css\">
            #dsq-comments {padding: 10px 0 0}
            .dsq-comment {position: relative;clear: both;margin: 0 0 1.5em;}
            .dsq-avatar {left: 0;position: absolute;}
            .dsq-avatar img {border: 0 none;border-radius: 3px;height: 36px;width: 36px;}
            .dsq-comment-body {padding: 0 0 0 46px;}
            .dsq-comment-header {border: 1px solid rgba(0, 0, 0, 0.15);border-radius: 3px;font-size: 13px;line-height: 14px;margin: 0 0 1em;max-height: 36px;overflow: hidden;padding: 10px;position: relative;text-overflow: ellipsis;white-space: nowrap;}
            .dsq-comment-message {word-wrap: break-word;}
            .dsq-comment-message {line-height: 1.5em;margin: 0 0 1em;}
            .dsq-comment-text {display: inline;}
            .dsq-comment-date {float: right;font-size: 90%;margin: 0 12px 0 0;}
        </style>

\t    <div id=\"dsq-content\">
\t        <ul id=\"dsq-comments\">
\t            ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "response", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                    // line 22
                    echo "\t                <li class=\"dsq-comment dsq-clearfix\" data-dsq-comment-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
                    echo "\" id=\"dsq-comment-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
                    echo "\">
\t                    <div class=\"dsq-avatar dsq-tt\">
\t                        <a href=\"";
                    // line 24
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "author", array()), "profileUrl", array()), "html", null, true);
                    echo "\">
\t                            ";
                    // line 25
                    if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isSecure", array())) {
                        // line 26
                        echo "\t                                <img alt=\"\" src=\"";
                        echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["comment"], "author", array()), "avatar", array()), "cache", array()), array("http://mediacdn" => "https://securecdn")), "html", null, true);
                        echo "\">
\t                            ";
                    } else {
                        // line 28
                        echo "\t                                <img alt=\"\" src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["comment"], "author", array()), "avatar", array()), "cache", array()), "html", null, true);
                        echo "\">
\t                            ";
                    }
                    // line 30
                    echo "\t                        </a>
\t                    </div>
\t                    <div class=\"dsq-comment-body\" id=\"dsq-comment-body-";
                    // line 32
                    echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
                    echo "\">
\t                        <div class=\"dsq-comment-header\">
\t                            <span class=\"dsq-comment-date\">";
                    // line 34
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "createdAt", array()), "Y-m-d"), "html", null, true);
                    echo "</span>
\t                            <span class=\"dsq-commenter-name\">";
                    // line 35
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "author", array()), "name", array()), "html", null, true);
                    echo "</span>
\t                        </div>

\t                        <div id=\"dsq-comment-message-";
                    // line 38
                    echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
                    echo "\" class=\"dsq-comment-message\">
\t                            <div id=\"dsq-comment-text-";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
                    echo "\" class=\"dsq-comment-text\">
\t                                ";
                    // line 40
                    echo $this->getAttribute($context["comment"], "message", array());
                    echo "
\t                            </div>
\t                        </div>
\t                    </div>
\t                </li>
\t            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "\t        </ul>
\t    </div>
        ";
            }
            // line 49
            echo "    </div>

    ";
            // line 51
            $this->loadTemplate("KnpDisqusBundle::js.html.twig", "KnpDisqusBundle::list.html.twig", 51)->display($context);
        }
        
        $__internal_9a049d464c50b4ce4d4688edd27a20ecb35e4074b6a31a625bec4faa73dac5e1->leave($__internal_9a049d464c50b4ce4d4688edd27a20ecb35e4074b6a31a625bec4faa73dac5e1_prof);

    }

    public function getTemplateName()
    {
        return "KnpDisqusBundle::list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 51,  126 => 49,  121 => 46,  109 => 40,  105 => 39,  101 => 38,  95 => 35,  91 => 34,  86 => 32,  82 => 30,  76 => 28,  70 => 26,  68 => 25,  64 => 24,  56 => 22,  52 => 21,  35 => 6,  33 => 5,  30 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if error is defined and error|length > 0 %}*/
/*     {{ error }}*/
/* {% else %}*/
/*     <div id="disqus_thread">*/
/*         {% if content.response is defined and content.response|length > 0 %}*/
/*         <style type="text/css">*/
/*             #dsq-comments {padding: 10px 0 0}*/
/*             .dsq-comment {position: relative;clear: both;margin: 0 0 1.5em;}*/
/*             .dsq-avatar {left: 0;position: absolute;}*/
/*             .dsq-avatar img {border: 0 none;border-radius: 3px;height: 36px;width: 36px;}*/
/*             .dsq-comment-body {padding: 0 0 0 46px;}*/
/*             .dsq-comment-header {border: 1px solid rgba(0, 0, 0, 0.15);border-radius: 3px;font-size: 13px;line-height: 14px;margin: 0 0 1em;max-height: 36px;overflow: hidden;padding: 10px;position: relative;text-overflow: ellipsis;white-space: nowrap;}*/
/*             .dsq-comment-message {word-wrap: break-word;}*/
/*             .dsq-comment-message {line-height: 1.5em;margin: 0 0 1em;}*/
/*             .dsq-comment-text {display: inline;}*/
/*             .dsq-comment-date {float: right;font-size: 90%;margin: 0 12px 0 0;}*/
/*         </style>*/
/* */
/* 	    <div id="dsq-content">*/
/* 	        <ul id="dsq-comments">*/
/* 	            {% for comment in content.response %}*/
/* 	                <li class="dsq-comment dsq-clearfix" data-dsq-comment-id="{{ comment.id }}" id="dsq-comment-{{ comment.id }}">*/
/* 	                    <div class="dsq-avatar dsq-tt">*/
/* 	                        <a href="{{ comment.author.profileUrl }}">*/
/* 	                            {% if app.request.isSecure %}*/
/* 	                                <img alt="" src="{{ comment.author.avatar.cache | replace({'http://mediacdn' : 'https://securecdn'}) }}">*/
/* 	                            {% else %}*/
/* 	                                <img alt="" src="{{ comment.author.avatar.cache }}">*/
/* 	                            {% endif %}*/
/* 	                        </a>*/
/* 	                    </div>*/
/* 	                    <div class="dsq-comment-body" id="dsq-comment-body-{{ comment.id }}">*/
/* 	                        <div class="dsq-comment-header">*/
/* 	                            <span class="dsq-comment-date">{{ comment.createdAt|date('Y-m-d') }}</span>*/
/* 	                            <span class="dsq-commenter-name">{{ comment.author.name }}</span>*/
/* 	                        </div>*/
/* */
/* 	                        <div id="dsq-comment-message-{{ comment.id }}" class="dsq-comment-message">*/
/* 	                            <div id="dsq-comment-text-{{ comment.id }}" class="dsq-comment-text">*/
/* 	                                {{ comment.message|raw }}*/
/* 	                            </div>*/
/* 	                        </div>*/
/* 	                    </div>*/
/* 	                </li>*/
/* 	            {% endfor %}*/
/* 	        </ul>*/
/* 	    </div>*/
/*         {% endif %}*/
/*     </div>*/
/* */
/*     {% include 'KnpDisqusBundle::js.html.twig' %}*/
/* {% endif %}*/
/* */
