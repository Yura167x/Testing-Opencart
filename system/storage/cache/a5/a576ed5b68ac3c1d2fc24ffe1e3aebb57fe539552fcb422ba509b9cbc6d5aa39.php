<?php

/* default/template/account/return_form.twig */
class __TwigTemplate_6c9b756fb105242a6c9df8afff131163d02924b2c54d37ddaa892726adbd8862 extends Twig_Template
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
<div id=\"account-return\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\"> ";
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
        echo "  <div class=\"row\"> ";
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
        echo "\"> ";
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
        <fieldset>
          <legend>";
        // line 24
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 26
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"firstname\" value=\"";
        // line 28
        echo (isset($context["firstname"]) ? $context["firstname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "\" id=\"input-firstname\" class=\"form-control\" />
              ";
        // line 29
        if ((isset($context["error_firstname"]) ? $context["error_firstname"] : null)) {
            // line 30
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_firstname"]) ? $context["error_firstname"] : null);
            echo "</div>
              ";
        }
        // line 31
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 34
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"lastname\" value=\"";
        // line 36
        echo (isset($context["lastname"]) ? $context["lastname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "\" id=\"input-lastname\" class=\"form-control\" />
              ";
        // line 37
        if ((isset($context["error_lastname"]) ? $context["error_lastname"] : null)) {
            // line 38
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_lastname"]) ? $context["error_lastname"] : null);
            echo "</div>
              ";
        }
        // line 39
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 42
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 44
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 45
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 46
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</div>
              ";
        }
        // line 47
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 50
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"telephone\" value=\"";
        // line 52
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
              ";
        // line 53
        if ((isset($context["error_telephone"]) ? $context["error_telephone"] : null)) {
            // line 54
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_telephone"]) ? $context["error_telephone"] : null);
            echo "</div>
              ";
        }
        // line 55
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-order-id\">";
        // line 58
        echo (isset($context["entry_order_id"]) ? $context["entry_order_id"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"order_id\" value=\"";
        // line 60
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_order_id"]) ? $context["entry_order_id"] : null);
        echo "\" id=\"input-order-id\" class=\"form-control\" />
              ";
        // line 61
        if ((isset($context["error_order_id"]) ? $context["error_order_id"] : null)) {
            // line 62
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_order_id"]) ? $context["error_order_id"] : null);
            echo "</div>
              ";
        }
        // line 63
        echo " </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-date-ordered\">";
        // line 66
        echo (isset($context["entry_date_ordered"]) ? $context["entry_date_ordered"] : null);
        echo "</label>
            <div class=\"col-sm-3\">
              <div class=\"input-group date\">
                <input type=\"text\" name=\"date_ordered\" value=\"";
        // line 69
        echo (isset($context["date_ordered"]) ? $context["date_ordered"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_ordered"]) ? $context["entry_date_ordered"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-ordered\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>";
        // line 77
        echo (isset($context["text_product"]) ? $context["text_product"] : null);
        echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-product\">";
        // line 79
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"product\" value=\"";
        // line 81
        echo (isset($context["product"]) ? $context["product"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "\" id=\"input-product\" class=\"form-control\" />
              ";
        // line 82
        if ((isset($context["error_product"]) ? $context["error_product"] : null)) {
            // line 83
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_product"]) ? $context["error_product"] : null);
            echo "</div>
              ";
        }
        // line 84
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-model\">";
        // line 87
        echo (isset($context["entry_model"]) ? $context["entry_model"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"model\" value=\"";
        // line 89
        echo (isset($context["model"]) ? $context["model"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_model"]) ? $context["entry_model"] : null);
        echo "\" id=\"input-model\" class=\"form-control\" />
              ";
        // line 90
        if ((isset($context["error_model"]) ? $context["error_model"] : null)) {
            // line 91
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_model"]) ? $context["error_model"] : null);
            echo "</div>
              ";
        }
        // line 92
        echo " </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-quantity\">";
        // line 95
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"quantity\" value=\"";
        // line 97
        echo (isset($context["quantity"]) ? $context["quantity"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "\" id=\"input-quantity\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\">";
        // line 101
        echo (isset($context["entry_reason"]) ? $context["entry_reason"] : null);
        echo "</label>
            <div class=\"col-sm-10\"> ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["return_reasons"]) ? $context["return_reasons"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_reason"]) {
            // line 103
            echo "              ";
            if (($this->getAttribute($context["return_reason"], "return_reason_id", array()) == (isset($context["return_reason_id"]) ? $context["return_reason_id"] : null))) {
                // line 104
                echo "              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"return_reason_id\" value=\"";
                // line 106
                echo $this->getAttribute($context["return_reason"], "return_reason_id", array());
                echo "\" checked=\"checked\" />
                  ";
                // line 107
                echo $this->getAttribute($context["return_reason"], "name", array());
                echo "</label>
              </div>
              ";
            } else {
                // line 110
                echo "              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"return_reason_id\" value=\"";
                // line 112
                echo $this->getAttribute($context["return_reason"], "return_reason_id", array());
                echo "\" />
                  ";
                // line 113
                echo $this->getAttribute($context["return_reason"], "name", array());
                echo "</label>
              </div>
              ";
            }
            // line 116
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_reason'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "              ";
        if ((isset($context["error_reason"]) ? $context["error_reason"] : null)) {
            // line 118
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_reason"]) ? $context["error_reason"] : null);
            echo "</div>
              ";
        }
        // line 119
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\">";
        // line 122
        echo (isset($context["entry_opened"]) ? $context["entry_opened"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\"> ";
        // line 124
        if ((isset($context["opened"]) ? $context["opened"] : null)) {
            // line 125
            echo "                <input type=\"radio\" name=\"opened\" value=\"1\" checked=\"checked\" />
                ";
        } else {
            // line 127
            echo "                <input type=\"radio\" name=\"opened\" value=\"1\" />
                ";
        }
        // line 129
        echo "                ";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "</label>
              <label class=\"radio-inline\"> ";
        // line 130
        if ( !(isset($context["opened"]) ? $context["opened"] : null)) {
            // line 131
            echo "                <input type=\"radio\" name=\"opened\" value=\"0\" checked=\"checked\" />
                ";
        } else {
            // line 133
            echo "                <input type=\"radio\" name=\"opened\" value=\"0\" />
                ";
        }
        // line 135
        echo "                ";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "</label>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-comment\">";
        // line 139
        echo (isset($context["entry_fault_detail"]) ? $context["entry_fault_detail"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"comment\" rows=\"10\" placeholder=\"";
        // line 141
        echo (isset($context["entry_fault_detail"]) ? $context["entry_fault_detail"] : null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo (isset($context["comment"]) ? $context["comment"] : null);
        echo "</textarea>
            </div>
          </div>
          ";
        // line 144
        echo (isset($context["captcha"]) ? $context["captcha"] : null);
        echo "
        </fieldset>
        ";
        // line 146
        if ((isset($context["text_agree"]) ? $context["text_agree"] : null)) {
            // line 147
            echo "        <div class=\"buttons clearfix\">
          <div class=\"pull-left\"><a href=\"";
            // line 148
            echo (isset($context["back"]) ? $context["back"] : null);
            echo "\" class=\"btn btn-danger\">";
            echo (isset($context["button_back"]) ? $context["button_back"] : null);
            echo "</a></div>
          <div class=\"pull-right\">";
            // line 149
            echo (isset($context["text_agree"]) ? $context["text_agree"] : null);
            echo "
            ";
            // line 150
            if ((isset($context["agree"]) ? $context["agree"] : null)) {
                // line 151
                echo "            <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
            ";
            } else {
                // line 153
                echo "            <input type=\"checkbox\" name=\"agree\" value=\"1\" />
            ";
            }
            // line 155
            echo "            <input type=\"submit\" value=\"";
            echo (isset($context["button_submit"]) ? $context["button_submit"] : null);
            echo "\" class=\"btn btn-primary\" />
          </div>
        </div>
        ";
        } else {
            // line 159
            echo "        <div class=\"buttons clearfix\">
          <div class=\"pull-left\"><a href=\"";
            // line 160
            echo (isset($context["back"]) ? $context["back"] : null);
            echo "\" class=\"btn btn-default\">";
            echo (isset($context["button_back"]) ? $context["button_back"] : null);
            echo "</a></div>
          <div class=\"pull-right\">
            <input type=\"submit\" value=\"";
            // line 162
            echo (isset($context["button_submit"]) ? $context["button_submit"] : null);
            echo "\" class=\"btn btn-primary\" />
          </div>
        </div>
        ";
        }
        // line 166
        echo "      </form>
      ";
        // line 167
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 168
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 172
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickTime: false
});
//--></script> 
";
        // line 176
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "default/template/account/return_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  493 => 176,  486 => 172,  479 => 168,  475 => 167,  472 => 166,  465 => 162,  458 => 160,  455 => 159,  447 => 155,  443 => 153,  439 => 151,  437 => 150,  433 => 149,  427 => 148,  424 => 147,  422 => 146,  417 => 144,  409 => 141,  404 => 139,  396 => 135,  392 => 133,  388 => 131,  386 => 130,  381 => 129,  377 => 127,  373 => 125,  371 => 124,  366 => 122,  361 => 119,  355 => 118,  352 => 117,  346 => 116,  340 => 113,  336 => 112,  332 => 110,  326 => 107,  322 => 106,  318 => 104,  315 => 103,  311 => 102,  307 => 101,  298 => 97,  293 => 95,  288 => 92,  282 => 91,  280 => 90,  274 => 89,  269 => 87,  264 => 84,  258 => 83,  256 => 82,  250 => 81,  245 => 79,  240 => 77,  227 => 69,  221 => 66,  216 => 63,  210 => 62,  208 => 61,  202 => 60,  197 => 58,  192 => 55,  186 => 54,  184 => 53,  178 => 52,  173 => 50,  168 => 47,  162 => 46,  160 => 45,  154 => 44,  149 => 42,  144 => 39,  138 => 38,  136 => 37,  130 => 36,  125 => 34,  120 => 31,  114 => 30,  112 => 29,  106 => 28,  101 => 26,  96 => 24,  91 => 22,  87 => 21,  83 => 20,  76 => 19,  73 => 18,  70 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  56 => 12,  51 => 11,  45 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="account-return" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}"> {{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   {% if error_warning %}*/
/*   <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}</div>*/
/*   {% endif %}*/
/*   <div class="row"> {{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}"> {{ content_top }}*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <p>{{ text_description }}</p>*/
/*       <form action="{{ action }}" method="post" enctype="multipart/form-data" class="form-horizontal">*/
/*         <fieldset>*/
/*           <legend>{{ text_order }}</legend>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-firstname">{{ entry_firstname }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="firstname" value="{{ firstname }}" placeholder="{{ entry_firstname }}" id="input-firstname" class="form-control" />*/
/*               {% if error_firstname %}*/
/*               <div class="text-danger">{{ error_firstname }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-lastname">{{ entry_lastname }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="lastname" value="{{ lastname }}" placeholder="{{ entry_lastname }}" id="input-lastname" class="form-control" />*/
/*               {% if error_lastname %}*/
/*               <div class="text-danger">{{ error_lastname }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-email">{{ entry_email }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="email" value="{{ email }}" placeholder="{{ entry_email }}" id="input-email" class="form-control" />*/
/*               {% if error_email %}*/
/*               <div class="text-danger">{{ error_email }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-telephone">{{ entry_telephone }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="telephone" value="{{ telephone }}" placeholder="{{ entry_telephone }}" id="input-telephone" class="form-control" />*/
/*               {% if error_telephone %}*/
/*               <div class="text-danger">{{ error_telephone }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-order-id">{{ entry_order_id }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="order_id" value="{{ order_id }}" placeholder="{{ entry_order_id }}" id="input-order-id" class="form-control" />*/
/*               {% if error_order_id %}*/
/*               <div class="text-danger">{{ error_order_id }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-date-ordered">{{ entry_date_ordered }}</label>*/
/*             <div class="col-sm-3">*/
/*               <div class="input-group date">*/
/*                 <input type="text" name="date_ordered" value="{{ date_ordered }}" placeholder="{{ entry_date_ordered }}" data-date-format="YYYY-MM-DD" id="input-date-ordered" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*           </div>*/
/*         </fieldset>*/
/*         <fieldset>*/
/*           <legend>{{ text_product }}</legend>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-product">{{ entry_product }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="product" value="{{ product }}" placeholder="{{ entry_product }}" id="input-product" class="form-control" />*/
/*               {% if error_product %}*/
/*               <div class="text-danger">{{ error_product }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-model">{{ entry_model }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="model" value="{{ model }}" placeholder="{{ entry_model }}" id="input-model" class="form-control" />*/
/*               {% if error_model %}*/
/*               <div class="text-danger">{{ error_model }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-quantity">{{ entry_quantity }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="quantity" value="{{ quantity }}" placeholder="{{ entry_quantity }}" id="input-quantity" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label">{{ entry_reason }}</label>*/
/*             <div class="col-sm-10"> {% for return_reason in return_reasons %}*/
/*               {% if return_reason.return_reason_id == return_reason_id %}*/
/*               <div class="radio">*/
/*                 <label>*/
/*                   <input type="radio" name="return_reason_id" value="{{ return_reason.return_reason_id }}" checked="checked" />*/
/*                   {{ return_reason.name }}</label>*/
/*               </div>*/
/*               {% else %}*/
/*               <div class="radio">*/
/*                 <label>*/
/*                   <input type="radio" name="return_reason_id" value="{{ return_reason.return_reason_id }}" />*/
/*                   {{ return_reason.name }}</label>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% endfor %}*/
/*               {% if error_reason %}*/
/*               <div class="text-danger">{{ error_reason }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label">{{ entry_opened }}</label>*/
/*             <div class="col-sm-10">*/
/*               <label class="radio-inline"> {% if opened %}*/
/*                 <input type="radio" name="opened" value="1" checked="checked" />*/
/*                 {% else %}*/
/*                 <input type="radio" name="opened" value="1" />*/
/*                 {% endif %}*/
/*                 {{ text_yes }}</label>*/
/*               <label class="radio-inline"> {% if not opened %}*/
/*                 <input type="radio" name="opened" value="0" checked="checked" />*/
/*                 {% else %}*/
/*                 <input type="radio" name="opened" value="0" />*/
/*                 {% endif %}*/
/*                 {{ text_no }}</label>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-comment">{{ entry_fault_detail }}</label>*/
/*             <div class="col-sm-10">*/
/*               <textarea name="comment" rows="10" placeholder="{{ entry_fault_detail }}" id="input-comment" class="form-control">{{ comment }}</textarea>*/
/*             </div>*/
/*           </div>*/
/*           {{ captcha }}*/
/*         </fieldset>*/
/*         {% if text_agree %}*/
/*         <div class="buttons clearfix">*/
/*           <div class="pull-left"><a href="{{ back }}" class="btn btn-danger">{{ button_back }}</a></div>*/
/*           <div class="pull-right">{{ text_agree }}*/
/*             {% if agree %}*/
/*             <input type="checkbox" name="agree" value="1" checked="checked" />*/
/*             {% else %}*/
/*             <input type="checkbox" name="agree" value="1" />*/
/*             {% endif %}*/
/*             <input type="submit" value="{{ button_submit }}" class="btn btn-primary" />*/
/*           </div>*/
/*         </div>*/
/*         {% else %}*/
/*         <div class="buttons clearfix">*/
/*           <div class="pull-left"><a href="{{ back }}" class="btn btn-default">{{ button_back }}</a></div>*/
/*           <div class="pull-right">*/
/*             <input type="submit" value="{{ button_submit }}" class="btn btn-primary" />*/
/*           </div>*/
/*         </div>*/
/*         {% endif %}*/
/*       </form>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickTime: false*/
/* });*/
/* //--></script> */
/* {{ footer }} */
