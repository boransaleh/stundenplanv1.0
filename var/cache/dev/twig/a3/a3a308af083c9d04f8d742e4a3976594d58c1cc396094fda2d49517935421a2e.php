<?php

/* :mainpages:UserManagement.html.twig */
class __TwigTemplate_f0141bdd1da48759405356b5ebb72decd4ff5238c40db37afe1d50075230b2e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html.twig", ":mainpages:UserManagement.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7940d0cb8cacfa6f42f0814f42320b72269320dee78e95554af8a964cebb628 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7940d0cb8cacfa6f42f0814f42320b72269320dee78e95554af8a964cebb628->enter($__internal_f7940d0cb8cacfa6f42f0814f42320b72269320dee78e95554af8a964cebb628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":mainpages:UserManagement.html.twig"));

        $__internal_b82e409da87302c03765727dcd0c0d9c8d4ab0ba4f6ba1478cd8b5ad362b1437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b82e409da87302c03765727dcd0c0d9c8d4ab0ba4f6ba1478cd8b5ad362b1437->enter($__internal_b82e409da87302c03765727dcd0c0d9c8d4ab0ba4f6ba1478cd8b5ad362b1437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":mainpages:UserManagement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7940d0cb8cacfa6f42f0814f42320b72269320dee78e95554af8a964cebb628->leave($__internal_f7940d0cb8cacfa6f42f0814f42320b72269320dee78e95554af8a964cebb628_prof);

        
        $__internal_b82e409da87302c03765727dcd0c0d9c8d4ab0ba4f6ba1478cd8b5ad362b1437->leave($__internal_b82e409da87302c03765727dcd0c0d9c8d4ab0ba4f6ba1478cd8b5ad362b1437_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d4526bd521bf0d4c17b4892b34ccf617d1dd640287d65c20531a9a3ba28aa00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d4526bd521bf0d4c17b4892b34ccf617d1dd640287d65c20531a9a3ba28aa00->enter($__internal_8d4526bd521bf0d4c17b4892b34ccf617d1dd640287d65c20531a9a3ba28aa00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_728651e903f71dfe56bfc833e920f82e13126a2dafc7fc124a3289a394294c84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_728651e903f71dfe56bfc833e920f82e13126a2dafc7fc124a3289a394294c84->enter($__internal_728651e903f71dfe56bfc833e920f82e13126a2dafc7fc124a3289a394294c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Nutzer Verwaltung ";
        
        $__internal_728651e903f71dfe56bfc833e920f82e13126a2dafc7fc124a3289a394294c84->leave($__internal_728651e903f71dfe56bfc833e920f82e13126a2dafc7fc124a3289a394294c84_prof);

        
        $__internal_8d4526bd521bf0d4c17b4892b34ccf617d1dd640287d65c20531a9a3ba28aa00->leave($__internal_8d4526bd521bf0d4c17b4892b34ccf617d1dd640287d65c20531a9a3ba28aa00_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_861ab1d7e0c6c69fb5def11f04fadae7ebefe6ab12454f1eb2646bba5bd86bc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_861ab1d7e0c6c69fb5def11f04fadae7ebefe6ab12454f1eb2646bba5bd86bc6->enter($__internal_861ab1d7e0c6c69fb5def11f04fadae7ebefe6ab12454f1eb2646bba5bd86bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2974bf80ecb41f6b909409816f84628e5741da04ea74e80ad2d301367ca9e286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2974bf80ecb41f6b909409816f84628e5741da04ea74e80ad2d301367ca9e286->enter($__internal_2974bf80ecb41f6b909409816f84628e5741da04ea74e80ad2d301367ca9e286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"row\" >
        <div class=\"col-lg-12\">

            <div class=\"modal\" id=\"pleaseWaitDialog\" data-backdrop=\"static\" data-keyboard=\"false\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">Processing...</h5>
                        </div>
                        <div class=\"modal-body\">

                            <div class=\"progress\">
                                <div class=\"progress-bar progress-bar-striped progress-bar-animated active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"panel panel-default \">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Nutzer</h3>
                </div>
                <div class=\"panel-body \">

                    <div id=\"feedback\"></div>

                    ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["userForm"] ?? $this->getContext($context, "userForm")), 'form_start', array("attr" => array("id" => "userform", "class" => "form-group-md")));
        echo "

                    <div class=\"form-group\">
                        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["userForm"] ?? $this->getContext($context, "userForm")), "_username", array()), 'row', array("id" => "_username"));
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["userForm"] ?? $this->getContext($context, "userForm")), "_password", array()), 'row', array("id" => "_password"));
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["userForm"] ?? $this->getContext($context, "userForm")), "StandOrt", array()), 'row', array("id" => "StandOrt"));
        echo "

                    </div>

                    <div class=\"form-group\">
                        <div >
                            <div class=\"checkbox\">
                                <label>
                                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["userForm"] ?? $this->getContext($context, "userForm")), "roles", array()), 'row', array("id" => "roles"));
        echo " Administrator
                                </label>
                            </div>
                        </div>
                    </div>


                    <div class=\"form-group\">
                        <input type=\"submit\" value=\"Hinzufügen\" class=\"btn btn-erstellen pull-right\">
                    </div>

                    ";
        // line 61
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["userForm"] ?? $this->getContext($context, "userForm")), 'form_end');
        echo "

                </div>
            </div>

        </div>

    </div>

    <script type=\"text/javascript\">

        \$(document).ready(function () {

            \$(\"#userform\").bootstrapValidator({

                submitHandler: function (validator, form, submitButton) {


                    var data = \$('#userform').serializeArray();


                    \$.ajax({
                        type: \"POST\",
                        url: \"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("save_user");
        echo "\",
                        data: data,
                        dataType: \"json\",
                        beforeSend: function () {
                            \$('#pleaseWaitDialog').modal('show');
                        },
                        complete: function () {
                            \$('#pleaseWaitDialog').modal('hide');
                        },
                        success: function (response) {
                            var table = \$('#sg-datatables-user_datatable').DataTable();
                            table.order( [[ 0, 'desc' ]] ).draw();
                            \$('#userform').bootstrapValidator('resetForm', true);
                            \$('#feedback').html('');
                        },
                        error: function (response) {
                            \$('#userform').bootstrapValidator('resetForm', true);
                            \$('#feedback').html('');
                            \$('#feedback').html('<div class=\"alert alert-danger\" role=\"alert\">Something Wrong<!!</div>');
                        }
                    });


                },fields: {

                    '_username':{

                        validators:{

                            notEmpty:{

                                message:'Bitte einen gültigen Wert eingeben'
                            },
                            emailAddress:{

                                message:'Bitte einen gültigen Wert eingeben'
                            }
                        }
                    },

                    '_password': {

                        validators:{

                            notEmpty:{

                                message:'Bitte einen gültigen Wert eingeben'
                            },
                            stringLength :{

                                min:6,
                                message:'Bitte einen gültigen Wert eingeben'
                            }
                        }
                    },

                    'StandOrt':{

                        validators:{

                            notEmpty:{

                                message:'Bitte einen gültigen Wert eingeben'
                            }
                        }

                    }


                }

            });


        });


    </script>


    <div class=\"row\" style=\"margin-bottom: 30px;\">
        <div class=\"col-lg-12\">

            <div class=\"panel panel-default \">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\"><span style=\"color: #337ab7;\">Nutzer Tabelle</span></h3>
                </div>
                <div class=\"panel-body \">

                    ";
        // line 173
        echo $this->env->getExtension('Sg\DatatablesBundle\Twig\DatatableTwigExtension')->datatablesRender($this->env, ($context["datatable"] ?? $this->getContext($context, "datatable")));
        echo "



                </div>
            </div>

        </div>

    </div>



