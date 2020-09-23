<?php

/* default/template/information/sitemap.twig */
class __TwigTemplate_8151c471a4dbde469945ec5d54beae8feaae0bc413ff2f32fbbcae3061c089ea extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div id=\"information-sitemap\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 9
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h1>";
        // line 17
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <ul>
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 22
            echo "            <li><a href=\"";
            echo $this->getAttribute($context["category_1"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["category_1"], "name", array());
            echo "</a>
              ";
            // line 23
            if ($this->getAttribute($context["category_1"], "children", array())) {
                // line 24
                echo "              <ul>
                ";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category_1"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                    // line 26
                    echo "                <li><a href=\"";
                    echo $this->getAttribute($context["category_2"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category_2"], "name", array());
                    echo "</a>
                  ";
                    // line 27
                    if ($this->getAttribute($context["category_2"], "children", array())) {
                        // line 28
                        echo "                  <ul>
                    ";
                        // line 29
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category_2"], "children", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                            // line 30
                            echo "                    <li><a href=\"";
                            echo $this->getAttribute($context["category_3"], "href", array());
                            echo "\">";
                            echo $this->getAttribute($context["category_3"], "name", array());
                            echo "</a></li>
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 32
                        echo "                  </ul>
                  ";
                    }
                    // line 34
                    echo "                </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "              </ul>
              ";
            }
            // line 38
            echo "            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "          </ul>
        </div>
        <div class=\"col-sm-6\">
          <ul>
            <li><a href=\"";
        // line 44
        echo (isset($context["special"]) ? $context["special"] : null);
        echo "\">";
        echo (isset($context["text_special"]) ? $context["text_special"] : null);
        echo "</a></li>
            <li><a href=\"";
        // line 45
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</a>
              <ul>
                <li><a href=\"";
        // line 47
        echo (isset($context["edit"]) ? $context["edit"] : null);
        echo "\">";
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</a></li>
                <li><a href=\"";
        // line 48
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\">";
        echo (isset($context["text_password"]) ? $context["text_password"] : null);
        echo "</a></li>
                <li><a href=\"";
        // line 49
        echo (isset($context["address"]) ? $context["address"] : null);
        echo "\">";
        echo (isset($context["text_address"]) ? $context["text_address"] : null);
        echo "</a></li>
                <li><a href=\"";
        // line 50
        echo (isset($context["history"]) ? $context["history"] : null);
        echo "\">";
        echo (isset($context["text_history"]) ? $context["text_history"] : null);
        echo "</a></li>
                <li><a href=\"";
        // line 51
        echo (isset($context["download"]) ? $context["download"] : null);
        echo "\">";
        echo (isset($context["text_download"]) ? $context["text_download"] : null);
        echo "</a></li>
              </ul>
            </li>
            <li><a href=\"";
        // line 54
        echo (isset($context["history"]) ? $context["history"] : null);
        echo "\">";
        echo (isset($context["text_cart"]) ? $context["text_cart"] : null);
        echo "</a></li>
            <li><a href=\"";
        // line 55
        echo (isset($context["checkout"]) ? $context["checkout"] : null);
        echo "\">";
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "</a></li>
            <li><a href=\"";
        // line 56
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\">";
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "</a></li>
            <li>";
        // line 57
        echo (isset($context["text_information"]) ? $context["text_information"] : null);
        echo "
              <ul>
                ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 60
            echo "                <li><a href=\"";
            echo $this->getAttribute($context["information"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["information"], "title", array());
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                <li><a href=\"";
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\">";
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      ";
        // line 68
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 69
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 71
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/information/sitemap.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 71,  255 => 69,  251 => 68,  239 => 62,  228 => 60,  224 => 59,  219 => 57,  213 => 56,  207 => 55,  201 => 54,  193 => 51,  187 => 50,  181 => 49,  175 => 48,  169 => 47,  162 => 45,  156 => 44,  150 => 40,  143 => 38,  139 => 36,  132 => 34,  128 => 32,  117 => 30,  113 => 29,  110 => 28,  108 => 27,  101 => 26,  97 => 25,  94 => 24,  92 => 23,  85 => 22,  81 => 21,  74 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="information-sitemap" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <div class="row">*/
/*         <div class="col-sm-6">*/
/*           <ul>*/
/*             {% for category_1 in categories %}*/
/*             <li><a href="{{ category_1.href }}">{{ category_1.name }}</a>*/
/*               {% if category_1.children %}*/
/*               <ul>*/
/*                 {% for category_2 in category_1.children %}*/
/*                 <li><a href="{{ category_2.href }}">{{ category_2.name }}</a>*/
/*                   {% if category_2.children %}*/
/*                   <ul>*/
/*                     {% for category_3 in category_2.children %}*/
/*                     <li><a href="{{ category_3.href }}">{{ category_3.name }}</a></li>*/
/*                     {% endfor %}*/
/*                   </ul>*/
/*                   {% endif %}*/
/*                 </li>*/
/*                 {% endfor %}*/
/*               </ul>*/
/*               {% endif %}*/
/*             </li>*/
/*             {% endfor %}*/
/*           </ul>*/
/*         </div>*/
/*         <div class="col-sm-6">*/
/*           <ul>*/
/*             <li><a href="{{ special }}">{{ text_special }}</a></li>*/
/*             <li><a href="{{ account }}">{{ text_account }}</a>*/
/*               <ul>*/
/*                 <li><a href="{{ edit }}">{{ text_edit }}</a></li>*/
/*                 <li><a href="{{ password }}">{{ text_password }}</a></li>*/
/*                 <li><a href="{{ address }}">{{ text_address }}</a></li>*/
/*                 <li><a href="{{ history }}">{{ text_history }}</a></li>*/
/*                 <li><a href="{{ download }}">{{ text_download }}</a></li>*/
/*               </ul>*/
/*             </li>*/
/*             <li><a href="{{ history }}">{{ text_cart }}</a></li>*/
/*             <li><a href="{{ checkout }}">{{ text_checkout }}</a></li>*/
/*             <li><a href="{{ search }}">{{ text_search }}</a></li>*/
/*             <li>{{ text_information }}*/
/*               <ul>*/
/*                 {% for information in informations %}*/
/*                 <li><a href="{{ information.href }}">{{ information.title }}</a></li>*/
/*                 {% endfor %}*/
/*                 <li><a href="{{ contact }}">{{ text_contact }}</a></li>*/
/*               </ul>*/
/*             </li>*/
/*           </ul>*/
/*         </div>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
