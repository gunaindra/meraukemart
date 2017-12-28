<?php

/* default/template/common/language.twig */
class __TwigTemplate_121ba9aa253e8de04400be99278edda4a8c1a705114bb9ab77708c619e934fe2 extends Twig_Template
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
        // line 1
        if ((twig_length_filter($this->env, (isset($context["languages"]) ? $context["languages"] : null)) > 1)) {
            // line 2
            echo "  <div class=\"pull-left\">
    <div class=\"btn-group\">
      ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 5
                echo "        ";
                if (($this->getAttribute($context["language"], "code", array()) == (isset($context["code"]) ? $context["code"] : null))) {
                    // line 6
                    echo "          <button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-link dropdown-toggle\"><img src=\"catalog/language/";
                    echo $this->getAttribute($context["language"], "code", array());
                    echo "/";
                    echo $this->getAttribute($context["language"], "code", array());
                    echo ".png\" alt=\"";
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "\"> <span class=\"hidden-xs hidden-sm hidden-md\">";
                    echo (isset($context["text_language"]) ? $context["text_language"] : null);
                    echo "</span>&nbsp;<i class=\"fa fa-caret-down\"></i></button>
        ";
                }
                // line 8
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "      <ul class=\"dropdown-menu\">
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 11
                echo "          <li>
            <a href=\"";
                // line 12
                echo $this->getAttribute($context["language"], "href", array());
                echo "\" class=\"btn btn-link btn-block language-select\" name=\"";
                echo $this->getAttribute($context["language"], "code", array());
                echo "\"><img src=\"catalog/language/";
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" alt=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\"> ";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</a>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "      </ul>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/common/language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 15,  62 => 12,  59 => 11,  55 => 10,  52 => 9,  46 => 8,  32 => 6,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if languages|length > 1 %}*/
/*   <div class="pull-left">*/
/*     <div class="btn-group">*/
/*       {% for language in languages %}*/
/*         {% if language.code == code %}*/
/*           <button type="button" data-toggle="dropdown" class="btn btn-link dropdown-toggle"><img src="catalog/language/{{ language.code }}/{{ language.code }}.png" alt="{{ language.name }}" title="{{ language.name }}"> <span class="hidden-xs hidden-sm hidden-md">{{ text_language }}</span>&nbsp;<i class="fa fa-caret-down"></i></button>*/
/*         {% endif %}*/
/*       {% endfor %}*/
/*       <ul class="dropdown-menu">*/
/*         {% for language in languages %}*/
/*           <li>*/
/*             <a href="{{ language.href }}" class="btn btn-link btn-block language-select" name="{{ language.code }}"><img src="catalog/language/{{ language.code }}/{{ language.code }}.png" alt="{{ language.name }}" title="{{ language.name }}"> {{ language.name }}</a>*/
/*           </li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* */
