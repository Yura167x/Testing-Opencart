<?php

/* extension/payment/liqpay.twig */
class __TwigTemplate_80dc0143b4de22be5f226e2df2169bf4cbfb2aaf40da92adf98da30c2a6e82b7 extends Twig_Template
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
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-payment\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-payment\" class=\"form-horizontal\">
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-merchant\">";
        // line 29
        echo (isset($context["entry_merchant"]) ? $context["entry_merchant"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_liqpay_merchant\" value=\"";
        // line 31
        echo (isset($context["payment_liqpay_merchant"]) ? $context["payment_liqpay_merchant"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_merchant"]) ? $context["entry_merchant"] : null);
        echo "\" id=\"input-merchant\" class=\"form-control\" />
              ";
        // line 32
        if ((isset($context["error_merchant"]) ? $context["error_merchant"] : null)) {
            // line 33
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_merchant"]) ? $context["error_merchant"] : null);
            echo "</div>
              ";
        }
        // line 35
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-signature\">";
        // line 38
        echo (isset($context["entry_signature"]) ? $context["entry_signature"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_liqpay_signature\" value=\"";
        // line 40
        echo (isset($context["payment_liqpay_signature"]) ? $context["payment_liqpay_signature"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_signature"]) ? $context["entry_signature"] : null);
        echo "\" id=\"input-signature\" class=\"form-control\" />
              ";
        // line 41
        if ((isset($context["error_signature"]) ? $context["error_signature"] : null)) {
            // line 42
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_signature"]) ? $context["error_signature"] : null);
            echo "</div>
              ";
        }
        // line 44
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-type\">";
        // line 47
        echo (isset($context["entry_type"]) ? $context["entry_type"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_liqpay_type\" id=\"input-type\" class=\"form-control\">
                ";
        // line 50
        if (((isset($context["payment_liqpay_type"]) ? $context["payment_liqpay_type"] : null) == "liqpay")) {
            // line 51
            echo "                <option value=\"liqpay\" selected=\"selected\">";
            echo (isset($context["text_pay"]) ? $context["text_pay"] : null);
            echo "</option>
                ";
        } else {
            // line 53
            echo "                <option value=\"liqpay\">";
            echo (isset($context["text_pay"]) ? $context["text_pay"] : null);
            echo "</option>
                ";
        }
        // line 55
        echo "                ";
        if (((isset($context["payment_liqpay_type"]) ? $context["payment_liqpay_type"] : null) == "card")) {
            // line 56
            echo "                <option value=\"card\" selected=\"selected\">";
            echo (isset($context["text_card"]) ? $context["text_card"] : null);
            echo "</option>
                ";
        } else {
            // line 58
            echo "                <option value=\"card\">";
            echo (isset($context["text_card"]) ? $context["text_card"] : null);
            echo "</option>
                ";
        }
        // line 59
        echo ">
              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-total\"><span data-toggle=\"tooltip\" title=\"";
        // line 64
        echo (isset($context["help_total"]) ? $context["help_total"] : null);
        echo "\">";
        echo (isset($context["entry_total"]) ? $context["entry_total"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_liqpay_total\" value=\"";
        // line 66
        echo (isset($context["payment_liqpay_total"]) ? $context["payment_liqpay_total"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_total"]) ? $context["entry_total"] : null);
        echo "\" id=\"input-total\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-order-status\">";
        // line 70
        echo (isset($context["entry_order_status"]) ? $context["entry_order_status"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_liqpay_order_status_id\" id=\"input-order-status\" class=\"form-control\">
                ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 74
            echo "                ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_liqpay_order_status_id"]) ? $context["payment_liqpay_order_status_id"] : null))) {
                // line 75
                echo "                <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                ";
            } else {
                // line 77
                echo "                <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                ";
            }
            // line 79
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-geo-zone\">";
        // line 84
        echo (isset($context["entry_geo_zone"]) ? $context["entry_geo_zone"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_liqpay_geo_zone_id\" id=\"input-geo-zone\" class=\"form-control\">
                <option value=\"0\">";
        // line 87
        echo (isset($context["text_all_zones"]) ? $context["text_all_zones"] : null);
        echo "</option>
                ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["geo_zones"]) ? $context["geo_zones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 89
            echo "                ";
            if (($this->getAttribute($context["geo_zone"], "geo_zone_id", array()) == (isset($context["payment_liqpay_geo_zone_id"]) ? $context["payment_liqpay_geo_zone_id"] : null))) {
                // line 90
                echo "                <option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                ";
            } else {
                // line 92
                echo "                <option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                ";
            }
            // line 94
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 99
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_liqpay_status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 102
        if ((isset($context["payment_liqpay_status"]) ? $context["payment_liqpay_status"] : null)) {
            // line 103
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 104
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        } else {
            // line 106
            echo "                <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 107
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        }
        // line 109
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 113
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_liqpay_sort_order\" value=\"";
        // line 115
        echo (isset($context["payment_liqpay_sort_order"]) ? $context["payment_liqpay_sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 123
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/payment/liqpay.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 123,  320 => 115,  315 => 113,  309 => 109,  304 => 107,  299 => 106,  294 => 104,  289 => 103,  287 => 102,  281 => 99,  275 => 95,  269 => 94,  261 => 92,  253 => 90,  250 => 89,  246 => 88,  242 => 87,  236 => 84,  230 => 80,  224 => 79,  216 => 77,  208 => 75,  205 => 74,  201 => 73,  195 => 70,  186 => 66,  179 => 64,  172 => 59,  166 => 58,  160 => 56,  157 => 55,  151 => 53,  145 => 51,  143 => 50,  137 => 47,  132 => 44,  126 => 42,  124 => 41,  118 => 40,  113 => 38,  108 => 35,  102 => 33,  100 => 32,  94 => 31,  89 => 29,  84 => 27,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-payment" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-payment" class="form-horizontal">*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-merchant">{{ entry_merchant }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="payment_liqpay_merchant" value="{{ payment_liqpay_merchant }}" placeholder="{{ entry_merchant }}" id="input-merchant" class="form-control" />*/
/*               {% if error_merchant %}*/
/*               <div class="text-danger">{{ error_merchant }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-signature">{{ entry_signature }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="payment_liqpay_signature" value="{{ payment_liqpay_signature }}" placeholder="{{ entry_signature }}" id="input-signature" class="form-control" />*/
/*               {% if error_signature %}*/
/*               <div class="text-danger">{{ error_signature }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-type">{{ entry_type }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="payment_liqpay_type" id="input-type" class="form-control">*/
/*                 {% if payment_liqpay_type == 'liqpay' %}*/
/*                 <option value="liqpay" selected="selected">{{ text_pay }}</option>*/
/*                 {% else %}*/
/*                 <option value="liqpay">{{ text_pay }}</option>*/
/*                 {% endif %}*/
/*                 {% if payment_liqpay_type == 'card' %}*/
/*                 <option value="card" selected="selected">{{ text_card }}</option>*/
/*                 {% else %}*/
/*                 <option value="card">{{ text_card }}</option>*/
/*                 {% endif %}>*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-total"><span data-toggle="tooltip" title="{{ help_total }}">{{ entry_total }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="payment_liqpay_total" value="{{ payment_liqpay_total }}" placeholder="{{ entry_total }}" id="input-total" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-order-status">{{ entry_order_status }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="payment_liqpay_order_status_id" id="input-order-status" class="form-control">*/
/*                 {% for order_status in order_statuses %}*/
/*                 {% if order_status.order_status_id == payment_liqpay_order_status_id %}*/
/*                 <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-geo-zone">{{ entry_geo_zone }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="payment_liqpay_geo_zone_id" id="input-geo-zone" class="form-control">*/
/*                 <option value="0">{{ text_all_zones }}</option>*/
/*                 {% for geo_zone in geo_zones %}*/
/*                 {% if geo_zone.geo_zone_id == payment_liqpay_geo_zone_id %}*/
/*                 <option value="{{ geo_zone.geo_zone_id }}" selected="selected">{{ geo_zone.name }}</option>*/
/*                 {% else %}*/
/*                 <option value="{{ geo_zone.geo_zone_id }}">{{ geo_zone.name }}</option>*/
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="payment_liqpay_status" id="input-status" class="form-control">*/
/*                 {% if payment_liqpay_status %}*/
/*                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                 <option value="0">{{ text_disabled }}</option>*/
/*                 {% else %}*/
/*                 <option value="1">{{ text_enabled }}</option>*/
/*                 <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-sort-order">{{ entry_sort_order }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="payment_liqpay_sort_order" value="{{ payment_liqpay_sort_order }}" placeholder="{{ entry_sort_order }}" id="input-sort-order" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