";
        
        $__internal_2974bf80ecb41f6b909409816f84628e5741da04ea74e80ad2d301367ca9e286->leave($__internal_2974bf80ecb41f6b909409816f84628e5741da04ea74e80ad2d301367ca9e286_prof);

        
        $__internal_861ab1d7e0c6c69fb5def11f04fadae7ebefe6ab12454f1eb2646bba5bd86bc6->leave($__internal_861ab1d7e0c6c69fb5def11f04fadae7ebefe6ab12454f1eb2646bba5bd86bc6_prof);

    }

    public function getTemplateName()
    {
        return ":mainpages:UserManagement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 173,  166 => 84,  140 => 61,  126 => 50,  115 => 42,  109 => 39,  103 => 36,  97 => 33,  68 => 6,  59 => 5,  41 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'main.html.twig' %}{% block title %} Nutzer Verwaltung {% endblock %}{% block body %}    <div class=\"row\" >        <div class=\"col-lg-12\">            <div class=\"modal\" id=\"pleaseWaitDialog\" data-backdrop=\"static\" data-keyboard=\"false\">                <div class=\"modal-dialog\" role=\"document\">                    <div class=\"modal-content\">                        <div class=\"modal-header\">                            <h5 class=\"modal-title\">Processing...</h5>                        </div>                        <div class=\"modal-body\">                            <div class=\"progress\">                                <div class=\"progress-bar progress-bar-striped progress-bar-animated active\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%\"></div>                            </div>                        </div>                    </div>                </div>            </div>            <div class=\"panel panel-default \">                <div class=\"panel-heading\">                    <h3 class=\"panel-title\">Nutzer</h3>                </div>                <div class=\"panel-body \">                    <div id=\"feedback\"></div>                    {{ form_start(userForm,{'attr':{'id': 'userform','class':'form-group-md'}}) }}                    <div class=\"form-group\">                        {{ form_row(userForm._username,{'id': '_username'}) }}                    </div>                    <div class=\"form-group\">                        {{ form_row(userForm._password,{'id': '_password'}) }}                    </div>                    <div class=\"form-group\">                        {{ form_row(userForm.StandOrt,{'id': 'StandOrt'}) }}                    </div>                    <div class=\"form-group\">                        <div >                            <div class=\"checkbox\">                                <label>                                    {{ form_row(userForm.roles,{'id': 'roles'}) }} Administrator                                </label>                            </div>                        </div>                    </div>                    <div class=\"form-group\">                        <input type=\"submit\" value=\"Hinzufügen\" class=\"btn btn-erstellen pull-right\">                    </div>                    {{ form_end(userForm) }}                </div>            </div>        </div>    </div>    <script type=\"text/javascript\">        \$(document).ready(function () {            \$(\"#userform\").bootstrapValidator({                submitHandler: function (validator, form, submitButton) {                    var data = \$('#userform').serializeArray();                    \$.ajax({                        type: \"POST\",                        url: \"{{ path('save_user') }}\",                        data: data,                        dataType: \"json\",                        beforeSend: function () {                            \$('#pleaseWaitDialog').modal('show');                        },                        complete: function () {                            \$('#pleaseWaitDialog').modal('hide');                        },                        success: function (response) {                            var table = \$('#sg-datatables-user_datatable').DataTable();                            table.order( [[ 0, 'desc' ]] ).draw();                            \$('#userform').bootstrapValidator('resetForm', true);                            \$('#feedback').html('');                        },                        error: function (response) {                            \$('#userform').bootstrapValidator('resetForm', true);                            \$('#feedback').html('');                            \$('#feedback').html('<div class=\"alert alert-danger\" role=\"alert\">Something Wrong<!!</div>');                        }                    });                },fields: {                    '_username':{                        validators:{                            notEmpty:{                                message:'Bitte einen gültigen Wert eingeben'                            },                            emailAddress:{                                message:'Bitte einen gültigen Wert eingeben'                            }                        }                    },                    '_password': {                        validators:{                            notEmpty:{                                message:'Bitte einen gültigen Wert eingeben'                            },                            stringLength :{                                min:6,                                message:'Bitte einen gültigen Wert eingeben'                            }                        }                    },                    'StandOrt':{                        validators:{                            notEmpty:{                                message:'Bitte einen gültigen Wert eingeben'                            }                        }                    }                }            });        });    </script>    <div class=\"row\" style=\"margin-bottom: 30px;\">        <div class=\"col-lg-12\">            <div class=\"panel panel-default \">                <div class=\"panel-heading\">                    <h3 class=\"panel-title\"><span style=\"color: #337ab7;\">Nutzer Tabelle</span></h3>                </div>                <div class=\"panel-body \">                    {{ sg_datatables_render(datatable) }}                </div>            </div>        </div>    </div>{% endblock %}", ":mainpages:UserManagement.html.twig", "C:\\Apache24\\htdocs\\app/Resources\\views/mainpages/UserManagement.html.twig");
    }
}
