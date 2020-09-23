<?php

/* default/template/account/voucher.twig */
class __TwigTemplate_67298d866fbf3ac4f33dc75b3d678aa78bc5536ddf5f2aa7bb23a46eec1b3815 extends Twig_Template
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
<div id=\"account-voucher\" class=\"container\">
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
  ";
        // line 8
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 9
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "</div>
  ";
        }
        // line 11
        echo "  <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 12
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 13
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 14
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 18
            echo "    ";
        }
        // line 19
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h1>";
        // line 20
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <p>";
        // line 21
        echo (isset($context["text_description"]) ? $context["text_description"] : null);
        echo "</p>
      <form action=\"";
        // line 22
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-to-name\">";
        // line 24
        echo (isset($context["entry_to_name"]) ? $context["entry_to_name"] : null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"to_name\" value=\"";
        // line 26
        echo (isset($context["to_name"]) ? $context["to_name"] : null);
        echo "\" id=\"input-to-name\" class=\"form-control\" />
            ";
        // line 27
        if ((isset($context["error_to_name"]) ? $context["error_to_name"] : null)) {
            // line 28
            echo "            <div class=\"text-danger\">";
            echo (isset($context["error_to_name"]) ? $context["error_to_name"] : null);
            echo "</div>
            ";
        }
        // line 30
        echo "          </div>
        </div>
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-to-email\">";
        // line 33
        echo (isset($context["entry_to_email"]) ? $context["entry_to_email"] : null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"to_email\" value=\"";
        // line 35
        echo (isset($context["to_email"]) ? $context["to_email"] : null);
        echo "\" id=\"input-to-email\" class=\"form-control\" />
            ";
        // line 36
        if ((isset($context["error_to_email"]) ? $context["error_to_email"] : null)) {
            // line 37
            echo "            <div class=\"text-danger\">";
            echo (isset($context["error_to_email"]) ? $context["error_to_email"] : null);
            echo "</div>
            ";
        }
        // line 39
        echo "          </div>
        </div>
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-from-name\">";
        // line 42
        echo (isset($context["entry_from_name"]) ? $context["entry_from_name"] : null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"from_name\" value=\"";
        // line 44
        echo (isset($context["from_name"]) ? $context["from_name"] : null);
        echo "\" id=\"input-from-name\" class=\"form-control\" />
            ";
        // line 45
        if ((isset($context["error_from_name"]) ? $context["error_from_name"] : null)) {
            // line 46
            echo "            <div class=\"text-danger\">";
            echo (isset($context["error_from_name"]) ? $context["error_from_name"] : null);
            echo "</div>
            ";
        }
        // line 48
        echo "          </div>
        </div>
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-from-email\">";
        // line 51
        echo (isset($context["entry_from_email"]) ? $context["entry_from_email"] : null);
        echo "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"from_email\" value=\"";
        // line 53
        echo (isset($context["from_email"]) ? $context["from_email"] : null);
        echo "\" id=\"input-from-email\" class=\"form-control\" />
            ";
        // line 54
        if ((isset($context["error_from_email"]) ? $context["error_from_email"] : null)) {
            // line 55
            echo "            <div class=\"text-danger\">";
            echo (isset($context["error_from_email"]) ? $context["error_from_email"] : null);
            echo "</div>
            ";
        }
        // line 57
        echo "          </div>
        </div>
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\">";
        // line 60
        echo (isset($context["entry_theme"]) ? $context["entry_theme"] : null);
        echo "</label>
          <div class=\"col-sm-10\">
           ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voucher_themes"]) ? $context["voucher_themes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher_theme"]) {
            // line 63
            echo "            ";
            if (($this->getAttribute($context["voucher_theme"], "voucher_theme_id", array()) == (isset($context["voucher_theme_id"]) ? $context["voucher_theme_id"] : null))) {
                // line 64
                echo "            <div class=\"radio\">
              <label>
                <input type=\"radio\" name=\"voucher_theme_id\" value=\"";
                // line 66
                echo $this->getAttribute($context["voucher_theme"], "voucher_theme_id", array());
                echo "\" checked=\"checked\" />
                ";
                // line 67
                echo $this->getAttribute($context["voucher_theme"], "name", array());
                echo "</label>
            </div>
            ";
            } else {
                // line 70
                echo "            <div class=\"radio\">
              <label>
                <input type=\"radio\" name=\"voucher_theme_id\" value=\"";
                // line 72
                echo $this->getAttribute($context["voucher_theme"], "voucher_theme_id", array());
                echo "\" />
                ";
                // line 73
                echo $this->getAttribute($context["voucher_theme"], "name", array());
                echo "</label>
            </div>
            ";
            }
            // line 76
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher_theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "            ";
        if ((isset($context["error_theme"]) ? $context["error_theme"] : null)) {
            // line 78
            echo "            <div class=\"text-danger\">";
            echo (isset($context["error_theme"]) ? $context["error_theme"] : null);
            echo "</div>
            ";
        }
        // line 80
        echo "          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\" for=\"input-message\"><span data-toggle=\"tooltip\" title=\"";
        // line 83
        echo (isset($context["help_message"]) ? $context["help_message"] : null);
        echo "\">";
        echo (isset($context["entry_message"]) ? $context["entry_message"] : null);
        echo "</span></label>
          <div class=\"col-sm-10\">
            <textarea name=\"message\" cols=\"40\" rows=\"5\" id=\"input-message\" class=\"form-control\">";
        // line 85
        echo (isset($context["message"]) ? $context["message"] : null);
        echo "</textarea>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\" for=\"input-amount\"><span data-toggle=\"tooltip\" title=\"";
        // line 89
        echo (isset($context["help_amount"]) ? $context["help_amount"] : null);
        echo "\">";
        echo (isset($context["entry_amount"]) ? $context["entry_amount"] : null);
        echo "</span></label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"amount\" value=\"";
        // line 91
        echo (isset($context["amount"]) ? $context["amount"] : null);
        echo "\" id=\"input-amount\" class=\"form-control\" size=\"5\" />
            ";
        // line 92
        if ((isset($context["error_amount"]) ? $context["error_amount"] : null)) {
            // line 93
            echo "            <div class=\"text-danger\">";
            echo (isset($context["error_amount"]) ? $context["error_amount"] : null);
            echo "</div>
            ";
        }
        // line 95
        echo "          </div>
        </div>
        <div class=\"buttons clearfix\">
          <div class=\"pull-right\"> ";
        // line 98
        echo (isset($context["text_agree"]) ? $context["text_agree"] : null);
        echo "
            ";
        // line 99
        if ((isset($context["agree"]) ? $context["agree"] : null)) {
            // line 100
            echo "            <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
            ";
        } else {
            // line 102
            echo "            <input type=\"checkbox\" name=\"agree\" value=\"1\" />
            ";
        }
        // line 104
        echo "            &nbsp;
            <input type=\"submit\" value=\"";
        // line 105
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "\" class=\"btn btn-primary\" />
          </div>
        </div>
      </form>
      ";
        // line 109
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 110
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 112
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/account/voucher.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 112,  310 => 110,  306 => 109,  299 => 105,  296 => 104,  292 => 102,  288 => 100,  286 => 99,  282 => 98,  277 => 95,  271 => 93,  269 => 92,  265 => 91,  258 => 89,  251 => 85,  244 => 83,  239 => 80,  233 => 78,  230 => 77,  224 => 76,  218 => 73,  214 => 72,  210 => 70,  204 => 67,  200 => 66,  196 => 64,  193 => 63,  189 => 62,  184 => 60,  179 => 57,  173 => 55,  171 => 54,  167 => 53,  162 => 51,  157 => 48,  151 => 46,  149 => 45,  145 => 44,  140 => 42,  135 => 39,  129 => 37,  127 => 36,  123 => 35,  118 => 33,  113 => 30,  107 => 28,  105 => 27,  101 => 26,  96 => 24,  91 => 22,  87 => 21,  83 => 20,  76 => 19,  73 => 18,  70 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  56 => 12,  51 => 11,  45 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="account-voucher" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   {% if error_warning %}*/
/*   <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}</div>*/
/*   {% endif %}*/
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
/*       <p>{{ text_description }}</p>*/
/*       <form action="{{ action }}" method="post" enctype="multipart/form-data" class="form-horizontal">*/
/*         <div class="form-group required">*/
/*           <label class="col-sm-2 control-label" for="input-to-name">{{ entry_to_name }}</label>*/
/*           <div class="col-sm-10">*/
/*             <input type="text" name="to_name" value="{{ to_name }}" id="input-to-name" class="form-control" />*/
/*             {% if error_to_name %}*/
/*             <div class="text-danger">{{ error_to_name }}</div>*/
/*             {% endif %}*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group required">*/
/*           <label class="col-sm-2 control-label" for="input-to-email">{{ entry_to_email }}</label>*/
/*           <div class="col-sm-10">*/
/*             <input type="text" name="to_email" value="{{ to_email }}" id="input-to-email" class="form-control" />*/
/*             {% if error_to_email %}*/
/*             <div class="text-danger">{{ error_to_email }}</div>*/
/*             {% endif %}*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group required">*/
/*           <label class="col-sm-2 control-label" for="input-from-name">{{ entry_from_name }}</label>*/
/*           <div class="col-sm-10">*/
/*             <input type="text" name="from_name" value="{{ from_name }}" id="input-from-name" class="form-control" />*/
/*             {% if error_from_name %}*/
/*             <div class="text-danger">{{ error_from_name }}</div>*/
/*             {% endif %}*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group required">*/
/*           <label class="col-sm-2 control-label" for="input-from-email">{{ entry_from_email }}</label>*/
/*           <div class="col-sm-10">*/
/*             <input type="text" name="from_email" value="{{ from_email }}" id="input-from-email" class="form-control" />*/
/*             {% if error_from_email %}*/
/*             <div class="text-danger">{{ error_from_email }}</div>*/
/*             {% endif %}*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group required">*/
/*           <label class="col-sm-2 control-label">{{ entry_theme }}</label>*/
/*           <div class="col-sm-10">*/
/*            {% for voucher_theme in voucher_themes %}*/
/*             {% if voucher_theme.voucher_theme_id == voucher_theme_id %}*/
/*             <div class="radio">*/
/*               <label>*/
/*                 <input type="radio" name="voucher_theme_id" value="{{ voucher_theme.voucher_theme_id }}" checked="checked" />*/
/*                 {{ voucher_theme.name }}</label>*/
/*             </div>*/
/*             {% else %}*/
/*             <div class="radio">*/
/*               <label>*/
/*                 <input type="radio" name="voucher_theme_id" value="{{ voucher_theme.voucher_theme_id }}" />*/
/*                 {{ voucher_theme.name }}</label>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% endfor %}*/
/*             {% if error_theme %}*/
/*             <div class="text-danger">{{ error_theme }}</div>*/
/*             {% endif %}*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <label class="col-sm-2 control-label" for="input-message"><span data-toggle="tooltip" title="{{ help_message }}">{{ entry_message }}</span></label>*/
/*           <div class="col-sm-10">*/
/*             <textarea name="message" cols="40" rows="5" id="input-message" class="form-control">{{ message }}</textarea>*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*           <label class="col-sm-2 control-label" for="input-amount"><span data-toggle="tooltip" title="{{ help_amount }}">{{ entry_amount }}</span></label>*/
/*           <div class="col-sm-10">*/
/*             <input type="text" name="amount" value="{{ amount }}" id="input-amount" class="form-control" size="5" />*/
/*             {% if error_amount %}*/
/*             <div class="text-danger">{{ error_amount }}</div>*/
/*             {% endif %}*/
/*           </div>*/
/*         </div>*/
/*         <div class="buttons clearfix">*/
/*           <div class="pull-right"> {{ text_agree }}*/
/*             {% if agree %}*/
/*             <input type="checkbox" name="agree" value="1" checked="checked" />*/
/*             {% else %}*/
/*             <input type="checkbox" name="agree" value="1" />*/
/*             {% endif %}*/
/*             &nbsp;*/
/*             <input type="submit" value="{{ button_continue }}" class="btn btn-primary" />*/
/*           </div>*/
/*         </div>*/
/*       </form>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
