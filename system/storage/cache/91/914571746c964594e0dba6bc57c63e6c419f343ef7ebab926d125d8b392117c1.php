<?php

/* default/template/affiliate/login.twig */
class __TwigTemplate_52d45c92beb0d9fa93a84fc43811c9724d30df3dbb6b61c944d1899c637bcb2d extends Twig_Template
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
<div id=\"affiliate-login\" class=\"container\">
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
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 9
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "</div>
  ";
        }
        // line 11
        echo "  ";
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 12
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "</div>
  ";
        }
        // line 14
        echo "  <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 15
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 16
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 17
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 18
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 19
            echo "    ";
        } else {
            // line 20
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 21
            echo "    ";
        }
        // line 22
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h1>";
        // line 23
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      ";
        // line 24
        echo (isset($context["text_description"]) ? $context["text_description"] : null);
        echo "
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <div class=\"well\">
            <h2>";
        // line 28
        echo (isset($context["text_new_affiliate"]) ? $context["text_new_affiliate"] : null);
        echo "</h2>
            <p>";
        // line 29
        echo (isset($context["text_register_account"]) ? $context["text_register_account"] : null);
        echo "</p>
            <a class=\"btn btn-primary\" href=\"";
        // line 30
        echo (isset($context["register"]) ? $context["register"] : null);
        echo "\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</a></div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"well\">
            <h2>";
        // line 34
        echo (isset($context["text_returning_affiliate"]) ? $context["text_returning_affiliate"] : null);
        echo "</h2>
            <p><strong>";
        // line 35
        echo (isset($context["text_i_am_returning_affiliate"]) ? $context["text_i_am_returning_affiliate"] : null);
        echo "</strong></p>
            <form action=\"";
        // line 36
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-email\">";
        // line 38
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
                <input type=\"text\" name=\"email\" value=\"";
        // line 39
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-password\">";
        // line 42
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
                <input type=\"password\" name=\"password\" value=\"";
        // line 43
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\" id=\"input-password\" class=\"form-control\" />
                <a href=\"";
        // line 44
        echo (isset($context["forgotten"]) ? $context["forgotten"] : null);
        echo "\">";
        echo (isset($context["text_forgotten"]) ? $context["text_forgotten"] : null);
        echo "</a> </div>
              <input type=\"submit\" value=\"";
        // line 45
        echo (isset($context["button_login"]) ? $context["button_login"] : null);
        echo "\" class=\"btn btn-primary\" />
              ";
        // line 46
        if ((isset($context["redirect"]) ? $context["redirect"] : null)) {
            // line 47
            echo "              <input type=\"hidden\" name=\"redirect\" value=\"";
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\" />
              ";
        }
        // line 49
        echo "            </form>
          </div>
        </div>
      </div>
      ";
        // line 53
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 54
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 56
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/affiliate/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 56,  183 => 54,  179 => 53,  173 => 49,  167 => 47,  165 => 46,  161 => 45,  155 => 44,  149 => 43,  145 => 42,  137 => 39,  133 => 38,  128 => 36,  124 => 35,  120 => 34,  111 => 30,  107 => 29,  103 => 28,  96 => 24,  92 => 23,  85 => 22,  82 => 21,  79 => 20,  76 => 19,  73 => 18,  70 => 17,  67 => 16,  65 => 15,  60 => 14,  54 => 12,  51 => 11,  45 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="affiliate-login" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   {% if success %}*/
/*   <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}</div>*/
/*   {% endif %}*/
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
/*       {{ text_description }}*/
/*       <div class="row">*/
/*         <div class="col-sm-6">*/
/*           <div class="well">*/
/*             <h2>{{ text_new_affiliate }}</h2>*/
/*             <p>{{ text_register_account }}</p>*/
/*             <a class="btn btn-primary" href="{{ register }}">{{ button_continue }}</a></div>*/
/*         </div>*/
/*         <div class="col-sm-6">*/
/*           <div class="well">*/
/*             <h2>{{ text_returning_affiliate }}</h2>*/
/*             <p><strong>{{ text_i_am_returning_affiliate }}</strong></p>*/
/*             <form action="{{ action }}" method="post" enctype="multipart/form-data">*/
/*               <div class="form-group">*/
/*                 <label class="control-label" for="input-email">{{ entry_email }}</label>*/
/*                 <input type="text" name="email" value="{{ email }}" placeholder="{{ entry_email }}" id="input-email" class="form-control" />*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="control-label" for="input-password">{{ entry_password }}</label>*/
/*                 <input type="password" name="password" value="{{ password }}" placeholder="{{ entry_password }}" id="input-password" class="form-control" />*/
/*                 <a href="{{ forgotten }}">{{ text_forgotten }}</a> </div>*/
/*               <input type="submit" value="{{ button_login }}" class="btn btn-primary" />*/
/*               {% if redirect %}*/
/*               <input type="hidden" name="redirect" value="{{ redirect }}" />*/
/*               {% endif %}*/
/*             </form>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
